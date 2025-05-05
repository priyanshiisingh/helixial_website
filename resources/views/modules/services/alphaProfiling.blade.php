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
                        <li>AlphaLiquid Profiling</li>
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
                        <header class="mb-4" data-aos="fade-down">
                            <h2 class="text-primary">AlphaLiquid Profiling</h2>
                        </header>
                        <div class="mb-5" data-aos="fade-up">
                            <p><strong>AlphaLiquid®100</strong> is an innovative, cutting-edge liquid biopsy test that
                                empowers personalized cancer care by detecting biomarkers across 118 cancer-related genes
                                through just one blood draw. This non-invasive, highly advanced test is essential for
                                predicting a patient's response or resistance to targeted therapies.</p>
                            <p>Integrated seamlessly into the cancer treatment journey, AlphaLiquid®100 enables real-time
                                monitoring of treatment effectiveness. By identifying emerging resistance biomarkers early,
                                it supports timely adjustments to therapeutic strategies—ensuring a more personalized,
                                proactive, and adaptive approach to cancer management.</p>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-6" data-aos="fade-right">
                                <h4 class="text-danger">Challenges with Tissue Biopsy</h4>
                                <div class="card mb-3" data-aos="flip-left" data-aos-delay="100">
                                    <div class="card-body">🔪 Invasive procedure with recovery risks</div>
                                </div>
                                <div class="card mb-3" data-aos="flip-left" data-aos-delay="200">
                                    <div class="card-body">⚠️ High risk for elderly & vulnerable patients</div>
                                </div>
                                <div class="card mb-3" data-aos="flip-left" data-aos-delay="300">
                                    <div class="card-body">📷 Limited snapshot of tumor profile</div>
                                </div>
                                <div class="card mb-3" data-aos="flip-left" data-aos-delay="400">
                                    <div class="card-body">📉 Not ideal for frequent monitoring</div>
                                </div>
                                <div class="card mb-3" data-aos="flip-left" data-aos-delay="500">
                                    <div class="card-body">🧬 Often insufficient tissue volume</div>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="fade-left">
                                <h4 class="text-success">Advantages of AlphaLiquid®</h4>
                                <div class="card mb-3" data-aos="flip-right" data-aos-delay="100">
                                    <div class="card-body">💉 Minimally invasive: just a blood draw</div>
                                </div>
                                <div class="card mb-3" data-aos="flip-right" data-aos-delay="200">
                                    <div class="card-body">🌐 Captures tumor heterogeneity</div>
                                </div>
                                <div class="card mb-3" data-aos="flip-right" data-aos-delay="300">
                                    <div class="card-body">⏱️ Enables real-time monitoring</div>
                                </div>
                                <div class="card mb-3" data-aos="flip-right" data-aos-delay="400">
                                    <div class="card-body">👴 Safe for all patients</div>
                                </div>
                                <div class="card mb-3" data-aos="flip-right" data-aos-delay="500">
                                    <div class="card-body">🧾 Single test for 118 genes</div>
                                </div>
                            </div>
                        </div>

                        <section class="mb-5" data-aos="zoom-in-up">
                            <h1 class="text-primary">CancerDetect™</h1>
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

                        <section class="mb-5" data-aos="zoom-in-up">
                            <h1 class="text-primary">CancerFind™</h1>
                            <p>Revolutionary test for Multiple Cancer Early Detection (MCED) through a single blood draw.
                                Ideal for asymptomatic individuals or those at high risk.</p>
                            <ul style="list-style: none">
                                <li data-aos="fade-up" data-aos-delay="100">🩸 Detects cancer across multiple types</li>
                                <li data-aos="fade-up" data-aos-delay="200">🧭 Predicts tissue of origin</li>
                                <li data-aos="fade-up" data-aos-delay="300">📋 Supports early diagnosis and action</li>
                            </ul>
                            <h2><strong>Process / Protocol:</strong></h2>
                            @include('includes.cancer_find_process')
                        </section>
                    </article>
                </main>
            </div>
        </div>
    </div>
    <!-- End Site Content -->
@endsection
