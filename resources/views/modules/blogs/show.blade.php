@extends('layouts.main')

@section('content')
    <!-- Start Blog Header -->
    <section class="tm-blog-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tm-blog-hero-title">Blogs</h1>
                    <ul class="tm-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('pages.service') }}">Blogs</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div><!-- .col -->
            </div>
        </div>
    </section>
    <!-- End Blog Header -->

    <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-left-sidebar">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <div class="row">
                <aside class="col-xl-3 col-lg-4 sidebar">
                    <div class="empty-space col-md-b0 col-xs-b40"></div>
                    <section class="widget widget_search">
                        <h2 class="widget-title">Search</h2>
                        <form role="search" method="get" class="search-form">
                            <input type="submit" class="search-btn">
                            <label>
                                <input type="text" class="search-field" placeholder="Search …">
                            </label>
                        </form>
                    </section>
                    <section class="widget widget_categories">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            <li><a href="#">Business Growth</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul>
                    </section><!-- .widget -->
                    <section class="widget widget_recent_entries">
                        <h2 class="widget-title">Recent Post</h2>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/img/recent-post-01.jpg') }}" alt="">
                                    <div class="r-post-head">
                                        <h2>Lorem Ipsum Dolor..</h2>
                                        <span>February 11, 2018</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/img/recent-post-02.jpg') }}" alt="">
                                    <div class="r-post-head">
                                        <h2>Lorem Ipsum Dolor..</h2>
                                        <span>February 11, 2018</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/img/recent-post-03.jpg') }}" alt="">
                                    <div class="r-post-head">
                                        <h2>Lorem Ipsum Dolor..</h2>
                                        <span>February 11, 2018</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </section><!-- .widget -->
                    <section class="widget widget_tag_cloud">
                        <h2 class="widget-title">Popular tags</h2>
                        <div class="tagcloud">
                            <a href="#">Idea</a>
                            <a href="#">Book</a>
                            <a href="#">Service</a>
                            <a href="#">Clean</a>
                            <a href="#">Marketing</a>
                            <a href="#">Agency</a>
                            <a href="#">Unique</a>
                            <a href="#">Creative </a>
                            <a href="#">Clear</a>
                        </div>
                    </section><!-- .widget -->
                    <section class="widget widget_archive">
                        <h2 class="widget-title">Archives</h2>
                        <ul>
                            <li><a href="#">January 2017</a></li>
                            <li><a href="#">March 2017</a></li>
                            <li><a href="#">Julay 2017</a></li>
                            <li><a href="#">Julay 2017</a></li>
                            <li><a href="#">November 2017</a></li>
                            <li><a href="#">February 018</a></li>
                        </ul>
                    </section><!-- .widget -->
                </aside>
                <main class="col-xl-9 col-lg-8">
                    <div class="tm-site-main">
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
                                    <h2 class="tm-entry-title text-002735">{{ $blog->title }}</h2>
                                    <div class="tm-byline">
                                        <span class="author">
                                            <a href="#" class="bar-link"><i class="fa fa-user"></i>{{ $blog->author }}</a>
                                        </span>
                                        <span class="posted-on"><i class="fa fa-calendar"></i>{{ formatPrettyDate($blog->created_at) }}</span>
                                        {{-- <span><i class="fa fa-tag"></i>Medical</span> --}}
                                    </div>
                                </div><!-- .tm-post-details-wrap -->
                            </header><!-- .tm-entry-header -->
                            <div class="tm-entry-content">
                                <p>{!! $blog->description !!}</p>
                            </div>
                        </article><!-- .post -->

                        {{-- <div class="empty-space col-md-b60 col-xs-b30"></div> --}}
                        <!-- Start Comment Area -->
                        {{-- <div class="comments-area">
                            <h2 class="comments-title">3 Comments</h2>
                            <div class="empty-space col-md-b40 col-xs-b30"></div>
                            <ol class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <div class="comment-author">
                                                <img src="{{ asset('assets/img/client-1.jpg') }}" alt=""
                                                    class="avatar">
                                                <a href="#" class="nm">Robart Newman</a>
                                            </div><!-- .comment-author -->
                                            <div class="comment-metadata">
                                                <span>February 10, 2018. 2:25 PM.</span>
                                            </div><!-- .comment-metadata -->
                                            <div class="reply"><a href="#" class="comment-reply-link"><i
                                                        class="fa fa-reply"></i>Reply</a></div>
                                        </div><!-- .comment-meta -->
                                        <div class="comment-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.</p>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <div class="comment-author">
                                                        <img src="{{ asset('assets/img/client-2.jpg') }}" alt=""
                                                            class="avatar">
                                                        <span class="nm"><a href="#">Mark Eaton</a></span>
                                                    </div><!-- .comment-author -->
                                                    <div class="comment-metadata">
                                                        <a href="#"><span>February 12, 2018. 6:20 PM. </span></a>
                                                    </div><!-- .comment-metadata -->
                                                    <div class="reply"><a href="#" class="comment-reply-link"><i
                                                                class="fa fa-reply"></i>Reply</a></div>
                                                </div><!-- .comment-meta -->
                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco quat.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol><!-- .children -->
                                </li>
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-meta">
                                            <div class="comment-author">
                                                <img src="{{ asset('assets/img/client-3.jpg') }}" alt=""
                                                    class="avatar">
                                                <a href="#" class="nm">Anderson Smith</a>
                                            </div><!-- .comment-author -->
                                            <div class="comment-metadata">
                                                <a href="#"><span>February 10, 2018. 2:25 PM.</span></a>
                                            </div><!-- .comment-metadata -->
                                            <div class="reply"><a href="#" class="comment-reply-link"><i
                                                        class="fa fa-reply"></i>Reply</a></div>
                                        </div><!-- .comment-meta -->
                                        <div class="comment-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.</p>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-meta">
                                                    <div class="comment-author">
                                                        <img src="{{ asset('assets/img/client-1.jpg') }}" alt=""
                                                            class="avatar">
                                                        <span class="nm"><a href="#">Robart Newman</a></span>
                                                    </div><!-- .comment-author -->
                                                    <div class="comment-metadata">
                                                        <a href="#"><span>February 12, 2018. 6:20 PM. </span></a>
                                                    </div><!-- .comment-metadata -->
                                                    <div class="reply"><a href="#" class="comment-reply-link"><i
                                                                class="fa fa-reply"></i>Reply</a></div>
                                                </div><!-- .comment-meta -->
                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam, quis nostrud exercitation ullamco quat.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol><!-- .children -->
                                </li>
                            </ol><!-- .comment-list -->
                            <div class="comment-respond">
                                <h2 class="comment-reply-title">Leave a reply</h2>
                                <div class="empty-space col-md-b40 col-xs-b30"></div>
                                <form method="post" class="comment-form">
                                    <p class="comment-form-comment">
                                        <textarea name="comment" cols="40" rows="5" placeholder="Write here...*" required></textarea>
                                    </p>
                                    <p class="comment-form-author">
                                        <input name="author" type="text" placeholder="Name*" required>
                                    </p>
                                    <p class="comment-form-email">
                                        <input name="email" type="email" placeholder="E-mail*" required>
                                    </p>
                                    <p class="comment-form-url">
                                        <input id="url" name="url" type="url" placeholder="Website">
                                    </p>
                                    <p class="form-submit">
                                        <button type="submit" class="tm-btn1"><span>POST COMMENT</span></button>
                                    </p>
                                </form>
                            </div><!-- .comment-respond -->
                        </div><!-- .comments-area --> --}}
                        <!-- End Comment Area -->
                    </div><!-- .tm-site-main -->
                </main><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </div>
    <!-- End Site Content -->
@endsection
