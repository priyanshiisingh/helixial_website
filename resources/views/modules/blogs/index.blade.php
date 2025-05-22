@extends('layouts.main')

@section('content')
    <!-- Start Blog Header -->
    {{-- <section class="tm-blog-hero">
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
    </section> --}}
    <!-- End Blog Header -->

    <div class="empty-space col-md-b75 col-xs-b75"></div>
    <div class="empty-space col-md-b85 col-xs-b85"></div>

    <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-right-sidebar">
        {{-- <div class="empty-space col-md-b100 col-xs-b70"></div> --}}
        <div class="container">
            <div class="about-content mb-0 pb-3 pt-6">
                <div class="w-100" data-aos="fade-right" data-aos-duration="3000">
                    <h1 class="section-title">Our <strong>Blogs</strong></strong></h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-right-sidebar">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <div class="row">
                <main class="col-xl-12">
                    <div class="tm-site-main">

                        @foreach ($blogs as $blog)
                            @php
                                $image = $blog->attachments->first(); // Get the first attached image
                            @endphp
                            <article class="tm-post">
                                <header class="tm-entry-header">
                                    <div class="tm-post-thumb">
                                        <a href="{{ route('pages.blog.detail', $blog->slug) }}" class="tm-link-block">
                                            <img src="{{ $image != null ? asset($image->url()) : '' }}" alt="">
                                            <div class="tm-blog-hover">
                                                <span class="tm-blog-shap"></span>
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tm-post-details-wrap">
                                        <h2 class="tm-entry-title text-white"><a
                                                href="{{ route('pages.blog.detail', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h2>
                                        <div class="tm-byline">
                                            <span class="author">
                                                <a href="{{ route('pages.blog.detail', $blog->slug) }}" class="bar-link"><i
                                                        class="fa fa-user"></i>{{ $blog->author }}</a>
                                            </span>
                                            <span class="posted-on"><i
                                                    class="fa fa-calendar"></i>{{ formatPrettyDate($blog->created_at) }}</span>
                                            {{-- <span><i class="fa fa-tag"></i>Medical</span> --}}
                                        </div>
                                    </div><!-- .tm-post-details-wrap -->
                                </header><!-- .tm-entry-header -->
                                <div class="tm-entry-content">
                                    <p>{!! shortDescriptionText($blog->description) !!}</p>
                                </div>
                                <div class="empty-space col-xs-b30"></div>
                                <a href="{{ route('pages.blog.detail', $blog->slug) }}" class="tm-btn1">Read More</a>
                            </article><!-- .post -->
                        @endforeach

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
