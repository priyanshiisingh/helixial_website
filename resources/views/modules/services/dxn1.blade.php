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
                        <li>DNX1</li>
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
                        <header data-aos="fade-down">
                            <h2 class="text-primary">DNX1</h2>
                        </header>
                        <div class="mb-5">
                            <p><strong>A Comprehensive NGS Solution For Early Pathogen Identification & Antibiotic Sensitivity</strong></p>
                        </div>
                        @include('includes.products_listing')

                        @include('includes.dxn1_workflow')
                    </article>
                </main>
            </div>
        </div>
    </div>
    <!-- End Site Content -->
@endsection
