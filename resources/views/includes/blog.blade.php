    <!-- Start Blog Section -->
    <section id="blog" class="tm-gradient-top-down-bg">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        {{-- <div class="tm-section-heading text-center">
            <h2>Blogs</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div> --}}
        <div class="container">
            <div class="row" data-aos="fade-down" data-aos-duration="3000">
                <div class="col-12">
                    <div class="row g-4">

                        @foreach ($blogs as $blog)
                            @php
                                $image = $blog->attachments->first(); // Get the first attached image
                            @endphp

                            <div class="col-md-4">
                                <div class="tm-post tm-style1 h-100 d-flex flex-column">
                                    <div class="tm-post-thumb">
                                        <a href="{{ route('pages.blog.detail', $blog->slug) }}" class="tm-link-block">
                                            <img src="{{ $image != null ? asset($image->url()) : '' }}" alt="blog-02" class="img-fluid">
                                            <div class="tm-blog-hover small">
                                                <span class="tm-blog-shap"></span>
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tm-blog-body mt-3">
                                        <h2 class="tm-blog-heading">
                                            <a href="{{ route('pages.blog.detail', $blog->slug) }}" class="tm-link-block">{{ $blog->title }}</a>
                                        </h2>
                                        <div class="tm-blog-meta mt-2 mb-2">
                                            <span><a href="{{ route('pages.blog.detail', $blog->slug) }}" class="bar-link"><i
                                                        class="fa fa-user"></i> {{ $blog->author }}</a></span>
                                        </div>
                                        <div class="tm-blog-separator"></div>
                                        <div class="tm-entry-content-front mt-2">
                                            <p>{!! shortestDescriptionText($blog->description) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div><!-- .row -->
                </div><!-- .col-12 -->
            </div><!-- .row -->
            <div class="blog-text" data-aos="fade-up" data-aos-duration="3000">
                <h1>Blog Archive</h1>
            </div>

        </div>
        <div class="empty-space col-md-b70 col-xs-b40"></div>
    </section>
    <!-- End Blog Section -->
