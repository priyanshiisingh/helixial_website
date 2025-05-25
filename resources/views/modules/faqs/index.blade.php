    @extends('layouts.main')

    @section('content')
        <div class="empty-space col-lg-b75"></div>
        <div class="empty-space col-md-b85 col-xs-b85"></div>
        <!-- Start FAQ Section -->
        <section class="tm-overflow-hide">
            <div class="row">
                <div class="col">
                    <!-- Start Site Content -->
                    <div class="tm-blog-section tm-blog-right-sidebar">
                        {{-- <div class="empty-space col-md-b100 col-xs-b70"></div> --}}
                        <div class="container">
                            <div class="about-content mb-0 pb-3 pt-6">
                                <div class="w-100" data-aos="fade-right" data-aos-duration="3000">
                                    <h1 class="section-title">Frequently <strong>Asked Questions</strong></h1>
                                </div>
                            </div>

                            <div class="accordian-wrapper">
                                <div class="accordian">

                                    @if (!$faqs->isEmpty())
                                        @foreach ($faqs as $faq)
                                            <div class="single-accordian">
                                                <h3 class="accordian-head">{{ $faq->question }}</h3>
                                                <div class="accordian-body">{!! $faq->answer !!}</div>
                                            </div><!-- .single-accordian -->
                                        @endforeach
                                    @else
                                        <div>
                                            No FAQs found
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="empty-space col-md-b60 col-xs-b70"></div>
                        </div>
                    </div>

                </div><!-- .col -->
            </div>
        </section>
        <!-- End FAQ Section -->
    @endsection
