@extends('layouts.shop.master')
@section('content')
    <!--End Header Top area -->
    <!--Start Main Menu area -->
    <!--End Main Menu area -->
    <!--Start blog list area -->
{{--    @include('layouts.shop.weather')--}}
    <div class="blog_post_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="blog_right_sidebar">
                        <h2 class="sp_module_title"><span>{{__('language.Newsletter')}}</span></h2>
                        <div class="sub_area">
                            <form action="#">
                                <input type="text" placeholder="E-mail">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                        <div class="latest_posts">
                            <h3 class="sp_module_title sp_module_title_rv"><span>{{__('language.Latest_Posts')}}</span>
                            </h3>
                            <div class="single_l_post">
                                <a href="#">{{__('language.Images')}}</a>
                                <p>{{__('language.23_May_2015')}}</p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">Video</a>
                                <p>{{__('language.23_May_2015')}}</p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">{{__('language.Jerky_shank_chicken_boudin')}}</a>
                                <p>2 Jun 2015</p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">{{__('language.Nirob')}}</a>
                                <p>20 Oct 2015</p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">{{__('language.Salim')}}</a>
                                <p>6 Sept 2015</p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">{{__('language.shank_chicken_oudin')}}</a>
                                <p>7 Sept 2015</p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">{{__('language.Parvez')}}</a>
                                <p>8 Sept 2015</p>
                            </div>
                        </div>
                        <div class="add_r_sidebar">
                            <p class="banner_block"><a href="#"><img alt="" src="{{asset('img/banner/3.jpg')}}"></a></p>
                        </div>
                    </div>
                </div>
                <div class="pagination_wrapper">
                    <ul class="pagination">
                        <li class="active"><a>1</a></li>
                        <li><a class="" href="#" title="2">2</a></li>
                        <li><a class="" href="#" title="3">3</a></li>
                        <li><a class="next" href="#" title="»">»</a></li>
                        <li><a class="" href="#" title="End">{{__('language.End')}}</a></li>
                    </ul>


                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="breadcrumb-single blog_top_area">
                            <ul id="breadcrumbs">
                                <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                                <li><span>Ι</span></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                        @foreach($posts as $post)
                            <div class="single_blog_area">
                                <img src="{{asset('storage/images/posts/'.$post->image)}}" alt=""/>
                            </div>
                            <div class="blog_details_area">
                                <i class="fa fa-picture-o"></i>
                                <div class="blog_details_list">
                                    <ul class="blog_author">
                                        <li><i class="fa fa-folder-open-o"></i> <a href="">blog</a></li>
                                        <li><i class="fa fa-user"></i> {{$post->user->name}}</li>
                                        <li><i class="fa fa-eye"></i> Hits: 256</li>
                                        <li>
                                            <div class="star_blog">
                                                Rating:
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog_info_details">
                                    <h2><a class="blog_info_heading" href="#">{{$post->title}}</a></h2>
                                    <p>{!! $post->description !!}</p>
                                    <a class="readmore_link" href="{{route('singleBlog',$post->id)}}"
                                       title="{{$post->title}}">Read more ...</a>
                                    <a class="comments_link" href="#" title="1 comment">1 comment</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
