<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/ecommerce.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('css/user_index.css') }}">
     <link rel="stylesheet" href="{{ asset('css/new-user.css') }}">
     <link rel="stylesheet" href="{{ asset('css/login.css') }}">
   </head>
   <style>

   </style>
</head>
<body>
@include('includes/admin.navigation')
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Manage User</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <span class="admin_name">Mahendra sahu</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
<section class="home-sec">
    
        <form class="new" action="{{ route('user.update', $edit->id)}}" method="post">
            @csrf
            @method('put')
            <h3>New User</h3>
            <label for="username">Username</label>
            <input type="username" value="{{$edit->name}}" placeholder="username" id="username" name="name">
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span> 

            <label for="email">email</label>
            <input type="email" value="{{$edit->email}}" placeholder="Email or Phone" id="email" name="email">

            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span> 
            <label for="Role">Role</label>
                <select name="role[]" multiple style="background: blue;"> 
                    <option value="">Select Role</option>
                    @foreach($roles as $_role)
                        <option value="{{$_role->id}}"<?=($edit->hasRole($_role->name))?'selected':'' ?> >{{$_role->name}}</option>
                    @endforeach
                </select>
            <label for="password">Password</label>
            <input type="password" value="" placeholder="Password" id="password" name="password">
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>

            <button type="submit" name="submit">submit</button>
            <div class="social">
        
            
            </div>
        </form>
</section>
   
</body>
</html>
