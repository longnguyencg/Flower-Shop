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
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="catagory_banner">
                                <img src="img/banner/category.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="my_tabs">
                        <ul class="tab_style">
                            <li class="active"><a data-toggle="tab" href="#tab1"><span><i
                                            class="fa fa-th"></i></span></a></li>
                            <li><a data-toggle="tab" href="#tab2"><span><i class="fa fa-th-list"></i></span></a></li>
                        </ul>
                        <div class="limiter">
                            <label>Show</label>
                            <select>
                                <option value="">9</option>
                                <option value="" selected="selected">12</option>
                                <option value="">24</option>
                                <option value="">36</option>
                            </select> per page
                        </div>
                        <div class="sort-by">
                            <label>Sort By</label>
                            <select>
                                <option value="" selected="selected">Position</option>
                                <option value="">Name</option>
                                <option value="">Price</option>
                            </select>
                            <a href=""><i class="fa fa-long-arrow-up"></i></a>
                        </div>

                        <div class="tab-content tab_content_style">
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="product_list">
                                                <div class="single_product repomsive_768">
                                                    <a href="product.html" target="main"><img style="width: 300px; height: 300px"
                                                            src="{{asset('storage/images/products/'.$product->image)}}"
                                                            alt=""/></a>
                                                    <div class="product_details">
                                                        <h2>{{$product->name}}</h2>
                                                        <p><span class="regular_price">$ {{number_format($product->price)}}</span><span
                                                                class="popular_price">$ {{number_format($product->sale)}}</span></p>
                                                    </div>
                                                    <div class="product_detail">
                                                        <div class="star_icon">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product_button">
                                                            <div class="cart_details">
                                                                <a href="cart.html" target="blank">Add to cart</a>
                                                            </div>
                                                            <div class="cart_details">
                                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                            </div>
                                                            <div class="cart_details">
                                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
