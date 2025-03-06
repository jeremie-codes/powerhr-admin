<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg"
    data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | Trouvez l'emploi qui correspond à votre vie - Plateforme de recherche d'emploi</title>


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

    @include('layouts.head-css')
    <!-- Styles -->
    @livewireStyles
</head>

@include('layouts.body')

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">
    <!-- sidebar -->
    @include('layouts.sidebar')
    <!-- topbar -->
    @include('layouts.topbar')
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
        <!-- page wrapper -->
        @include('layouts.page-wrapper')

        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <!-- content -->
            @yield('content')
        </div>
    </div>
    <!-- End Page-content -->
    <!-- footer -->
    @include('layouts.footer')
</div>
</div>
<!-- end main content -->
@stack('modals')
@include('layouts.customizer')
@include('layouts.vendor-scripts')

@livewireScripts
</body>

</html>
