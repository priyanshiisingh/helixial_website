<!doctype html>
<html>

@include('layouts.head')

<body>

    <!-- Start Preloader -->
    <div id="tm-preloader">
        <div id="tm-preloader-in">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Preloader -->

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- Scroll Up -->
    <div id='scrollup'></div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
