<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Invena – A modern and responsive HTML template for consulting businesses. Perfect for finance, corporate, and agency websites. SEO-friendly, fast-loading, and easy to customize. Create a professional online presence today!">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>Invena Business Consulting HTML Template</title>

    @include('front.home.layouts.partials.style')

    @yield('css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet preload" as="style">
    <link rel="preload" as="image" href="{{ asset('front/assets/images/banner/21.webp') }}" />
    <link rel="stylesheet preload" href="{{ asset('front/assets/css/style.css') }}" as="style">
</head>

<body>

    @include('front.home.layouts.partials.header')

    @yield('content')

    @include('front.home.layouts.partials.footer')




    @include('front.home.layouts.partials.script')

    @yield('js')

</body>

</html>