<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>CV - {{ $candidat->name }}</title>
    <style>
        {!! file_get_contents(public_path('build/js/layout.js')) !!}
        {!! file_get_contents(public_path('build/css/icons.min.css')) !!}
        {!! file_get_contents(public_path('build/css/tailwind.min.css')) !!}

        @page {
            margin: 0cm;
            font-size: 18px;
        }
    </style>

</head>
<body class="text-gray-800 text-sm">

    <!-- Main -->
    <div class="gap-6 pages capitalize p-4">
        
        <!-- Left -->
        <div style="width: 15%; float: left; height: 100%; position: relative;">
            <div class="text-white text-right bg-gray-200" style="width: 100%; height: 1060px; position: relative;">
                <h1 class="uppercase" style="top: 50px; margin-right: 20px; transform: rotate(-90deg); white-space: nowrap; font-size: 56px; letter-spacing: 20px; position: relative; ">CURRICULUM VITAE</h1>
            </div>
        </div>

        <!-- Right -->
        <div class="px-8 pt-5" style="width: 75%; float: right;">

             <!-- Coordonnée -->
            <div>
                <h2 class="text-lg font-semibold border-b border-gray-300 my-2">Informations Personnelles</h2>
                <p><span class="font-semibold pl-5">Nom :</span> {{ $cv->firstname ? $cv->firstname . ' ' . $cv->lastname : $candidat->name }}</p>
                <p><span class="font-semibold pl-5">Emil :</span> {{ $cv->email ?? $candidat->email }}</p>
                <p><span class="font-semibold pl-5">Nationalité :</span> {{ $cv->nationalité ?? 'Non défini' }}</p>
                <p><span class="font-semibold pl-5">État-civil :</span> {{ $cv->etatcivil ?? 'Non défini' }}</p> 
                <p><span class="font-semibold pl-5">Lieu &  Date Naiss. :</span>  {{ $cv->lieunaissance ?? 'Non défini' }}, 
                    {{ \Carbon\Carbon::parse($cv->birthday)->locale('fr')->translatedFormat('d M Y') ?? 'Non défini' }}</p>
                
            </div>

            <!-- Formation -->
            <div>
                <h2 class="text-lg font-semibold border-b border-gray-300 my-2">Formation</h2>
                <ul class="list-disc list-inside text-sm space-y-1 pl-5">
                    @forelse ($cv->formation as $formation)
                        <li class="mb-1">
                            <span class="italic text-xs text-gray-600 capitalize">{{ \Carbon\Carbon::parse($formation->start_date)->locale('fr')->translatedFormat('d M Y') }} 
                                – {{ \Carbon\Carbon::parse($formation->end_date)->locale('fr')->translatedFormat('d M Y') }}</span>
                            <p class="pl-3">{{ $formation->title }} {{ $formation->school }}</p>
                       </li>
                    @empty
                        
                    @endforelse
                </ul>
            </div>

            <!-- Expérience -->
            <div>
                <h2 class="text-lg font-semibold border-b border-gray-300 my-2">Expérience professionnelle</h2>

                <ul class="list-disc list-inside text-sm space-y-1 pl-5">
                    @forelse (($cv->experience) as $experience)
                        <li class="mb-1">
                            <span class="italic text-xs text-gray-600 capitalize">{{ \Carbon\Carbon::parse($experience->start_date)->locale('fr')->translatedFormat('d M Y') }} 
                                – {{ \Carbon\Carbon::parse($experience->end_date)->locale('fr')->translatedFormat('d M Y') }}</span>
                            <p class="pl-3">{{ $experience->job_title }} {{ $experience->company }}</p>
                       </li>
                    @empty
                        
                    @endforelse
                </ul>
            </div>

            <!-- Compétences -->
            <div>
                <h2 class="text-lg font-semibold border-b border-gray-300 my-2">Compétences</h2>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @if ($cv->competence)
                        @foreach(json_decode($cv->competence) as $competence)
                            <li class="mb-1">{{ $competence }}</li>                        
                        @endforeach
                    @else
                    @endif
                </ul>
            </div>

            <!-- langue parléé -->
            <div>
                <h2 class="text-lg font-semibold border-b border-gray-300 my-2">Langue parlées</h2>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @if ($cv->langue)
                        @foreach(json_decode($cv->langue) as $langue)
                            <li class="mb-1">{{ $langue }}</li>                        
                        @endforeach
                    @else
                        
                    @endif
                </ul>
            </div>
        </div>
        
    </div>

</body>
</html>
