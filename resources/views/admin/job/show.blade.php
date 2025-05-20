@extends('admin.layouts.master')
@section('title')
    {{ __('Account') }}
@endsection
@section('content')
    <div class="mt-1 -ml-3 -mr-3 rounded-none card">
        <div class="card-body !px-2.5">
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12">
                <!--end col-->
                <div class="lg:col-span-12 2xl:col-span-9 gap-x-5">
                    @if ($job->user->customer)
                        <h5 class="mb-1">
                            {{$job->user->customer->name}}
                             <i data-lucide="badge-check"
                            class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i></h5>
                    @else
                        <h5 class="mb-1">
                            {{$job->user->name}}
                             <i data-lucide="badge-check"
                            class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i></h5>
                    @endif
                    
                    <div class="flex gap-3 mb-4">
                        <p class="text-slate-500 dark:text-zink-200"><i data-lucide="map-pin"
                                class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                {{$job->user->customer->city ?? "Not defined"}}, {{$job->user->customer->adress ?? "Not defined"}}
                        </p>
                    </div>
                    <ul
                        class="flex flex-wrap gap-3 mt-4 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                        <li class="px-5">
                            <h5 class="text-slate-500 dark:text-zink-200">Titre</h5>
                            <h5>
                                {{$job->title}}
                            </h5>
                        </li>
                        <li class="px-5">
                            <h5 class="text-slate-500 dark:text-zink-200">Candidatures</h5>
                            <h5>
                                {{$job->candidates->count()}}
                            </h5>
                        </li>
                        @if ($job->is_open)
                            <li class="px-5">
                                <h5 class="text-slate-500 dark:text-zink-200">Status</h5>
                                <h5>OPEN</h5>
                            </li>
                        @else
                            <li class="px-5">
                                <h5 class="text-slate-500 dark:text-zink-200">Status</h5>
                                <h5>Close</h5>
                            </li>
                        @endif
                        
                    </ul>
                </div>
            </div><!--end grid-->
        </div>
        <div class="card-body !px-2.5 !py-0">
            <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                <li class="group active">
                    <a href="javascript:void(0);" data-tab-toggle data-target="overviewTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Overview</a>
                </li>
                
                {{-- <li class="group">
                    <a href="javascript:void(0);" data-tab-toggle data-target="followersTabs"
                        class="inline-block px-4 py-2 text-base transition-all 
                                duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent 
                                group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 
                                dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 
                                dark:active:text-custom-500 -mb-[1px]">
                        Canditats Potencials
                    </a>
                </li> --}}
                <li class="group">
                    <a href="javascript:void(0);" data-tab-toggle data-target="projectsTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">
                        Candidatures
                    </a>
                </li>
            </ul>
        </div>
    </div><!--end card-->

    <div class="tab-content">
        <div class="block tab-pane" id="overviewTabs">
            <div class="grid grid-cols-1 gap-x-5 2xl:grid-cols-12">
                <div class="2xl:col-span-9">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-3 text-15">Overview</h6>
                            <p class="mb-2 text-slate-500 dark:text-zink-200">
                                {{$job->description}}
                            </p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center mb-3">
                                <h6 class="grow text-15">
                                    Skills
                                </h6>
                            </div>
                            <div
                                class="px-4 py-3 mb-2 text-sm rounded-md text-slate-500 dark:text-zink-200 bg-slate-50 dark:bg-zink-600">
                                <h6 class="mb-1">
                                    {{$job->skills}}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Earning Reports</h6>

                            <div class="divide-y divide-slate-200 dark:divide-zink-500">
                                <div class="flex items-center gap-3 pb-3">
                                    <div
                                        class="flex items-center justify-center size-12 rounded-full bg-slate-100 dark:bg-zink-600">
                                        <i data-lucide="wallet" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-lg">${{$job->salary}}</h6>
                                        <p class="text-slate-500 dark:text-zink-200">
                                            Salaire Mensuel
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 py-3">
                                    <div
                                        class="flex items-center justify-center size-12 rounded-full bg-slate-100 dark:bg-zink-600">
                                        <i data-lucide="goal" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                    </div>
                                    <div>
                                        @if ($job->duration)
                                            <h6 class="text-lg">
                                                {{$job->duration}}
                                            </h6>
                                        @else
                                            <h6 class="text-lg">
                                                Indeterminée
                                            </h6>
                                        @endif
                                        
                                        <p class="text-slate-500 dark:text-zink-200">
                                            Durée
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 pt-3">
                                    <div
                                        class="flex items-center justify-center size-12 rounded-full bg-slate-100 dark:bg-zink-600">
                                        <i data-lucide="package" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-lg">
                                            {{$job->work_type}}
                                        </h6>
                                        <p class="text-slate-500 dark:text-zink-200">
                                            Type
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 pt-3">
                                    <div
                                        class="flex items-center justify-center size-12 rounded-full bg-slate-100 dark:bg-zink-600">
                                        <i data-lucide="package" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-lg">
                                            {{$job->contract_type}}
                                        </h6>
                                        <p class="text-slate-500 dark:text-zink-200">
                                            Type de Contrat
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 pt-3">
                                    <div
                                        class="flex items-center justify-center size-12 rounded-full bg-slate-100 dark:bg-zink-600">
                                        <i data-lucide="package" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-lg">
                                            {{$job->contract_type}}
                                        </h6>
                                        <p class="text-slate-500 dark:text-zink-200">
                                            Type de Contrat
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end grid-->

        </div><!--end tab pane-->
        {{-- <div class="hidden tab-pane" id="followersTabs">
            <h5 class="mb-4 underline">Candidates</h5>

            <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-x-5">
                @forelse ($matchingUsers as $user)
                    @if ($user->profile && $user->personne)
                        <div class="relative card">
                            <div class="card-body">
                                <p
                                    class="absolute inline-block px-5 py-1 text-xs text-red-600 bg-red-100 ltr:left-0 rtl:right-0 dark:bg-red-500/20 top-5 ltr:rounded-e rtl:rounded-l">
                                    {{$user->profile->title}}    
                                </p>
                                <div class="flex items-center justify-end">
                                    <p class="text-slate-500 dark:text-zink-200">Doj : {{date('d-m-Y', strtotime($user->created_at))}}</p>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="flex justify-center">
                                        <div class="size-20 overflow-hidden rounded-full bg-slate-100">
                                            <img src="{{ URL::asset('build/images/users/avatar-6.png') }}" alt=""
                                                class="">
                                        </div>
                                    </div>
                                    <a href="#!">
                                        <h4 class="mt-4 mb-2 font-semibold text-16">
                                            {{$user->personne->nom}} {{$user->personne->postNom}} {{$user->personne->prenom}}
                                        </h4>
                                    </a>
                                    <div class="text-slate-500 dark:text-zink-200">
                                        <p class="mb-1">
                                            {{$user->email}}
                                        </p>
                                        <p>
                                            {{$user->personne->telephone}}
                                        </p>
                                        <form action="{{route('jobs.store')}}" method="POST" class="create-form23">
                                            @csrf
                                            <input type="hidden" value="{{$job->id}}" name="job">
                                            <input type="hidden" value="{{$user->id}}" name="user">
                                            
                                            <button type="submit" id="addNew"
                                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 ">
                                                Add Employee
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    @endif
                @empty
                    <div class="relative card">
                        <div class="card-body">
                            <p>No matching users found</p>
                        </div>
                    </div>
                @endforelse
            </div><!--end grid-->
        </div><!--end tab pane--> --}}
        <div class="hidden tab-pane" id="projectsTabs">
            
            <div class="overflow-x-auto">
                <table class="w-full align-middle border-separate whitespace-nowrap border-spacing-y-1">
                    <thead class="text-left bg-white dark:bg-zink-700">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">
                                Numero
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">
                                Candidat
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Email</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">
                                Approbation Client
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">
                                Approbation Candidat
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($job->candidates as $candidate)
                            <tr class="bg-white dark:bg-zink-700">
                                <td class="px-3.5 py-2.5 border-y border-transparent">
                                    <span
                                        class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">
                                        {{$candidate->matricule}}
                                    </span>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">
                                    {{$candidate->user->personne->nom}} {{$candidate->user->personne->postNom}} {{$candidate->user->personne->prenom}}
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">
                                    {{$candidate->user->email}}
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">
                                    @if ($candidate->client_approved_at && !$candidate->client_rejected_at)
                                        Approuvé
                                    @elseif (!$candidate->client_approved_at && $candidate->client_rejected_at)
                                        Refusé
                                    @elseif (!$candidate->client_approved_at && !$candidate->client_rejected_at)
                                        En Attente
                                    @endif
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">
                                    @if ($candidate->user_approved_at && !$candidate->user_rejected_at)
                                        Approuvé
                                    @elseif (!$candidate->user_approved_at && $candidate->user_rejected_at)
                                        Refusé
                                    @elseif (!$candidate->user_approved_at && !$candidate->user_rejected_at)
                                        En Attente
                                    @endif
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">
                                    <div class="flex items-center justify-end gap-2">
                                        {{-- <form action="{{ route('jobs.destroy', $candidate->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                                data-lucide="trash-2" class="size-3"></i>
                                            </button>
                                        </form> --}}
                                        <div class="dropup">
                                            <button
                                                class="flex items-center z-[1] justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                id="usersAction1" data-bs-toggle="dropdown"><i
                                                    data-lucide="more-horizontal" class="size-3"></i></button>
                                            <ul class=" hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                aria-labelledby="usersAction1">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                        href="{{ route('users.show', $candidate->user->id) }}"><i data-lucide="eye"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                            class="align-middle">Overview</span></a>
                                                </li>
                                                @if (!$candidate->is_active)
                                                    <li>
                                                        <a class="block px-4 py-1.5 z-999 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                            href="#!" data-modal-target="addEmployeeModal" type="button"><i data-lucide="plus"
                                                            class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> 
                                                            <span class="align-middle">
                                                                Récommander au client
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
                                            </ul>
                                        </div>

                                        <div id="addEmployeeModal" modal-center class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
                                            <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
                                                <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                                                    <h5 class="text-16" id="addEmployeeLabel"> {{ 'Confirmez-vous la récommandation ?' }}</h5>
                                                    <button data-modal-close="addEmployeeModal" id="addEmployee"
                                                        class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                                                            class="size-5"></i></button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <form action="{{ route('jobs.store') }}" method="POST" class="create-form23">
                                                        @csrf
                                                        <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                                                            <div class="xl:col-span-12">
                                                                <h4 for="employeeId" class="inline-block mb-2 text-base font-medium">
                                                                    {{ $candidate->job->title }}
                                                                </h4>

                                                                <div class="xl:col-span-12">
                                                                    <input type="hidden" value="{{ $candidate->job_id }}" name="job" />
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-12">
                                                                <input type="hidden" value="{{$candidate->id}}" name="user" />
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
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <div class="py-6 text-center">
                                <i data-lucide="search"
                                    class="size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 199+ documents We
                                    did not find any documents for you search.</p>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div><!--end tab pane-->
    </div><!--end tab content-->

    <!-- Delete Modal -->
    @if ($job->candidates->count() > 0)
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
                        <form action="{{ route('jobs.destroy', $candidate->id) }}" method="POST" class="inline">
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
