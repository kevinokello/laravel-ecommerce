<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Surfside2 Media</title>
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
                {{ $slot }}
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
