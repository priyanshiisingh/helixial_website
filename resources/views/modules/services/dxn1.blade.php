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
    <div id="cancerFind" class="tm-blog-section tm-blog-left-sidebar">
        <div class="container">
            <div class="my-5" data-aos="fade-left" data-aos-duration="3000"><img
                    src="{{ asset('assets/img/new/alpha/humanalpha.svg') }}" alt=""></div>
        </div>
    </div>
    <div class="tm-blog-section tm-blog-left-sidebar  tm-white-bg mt-2 w-100">
        <img src="{{ asset('assets/img/new/alpha/image3alpha.png') }}" alt="assets/img/client/C0039T01 1.png"
            width="100%">
    </div>
    <!-- End Site Content -->
    @include('includes.deliver_with_precision')
    @include('includes.heli_services')
    <!-- End Site Content -->
    @include('includes.contact')
    <!-- End Site Content -->
@endsection
