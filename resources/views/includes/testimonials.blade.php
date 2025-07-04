    <!-- Start Testimonial Section -->
    <section>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <div class="services-text" data-aos="fade-down" data-aos-duration="3000">
                <h2 class="testimonials-title">Testimonials</h2>
                {{-- <div class="tm-section-seperator"><span></span></div> --}}
                <div class="empty-space col-md-b60 col-xs-b40"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="owl-carousel tm-testimonial tm-testimonial-1 tm-dots1">

                        @if (!$testimonials->isEmpty())
                            @foreach ($testimonials as $testimonial)
                                @php
                                    $image = $testimonial->attachments->first(); // Get the first attached image
                                @endphp
                                <div class="tm-single-testimonial">
                                    <div class="testimonial-card">
                                        <p class="testimonial-text">{!! $testimonial->description !!}</p>

                                        <div class="testimonial-author">
                                            <div class="author-avatar"><img src="{{ $image != null ? asset($image->url()) : '' }}" alt="">
                                            </div>
                                            <p class="author-info">{{ $testimonial->author }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-space col-md-b75 col-xs-b70"></div>
    </section>
    <!-- End Testimonial Section -->
