@extends('layouts.main')

@section('content')
<!-- Start Blog Header -->
    <section class="tm-blog-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tm-blog-hero-title">Our Blogs</h1>
                    <ul class="tm-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Blogs</li>
                    </ul>
                </div><!-- .col -->
            </div>
        </div>
    </section>
    <!-- End Blog Header -->

       <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-right-sidebar">
    	<div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <div class="row">
                <main class="col-xl-12">
                    <div class="tm-site-main">
                        <article class="tm-post">
                            <header class="tm-entry-header">
                                <div class="tm-post-thumb">
                                    <div class="tm-post-carousel owl-carousel">
                                        <img src="assets/img/blog-05.jpg" alt="">
                                        <img src="assets/img/blog-06.jpg" alt="">
                                        <img src="assets/img/blog-09.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tm-post-details-wrap">
                                    <h2 class="tm-entry-title"><a href="{{ route('pages.blog.detail') }}">Lorem ipsum dolor sit amet, consectetur adipisicing eliust</a></h2>
                                    <div class="tm-byline">
                                        <span class="author">
                                            <a href="{{ route('pages.blog.detail') }}" class="bar-link"><i class="fa fa-user"></i>Admin</a>
                                        </span>
                                        <span class="posted-on"><i class="fa fa-calendar"></i>February 21, 2018</span>
                                        <span><i class="fa fa-tag"></i>Medical</span>
                                    </div>
                                </div><!-- .tm-post-details-wrap -->
                            </header><!-- .tm-entry-header -->
                            <div class="tm-entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="empty-space col-xs-b30"></div>
                            <a href="{{ route('pages.blog.detail') }}" class="tm-btn1">Read More</a>
                        </article><!-- .post -->
                        <article class="tm-post">
                            <header class="tm-entry-header">
                                <div class="tm-post-thumb">
                                    <!-- For Youtube -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" width="816" height="459" src="https://www.youtube.com/embed/vGOL7ZvuGMc" allowfullscreen>
                                        </iframe>
                                    </div>
                                    <!-- For Vimeo -->
                                    <!-- <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" width="816" height="459" src="https://player.vimeo.com/video/172077385?title=0&tm-byline=0&portrait=0&color=EE5A3F&autoplay=0&loop=0&wmode=transparent" allowfullscreen></iframe>
                                    </div> -->
                                </div>
                                <div class="tm-post-details-wrap">
                                    <h2 class="tm-entry-title"><a href="{{ route('pages.blog.detail') }}">Lorem ipsum dolor sit amet, consectetur adipisicing eliust</a></h2>
                                    <div class="tm-byline">
                                        <span class="author">
                                            <a href="{{ route('pages.blog.detail') }}" class="bar-link"><i class="fa fa-user"></i>Admin</a>
                                        </span>
                                        <span class="posted-on"><i class="fa fa-calendar"></i>February 21, 2018</span>
                                        <span><i class="fa fa-tag"></i>Medical</span>
                                    </div>
                                </div><!-- .tm-post-details-wrap -->
                            </header><!-- .tm-entry-header -->
                            <div class="tm-entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="empty-space col-xs-b30"></div>
                            <a href="{{ route('pages.blog.detail') }}" class="tm-btn1">Read More</a>
                        </article><!-- .post -->
                        <article class="tm-post">
                            <header class="tm-entry-header">
                                <div class="tm-post-details-wrap tm-post-blockquote tm-gray-bg">
                                    <div class="tm-entry-content">
                                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet.</blockquote>
                                        <div class="tm-quote-meta">
                                            <h4>Robert Smith</h4>
                                            <span>Director</span>
                                        </div>
                                    </div>
                                    <div class="tm-byline">
                                        <span class="author">
                                            <a href="{{ route('pages.blog.detail') }}" class="bar-link"><i class="fa fa-user"></i>Admin</a>
                                        </span>
                                        <span class="posted-on"><i class="fa fa-calendar"></i>February 21, 2018</span>
                                        <span><i class="fa fa-tag"></i>Medical</span>
                                    </div>
                                </div><!-- .tm-post-details-wrap -->
                            </header><!-- .tm-entry-header -->
                            <div class="empty-space col-xs-b30"></div>
                            <a href="{{ route('pages.blog.detail') }}" class="tm-btn1">Read More</a>
                        </article><!-- .post -->
                        <article class="tm-post">
                            <header class="tm-entry-header">
                                <div class="tm-post-thumb">
                                    <a href="{{ route('pages.blog.detail') }}" class="tm-link-block">
                                        <img src="assets/img/blog-08.jpg" alt="">
                                        <div class="tm-blog-hover">
                                            <span class="tm-blog-shap"></span>
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="tm-post-details-wrap">
                                    <h2 class="tm-entry-title"><a href="{{ route('pages.blog.detail') }}">Lorem ipsum dolor sit amet, consectetur adipisicing eliust</a></h2>
                                    <div class="tm-byline">
                                        <span class="author">
                                            <a href="{{ route('pages.blog.detail') }}" class="bar-link"><i class="fa fa-user"></i>Admin</a>
                                        </span>
                                        <span class="posted-on"><i class="fa fa-calendar"></i>February 21, 2018</span>
                                        <span><i class="fa fa-tag"></i>Medical</span>
                                    </div>
                                </div><!-- .tm-post-details-wrap -->
                            </header><!-- .tm-entry-header -->
                            <div class="tm-entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="empty-space col-xs-b30"></div>
                            <a href="{{ route('pages.blog.detail') }}" class="tm-btn1">Read More</a>
                        </article><!-- .post -->
                        <div class="tm-pagination">
                            <!-- <a href="#" class="tm-prev-page"><i class="icofont icofont-long-arrow-left"></i></a> -->
                            <div class="tm-page-number">
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <span>...</span>
                                <a href="#">4</a>
                            </div>
                            <a href="#" class="tm-next-page"><i class="icofont icofont-long-arrow-right"></i></a>
                        </div>
                    </div><!-- .tm-site-main -->
                </main><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </div>
    <!-- End Site Content -->
@endsection
