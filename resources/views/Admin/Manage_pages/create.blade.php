
@extends('layouts.ecommerce')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

            <form class="new" action="{{route('page.store')}}" method="post">
        @csrf
            <h3>Add product</h3>
            <label for="status">Status</label>
                <select class="selct" name="status">
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                </select>

                <label for="title">title</label>
                <input type="text" placeholder="title" name="title">

                <label for="menu_title">menu_title</label>
                <input type="text" placeholder="menu_title" name="menu_title">

                <label for="show_in_navigation">show_in_navigation</label>
                <select class="selct" name="show_in_navigation">
                    <option value="1">YES</option>
                    <option value="0">NO</option>
                </select>

                <label for="show_in_footer">show_in_footer</label>
                <select class="selct" name="show_in_footer">
                    <option value="1">YES</option>
                    <option value="0">NO</option>
                </select>

                <label for="Description">Description</label>
                <textarea name="description" id=""></textarea>

                <input type="text" placeholder="url_key" name="url_key">

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