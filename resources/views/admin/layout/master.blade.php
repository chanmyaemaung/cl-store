<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>CL Store &mdash; Dashboard</title>

    @include('admin.layout.header-styles')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- begin::Navbar -->
            @include('admin.layout.navbar')
            <!-- end::Navbar -->

            <!-- begin::Sidebar -->
            @include('admin.layout.sidebar')
            <!-- end:: Sidebar -->

            <!-- begin::Main Content -->
            <div class="main-content">
                @yield('main-content')
            </div>
            <!-- end::Main Content -->

            <!-- begin::Footer -->
            <footer class="main-footer">
                @include('admin.layout.footer')
            </footer>
            <!-- end::Footer -->
        </div>
    </div>

    @include('admin.layout.footer-scripts')
</body>

</html>
