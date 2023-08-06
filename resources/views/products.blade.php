@extends('website.layout.main')
@section('title', __('content.products'))
@section('content')
    <div class="hero-wrap hero-wrap-2"
        id="mainPhoto" style="background-image: url('{{ url('hero/e.jpeg') }}'); background-attachment:fixed;">
        <div class="overlay"  style="background: linear-gradient(to right, #000064 0%, #f28d00 100%) !important;"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2">{{ __('content.home') }}</span>
                        <span>{{ __('content.products') }}</span></p>
                    <h1 class="mb-3 bread">{{ __('content.products') }}</h1>
                </div>
            </div>
        </div>
    </div>
    @include('website.partials.products')
@endsection
@section('scripts')
    <script>
        let images = ['{{ url("hero/b.jpeg") }}', '{{ url("hero/c.jpeg") }}', '{{ url("hero/d.jpeg") }}', '{{ url("hero/e.jpeg") }}', '{{ url("hero/f.jpeg") }}'];
        let index = 0;
        const imgElement = document.querySelector('#mainPhoto');
        function changeImage() {
            imgElement.style["background-image"] = "url('"+images[index]+"')";
            index > 1 ? index = 0 : index++;
        }

        window.onload = function() {
            setInterval(changeImage, 5000);
        };
    </script>
@endsection
