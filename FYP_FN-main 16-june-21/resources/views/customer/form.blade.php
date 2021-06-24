<!doctype html>
<html class="no-js" lang="en">
<head>

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

        div{
            font-family: Montserrat,serif
        }

    </style>

</head>

<div class="container">
    <div class="auth-pages">
        <div class="auth-left">
            <h2>Login</h2>
            <div class="spacer"></div>

            <form action="{{ route('login') }}" method="POST">

                {{ csrf_field() }}

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Login</button>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>

                <a href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>

            </form>
        </div>
    </div>
</div>

</html>
