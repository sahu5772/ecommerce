
@extends('layouts.ecommerce')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

            <form class="cate" action="{{route('permission.store')}}" method="post">
                @csrf
            
                <h3>New Permission</h3>
                <label for="name">name</label>
                <input type="text" placeholder="name" id="name" name="name">
                
                <label for="name">guard_name</label>
                <input type="text" placeholder="guard_name" id="name" name="guard_name">
                <span class="text-danger">
                    @error('username')
                        {{$message}}
                    @enderror
                </span> 


                <button type="submit" >submit</button>
                
            </form>
    
@endsection