@if(session()->has('message'))
    <div style="text-align: center;"><strong><div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        </strong>
    </div>
@endif


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

{{--    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">--}}

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
        <header class="header-area bg-light">

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
                                <a href="{{ url('index_portal') }}"><img src="{{asset('portal/img/logo/1.png')}}" alt="Croydon"></a>
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
                                <img src="img/icon/search.png" alt="">
                                <form action="/search">
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
                            <li><a href="{{ url('index_portal') }}">Home</a>

                            </li>
                            <li><a href="{{ url('shop_grid') }}">Categories <span><img src="portal/img/icon/hot.png" alt=""></span></a>
                                <ul class="submenu-mainmenu">
                                    @foreach($categories as $category)
                                        <li><a  href="{{ url('shop_grid') }}"></i>{{$category->name}}</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li><a href="{{ url('shop_grid') }}">New ARRIVIAL</a>
                            </li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li><a href="{{ url('video_show') }}">Videos</a></li>
                            <li><a href="{{ url('become_a_seller') }}">Become a seller</a></li>

                            <li>
                                <a href="{{ route('wishlist.index') }}"><i class="fa fa-shopping-basket" style="padding-right: 8px; font-size: 20px " ></i>Wishlist
                                    @if ($wishCount > 0)
                                        ({{$wishCount}})
                                    @endif
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart" style="padding-right: 8px; font-size: 20px " ></i>Cart
                                    @if ($cartCount > 0)
                                        ({{$cartCount}})
                                    @endif
                                </a>
                            </li>
                            <li>
                            <li><a href=" {{ url('settings')}}/{{ Auth::user()->name }} "> {{ Auth::user()->name }} </a>
                                <ul class="submenu-mainmenu">
                                    <li>
                                        <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}

                                            <form id = "logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        </a>

                                    </li>
                                    <li >
                                        <a href="{{  route('user.edit')}}" >My Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                @if(Auth::user()->hasRole('Admin'))
                                    <a href="{{url('admin_index')}}" >
                                        Admin Panel
                                    </a>
                                @endif
                            </li>

                            <li>
                                @if(Auth::user()->hasRole('CEO'))
                                    <a href="{{url('/CEO')}}" >
                                        CEO DASHBOARD
                                    </a>
                                @endif
                            </li>
                            <li>
                                @foreach($reqs as $request)
                                    @if(($request->status == '1') and Auth::user()->hasRole('Qualified Supplier') )
                                        <a href={{url('supplier/web')}}>Supplier Dashboard</a>
                                    @endif
                                @endforeach
                            </li>
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
                                        <li><a href="{{ url('index_portal') }}">HOME</a>

                                        </li>
                                        <li><a href="{{ url('shop_grid') }}">Categories <span><img src="portal/img/icon/hot.png" alt=""></span></a>
                                            <ul class="submenu-mainmenu">
                                                @foreach($categories as $category)
                                                    <li><a  href="{{ url('shop_grid') }}"></i>{{$category->name}}</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('shop_grid') }}">New ARRIVIAL</a></li>
                                        <li>
                                            <a href="{{ route('wishlist.index') }}"><i class="fa fa-shopping-basket" style="padding-right: 8px; font-size: 20px " ></i>Wishlist
                                                @if ($wishCount > 0)
                                                    ({{$wishCount}})
                                                @endif
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart" style="padding-right: 8px; font-size: 20px " ></i>Cart
                                                @if ($cartCount > 0)
                                                    ({{$cartCount}})
                                                @endif
                                            </a>
                                        </li>

                                        <li><a href=" {{ url('settings')}}/{{ Auth::user()->name }} "> {{ Auth::user()->name }} </a>
                                            <ul class="submenu-mainmenu">

                                                <li>
                                                    <a href="{{  route('user.edit')}}" >My Profile</a>
                                                </li>

                                                <li>
                                                    <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}

                                                        <form id = "logout-form" action="{{ route('logout') }}" method="POST">
                                                            @csrf
                                                        </form>
                                                    </a>

                                                </li>

                                            </ul>
                                        </li>

                                        <li>
                                            @if(Auth::user()->hasRole('Admin'))
                                                <a href="{{url('admin_index')}}" >
                                                    Admin Panel
                                                </a>
                                            @endif
                                        </li>

                                        <li>
                                            @if(Auth::user()->hasRole('CEO'))
                                                <a href="{{url('/CEO')}}" >
                                                    CEO DASHBOARD
                                                </a>
                                            @endif
                                        </li>

                                        <li>
                                            @foreach($reqs as $request)
                                                @if(Auth::user()->hasRole('Qualified Supplier'))
                                                    <a href={{url('supplier/web')}}>Supplier Dashboard</a>
                                                @endif
                                            @endforeach
                                        </li>

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




        <!--Start Product Details area  -->

    <div class="product-detail-area pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="zoomWrapper clearfix">

                        <div id="img-1" class="zoomWrapper single-zoom pull-right">
                            <a href="#">
                                <img id="zoom1" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" data-zoom-image="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="big-1">
                            </a>
                        </div>

                        <div class="product-thumb">
                            <ul class="p-details-slider" id="gallery_01">
                                @foreach($product->images as $image)
                                    <li>
                                        <a class="elevatezoom-gallery" href="#" data-image="{{asset('uploads/'. $product->slug.'/'.  $image->filename)}}" data-zoom-image="{{asset('uploads/'. $product->slug.'/'.  $image->filename)}}"><img src="{{asset('uploads/'. $product->slug.'/'.  $image->filename)}}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="product-detail">
                        <div class="product-title">
                            <h4 style="font-size: 22px;">{{$product->product_name}} </h4><br>
                            <h2>Price  {{$product->price}}$</h2><br>
                            <span >{{$product->get_category['article']}}-{{$product->id}}</span>
                        </div>
                        <h3><strong>Description</strong></h3>
                        <p class="detail">{{$product->description}} </p>

                        <div class="quick-add-to-cart">
                            <form method="post" class="cart" action="{{route('cart.store')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->product_name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                            </form>
                        </div>
                       <div class="quick-add-to-cart">
                            <form method="post" class="cart" action="{{route('wishlist.store')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->product_name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <button class="fa fa-heart btn" style="margin-left: 5px; margin-top: 2px" type="submit"></button>
                            </form>
                        </div>
                        <br>
                                 @foreach($reqs as $request)
                        @if(Auth::user()->hasRole('Qualified Supplier') and $request->status == '1')

                            <div class="quick-add-to-cart">
                                <button href="#bulkModal-{{ $product->id}}" data-toggle="modal" data-target="#bulkModal-{{ $product->id}}"  class="single-add-to-cart-button" type="submit">Bulk Query</button>
                            </div>
                            @endif
                                @endforeach

                            <div id="quickview-wrapper">
                                <!-- Modal -->
                                <div class="modal fade" id="bulkModal-{{ $product->id}}" tabindex="0" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h3 class="modal-title">Bulk Query</h3>
                                            </div>
                                            <div class="modal-body form-horizontal">
                                                <!-- form -->
                                                <form class="form-group alert" method="post" action="{{URL ('bulk')}}">
                                                    {{csrf_field()}}
                                                    <div>

                                                        <input name="product_id" type="hidden" value="{{$product->id}}">

                                                        <div class="form-group">
                                                            <label for="quantity" class="control-label col-xs-2">Product Name</label>
                                                            <div class="col-xs-10">
                                                                <input name="p_name" value="{{$product->product_name}}" type="text" class="form-control" id="name" placeholder="Product Name">
                                                            </div>
                                                        </div>

                                                        @foreach($variants as $variant)

                                                            <div class="form-group">
                                                                <label for="variant" class="control-label col-xs-2">Select {{ $variant->name }}</label>
                                                                <div class="col-xs-10">
                                                                    <input  class="form-control" id="title"  type="hidden" name="variants[]" value="{{ $variant->name }}">
                                                                </div>
                                                                <div class="col-xs-10">

                                                                    <select name="{{ strtolower($variant->name) }}[]" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                                        @foreach($variant->variant_values as $value)
                                                                            <option value="{{ $value->id }}">{{$value->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="quantity" class="control-label col-xs-2">Quantity</label>
                                                        <div class="col-xs-10">
                                                            <input name="quantity" type="text" class="form-control" id="title" placeholder="Enter your Quantity of Product">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="desire_amount" class="control-label col-xs-2">Desire Amount</label>
                                                        <div class="col-xs-10">
                                                            <input type="text" name="desire_amount" class="form-control" id="title" placeholder="Please Enter Per Piece in dollars">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="time_limit" class="control-label col-xs-2">Time Limit </label>
                                                        <div class="col-xs-10">
                                                            <input type="text" name="time_limit" class="form-control" id="title" placeholder="e.g 4 Months">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="country" class="control-label col-xs-2">Country</label>
                                                        <div class="col-xs-10">
                                                            <input type="text" name="country" class="form-control" id="title" placeholder="Enter your Country">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="control-label col-xs-2">Email</label>
                                                        <div class="col-xs-10">
                                                            <input type="text" name="email" class="form-control" id="timezone" placeholder="Enter your Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone" class="control-label col-xs-2">Phone</label>
                                                        <div class="col-xs-10">
                                                            <input type="text" name="phone" class="form-control" id="timezone" placeholder="Enter your Contact Number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message" class="control-label col-xs-2">Message</label>
                                                        <div class="col-xs-10">
                                                            <textarea class="form-control" name="message" id="message" placeholder="Enter your Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Send</button>
                                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div><!-- .modal-content -->
                                    </div><!-- .modal-dialog -->
                                </div>
                                <!-- END Modal -->
                            </div>

                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-xs-12">
                    <div class="product-description-tab pt-50">
                        <div class="description-tab-menu section-tab-menu pb-30">
                            <ul class="clearfix" role="tablist">
                                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                          </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="description">
                               <p>{{$product->description}}</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!--End Product Details area  -->
    <!-- arrival start-->
    <div class="arrival-area related clearfix mt-70">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-tab">
                        <div class="section-tab-menu text-center mb-45">
                            <ul role="tablist">
                                <li class="text-uppercase active"><a href="#"> Related Product</a></li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                        <div class="tab-item-slider">
                            @foreach($products as $product)
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
                                                            <li>
                                                                <a  class="modal-view" href="#productModal-{{ $product->id}}" data-toggle="modal" data-target="#productModal-{{ $product->id}}">
                                                                    <i  class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-product-info clearfix">
                                                <div style="text-align: center; font-size: 16px;">
                                                    <span class="new-price"><strong><a href="{{url('product_detail')}}/{{$product->id}}">{{$product->product_name}}</a></strong><br></span>
                                                    <span>{{$product->get_category['article']}}-{{$product->id}}</span>
                                                </div>
                                                <h3 style="text-align: center;">Range: {{$product->price}}US$</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @foreach($products as $product)
                        <div id="quickview-wrapper">
                            <!-- Modal -->
                            <div style="overflow-y: auto" class="modal fade" id="productModal-{{ $product->id}}" tabindex="0" role="dialog">
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
                                                    <h1 style="margin-left:12px">{{ $product->product_name }}</h1>
                                                    <div class="price-box">
                                                        <p class="price"><span class="special-price"><span style="margin-left:12px"  class="amount">Price:  ${{ $product->price }}</span></span></p>
                                                    </div>
                                                    <a style="margin-left:13px" href="{{url('product_detail')}}/{{$product->id}}" class="see-all">See all features</a>
                                                    <div  class="quick-add-to-cart">
                                                        <form method="post" class="cart" action="{{route('cart.store')}}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="id" value="{{$product->id}}">
                                                            <input type="hidden" name="name" value="{{$product->product_name}}">
                                                            <input type="hidden" name="price" value="{{$product->price}}">
                                                            <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                                        </form>
                                                    </div>

                                                    <div style="margin-left:12px" class="quick-desc">
                                                        {{ $product->description }}-{{$product->get_category['article']}}
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
                <a href="{{url('shop_grid')}}" class='section-button'>View More</a>
            </div>
        </div>
    <!-- arrival end -->

        <br><br><br><br><br>
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
                                        @foreach($news as $new)
                                            <a href="news_detail.php?N=4" class="news_link" onmouseover="MARK.stop();" onmouseout="MARK.start();">
                                            {{ $new->news }}
                                        @endforeach
                                    </marquee>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="footer-widget">
                                <h5>Company</h5>
                                <ul>
                                    <li><a href="{{url('index_portal')}}"><i class="fa fa-circle"></i>Home</a></li>
                                    <li><a href="{{url('shop_grid')}}"><i class="fa fa-circle"></i>Categories</a></li>
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
                                <p>Copyright @ 2020 <span><a href="{{url('index_portal')}}">Croydon</a></span>. All right reserved. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-menu text-center">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('index_portal')}}">Home</a></li>
                                        <li><a href="{{url('contact')}}">Contact Us</a></li>
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

</body>
</html>


