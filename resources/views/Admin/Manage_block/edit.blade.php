
@extends('layouts.ecommerce')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

            <form class="new" action="{{route('block.update', $edit->id)}}" method="post">
        @csrf
        @method('put')
            <h3>Add Put</h3>
            <label for="status">Status</label>
                <select class="selct" name="status">
                    <option value="1" {{$edit->status===1?'selected':''}}>Active</option>
                    <option value="0" {{$edit->status===0?'selected':''}}>Deactive</option>
                </select>
                <label for="title">title</label>
                <input type="text" placeholder="title" name="title" value="{{$edit->title}}">
                <label for="use_for">use for</label>
                <select class="selct" name="use_for">
                    <option value="Home" {{$edit->use_for==='Home'?'selected':''}}>Home</option>
                    <option value="Category" {{$edit->use_for==='Category'?'selected':''}}>Category</option>
                    <option value="Product" {{$edit->use_for==='Product'?'selected':''}}>Product</option>
                </select>
                
                <label for="identifier">identifier</label>
                <input type="text" placeholder="identifier" name="identifier" value="{{$edit->identifier}}">

                <label for="Description">Description</label>
                <textarea name="description" id="">{{$edit->description}}</textarea>
                <label for="ordering">Ordering</label>
                <input type="text" placeholder="ordering" name="ordering" value="{{$edit->ordering}}">

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