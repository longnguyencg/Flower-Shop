@extends('layouts.shop.master')
@section('content')
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single breadcrumb_top">
                        <ul id="breadcrumbs">
                            <li><a href="{{ route('showList') }}"><i class="fa fa-home"></i>Home</a></li>
                            <li><span>I</span></li>
                            <li>{{ $product->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_single_view_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="my_tabs">
                        <div class="tab-content tab_content_style">
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="blog_tabs">
                                    <a class="fancybox" href="{{asset('storage/images/products/'.$product->image)}}"
                                       data-fancybox-group="gallery" title="Hoa huong duong"><img style="width: 400px"
                                                                                                  src="{{asset('storage/images/products/'.$product->image)}}"
                                                                                                  alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="blog_product_details">
                        <h2 class="blog_heading"><a href="">{{ $product->name }}</a></h2>
                        <div class="product_rating">
                            @if($avgStar!=0)
                                @for($i=0;$i<$avgStar;$i++)<i class="fa fa-star"></i>  @endfor
                                @for($i=0;$i<4-$avgStar;$i++)<i class="fa fa-star-o"></i>  @endfor
                            @else No rate
                            @endif
                        </div>
                        <div class="product_rating">
                            {{ $reviews->count() }} Review(s)
                        </div>
                        <div class="pricing_rate">
                            <p class="stack">Availability:<span class="in-stock"> In stock</span></p>
                            <p class="rating_dollor rating_margin"><span
                                    class="rating_value_two">${{ $product->price }}</span></p>
                            <p class="blog_texts">cerat a felis. Suspendisse aliquet urna pretium eros convallis
                                interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus.
                                Mauris vel tellus non nunc mattis lobortis.</p>
                        </div>
                        <div class="product_blog_button">
                            <div class="cart_blog_details blog_icon_border">
                                <a href="" target="blank"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <div class="cart_blog_details blog_icon_border">
                                <a href="" target="expand"><i class="fa fa-retweet"></i></a>
                            </div>
                            <div class="cart_blog_details blog_icon_border">
                                <a href="" target="heart"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product_options_area">
                        <div class="product_options_selection">
                            <ul id="options_selection">
                                <li><span class="star_color">*</span><span class="Product_color">color</span> <span
                                        class="required">*Required Fields</span></li>
                                <li>
                                    <select>
                                        <option value="" selected="selected">-- Please Select --</option>
                                        <option value="">black +$2.00</option>
                                        <option value="">blue +$1.00</option>
                                        <option value="">yellow +$1.00</option>
                                    </select>
                                </li>
                                <li><span class="star_color">*</span><span class="Product_color">size</span></li>
                                <li>
                                    <select>
                                        <option value="" selected="selected">-- Please Select --</option>
                                        <option value="">L +$2.00</option>
                                        <option value="">M +$1.00</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="cart_blog_item">
                            <div class="add-to-cart">
                                <input type="text" title="Qty" value="1" class="qty"/>
                                <button type="button" title="Add to Cart" class="cart_button"><span>Add to Cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product_collateral_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="my_tabs_description">
                        <ul class="tab_style">
                            <li class="active">
                                <a data-toggle="tab" href="#tab-1">Product Description</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-2">Reviews</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-3">Product Tags</a>
                            </li>
                        </ul>
                        <div class="tab-content tab_content_style">
                            <div id="tab-1" class="tab-pane fade in active">
                                <div class="product_description">
                                    {!! $product->description  !!}
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade">
                                <form method="post" action="{{ route('shop.store') }}">
                                    @csrf
                                    <div class="product_description">
                                        <div class="fieldsets">
                                            <h3>You're reviewing: <span>{{ $product->name }}</span></h3>
                                            <h4>How do you rate this product?*</h4>
                                            <div class="start_tab_pricing_area">
                                                <fieldset>
                                                    <div class="form-group" style="max-width: 100px">
                                                        <label>Star</label>
                                                        <select class="form-control" name="star">
                                                            <option><i class="fa fa-star">1</i></option>
                                                            <option><i class="fa fa-star">2</i></option>
                                                            <option><i class="fa fa-star">3</i></option>
                                                            <option><i class="fa fa-star">4</i></option>
                                                            <option><i class="fa fa-star">5</i></option>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="rating_contact">
                                                <ul id="review_contact">
                                                    <li><input type="number" name="user"
                                                               class="input-text required-entry"
                                                               value="{{ \Illuminate\Support\Facades\Auth::user()->id }}"
                                                               hidden></li>
                                                    <li><input type="number" name="product"
                                                               class="input-text required-entry"
                                                               value="{{ $product->id }}" hidden></li>
                                                    <li>Review<span>*</span></li>
                                                    <li><textarea name="review" cols="5" rows="3"
                                                                  class="required-entry"></textarea></li>
                                                </ul>
                                            </div>
                                            <div class="review_button">
                                                <button type="submit" title="Submit Review" class="button">Submit Review
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div style="margin-top: 20px">
                                    @forelse($reviews as $review)
                                        <i class="fa fa-user"></i> {{ $review->user->name }} rated
                                        with @for($i=0;$i<$review->star;$i++)<i class="fa fa-star"
                                                                                style="color: orange"></i>  @endfor
                                        @for($i=0;$i<5-$review->star;$i++)<i class="fa fa-star-o" style="color: orange"></i>  @endfor
                                        <br>
                                        {{ $review->review }}
                                        <hr>
                                    @empty
                                        No review about this product
                                    @endforelse
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade">
                                <div class="product_description">
                                    <div class="product_tag_area">
                                        <h2>Other people marked this product with these tags:</h2>
                                        <ul id="product_tags">
                                            <li><a href="#">fashion</a> <span>(1)</span></li>
                                            <li><a href="#">Nunc</a> <span>(1)</span></li>
                                            <li><a href="#">facilisis</a> <span>(1)</span></li>
                                        </ul>
                                        <div class="add_tags">
                                            <h2>Add Your Tags:</h2>
                                            <input type="text" name="nickname" class="input-text required-entry"
                                                   value="">
                                        </div>
                                        <div class="review_button product_tag_add">
                                            <button type="submit" title="Submit Review" class="button">Add Tags</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
