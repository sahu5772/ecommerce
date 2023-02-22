
@extends('layouts.ecommerce')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

            <form class="new" action="{{route('block.store')}}" method="post">
        @csrf
            <h3>Add product</h3>
            <label for="status">Status</label>
                <select class="selct" name="status">
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                </select>

                <label for="title">title</label>
                <input type="text" placeholder="title" name="title">

                <label for="use_for">use for</label>
                <select class="selct" name="use_for">
                    <option value="Home">Home</option>
                    <option value="Category">Category</option>
                    <option value="Product">Product</option>
                </select>
                
                <label for="identifier">identifier</label>
                <input type="text" placeholder="identifier" name="identifier">

                <label for="Description">Description</label>
                <textarea name="description" id=""></textarea>
                <label for="ordering">Ordering</label>
                <input type="text" placeholder="ordering" name="ordering">

                <label for="meta_title">meta_title</label>
                <input type="text" placeholder="meta_title" name="meta_title">
                <label for="meta_tag">meta_tag</label>
                <input type="text" placeholder="meta_tag" name="meta_tag">
                <label for="meta_description">meta_description</label>
                <input type="text" placeholder="meta_description" name="meta_description">
                
                
                 <button class="submit" type="submit">Submit</button>
</form>
<script>
    CKEDITOR.replace( 'description' );
</script>

@endsection