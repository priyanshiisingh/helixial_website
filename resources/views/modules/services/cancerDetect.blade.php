@extends('layouts.main')

@section('content')
    <!-- Start Blog Header -->
    <section class="tm-blog-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tm-blog-hero-title">Services</h1>
                    <ul class="tm-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('pages.service') }}">Services</a></li>
                        <li>CancerDetect</li>
                    </ul>
                </div><!-- .col -->
            </div>
        </div>
    </section>
    <!-- End Blog Header -->

    <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-left-sidebar">
        <div class="container">
            <div class="row">
                <main class="container mt-3">
                    <article data-aos="zoom-in">

                        <section class="mb-5" data-aos="zoom-in-up">
                            <h1 class="text-primary">CancerDetect<sup>™</sup></h1>
                            <p>Personalized Liquid Biopsy for Early Detection of Cancer Recurrence. Designed to detect
                                recurrence at its earliest stages, using tumor-specific mutations from the patient’s removed
                                tumor.</p>
                            <ul style="list-style: none">
                                <li data-aos="fade-up" data-aos-delay="100">🔍 Targets Minimal Residual Disease (MRD)</li>
                                <li data-aos="fade-up" data-aos-delay="200">📆 Detects relapse months before imaging</li>
                                <li data-aos="fade-up" data-aos-delay="300">🎯 Enables early treatment adjustments</li>
                            </ul>
                            <h2><strong>Process / Protocol:</strong></h2>
                            {{-- @include('includes.cancer_detect_process') --}}
                            <img src="{{ asset('assets/img/client/detect_art021_img.png') }}" alt="detect_art021_img.png">
                            <h2 class="mt-3"><strong>Clinical Validation:</strong></h2>
                            <img src="{{ asset('assets/img/client/detect_art03_img.png') }}" alt="detect_art021_img.png">
                        </section>
                    </article>
                </main>
            </div>
        </div>
    </div>
    <!-- End Site Content -->
@endsection
