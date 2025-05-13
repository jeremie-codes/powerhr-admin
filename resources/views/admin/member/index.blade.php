@extends('admin.layouts.master')
@section('title')
    {{ __('t-list-users') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="{{ __('t-list-users') }}" pagetitle="Users" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="card" id="usersTable">
                @if (session('delete-success'))
                    <div class="!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500">                  
                        <div
                            class="px-4 py-3 text-sm text-red-500 bg-white border border-red-300 rounded-md dark:bg-zink-700 dark:border-red-500">
                            <span class="font-bold">Notification</span> 
                            {{ session('delete-success') }}
                        </div>
                    </div>
                @endif
                <div class="card-body">
                    <div class="mx-5">
                        <table id="basic_tables" class="w-full border-separate table-custom border-spacing-y-2 whitespace-nowrap my-5" style="font-size: 14px;">
                            {{-- <table id="basic_tables" class="display  whitespace-nowrap"> --}}
                            <thead class="ltr:text-left rtl:text-right w-full" >
                            {{-- <thead class="text-left"> --}}
                                <tr  class="rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">
                                    <th class="py-2.5 font-semibold min-w-[105] sort" data-sort="user-id">
                                        User ID</th>
                                    <th class="py-2.5 font-semibold min-w-[105] sort" data-sort="name">
                                        {{ __('t-name') }}
                                    </th>
                                    <th class="py-2.5 font-semibold min-w-[105] sort" data-sort="email">
                                        Email
                                    </th>
                                    <th class="py-2.5 font-semibold min-w-[105] sort"
                                        data-sort="phone-number">
                                        {{__('t-phone-number')}}
                                    </th>
                                    <th class="py-2.5 font-semibold min-w-[105] sort"
                                        data-sort="candidature">
                                        {{__('Candidature')}}
                                    </th>
                                    <th class="py-2.5 font-semibold min-w-[105] sort"
                                        data-sort="status">
                                        {{__('Status')}}
                                    </th>
                                    <th class="py-2.5 font-semibold min-w-[105]">Action</th>
                                </tr>
                            </thead>

                            <tbody class="list ">
                                @forelse ($members as $member)
                                    @if (!$member->jobuser)

                                        <tr
                                            class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">
                                            <td class="py-2.5">
                                                @if($member->personne)
                                                <a href="{{ route('users.show', $member->id) }}"
                                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id dark:text-slate-200">
                                                    {{ $member->personne->matricule }}
                                                </a>
                                                @else
                                                    ---
                                                @endif
                                            </td>
                                            <td class="py-2.5">
                                                <div class="flex items-center gap-2">
                                                    <div
                                                        class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800 dark:text-zink-50 dark:bg-zink-600">
                                                        
                                                        @if ($member->profile_photo_path)
                                                            <img src="{{ URL::asset('storage/'.$member->profile_photo_path) }}"
                                                                alt="" class="h-10 rounded-full">
                                                        @else
                                                            <img src="{{ URL::asset('build/images/users/avatar-2.png') }}"
                                                                alt="" class="h-10 rounded-full">
                                                        @endif
                                                    </div>
                                                    <div class="grow">
                                                        <h6 class="mb-1">
                                                            <a href="{{route('users.show', $member->id)}}" class="name">
                                                                @if($member->personne)
                                                                    {{$member->personne->nom}} {{$member->personne->postNom}} {{$member->personne->prenom}}
                                                                @else
                                                                    {{$member->name}}
                                                                @endif
                                                            </a>
                                                        </h6>
                                                        <p class="text-slate-500 dark:text-zink-200">
                                                            @if($member->profile)
                                                                {{$member->profile->title}}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-2.5 email">
                                                {{$member->email}}
                                            </td>
                                            <td class="py-2.5 phone-number">
                                                @if($member->personne)
                                                {{$member->personne->telephone ?? '---'}}
                                                @endif
                                            </td>
                                            <td class="py-2.5 job-user text-center">
                                                @if($member->jobuser)
                                                    {{$member->jobuser->job->title}}
                                                @else
                                                    ---
                                                @endif
                                            </td>
                                            <td class="py-2.5 job-user text-center">
                                                <span class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded bg-red-100 text-red-500 dark:bg-red-500/20 border border-transparent dark:border-transparent">
                                                        non récommandé
                                                </span>
                                            </td>
                                            <td class="py-2.5">
                                                <div class="dropup relative" style="z-index: 999">
                                                    <button
                                                        class="flex items-center z-[1] justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="usersAction{{ $member->id }}" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-horizontal" class="size-3"></i></button>
                                                    <ul class=" hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="usersAction{{ $member->id }}">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="{{ route('users.show', $member->id) }}"><i data-lucide="eye"
                                                                    class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 z-999 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!" data-modal-target="addEmployeeModal1" type="button"><i data-lucide="plus"
                                                                class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> 
                                                                <span class="align-middle">
                                                                    Récommander
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a data-modal-target="deleteModal"
                                                                class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!"><i data-lucide="trash-2"
                                                                    class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                                    class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div id="deleteModal" modal-center
                                                    class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                                                    <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                                                            <div class="float-right">
                                                                <button data-modal-close="deleteModal"
                                                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i
                                                                        data-lucide="x" class="size-5"></i></button>
                                                            </div>
                                                            <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                                                            <div class="mt-5 text-center">
                                                                <h5 class="mb-1">Are you sure?</h5>
                                                                <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                                                                <div class="flex justify-center gap-2 mt-6">
                                                                    <button type="reset" data-modal-close="deleteModal"
                                                                        class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>
                                                                    <form action="{{ route('users.destroy', $member->id) }}" method="POST" class="inline">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">
                                                                            Yes, Delete It!
                                                                        </button>
                                                                    </form>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <div id="addEmployeeModal1" modal-center
                                                class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
                                                <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                    <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                                                        <h5 class="text-16" id="addEmployeeLabel"> Choisissez l'emploi </h5>
                                                        <button data-modal-close="addEmployeeModal1" id="addEmployee"
                                                            class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                                                                class="size-5"></i></button>
                                                    </div>
                                                    <div class="p-4 overflow-y-auto">
                                                        <form action="{{ route('listjobs.store') }}" method="POST" class="create-form23">
                                                            @csrf
                                                            <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                                                                <div class="xl:col-span-12">
                                                                    <label for="employeeId" class="inline-block mb-2 text-base font-medium">
                                                                        {{__('t-choose-job')}}
                                                                    </label>
                                                                    <select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                        name="job">
                                                                        <option>{{__('t-choose-job')}}</option>
                                                                        @foreach ($jobs as $job)
                                                                            <option value="{{ $job->id }}">
                                                                                {{$job->matricule}} - {{$job->title}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="xl:col-span-12">
                                                                    <input type="hidden" value="{{$member->id}}" name="user" />
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-end gap-2 mt-4">
                                                                <button type="reset" id="close-modal" data-modal-close="addEmployeeModal1"
                                                                    class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">
                                                                    Cancel
                                                                </button>
                                                                <button type="submit" id="addNew"
                                                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 ">
                                                                    Validate
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!--end add Employee-->
                                        </tr>
                                
                                    @elseif ($member->jobuser)

                                        @if ($member->jobuser->client_approved_at === null)
                                            <tr
                                                class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">
                                                <td class="py-2.5">
                                                    @if($member->personne)
                                                        <a href="{{route('users.show', $member->id)}}"
                                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id dark:text-slate-200">
                                                            {{$member->personne->matricule}}
                                                        </a>
                                                    @else
                                                        ---
                                                    @endif
                                                </td>
                                                <td class="py-2.5">
                                                    <div class="flex items-center gap-2">
                                                        <div
                                                            class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800 dark:text-zink-50 dark:bg-zink-600">
                                                            
                                                            @if ($member->profile_photo_path)
                                                                <img src="{{ URL::asset('storage/'.$member->profile_photo_path) }}"
                                                                    alt="" class="h-10 rounded-full">
                                                            @else
                                                                <img src="{{ URL::asset('build/images/users/avatar-2.png') }}"
                                                                    alt="" class="h-10 rounded-full">
                                                            @endif
                                                        </div>
                                                        <div class="grow">
                                                            <h6 class="mb-1">
                                                                <a href="{{route('users.show', $member->id)}}" class="name">
                                                                    @if($member->personne)
                                                                        {{$member->personne->nom}} {{$member->personne->postNom}} {{$member->personne->prenom}}
                                                                    @else
                                                                        {{$member->name}}
                                                                    @endif
                                                                </a>
                                                            </h6>
                                                            <p class="text-slate-500 dark:text-zink-200">
                                                                @if($member->profile)
                                                                    {{$member->profile->title}}
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="py-2.5 email">
                                                    {{$member->email}}
                                                </td>
                                                <td class="py-2.5 phone-number">
                                                    @if($member->personne)
                                                    {{$member->personne->telephone ?? '---'}}
                                                    @endif
                                                </td>
                                                <td class="py-2.5 job-user text-center">
                                                    @if($member->jobuser)
                                                        {{$member->jobuser->job->title}}
                                                    @else
                                                        ---
                                                    @endif
                                                </td>
                                                <td class="py-2.5 job-user text-center">
                                                    @if($member->jobuser)
                                                        <span
                                                            class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded {{$member->jobuser->is_active ? 'bg-orange-200 text-orange-500 dark:bg-orange-500/20' : 'bg-red-100 text-red-500 dark:bg-red-500/20'}} border border-transparent dark:border-transparent">
                                                                {{$member->jobuser->is_active ? 'En Attente d\'approbation du client' : 'non récommandé'}}
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="py-2.5">
                                                    <div class="dropup relative" style="z-index: 999">
                                                        <button
                                                            class="flex items-center z-[1] justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                            id="usersAction{{ $member->id }}" data-bs-toggle="dropdown"><i
                                                                data-lucide="more-horizontal" class="size-3"></i></button>
                                                        <ul class=" hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                            aria-labelledby="usersAction{{ $member->id }}">
                                                            <li>
                                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                    href="{{ route('users.show', $member->id) }}"><i data-lucide="eye"
                                                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                                        class="align-middle">Overview</span></a>
                                                            </li>
                                                            @if ($member->jobuser)
                                                                @if (!$member->jobuser->is_active)
                                                                    <li>
                                                                        <a class="block px-4 py-1.5 z-999 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                            href="#!" data-modal-target="addEmployeeModal" type="button"><i data-lucide="plus"
                                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> 
                                                                            <span class="align-middle">
                                                                                Récommander
                                                                            </span></a>
                                                                    </li>
                                                                @else
                                                                    <li>
                                                                        <a class="block px-4 py-1.5 z-999 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                            href="#!" data-modal-target="cancelRecommand" type="button"><i data-lucide="plus"
                                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> 
                                                                            <span class="align-middle">
                                                                                Annuler la Récommandation
                                                                            </span></a>
                                                                    </li>
                                                                @endif
                                                            @endif
                                                            <li>
                                                                <a data-modal-target="deleteModal"
                                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                    href="#!"><i data-lucide="trash-2"
                                                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                                        class="align-middle">Supprimer</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div id="cancelRecommand" modal-center
                                                        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                                                        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                                                                <div class="float-right">
                                                                    <button data-modal-close="cancelRecommand"
                                                                        class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i
                                                                            data-lucide="x" class="size-5"></i></button>
                                                                </div>
                                                                <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                                                                <div class="mt-5 text-center">
                                                                    <h5 class="mb-1">Êtes-vous sûre?</h5>
                                                                    <p class="text-slate-500 dark:text-zink-200">Etes-vous certain d'annuler cette récommandation ?</p>
                                                                    <div class="flex justify-center gap-2 mt-6">
                                                                        <button type="reset" data-modal-close="cancelRecommand"
                                                                            class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Non, Abandonner</button>
                                                                        <form action="{{ route('listjobs.cancel') }}" method="POST" class="inline">
                                                                            @csrf
                                                                            <div class="xl:col-span-12">
                                                                                <input type="hidden" value="{{ $member->id }}" name="user" />
                                                                                <input type="hidden" value="{{ $member->jobuser->job_id }}" name="job" />
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">
                                                                                Oui, Je suis sûre!
                                                                            </button>
                                                                        </form>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <div id="deleteModal" modal-center
                                                    class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                                                    <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                                                            <div class="float-right">
                                                                <button data-modal-close="deleteModal"
                                                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i
                                                                        data-lucide="x" class="size-5"></i></button>
                                                            </div>
                                                            <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                                                            <div class="mt-5 text-center">
                                                                <h5 class="mb-1">Êtes-vous sûre?</h5>
                                                                <p class="text-slate-500 dark:text-zink-200">Etes-vous de supprimer ce candidat ?</p>
                                                                <div class="flex justify-center gap-2 mt-6">
                                                                    <button type="reset" data-modal-close="deleteModal"
                                                                        class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Annuler</button>
                                                                    <form action="{{ route('users.destroy', $member->id) }}" method="POST" class="inline">
                                                                        @csrf
                                                                        @method('DELETE')
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
                                                  
                                                <div id="addEmployeeModal" modal-center
                                                    class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
                                                    <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                        <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                                                            <h5 class="text-16" id="addEmployeeLabel"> {{ $member->jobuser ? 'Confirmez-vous la récommandation ?' : 'Choisissez l\'emploi' }}</h5>
                                                            <button data-modal-close="addEmployeeModal" id="addEmployee"
                                                                class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                                                                    class="size-5"></i></button>
                                                        </div>
                                                        <div class="p-4 overflow-y-auto">
                                                            <form action="{{ route('listjobs.store') }}" method="POST" class="create-form23">
                                                                @csrf
                                                                <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                                                                    <div class="xl:col-span-12">
                                                                        @if ($member->jobuser)
                                                                            <h4 for="employeeId" class="inline-block mb-2 text-base font-medium">
                                                                                {{ $member->jobuser->job->title }}
                                                                            </h4>

                                                                            <div class="xl:col-span-12">
                                                                                <input type="hidden" value="{{ $member->jobuser->job_id }}" name="job" />
                                                                            </div>
                                                                        @else
                                                                            <label for="employeeId" class="inline-block mb-2 text-base font-medium">
                                                                                {{__('t-choose-job')}}
                                                                            </label>
                                                                            <select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                                                name="job">
                                                                                <option>{{__('t-choose-job')}}</option>
                                                                                @foreach ($jobs as $job)
                                                                                    <option value="{{ $job->id }}">
                                                                                        {{$job->matricule}} - {{$job->title}}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        @endif
                                                                    </div>
                                                                    <div class="xl:col-span-12">
                                                                        <input type="hidden" value="{{$member->id}}" name="user" />
                                                                    </div>
                                                                </div>
                                                                <div class="flex justify-end gap-2 mt-4">
                                                                    <button type="reset" id="close-modal" data-modal-close="addEmployeeModal"
                                                                        class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">
                                                                        Annuler
                                                                    </button>
                                                                    <button type="submit" id="addNew"
                                                                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 ">
                                                                        Valider
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!--end add Employee-->
                                            </tr>
                                        @endif
                                    @endif
                                @empty
                                    <div class="noresult">
                                        <div class="py-6 text-center">
                                            <i data-lucide="search"
                                                class="size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="mb-0 text-slate-500 dark:text-zink-200">

                                            </p>
                                        </div>
                                    </div>
                                @endforelse
                                

                            </tbody>
                        </table>
                        <div class="noresult" style="display: none">
                            <div class="py-6 text-center">
                                <i data-lucide="search"
                                    class="size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 199+ users We
                                    did not find any users for you search.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center mt-8 md:flex-row">
                        <div class="mb-4 grow md:mb-0">
                        </div>
                        <ul class="flex flex-wrap items-center gap-2">
                            {{$members->links()}}
                        </ul>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end grid-->
    


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
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <!-- User list init js -->
    <script src="{{ URL::asset('build/js/pages/apps-user-list.init.js') }}"></script>



    <script src="{{ URL::asset('build/js/datatables/jquery-3.7.0.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/data-tables.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/data-tables.tailwindcss.min.js') }}"></script>
    <!--buttons dataTables-->
    <script src="{{ URL::asset('build/js/datatables/datatables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/buttons.print.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/datatables/datatables.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
