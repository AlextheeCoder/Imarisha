<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Imarisha</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/scss/auth.scss','resources/scss/profile-form.scss', 'resources/js/app.js'])
    <!-- bootstrap css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- style css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Responsive-->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!-- fevicon -->
    <link href="{{ asset('images/fevicon.png') }}" rel="icon" type="image/gif">
    <!-- Scrollbar Custom CSS -->
    <link href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                   
                                    <a href="index.html"><img src=" {{ asset('images/logo.png') }}" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="{{ asset('icon/loc1.png') }}" />Location</li>
                                <li><img src="{{ asset('icon/email1.png') }}" />demo@gmail.com</li>
                                <li><img src="{{ asset('icon/call1.png') }}" />(+254)12345678</li>
                            </ul>                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="/">Home</a> </li>
                                                <li> <a href="#about">About</a> </li>
                                                <li><a href="#product">Products</a></li>
                                                <li><a href="#testimonial">Testimonial</a></li>
                                                <li><a href="#contact">Contact Us</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                @auth
                                <form class="search" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="button" >
                                        Log Out
                                    </button>
                                   
                                    
                                </form>
                                @else
                                <div class="search">
                                        <a href="/login" class="button">Sign In</a>
                                </div>
                                @endauth
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    
        {{$slot}}
    <!-- footer -->
    <!--  footer -->
    <footer>
        <div class="footer top_layer ">
            <div class="container">

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            
                            <a href="index.html"> <img src="{{ asset('images/logo.png') }}" alt="logo" /></a>
                            <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et sdolor sit amet, consectetur adipiscing elit, </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Quick links</h3>
                            <ul class="Links_footer">
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#"> Join Us</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Maintenance</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Language Packs</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">LearnPress</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Release Status</a> </li>
                            </ul>
                            
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Subcribe email</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                            <input class="form-control" placeholder="Your Email" type="type" name="Your Email">
                            <button class="submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Contact Us</h3>

                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="{{ asset('icon/loc.png') }}" alt="#" /></a>Nairobi
                                    <br>Kenya
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('icon/email.png') }}" alt="#" /></a>demo@gmail.com
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('icon/call.png') }}" alt="#" /></a>+254 12345678
                                </li>
                            </ul>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="copyright">
            <div class="container">
                <p>© 2024 All Rights Reserved. Design By Imarisha</a></p>
           
        </div>
        </div>
    </footer>

    <!-- end footer -->
    <!-- Javascript files-->
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
</body>

</html>