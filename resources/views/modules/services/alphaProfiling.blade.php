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

                    </article>
                </main>
            </div>
        </div>
    </div>
    <!-- End Site Content -->
@endsection
