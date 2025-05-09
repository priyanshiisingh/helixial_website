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
    <div class="tm-blog-section tm-blog-left-sidebar tm-gradient-bg">
        <div class="container">
            <div class="row">
                <main class="container mt-3">
                    <article data-aos="zoom-in">
                        <header class="mb-4" data-aos="fade-down">
                            <h1 class="text-primary text-white">CancerDetect<sup>™</sup></h1>
                        </header>
                        <div class="mb-5 text-white" data-aos="fade-up">
                            <p>CancerDetect™ is our proprietary liquid biopsy platform designed to detect cancer recurrence
                                at its earliest stages—well before it appears on traditional imaging. This advanced
                                technology analyses unique genetic mutations found in a patient's surgically removed tumour,
                                creating a highly personalized genetic panel for post-operative monitoring.
                            </p>
                        </div>
                        <!-- CancerDetect Feature Icons Section -->
                        <div class="container text-white my-5" data-aos="fade-up">
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <img src="{{ asset('assets/img/client/cancerdetect1.png') }}"
                                        alt="Cancer-related variant detection"
                                        class="img-fluid rounded-circle mb-3 mx-auto d-block"
                                        style="width: 180px; height: 180px; object-fit: cover;">
                                    <h5 class="fw-bold text-white">Cancer-related variant detection</h5>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <img src="{{ asset('assets/img/client/cancerdetect2.png') }}"
                                        alt="Tissue-informed personalized panel design"
                                        class="img-fluid rounded-circle mb-3 mx-auto d-block"
                                        style="width: 180px; height: 180px; object-fit: cover;">
                                    <h5 class="fw-bold text-white">Tissue-informed personalized panel design</h5>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                    <img src="{{ asset('assets/img/client/helixial_3.jpg') }}" alt="Recurrence monitoring"
                                        class="img-fluid rounded-circle mb-3 mx-auto d-block"
                                        style="width: 180px; height: 180px; object-fit: cover;">
                                    <h5 class="fw-bold text-white">Recurrence monitoring</h5>
                                </div>
                            </div>
                        </div>


                        <div class="mb-5 text-white" data-aos="fade-up">
                            <p>By targeting Minimal Residual Disease (MRD), CancerDetect™ offers a powerful, non-invasive
                                method to identify early signs of relapse. It enables clinicians to anticipate recurrence
                                months in advance, allowing for timely and tailored treatment interventions. This
                                precision-driven approach enhances patient outcomes by enabling early therapeutic
                                adjustments and optimizing chemotherapy strategies.
                            </p>
                        </div>

                    </article>
                </main>
            </div>
        </div>
    </div>
    <div class="tm-blog-section tm-blog-left-sidebar tm-e3e8ff-bg">
        <div class="container">
            <div class="row">
                <main class="container mt-3">
                    <header class="mb-4" data-aos="fade-down">
                        <h2 class="text-primary mt-2">The test procedure</h2>
                    </header>
                    <img src="{{ asset('assets/img/client/detect_art021_img.png') }}" alt="detect_art021_img.png">
                </main>
            </div>
        </div>
        <div class="empty-space col-md-b80 col-xs-b80"></div>
    </div>
    <!-- End Site Content -->
@endsection
