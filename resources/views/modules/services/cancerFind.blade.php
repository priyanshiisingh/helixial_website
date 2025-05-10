@extends('layouts.main')

@section('content')
    <!-- Start Blog Header -->
    {{-- <section class="tm-blog-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tm-blog-hero-title">Services</h1>
                    <ul class="tm-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('pages.service') }}">Services</a></li>
                        <li>AlphaLiquid® Biopsy</li>
                    </ul>
                </div><!-- .col -->
            </div>
        </div>
    </section> --}}
    <!-- End Blog Header -->
    <div class="empty-space col-md-b80 col-xs-b80"></div>

    <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-left-sidebar tm-gradient-blog-bg">
        <div class="container">
            <div class="row">
                <main class="container mt-3">
                    <article data-aos="zoom-in">
                        <header class="mb-4" data-aos="fade-down">
                            <h1 class="text-primary text-white">CancerFind<sup>™</sup></h1>
                        </header>
                        <div class="mb-5 text-white" data-aos="fade-up">
                            <p>CancerFind™ is a revolutionary blood-based test for Multiple Cancer Early Detection
                                (MCED)—designed to identify the presence of various cancer types through a single,
                                non-invasive blood draw.
                                <br>
                                <br>
                                It offers a convenient screening solution for asymptomatic individuals and those at high
                                risk, making it easy to incorporate into routine medical checkups. Beyond detection,
                                CancerFind™ provides accurate predictions of the tissue of origin of any cancer signal,
                                enabling faster and more targeted clinical decision-making. It can prove to be crucial for
                                individuals who want early confirmation of cancer, those with a family history, or those
                                needing further examination after screenings.
                                By facilitating early diagnosis and guiding next steps, CancerFind™ plays a critical role in
                                improving patient outcomes and advancing proactive cancer care.

                            </p>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
    <div class="tm-blog-section tm-blog-left-sidebar tm-7098a9-bg">
        <div class="container">
            <div class="row">
                <main class="container mt-3">
                    <header class="mb-4" data-aos="fade-down">
                        <h2 class="mt-2">The test procedure</h2>
                    </header>
                    <img src="{{ asset('assets/img/client/helixial_1.jpg') }}" alt="assets/img/client/helixial_1.jpg">
                </main>
            </div>
        </div>
        <div class="empty-space col-md-b80 col-xs-b80"></div>
    </div>
    <!-- End Site Content -->
@endsection
