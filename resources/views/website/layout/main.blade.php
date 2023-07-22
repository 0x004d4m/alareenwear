<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7MEHMTWEE6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7MEHMTWEE6');
    </script>
    @include('website.layout.styles')
    @yield('styles')
    @yield('header_scripts')
</head>
<body dir="{{__('content.dir')}}">
    @include('website.layout.navbar')
    @yield('content')
    @include('website.layout.footer')
    @include('website.layout.scripts')
    @yield('scripts')
</body>
</html>
