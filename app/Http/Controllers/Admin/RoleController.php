<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roleData = Role::all();
        // echo "<pre>";
        // print_r($roleData);
        // die;
        return view('Admin/Role.index', compact('roleData',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('Admin/Role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_role = $request->all();
        $role = Role::create(['name'=> $new_role['name'], 'guard_name'=> 'web']);
        // $role->givePermissionTo(1);
        foreach($new_role['permission'] as $_pId) {
            $permission = Permission::find($_pId);
            $role->givePermissionTo($permission);
            $permission->assignRole($role);
        }
        // $role = Role::create(['name' => 'writer']);
        // $permission = Permission::create(['name' => 'product_index']);

        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);

        // echo "<pre>";
        // print_r($new_role);
        // die;
        //$insert = Role::create($new_role);
        return redirect('admin/role')->withsuccess('Role created successfully.....' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {   
        $permissions = Permission::all();
        $edit = $role;
        // echo "<pre>";
        // print_r($edit);
        // die;

        return view('Admin/Role.edit', compact('edit','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        // $edit_role = $request->all();
        // $role->update($edit_role);
        $role->update($request->only('name'));
    
        $role->syncPermissions($request->get('permission'));
        return redirect()->route('role.index')->withsuccess('Role edited successfully.....' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        
        return redirect()->back()->withsuccess('Role deleted successfully.....' );
    }
}
