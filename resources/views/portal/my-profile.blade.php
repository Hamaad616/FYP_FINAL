<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Croydon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Croydonicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="portal/img/logo-icon.png">
    <!-- Styles -->
    {{--    <link rel="stylesheet" href="{{ asset('css/cart/style.css')}}">--}}
    <link rel="stylesheet" href="{{ asset('css/cart/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart/responsive.css') }}">

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/bootstrap.min.css')}}">

    {{--    <!-- Nivo slider CSS--}}
    {{--    ============================================ -->--}}
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('portal/lib/custom-slider/css/nivo-slider.css')}}" media="screen" />--}}
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('portal/lib/custom-slider/css/preview.css')}}" media="screen" />--}}

<!-- Fontawsome CSS
    ============================================ -->
{{--    <link rel="stylesheet" href="{{ asset('portal/css/font-awesome.min.css')}}">--}}

    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">

    {{--    <!-- owl.carousel CSS--}}
    {{--    ============================================ -->--}}
    {{--    <link rel="stylesheet" href="{{ asset('portal/css/owl.carousel.css')}}">--}}

    {{--    <!-- jquery-ui CSS--}}
    {{--    ============================================ -->--}}
    <link rel="stylesheet" href="{{ asset('cart/css/jquery-ui.css')}}">

    {{--    <!-- meanmenu CSS--}}
    {{--    ============================================ -->--}}
    <link rel="stylesheet" href="{{ asset('cart/css/meanmenu.min.css')}}">

{{--    <!-- animate CSS--}}
{{--    ============================================ -->--}}
{{--    <link rel="stylesheet" href="{{ asset('cart/css/animate.css')}}">--}}

<!-- Animate headline CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('cart/css/animate-heading.css')}}">
    <link rel="stylesheet" href="{{ asset('cart/portal/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('cart/portal/css/reset.css')}}">

    <!-- Video CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('cart/css/jquery.mb.YTPlayer.css')}}">

    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/style.css')}}">
{{--    <link rel="stylesheet" href="{{ asset('portal/webportal.css')}}">--}}

<!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/responsive.css')}}">

    <style>
        select {
            background-color: white;
            border: thin solid grey;
            border-radius: 4px;
            display: inline-block;
            font: inherit;
            line-height: 1.5em;
            padding: 0.5em 3.5em 0.5em 1em;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        select.arrows {
            background-image:    url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAA3klEQVRIS+3VMU9CMRTF8d8zBL+aizoQFhx0kUk33RzdYMNFXUFnYeGrYYyaJiUxJHDLSxodbNKpfeffc9/pbaPyaCrr+3OA++z4rtT5Pg5GuMnCY9yWQEoBE1xhlUUP8YDrCBIB0vojLvGO0yz4hm4JJAKcYYoPHGOZAUdYoIMBXrc5iQAHeMlzviFygj7O8dkWEJU4XI8chALRhn9AVKHf70VRTHu4wFfbmKZLNKt50dLBnna0imcMd/2I0phWa3Y/D1e1Xa9BCZJG0VuQNpaWKMx72xS1Fl5/WN3BN+AgJhnZQlq4AAAAAElFTkSuQmCC');
            background-position: calc(100% - .5rem), 100% 0;
            background-size:  1.5em 1.5em;
            background-repeat: no-repeat;
        }

        select.arrows:focus {
            border-color: blue;
            outline: 0;
        }

        /*a:hover {*/
        /*    background-color: #ec552c;*/
        /*    text-decoration: none;*/
        /*    font-weight:0;*/
        /*}*/

        div{
            font-family: Montserrat,serif
        }

    </style>

</head>
<body>
<div class="header-area">
    <div class="mainmenu-area text-center hidden-sm hidden-xs">
        <nav>
            <div class="mainmenu">
                <ul>
                    <li><a href="{{ url('index_portal') }}">Home</a>

                    </li>
                    <li><a href="{{ url('shop_grid') }}">Categories</a>
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

</div>
<br><br><br>
    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="products-section container">
    <div class="my-profile">
        <div class="products-header">
            <h1 class="stylish-heading">My Profile</h1>
        </div>

        <div>
            <form action="{{ route('user.update')}}" method="POST">
                @method('patch')
                @csrf
                <div class="">
                    <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="Name" required>
                </div>
                <br>
                <div class="">
                    <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Email" required>
                </div>
                <br>
                <div class="">
                    <input id="password" type="password" name="password" placeholder="Password">
                    <div>Leave password blank to keep current password</div>
                </div>
                <br>
                <div class="">
                    <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password">
                </div>
                <br>
                <div>
                    <button type="submit" class="my-profile-button">Update Profile</button>
                </div>
            </form>
        </div>

        <div class="spacer"></div>
    </div>
</div>


    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>

</body>
</html>
