@extends('layouts.ecommerce')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

<form  class="cate" action="{{route('product.update',$edit->id)}}" method="post">
        @csrf
        @method('put')
            <h3>Add product</h3>
            <label for="status">Status</label>
                <select class="selct" name="status">
                    <option value="1" {{$edit->status===1?'selected':''}}>Active</option>
                    <option value="0" {{$edit->status===0?'selected':''}}>Deactive</option>
                </select>
                <label for="include_in_menu">Name</label>
                <input type="text" placeholder="name" name="name"value="{{$edit->name}}">
                <label for="include_in_menu">Sku</label>
                <input type="text" placeholder="Sku" name="sku"value="{{$edit->sku}}">
                <label for="include_in_menu">Price</label>
                <input type="text" placeholder="Price" name="price"value="{{$edit->price}}">
                <label for="include_in_menu">Special_Price</label>
                <input type="text" placeholder="Special_Price" name="special_price"value="{{$edit->special_price}}">
                <label for="include_in_menu">Special_Price_From</label>
                <input type="date" placeholder="Special_Price_From" name="special_price_from"value="{{$edit->special_price_from}}">
                <label for="include_in_menu">Special_Price_TO</label>
                <input type="date" placeholder="Special_Price_to" name="special_price_to"value="{{$edit->special_price_to}}">
                <label for="category">Category</label>
                <?php
                        $cIds = $edit->categories->pluck('id')->toArray();
                        // print_r($cIds);
                    ?>
                <select name="category[]" multiple id="permission">
                @foreach($CategoryData as $_category)
                        <option value="{{$_category->id}}" {{in_array($_category->id, $cIds)?'selected':''}}>{{$_category->category_name}}</option>
                    @endforeach
                </select>
                <label for="include_in_menu">Short_Description</label>
                <input type="text" placeholder="Short_Description" name="short_description"value="{{$edit->short_description}}">
                <label for="include_in_menu">Description</label>
                <textarea name="description" id="">{{$edit->description}}</textarea>
                <input type="text" placeholder="url_key" name="url_key" value="{{$edit->url_key}}">
                 <button class="submit" type="submit">Submit</button>
        </form>
        </section>
<script>
    CKEDITOR.replace( 'description' );
</script>

@endsection