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
@section('scripts')
    <script>
        let images = ['{{ url("hero/b.jpeg") }}', '{{ url("hero/c.jpeg") }}', '{{ url("hero/d.jpeg") }}', '{{ url("hero/e.jpeg") }}', '{{ url("hero/f.jpeg") }}'];
        let index = 0;
        const imgElement = document.querySelector('#mainPhoto2');
        function changeImage() {
            imgElement.style["background-image"] = "url('"+images[index]+"')";
            index > 1 ? index = 0 : index++;
        }

        window.onload = function() {
            setInterval(changeImage, 5000);
        };
    </script>
@endsection
