<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg"
    data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | PWHR</title>


    <meta name="theme-color" content="#888">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="description"
        content="Tapez votre mot-clé, puis cliquez sur Rechercher pour trouver votre emploi idéal. Peu importe le secteur, nous avons des offres adaptées à vos compétences." />
    <meta name="keywords"
        content="emploi, travail, offres d'emploi, trouver un emploi, carrière, recrutement, job, recherche d'emploi, domaine de compétence" />
    <link rel="canonical" href="#">
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="Trouvez l'emploi qui correspond à votre vie - Plateforme de recherche d'emploi" />
    <meta property="og:description"
        content="Peu importe votre secteur, trouvez l'emploi qui correspond à vos compétences. Recherchez dès maintenant votre poste idéal." />
    <meta property="og:image" content="{{ asset('images/logo.png') }}" />
    <meta property="og:url" content="#" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="1024" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon/favicon.png') }}">

    @include('admin.layouts.head-css')
    <!-- Styles -->
    @livewireStyles
</head>

@include('admin.layouts.body')

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">
    <!-- sidebar -->
    @include('admin.layouts.sidebar')
    <!-- topbar -->
    @include('admin.layouts.topbar')
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
        <!-- page wrapper -->
        @include('admin.layouts.page-wrapper')

        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <!-- content -->
            @yield('content')
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
    <!-- End Page-content -->
    <!-- footer -->
    @include('admin.layouts.footer')
</div>
</div>
<!-- end main content -->
@stack('modals')
@include('admin.layouts.customizer')
@include('admin.layouts.vendor-scripts')

@livewireScripts
</body>

</html>
