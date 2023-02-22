@extends('layouts.ecommerce')

@section('left','Product')
@section('headleft')
<a href="{{route('slider.create')}}" class="new-user">New Slider</a>
@endsection
@section('content')


    <table class="user_table">
    <tr>
        <th>Id</th>
        <th>status</th>
        <th>title</th>
        <th>image</th>
        <th>alt_tag</th>
        <th>meta_tag</th>
        <th>Action</th>
    </tr>
    @foreach($sliderData as $_slider)
    <tr>
        <td>{{$_slider->id}}</td>
        <td>{{$_slider->status}}</td>
        <td>{{$_slider->title}}</td>
        <td><img src="{{$_slider->getFirstMediaUrl('image', 'thumb')}}" / width="100px"></td>

        <td>{{$_slider->alt_tag}}</td>
        <td>{{$_slider->meta_tag}}</td>
        <td>
        <form method="post" action="{{route('slider.destroy',$_slider->id)}}">
       <a class="edit-data" href="{{route('slider.edit',$_slider->id)}}">Edit</a>
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
