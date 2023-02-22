@extends('layouts.ecommerce')

@section('left','Product')
@section('headleft')
<a href="{{route('product.create')}}" class="new-user">Add Product</a>
@endsection
@section('content')



<table class="user_table">
    <tr>
        <th>Id</th>
        <th>Status</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
    @foreach($productdata as $_product)
    <tr>
            <td>{{$_product->id}}</td>
            <td>{{$_product->status}}</td>
            <td>{{$_product->name}}</td>
            <td>{{$_product->price}}</td>
            <td>
                @foreach($_product->categories as $_cat)
                    <span>{{ $_cat->category_name }} | </span>
                @endforeach
            </td>
            <td>
            <form method="post" action="{{route('product.destroy',$_product->id)}}">
        <a class="edit-data" href="{{route('product.edit',$_product->id)}}">Edit</a>
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