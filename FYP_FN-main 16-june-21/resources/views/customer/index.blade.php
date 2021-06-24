<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Croydon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Croydonicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="portal/img/logo-icon.png">

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/bootstrap.min.css')}}">

    <!-- Nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/lib/custom-slider/css/nivo-slider.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('portal/lib/custom-slider/css/preview.css')}}" media="screen" />

    <!-- Fontawsome CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/font-awesome.min.css')}}">

    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/owl.carousel.css')}}">

    <!-- jquery-ui CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/jquery-ui.css')}}">

    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/meanmenu.min.css')}}">

    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/animate.css')}}">

    <!-- Animate headline CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/animate-heading.css')}}">
    <link rel="stylesheet" href="{{ asset('portal/css/reset.css')}}">

    <!-- Video CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/jquery.mb.YTPlayer.css')}}">

    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/style.css')}}">

    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/responsive.css')}}">

    <!-- modernizr JS
    ============================================ -->

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        a:hover {
            text-decoration: none !important;
        }

    </style>


</head>
<body>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v3.2'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=install_email
     page_id="908381092555176"
     theme_color="#7646ff">
</div>
<div class="as-mainwrapper">
    <div class="bg-white">
        <!-- header start -->
        <header class="header-area">
            <div class="header-top-area ptb-10 hidden-sm hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="social-icons text-center">
                                <ul>
                                    @foreach($sociallink as $social)
                                        <li><a href="{{$social->social_link}}"><i class="fa fa-{{$social->name}}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-info-area ptb-35">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="header-logo">
                                <a href="{{ url('/') }}"><img src="{{asset('portal/img/logo/1.png')}}" alt="Croydon"></a>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm hidden-xs col-sm-6 col-xs-12">
                            <div class="info">
                                <div class="info-icon">

                                </div>
                                <div class="info-text">
                                    <h4>{{$detail->phone}}</h4>
                                    <p>We are open 24/7</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm hidden-xs">
                            <div class="info">
                                <div class="info-icon">

                                </div>
                                <div class="info-text">
                                    <h4>{{$detail->email}}</h4>
                                    <p>You can e-mail us</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="search-box">
                                <img src="portal/img/icon/search.png" alt="Search Icon">
                                <form action="/customer_search">
                                    <input type="text" placeholder="Search..." name="search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainmenu-area text-center hidden-sm hidden-xs">
                <nav>
                    <div class="mainmenu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a>

                            </li>
                            <li><a href="{{ url('customer_shop_grid') }}">Categories <span><img src="portal/img/icon/hot.png" alt=""></span></a>
                                <ul class="submenu-mainmenu">
                                    @foreach($categories as $category)
                                        <li><a  href="{{ url('customer_shop_grid') }}"><i class="fa fa-circle"></i>{{$category->name}} <span> <i class="fa fa-angle-right"></i></span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li><a href="{{ url('customer_shop_grid') }}">New ARRIVIAL</a></li>
                            <li><a href="{{ url('customer_contact') }}">Contact</a></li>

                            <li><a id="myBtn" class="btn btn-dark">Track Order</a></li>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <form class="form-group alert" method="post" action="{{url('/searchOrder')}}">
                                        {{csrf_field()}}


                                        <label>Order ID</label>
                                        <div class="form-group">
                                                <input name="order_id" type="number" class="form-control" id="Order ID" placeholder="Enter Order ID">
                                        </div>


                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </form>
                                </div>

                            </div>


                            <li><a href="{{ url('customer_video_show') }}">Video</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>


                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="{{ url('/') }}">HOME</a>

                                        </li>
                                        <li><a href="{{ url('customer_shop_grid') }}">Categories <span><img src="portal/img/icon/hot.png" alt=""></span></a>
                                            <ul class="submenu-mainmenu">
                                                @foreach($categories as $category)
                                                    <li><a  href="{{ url('customer_shop_grid') }}"><i class="fa fa-circle"></i>{{$category->name}} <span> <i class="fa fa-angle-right"></i></span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="#">New ARRIVIAL</a></li>

                                        <li><a href="{{ url('customer_contact') }}">Contact</a></li>
                                        <li><a href="{{ url('customer_video_show') }}">Video</a></li>
                                        <li><a id="myBtn">Track Order</a></li>

                                        <div id="myModal" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <p>Some text in the Modal..</p>
                                            </div>

                                        </div>

                                        <li><a href="{{ route('login') }}">Login</a></li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area end -->
        </header>
        <!-- header end -->

        <!-- jQuery first, then Popper.js and Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- slider start -->
        <div class="slider-wrap">
            <div class="preview-2">
                <div id="nivoslider" class="slides">
                    @foreach($sliders as $slider)
                        <img src="{{ asset('uploads/' . $slider->filename) }}" alt="" title="#slider-direction-{{ $slider->id }}"  />
                    @endforeach
                </div>
                <!-- direction 1 -->
                @foreach($sliders as $slider)
                    <div id="slider-direction-{{ $slider->id }}" class="slider-direction">
                        <div class="banner-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="nivo_text">
                                            <div class="nivo_text-wrapper">

                                                <div class="slider-content slider-text-2 text-left hidden-xs">
                                                    <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">

                                                        <h1>{{$slider->heading}} </h1>
                                                    </div>
                                                </div>

                                                <div class="slider-content slider-text-4 text-left hidden-sm hidden-xs">
                                                    <div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="1s">
                                                        <a href="{{url('customer_shop_grid')}}" class="slider-button">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- direction 2 -->

            </div>
        </div>
        <!-- slider end -->

        <!-- arrival start-->
        <div class="arrival-area clearfix pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-tab">
                            <div class="section-tab-menu text-center mb-45">
                                <ul role="tablist">
                                    <li role="presentation" class="active text-uppercase"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">New Arrival</a></li>
                                    <li role="presentation" class="text-uppercase"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">Featured</a></li>
                                    <li role="presentation" class="text-uppercase"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">Best Selling</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tab-content row">
                                <div id="new" role="tabpanel" class="active section-tab-item">
                                    <div class="tab-item-slider">
                                        @foreach($new_arrivals as $product)
                                            <div class="col-xs-12 col-width">
                                                <div class="single-product">
                                                    <div class="single-product-item clearfix">
                                                        <div class="single-product-img clearfix">
                                                            <a href="#">
                                                                <img class="primary-image" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="product">
                                                            </a>
                                                            <div class="wish-icon-hover text-center clearfix">
                                                                <div class="hover-text">
                                                                    <p></p>
                                                                    <ul style="margin-left: 60px;">
                                                                        <li><a class="modal-view" href="#productModal-{{ $product->id}}" data-toggle="modal" data-target="#productModal-{{ $product->id}}"><i class="fa fa-eye"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product-info clearfix">
                                                            {{-- <div class="pro-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>  --}}
                                                            <div style="text-align: center; font-size: 16px;">
                                                                <span class="new-price"><strong><a href="{{url('customer_product_detail')}}/{{$product->id}}">{{$product->product_name}}</a></strong><br></span>
                                                                <span>{{$product->get_category['article']}}-{{$product->id}}</span>
                                                            </div>
                                                            <h3 style="text-align: center;">Range: {{$product->price}}US$</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- QUICKVIEW PRODUCT -->

                                            <!-- END QUICKVIEW PRODUCT -->
                                        @endforeach
                                    </div>
                                </div>
                                @foreach($new_arrivals as $product)
                                    <div id="quickview-wrapper">
                                        <!-- Modal -->
                                        <div class="modal fade" id="productModal-{{ $product->id}}" tabindex="0" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-product">
                                                            <div class="product-images">
                                                                <div class="main-image images">
                                                                    <img alt="" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}">
                                                                </div>
                                                            </div>
                                                            <!-- .product-images -->

                                                            <div class="product-info">
                                                                <h1>{{ $product->product_name }}</h1>
                                                                <div class="price-box">
                                                                    <p class="price" style="margin-top: 5px;"><span class="special-price">Price ${{$product->price}}</span></p>
                                                                </div>
                                                                <a style="text-decoration: none" href="{{url('customer_product_detail')}}/{{$product->id}}" class="see-all">See all features</a>
                                                                <div class="quick-add-to-cart">
                                                                    {{-- <form method="post" class="cart">
                                                                        <div class="numbers-row">
                                                                            <input type="number" id="french-hens" value="3">
                                                                        </div>
                                                                        <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                                                    </form> --}}
                                                                </div>
                                                                <div class="quick-desc">
                                                                    {{ $product->description }}
                                                                </div>
                                                                <div class="social-sharing">
                                                                    <div class="widget widget_socialsharing_widget">
                                                                        {{-- @foreach($product->variants as $variant)
                                                                        <select class="custom-select">

                                                                   <option selected>Select {{ $variant->name }}</option>
                                                                   @foreach($variant->values as $value)
                                                                   @if($variant->id == $value->variant_id)
                                                                   <option>{{ $value->name }}</option>
                                                                   @endif
                                                                   @endforeach
                                                               </select>
                                                               @endforeach --}}

                                                                    </div>
                                                                </div>
                                                            </div><!-- .product-info -->
                                                        </div><!-- .modal-product -->
                                                    </div><!-- .modal-body -->
                                                </div><!-- .modal-content -->
                                            </div><!-- .modal-dialog -->
                                        </div>
                                        <!-- END Modal -->
                                    </div>
                                @endforeach
                                <div id="featured" role="tabpanel" class="section-tab-item">
                                    <div class="tab-item-slider">
                                        @foreach($features as $product)
                                            <div class="col-xs-12 col-width">
                                                <div class="single-product">
                                                    <div class="single-product-item clearfix">
                                                        <div class="single-product-img clearfix">
                                                            <a href="#">
                                                                <img class="primary-image" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="product">
                                                            </a>
                                                            <div class="wish-icon-hover text-center clearfix">
                                                                <div class="hover-text">
                                                                    <p> </p>
                                                                    <ul style="margin-left: 60px;">
                                                                        <li><a class="modal-view" href="#productModal-{{ $product->id}}" data-toggle="modal" data-target="#productModal-{{ $product->id}}"><i class="fa fa-eye"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product-info clearfix">
                                                            {{-- <div class="pro-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>  --}}
                                                            <div style="text-align: center; font-size: 16px;">
                                                                <span class="new-price"><strong><a href="{{url('customer_product_detail')}}/{{$product->id}}">{{$product->product_name}}</a></strong><br></span>
                                                            </div>
                                                            <h3 style="text-align: center;">Range: {{$product->price}} US$</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- QUICKVIEW PRODUCT -->

                                            <!-- END QUICKVIEW PRODUCT -->
                                        @endforeach
                                    </div>
                                </div>
                                @foreach($features as $product)
                                    <div id="quickview-wrapper">
                                        <!-- Modal -->
                                        <div class="modal fade" id="productModal-{{ $product->id}}" tabindex="0" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-product">
                                                            <div class="product-images">
                                                                <div class="main-image images">
                                                                    <img alt="" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}">
                                                                </div>
                                                            </div><!-- .product-images -->

                                                            <div class="product-info">
                                                                <h1>{{ $product->product_name }}</h1>
                                                                <div class="price-box">
                                                                    <p class="price" style="margin-top: 5px;"><span class="special-price">Price ${{$product->price}}</span></p>
                                                                </div>
                                                                <a style="text-decoration: none" href="{{url('customer_product_detail')}}/{{$product->id}}" class="see-all">See all features</a>
                                                                <div class="quick-add-to-cart">
                                                                    {{-- <form method="post" class="cart">
                                                                        <div class="numbers-row">
                                                                            <input type="number" id="french-hens" value="3">
                                                                        </div>
                                                                        <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                                                    </form> --}}
                                                                </div>
                                                                <div class="quick-desc">
                                                                    {{ $product->description }}/{{$product->variants}}
                                                                </div>
                                                                <div class="social-sharing">
                                                                    <div class="widget widget_socialsharing_widget">
                                                                        @foreach($product->variants as $variant)
                                                                            {{ $variant->variant_values}}

                                                                            <select class="custom-select">

                                                                                <option selected>Select {{ $variant->name }}</option>
                                                                                @foreach($variant->variant_values as $value)
                                                                                @endforeach
                                                                            </select>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div><!-- .product-info -->
                                                        </div><!-- .modal-product -->
                                                    </div><!-- .modal-body -->
                                                </div><!-- .modal-content -->
                                            </div><!-- .modal-dialog -->
                                        </div>
                                        <!-- END Modal -->
                                    </div>
                                @endforeach
                                <div id="best" role="tabpanel" class="section-tab-item">
                                    <div class="tab-item-slider">
                                        @foreach($sales as $product)
                                            <div class="col-xs-12 col-width">
                                                <div class="single-product">
                                                    <div class="single-product-item clearfix">
                                                        <div class="single-product-img clearfix">
                                                            <a href="#">
                                                                <img class="primary-image" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="product">
                                                            </a>
                                                            <div class="wish-icon-hover text-center clearfix">
                                                                <div class="hover-text">
                                                                    <p> </p>
                                                                    <ul style="margin-left: 60px;">
                                                                        <li><a class="modal-view" href="#productModal-{{ $product->id}}" data-toggle="modal" data-target="#productModal-{{ $product->id}}"><i class="fa fa-eye"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product-info clearfix">
                                                            {{-- <div class="pro-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>  --}}
                                                            <div style="text-align: center; font-size: 16px;">
                                                                <span class="new-price"><strong><a href="{{url('customer_product_detail')}}/{{$product->id}}">{{$product->product_name}}</a></strong><br></span>

                                                            </div>
                                                            <h3 style="text-align: center;">Range: {{$product->price}} US$</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- QUICKVIEW PRODUCT -->

                                            <!-- END QUICKVIEW PRODUCT -->
                                        @endforeach
                                    </div>
                                </div>
                                @foreach($sales as $product)
                                    <div id="quickview-wrapper">
                                        <!-- Modal -->
                                        <div class="modal fade" id="productModal-{{ $product->id}}" tabindex="0" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-product">
                                                            <div class="product-images">
                                                                <div class="main-image images">
                                                                    <img alt="" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}">
                                                                </div>
                                                            </div><!-- .product-images -->

                                                            <div class="product-info">
                                                                <h1>{{ $product->product_name }}</h1>
                                                                <div class="price-box">
                                                                    <p class="price"><span class="special-price"><span class="amount">${{ $product->price }} </span></span></p>
                                                                </div>
                                                                <a style="text-decoration: none" href="{{url('customer_product_detail')}}/{{$product->id}}" class="see-all">See all features</a>
                                                                <div class="quick-add-to-cart">
                                                                    {{-- <form method="post" class="cart">
                                                                        <div class="numbers-row">
                                                                            <input type="number" id="french-hens" value="3">
                                                                        </div>
                                                                        <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                                                    </form> --}}
                                                                </div>
                                                                <div class="quick-desc">
                                                                    {{ $product->description }}/{{$product->variants}}
                                                                </div>
                                                                <div class="social-sharing">
                                                                    <div class="widget widget_socialsharing_widget">
                                                                        @foreach($product->variants as $variant)
                                                                            {{ $variant->variant_values}}

                                                                            <select class="custom-select">

                                                                                <option selected>Select {{ $variant->name }}</option>
                                                                                @foreach($variant->variant_values as $value)
                                                                                @endforeach
                                                                            </select>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div><!-- .product-info -->
                                                        </div><!-- .modal-product -->
                                                    </div><!-- .modal-body -->
                                                </div><!-- .modal-content -->
                                            </div><!-- .modal-dialog -->
                                        </div>
                                        <!-- END Modal -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="arrival-button text-center mt-30">
                            <a href="{{url('customer_shop_grid')}}" class='section-button'>View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- arrival end -->


        <!-- collection area start -->
        <!-- men area start -->
        <div class="men-area ptb-90">
            <br>
            <div class="container">
                @foreach($categories->chunk(3) as $chunk)
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-tab">
                                <div class="section-tab-menu mb-45 text-center">
                                    <br>
                                    <ul role="tablist">
                                        @foreach($chunk as $category)
                                            <li role="presentation" class="active text-uppercase"><a href="#{{$category->id}}" aria-controls="{{$category->id}}" role="tab" data-toggle="tab">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 hidden-sm hidden-xs">
                            <div class="featured-left mt-2">
                                <a href="#">
                                    <img src="{{asset('portal/img/product/category.jpg')}}" alt="">
                                    <div class="feature-info text-left">
                                        <h2 class="text-uppercase">Croydon</h2>
                                        <h3 class="text-uppercase">collection</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="clearfix"></div>
                            <div class="tab-content row">
                                @foreach($chunk as $category)
                                    <div id="{{$category->id}}" role="tabpanel" class="@if($loop->first) active @endif section-tab-item">
                                        <div class="feature-slider">
                                            @foreach($category->products as $product)
                                                <div class="col-xs-12 col-width">
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p class="hidden-md"> </p>
                                                                        <ul style="margin-left: 60px;">
                                                                            <li><a class="modal-view" href="#productModal-{{ $product->id}}" data-toggle="modal" data-target="#productModal-{{ $product->id}}"><i class="fa fa-eye"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                {{-- <div class="pro-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>  --}}
                                                                <div style="text-align: center; font-size: 16px;">
                                                                    <span class="new-price"><strong><a href="{{url('customer_product_detail')}}/{{$product->id}}">{{$product->product_name}}</a></strong><br></span>

                                                                </div>
                                                                <h3 style="text-align: center;"> <span> Range: {{$product->price}} US$</span><br></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="arrival-button text-center mt-30">
                                <a href="{{url('customer_shop_grid')}}" class='section-button'>View More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- men area end -->



        <!-- footer start -->
        <footer class="footer-area">
            <div class="footer-middle-area ptb-60">
                <div class="container">
                    <div class="row" id="contactus">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <h5>Contact</h5>
                                <div class="single-footer-contact">
                                    <div class="footer-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="footer-contact-info">
                                        <p>Croydon International</p>
                                        <p>Brush Street, Small Industrial Estate, <br> Shahabpura, Sialkot.</p>
                                    </div>
                                </div>
                                <div class="single-footer-contact">
                                    <div class="footer-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="footer-contact-info">
                                        <p>Telephone :   </p>

                                    </div>
                                </div>
                                <div class="single-footer-contact">
                                    <div class="footer-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="footer-contact-info">
                                        <p>Email : <a href="#">info@croydon.com.pk</a></p>
                                        <p>Facebook : <a href="https://www.facebook.com/Croydoninternational/">Croydon International</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 hidden-sm col-xs-12">
                            <div class="footer-widget">
                                <h5>News & Events</h5>
                                <div id="footernews">
                                    <marquee id="MARK" direction="left">
                                        <a href="news_detail.php?N=4" class="news_link" onmouseover="MARK.stop();" onmouseout="MARK.start();">
                                            @foreach($news as $new)
                                                {{ $new->news }}
                                            @endforeach
                                        </a>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="footer-widget">
                                <h5>Company</h5>
                                <ul>
                                    <li><a href="{{url('index_portal')}}"><i class="fa fa-circle"></i>Home</a></li>
                                    <li><a href="{{url('shop_grid')}}"><i class="fa fa-circle"></i>Catogories</a></li>
                                    <li><a href="{{url('shop_grid')}}"><i class="fa fa-circle"></i>New Arrival</a></li>
                                    <li><a href="{{url('contact')}}"><i class="fa fa-circle"></i>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="footer-widget">
                                <h5 class="text-center">social links</h5>
                                <div class="social-icons ">
                                    <ul>
                                        @foreach($sociallink as $social)
                                            <a href="{{$social->social_link}}" style="font-size: 40px;"><i class="fa fa-{{$social->name}}"></i></a>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area ptb-25">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="copyright">
                                <p>Copyright @ 2020 <span><a href="{{url('/')}}">Croydon</a></span>. All right reserved. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-menu text-center">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('contact')}}">Contat Us</a></li>
                                        <li class="hidden-md hidden-xs"><a href="{{url('video_show')}}">Video</a></li>
                                        <!--<li><a href="#">Newsletter</a></li>-->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!--<div class="col-md-4 hidden-sm">
                            <div class="payment text-right">
                                <img src="img/payment/1.png" alt="">
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

    </div>
</div>


<!-- END QUICKVIEW PRODUCT -->


<!-- jquery
============================================ -->
<script src="{{ asset('portal/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
============================================ -->
<script src="{{ asset('portal/js/bootstrap.min.js')}}"></script>
<!-- meanmenu JS
============================================ -->
<script src="{{ asset('portal/js/jquery.meanmenu.js')}}"></script>
<!-- wow JS
============================================ -->
<script src="{{ asset('portal/js/wow.min.js')}}"></script>
<!-- owl.carousel JS
============================================ -->
<script src="{{ asset('portal/js/owl.carousel.min.js')}}"></script>
<!-- counterdown JS
============================================ -->
<script src="{{ asset('portal/js/jquery.countdown.min.js')}}"></script>
<!-- Video Player JS
============================================ -->
<script src="{{ asset('portal/js/jquery.mb.YTPlayer.js')}}"></script>
<!-- AJax Chimp JS
============================================ -->
<script src="{{ asset('portal/js/jquery.ajaxchimp.min.js')}}"></script>
<!-- price slider JS
============================================ -->
<script src="{{ asset('portal/js/jquery-price-slider.js')}}"></script>
<!-- elevator JS
============================================ -->
<script src="{{ asset('portal/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<!-- scrollUp JS
============================================ -->
<script src="{{ asset('portal/js/jquery.scrollUp.min.js')}}"></script>
<!-- plugins JS
============================================ -->
<script src="{{ asset('portal/js/plugins.js')}}"></script>
<!-- Nevo Slider js
============================================ -->
<script type="text/javascript" src="{{ asset('portal/lib/custom-slider/js/jquery.nivo.slider.js')}}"></script>
<script type="text/javascript" src="{{ asset('portal/lib/custom-slider/home.js')}}"></script>
<!-- textillate js
============================================ -->
<script src="{{ asset('portal/js/jquery.textillate.js')}}"></script>
<script src="{{ asset('portal/js/jquery.lettering.js')}}"></script>
<!-- animated headline js
============================================ -->
<script src="{{ asset('portal/js/animate-heading.js')}}"></script>
<!-- ajax js
============================================ -->
<script src="{{ asset('portal/js/ajax-mail.js')}}"></script>
<!-- main JS
============================================ -->
<script src="{{ asset('portal/js/main.js')}}"></script>
<script src="{{ asset('portal/assets/js/jquery-1.9.1.min.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready
        console.log("document is ready");
        jQuery('.btn[href^=#]').click(function(e){
            e.preventDefault();
            var href = jQuery(this).attr('href');
            jQuery(href).modal('toggle');
        });
    });
</script>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
