@extends('layouts.main')
@section('content')
    @include('includes.hero')


    @include('includes.about')

    {{-- @include('includes.data_sequencing') --}}

    {{-- @include('includes.generational_diagnostics') --}}

    @include('includes.department')

    @include('includes.molecular_precision')

    @include('includes.testimonials')

    {{-- @include('includes.gallery') --}}
    @include('includes.funfact')

    @if (!$blogs->isEmpty())
        @include('includes.blog')
    @endif

    @include('includes.contact')

    @include('includes.instagram_block')

    {{-- @include('includes.human_body') --}}
@endsection
