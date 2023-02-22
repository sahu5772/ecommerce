@extends('layouts.ecommerce')

@section('left','Product')
@section('headleft')
<a href="{{route('user.create')}}" class="new-user">New User</a>
@endsection
@section('content')


    <table class="user_table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Role</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    
    @foreach($userData as $_user)
    <tr>
        <td>{{$_user->id}}</td>
        <td>{{$_user->name}}</td>
        <td>
				@if($_user->role_id>0)
					{{$_user->role->name}}
				@endif
			</td>
        <td>{{$_user->email}}</td>
        <td>{{$_user->password}}</td>
        <td>
        <form method="post" action="{{route('user.destroy',$_user->id)}}">
       <a class="edit-data" href="{{route('user.edit',$_user->id)}}">Edit</a>
                        @method('DELETE')
                        @csrf
                            <button  onclick="return confirm('Are you sure?')" class="delete-data">Delete</button>
                            </form>
                        </td>
        </td>
    </tr>
    @endforeach
    </table>
@endsection

