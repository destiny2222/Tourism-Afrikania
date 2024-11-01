
@php
   $getCategory =  App\Models\CourseCategory::all();
@endphp

<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('head') - Tourism Afrikania</title>
    <link rel="pingback" href="https://tourismafrikania.net/xmlrpc.php">
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='Ahtes' />
    <link rel='dns-prefetch' href='Ahtes' />
    <meta name="author" content="Dexnovate">
    <link rel="alternate" type="application/rss+xml" title="TourismAfrikania &raquo; Feed" href="https://tourismafrikanianig.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="TourismAfrikania &raquo; Comments Feed" href="https://tourismafrikanianig.com/comments/feed/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tourism Afrikania is an African Global Hospitality and Tourism
    Management brand dedicated to promoting hospitality and tourism
    education in Africa. We aim to enable African economic growth by
    helping business owners achieve their profitability goals through career
    mentorship, training, marketing solutions, and general travel, tourism,
    and hotel management. Our initiatives bring together secondary and
    tertiary students, travel agencies, tour operators, airlines, hotels,
    hospitality vendors, CEOs, hotel managers, and industry enthusiasts for
    tourism mentorship and career guidance in travel, hospitality, and
    tourism management as an academic field.">
    <meta name="keywords" content="Ahtes,tertiary students, travel agencies, tour operators, airlines, hotels,
    hospitality vendors, CEOs, hotel managers,tourism">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.tourismafrikanianig.com/assets/img/logo/preloader.png">
    <meta property="og:image" content="https://www.tourismafrikanianig.com/assets/img/logo/preloader.png" />
    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/css/preloader.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="/assets/css/backToTop.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/huicalendar.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>


    <!-- header-area -->
      @yield('header-area')
    <!-- header-area-end -->

    <!-- main-area -->
    <main>
        @yield('content')
    </main>
    <!-- main-area-end -->

    <!-- footer area start -->
    <!-- footer-area-start -->
    <footer>
        <div class="footer-area pt-100">
            <div class="container">
                <div class="footer-main">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget f-w1 mb-40">
                            <div class="footer-img">
                                <a href="/"> <img width="100" src="/assets/img/logo/footer-logo.png" alt="footer-logo"></a>
                                <p>Tourism Afrikania is an African Global Hospitality and Tourism Management brand dedicated to promoting hospitality and tourism education in Africa</p>
                            </div>
                            <div class="footer-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6">
                        <div class="footer-widget f-w2 mb-40">
                            <h3>Quick link</h3>
                            <div class="row">
                                <div class="col-6">
                                    <ul>
                                        <li><a href='/about'>About us</a></li>
                                        <li><a href='/service'>Service</a></li>
                                        <li><a href='/event'>Event</a></li>
                                        <li><a href='/blog'>Blog</a></li>
                                        <li><a href="/buildafrika">Build Afrika Winners</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul>
                                        <li><a href="/community">Community</a></li>
                                        <li><a href="/gallery">Gallery</a></li>
                                        <li><a href='/contact'>Contact</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget f-w3 mb-40">
                                <h3>Browse Courses</h3>
                                <ul>
                                    @foreach ($getCategory as $key => $item)
                                        <li><a href='{{ route('courses.showByCategory',$item->slug) }}' class="text-capitalize">{{ $item->name }}</a></li>    
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->


    <!-- JS here -->
    <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/vendor/waypoints.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/meanmenu.js"></script>
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/magnific-popup.min.js"></script>
    <script src="/assets/js/huicalendar.js"></script>
    <script src="/assets/js/parallax.min.js"></script>
    <script src="/assets/js/backToTop.js"></script>
    <script src="/assets/js/nice-select.min.js"></script>
    <script src="/assets/js/counterup.min.js"></script>
    <script src="/assets/js/ajax-form.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/main.js"></script>
@stack('scripts')
    @include('partials.message')
    @include('vendor.sweetalert.alert')
</body>
</html>