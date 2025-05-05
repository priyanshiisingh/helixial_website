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
