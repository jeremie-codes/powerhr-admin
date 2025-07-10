@extends('client.layouts.master')
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
                                {{optional($job->user->customer)->city}}, {{optional($job->user->customer)->adress}}
                        </p>
                    </div>
                    <ul
                        class="flex flex-wrap gap-3 mt-4 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                        <li class="px-5">
                            <h5>
                                {{$job->candidates->count()}}
                            </h5>
                            <p class="text-slate-500 dark:text-zink-200">Candidatures</p>
                        </li>
                        {{-- <li class="px-5">
                            <h5>
                                {{$view}}
                            </h5>
                            <p class="text-slate-500 dark:text-zink-200">Consultations</p>
                        </li> --}}
                        @if ($job->is_open)
                            <li class="px-5">
                                <h5>OPEN</h5>
                                <p class="text-slate-500 dark:text-zink-200">Status</p>
                            </li>
                        @else
                            <li class="px-5">
                                <h5>Close</h5>
                                <p class="text-slate-500 dark:text-zink-200">Status</p>
                            </li>
                        @endif
                        
                    </ul>
                </div>
                {{-- <div class="lg:col-span-12 2xl:col-span-2">
                    <div class="flex gap-2 2xl:justify-end">
                        <button type="button" data-modal-target="addDocuments"
                            class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            {{__('t-close')}}
                        </button>
                    </div>
                </div> --}}
            </div><!--end grid-->
        </div>
        <div class="card-body !px-2.5 !py-0">
            <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                <li class="group active">
                    <a href="javascript:void(0);" data-tab-toggle data-target="overviewTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Overview</a>
                </li>
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
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end grid-->

        </div><!--end tab pane-->

        <div class="hidden tab-pane" id="projectsTabs">
            <div class="flex items-center gap-3 mb-4">
                <h5 class="underline grow">Candidatures</h5>
            </div>
            
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
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">
                                Approbation Client
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">
                                Approbation Candidat
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Status</th>
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
                                    @if ($candidate->is_active)
                                        <span
                                            class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">
                                                Open
                                            </span>
                                    @else
                                        <span
                                            class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">
                                                Closed
                                            </span> 
                                    @endif    
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-transparent">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{route('candidates.show', $candidate->user->id)}}"
                                            class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                                data-lucide="eye" class="size-3"></i></a>
                                        @if (!$candidate->client_approved_at)
                                            <a href="{{route('jobs.accept', $candidate->matricule)}}"
                                                class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                                    data-lucide="check-check" class="size-3"></i></a>
                                        @endif
                                        @if (!$candidate->client_rejected_at)
                                            <a href="{{route('jobs.reject', $candidate->matricule)}}"
                                                class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                                    data-lucide="x" class="size-3"></i></a>
                                        @endif
                                        
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
    
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/pages-account.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
