@extends('layouts.ecommerce')

@section('left','Product')
@section('headleft')
<a href="{{route('category.create')}}" class="new-user">Add Category</a>
@endsection
@section('content')

    <table class="user_table">
    <tr>
        <th>Id</th>
        <th>parent_category</th>
        <th>category_name</th>
        <th>status</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    
    @foreach($categorydata as $_category)
    <tr>
        <td>{{$_category->id}}</td>
        <td>
				{{App\Models\Category::getCategoryName($_category->parent_category)}}
			</td>
        <td>{{$_category->category_name}}</td>
        <td>{{$_category->status===1?'Active':'Deactivate'}}</td>
        <td><img src="{{$_category->getFirstMediaUrl('thumbnail_image', 'thumb')}}" / width="100px"></td>
        <td>
        <form method="post" action="{{route('category.destroy',$_category->id)}}">
            <a class="edit-data" href="{{route('category.edit',$_category->id)}}">Edit</a>
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
