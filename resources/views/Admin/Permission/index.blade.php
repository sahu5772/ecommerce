@extends('layouts.ecommerce')

@section('left','Product')
@section('headleft')
<a href="{{route('permission.create')}}" class="new-user">Add Permission</a>
@endsection
@section('content')






    <table class="user_table">
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>guard_name</th>
        <th>Action</th>
    </tr>

        @foreach($perData as $_permission)
        <tr>
            <td>{{$_permission->id}}</td>
            <td>{{$_permission->name}}</td>
            <td>{{$_permission->guard_name}}</td>
            <td>
            <form method="post" action="{{route('permission.destroy',$_permission->id)}}">
        <a class="edit-data" href="{{route('permission.edit',$_permission->id)}}">Edit</a>
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

