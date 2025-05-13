<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg"
    data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <title>@yield('title') | {{ config('app.name') }}</title>

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
    <meta property="og:image" content="{{ asset('build/images/logo-light.png') }}" />
    <meta property="og:url" content="#" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="1024" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ asset('build/images/logo-light.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon/favicon.ico') }}">
    @include('client.layouts.head-css')
    <!-- Livewire Styles -->
    @livewireStyles
</head>

<!-- Content -->
@yield('content')


<!-- Vendor Script -->
@include('client.layouts.vendor-scripts')
<!-- Livewire cript -->
@livewireScripts

</body>

</html>
