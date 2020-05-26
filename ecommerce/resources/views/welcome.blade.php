<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="My project">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My project</title>


    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('bower_components/demo-bower/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('bower_components/demo-bower/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('bower_components/demo-bower/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('bower_components/demo-bower/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('bower_components/demo-bower/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('bower_components/demo-bower/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('bower_components/demo-bower/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('bower_components/demo-bower/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('bower_components/demo-bower/css/style.css')}}" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>




</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">

    @if (Route::has('login'))
        <div class="top-right links float-right">
            @auth
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
{{--                    <a class="dropdown-item"--}}
{{--                       onclick="logout();">--}}
{{--                        {{ trans('message.logout') }}--}}
{{--                    </a>--}}

                    <form id="logout-form" class="logout-button" method="POST" action="{{ route('logout') }}" >
                        <button type="submit" class="top-right"> {{ trans('message.logout') }}</button>
{{--                        <a class="dropdown-item" href="{{route('logout')}}"> {{ trans('message.logout') }} </a>--}}
                        @csrf
                    </form>
                </div>


            @else
                <a href="{{ route('login') }}">{{ trans('message.login') }}</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{ trans('message.register') }}</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn"> {{ trans('message.all_categories') }} </button>
                        <div class="input-group">
                            <input type="text" placeholder="{{ trans('message.need') }}">
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span> {{ trans('message.all_branches') }} </span>
                    <ul class="depart-hover">
                        <li><a href="#">{{ trans('branch.nike') }}</a></li>
                        <li><a href="#">{{ trans('branch.adidas') }}</a></li>
                        <li><a href="#">{{ trans('branch.jordan') }}</a></li>
                        <li><a href="#">{{ trans('branch.vans') }}</a></li>
                        <li><a href="#">{{ trans('branch.converse') }}</a></li>
                        <li><a href="#">{{ trans('branch.balenciaga') }}</a></li>
                        <li><a href="#">{{ trans('branch.fila') }}</a></li>
                        <li><a href="#">{{ trans('branch.other') }}</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#"> {{ trans('message.shop') }} </a></li>
                    <li><a href="#"> {{ trans('message.collection') }} </a>
                        <ul class="dropdown">
                            <li><a href="#"> {{ trans('message.men') }} </a></li>
                            <li><a href="#"> {{ trans('message.women') }}</a></li>
                            <li><a href="#"> {{ trans('message.kid') }}</a></li>
                        </ul>
                    </li>
                    {{--                    <li><a href="./blog.html">Blog</a></li>--}}
                    <li><a href="./contact.html">{{ trans('message.contact') }}</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="img/banners/banner-1.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>{{ trans('message.big_sale') }}</span>
                        <h1>{{ trans('message.black_friday') }}</h1>
                        <p>{{ trans('message.black_friday_detail') }}</p>
                        <a href="#" class="primary-btn">{{ trans('message.shop_now') }}</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2> {{ trans('message.sale') }} <span>30%</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/banners/banner-2.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>{{ trans('message.big_sale') }}</span>
                        <h1>{{ trans('message.black_friday') }}</h1>
                        <p>{{ trans('message.black_friday_details') }}</p>
                        <a href="#" class="primary-btn">{{ trans('message.shop') }}</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2> {{ trans('message.sale') }} <span>50%</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="img/banners/men-banner.jpg" alt="">
                    <div class="inner-text">
                        <h4> {{ trans('message.men') }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="img/banners/women-banner.jpg" alt="">
                    <div class="inner-text">
                        <h4>{{ trans('message.women') }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="img/banners/kid-banner.jpg" alt="">
                    <div class="inner-text">
                        <h4> {{trans('message.kid')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<script src="{{ asset('bower_components/demo-bower/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('bower_components/demo-bower/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bower_components/demo-bower/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('bower_components/demo-bower/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('bower_components/demo-bower/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('bower_components/demo-bower/js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('bower_components/demo-bower/js/jquery.dd.min.js') }}"></script>
<script src="{{ asset('bower_components/demo-bower/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('bower_components/demo-bower/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('bower_components/demo-bower/js/main.js') }}"></script>
</body>

</html>
