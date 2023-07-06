<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>CL Store &mdash; User Dashboard</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">

    @include('frontend.dashboard.layouts.styles')
</head>

<body>


    <!--=============================
    DASHBOARD MENU START
  ==============================-->
    <div class="wsus__dashboard_menu">
        <div class="wsusd__dashboard_user">
            <img src="{{ asset('frontend/images/dashboard_user.jpg') }}" alt="img" class="img-fluid">
            <p>anik roy</p>
        </div>
    </div>
    <!--=============================
    DASHBOARD MENU END
  ==============================-->


    <!-- begin::Dashboard -->
    @yield('main-content')
    <!-- end::Dashboard -->


    <!--============================
      SCROLL BUTTON START
    ==============================-->
    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--============================
    SCROLL BUTTON  END
  ==============================-->


    @include('frontend.dashboard.layouts.scripts')

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}');
            @endforeach
        @endif
    </script>
</body>

</html>
