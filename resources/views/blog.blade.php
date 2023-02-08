@extends('website.layout.main')
@section('title', __('content.blog'))
@section('content')
    <div class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ url('template/images/bg_2.jpg') }}'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2">{{ __('content.home') }}</span>
                        <span>{{ __('content.blog') }}</span></p>
                    <h1 class="mb-3 bread">{{ __('content.blog') }}</h1>
                </div>
            </div>
        </div>
    </div>
    @include('website.partials.blog')
@endsection
