@extends('website.layout.main')
@section('title', __('content.about'))
@section('content')
    <div class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ url('template/images/bg_2.jpg') }}'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2">{{ __('content.home') }}</span>
                        <span>{{ __('content.about') }}</span></p>
                    <h1 class="mb-3 bread">{{ __('content.about') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-about align-self-stretch"
                        style="background-image: url({{ url($About->image) }}); width: 100%;"></div>
                </div>
                <div class="col-md-6 pl-md-5 ftco-animate {{__('content.text_align')}}">
                    <h2 class="mb-4">{{$About->title}}</h2>
                    <p>{!! $About->description !!}</p>
                </div>
            </div>
        </div>
    </section>

    @include('website.partials.video')
    @include('website.partials.section_counter')

    @if (count($Testimonies)>0)
        @include('website.partials.testimony')
    @endif
@endsection
