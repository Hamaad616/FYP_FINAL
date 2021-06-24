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
    <link rel="stylesheet" href="{{ asset('portal/css/font-awesome.min.css')}}">

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


        .container {
            margin-top: 80px !important;
            margin-bottom: 80px !important;
        }

        p {
            font-size: 14px;
            margin-bottom: 7px
        }

        .cursor-pointer {
            cursor: pointer
        }

        a {
            text-decoration: none !important;
            color: white
        }

        .bold {
            font-weight: 600
        }

        .small {
            font-size: 12px !important;
            letter-spacing: 0.5px !important
        }

        .Today {
            color: rgb(83, 83, 83)
        }

        .btn-outline-primary {
            background-color: #fff !important;
            color: #e78a6e !important;
            border: 1.3px solid lightgrey;
            font-size: 12px;
            border-radius: 0.4em !important
        }

        .btn-outline-primary:hover {
            background-color: #e78a6e !important;
            color: #fff !important;
            border: 1.3px solid #e78a6e;
        }

        .btn-outline-primary:focus,
        .btn-outline-primary:active {
            outline: none !important;
            box-shadow: none !important;
            border-color: #e78a6e !important
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: #455A64;
            padding-left: 0px;
            margin-top: 30px
        }

        #progressbar li {
            list-style-type: none;
            font-size: 13px;
            width: 33.33%;
            float: left;
            position: relative;
            font-weight: 400;
            color: #455A64 !important
        }

        #progressbar #step1:before {
            content: "1";
            color: #fff;
            width: 29px;
            margin-left: 15px !important;
            padding-left: 11px !important
        }

        #progressbar #step2:before {
            content: "2";
            color: #fff;
            width: 29px
        }

        #progressbar #step3:before {
            content: "3";
            color: #fff;
            width: 29px;
            margin-right: 15px !important;
            padding-right: 11px !important
        }

        #progressbar li:before {
            line-height: 29px;
            display: block;
            font-size: 12px;
            background: #455A64;
            border-radius: 50%;
            margin: auto
        }

        #progressbar li:after {
            content: '';
            width: 121%;
            height: 2px;
            background: #455A64;
            position: absolute;
            left: 0%;
            right: 0%;
            top: 15px;
            z-index: -1
        }

        #progressbar li:nth-child(2):after {
            left: 50%
        }

        #progressbar li:nth-child(1):after {
            left: 25%;
            width: 121%
        }

        #progressbar li:nth-child(3):after {
            left: 25% !important;
            width: 50% !important
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #e78a6e;
        }

        .card {
            background-color: #fff;
            box-shadow: 2px 4px 15px 0px #e78a6e;
            z-index: 0
        }

        small {
            font-size: 12px !important
        }

        .a {
            justify-content: space-between !important
        }

        .border-line {
            border-right: 1px solid rgb(226, 206, 226)
        }

        .card-footer img {
            opacity: 0.3
        }

        .card-footer h5 {
            font-size: 1.1em;
            color: #e78a6e;
            cursor: pointer
        }

        a:hover {
            text-decoration: none !important;
        }


    </style>

</head>
<body>
<div class="header-area">
    <div class="mainmenu-area text-center hidden-sm hidden-xs">
        <nav>
            <div class="mainmenu">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a>

                    </li>
                    <li><a href="{{ url('customer_shop_grid') }}">Categories</a>
                        <ul class="submenu-mainmenu">
                            @foreach($categories as $category)
                                <li><a  href="{{ url('customer_shop_grid') }}"><i class="fa fa-circle"></i>{{$category->name}} <span> <i class="fa fa-angle-right"></i></span></a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li><a href="{{ url('customer_shop_grid') }}">New ARRIVIAL</a></li>
                    <li><a href="{{ url('customer_contact') }}">Contact</a></li>
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
                                <li><a href="{{ route('login') }}">Login</a></li>


                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->


</div>

<br><br>
@foreach($reqs as $req)
    <div class="container my-5 d-sm-flex justify-content-center">
        <div class="col-xs-8 " >
            <div class="card px-2">
                <div class="card-header bg-white">
                    <div class="row justify-content-between">
                        <div class="col">
                            <p class="text-muted"> Order ID <span class="font-weight-bold text-dark">&nbsp;{{$req->id}}</span></p>
                            <p class="text-muted"> Place On <span class="font-weight-bold text-dark">&nbsp;{{$req->created_at}}</span> </p>
                        </div>
                        @foreach($req->products as $product)
                            <div class="flex-col my-auto">
                                <h6 class="ml-auto mr-3"> <a style="color: #e78a6e" href="{{url('product_detail')}}/{{$product->id}}">View Details</a> </h6>
                            </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="media flex-column flex-sm-row">
                        <div class="media-body ">
                            <h5 class="bold"><a>{{$product->name}}</a></h5>
                            <p class="text-muted"> Qt:&nbsp; <a> {{$product->quantity}} </a>&nbsp;Pair</p>
                            <h4 class="mt-3 mb-4 bold"> <span class="mt-5">$</span>{{$req->billing_total}} <span class="small text-muted"> via {{strtoupper($req->payment_gateway)}} </span></h4>
                            <p class="text-muted">Tracking Status on: <span class="Today"> {{$latest_time}}</span></p>
                        </div>
                        <img class="align-self-center img-fluid" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image)}}" alt="product_image" width="180" height="180">
                    </div>
                </div>
                <div class="row px-3">
                    <div class="col">
                        <ul id="progressbar">
                            @if($req->shipped == 1)
                                <li class="step0 active" id="step1">PLACED</li>
                                <li class="step0 text-center text-muted" id="step2">SHIPPED</li>
                                <li class="step0 text-muted text-right" id="step3">DELIVERED</li>
                            @elseif($req->shipped == 2)
                                <li class="step0 active" id="step1">PLACED</li>
                                <li class="step0 active text-center" id="step2">SHIPPED</li>
                                <li class="step0 text-muted text-right" id="step3">DELIVERED</li>

                            @elseif($req->shipped == 3)
                                <li class="step0 active" id="step1">PLACED</li>
                                <li class="step0 active text-center" id="step2">SHIPPED</li>
                                <li class="step0 active text-right" id="step3">DELIVERED</li>
                            @else
                                <ul id="progressbar">
                                    <li class="step0 text-muted" id="step1">PLACED</li>
                                    <li class="step0 text-center text-muted" id="step2">SHIPPED</li>
                                    <li class="step0 text-muted text-right" id="step3">DELIVERED</li>
                                </ul>@endif
                        </ul>
                    </div>
                </div>

                @endforeach
            </div>

        </div>

    </div>
@endforeach
<br><br><br>

</body>
</html>
