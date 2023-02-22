<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Spatie\Permission\Models\Role;
use App\Mail\Subscribe;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userData = User::all();
        // echo "<pre>";
        // print_r($userData);
        // die;
        return view('Admin/Manage_user.index', compact('userData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('Admin/Manage_user.create', compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $newUser = $request->all();
        // echo "<pre>";
        // print_r($newUser);
        // die;

        $role = Role::find($newUser['role']);

        $newUser['password']=Hash::make($newUser['password']);
        $newUser['role_id']=implode(",",$newUser['role']);
        $email = $newUser['email'];
        Mail::to($email)->send(new Subscribe($email));
        $user = User::create($newUser);
        foreach($newUser['role'] as $_rId){
            $role = Role::find($_rId);
            $user->assignRole($role);
        }
        return redirect()->route('user.index');
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
    public function edit(User $user)
    {
        $roles = Role::all();

        $edit = $user;
        // echo "<pre>";
        // print_r($edit);
        // die;
        
        return view('Admin/Manage_user.edit', compact('edit','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $edit_user = $request->all();
        $role = Role::find($edit_user['role']);
        if($edit_user['password']){
            $edit_user['password']=Hash::make($edit_user['password']);
        }else{
            unset($edit_user['password']);
        }

        // $user->removeRole($user->roles->first());
        
        if($user->roles->pluck('name')->first()) {
            foreach($user->roles as $_rol) {
                $user->removeRole($_rol->name);
            }
        }
        $user->update($edit_user);
        
        $user->assignRole($role);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
       
        return redirect()->back();
    }
}
