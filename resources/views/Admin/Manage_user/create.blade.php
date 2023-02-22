
@extends('layouts.ecommerce')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

            <form class="new" action="{{route('user.store')}}" method="post">
                @csrf
            
                <h3>New User</h3>
                <label for="username">Username</label>
                <input type="username" placeholder="username" id="username" name="name">
                
                <label for="email">email</label>
                <input type="email" placeholder="Email or Phone" id="email" name="email">

                <span class="text-danger">
                    @error('username')
                        {{$message}}
                    @enderror
                </span> 

                <label for="password">Password</label>
                <input type="password" placeholder="Password" id="password" name="password">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>

                <label for="Role">Role</label>
                <select name="role[]" multiple style="background: blue;"> 
                    <option value="">Select Role</option>
                    @foreach($roles as $_role)
                        <option value="{{$_role->id}}">{{$_role->name}}</option>
                    @endforeach
                </select>

                <button type="submit" name="submit">submit</button>
            
            </form>
    
@endsection