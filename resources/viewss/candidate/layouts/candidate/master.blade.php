<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg"
    data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | {{config('app.name')}} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

    @include('candidate.layouts.head-css')
    <!-- Styles -->
    @livewireStyles
</head>

@include('candidate.layouts.body')

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">
    <!-- sidebar -->
    @include('candidate.layouts.candidate.sidebar')
    <!-- topbar -->
    @include('candidate.layouts.candidate.topbar')
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
        <!-- page wrapper -->
        @include('candidate.layouts.page-wrapper')

            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
                <!-- content -->
                @yield('content')
            </div>
        </div>
        <!-- End Page-content -->
        <!-- footer -->
        @include('candidate.layouts.footer')
    </div>
</div>
<!-- end main content -->
@stack('modals')
@include('candidate.layouts.customizer')
@include('candidate.layouts.vendor-scripts')

@livewireScripts
</body>

</html>
