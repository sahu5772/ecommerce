
@extends('layouts.ecommerce')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

            <form class="cate" action="{{route('role.store')}}" method="post">
                @csrf
            
                <h3>New role</h3>
                <label for="name">name</label>
                <input type="text" placeholder="name" id="name" name="name">
                
                <label for="guard_name">guard_name</label>
                <input type="text" placeholder="guard_name" id="guard_name" name="guard_name">

                <label for="permission">Permission</label>
                
                <select name="permission[]" multiple style="background: white;">
                    @foreach($permissions as $_permission)
                        <option value="{{$_permission->id}}">{{$_permission->name}}</option>
                    @endforeach
                </select>

                <span class="text-danger">
                    @error('username')
                        {{$message}}
                    @enderror
                </span> 


                <button type="submit" >submit</button>
                
            </form>
@endsection