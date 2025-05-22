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
                        <li>DNX1</li>
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
                    <h1 class="section-title">DXN1</strong></h1>
                </div>
            </div>
        </div>

    <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-left-sidebar">
        <div class="container">
            <div class="row">
                <main class="container mt-3">
                    <article data-aos="zoom-in">
                        <div class="mb-5 text-white" data-aos="fade-up">
                            <p><strong>A Comprehensive NGS Solution For Early Pathogen Identification & Antibiotic
                                    Sensitivity</strong></p>
                        </div>
                        @include('includes.products_listing')


                    </article>
                </main>
            </div>
        </div>
    </div>

    <div class="tm-blog-section tm-blog-left-sidebar">
        @include('includes.dxn1_workflow')
    </div>
    <!-- End Site Content -->
@endsection
