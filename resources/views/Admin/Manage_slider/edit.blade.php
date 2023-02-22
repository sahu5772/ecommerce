
@extends('layouts.ecommerce')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

            <form class="new" action="{{route('slider.update', $edit->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('put')
            <h3>Add product</h3>
            <label for="status">Status</label>
                <select class="selct" name="status">
                    <option value="1" {{$edit->status===1?'selected':''}}>Active</option>
                    <option value="0" {{$edit->status===0?'selected':''}}>Deactive</option>
                </select>
                <label for="title">title</label>
                <input type="text" placeholder="title" name="title" value="{{$edit->title}}">
                
                <label for="image">image</label>
                <input type="file" placeholder="image" name="image" value="{{$edit->image}}">

                <label for="description">Description</label>
                <textarea name="description" id="">{{$edit->description}}</textarea>

                <label for="alt_tag">Alt Tag</label>
                <input type="text" placeholder="alt_tag" name="alt_tag" value="{{$edit->alt_tag}}">

                <label for="meta_title">meta_title</label>
                <input type="text" placeholder="meta_title" name="meta_title" value="{{$edit->meta_title}}">

                <label for="meta_tag">meta_tag</label>
                <input type="text" placeholder="meta_tag" name="meta_tag" value="{{$edit->meta_tag}}">

                <label for="meta_description">meta_description</label>
                <input type="text" placeholder="meta_description" name="meta_description" value="{{$edit->meta_description}}">
                
                
                 <button class="submit" type="submit">Submit</button>
</form>
<script>
    CKEDITOR.replace( 'description' );
</script>

@endsection