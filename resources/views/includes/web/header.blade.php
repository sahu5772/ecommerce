<header>
    <div class="nav">
        <div class="left">
            <div class="logo">
                <img src="{{asset('img/logo.svg')}}" alt="logo">
            </div>
            <div class="delhi">
                <a href="#">DELHI-NCR</a>
            </div>
        </div>
        <div class="middle">
        <ul class="show">
                    @foreach($categories as $_category)
                    <li>
                        <a href="/category/{{$_category->url_key}}">
                            {{ $_category->category_name}}
                        </a> 
                    </li>   
                    @endforeach         
        </ul>
        </div>
        <div class="right">
            <ul>
                <li><a href="#"><img src="{{asset('img/nav-search-icon.svg')}}" alt="search"></a></li>
                <li><a href="#"><img src="{{asset('img/nav-kart-icon.svg')}}" alt="kart"></a>
                    <div class="num">
                        <span>0</span>
                    </div>
                </li>
                <li><a href="#"><img src="{{asset('img/user-icon.svg')}}" alt="user"></a></li>
                <li><a href="#"><img src="{{asset('img/nav-menu-icon (1).svg')}}" alt="menu"></a></li>
            </ul>
        </div>
    </div>
</header>