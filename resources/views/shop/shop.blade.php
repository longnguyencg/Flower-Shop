@extends('layouts.shop.master')
@section('content')
    <div class="clothing_product_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="catagory_price_color">
                        <div class="catagory_area">
                            <h2>CATEGORY</h2>
                            <ul class="catagory">
                                <li><a href="#"><i class="fa fa-angle-right"></i>Carnation</a> <span>(4)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Yellow Rose</a><span>(6)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Gladiolus</a><span>(8)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Magnolia</a><span>(10)</span></li>
                            </ul>
                        </div>
                        <div class="priceing_area">
                            <h2>Price</h2>
                            <div class="info_widget">
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        <input type="submit"  value="Search"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="catagory_area">
                            <h2>COLOR</h2>
                            <ul class="catagory">
                                <li><a href="#"><i class="fa fa-angle-right"></i>BLACK</a> <span>(1)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>BLUE</a><span>(2)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>GREEN</a><span>(8)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>GREY</a><span>(4)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>RED</a><span>(8)</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>WHITE</a><span>(6)</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="popular_tag_area">
                        <div class="popular_items">
                            <h2>POPULAR TAGS</h2>
                            <ul id="single_popular">
                                <li><a href="#">Carnation</a></li>
                                <li><a href="#">Yellow Rose</a></li>
                                <li><a href="#">Orchids</a></li>
                                <li><a href="#">Gladiolus</a></li>
                                <li><a href="#">Sunflower</a></li>
                                <li><a href="#">Magnolia</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="popular_tag_area popular_tag_response">
                                <div class="popular_items">
                                    <h2>COMPARE PRODUCTS</h2>
                                    <div class="conpany_product_details">
                                        <p>You have no items to compare.</p>
                                        <a href="#"><img src="{{asset('img/banner/banner_left.jpg')}}" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="popular_tag_area">
                                <div class="popular_items">
                                    <h2>Highlights</h2>
                                </div>
                            </div>
                            <div class="clothing_carousel_list">
                                <div class="single_clothing_product">
                                    <div class="clothing_item">
                                        <img src="{{asset('img/product/pr1.png')}}" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Beauty Calla Lily Bouquety</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$13.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="{{asset('img/product/pr6.png')}}" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Special Bouquet</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$12.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="{{asset('img/product/pr8.png')}}" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Breathtaking Beauty Bouquet</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$123.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_clothing_product">
                                    <div class="clothing_item">
                                        <img src="{{asset('img/bestseller/10.jpg')}}" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Cheerful Wishes Blooming Basket</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$14.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="{{asset('img/bestseller/11_1.jpg')}}" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Nam ullamcorper vive</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$123.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="{{asset('img/bestseller/16.jpg')}}" alt="" />
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Nam ullamcorper vive</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$123.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--            sadasdasdasdas--}}
            </div>
        </div>
    </div>

@endsection
