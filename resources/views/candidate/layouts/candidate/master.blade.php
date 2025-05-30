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
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon/favicon.png') }}">

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

    @if(session('success'))
        <div
            class="fixed sessionSuccess right-10 p-3 pr-12 text-sm text-green-500 border border-transparent rounded-md bg-green-100 dark:bg-green-500/20" style="top: 80px;">
            <button
                class="top-0 top-0 right-0 p-3 text-green-200 transition hover:text-green-500 dark:text-green-400/50 dark:hover:text-green-500"><i
                    class="h-5"></i></button>
            <span class="font-bold">{{ session('success') }} !</span>
        </div>

        <script>
            setTimeout(() => {
                document.querySelector('.sessionSuccess').classList.add('hidden')
            }, 5000);
        </script>
    @endif

    @if(session('error'))
        <div
            class="fixed sessionError right-10 p-3 pr-12 text-sm text-red-500 border border-transparent rounded-md bg-red-100 dark:bg-red-400/20" style="top: 80px;">
            <button
                class="top-0 bottom-0 right-0 p-3 text-red-200 transition hover:text-red-500 dark:text-red-400/50 dark:hover:text-red-500"><i
                    class="h-5"></i></button>
            <span class="font-bold">{{ session('error') }} !</span>
        </div>

        <script>
            setTimeout(() => {
                document.querySelector('.sessionSuccess').classList.add('hidden')
            }, 5000);
        </script>
    @endif
</div>
<!-- end main content -->
@stack('modals')
@include('candidate.layouts.customizer')
@include('candidate.layouts.vendor-scripts')

@livewireScripts
</body>

</html>
