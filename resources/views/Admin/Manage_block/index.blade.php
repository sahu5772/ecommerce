@extends('layouts.ecommerce')

@section('left','Product')
@section('headleft')
<a href="{{route('block.create')}}" class="new-user">New Block</a>
@endsection
@section('content')


    <table class="user_table">
    <tr>
        <th>Id</th>
        <th>status</th>
        <th>title</th>
        <th>identifier</th>
        <th>meta_tag</th>
        <th>Action</th>
    </tr>
    @foreach($blockData as $_block)
    <tr>
        <td>{{$_block->id}}</td>
        <td>{{$_block->status}}</td>
        <td>{{$_block->title}}</td>
        <td>{{$_block->identifier}}</td>
        <td>{{$_block->meta_tag}}</td>
        <td>
        <form method="post" action="{{route('block.destroy',$_block->id)}}">
       <a class="edit-data" href="{{route('block.edit',$_block->id)}}">Edit</a>
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
