@extends('candidate.layouts.candidate.master')
@section('title')
    {{ __('Candidat') }}
@endsection
@section('content')

    
    <div class="mt-1 -ml-3 -mr-3 rounded-none card">
        <div class="card-body !px-2.5">
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12">
                <div class="lg:col-span-2 2xl:col-span-1">
                    <div class="relative inline-block size-20 rounded-full shadow-md bg-slate-100 overflow-hidden profile-user xl:size-28">
                        @if($user->profile_photo_path === "" || $user->profile_photo_path === null )
                            <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                            class="object-cover border-0 rounded-full img-thumbnail user-profile-image">
                        @else
                        <img src="{{ asset('storage/' . $user->profile_photo_path ) }}" alt=""
                            class="object-cover border-0 rounded-full img-thumbnail user-profile-image w-100" style="height: 110px;" >
                        @endif  
                    </div>
                </div><!--end col-->
                @if ($user->profile)
                    <div class="lg:col-span-10 2xl:col-span-9">
                        <h5 class="mb-1">{{ $user->name }} <i data-lucide="badge-check"
                                class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i></h5>
                        <div class="flex gap-3 mb-4">
                            <p class="text-slate-500 dark:text-zink-200"><i data-lucide="user-circle"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                {{ $user->email }} </p>
                            <p class="text-slate-500 dark:text-zink-200"><i data-lucide="map-pin"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                @if ($user->profile?->location != '')
                                    {{ $user->profile?->location }}
                                @else
                                    {{ __('t-location') }}
                                @endif
                            </p>
                        </div>

                        <p class="mt-4 text-slate-500 dark:text-zink-200">
                            @if ($user->profile?->bio != '')
                                {{ $user->profile?->bio }}
                            @else
                                {{ __('Aucune information dans la bio, modifier dans Autres informations !') }}
                            @endif
                            
                        </p>
                        <div class="flex gap-2 mt-4">
                            <a href="{{ $user->profile?->twitter ?? '#!' }}"
                                class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30">
                                <i data-lucide="twitter" class="size-4"></i>
                            </a>

                            <a href="{{ $user->profile?->linkedin ?? '#!' }}"
                                class="flex items-center justify-center transition-all duration-200 ease-linear rounded text-custom-500 bg-custom-100 size-9 hover:bg-custom-200 dark:bg-custom-500/20 dark:hover:bg-custom-500/30">
                                <i data-lucide="linkedin" class="size-4"></i>
                            </a>
                            <a href="{{ $user->profile?->github ?? '#!' }}"
                                class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-slate-500 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                <i data-lucide="github" class="size-4"></i>
                            </a>
                            <a href="{{ $user->profile?->website ?? '#!' }}"
                                class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-custom-500 bg-custom-100 hover:bg-custom-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                <i data-lucide="globe" class="size-4"></i>
                            </a>
                        </div>
                    </div>
                @else
                    <div class="lg:col-span-10 2xl:col-span-9">
                        <h5 class="mb-1">{{ $user->name }} <i data-lucide="badge-check"
                                class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i></h5>
                        <div class="flex gap-3 mb-4">
                            <p class="text-slate-500 dark:text-zink-200"><i data-lucide="user-circle"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                {{ $user->name }} </p>
                            <p class="text-slate-500 dark:text-zink-200"><i data-lucide="map-pin"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                {{ __('t-location') }}</p>
                        </div>

                        <p class="mt-4 text-slate-500 dark:text-zink-200">{{ __('t-overview-no-profile') }} </p>
                        <div class="flex gap-2 mt-4">
                            <a href="#"
                                class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30">
                                <i data-lucide="twitter" class="size-4"></i>
                            </a>

                            <a href="#"
                                class="flex items-center justify-center transition-all duration-200 ease-linear rounded text-custom-500 bg-custom-100 size-9 hover:bg-custom-200 dark:bg-custom-500/20 dark:hover:bg-custom-500/30">
                                <i data-lucide="linkedin" class="size-4"></i>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-slate-500 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                <i data-lucide="github" class="size-4"></i>
                            </a>
                            <a href="#!"
                                class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-custom-500 bg-custom-100 hover:bg-custom-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                <i data-lucide="globe" class="size-4"></i>
                            </a>
                        </div>
                    </div>
                @endif
            </div><!--end grid-->
        </div>

        <div class="card-body !px-2.5 !py-0">
            <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                <li class="group active">
                    <a href="javascript:void(0);" data-tab-toggle data-target="overviewTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">{{ __('t-overview') }}</a>
                </li>
                <li class="group">
                    <a href="javascript:void(0);" data-tab-toggle data-target="basiqueTab"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">{{ __('t-personnal-informations') }}</a>
                </li>
                <li class="group">
                    <a href="javascript:void(0);" data-tab-toggle data-target="otherInfo"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">{{ __('Autres Informations') }}</a>
                </li>
                <li class="group">
                    <a href="javascript:void(0);" data-tab-toggle data-target="documentsTab"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">{{ __('Mes Documents') }}</a>
                </li>
            </ul>
        </div>
    </div><!--end card-->

    <div class="tab-content">
        <div class="block tab-pane" id="overviewTabs">
            <div class="grid grid-cols-1 gap-x-5 2xl:grid-cols-12">
                <div class="2xl:col-span-12">
                    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            @if ($user->profile)
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="mb-3 text-15">{{ __('Aperçu') }}</h6>
                                        <p class="mb-2 text-slate-500 dark:text-zink-200">
                                            @if ($user->profile?->bio != '')
                                                {{ $user->profile?->bio }}
                                            @else
                                                {{ __('t-overview-no-profile') }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            @else
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="mb-3 text-15">{{ __('t-bio') }}</h6>
                                        <p class="mb-2 text-slate-500 dark:text-zink-200">{{ __('t-overview-no-profile') }}</p>
                                    </div>
                                </div>
                            @endif

                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-4 text-15">{{ __('t-personnal-informations') }}</h6>
                                    <div class="overflow-x-auto">
                                        <table class="w-full ltr:text-left rtl:ext-right">
                                            <tbody>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Nationalité</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                        @if ($user->personne?->nationalite != '')
                                                            {{ $user->personne?->nationalite }}
                                                        @else
                                                            {{ __('Non défini') }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Téléphone</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                        @if ($user->personne?->telephone != '')
                                                            {{ $user->personne?->telephone }}
                                                        @else
                                                            {{ __('Non défini') }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Date de naissance</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                        @if ($user->personne?->dateNaissance != '2007-02-25')
                                                            {{ $user->personne?->dateNaissance }}
                                                        @else
                                                            {{ __('Non défini') }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Site web</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                        @if ($user->profile?->website != '')
                                                            <a href="{{ $user->profile?->website }}" target="_blank"
                                                                class="text-custom-500">{{ $user->profile?->website }}</a>
                                                        @else
                                                            {{ __('Non défini') }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Email</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                        {{ $user->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Adresse</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                        @if ($user->personne?->adresse != '')
                                                            {{ $user->personne?->adresse }}
                                                        @else
                                                            {{ __('Non défini') }}
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end card-->

                        </div><!--end col-->


                        <!--end col-->
                    </div><!--end grid-->
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end tab pane-->

        <div class="hidden tab-pane" id="basiqueTab">
            <div class="overflow-x-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('candidate.store') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-2">
                                <div class="mb-4">
                                    <label for="firstNameInput2" class="inline-block mb-2 text-base font-medium">Prénom
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" name="prenom"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter First Name"
                                        @if ($user->personne?->prenom != '') value="{{ $user->personne?->prenom }}" @endif
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="firstNameInput2" class="inline-block mb-2 text-base font-medium">Nom
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" name="nom"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter First Name"
                                        @if ($user->personne?->nom != '') value="{{ $user->personne?->nom }}" @endif
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="lastNameInput2" class="inline-block mb-2 text-base font-medium">Post-nom
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" name="postNom"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter Last Name"
                                        @if ($user->personne?->postNom != '') value="{{ $user->personne?->postNom }}" @endif
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="UsernameInput" class="inline-block mb-2 text-base font-medium">Téléphone
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" name="telephone"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter your phone number"
                                        @if ($user->personne?->telephone != '') value="{{ $user->personne?->telephone }}" @endif
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="cityInput" class="inline-block mb-2 text-base font-medium">Compétences <span
                                            class="text-red-500">*</span>(skill1, skill2,... )</label>
                                    <input type="text" name="SkillSet"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        value="{{ $user->candidate?->SkillSet }}" required>
                                </div>
                                <div class="mb-4">
                                    <label for="stateInput" class="inline-block mb-2 text-base font-medium">Expériences
                                        <span class="text-red-500">*</span></label>
                                    <select
                                        class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        name="ExperienceDetails">
                                        <option selected="" disabled="" value="{{ $user->candidate?->ExperienceDetails }}">Choisisez...</option>
                                        <option>1 an</option>
                                        <option>2 ans</option>
                                        <option>3 ans</option>
                                        <option>4 ans</option>
                                        <option>5 ans</option>
                                        <option>+5 ans</option>
                                    </select>
                                    <small>Valeur actuel: <span class="text-red-500">{{ $user->candidate?->ExperienceDetails }} </span></small>
                                </div>
                                <div class="mb-4">
                                    <label for="zipInput" class="inline-block mb-2 text-base font-medium">Prétention salariale
                                        <span class="text-red-500">*</span></label>
                                    <input type="number" name="salary"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter your salary" value="{{ $user->candidate?->salary }}" >
                                </div>
                                <div class="mb-4">
                                    <label for="stateInput" class="inline-block mb-2 text-base font-medium">Diplome le plus élevé détenu<span class="text-red-500">*</span></label>
                                    <select
                                        class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        name="HighestQualificationHeld">
                                        <option  selected="" disabled="" value="">Choisissez...</option>
                                        <option >Certificat primaire</option>
                                        <option >Diplome d'Etat</option>
                                        <option >Diplome de graduat</option>
                                        <option >Diplome de Licence</option>
                                        <option >{{ $user->candidate?->HighestQualificationHeld }}</option>
                                        <option >Diplome de Doctorat</option>
                                    </select>
                                    <small>Valeur actuel: <span class="text-red-500">{{ $user->candidate?->HighestQualificationHeld }} </span></small>
                                </div>
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="submit"
                                    class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">
                                    Mettre à jour</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--end tab pane-->

        <div class="hidden tab-pane" id="otherInfo">
            <div class="overflow-x-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('candidate.store') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
                                <div class="mb-4">
                                    <label for="stateInput" class="inline-block mb-2 text-base font-medium">Sexe <span
                                            class="text-red-500"></span></label>
                                    <select
                                        class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        name="sexe" >
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <small>Valeur actuel: <span class="text-red-500">{{ $user->personne?->sexe }} </span></small>
                                </div>
                                <div class="mb-4">
                                    <label for="firstNameInput2" class="inline-block mb-2 text-base font-medium">Nationalité <span class="text-red-500">*</span></label>
                                    <input type="text" id="firstNameInput2"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter First Name" name="nationalite" required value="{{ $user->personne?->nationalite }}" >
                                </div>
                                <div class="mb-4">
                                    <label for="UsernameInput" class="inline-block mb-2 text-base font-medium">Adresse
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" name="adresse"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Username" required value="{{ $user->personne?->adresse }}">
                                </div>
                                <div class="mb-4">
                                    <label for="cityInput" class="inline-block mb-2 text-base font-medium">Cité <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" id="cityInput" name="ville"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter city" required value="{{ $user->personne?->ville }}">
                                </div>
                                <div class="mb-4">
                                    <label for="zipInput" class="inline-block mb-2 text-base font-medium">Code postal <span
                                            class="text-red-500"></span></label>
                                    <input type="number" id="zipInput" name="codePostal"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter zip code" value="{{ $user->personne?->codePostal }}">
                                </div>
                                <div class="mb-4">
                                    <label for="zipInput" class="inline-block mb-2 text-base font-medium">Date d'anniversaire <span
                                            class="text-red-500">*</span></label>
                                    <input type="date" id="birthday" name="dateNaissance"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        required value="{{ $user->personne?->dateNaissance }}">
                                </div>
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="submit"
                                    class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Soumettre</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                       <form action="{{ route('candidate.store') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
                                <div class="mb-4">
                                    <label for="bio" class="inline-block mb-2 text-base font-medium">Bio</label>
                                    <input type="text" id="bio"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="votre biographie" name="bio" value="{{ $user->profile?->bio }}" >
                                </div>
                                <div class="mb-4">
                                    <label for="website" class="inline-block mb-2 text-base font-medium">Site web</label>
                                    <input type="text" id="website"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="https://www.monsite.com" name="webite" value="{{ $user->profile?->website }}" >
                                </div>
                                <div class="mb-4">
                                    <label for="linkedin" class="inline-block mb-2 text-base font-medium">Linkedin</label>
                                    <input type="text" name="linkedin"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="lien linkedin" value="{{ $user->profile?->linkedin }}">
                                </div>
                                <div class="mb-4">
                                    <label for="twitter" class="inline-block mb-2 text-base font-medium">Twitter (X)</label>
                                    <input type="text" id="twitter" name="twitter"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="lien twitter" value="{{ $user->profile?->twitter }}">
                                </div>
                                <div class="mb-4">
                                    <label for="github" class="inline-block mb-2 text-base font-medium">Github</label>
                                    <input type="text" id="github" name="github"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="lien github" value="{{ $user->profile?->github }}">
                                </div>
                                
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="submit"
                                    class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--end tab pane-->

        <div class="hidden tab-pane" id="documentsTab">
            <div class="overflow-x-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('documents.upload') }}" method="POST" enctype="multipart/form-data" x-data="{ fileName: null, filePreview: null }">
                        {{-- <form action="{{ route('candidate.store') }}" method="POST" enctype="multipart/form-data" x-data="{ fileName: null, filePreview: null }"> --}}
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Sélecteur de type de document -->
                                <div>
                                    <label for="document_type" class="block text-sm font-medium text-gray-700">Type de document *</label>
                                    <select name="document_type" id="document_type" required class="w-full border rounded p-2">
                                        <option value="">-- Sélectionner un document --</option>
                                        <option value="attestation_bonne_vie">Attestation de bonne vie et mœurs</option>
                                        <option value="certificat_aptitude">Certificat d’aptitude professionnelle</option>
                                        <option value="photo_pro">Photo professionnelle</option>
                                        <option value="acte_naissance">Acte de naissance</option>
                                        <option value="attestations_emplois">Attestations des précédents emplois</option>
                                        <option value="aptitude_physique">Aptitude physique</option>
                                        <option value="piece_identite">Pièce d’identité</option>
                                        <option value="attestation_residence">Attestation de résidence</option>
                                        <option value="acte_mariage">Acte de mariage</option>
                                        <option value="certificat_medical">Certificat médical</option>
                                        <option value="carte_travail">Carte de travail</option>
                                        <option value="visa_travail">Visa de travail</option>
                                    </select>
                                </div>

                            </div>

                            <div class="px-4 py-5 sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                                <div class="flex items-center relative overflow-hidden justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dropzone2 dark:bg-zink-700 dark:border-zink-500 w-full">
                                    <div class="fallback">
                                        <input name="file" type="file" dropzone="file" class="border absolute opacity-0 w-full h-full cursor-pointer"
                                            wire:model.live="file" x-ref="file" style="top: 0"
                                            x-on:change="fileName = $refs.file.files[0].name;const reader = new FileReader();
                                            reader.onload = (e) => {
                                                filePreview = e.target.result;
                                            };
                                            reader.readAsDataURL($refs.file.files[0]);" required
                                        />
                                    </div>
                                    <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                        <div class="mb-3" x-show="!filePreview">
                                            <i data-lucide="upload-cloud"
                                                class="block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                        </div>
                                        
                                        <div class="mt-2" x-show="!filePreview">
                                            <h5 class="mb-0 font-normal text-slate-500 text-15">Cliquez pour choisir <a href="#!">votre fichier</a> ici ! <br> pdf ou Image(png, jpeg, jpg) </h5>
                                        </div>
            
                                            <div class="mt-2" x-show="filePreview" style="display: none;">
                                            <i data-lucide="file"
                                                class="block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                        </div>
            
                                        <div class="mt-2" x-show="filePreview">
                                            <h5 class="mb-0 font-normal text-slate-500 text-15">Fichier chargé, cliquez sur charger ! </h5>
                                        </div>
                                    </div>    
                                </div>
                            </div> 
            
                            <div class="flex items-center justify-end px-4 py-3 bg-slate-50 dark:bg-zink-600 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                <x-button wire:loading.attr="disabled" x-show="filePreview" variant="green" wire:target="file">
                                    {{ __('Charger') }}
                                </x-button>
                            </div>
                        </form>

                        {{-- Tableau des documents --}}
                        <div class="mt-8 grid grid-cols-1 md:grid-cols-1">
                            <h3 class="text-lg font-semibold mb-3">Documents chargés</h3>

                            <table class="min-w-full divide-y divide-gray-200 border">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nom du document</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Date ajout</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-100">
                                    @forelse ($documents as $doc)
                                        <tr>
                                            <td class="px-4 py-2">{{ ucfirst(str_replace('_', ' ', $doc->type)) }}</td>
                                            <td class="px-4 py-2">{{ $doc->created_at->format('d/m/Y H:i') }}</td>
                                            <td class="px-4 py-2 flex items-center gap-3">
                                                <a href="{{ route('documents.view', $doc->id) }}" arget="_blank"
                                                    class="text-blue-600 hover:underline flex items-center">
                                                     <i data-lucide="file" class="block size-4 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                                     <span class="align-midlle">Voir</span>
                                                </a>

                                                <a href="{{ route('documents.download', $doc->id) }}" target="_blank"
                                                    class="text-blue-600 hover:underline flex items-center">
                                                     <i data-lucide="download" class="block size-4 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                                </a>

                                                <!-- Bouton Supprimer -->
                                                <a data-modal-target="deleteModal{{ $doc->id }}"
                                                    class="block px-2 text-base transition-all duration-200 ease-linear text-red-600 dropdown-item hover:bg-red-100 hover:text-red-500 focus:bg-red-100 focus:text-red-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">
                                                    <i data-lucide="trash-2"
                                                        class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                                                </a>
                                            </td>
                                        </tr>

                                         <div id="deleteModal{{ $doc->id }}" modal-center
                                            class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                                            <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                                                    <div class="float-right">
                                                        <button data-modal-close="deleteModal{{ $doc->id }}"
                                                            class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i
                                                                data-lucide="x" class="size-5"></i></button>
                                                    </div>
                                                    <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                                                    <div class="mt-5 text-center">
                                                        <h5 class="mb-1">Êtes-vous sûre?</h5>
                                                        <p class="text-slate-500 dark:text-zink-200">Etes-vous de supprimer ce document ?</p>
                                                        <div class="flex justify-center gap-2 mt-6">
                                                            <button type="reset" data-modal-close="deleteModal{{ $doc->id }}"
                                                                class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Annuler</button>
                                                            <form method="POST" action="{{ route('documents.delete', $doc->id) }}">
                                                                @method('DELETE')
                                                                @csrf
                                                                <input type="hidden" name="document_id" value="{{ $doc->id }}">
                                                                <button type="submit"
                                                                    class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">
                                                                    Oui, Supprimer!
                                                                </button>
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="px-4 py-2 text-center text-gray-500">Aucun document trouvé !</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--end tab pane-->

        @if (Session::has('alert.sweetalert'))
            <script>
                Swal.fire({!! Session::pull('alert.sweetalert') !!});
            </script>
        @endif
    
    @endsection
    @push('scripts')
        <!-- apexcharts js -->
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
        <script src="{{ URL::asset('build/js/pages/pages-account.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endpush
