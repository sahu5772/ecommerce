<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title> login </title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style media="screen">


    </style>
</head>
<body>
    <section class="back">
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form class="login"action="{{route('login.store')}}" method="post">
            @csrf
        
            <h3>Login Here</h3>
            @if(Session::has('success'))
            <div class="success"> {{Session::get('success')}}</div>
            @endif
            @if(Session::has('error'))
            <div class="error"> {{Session::get('error')}}</div>
            @endif
            <label for="username">Username</label>
            <input type="email" placeholder="Email or Phone" id="username" name="email">
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

            <button>Log In</button>
            <div class="social">
            <a class="go" href="">forgot Password</a>
            
            </div>
        </form>
    </section>
   
</body>
</html>
