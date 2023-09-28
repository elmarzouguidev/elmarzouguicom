<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Elmarzougui ADMINISTRATION</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="app_creator" name="Elmarzougui Abdelghafour" />
    <meta content="app_version" name="v 1.1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo-app-2.png') }}">
    @stack('css')

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .datepicker {
            z-index: 1600 !important;
            /* has to be larger than 1050 */
        }
    </style>
</head>

<body data-sidebar="dark-" data-sidebar-size="small-">

    <div id="layout-wrapper">

        @include('Admin.Layouts.section.header')

        @include('Admin.Layouts.section.sideBar')

        <div class="main-content">

            <div class="page-content">

                @yield('content')

            </div>

            @include('Admin.Layouts.section.footer')

        </div>

    </div>

    @stack('scripts')

</body>

</html>
