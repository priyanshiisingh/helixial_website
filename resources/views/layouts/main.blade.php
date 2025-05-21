<!doctype html>
<html>

@include('layouts.head')

<body class="main main-container">
    <!-- Start Preloader -->
    <div id="tm-preloader">
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

<script>
    for(let i = 0; i < 15; i++){
  let parentEl = document.createElement("div");
  parentEl.classList.add("strand");
  parentEl.innerHTML = `
    <div class="top" style="animation-delay:${i * -0.2}s"></div>
    <div class="bottom" style="animation-delay:${-1.5 - (i * 0.2)}s"></div>
  `
  document.querySelector("#tm-preloader").appendChild(parentEl);
}
</script>
</body>

</html>
