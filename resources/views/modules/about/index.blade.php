@extends('layouts.main')

@section('content')
    <!-- Start Blog Header -->
    <section class="tm-blog-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tm-blog-hero-title">This is Helixial</h1>
                    <ul class="tm-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div><!-- .col -->
            </div>
        </div>
    </section>
    <!-- End Blog Header -->

    <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-right-sidebar">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <div class="row">
                <main class="col-xl-12">
                    <div class="tm-about tm-gray-bg">
                        <h3 class="tm-about-title">Driven by science and powered by innovation, Helixial is committed to
                            unwinding the genetic blueprint of disease to bring clarity to healthcare decisions. Whether
                            it's identifying elusive infections or detecting cancer at the molecular level, our solutions
                            are built to empower clinicians, laboratories, and researchers with data they can trust for
                            better patient care. We aim to solve complex diagnostic problems where time and precision matter
                            the most.
                            With are equipped with cutting-edge technology and highly trained scientists and medical
                            researchers, we are on a mission to make next-generation, precision healthcare more accessible
                            to the people of India.
                            </span></h3>
                    </div>
                </main><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </div>
    <!-- End Site Content -->
    @include('includes.contact')
@endsection
