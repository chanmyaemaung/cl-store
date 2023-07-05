<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>CL Store</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">

    @include('frontend.layout.styles')

    <style>
        /* Fix Breadcrumb Font Icon */
        #wsus__breadcrumb ul li a::after {
            font-family: "Font Awesome 5 Pro" !important;
        }
    </style>
</head>

<body>

    <!-- begin::Header -->
    @include('frontend.layout.header')
    <!-- end::Header -->

    <!-- begin::Main Content -->
    @yield('main-content')
    <!-- end::Main Content -->

    <!-- begin::Footer -->
    @include('frontend.layout.footer')
    <!-- end::Footer -->


    <!--============================
        SCROLL BUTTON START
    ==============================-->
    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--============================
        SCROLL BUTTON  END
    ==============================-->


    @include('frontend.layout.scripts')
</body>

</html>
