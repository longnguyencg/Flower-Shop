<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- Basic page needs
    ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home 1 | fc flower</title>
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <!-- font awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <!-- carousel Theme CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.my_theme.css')}}">
    <!-- carousel transitions CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="{{asset('fancy-box/jquery.fancybox.css')}}">
    <!-- normalizer -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- main -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr JS -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--Start Header Top area -->
<div class="header_area_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Search area -->
                <form action="#" name="myForm">
                    <div class="search_box">
                        <input name="Name" id="itp" class="input_text" type="text" value="Search"/>
                        <button type="submit" class="btn-search">
                            <span><i class="fa fa-search"></i></span>
                        </button>
                    </div>
                </form>
                <!--End Search area -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Logo area -->
                <div class="logo">
                    <a href="{{route('showList')}}">
                        <img src="{{asset('img/logo/logo3.png')}}" alt="" />
                    </a>
                </div>
                <!--End Logo area -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Header Right Cart area -->
                <div class="account_card_area">
                    <ul id="account_nav">
                        <li><a href="#"><i class="fa fa-key"></i>Account</a>
                            <div class="account_menu_list">
                                <div class="account_single_item">
                                    <h2>Currency</h2>
                                    <ul id="account_single_nav_1">
                                        <li><a href="#">Euro</a></li>
                                        <li><a href="#">US Dollor</a></li>
                                    </ul>
                                </div>
                                <div class="account_single_item">
                                    <h2>Language</h2>
                                    <ul id="account_single_nav_2">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">France</a></li>
                                        <li><a href="#">Germany</a></li>
                                    </ul>
                                </div>
                                <div class="account_single_item">
                                    <h2>Setting</h2>
                                    <ul id="account_single_nav_3">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="">My Cart</a></li>
                                        <li><a href="">Checkout</a></li>
                                        <li><a href="#">Testimonial</a></li>
                                        <li><a href="">Blog</a></li>
                                        <li><a href="#">Log In</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{route('showCart')}}"><i class="fa fa-shopping-cart"></i>Cart <span class="cart_zero">2</span></a>
                            <div class="cart_down_area">
                                <div class="cart_single">
                                    <a href="#"><img src="{{asset('img/cart/cart-1.jpg')}}" alt="" /></a>
                                    <h2><a href="#">Pellentesque hendrerit</a> <a href="#"><span><i class="fa fa-trash"></i></span></a></h2>
                                    <p>1 x $11.00</p>
                                </div>
                                <div class="cart_single">
                                    <a href="#"><img src="{{asset('img/cart/cart-2.jpg')}}" alt="" /></a>
                                    <h2><a href="#">Pellentesque hendrerit</a> <a href="#"><span><i class="fa fa-trash"></i></span></a></h2>
                                    <p>1 x $22.00</p>
                                </div>
                                <div class="cart_shoptings">
                                    <a href="">Checkout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--End Header Right Cart area -->
            </div>
        </div>
    </div>
</div>
<!--End Header Top area -->
<!--Start Main Menu area -->
<div class="header_botttom_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--Start desktop menu area -->
                <div class="main_menu">
                    <ul id="nav_menu" class="active_cl">
                        <li><a href="{{route('showList')}}"><span class="Home">Home</span></a>
                            <div class="home_mega_menu">
                                <a href="">Home 2</a>
                                <a href="">Home 3</a>
                            </div>
                        </li>
                        <li><a href="{{route('showShop')}}"><span class="Clothings">Shop</span></a>
                            <div class="mega_menu_list">
                                <div class="single_megamenu">
                                    <h2><a href="">Learning</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>Carnation</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Daisy</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Rose</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Gladiolus</a>
                                    </div>
                                </div>
                                <div class="single_megamenu">
                                    <h2><a href="">Lighting</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>Carnation</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Daisy</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Rose</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Gladiolus</a>
                                    </div>
                                </div>
                                <div class="single_megamenu">
                                    <h2><a href="">Living Room</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>Carnation</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Daisy</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Rose</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Gladiolus</a>
                                    </div>
                                </div>
                                <div class="single_megamenu">
                                    <h2><a href="">Lamp</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>Carnation</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Daisy</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Rose</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Gladiolus</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href=""><span class="Lookbook">Lookbook</span></a>
                            <div class="look_mega_menu">
                                <div class="look_single">
                                    <h3>Rose</h3>
                                    <div class="items_list_lk">
                                        <a href=""><i class="fa fa-angle-right"></i>Yellow Rose</a>
                                        <a href=""><i class="fa fa-angle-right"></i>White Rose</a>
                                    </div>
                                </div>
                                <div class="look_single">
                                    <h3>Orchids</h3>
                                    <div class="items_list_lk">
                                        <a href=""><i class="fa fa-angle-right"></i>Orchids Samurai</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Orchids Phalaenopsis</a>
                                    </div>
                                </div>
                                <div class="look_single">
                                    <h3>Chrysanthemum</h3>
                                    <div class="items_list_lk">
                                        <a href=""><i class="fa fa-angle-right"></i>Red Chrysanthemum</a>
                                        <a href=""><i class="fa fa-angle-right"></i> Yellow Chrysanthemum</a>
                                    </div>
                                </div>
                                <div class="look_menu_img">
                                    <a href="#"><img src="{{asset('img/banner/banner-1.jpg')}}" alt="" /></a>
                                    <a href="#"><img src="{{asset('img/banner/banner-2.jpg')}}" alt="" /></a>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{route('showBlog')}}"><span class="Footwear">Blog</span></a>
                            <div class="home_mega_menu">
                                <a href="">Blog Left Sidebar</a>
                                <a href="">Blog Right Sidebar </a>
                                <a href="">Single Blog </a>
                            </div>
                        </li>
                        <li><a href=""><span class="Sales">Clothing</span></a>
                        </li>
                        <li><a href=""><span class="Accessaries">Pages</span></a>
                            <div class="home_mega_menu">
                                <a href="">About Us</a>
                                <a href="">Contact</a>
                                <a href="">Cart</a>
                                <a href="">Product</a>
                                <a href="">Checkout</a>
                                <a href="">My Account</a>
                                <a href="">Wishlist</a>
                                <a href="">404 page</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--End desktop menu area -->
            </div>
        </div>
    </div>
    <!--start Mobile Menu area -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="#">Home</a>
                                    <ul>
                                        <li><a href="">Home 2</a></li>
                                        <li><a href="">Home 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Clothings</a>
                                    <ul>
                                        <li><a href="">Learning</a>
                                            <ul>
                                                <li><a href="">Carnation</a></li>
                                                <li><a href="">Daisy</a></li>
                                                <li><a href="">Rose</a></li>
                                                <li><a href="">Gladiolus</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Lighting</a>
                                            <ul>
                                                <li><a href="">Carnation</a></li>
                                                <li><a href="">Daisy</a></li>
                                                <li><a href="">Rose</a></li>
                                                <li><a href="">Gladiolus</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Living Room</a></li>
                                        <li><a href="">Lamp</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Lookbook</a>
                                    <ul>
                                        <li><a href="">Yellow Rose</a></li>
                                        <li><a href="">White Ros</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Blog</a>
                                    <ul>
                                        <li><a href="">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Shop</a>
                                    <ul>
                                        <li><a href="">Cart</a></li>
                                        <li><a href="">Product</a></li>
                                        <li><a href="">Checkout</a></li>
                                        <li><a href="">My Account</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Pages</a>
                                    <ul>
                                        <li><a href="">About Us</a></li>
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Mobile Menu area -->
</div>
<!--End Main Menu area -->
<!-- slider-area start -->
@yield('start')
{{--Menu--}}
<!-- slider-area end -->
<!--Start Lateast Collection Top area -->
@yield('lateast-top')
{{--latest--}}
<!--End Lateast Collection Top area -->
<!--Start Lateast Collection bottom area -->
@yield('lateast-bottom')
{{--latest bottom--}}
<!--End Lateast Collection bottom area -->
<!--Start Feature area -->
@yield('feature')
{{--feature--}}

<!--End Feature area -->
<!--Start Testimonila area -->
@yield('testimonila')
{{--testimonila--}}
<!--End Testimonila area -->
<!--Start Blog area -->
@yield('blog')
{{--blog--}}
<!--End blog area -->
<!--Start Contact info area -->
@yield('contact')
{{--contact--}}
<!--End Contact info area -->
<!--Start Branding area -->
<div class="branding_area">
    <div class="container">
        <div class="row">
            <div class="carousel_branding">
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="{{asset('img/branding-image/brand1.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="{{asset('img/branding-image/brand2.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="{{asset('img/branding-image/brand3.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="{{asset('img/branding-image/brand4.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="{{asset('img/branding-image/brand1.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="{{asset('img/branding-image/brand2.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="{{asset('img/branding-image/brand3.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href=""><img src="{{asset('img/branding-image/brand4.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="{{asset('img/branding-image/brand1.jpg')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Branding area -->
<!--Start Footer area -->
<div class="footer_area home1_margin_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="feature_text feature_newsletter">
                    <h4>Newsletter</h4>
                    <p>Get the latest new and special offers</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sign_up">
                    <form action="#">
                        <input class="sign_text" type="text" placeholder="Type your email..." />
                        <button type="submit" class="sign">
                            <span>Sign Up</span>
                            <img src="{{asset('img/arrow/bkg_newsletter-1.png')}}" alt="" />
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer_menu_area">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support">
                        <h2>HELP & SUPPORT</h2>
                        <ul class="footer_menu">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="cart.html">My Cart</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support help_border">
                        <h2>MY ACCOUNT</h2>
                        <ul class="footer_menu">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="cart.html">My Cart</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support help_border">
                        <h2>HELP & SUPPORT</h2>
                        <ul class="footer_menu">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="cart.html">My Cart</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support help_border">
                        <h2>STORE INFORMATION</h2>
                        <p>My Company: <span>Your Company Name JSC 1332 Your Street, City World, US</span></p>
                        <p>Call us now: <span>(+1 223) 334 3434</span></p>
                        <p>Email: <span>info@yourcompany.com</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer_bottom_area">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copy_visa">
                        <div class="copy_right">
                            <h2>Copyright © 2016 <a href="http://freecssthemes.com/">FreeCssThemes</a>. All Rights Reserved.</h2>
                        </div>
                        <div class="visa_card">
                            <img src="{{asset('img/payment/payment.png')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Footer area -->
<!-- jquery JS -->
<script src="{{asset('js/vendor/jquery-1.11.3.min.js')}}"></script>
<!-- bootstrap JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Mobile menu JS -->
<script src="{{'js/jquery.meanmenu.js'}}"></script>
<!-- jquery.easing js -->
<script src="{{asset('js/jquery.easing.1.3.min.js')}}"></script>
<!-- knob circle js -->
<script src="{{asset('js/jquery.knob.js')}}"></script>
<!-- fancybox JS -->
<script src="{{asset('fancy-box/jquery.fancybox.pack.js')}}"></script>
<!-- price slider JS  -->
<script src="{{asset('js/price-slider.js')}}"></script>
<!-- nivo slider JS -->
<script src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>
<!-- wow JS -->
<script src="{{asset('js/wow.js')}}"></script>
<!-- nivo-plugin JS -->
<script src="{{asset('js/nivo-plugin.js')}}"></script>
<!-- scrollUp JS -->
<script src="{{asset('js/jquery.scrollUp.js')}}"></script>
<!-- carousel JS -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- plugins JS -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- main JS  -->
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
