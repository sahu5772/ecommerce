@extends('layouts.ecommerce')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')

        <form class="new" action="{{route('category.store')}}" enctype="multipart/form-data" method="post">
        @csrf
            <h3>Add Category</h3>

            <label for="Category">Parent category</label>
                <select name="parent_category" style="background: blue;"> 
                    <option value="0">--Select Parent Category--</option>
                    @foreach($categorydata as $_cat)
                        <option value="{{$_cat->id}}">{{$_cat->category_name}}</option>
                    @endforeach
                </select>



            <div>
                <input type="text" placeholder="category_name" name="category_name">
            </div>
            <div class="slt-box">
            
                <label for="status">Status</label>
                <select class="selct" name="status">
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                </select>
            </div>
            <div class="slt-box">
                <label for="include_in_menu">include_in_menu</label>
                <select class="selct" name="include_in_menu">
                    <option value="1">YES</option>
                    <option value="0">NO</option>
                </select>
            </div>
            <div class="img-box">
                <label for="thumbnail_image">Thumbnail_Image</label>
                <input class="img-inpt" type="file" placeholder="thumbnail_image" name="thumbnail_image">
            </div>
            <div>
                <!-- <input type="text" placeholder="description" name="description"> -->
                <textarea name="description" id=""></textarea>

            </div>
            <div>
                <input type="text" placeholder="url_key" name="url_key">
            </div>
            <div>
                <input type="text" placeholder="meta_title" name="meta_title">
            </div>
            <div>
                <input type="text" placeholder="meta_keyword" name="meta_keyword">
            </div>

            <div>
                <input type="text" placeholder="meta_description" name="meta_desc">
            </div>
            <button id="btn" class="create_button" type="submit">Submit</button>
        </form>
        </form>

<script>
    CKEDITOR.replace( 'description' );
</script>

@endsection



















    
<!--  
   
            form {
	/* text-align: center; */
	/* width: 100%; */
	float: right;
	padding-right: 195px;
}
input {
	padding: 6px;
	margin-bottom: 10px;
}
.create_button {
	padding: 7px 40px;
	background-color: black;
	color: white;
	border: none;
	margin-bottom: 10px;
} -->






