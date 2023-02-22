
@extends('layouts.ecommerce')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

            <form class="new" action="{{route('product.store')}}" method="post">
        @csrf
            <h3>Add product</h3>
            <label for="status">Status</label>
                <select class="selct" name="status">
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                </select>
                <label for="include_in_menu">Name</label>
                <input type="text" placeholder="name" name="name">
                <label for="include_in_menu">Sku</label>
                <input type="text" placeholder="Sku" name="sku">
                <label for="include_in_menu">Price</label>
                <input type="text" placeholder="Price" name="price">
                <label for="include_in_menu">Special_Price</label>
                <input type="text" placeholder="Special_Price" name="special_price">
                <label for="include_in_menu">Special_Price_From</label>
                <input type="date" placeholder="Special_Price_From" name="special_price_from">
                <label for="include_in_menu">Special_Price_TO</label>
                <input type="date" placeholder="Special_Price_to" name="special_price_to">
                <select name="category[]" multiple id="permission">
                       @foreach($CategoryData as $_Cdata)
                        <option value="{{$_Cdata->id}}">{{$_Cdata->category_name }}</option>
                    @endforeach
                </select>
                <label for="include_in_menu">Short_Description</label>
                <input type="text" placeholder="Short_Description" name="short_description">
                <label for="include_in_menu">Description</label>
                <textarea name="description" id=""></textarea>
                <input type="text" placeholder="url_key" name="url_key">
                 <button class="submit" type="submit">Submit</button>
</form>
<script>
    CKEDITOR.replace( 'description' );
</script>

@endsection