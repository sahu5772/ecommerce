@extends('layouts.ecommerce')

@section('left','Product')
@section('headleft')
<a href="{{route('page.create')}}" class="new-user">New Page</a>
@endsection
@section('content')


    <table class="user_table">
    <tr>
        <th>Id</th>
        <th>status</th>
        <th>title</th>
        <th>url_key</th>
        <th>meta_tag</th>
        <th>Action</th>
    </tr>
    @foreach($pageData as $_page)
    <tr>
        <td>{{$_page->id}}</td>
        <td>{{$_page->status===1?'Active':'Deactivate'}}</td>
        <td>{{$_page->title}}</td>
        <td>{{$_page->url_key}}</td>
        <td>{{$_page->meta_tag}}</td>
        <td>
        <form method="post" action="{{route('page.destroy',$_page->id)}}">
       <a class="edit-data" href="{{route('page.edit',$_page->id)}}">Edit</a>
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
