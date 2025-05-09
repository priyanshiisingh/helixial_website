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
    <div class="empty-space col-md-b80 col-xs-b80"></div>

    <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-left-sidebar tm-gradient-bg">
        <div class="container">
            <div class="row">
                <main class="container mt-3">
                    <article data-aos="zoom-in">
                        <header class="mb-4" data-aos="fade-down">
                            <h1 class="text-primary text-white">DXN1</h1>
                        </header>
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

    <div class="tm-blog-section tm-blog-left-sidebar tm-e3e8ff-bg">
        @include('includes.dxn1_workflow')
    </div>
    <!-- End Site Content -->
@endsection
