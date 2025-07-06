<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Puskesmas | @yield('title')</title>

    @include('layouts.style')

    @livewireStyles

</head>

<body class="hold-transition sidebar-mini">

    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- content -->
        @yield('content')

        @include('layouts.footer')
        </div>

        @include('layouts.script')

        @livewireScripts

    </body>
</html>
