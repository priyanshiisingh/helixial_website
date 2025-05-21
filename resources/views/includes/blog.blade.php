    <!-- Start Blog Section -->
    <section id="blog">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        {{-- <div class="tm-section-heading text-center">
            <h2>Blogs</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div> --}}

        <div class="blog-text" data-aos="fade-up" data-aos-duration="3000">
            <h2 class="blog-title">Blog <span>Archive</span></h2>
        </div>
        <div class="container">
            <div class="row" data-aos="fade-down" data-aos-duration="3000">
                <div class="col-12">
                    <div class="row g-4">

                        @foreach ($blogs as $blog)
                            @php
                                $image = $blog->attachments->first(); // Get the first attached image
                            @endphp

                            <div class="col-12">
                                <div class="blog-card d-flex flex-md-row flex-column align-items-center gap-3">
                                    <div class="blog-image">
                                        <a href="{{ route('pages.blog.detail', $blog->slug) }}">
                                            <img src="{{ $image != null ? asset($image->url()) : '' }}" alt="blog-image"
                                                class="img-fluid rounded">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="blog-title mb-1">
                                            <a href="{{ route('pages.blog.detail', $blog->slug) }}"
                                                class="text-white fw-bold">
                                                {{ $blog->title }}
                                            </a>
                                        </h5>
                                        <p class="mb-0 text-white">
                                            <span class="fw-bold">{{ $blog->author }}</span><br>
                                            {!! \Illuminate\Support\Str::limit(strip_tags($blog->description), 80) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div><!-- .row -->
                </div><!-- .col-12 -->
            </div><!-- .row -->


        </div>
        <div class="empty-space col-md-b70 col-xs-b40"></div>
    </section>
    <!-- End Blog Section -->
