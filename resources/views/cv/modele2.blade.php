@php
    $competences = is_string($cv->competence) ? json_decode($cv->competence, true) : $cv->competence;
    $langues = is_string($cv->langue) ? json_decode($cv->langue, true) : $cv->langue;
    $experiences = is_string($cv->experience) ? json_decode($cv->experience, true) : $cv->experience;
    $formations = is_string($cv->formation) ? json_decode($cv->formation, true) : $cv->formation;
@endphp
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

    <!-- Header -->
    <div class="bg-slate-800 text-white justify-center flex items-center h-40 border border-2 border-white overflow-hidden">
        <div class="h-40 text-center" style="float: left; width: 20%; position: relative;" >
            <div style="width: 180px; height: 180px;" class="h-40 overflow-hidden bg-slate-600 text-center">
                @if ($candidat->profile_photo_path && $candidat->profile_photo_path != '')
                    <img src="{{ public_path('storage/' . $candidat->profile_photo_path) }}" alt="Photo" class="object-cover" style="min-width: 100% auto; min-height: 180px; align-items: center; justify-content: center">
                @else
                    <img src="{{ public_path('images/login-image.png') }}" alt="Photo" class="object-cover" style="min-width: 180px; align-items: center; justify-content: center">
                @endif
            </div>
        </div>
        <div style="float: right; right: 0; width: 80%; position: relative;">
            <div class="text-sm" style="position: relative; top: 50%; left: 10%;">
                <p style="text-transform: none !importance;" class="text-3xl uppercas capitalize text-white">{{ $cv->firstname ? $cv->firstname . ' ' . $cv->lastname : $candidat->name }}</p>
                • <span style="font-size: 14px;" class="italic text-gray-200"> {{ $cv->email ?? $candidat->email }} </span> 
                • <span style="font-size: 14px;" class="italic text-gray-200"> {{ $cv->phone ?? 'Non défini' }}</span> 
                • <span style="font-size: 14px;" class="italic text-gray-200"> {{ $cv->adresse ?? 'Adresse Non défini' }}</span>
            </div>
        </div>
    </div>

    <!-- Main -->
    <div class="p-8 gap-6 pages">
        
        <!-- Left -->
        <div style="width: 60%; float: left;">

            <!-- Profil -->
            <div>
                <h2 class="text-lg border-b pb-4 border-gray-300 my-4">Profil</h2>
                <p>{{ $cv->description ?? 'Description du profil Non défini' }}</p>
            </div>

            <!-- Formation -->
            <div>
                <h2 class="text-lg font-semibold border-b pb-4 border-gray-300 my-4">Formation</h2>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @if (is_array($formations) && count($formation))
                        @forelse ($formations as $formation)
                            <li class="mb-2">
                                <span style="font-size: 17px; font-weight: 600">{{ $formation->title }}</span>
                                <p class="italic text-xs text-gray-600 pl-3">{{ \Carbon\Carbon::parse($formation->start_date)->locale('fr')->translatedFormat('d M Y') }} 
                                    – {{ \Carbon\Carbon::parse($formation->end_date)->locale('fr')->translatedFormat('d M Y') }}</p>
                                <p class="pl-3">à <span style="font-weight: 500">{{ $formation->school }}</span></p>
                        </li>
                        @empty
                        @endforelse
                    @endif
                </ul>
            </div>

            <!-- Expérience -->
            <div>
                <h2 class="text-lg font-semibold border-b pb-4 border-gray-300 my-4">Expérience professionnelle</h2>

                <ul class="list-disc list-inside text-sm space-y-1">
                    @if (is_array($experiences) && count($experiences))
                        @forelse ($experiences as $experience)
                            <li class="mb-2">
                                <span style="font-size: 17px; font-weight: 600">{{ $experience->job_title }}</span>
                                <p class="italic text-xs text-gray-600 pl-3">{{ \Carbon\Carbon::parse($experience->start_date)->locale('fr')->translatedFormat('d M Y') }} 
                                    – {{ \Carbon\Carbon::parse($experience->end_date)->locale('fr')->translatedFormat('d M Y') }}</p>
                                <p class="pl-3">à <span style="font-weight: 500">{{ $experience->company }}</span></p>
                        </li>
                        @empty
                        @endforelse
                    @endif
                </ul>
            </div>
        </div>

        <!-- Right -->
        <div style="width: 35%; float: right; height: 100%; border-left: 1px solid #ccc; padding-left: 20px;">

             <!-- Coordonnée -->
            <div>
                <h2 class="text-lg font-semibold pb-4 border-b border-gray-300 my-4">Informations Personnelles</h2>
                <p><span class="font-semibold">Nationalité :</span> {{ $cv->nationalité ?? 'Congolais' }}</p>
                <p><span class="font-semibold">État-civil :</span> {{ $cv->etatcivil ?? 'Non defini' }}</p> 
                <p><span class="font-semibold">Lieu &  Date Naiss. :</span>  {{ $cv->lieunaissance ?? 'Kinshasa' }}, 
                    {{ \Carbon\Carbon::parse($cv->birthday)->locale('fr')->translatedFormat('d M Y') ?? '12 Oct. 2013' }}</p>
                
            </div>

            <!-- Compétences -->
            <div>
                <h2 class="text-lg font-semibold border-b pb-4 border-gray-300 my-4">Compétences</h2>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @if (is_array($competences) && count($competences))
                        @foreach(json_decode($cv->competence) as $competence)
                            <li class="mb-2">{{ $competence }}</li>                        
                        @endforeach
                    @else
                       
                    @endif>
                </ul>
            </div>

            <!-- langue parléé -->
            <div>
                <h2 class="text-lg font-semibold border-b pb-4 border-gray-300 my-4">Langue parlées</h2>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @if (is_array($langues) && count($langues))
                        @foreach(json_decode($cv->langue) as $langue)
                            <li class="mb-2">{{ $langue }}</li>                        
                        @endforeach
                    @else
                    @endif
                </ul>
            </div>
        </div>
        
    </div>
</body>
</html>
