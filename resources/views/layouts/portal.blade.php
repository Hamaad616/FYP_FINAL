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
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.hat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your chat code -->
<div class="fb-hat"
     attribution=install_email
     page_id="908381092555176"
     theme_color="#7646ff">
</div>
<div class="as-mainwrapper">
    <div class="bg-white">
        <!-- header start -->
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
                                <img src="{{asset('/portal/img/icon/search.png')}}" alt="Search Icon">
                                <form action="/search">
                                    {{csrf_field()}}
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


                            <li><a id="myBtn" class="btn btn-dark" data-toggle="modal" data-target="#Modal">Track Order</a></li>

                            <!-- The Modal -->
                            <div id="myModal" class="modal modal-backdrop">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <!-- form -->
                                    <form class="form-group alert" method="post" action="{{url('/searchOrder')}}">
                                        {{csrf_field()}}

                                        <div class="modal-body form-horizontal">

                                            <div class="form-group">

                                                <label for="quantity" class="control-label col-xs-2">Order ID</label>
                                                <div class="col-xs-10">
                                                    <input name="order_id" type="number" class="form-control" id="Order ID" placeholder="Enter Order ID">
                                                </div>

                                            </div>


                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>


                            <li><a href="{{ url('shop_grid') }}">New ARRIVIAL</a>
                            </li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li><a href="{{ url('video_show') }}">Videos</a></li>
                            <li><a href="{{ url('become_a_seller') }}">Become a seller</a></li>
                            <li>
                                <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart" style="padding-right: 8px; font-size: 20px " ></i>Cart
                                    @if ($cartCount > 0)
                                        ({{$cartCount}})
                                    @endif
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('wishlist.index') }}"><i class="fa fa-shopping-basket" style="padding-right: 8px; font-size: 20px " ></i>Wishlist
                                    @if ($wishCount > 0)
                                        ({{$wishCount}})
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
                                        <a href="{{url('supplier/web')}}">Supplier Dashboard</a>
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
                                            <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart" style="padding-right: 8px; font-size: 20px " ></i>Cart
                                                @if ($cartCount > 0)
                                                    ({{$cartCount}})
                                                @endif
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('wishlist.index') }}"><i class="fa fa-shopping-basket" style="padding-right: 8px; font-size: 20px " ></i>Wishlist
                                                @if ($wishCount > 0)
                                                    ({{$wishCount}})
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
                                                    <a href="{{url('supplier/web')}}">Supplier Dashboard</a>
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

        <!-- slider start -->

        @yield('content')

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
                                <p>Copyright @ 2019 <span><a href="#">Croydon</a></span>. All right reserved. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-menu text-center">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('index_portal')}}">Home</a></li>
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

</body>
</html>
