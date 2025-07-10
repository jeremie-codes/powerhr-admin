@extends('admin.layouts.master')
@section('title')
    {{ __('Account') }}
@endsection
@section('content')

    <div class="mt-1 -ml-3 -mr-3 rounded-none card">
        <div class="card-body !px-2.5">
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12">
                <div class="lg:col-span-2 2xl:col-span-1">
                    <div
                        class="relative inline-block size-20 rounded-full shadow-md bg-slate-100 profile-user xl:size-28">
                        <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                            class="object-cover border-0 rounded-full img-thumbnail user-profile-image">
                        <div
                            class="absolute bottom-0 flex items-center justify-center size-8 rounded-full ltr:right-0 rtl:left-0 profile-photo-edit">
                            <input id="profile-img-file-input" type="file" class="hidden profile-img-file-input">
                            <label for="profile-img-file-input"
                                class="flex items-center justify-center size-8 bg-white rounded-full shadow-lg cursor-pointer dark:bg-zink-600 profile-photo-edit">
                                <i data-lucide="image-plus"
                                    class="size-4 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                            </label>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="lg:col-span-10 2xl:col-span-9">
                    <h5 class="mb-1">
                        @if($user->personne)
                            {{$user->personne->nom}} {{$user->personne->postNom}} {{$user->personne->prenom}}
                        @else
                            {{$user->name}}
                        @endif
                        <i data-lucide="badge-check"
                            class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i></h5>
                    <div class="flex gap-3 mb-4">
                        @if($user->profile)
                            <p class="text-slate-500 dark:text-zink-200"><i data-lucide="user-circle"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                {{$user->profile->title}}
                            </p>
                        @endif
                        @if($user->personne)
                            <p class="text-slate-500 dark:text-zink-200"><i data-lucide="map-pin"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                {{$user->personne->ville}}, {{$user->personne->nationalite}}
                            </p>
                        @endif
                    </div>
                    @if($user->personne)
                        <ul
                            class="flex flex-wrap gap-3 mt-4 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                            <li class="px-5">
                                <h5>
                                    {{$user->personne->matricule}}
                                </h5>
                                <p class="text-slate-500 dark:text-zink-200">Matricule</p>
                            </li>
                            <li class="px-5">
                                <h5>
                                    {{$user->personne->telephone}}
                                </h5>
                                <p class="text-slate-500 dark:text-zink-200">{{__('t-phone-number')}}</p>
                            </li>
                            <li class="px-5">
                                <h5>
                                    @if($user->personne->sexe == 'male')
                                        M
                                    @else
                                        F
                                    @endif
                                </h5>
                                <p class="text-slate-500 dark:text-zink-200">{{__('t-gender')}}</p>
                            </li>
                            <li class="px-5">
                                <h5>
                                    {{$view}}
                                </h5>
                                <p class="text-slate-500 dark:text-zink-200">{{__('t-view')}}</p>
                            </li>
                            @if($user->ratings)
                                <li class="px-5">
                                    <h5>
                                        {{$user->ratings->rating}}
                                    </h5>
                                    <p class="text-slate-500 dark:text-zink-200">{{__('t-rating')}}</p>
                                </li>
                            @endif
                            
                        </ul>
                    @endif
                    @if ($user->profile)
                        <p class="mt-4 text-slate-500 dark:text-zink-200">
                            {{$user->profile->bio}}
                        </p>
                        <div class="flex gap-2 mt-4">
                            @if($user->profile->facebook)
                                <a href="{{$user->profile->facebook}}"
                                    class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30">
                                    <i data-lucide="facebook" class="size-4"></i>
                                </a>
                            @endif
                            @if($user->profile->twitter)
                                <a href="{{$user->profile->twitter}}"
                                    class="flex items-center justify-center text-pink-500 transition-all duration-200 ease-linear bg-pink-100 rounded size-9 hover:bg-pink-200 dark:bg-pink-500/20 dark:hover:bg-pink-500/30">
                                    <i data-lucide="instagram" class="size-4"></i>
                                </a>
                            @endif
                            @if($user->profile->linkedin)
                                <a href="{{$user->profile->linkedin}}"
                                    class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30">
                                    <i data-lucide="linkedin" class="size-4"></i>
                                </a>
                            @endif
                            @if($user->profile->website)
                                <a href="{{$user->profile->website}}"
                                    class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded size-9 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30">
                                    <i data-lucide="globe" class="size-4"></i>
                                </a>
                            @endif
                            @if($user->profile->github)
                                <a href="{{$user->profile->github}}"
                                    class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-slate-500 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                    <i data-lucide="github" class="size-4"></i>
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
                <div class="lg:col-span-12 2xl:col-span-2">
                    <div class="flex gap-2 2xl:justify-end items-center">
                        <a href="mailto:{{$user->email}}"
                            class="flex items-center justify-center size-[37.5px] p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                data-lucide="mail" class="size-4"></i></a>
                        {{-- <button type="button" data-modal-target="addDocuments"
                            class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            {{__('t-rating')}}
                        </button> --}}
                    </div>
                </div>
            </div><!--end grid-->
        </div>
        <div class="card-body !px-2.5 !py-0">
            <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                <li class="group active">
                    <a href="javascript:void(0);" data-tab-toggle data-target="overviewTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">
                        {{__('t-overview')}}
                    </a>
                </li>
                <li class="group">
                    <a href="javascript:void(0);" data-tab-toggle data-target="documentsTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">
                        Cv
                    </a>
                </li>
                <li class="group">
                    <a href="javascript:void(0);" data-tab-toggle data-target="otherdocumentsTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">
                        Autres Documents
                    </a>
                </li>
            </ul>
        </div>
    </div><!--end card-->

    <div class="tab-content">
        <div class="block tab-pane" id="overviewTabs">
            <div class="grid grid-cols-1 gap-x-5 2xl:grid-cols-12">
                @if ($user->profile->bio ?? null)
                    <div class="2xl:col-span-9">
                        <div class="card">
                            <div class="card-body">
                                <p class="mb-2 text-slate-500 dark:text-zink-200">
                                    {{$user->profile->bio}}
                                </p>  
                            </div>
                        </div>
                    </div><!--end col-->
                @endif

                <div class="2xl:col-span-9">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-3 text-15">
                                {{ __('t-skills') }}
                            </h6>
                            <span class="py-2 text-slate-500 dark:text-zink-200 ps-0">
                                {{ $user->candidate->SkillSet }}
                            </span>                                                            
                        </div>
                    </div>
                </div><!--end col-->

                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">
                                {{__('t-personnal-informations')}}
                            </h6>
                            <div class="overflow-x-auto">
                                @if ($user->profile && $user->personne)
                                    <table class="w-full ltr:text-left rtl:ext-right">
                                        <tbody>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">
                                                    {{__('t-designation')}}
                                                </th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    @if($user->profile)
                                                        {{$user->profile->title}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">
                                                    {{__('t-phone-number')}}
                                                </th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    @if($user->personne)
                                                        {{$user->personne->telephone}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">
                                                    {{__('t-birth-date')}}
                                                </th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    @if($user->personne)
                                                        {{$user->personne->dateNaissance}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">Website</th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    <a
                                                        href="{{$user->profile->website}}" target="_blank"
                                                        class="text-custom-500">
                                                        {{$user->profile->website}}
                                                    </a>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">Email</th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    {{$user->email}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">
                                                    {{__('t-location')}}
                                                </th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    {{$user->profile->ville}}, 
                                                    {{$user->profile->adresse}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pt-2 font-semibold ps-0" scope="row">
                                                    {{__('t-joining-date')}}
                                                </th>
                                                <td class="pt-2 text-right text-slate-500 dark:text-zink-200">
                                                    {{date('d-m-Y', strtotime($user->created_at))}}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @else
                                    <p class="mb-2 text-slate-500 dark:text-zink-200">
                                        {{__('t-overview-no-profile')}}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">
                                {{__('t-overview-earning')}}
                            </h6>

                            <div class="divide-y divide-slate-200 dark:divide-zink-500">
                                <div class="flex items-center gap-3 pb-3">
                                    <div
                                        class="flex items-center justify-center size-12 rounded-full bg-slate-100 dark:bg-zink-600">
                                        <i data-lucide="wallet" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-lg">${{ $user->candidate->salary }}</h6>
                                        <p class="text-slate-500 dark:text-zink-200">
                                            {{__('t-min-earning')}}
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="flex items-center gap-3 py-3">
                                    <div
                                        class="flex items-center justify-center size-12 rounded-full bg-slate-100 dark:bg-zink-600">
                                        <i data-lucide="goal" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-lg">$125.23</h6>
                                        <p class="text-slate-500 dark:text-zink-200">
                                            {{__('t-min-earning')}}
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end tab pane-->

        <div class="hidden tab-pane" id="documentsTabs">
            <div class="flex items-center gap-3 mb-4">
                <h5 class="underline grow">Documents</h5>
            </div>
            <div class="overflow-x-auto">
                @if($cv && $cv->cv_path)                        
                    <iframe src="{{ Storage::url($cv->cv_path) }}" class="w-full h-[500px] border rounded mt-5" frameborder="0"></iframe>
                @elseif($cv && !$cv->cv_path)
                    <a href="{{ route('cv.download.pdf', $user->id) }}"
                        class="text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-custom-400/20">
                        <i data-lucide="download" class="inline-block size-4 mr-1"></i>
                        <span class="align-middle">Télécharger</span>
                    </a>
                    <iframe src="{{ route('cv.view.pdf', $user->id ) }}" class="w-full h-[500px] border rounded mt-5" frameborder="0"></iframe>
                @else
                    <div class="flex items-center justify-center w-full h-[500px] border rounded mt-5">
                        <p class="text-gray-500 italic">Aucun CV disponible pour ce candidat.</p>
                    </div>
                @endif
        </div><!--end tab pane-->
        </div><!--end tab pane-->

        <div class="hidden tab-pane" id="otherdocumentsTabs">
           <div class="overflow-x-auto">
                <div class="card">
                    <div class="card-body">
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
                                                <a href="{{ route('document.view', $doc->id) }}" arget="_blank"
                                                    class="text-blue-600 hover:underline flex items-center">
                                                     <i data-lucide="file" class="block size-4 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                                     <span class="align-midlle">Voir</span>
                                                </a>

                                                <a href="{{ route('document.download', $doc->id) }}" target="_blank"
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
        
        documentsTabs
    </div><!--end tab content-->


    <!--Add Documents Modal-->
    <div id="addDocuments" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                <h5 class="text-16">
                    Coter le Compte
                </h5>
                <button data-modal-close="addDocuments"
                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                        data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{ route('user.rating') }}" method="POST" class="create-form">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="user" value="{{ $user->id }}">
                        <label for="documentsName" class="inline-block mb-2 text-base font-medium">Documents
                            Name</label>
                        <input type="number" id="documentsName" max="5" min="1" name="rating"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Cote" required>
                    </div>
                    <div class="ckeditor-classic text-slate-800">
                        <textarea name="description" id="description" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"></textarea>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addDocuments"
                            class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">Cancel</button>
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add
                            Document</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/pages-account.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
