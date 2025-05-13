@extends('client.layouts.master')
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
                            <a href="mailto:{{$user->email}}"
                                class="flex items-center justify-center size-[37.5px] p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                    data-lucide="mail" class="size-4"></i></a>
                        </div>
                    @endif
                </div>
                <div class="lg:col-span-12 2xl:col-span-2">
                    <div class="flex gap-2 2xl:justify-end">
                        @if (!$user->jobuser->client_approved_at)
                            <a href="{{route('jobs.accept', $user->jobuser->matricule)}}" type="button"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-employee"><i
                                    data-lucide="check" class="inline-block size-4"></i> <span class="align-middle">
                                        Embaucher
                                    </span>
                            </a>
                            <a href="{{route('jobs.reject', $user->jobuser->matricule)}}" type="button"
                                class="text-white btn bg-red-500 border-red-500 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20 add-employee"><i
                                    data-lucide="x" class="inline-block size-4"></i> <span class="align-middle">
                                        Rejeter
                                    </span>
                            </a>
                        @else
                            <a href="{{route('jobs.reject', $user->jobuser->matricule)}}" type="button"
                                class="text-white btn bg-red-500 border-red-500 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20 add-employee"><i
                                    data-lucide="x" class="inline-block size-4"></i> <span class="align-middle">
                                        Annuler l'embauche
                                    </span>
                            </a>
                        @endif
                        
                        
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
                    <a href="javascript:void(0);" data-tab-toggle data-target="cvtabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">
                        {{__('Cv')}}
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

                    @if ($user->salary)
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
                                            <h6 class="text-lg">${{$user->salary->max}}</h6>
                                            <p class="text-slate-500 dark:text-zink-200">
                                                {{__('t-max-earning')}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3 py-3">
                                        <div
                                            class="flex items-center justify-center size-12 rounded-full bg-slate-100 dark:bg-zink-600">
                                            <i data-lucide="goal" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-lg">${{$user->salary->min}}</h6>
                                            <p class="text-slate-500 dark:text-zink-200">
                                                {{__('t-min-earning')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    @endif 
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end tab content-->

        <div class="hidden tab-pane" id="cvtabs">
            <div class="flex items-center gap-3 mb-4">
                <h5 class="underline grow">Documents</h5>
            </div>
            <div class="overflow-x-auto">
                {{-- CV --}}
                @if($user->candidate->cv_fichier)
                    <a href="{{ route('cv.telecharger.pdf', $user->candidates->id) }}"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                        Télécharger le CV
                    </a>
                    
                    <iframe src="{{ route('cv.generer.pdf', $user->candidates->id) }}" class="w-full h-[500px] border rounded mt-5" frameborder="0"></iframe>
            
                @else
                    <p class="text-gray-500 italic">Aucun CV disponible pour ce candidat.</p>
                @endif
            </div>
        </div><!--end tab pane-->
    </div><!--end tab content-->

    <!--Add Documents Modal-->
    <div id="addEmployeeModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16" id="addEmployeeLabel">Add Employee</h5>
                <button data-modal-close="addEmployeeModal" id="addEmployee"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{route('jobs.hire')}}" method="POST" class="create-form23">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="employeeId" class="inline-block mb-2 text-base font-medium">
                                {{__('t-choose-job')}}
                            </label>
                            <select name="job"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                data-choices id="choices-single-default22">
                                <option value="">{{__('t-choose-job')}}</option>
                                @foreach ($jobs as $job)
                                    <option value="{{$job->id}}">
                                        {{$job->matricule}} - {{$job->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="user" value="{{$user->id}}">
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" id="close-modal" data-modal-close="addEmployeeModal"
                            class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">
                            Cancel
                        </button>
                        <button type="submit" id="addNew"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 ">
                            Add Employee
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/pages-account.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
