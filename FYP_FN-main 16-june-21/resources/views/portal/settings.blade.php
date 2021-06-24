<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Croydon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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

        div{
            font-family: Montserrat,serif
        }

        .sidebar {
            height: auto;
            width: 80px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: lightgrey;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 30px;
            white-space: nowrap;
            border-radius: 20px;
            margin-top: 150px;
            margin-left: 10px;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #fb9678;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .material-icons,
        .icon-text {
            vertical-align: middle;
        }

        .material-icons {
            padding-bottom: 3px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
            margin-left: 100px;
        }
        /* On smaller screens, where height is less than 450px, change the style of the sidemain (less padding and a smaller font size) */

        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }
            .sidebar a {
                font-size: 18px;
            }
        }

    </style>

</head>
<body>

<div id="mySidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
    <a href="{{url('settings', Auth::user()->name)}}"><i class="material-icons">settings</i> <span class="icon-text">&nbsp;&nbsp;&nbsp;Settings</span></a>
    <a href="" onclick="routeToProfileUpdate()"> <i class="material-icons">account_circle</i><span class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp;My profile</span></a>
    <a href="" onclick="routeToRequests()"><i class="material-icons">pending_actions</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Pending Requests</a>
    <a href="#" onclick="routeToOrders()"><i class="material-icons">inventory</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;My Orders</a>
    <hr>
    <a href="{{url('index_portal')}}"><i class="material-icons">chevron_left</i><span class="icon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp;Back to home</a>

</div>

<div id="main">

</div>

<script>
    var mini = true;

    function toggleSidebar() {
        if (mini) {
            console.log("opening sidebar");
            document.getElementById("mySidebar").style.width = "320px";
            document.getElementById("main").style.marginLeft = "250px";
            this.mini = false;
        } else {
            console.log("closing sidebar");
            document.getElementById("mySidebar").style.width = "80px";
            document.getElementById("main").style.marginLeft = "85px";
            this.mini = true;
        }
    }
</script>


<script>

    function routeToProfileUpdate(){
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url:"/updateProfile",
            type:'get',
            data:{
                CSRF_TOKEN
            },
            success:function (data){
                // console.log(data)
                $('#main').html(data)
            }
        })

    }

    function routeToRequests() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name="csrf_token"]').attr('content');

        $.ajax({
            url: "/requests",
            type: 'get',
            data: {
                CSRF_TOKEN
            },
            success: function (data) {
                $('#main').html(data)
            }
        })

    }

        function routeToOrders(){
            event.preventDefault();
            const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url:"/orders",
                type:'get',
                data:{
                    CSRF_TOKEN
                },
                success:function (data){
                    // console.log(data)
                $('#main').html(data)
                }
            })

    }

</script>

<script type="application/javascript">
    $(document).ready(function (){
        $('ul li a').click(function (){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fe0df99638.js" crossorigin="anonymous"></script>
</body>
</html>
