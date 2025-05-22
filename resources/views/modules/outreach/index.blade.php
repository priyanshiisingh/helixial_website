@extends('layouts.main')

@section('content')
    <!-- Start Blog Header -->
    {{-- <section class="tm-blog-hero">
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
    </section> --}}
    <!-- End Blog Header -->

    <div class="empty-space col-md-b75 col-xs-b75"></div>
    <div class="empty-space col-md-b85 col-xs-b85"></div>

    <!-- Start Site Content -->
    <div class="tm-blog-section tm-blog-right-sidebar">
        {{-- <div class="empty-space col-md-b100 col-xs-b70"></div> --}}
        <div class="container">
            <div class="about-content mb-0 pb-3 pt-6">
                <div class="w-100" data-aos="fade-right" data-aos-duration="3000">
                    <h1 class="section-title">Outreach <strong>Activity</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Site Content -->
    @include('includes.contact')
@endsection
