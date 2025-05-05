    <!-- Start Site Header Wrap -->
    <header>
        <div class="tm-site-header">
            {{-- <div class="tm-header-info-wrap">
                <div class="container tm-header-info">
                    <a href="#"><i class="fa fa-phone"></i>701-686-1759</a>
                    <a href="mailto:Info@helixialservices.com"><i class="fa fa-envelope"></i>Info@helixialservices.com</a>
                </div>
            </div> --}}
            <div class="tm-header-menu">
                <div class="container tm-header-menu-container">
                    <div class="tm-site-branding">
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
                                    class="nav-link tm-smooth-move {{ Route::currentRouteName() == 'pages.about' ? 'active' : '' }}">This
                                    Is Helixial</a>
                                <ul>
                                    <li class="menu-item"><a href="{{ route('pages.about') }}">About Us</a></li>
                                    <li class="menu-item"><a href="{{ route('pages.career') }}">Careers</a></li>
                                    <li class="menu-item"><a href="{{ route('pages.contact') }}">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="#"
                                    class="nav-link tm-smooth-move {{ Route::currentRouteName() == 'pages.service' ? 'active' : '' }}">Our
                                    Services</a>
                                    <ul>
                                        <li class="menu-item"><a href="{{ route('pages.service.dxn1') }}">DXN1</a></li>
                                        <li class="menu-item"><a href="{{ route('pages.service.alphaProfiling') }}">Alpha Liquid Profiling</a></li>
                                    </ul>
                            </li>
                            {{-- <li class="menu-item"><a href="#doctor" class="nav-link tm-smooth-move">DOCTOR</a></li> --}}
                            <li class="menu-item"><a href="{{ route('home') }}#gallery"
                                    class="nav-link tm-smooth-move">Partners</a></li>
                            {{-- <li class="menu-item"><a href="#price" class="nav-link tm-smooth-move">PRICE</a></li> --}}
                            <li class="menu-item "><a href="{{ route('pages.blog') }}"
                                    class="nav-link tm-smooth-move {{ Route::currentRouteName() == 'pages.blog' ? 'active' : '' }}">Blogs</a>
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
