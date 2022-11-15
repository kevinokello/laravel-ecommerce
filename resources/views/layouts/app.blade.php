<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Surfside Media</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/fav.png">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @livewireStyles
</head>

<body>
    <header class="header-area header-style-1 header-height-2">

        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    {{-- <div class="logo logo-width-1">
                        <a href="{{ url('/') }}"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                    </div> --}}
                    <div class="header-right">
                        {{-- <div class="search-style-1">
                            <form action="#">
                                <input type="text" placeholder="Search for items...">
                                <button type="submit"><i class="fi-rs-search"></i></button>
                            </form>
                        </div> --}}
                        <div class="header-action-right">
                            <div class="header-action-2">
                                {{-- <div class="header-action-icon-2">
                                    <a href="shop-wishlist.php">
                                        <img class="svgInject" alt="Surfside Media"
                                            src="assets/imgs/theme/icons/icon-heart.svg">
                                        <span class="pro-count blue">4</span>
                                    </a>
                                </div> --}}
                                {{-- @livewire('cart-icon-component') --}}
                                @auth
                                @else
                                    @endif
                                    {{-- <div class="header-action-icon-2">
                                        <a href="{{ route('login') }}">
                                            <img class="svgInject" alt="Surfside Media"
                                            src="assets/imgs/theme/icons/usr.svg">
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-bottom-bg-color sticky-bar">
                <div class="container">
                    <div class="header-wrap header-space-between position-relative">
                        <div class="logo logo-width-1 d-block d-lg-none">
                            {{-- <a href="{{ url('/') }}"><img src="assets/imgs/logo/logo.png" alt="logo"></a> --}}
                        </div>
                        <div class="header-nav d-none d-lg-flex">
                            <div class="logo logo-width-1">
                                <a href="{{ url('/') }}"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                            </div>
                            <div class="main-categori-wrap d-none d-lg-block">

                                <a class="categori-button-active" href="#">
                                    <span class="fi-rs-apps"></span> Browse<i class="fi-rs-angle-down"></i>
                                </a>
                                <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                    <ul>

                                        <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer &
                                                Office</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer
                                                Electronics</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Jewelry &
                                                Accessories</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a>
                                        </li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a>
                                        </li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother &
                                                Kids</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a>
                                        </li>
                                        <li>
                                            <ul class="more_slide_open" style="display: none;">
                                                <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Beauty,
                                                        Health</a></li>
                                                <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Bags and
                                                        Shoes</a></li>
                                                <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Consumer
                                                        Electronics</a></li>
                                                <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Automobiles
                                                        & Motorcycles</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="more_categories">Show more...</div>
                                </div>
                            </div>
                            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('shop') }}">Shop</a></li>
                                        <li>
                                            @livewire('header-search-component')
                                        </li>
                                        {{-- <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                            @auth
                                                @if (Auth::user()->utype === 'ADM')
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                        <li><a href="#">Products</a></li>
                                                    </ul>
                                                @else
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                                    </ul>
                                                @endif
                                                @endif
                                            </li> --}}
                                    </ul>
                                </nav>
                            </div>
                            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                                <nav>
                                    <ul>

                                        <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                @auth
                                                    @if (Auth::user()->utype === 'ADM')
                                                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                        <li><a href="{{ url('/') }}">My Shop</a></li>
                                                        <li><a href="#">Wishlist</a></li>
                                                    @else
                                                        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                                        <li><a href="{{ url('/') }}">My orders</a></li>
                                                        <li><a href="#">Wishlist</a></li>
                                                        <li>

                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf

                                                                <x-dropdown-link :href="route('logout')"
                                                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                                    {{ __('Log Out') }}
                                                                </x-dropdown-link>
                                                            </form>
                                                        </li>
                                                    @endif
                                                @else
                                                    <a class="btn" href="{{ route('login') }}"><i
                                                            class="fi-rs-user mr-10"></i>Log in</a>
                                                    <li><a href="{{ url('/') }}">My orders</a></li>
                                                    <li><a href="#">Wishlist</a></li>
                                                    @endif
                                                </ul>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-action-right">

                                 @livewire('wishlist-icon-component')
                                    @livewire('cart-icon-component')
                                    @auth
                                    @else
                                        @endif
                                        {{-- <div class="header-action-icon-2">
                                            <a href="{{ route('login') }}">
                                                <img class="svgInject" alt="Surfside Media"
                                                    src="assets/imgs/theme/icons/usr.svg">
                                            </a>
                                        </div> --}}
                                    
                                </div>
                            </div>
                            <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%
                            </p>
                            <div class="header-action-right d-block d-lg-none">
                                <div class="header-action-2">
                                    {{-- <div class="header-action-icon-2">
                                        <a href="shop-wishlist.php">
                                            <img alt="Surfside Media" src="assets/imgs/theme/icons/icon-heart.svg">
                                            <span class="pro-count white">4</span>
                                        </a>
                                    </div> --}}

                                    <div class="header-action-icon-2 d-block d-lg-none">
                                        <div class="burger-icon burger-icon-white">
                                            <span class="burger-icon-top"></span>
                                            <span class="burger-icon-mid"></span>
                                            <span class="burger-icon-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </header>
                <div class="mobile-header-active mobile-header-wrapper-style">
                    <div class="mobile-header-wrapper-inner">
                        <div class="mobile-header-top">

                            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                                <button class="close-style search-close">
                                    <i class="icon-top"></i>
                                    <i class="icon-bottom"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mobile-header-content-area">
                            @livewire('header-search-component')
                            <div class="mobile-menu-wrap mobile-header-border">
                                <div class="main-categori-wrap mobile-header-border">
                                    <a class="categori-button-active-2" href="#">
                                        <span class="fi-rs-apps"></span> Browse<i class="fi-rs-angle-down"></i>
                                    </a>
                                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                                        <ul>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a>
                                            </li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a>
                                            </li>
                                            <li> <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a>
                                            </li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer &
                                                    Office</a></li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a>
                                            </li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a>
                                            </li>
                                            <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- mobile menu start -->

                                <nav>
                                    <ul class="mobile-menu">
                                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                                href="shop.html"><span class="fi-rs-shop"></span>shop</a></li>

                                    </ul>
                                </nav>
                                <!-- mobile menu end -->
                            </div>
                            <div class="mobile-header-info-wrap mobile-header-border">

                                <div class="single-mobile-header-info">
                                    <a href="login.html">Log In </a>
                                </div>
                                <div class="single-mobile-header-info">
                                    <a href="#">(+254) 000-000-000 </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{ $slot }}
                <footer class="main">

                    </section>
                    <section class="section-padding footer-mid">
                        <div class="container pt-15 pb-20">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                                        <div class="logo logo-width-1 wow fadeIn animated">
                                            <a href="{{ url('/') }}"><img src="assets/imgs/logo/logo.png"
                                                    alt="logo"></a>
                                        </div>
                                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                                        <p class="wow fadeIn animated">
                                            <strong>Address: </strong>562 Wellington Road
                                        </p>
                                        <p class="wow fadeIn animated">
                                            <strong>Phone: </strong>+1 0000-000-000
                                        </p>
                                        <p class="wow fadeIn animated">
                                            <strong>Email: </strong>contact@surfsidemedia.in
                                        </p>
                                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                            <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg"
                                                    alt=""></a>
                                            <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg"
                                                    alt=""></a>
                                            <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg"
                                                    alt=""></a>
                                            <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg"
                                                    alt=""></a>
                                            <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3">
                                    <h5 class="widget-title wow fadeIn animated">About</h5>
                                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms &amp; Conditions</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2  col-md-3">
                                    <h5 class="widget-title wow fadeIn animated">My Account</h5>
                                    <ul class="footer-list wow fadeIn animated">
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="#">View Cart</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="#">Track My Order</a></li>
                                        <li><a href="#">Order</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 mob-center">
                                    <h5 class="widget-title wow fadeIn animated">Install App</h5>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-12">
                                            <p class="wow fadeIn animated">From App Store or Google Play</p>
                                            <div class="download-app wow fadeIn animated mob-app">
                                                <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active"
                                                        src="assets/imgs/theme/app-store.jpg" alt=""></a>
                                                <a href="#" class="hover-up"><img src="assets/imgs/theme/google-play.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                            <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                                            <img class="wow fadeIn animated" src="assets/imgs/theme/payment-method.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="container pb-20 wow fadeIn animated mob-center">
                        <div class="row">
                            <div class="col-12 mb-20">
                                <div class="footer-bottom"></div>
                            </div>
                            <div class="col-lg-6">
                                <p class="float-md-left font-sm text-muted mb-0">
                                    <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-conditions.html">Terms &
                                        Conditions</a>
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-lg-end text-start font-sm text-muted mb-0">
                                    &copy; <strong class="text-brand">SurfsideMedia</strong> All rights reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Vendor JS-->
                <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
                <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
                <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
                <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
                <script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>

                <script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
                <script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>
                @livewireScripts
                @stack('scripts')
            </body>

            </html>
