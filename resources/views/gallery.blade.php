@extends('website.layout.main')
@section('title', __('content.blog'))
@section('content')
    <div class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ url('hero/d.jpeg') }}'); background-attachment:fixed;">
        <div class="overlay"  style="background: linear-gradient(to right, #000064 0%, #f28d00 100%) !important;"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2">{{ __('content.home') }}</span>
                        <span>{{ __('content.gallery') }}</span></p>
                    <h1 class="mb-3 bread">{{ __('content.gallery') }}</h1>
                </div>
            </div>
        </div>
    </div>
    @include('website.partials.gallery')
@endsection
