    <!-- Start Site Header Wrap -->
    <header>
        <div class="tm-site-header">
            {{-- <div class="tm-header-info-wrap">
                <div class="container tm-header-info">
                    <a href="#"><i class="fa fa-phone"></i>701-686-1759</a>
                    <a href="mailto:Info@helixialservices.com"><i class="fa fa-envelope"></i>Info@helixialservices.com</a>
                </div>
            </div> --}}
            <div class="tm-header-info-wrap">
                <a href="{{ route('home') }}" class="tm-logo-link">
                    <img src="{{ asset('assets/img/client/logo/helixial_logo_transparent.png') }}" alt="Helixial Logo"
                        class="tm-logo">
                </a>
            </div>
            <div class="tm-header-menu tm-gradient-header-bg">
                <div class="container tm-header-menu-container">
                    <div class="tm-site-branding hidden-on-top">
                        <!-- For Image Logo -->
                        <a href="{{ route('home') }}" class="tm-logo-link">
                            <img src="{{ asset('assets/img/client/logo/helixial_logo_transparent.png') }}"
                                alt="Helixial Logo" class="tm-logo">
                        </a>
                        <!-- For Site Title -->
                        <!-- <span class="tm-site-title">
                        <a href="index.html">Helixial</a>
                        </span> -->
                    </div>
                    <nav class="tm-primary-nav tm-onepage-nav">
                        <ul class="tm-primary-nav-list">
                            <li class="menu-item">
                                <a href="{{ route('home') }}"
                                    class="nav-link tm-smooth-move {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a>
                            </li>
                            <li class="menu-item  menu-item-has-children"><a href="#"
                                    class="nav-link tm-smooth-move {{ Route::currentRouteName() == 'pages.about' ? 'active' : '' }}">About
                                    Us</a>
                                <ul>
                                    <li class="menu-item"><a href="{{ route('pages.about') }}" class="sub-item">About
                                            Us</a></li>
                                    <li class="menu-item"><a href="{{ route('pages.advisory') }}"
                                            class="sub-item">Advisory Board</a></li>
                                    <li class="menu-item"><a href="{{ route('pages.career') }}"
                                            class="sub-item">Careers</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="#"
                                    class="nav-link tm-smooth-move {{ Route::currentRouteName() == 'pages.service' ? 'active' : '' }}">Our
                                    Services</a>
                                <ul>
                                    <li class="menu-item"><a href="{{ route('pages.service.dxn1') }}"
                                            class="sub-item">DXN1</a></li>
                                    <li class="menu-item"><a href="{{ route('pages.service.alphaProfiling') }}"
                                            class="sub-item">AlphaLiquid® Biopsy</a></li>
                                </ul>
                            </li>
                            {{-- <li class="menu-item"><a href="#doctor" class="nav-link tm-smooth-move">DOCTOR</a></li> --}}
                            <li class="menu-item"><a href="{{ route('pages.partners') }}"
                                    class="nav-link tm-smooth-move">Partners</a></li>
                            {{-- <li class="menu-item"><a href="#price" class="nav-link tm-smooth-move">PRICE</a></li> --}}
                            <li class="menu-item "><a href="{{ route('pages.blog') }}"
                                    class="nav-link tm-smooth-move {{ Route::currentRouteName() == 'pages.blog' ? 'active' : '' }}">Blogs</a>
                            <li class="menu-item "><a href="{{ route('pages.outreach') }}"
                                    class="nav-link tm-smooth-move">Outreach Activity</a>
                            <li class="menu-item "><a href="{{ route('pages.contact') }}"
                                    class="nav-link tm-smooth-move">Contact Us</a>

                                {{-- /menu-item-has-children --}}
                                {{-- <ul>
                                    <li class="menu-item"><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li class="menu-item"><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li class="menu-item"><a href="blog-full-width.html">Blog Full Width</a></li>
                                    <li class="menu-item"><a href="blog-details-right-sidebar.html">Single Blog Image Post</a></li>
                                    <li class="menu-item"><a href="blog-details-left-sidebar.html">Single Blog Slider Post</a></li>
                                    <li class="menu-item"><a href="blog-details-full-width.html">Single Blog Video Post</a></li>
                                </ul> --}}
                            </li>
                            {{-- <li class="menu-item"><a href="{{ route('home') }}#contact" class="nav-link tm-smooth-move">Contact</a></li> --}}
                            {{-- <li class="menu-item"><a href="#appointment" class="nav-link tm-smooth-move">APPOINTMENT</a></li> --}}
                        </ul>
                    </nav>
                </div><!-- .tm-header-menu-container -->
            </div><!-- .tm-header-menu -->
        </div><!-- .tm-site-header -->
    </header>
    <!-- End Site Header Wrap -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const branding = document.querySelector('.tm-site-branding');
        const headerInfo = document.querySelector('.tm-header-info-wrap');
        const headerMenuContainer = document.querySelector('.tm-header-menu-container');

        function toggleHeaderElements() {
            const isMobile = window.innerWidth <= 991;

            if (isMobile) {
                branding?.classList.remove('hidden-on-top');
                branding?.classList.add('show-on-scroll');
                headerMenuContainer?.classList.remove('center-nav'); // Don't center on mobile
                return;
            }

            if (window.scrollY > 50) {
                branding?.classList.add('show-on-scroll');
                branding?.classList.remove('hidden-on-top');
                headerInfo?.classList.add('hide-on-scroll');
                headerMenuContainer?.classList.remove('center-nav'); // move to side on scroll
            } else {
                branding?.classList.remove('show-on-scroll');
                branding?.classList.add('hidden-on-top');
                headerInfo?.classList.remove('hide-on-scroll');
                headerMenuContainer?.classList.add('center-nav'); // center on top before scroll
            }
        }

        window.addEventListener('scroll', toggleHeaderElements);
        window.addEventListener('resize', toggleHeaderElements);
        toggleHeaderElements();
    });
</script>

