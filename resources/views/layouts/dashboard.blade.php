<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Theme Styles(used by all pages)-->
    @foreach(config('layout.resources.css') as $style)
    <link href="{{asset($style)}}" rel="stylesheet" type="text/css" />
    @endforeach
    <!--end::Global Theme Styles-->

    @stack('styles')
    <link href="{{asset('assets/css/style.custome.css')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
</head>

<!--begin::Body-->

<body id="kt_body" class="quick-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">

    @include('partials._navbar-mobile')

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            @include('partials._aside')
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                @include('partials._navbar')
                <!--end::Header-->

                <!--begin::Content-->
                @yield('content')
                <!--end::Content-->

                <!--begin::Footer-->
                @include('partials._footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>

    <x-offcanvas.user />
    <x-offcanvas.notification />
    <x-tools.item />

    <!--begin::Global Theme Bundle(used by all pages)-->
    @foreach(config('layout.resources.js') as $script)
    <script src="{{asset($script)}}"></script>
    @endforeach
    <!--end::Global Theme Bundle-->

    @stack('scripts')
</body>
<!--end::Body-->

</html>