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
                        <li>CancerFind</li>
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
                            <h1 class="text-primary">CancerFind<sup>™</sup></h1>
                            <p>CancerFind™ is a revolutionary blood-based test for Multiple Cancer Early Detection (MCED)—designed to identify the presence of various cancer types through a single, non-invasive blood draw. </p>

                            <p>
                                It offers a convenient screening solution for asymptomatic individuals and those at high risk, making it easy to incorporate into routine medical checkups. Beyond detection, CancerFind™ provides accurate predictions of the tissue of origin of any cancer signal, enabling faster and more targeted clinical decision-making. It can prove to be crucial for individuals who want early confirmation of cancer, those with a family history, or those needing further examination after screenings.
                                By facilitating early diagnosis and guiding next steps, CancerFind™ plays a critical role in improving patient outcomes and advancing proactive cancer care.</p>
                            {{-- <ul style="list-style: none">
                                <li data-aos="fade-up" data-aos-delay="100">🩸 Detects cancer across multiple types</li>
                                <li data-aos="fade-up" data-aos-delay="200">🧭 Predicts tissue of origin</li>
                                <li data-aos="fade-up" data-aos-delay="300">📋 Supports early diagnosis and action</li>
                            </ul> --}}
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
