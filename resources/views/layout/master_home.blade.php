<!DOCTYPE html>
<html>
    <head>
        <title>Tazweed-hvac-Home</title>
        <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/stylesheet.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">


    </head>
    <body>
        <div class="wrapper">
            <!-- Header start here -->
            <header id="header">
                <div class="logo_formobile"><a href="{{route('home.index')}}"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a></div>
                <a href="#" class="staff_login_pwa">STAFF LOGIN</a>
                <div class="navigation">
                    <nav id="cssmenu">
                        <div class="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul>
                            <li><a href="{{route('aboutus.index')}}">About</a> 
                                @include('partials.about_links')
                            </li> 
                            <li><a href="{{route('solutions.index')}}">Solutions</a>
                                @include('partials.solution_links')
                            </li>
                            <li><a href="products.php">Products</a>
                                <ul>
                                   <li>Samsung</li>
                                   <li>Thermic</li>
                                </ul>
                            </li>
                            <li><a href="{{route('services.index')}}">Services</a>
                                @include('partials.services_links')
                            </li>
                            <li><a href="{{route('projects.index')}}">Projects</a></li>
                            <li><a href="{{route('news.index')}}">News</a></li>
                            <li><a href="{{route('contactus.index')}}">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="nav_icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="slide_nav">
                    <i class="slide_logo"><img src="assets/images/logo.png" alt="logo" /></i>
                    <address>
                        <p>TAZWEED GENERAL TRADING L.L.C</p>
                        <span>MAG Warehouses,<br/> Unit 2, Al Quoz Industrial 2<br/> P.O.Box 939100 Dubai, UAE</span> 
                    </address>
                    <div class="contact_no">
                        <p>Tel: <a href="#">+971 4 345 3333</a><br/>
                            Fax: <a href="#">+971 4 345 3323</a></p>
                        <a href="#" class="eamil_link">info@tazweed-hvac.com</a>
                    </div>
                    <a href="#" class="staff_login">STAFF LOGIN</a>
                </div>
            </header>
            <ul class="social_btn">
                <li><a href="#"><i class="sprite phone-icon"></i> +971 55 456 8902</a></li>
                <li><a href="#"><i class="sprite whatsapp-icon"></i>+971 55 456 8902</a></li>
                <li><a href="#"><i class="sprite mail-icon"></i>Email</a></li>
                <li><a href="#"><i class="sprite instagram-icon"></i>Instagram</a></li>
                <li><a href="#"><i class="sprite facebook-icon"></i>Facebook</a></li>
            </ul>
            <!-- Header end here -->
            @yield('content')
        </div>


        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}" type="text/javascript" charset="utf-8"></script>
    </body>
</html>