<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">TechZento</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="{{route('dashboard.index')}}" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li class="sub-menu">
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Manage Content</span>
          </a>
          <div class="category">
                <ul>  
                <li>
                    <a href="{{route('page.index')}}">
                      <i class='bx bx-message' ></i>
                      <span class="links_name">Manage Page</span>
                    </a>
                  </li>
                  <li>
                  <a href="{{route('slider.index')}}">
                      <i class='bx bx-message' ></i>
                      <span class="links_name">Manage Slider</span>
                    </a>
                  </li>
                  <li>
                  <a href="{{route('block.index')}}">
                      <i class='bx bx-message' ></i>
                      <span class="links_name">Manage Blocks</span>
                    </a>
                  </li>
                </ul>
              </div>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
     @can('permission')
        <li class="sub-menu">
          <a href="#">
            <i class='bx bx-like' ></i>
            <span class="links_name">Manage Permissions</span>
          </a>
          <div class="category">
                <ul>
              @can('permission_index')
                <li>
                    <a href="{{route('permission.index')}}">
                      <i class='bx bx-message' ></i>
                      <span class="links_name">Permission</span>
                    </a>
                  </li>
              @endcan
                @can('role_index')
                  <li>
                    <a href="{{route('role.index')}}">
                      <i class='bx bx-message' ></i>
                      <span class="links_name">Role</span>
                    </a>
                  </li>
                @endcan
                </ul>
              </div>
        </li>
    @endcan
      @can('catalog')
        <li class="sub-menu">
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Manage Catalog</span>
          </a>
          <div class="category">
                <ul>
              @can('category_index')    
                <li>
                    <a href="{{route('category.index')}}">
                      <i class='bx bx-message' ></i>
                      <span class="links_name">Categories</span>
                    </a>
                  </li>
              @endcan
              @can('product_index')
                  <li>
                  <a href="{{route('product.index')}}">
                      <i class='bx bx-message' ></i>
                      <span class="links_name">Products</span>
                    </a>
                  </li>
              @endcan
                </ul>
              </div>
        </li>
      @endcan
        <li>
          <a href="{{route('user.index')}}">
            <i class='bx bx-user' ></i>
            <span class="links_name">Manage User</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="{{route('signout')}}">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>