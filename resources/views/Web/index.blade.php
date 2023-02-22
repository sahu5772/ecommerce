@extends('layouts.web')
@section('content')
<div class="banner">
    <div class="banner-img">
        <div class="owl-carousel owl-theme">
            @foreach($sliderdata as $_slider)
                     <!-- <img src="{{asset('img/banner.jpg')}}" alt="banner">
                    <img src="{{asset('img/banner.jpg')}}" alt="banner"> -->
                     <!-- {{$_slider->thumbnail_image}} -->
                     <!-- <img src="asset('public/img.$_slider->thumbnail_image)"> -->
                     <img src="{{$_slider->getFirstMediaUrl('image', 'thumb')}}">
            @endforeach   
        </div>
    </div>
</div>
<div class="bedroom_tab">
    <div class="container">
        <div class="otherlinks neq_link">
            <ul>
                <li>
                    <div class="cons-icon">
                        <a href="#">
                            <img src="{{asset('img/double_bed.png')}}" alt="double bed">
                            <p>Double Bed</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="cons-icon">
                        <a href="#">
                            <img src="{{asset('img/singlebed.png')}}" alt="double bed">
                            <p>SINGLE BED</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="cons-icon">
                        <a href="#">
                            <img src="{{asset('img/wfh.png')}}" alt="double bed">
                            <p>WORK FROM HOME</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="cons-icon">
                        <a href="#">
                            <img src="{{asset('img/studytable.png')}}" alt="double bed">
                            <p>STUDY TABLE</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="cons-icon">
                        <a href="#">
                            <img src="{{asset('img/sofa.png')}}" alt="double bed">
                            <p>SOFA</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="cons-icon">
                        <a href="#">
                            <img src="{{asset('img/dining.png')}}" alt="double bed">
                            <p>DINING</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="cons-icon">
                        <a href="#">
                            <img src="{{asset('img/self.png')}}" alt="double bed">
                            <p>WARDRABE </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="cons-icon">
                        <a href="#">
                            <img src="{{asset('img/package.png')}}" alt="double bed">
                            <p>PACKAGE </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="cons-icon">
                        <a href="#">
                            <img src="{{asset('img/office-chair.png')}}" alt="double bed">
                            <p>OFFICE</p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>
<div class="latest_prod">
    <div class="sale">
        <div class="tx">
            <b>Festive Sale from</b>
            <span>Fabrento</span>
        </div>
        <div class="tx1">
        Here's a wide range of the most popular furnitures from Fabrento, offered at discounted prices.
        </div>
        <a class="lk" href="#">DISCOVER MORE</a>
    </div>
    <div class="main-box">
        <div class="rt" id="content-6" style="width: 3620px;">
            <div class="dv">
                <div class="whitebg">
                    <div class="pc">
                        <a href="#">
                            <div class="cale">
                                SALE
                            </div>
                            <div class="pc new_class">
                                <img src="{{asset('img/bed.jpg')}}" alt="bed">
                            </div>
                        </a>
                    </div>
                    <div class="bx">
                        <div class="tx1" style="height:52px">Amber Single Bed With Mattress</div>
                        <div class="pro_prize">
                            <div class="txt1_discount" style="height:16px">
                            ₹.<del>549</del>
                            </div>
                            <div class="rs">
                            ₹.499/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dv">
                <div class="whitebg">
                    <div class="pc">
                        <a href="#">
                            <div class="cale">
                                SALE
                            </div>
                            <div class="pc new_class">
                                <img src="{{asset('img/img-1.png')}}" alt="bed">
                            </div>
                        </a>
                    </div>
                    <div class="bx">
                        <div class="tx1" style="height:52px">Essen Three Seater Sofa</div>
                        <div class="pro_prize">
                            <div class="txt1_discount" style="height:16px">
                            ₹.<del>549</del>
                            </div>
                            <div class="rs">
                            ₹.499/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dv">
                <div class="whitebg">
                    <div class="pc">
                        <a href="#">
                            <div class="cale">
                                SALE
                            </div>
                            <div class="pc new_class">
                                <img src="{{asset('img/img-2.png')}}" alt="bed">
                            </div>
                        </a>
                    </div>
                    <div class="bx">
                        <div class="tx1" style="height:52px">Infinite Double Bed with Mattress, Storage and Bookshelves</div>
                        <div class="pro_prize">
                            <div class="txt1_discount" style="height:16px">
                            ₹.<del>549</del>
                            </div>
                            <div class="rs">
                            ₹.499/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dv">
                <div class="whitebg">
                    <div class="pc">
                        <a href="#">
                            <div class="cale">
                                SALE
                            </div>
                            <div class="pc new_class">
                                <img src="{{asset('img/img-3.png')}}" alt="bed">
                            </div>
                        </a>
                    </div>
                    <div class="bx">
                        <div class="tx1" style="height:52px">Avena King Size Double Bed with Mattress And Side Table</div>
                        <div class="pro_prize">
                            <div class="txt1_discount" style="height:16px">
                            ₹.<del>549</del>
                            </div>
                            <div class="rs">
                            ₹.499/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dv">
                <div class="whitebg">
                    <div class="pc">
                        <a href="#">
                            <div class="cale">
                                SALE
                            </div>
                            <div class="pc new_class">
                                <img src="{{asset('img/img-4.png')}}" alt="bed">
                            </div>
                        </a>
                    </div>
                    <div class="bx">
                        <div class="tx1" style="height:52px">Paragon 3+1+1 Sofa Set</div>
                        <div class="pro_prize">
                            <div class="txt1_discount" style="height:16px">
                            ₹.<del>549</del>
                            </div>
                            <div class="rs">
                            ₹.499/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dv">
                <div class="whitebg">
                    <div class="pc">
                        <a href="#">
                            <div class="cale">
                                SALE
                            </div>
                            <div class="pc new_class">
                                <img src="{{asset('img/img-6.png')}}" alt="bed">
                            </div>
                        </a>
                    </div>
                    <div class="bx">
                        <div class="tx1" style="height:52px">Mello Single Bed with Mattress and Side Table</div>
                        <div class="pro_prize">
                            <div class="txt1_discount" style="height:16px">
                            ₹.<del>549</del>
                            </div>
                            <div class="rs">
                            ₹.499/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dv">
                <div class="whitebg">
                    <div class="pc">
                        <a href="#">
                            <div class="cale">
                                SALE
                            </div>
                            <div class="pc new_class">
                                <img src="{{asset('img/img-7.png')}}" alt="bed">
                            </div>
                        </a>
                    </div>
                    <div class="bx">
                        <div class="tx1" style="height:52px">Amber sofa (3 Seater , Beige)</div>
                        <div class="pro_prize">
                            <div class="txt1_discount" style="height:16px">
                            ₹.<del>549</del>
                            </div>
                            <div class="rs">
                            ₹.499/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dv">
                <div class="whitebg">
                    <div class="pc">
                        <a href="#">
                            <div class="cale">
                                SALE
                            </div>
                            <div class="pc new_class">
                                <img src="{{asset('img/img-8.png')}}" alt="bed">
                            </div>
                        </a>
                    </div>
                    <div class="bx">
                        <div class="tx1" style="height:52px">Nuan 5 Seater Sofa Set With Centre Table(New)</div>
                        <div class="pro_prize">
                            <div class="txt1_discount" style="height:16px">
                            ₹.<del>549</del>
                            </div>
                            <div class="rs">
                            ₹.499/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dv">
                <div class="whitebg">
                    <div class="pc">
                        <a href="#">
                            <div class="cale">
                                SALE
                            </div>
                            <div class="pc new_class">
                                <img src="{{asset('img/img-9.png')}}" alt="bed">
                            </div>
                        </a>
                    </div>
                    <div class="bx">
                        <div class="tx1" style="height:52px">Crimson Retro Sofa</div>
                        <div class="pro_prize">
                            <div class="txt1_discount" style="height:16px">
                            ₹.<del>549</del>
                            </div>
                            <div class="rs">
                            ₹.499/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dv">
                <div class="whitebg">
                    <div class="pc">
                        <a href="#">
                            <div class="cale">
                                SALE
                            </div>
                            <div class="pc new_class">
                                <img src="{{asset('img/img-9.png')}}" alt="bed">
                            </div>
                        </a>
                    </div>
                    <div class="bx">
                        <div class="tx1" style="height:52px">Crimson Retro Sofa</div>
                        <div class="pro_prize">
                            <div class="txt1_discount" style="height:16px">
                            ₹.<del>549</del>
                            </div>
                            <div class="rs">
                            ₹.499/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="collection_range business">
    <h2>
		@foreach($blockdata as $_block)
            {{ $_block->title}}
        @endforeach    
	</h2>
    <div class="collection_box">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 ipad_img_in">
                <img class="ipad_img1" src="{{asset('img/b2b1.jpg')}}" alt="b2b1" style="width: 318px; height: 280px;">
                <img  class="ipad_img2" src="{{asset('img/STROT25.jpg')}}" alt="b2b1">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="premium_contt">
               
                
						@foreach($blockdata as $_block)
							{!! $_block->description !!}
						@endforeach 
				
                    <p>
                        <a href="#" class="lk">Discover More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why_choose">
    <div class="hychelp">
        <h3>WE PROMISE</h3>
        <div class="promise">
            <ul>
                <li>
                    <a href="#">
                        <div class="icon1"></div>    
                        Well-Crafted Packages
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon2"></div>    
                        Free Delivery & installation
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon3"></div>    
                        Free Swap
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon4"></div>    
                        Free Yearly Maintainance
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon5"></div>    
                        Easy on Pocket
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="icon6"></div>    
                        Hassle Free Payments
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="stywith_us">
    <div class="container">
        <h3>Stay With Us</h3>
        <p>Find out early about all upcoming promotions and new products releases with our newsletter.</p>
        <div class="newletter_form">
            <div class="fields">
                <form action="" class="clearfix">
                    <input id="email_newsletter" name="email_newsletter" placeholder="enter your email address here">
                    <input type="submit" class="search-part-btn newsletter" >
                </form>
            </div>
        </div>
    </div>
</div>

<div class="Footerseo_detail asdsd">
    <div class="container">
        <div class="view_more">
            <p><b>Fabrento: Furniture on rent in Delhi</b></p>
            <p>Burning a hole in your pocket just to buy furniture does not make sense anymore. With readily available <b>furniture on rent</b> in different parts of <b>Delhi</b>,<b>Fabrento</b> is one of the most trusted places to <b>rent home furniture in Delhi</b>. </p>
            <p>Life in <b>Delhi</b> is fast-paced, know how Fabrento can help you keep up!</p>
            <p>Fabrento covers every part of Delhi. No matter where you live in <b>Delhi, Fabrento</b> will reach you with its fine collection of <b>furniture on rent in Delhi</b>. With over 50 years of experience in the field of interior solutions, Fabrento knows and understands every nook and corner of Delhi. From the narrow bylanes of West Delhi, crowded marketplaces of <b>South Delhi</b>, to jam-packed university area of North Delhi and even the farther places of East Delhi, we cover it all.</p>
            <a href="#"><i class="fa fa-chevron-circle-down"></i> View More</a>
        </div>
    </div>
</div>

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
</script>
@endsection
