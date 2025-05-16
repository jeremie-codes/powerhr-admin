@extends('candidate.layouts.candidate.master')
@section('title')
    {{ __('t-profile-candidat-cv') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Mes Informations" pagetitle="Générer un Cv" />

    <div class="card">
        <div class="card-body">
            <form action="{{ route('cv.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h6 class="mb-4 text-gray-800 underline text-16 dark:text-zink-50">Informations Persoonelles:</h6>
                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                    <div class="xl:col-span-3">
                        <label for="prenom" class="inline-block mb-2 text-base font-medium">Votre Prénom *</label>
                        <input value="{{ $cv->firstname ?? null }}" type="text" id="prenom" name="firstname"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Entrez votre prénom" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="invoiceID" class="inline-block mb-2 text-base font-medium">Votre Nom de famille complèt *</label>
                        <input value="{{ $cv->lastname ?? null }}" type="text" id="name" name="lastname"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Entrez votre nom" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="email" class="inline-block mb-2 text-base font-medium">Votre E-mail</label>
                        <input value="{{ $cv->email ?? null }}" type="email"  id="email" name="email"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="example@mail.com" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="phone" class="inline-block mb-2 text-base font-medium">Téléphone</label>
                        <input value="{{ $cv->phone ?? null }}" type="text" id="phone" name="phone"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="243 890 567 890" maxlength="12" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="lieu" class="inline-block mb-2 text-base font-medium">Lieu de naissance*</label>
                        <input value="{{ $cv->lieunaissance ?? null }}" type="text" id="lieu" name="lieunaissance"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Entrez votre lieu de naissance" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="birthday" class="inline-block mb-2 text-base font-medium">Date de naissance *</label>
                        <input value="{{ $cv->birthday ?? null }}" type="date" id="birthday" name="birthday"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Date de naissance" data-provider="flatpickr" data-date-format="d M, Y"
                             required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="nationalité" class="inline-block mb-2 text-base font-medium">Nationalité*</label>
                        <input value="{{ $cv->nationalité ?? null }}" type="text" id="nationalité" name="nationalité"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Votre pays d'origine" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="etatcivil" class="inline-block mb-2 text-base font-medium">État civil*</label>
                        <select value='{{ $cv->etatcivil ?? null }}'
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            data-choices data-choices-search-false name="etatcivil" id="etatcivil">
                            <option selected>Célibataire</option>
                            <option value="Paid">Marié</option>
                            <option value="Paid">Divorcé</option>
                        </select>
                    </div><!--end col-->
                    <div class="xl:col-span-6">
                        <label for="adresse" class="inline-block mb-2 text-base font-medium">Votre adresse</label>
                        <textarea
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Entrez votre adresse" id="adresse" name="adresse" rows="3">{{ $cv->adresse ?? null }}</textarea>
                    </div><!--end col-->
                    <div class="xl:col-span-6">
                        <label for="description" class="inline-block mb-2 text-base font-medium">Profil</label>
                        <textarea
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Décrivez votre profil en quelques mots." id="description" name="description" rows="3">{{ $cv->description ?? null }}</textarea>
                    </div><!--end col-->
                </div><!--end grid-->

                <h6 class="my-5 underline text-16">Formations:</h6>

                <div class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Titre de la formation</th>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Date début</th>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Date fin</th>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Nom de l'etablissement</th>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Action</th>
                            </tr>
                        </thead>
                        @foreach ($cv->formation as $formation)
                            <tbody class="before:block before:h-3 item-list">
                                <tr class="item">
                                    <td class="border border-slate-200 dark:border-zink-500">
                                        <input type="text" id="formationtitle" name="title[]" value="{{ $formation->title }}"
                                            class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                            placeholder="Nom de la formation" required>
                                    </td>
                                    <td class="w-40 border border-slate-200 dark:border-zink-500">
                                            <input type="date" id="startformation" name="start_dat[]" value="{{ $formation->start_date }}" data-provider="flatpickr" data-date-format="d M, Y"
                                            class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                            placeholder="Nom de l'emploi" required>
                                    </td>
                                    <td class="w-40 border border-slate-200 dark:border-zink-500">
                                        <input type="date" id="endformation" name="end_dat[]" value="{{ $formation->end_date }}" data-provider="flatpickr" data-date-format="d M, Y"
                                            class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-price"
                                            placeholder="$00.00" required>
                                    </td>
                                    <td class="w-40 border border-slate-200 dark:border-zink-500">
                                        <input type="text" id="etablissement" name="school[]" value="{{ $formation->school }}"
                                            class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-discount"
                                            placeholder="Nom de l'etablissement" required>
                                    </td>
                                    <td class="w-40 border border-slate-200 dark:border-zink-500">
                                        <div class="flex justify-center text-center input-step">
                                            <button type="button"
                                                class="px-2 py-1.5 text-xs text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 product-removal"><i
                                                    data-lucide="trash-2" class="inline-block size-3 mr-1 align-middle"></i>
                                                <span class="align-middle">Supprimer</span></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                        <tbody class="before:block before:h-4" id="afterFormation">
                            <tr>
                                <td colspan="6">
                                    <a href="javascript:void(0)" id="addBtnFormation">
                                        <button type="button"
                                            class="bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"><i
                                                data-lucide="plus" class="inline-block size-3 mr-1 align-middle"></i>
                                            <span class="align-middle">Ajouter une formation</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h6 class="my-5 underline text-16">Expérience professionnelle:</h6>

                <div class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Titre de l'emploi</th>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Date début</th>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Date fin</th>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Nom de l'entreprise</th>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Action</th>
                            </tr>
                        </thead>
                        @foreach ($cv->experience as $experience)
                            <tbody class="before:block before:h-3 item-list">
                                <tr class="item">
                                    <td class="border border-slate-200 dark:border-zink-500">
                                        <input type="text" id="job_title" name="job_title[]" value="{{ $experience->job_title }}"
                                            class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Nom de l'emploi" required>
                                    </td>
                                    <td class="w-40 border border-slate-200 dark:border-zink-500">
                                            <input type="date" id="startexperience" name="start_date[]" value="{{ $experience->start_date }}"
                                            class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                            placeholder="Nom de l'emploi" required>
                                    </td>
                                    <td class="w-40 border border-slate-200 dark:border-zink-500">
                                        <input type="date" id="endexperience" name="end_date[]" value="{{ $experience->end_date }}"
                                            class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-price"
                                            placeholder="$00.00" required>
                                    </td>
                                    <td class="w-40 border border-slate-200 dark:border-zink-500">
                                        <input type="text" id="entreprise" name="company[]" value="{{ $experience->company }}"
                                            class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-discount"
                                            placeholder="Nom de l'entreprise" required>
                                    </td>
                                    <td class="w-40 border border-slate-200 dark:border-zink-500">
                                        <div class="flex justify-center text-center input-step">
                                            <button type="button"
                                                class="px-2 py-1.5 text-xs text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 product-removal"><i
                                                    data-lucide="trash-2" class="inline-block size-3 mr-1 align-middle"></i>
                                                <span class="align-middle">Supprimer</span></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                        <tbody class="before:block before:h-4" id="afterExperience">
                            <tr>
                                <td colspan="6">
                                    <a href="javascript:void(0)" id="addBtnExperience">
                                        <button type="button"
                                            class="bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"><i
                                                data-lucide="plus" class="inline-block size-3 mr-1 align-middle"></i>
                                            <span class="align-middle">Ajouter une expérience</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h6 class="my-5 underline text-16">Compétences:</h6>

                <div class="overflow-x-auto grid grid-cols-6 xl:grid-cols-12">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Déscription de la compétence</th>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Action</th>
                            </tr>
                        </thead>
                        @foreach ($competences as $competence)
                            <tbody class="before:block before:h-3 item-list">
                                <tr class="item">
                                    <td class="border border-slate-200 dark:border-zink-500">
                                        <textarea
                                            class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                            placeholder="Décrivez votre compétence" id="competence" name="competence[]" rows="1">{{ $competence }}</textarea>
                                    </td>
                                    <td class="w-40 border border-slate-200 dark:border-zink-500">
                                        <div class="flex justify-center text-center input-step">
                                            <button type="button"
                                                class="px-2 py-1.5 text-xs text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 product-removal"><i
                                                    data-lucide="trash-2" class="inline-block size-3 mr-1 align-middle"></i>
                                                <span class="align-middle">Supprimer</span></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach

                        <tbody class="before:block before:h-4" id="afterComptence">
                            <tr>
                                <td colspan="6">
                                    <a href="javascript:void(0)" id="addBtnComptence">
                                        <button type="button"
                                            class="bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"><i
                                                data-lucide="plus" class="inline-block size-3 mr-1 align-middle"></i>
                                            <span class="align-middle">Ajouter une compétence</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h6 class="my-5 underline text-16">Langues parlées:</h6>

                <div class="overflow-x-auto grid grid-cols-6 xl:grid-cols-12">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Langue</th>
                                <th
                                    class="px-3.5 py-2.5 font-medium text-sm text-slate-500 uppercase border border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                    Action</th>
                            </tr>
                        </thead>
                        @foreach ($langues as $langue)
                            <tbody class="before:block before:h-3 item-list">
                                <tr class="item">
                                    <td class="border border-slate-200 dark:border-zink-500">
                                        <input type="text" name="langue[]" value="{{ $langue }}"
                                            class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-discount"
                                            placeholder="langue" required>
                                    </td>
                                    <td class="w-40 border border-slate-200 dark:border-zink-500">
                                        <div class="flex justify-center text-center input-step">
                                            <button type="button"
                                                class="px-2 py-1.5 text-xs text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 product-removal">
                                                <i data-lucide="trash-2" class="inline-block size-3 mr-1 align-middle"></i>
                                                <span class="align-middle">Supprimer</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                        <tbody class="before:block before:h-4" id="afterLangue">
                            <tr>
                                <td colspan="6">
                                    <a href="javascript:void(0)" id="addBtnLangue">
                                        <button type="button"
                                            class="bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"><i
                                                data-lucide="plus" class="inline-block size-3 mr-1 align-middle"></i>
                                            <span class="align-middle">Ajouter une compétence</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-end gap-2 mt-5">
                    <button type="reset"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50"><i
                            data-lucide="refresh-ccw" class="inline-block size-4 mr-1"></i> <span
                            class="align-middle">Annuelr</span></button>
                    <button type="submit"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                        <i data-lucide="save" class="inline-block size-4 mr-1"></i> 
                        <span class="align-middle">Enregistrer</span>
                    </button>
                </div>
            </form>
        </div>
    </div><!--end card-->


    @if(session('success'))
        <div
            class="fixed sessionSuccess bottom-20 right-10 p-3 pr-12 text-sm text-green-500 border border-transparent rounded-md bg-green-50 dark:bg-green-400/20">
            <button
                class="absolute top-0 bottom-0 right-0 p-3 text-green-200 transition hover:text-green-500 dark:text-green-400/50 dark:hover:text-green-500"><i
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
            class="relative sessionError p-3 pr-12 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20">
            <button
                class="absolute top-0 bottom-0 right-0 p-3 text-red-200 transition hover:text-red-500 dark:text-red-400/50 dark:hover:text-red-500"><i
                     class="h-5"></i></button>
            <span class="font-bold">{{ session('error') }} !</span>
        </div>

        <script>
            setTimeout(() => {
                document.querySelector('.sessionSuccess').classList.add('hidden')
            }, 5000);
        </script>
    @endif
    
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/js/pages/invoice-create.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>

    <script>
        @if(!empty($langues) || !empty($cv->competences) || !empty($cv->experiences) || !empty($cv->formations))
            remove();
        @endif
    </script>

@endpush
