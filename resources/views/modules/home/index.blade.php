@extends('layouts.main')
@section('content')

@include('includes.hero')


@include('includes.about')

{{-- @include('includes.data_sequencing') --}}

@include('includes.generational_diagnostics')

@include('includes.department')

@include('includes.molecular_precision')

@include('includes.testimonials')

{{-- @include('includes.gallery') --}}
@include('includes.funfact')

@include('includes.blog')

@include('includes.contact')

{{-- @include('includes.human_body') --}}
@include('includes.map')

@endsection
