@extends('website.layout.main')
@section('title', __('content.home'))
@section('content')
    @include('website.partials.hero')

    @if (count($Services)>0)
        @include('website.partials.services')
    @endif

    @include('website.partials.video')
    @include('website.partials.section_counter')

    @if (count($Products)>0)
        @include('website.partials.products')
    @endif
    @if (count($Galleries)>0)
        @include('website.partials.gallery')
    @endif
    @if (count($Team)>0)
        @include('website.partials.team')
    @endif
    @if (count($Certifications)>0)
        @include('website.partials.certification')
    @endif
    @if (count($Partners)>0)
        @include('website.partials.partner')
    @endif
    @if (count($Testimonies)>0)
        @include('website.partials.testimony')
    @endif
    @if (count($Blogs)>0)
        @include('website.partials.blog')
    @endif
@endsection
