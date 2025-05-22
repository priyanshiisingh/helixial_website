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
                        <li>AlphaLiquid® Biopsy</li>
                    </ul>
                </div><!-- .col -->
            </div>
        </div>
    </section> --}}
    <!-- End Blog Header -->
    <div class="empty-space col-md-b80 col-xs-b80"></div>
    <div class="empty-space col-md-b80 col-xs-b80"></div>

    <div class="tm-blog-section tm-blog-left-sidebar">
        <div class="container">
            <div class="about-content mb-0">
                <div class="w-100" data-aos="fade-right" data-aos-duration="3000">
                    <h1 class="section-title">Cancer<strong>Find</strong></h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Site Content -->
    <!-- Start Site Content -->
    <div id="cancerFind" class="tm-blog-section tm-blog-left-sidebar">
        <div class="container">
            <div class="about-content mb-0 p-0">
                <div class="about-content-new" data-aos="fade-left" data-aos-duration="3000">
                    <p>
                        CancerFind™ is a revolutionary blood-based test for <b>Multiple Cancer Early Detection
                            (MCED)</b>—designed to identify the presence of various cancer types through a single,
                        non-invasive
                        blood draw.
                        <br><br>
                        It offers a convenient screening solution for asymptomatic individuals and those at high risk,
                        making it easy to incorporate into routine medical checkups. Beyond detection, CancerFind™
                        provides accurate predictions of the tissue of origin of any cancer signal, enabling faster and
                        more targeted clinical decision-making. It can prove to be crucial for individuals who want
                        early confirmation of cancer, those with a family history, or those needing further examination
                        after screenings.
                        <br><br>
                        By facilitating early diagnosis and guiding next steps, CancerFind™ plays a criticalrole in
                        improving patient outcomes and advancing proactive cancer care.
                    </p>
                </div>
                <div class="w-100 mt-2" data-aos="fade-right" data-aos-duration="3000">
                    <img src="{{ asset('assets/img/new/alpha/sampleTypes.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Site Content -->

    <!-- End Site Content -->
@endsection
