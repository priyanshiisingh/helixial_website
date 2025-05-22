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
    <div class="empty-space col-md-b75 col-xs-b75"></div>
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
                <div class="rectangle text-center d-flex align-items-center justify-content-center"><a href="#cancerDetect"
                        class="text-white text-decoration-none">
                        Cancer <strong>Detect</strong>
                    </a>
                </div>
            </div>



            <div class="box">
                <div class="rectangle text-center d-flex align-items-center justify-content-center">
                    <a href="#alphaProfiling" class="text-white text-decoration-none">Alpha Liquid Profiling</a>
                </div>
            </div>


            <div class="box">
                <div class="rectangle text-center d-flex align-items-center justify-content-center">
                    <a href="#cancerFind" class="text-white text-decoration-none">Cancer <strong>Find</strong></a>
                </div>
            </div>

        </div>
    </div>

    <!-- End Site Content -->
    @include('includes.alpha_profiling_process')
    @include('includes.cancer_detect_process')
    @include('includes.cancer_find_process')
    @include('includes.deliver_with_precision')
    @include('includes.heli_services')
    @include('includes.contact')
@endsection
