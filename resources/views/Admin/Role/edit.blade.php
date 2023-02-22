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
        <span class="dashboard">Manage Role</span>
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

    <!-- <div class="back">
        <div class="shape" style="background : red; width: 93%; left: 130px;"></div>
        <div class="shape" style="background: lightgreen; "></div>
    </div> -->

            <form class="new" action="{{route('role.update', $edit->id)}}" method="post">
                @csrf
                @method('put')
                <h3>New role</h3>
                <label for="name">name</label>
                <input type="text" placeholder="name" id="name" name="name" value="{{$edit->name}}">
                
                <label for="guard_name">guard_name</label>
                <input type="text" placeholder="guard_name" id="guard_name" name="guard_name" value="{{$edit->guard_name}}">

                <select name="permission[]" multiple style="background: blue;">
                    @foreach($permissions as $_permission)
                        <option value="{{$_permission->id}}"<?=($edit->hasPermissionTo($_permission->name))?'selected':'' ?>>{{$_permission->name}}</option>
                    @endforeach
                </select>
                <span class="text-danger">
                    @error('username')
                        {{$message}}
                    @enderror
                </span> 


                <button type="submit" >submit</button>
                
            </form>
    
</body>
</html>
