<div class="header_area_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Search area -->
                <form action="{{route('product.search')}}" name="myForm" method="GET">
                    <div class="search_box">
                        <input name="key" id="itp" class="input_text" type="text" placeholder="Search"/>
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
