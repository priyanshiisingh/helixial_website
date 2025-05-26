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

    <div class="empty-space col-lg-b75"></div>
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
            @if (!$activities->isEmpty())
                <div class="tm-member-carousel owl-carousel tm-nam-tm-style1  tm-dots1">

                    @foreach ($activities as $activity)
                        @php
                            $image = $activity->attachments->first(); // Get the first attached image
                        @endphp
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="{{ $image != null ? asset($image->url()) : '' }}" alt="">
                                </a>
                            </div>
                            <div class="tm-member-meta text-center">
                                <h3 class="tm-member-name"><a href="#">{{ $activity->title }}</a></h3>
                                <span class="tm-member-speciality">{!! $activity->description !!}</span>
                            </div>
                        </div><!-- .tm-team-member -->
                    @endforeach

                </div><!-- .member-carousel -->
            @else
                <div>
                    No results
                </div>
            @endif
        </div>
    </div>
    <!-- End Site Content -->
    @include('includes.contact')
@endsection
