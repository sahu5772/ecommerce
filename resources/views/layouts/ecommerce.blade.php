<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/ecommerce.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('css/user_index.css') }}">
     <link rel="stylesheet" href="{{ asset('css/new-user.css') }}">
     <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

     @yield('css')
   </head>
   <style>

   </style>
<body>
      @include('includes/admin.navigation')
     
      @include('includes/admin.header')
          <section class="home-sect">
                
                  @yield('headleft')
                
                @if(Session::has('success'))
                  <div class="success"> {{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('error'))
                  <div class="error"> {{Session::get('error')}}</div>
                @endif
            
      </section>
      <section class="home-sec">
      @yield('content')
      </section>

</body>
<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
</html>

