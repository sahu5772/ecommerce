<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasPermissionTo('permission_index')){ 
            $perData = Permission::all();
            return view('Admin/Permission.index', compact('perData'));
        } else {
            return redirect('admin/dashboard');
        };
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/Permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $new_permission = $request->all();
        // echo "<pre>";
        // print_r($new_cate);
        // die;
        $insert = Permission::create($new_permission);
        return redirect('admin/permission')->withsuccess('Permission created successfully.....' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        $edit = $permission;
        // echo "<pre>";
        // print_r($edit);
        // die;
        return view('Admin/Permission.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permission $permission)
    {
        $edit_permission = $request->all();
        $permission->update($edit_permission);
        return redirect()->route('permission.index')->withsuccess('permission edited successfully.....' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        
        return redirect()->back()->withsuccess('Permission deleted successfully.....' );
    }
}
