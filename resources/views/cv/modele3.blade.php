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
    <div class="p8 gap-6 pages">
        
        <!-- Left -->
        <div class="bg-sky-500 text-white pr-2" style="width: 35%; float: left; height: 100%; padding-left: 20px;">
            <!-- profil -->
            <div class="w-full text-center mt-5">
                <div style="width: 100px; height: 100px;" class="overflow-hidden bg-slate-600 rounded-full text-center">
                    @if ($candidat->profile_photo_path && $candidat->profile_photo_path != '')
                        <img src="{{ public_path('storage/' . $candidat->profile_photo_path) }}" alt="Photo" class="object-cover" style="min-width: 100% auto; min-height: 100px; align-items: center; justify-content: center">
                    @else
                        <img src="{{ public_path('images/login-image.png') }}" alt="Photo" class="object-cover" style="min-width: 180px; align-items: center; justify-content: center">
                    @endif
                </div>
            </div>
            
            <!-- Coordonnée -->
            <div>
                <h2 class="text-lg font-semibold text-white pb-2 border-b border-gray-300 my-4">Informations <br> Personnelles</h2>
                <p><span class="font-semibold">Nom :</span> {{ $cv->firstname ? $cv->firstname . ' ' . $cv->lastname : $candidat->name }}</p>
                <p><span class="font-semibold">Emil :</span> {{ $cv->email ?? $candidat->email }}</p>
                <p><span class="font-semibold">Nationalité :</span> {{ $cv->nationalité ?? 'Congolais' }}</p>
                <p><span class="font-semibold">État-civil :</span> {{ $cv->etatcivil ?? 'Non defini' }}</p> 
                <p><span class="font-semibold">Lieu &  Date Naiss. :</span>  {{ $cv->lieunaissance ?? 'Kinshasa' }}, 
                    {{ \Carbon\Carbon::parse($cv->birthday)->locale('fr')->translatedFormat('d M Y') ?? '12 Oct. 2013' }}</p>
                
            </div>
            
            <!-- Compétences -->
            <div>
                <h2 class="text-lg font-semibold text-white pb-2 border-b border-gray-300 my-4">Compétences</h2>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @if ($cv->competence)
                        @foreach(json_decode($cv->competence) as $competence)
                            <li class="mb-2">{{ $competence }}</li>                        
                        @endforeach
                    @else
                        <li class="mb-2">Médiation familiale</li>
                        <li class="mb-2">Entretiens d'information</li>
                        <li class="mb-2">Suivi administratif</li>
                        <li class="mb-2">Gestion de projet</li>
                        <li class="mb-2">Gestion de projet</li>
                    @endif
                </ul>
            </div>

            <!-- langue parléé -->
            <div>
                <h2 class="text-lg font-semibold text-white pb-2 border-b border-gray-300 my-4">Langue parlées</h2>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @if ($cv->langue)
                        @foreach(json_decode($cv->langue) as $langue)
                            <li class="mb-2">{{ $langue }}</li>                        
                        @endforeach
                    @else
                        <li class="mb-2">Lingala</li>
                        <li class="mb-2">Français</li>
                        <li class="mb-2">Anglais</li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- Right -->
        <div class="px-5 pt-8" style="width: 55%; float: right;">

            <!-- Profil -->
            <div>
                <h2 class="text-lg border-b pb-2 border-gray-300 my-4">Profil</h2>
                <p>{{ $cv->description ?? 'Description de votre profil professionnel... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam optio perspiciatis unde aliquam aut praesentium voluptate sint! Culpa voluptatem quisquam eveniet dolorem earum eius suscipit rerum.' }}</p>
            </div>

            <!-- Formation -->
            <div>
                <h2 class="text-lg font-semibold border-b pb-2 border-gray-300 my-4">Formation</h2>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @forelse ($cv->formation as $formation)
                        <li class="mb-2">
                            <span style="font-size: 17px; font-weight: 600">{{ $formation->title }}</span>
                            <p class="italic text-xs text-gray-600 pl-3">{{ \Carbon\Carbon::parse($formation->start_date)->locale('fr')->translatedFormat('d M Y') }} 
                                – {{ \Carbon\Carbon::parse($formation->end_date)->locale('fr')->translatedFormat('d M Y') }}</p>
                            <p class="pl-3">à <span style="font-weight: 500">{{ $formation->school }}</span></p>
                       </li>
                    @empty
                        <li class="mb-2">
                            <span style="font-size: 17px; font-weight: 600">Diplôme d'État de médiateur familial</span>
                            <p class="italic text-xs text-gray-600 pl-3">Oct. 2013 – Juin 2015</p>
                            <p class="pl-3">àUniversité Paris Nanterre</p>
                        </li>
                        <li class="mb-2">
                            <span style="font-size: 17px; font-weight: 600">Diplôme d'État de médiateur familial</span>
                            <p class="italic text-xs text-gray-600 pl-3">Oct. 2013 – Juin 2015</p>
                            <p class="pl-3">àUniversité Paris Nanterre</p>
                        </li>
                        <li class="mb-2">
                            <span style="font-size: 17px; font-weight: 600">Diplôme d'État de médiateur familial</span>
                            <p class="italic text-xs text-gray-600 pl-3">Oct. 2013 – Juin 2015</p>
                            <p class="pl-3">àUniversité Paris Nanterre</p>
                        </li>
                    @endforelse
                </ul>
            </div>

            <!-- Expérience -->
            <div>
                <h2 class="text-lg font-semibold border-b pb-2 border-gray-300 my-4">Expérience professionnelle</h2>

                <ul class="list-disc list-inside text-sm space-y-1">
                    @forelse (($cv->experience) as $experience)
                        <li class="mb-2">
                            <span style="font-size: 17px; font-weight: 600">{{ $experience->job_title }}</span>
                            <p class="italic text-xs text-gray-600 pl-3">{{ \Carbon\Carbon::parse($experience->start_date)->locale('fr')->translatedFormat('d M Y') }} 
                                – {{ \Carbon\Carbon::parse($experience->end_date)->locale('fr')->translatedFormat('d M Y') }}</p>
                            <p class="pl-3">à <span style="font-weight: 500">{{ $experience->company }}</span></p>
                       </li>
                    @empty
                        <li class="mb-2">
                            <span style="font-size: 17px; font-weight: 600">Diplôme d'État de médiateur familial</span>
                            <p class="italic text-xs text-gray-600 pl-3">Oct. 2013 – Juin 2015</p>
                            <p class="pl-3">àUniversité Paris Nanterre</p>
                        </li>
                        <li class="mb-2">
                            <span style="font-size: 17px; font-weight: 600">Diplôme d'État de médiateur familial</span>
                            <p class="italic text-xs text-gray-600 pl-3">Oct. 2013 – Juin 2015</p>
                            <p class="pl-3">àUniversité Paris Nanterre</p>
                        </li>
                        <li class="mb-2">
                            <span style="font-size: 17px; font-weight: 600">Diplôme d'État de médiateur familial</span>
                            <p class="italic text-xs text-gray-600 pl-3">Oct. 2013 – Juin 2015</p>
                            <p class="pl-3">àUniversité Paris Nanterre</p>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
        
    </div>

</body>
</html>
