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
    <div class="empty-space col-lg-b75"></div>
    <div class="empty-space col-md-b80 col-xs-b80"></div>

    <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-left-sidebar">
        <div class="container">
            <div class="about-content mb-0 pb-3 pt-6">
                <div class="w-100" data-aos="fade-right" data-aos-duration="3000">
                    <h1 class="section-title">Our <strong>Services</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up">
        <div class="d-flex justify-content-center flex-wrap gap-3 mb-4">

            <div class="box">
                <div class="rectangle text-center d-flex align-items-center justify-content-center"><a href="{{ route('pages.service.cancerDetect') }}"
                        class="text-white text-decoration-none">
                        Cancer <strong>Detect</strong>
                    </a>
                </div>
            </div>



            <div class="box">
                <div class="rectangle text-center d-flex align-items-center justify-content-center">
                    <a href="{{ route('pages.service.alphaProfiling') }}" class="text-white text-decoration-none">Alpha Liquid Profiling</a>
                </div>
            </div>


            <div class="box">
                <div class="rectangle text-center d-flex align-items-center justify-content-center">
                    <a href="{{ route('pages.service.cancerFind') }}" class="text-white text-decoration-none">Cancer <strong>Find</strong></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Start Site Content -->
    <div id="cancerDetect" class="tm-blog-section tm-blog-left-sidebar">
        <div class="container">
            <div class="about-content mb-0">
                <div class="w-100">
                    <h1 class="section-title">Cancer <strong>Detect</strong></h1>
                </div>
                <div class="about-content-new" data-aos="fade-left" data-aos-duration="3000">
                    <b>
                        CancerDetect™: Personalized liquid biopsy for early detection of cancer recurrence
                    </b>
                    <br><br>
                    <p>
                        With CancerDetect™, we bring next-generation cancer surveillance to the forefront—empowering
                        proactive, personalized, and data-driven oncology care.
                        <br><br>
                        CancerDetect™ is our proprietary liquid biopsy platform designed to detect cancer recurrence at
                        its earliest stages—well before it appears on traditional imaging. This advanced technology
                        analyses unique genetic mutations found in a patient's surgically removed tumour, creating a
                        highly personalized genetic panel for post-operative monitoring.
                        <br><br>
                        By targeting Minimal Residual Disease (MRD), CancerDetect™ offers a powerful, non-invasive
                        method to identify early signs of relapse. It enables clinicians to anticipate recurrence months
                        in advance, allowing for timely and tailored treatment interventions. This precision-driven
                        approach enhances patient outcomes by enabling early therapeutic adjustments and optimizing
                        chemotherapy strategies.
                    </p>
                </div>
                <div class="w-100 mt-2" data-aos="fade-right" data-aos-duration="3000">
                    <img src="{{ asset('assets/img/new/alpha/Icons.svg') }}" alt="">
                </div>

                <div data-aos="fade-right" data-aos-duration="3000" style="max-height: 300px;">
                    <img src="{{ asset('assets/img/client/helixial_2.jpg') }}" alt="assets/img/client/helixial_2.jpg"
                        style=" border-radius: 50px;">
                </div>
            </div>
        </div>
    </div>
    <!-- End Site Content -->

    <!-- End Site Content -->
    @include('includes.contact')
    <!-- End Site Content -->
@endsection
