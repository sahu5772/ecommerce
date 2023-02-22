@extends('layouts.ecommerce')

@section('left','Product')
@section('headleft')
<a href="{{route('role.create')}}" class="new-user">Add Role</a>
@endsection
@section('content')


    <table class="user_table">
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>guard_name</th>
        <th>permission</th>
        <th>Action</th>
    </tr>
        @foreach($roleData as $_role)
            <tr>
                <td>{{$_role->id}}</td>
                <td>{{$_role->name}}</td>
                <td>{{$_role->guard_name}}</td>
                <td>
                @foreach($_role->permissions as $_permission)
                    {{$_permission->name}}
                @endforeach  
                </td>
                <td>
                <form method="post" action="{{route('role.destroy',$_role->id)}}">
            <a class="edit-data" href="{{route('role.edit',$_role->id)}}">Edit</a>
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
