<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Croydon checkout</title>
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
        A:link { COLOR: #ec552c; TEXT-DECORATION: none; font-weight: normal }
        A:visited { COLOR: #ec552c; TEXT-DECORATION: none; font-weight: normal }
        A:active { COLOR: #ec552c; TEXT-DECORATION: none }
        A:hover { COLOR: #ec552c; TEXT-DECORATION: none; font-weight: 0 }

        /*a:hover {*/
        /*    background-color: #ec552c;*/
        /*    text-decoration: none;*/
        /*    font-weight:0;*/
        /*}*/
        .mt-32 {
            margin-top: 32px;
        }

        .form-control{
            margin-left: 10px;
        }



    </style>
    <script src="https://js.stripe.com/v3/"></script>

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
                                        <li><a  href="{{ url('shop_grid') }}"><i class="fa fa-circle"></i>{{$category->name}}<span><i class="fa fa-angle-right"></i></span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li><a href="{{ url('shop_grid') }}">New ARRIVIAL</a>
                            </li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li><a href="{{ url('video_show') }}">Video</a></li>
                            <li><a href=""> {{ Auth::user()->name }} </a>
                                <ul class="submenu-mainmenu">
                                    <li>
                                        <a href="{{ route('cart.index') }}">Cart
                                            @if (Cart::instance('default')->count() > 0)
                                                <span class="cart-count"><span>({{ Cart::instance('default')->count() }})</span></span>
                                            @endif
                                        </a>
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
                                    <li >
                                        <a href="{{route('user.edit')}}">My Profile</a>
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
                                        <li><a href="{{ url('showproducts') }}">Categories</a>
                                            <ul>
                                                <li><a href="{{ url('showproducts') }}">Boxing Equipments</a></li>
                                                <li><a href="{{ url('showproducts') }}">Martial Arts</a></li>
                                                <li><a href="{{ url('showproducts') }}">Sports Wears</a></li>
                                                <li><a href="{{ url('showproducts') }}">Fitness</a></li>
                                                <li><a href="{{ url('showproducts') }}">bag</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">New ARRIVIAL</a></li>
                                        <li><a href="{{ url('cart') }}">My Account</a>
                                        <li>
                                            <a href="#" >
                                                {{ Auth::user()->name }}
                                            </a>
                                        </li>
                                        <li>
                                            <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id = "logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
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

        <br>


        <div class="container">

            @if (session()->has('success_message'))
                <div class="spacer"></div>
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="spacer"></div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                @foreach($bulks as $bulk)
            <h1 style="font-size: 25px ; font-family: Montserrat,serif" class="checkout-heading stylish-heading font-weight-bold">Checkout</h1>
            <div class="checkout-section">
                <div>
                    <form action="{{route('checkout.storeBulk', $bulk->id)}}" method="POST" id="payment-form">
                        {{ csrf_field() }}
                        <h2 style="font-size: 19px; font-family: Montserrat,serif" class="checkout-heading stylish-heading font-weight-bold">Billing Details</h2>
                        <div class="form-group">
                            <label style="font-family: Montserrat,serif" for="email">Email Address</label>
                            @if (auth()->user())
                                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                            @else
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            @endif
                        </div>
                        <div class="form-group">
                            <label style="font-family: Montserrat,serif" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label style="font-family: Montserrat,serif" for="address">Address</label >
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                        </div>

                        <div class="half-form">
                            <div class="form-group">
                                <label style="font-family: Montserrat,serif" for="city">City</label >
                                <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                            </div>
                            <div class="form-group">
                                <label style="font-family: Montserrat,serif" for="province">Province</label >
                                <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                            </div>
                        </div> <!-- end half-form -->

                        <div class="half-form">
                            <div class="form-group">
                                <label style="font-family: Montserrat,serif" for="postalcode">Postal Code</label >
                                <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                            </div>
                            <div class="form-group">
                                <label style="font-family: Montserrat,serif" for="phone">Phone</label >
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                            </div>
                        </div> <!-- end half-form -->

                        <div class="spacer"></div>

                        <h2 class="font-weight-bold" style="font-size: large; font-family: Montserrat,serif">Payment Details</h2>

                        <div class="form-group">
                            <label style="font-family: Montserrat,serif" for="name_on_card">Name on Card</label >
                            <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                        </div>
                        <div class="form-group">
                            <label for="card-element">
                                Credit Card or Debit Card
                            </label>
                            <div id="card-element">

                            </div>
                            <div role="alert" id="card-error" >

                            </div>

                        </div>

                        <div class="spacer"></div>
                        <button type="submit" id="complete-order" style="margin: 8px; width: auto;font-family: Montserrat,serif;" for="name_on_card" class="button-primary full-width">Complete Order</button>
                    </form>
                    <script src="https://js.stripe.com/v3/"></script>
                    <script>
                        // Create a Stripe client.
                        var stripe = Stripe('{{ config('services.stripe.key') }}');

                        // Create an instance of Elements.
                        var elements = stripe.elements();

                        // Custom styling can be passed to options when creating an Element.
                        // (Note that this demo uses a wider set of styles than the guide below.)
                        var style = {
                            base: {
                                color: '#32325d',
                                lineHeight: '18px',
                                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                                fontSmoothing: 'antialiased',
                                fontSize: '16px',
                                '::placeholder': {
                                    color: '#aab7c4'
                                }
                            },
                            invalid: {
                                color: '#fa755a',
                                iconColor: '#fa755a'
                            }
                        };


                        // Create an instance of the card Element.
                        // Create an instance of the card Element
                        var card = elements.create('card', {
                            style: style,
                            hidePostalCode: true
                        });

                        // Add an instance of the card Element into the `card-element` <div>
                        card.mount('#card-element');

                        // Handle real-time validation errors from the card Element.
                        card.addEventListener('change', function(event) {
                            var displayError = document.getElementById('card-errors');
                            if (event.error) {
                                displayError.textContent = event.error.message;
                            } else {
                                displayError.textContent = '';
                            }
                        });


                        // Handle real-time validation errors from the card Element.
                        card.on('change', function(event) {
                            var displayError = document.getElementById('card-errors');
                            if (event.error) {
                                displayError.textContent = event.error.message;
                            } else {
                                displayError.textContent = '';
                            }
                        });

                        // Handle form submission.
                        var form = document.getElementById('payment-form');
                        form.addEventListener('submit', function(event) {
                            event.preventDefault();

                            // Disable the submit button to prevent repeated clicks
                            document.getElementById('complete-order').disabled = true;

                            var options = {
                                name: document.getElementById('name_on_card').value,
                                address_line1: document.getElementById('address').value,
                                address_city: document.getElementById('city').value,
                                address_state: document.getElementById('province').value,
                                address_zip: document.getElementById('postalcode').value
                            }

                            stripe.createToken(card, options).then(function(result) {
                                if (result.error) {
                                    // Inform the user if there was an error.
                                    var errorElement = document.getElementById('card-errors');
                                    errorElement.textContent = result.error.message;
                                } else {
                                    // Send the token to your server.
                                    stripeTokenHandler(result.token);
                                }
                            });
                        });

                        // Submit the form with the token ID.
                        function stripeTokenHandler(token) {
                            // Insert the token ID into the form so it gets submitted to the server
                            var form = document.getElementById('payment-form');
                            var hiddenInput = document.createElement('input');
                            hiddenInput.setAttribute('type', 'hidden');
                            hiddenInput.setAttribute('name', 'stripeToken');
                            hiddenInput.setAttribute('value', token.id);
                            form.appendChild(hiddenInput);

                            // Submit the form
                            form.submit();
                        }
                    </script>
                </div>



                @foreach ($bulks as $item)
                    <div class="checkout-table-container">
                        <h2 style="font-size: 19px; font-family: Montserrat,serif" class="checkout-heading stylish-heading font-weight-bold">Your Order</h2>
                        <div class="checkout-table">

                            @foreach($prods as $prod)
                                <div class="checkout-table-row">
                                    <div class="checkout-table-row-left">
                                        <img src="{{ asset('uploads/' .$prod->slug.'/'. $prod->product_image)}}" alt="item" class="checkout-table-img">
                                        <div class="checkout-item-details">
                                            <div class="checkout-table-item">{{ $prod->name }}</div>
                                            <div class="checkout-table-description">{{ $prod->description }}</div>
                                            <div class="checkout-table-price">Price ${{ $item->desired_amount }}</div>
                                        </div>
                                    </div> <!-- end checkout-table -->

                                    <div class="checkout-table-row-right">
                                        <div class="checkout-table-quantity">{{ $item->quantity }}</div>
                                    </div>
                                </div> <!-- end checkout-table-row -->
                            @endforeach

                        </div>     <!-- end checkout-table-row-->
                        <div class="checkout-totals">
                            <div class="checkout-totals-left">
                                Subtotal <br>
                                @if (session()->has('coupon'))
                                    Discount ({{ session()->get('coupon')['name'] }}) :
                                    <br>
                                    <hr>
                                    New Subtotal <br>
                                @endif
                                Tax ({{config('cart.tax')}}%)<br>
                                <span class="checkout-totals-total">Total</span>
                            </div>
                            <div class="checkout-totals-right">
                                ${{ getBulkNumbers($item->id)->get('Subtotal')}} <br>
                                @if (session()->has('coupon'))
                                    -${{ $discount }} <br>
                                    <hr>
                                    ${{ $newSubtotal }} <br>
                                @endif
                                ${{config('cart.tax')}}%<br>
                                <span class="checkout-totals-total">${{ (($item->quantity)*($item->desired_amount) - $discount) * (1 + ((config('cart.tax') /100 )))}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
                @endforeach
        </div>

        <br><br><br><br>

        <!-- footer start -->
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
                                    <p>Telephone : {{$detail->phone}}  </p>

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
                        <div class="footer-widget" >
                            <h5>Social links</h5>
                            <div class="social-icons text-center">
                                <ul>
                                    @foreach($sociallink as $social)
                                        <a href="{{$social->social_link}}" style=" font-size: 40px"><i class="fa fa-{{$social->name}}"></i></a>
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
    </div>
</div>
<!-- footer end -->







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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function(){
        const classname = document.querySelectorAll('.quantity')

        Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function() {
                const id= element.getAttribute('data-id')
                const productQuantity = element.getAttribute('data-productQuantity')

                axios.patch(`/cart/${id}`, {
                    quantity: this.value,
                    productQuantity: productQuantity
                })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
            })
        })
    })();
</script>

<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('js/algolia.js') }}"></script>

<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
</body>
</html>

