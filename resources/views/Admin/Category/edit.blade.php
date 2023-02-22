<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/ecommerce.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
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
        <span class="dashboard">Manage Category</span>
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

        <form class="new" action="{{route('category.update',$edit->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('put')
            <h3>Add Category</h3>
            <label for="Category">Parent category</label>
                <select name="parent_category" style="background: blue;"> 
                    <option value="0">--Select Parent Category--</option>
                    @foreach($categorydata as $_cat)
                        <option value="{{$_cat->id}}" <?=($edit->parent_category==$_cat->id)?'selected':'' ?>>{{$_cat->category_name}}</option>
                    @endforeach
                </select>

        <div>
            <input type="text" placeholder="category_name" name="category_name"  value="{{$edit->category_name}}">
        </div>
            <div class="slt-box">
            
                <label for="status">Status</label>
                <select class="selct" name="status">
                <option value="1" {{$edit->status===1?'selected':''}}>Active</option>
                <option value="0" {{$edit->status===0?'selected':''}}>Deactive</option>
                </select>
            </div>
            <div class="slt-box">
                <label for="include_in_menu">include_in_menu</label>
                <select class="selct" name="include_in_menu">
                    <option value="1"{{$edit->include_in_menu===1?'selected':''}}>YES</option>
                    <option value="0"{{$edit->include_in_menu===0?'selected':''}}>NO</option>
                </select>
            </div>
        <div>
            <input type="file" placeholder="thumbnail_image" name="thumbnail_image"  value="{{$edit->thumbnail_image}}">
        </div>
        <div>
        <textarea name="description" id="" cols="30" rows="10">{{$edit->description}}</textarea>
        </div>
        <div>
            <input type="text" placeholder="url_key" name="url_key"  value="{{$edit->url_key}}">
        </div>
        <div>
            <input type="text" placeholder="meta_title" name="meta_title"  value="{{$edit->meta_title}}">
        </div>
        <div>
            <input type="text" placeholder="meta_keyword" name="meta_keyword"  value="{{$edit->meta_keyword}}">
        </div>

        <div>
            <input type="text" placeholder="meta_description" name="meta_desc" value="{{$edit->meta_desc}}">
        </div>
            <button id="btn" class="create_button" type="submit">Submit</button>
        </form>
        

<script>
    CKEDITOR.replace( 'description' );
</script>

</body>
</html>

