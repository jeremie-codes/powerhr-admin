@extends('candidate.layouts.candidate.master')
@section('title')
    {{ __('t-list-job') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Liste d'offres" pagetitle="Tableau de board" />

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
        <div class="xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="rounded-full bg-slate-100 dark:bg-zink-600 shrink-0">
                            <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                class="rounded-full h-14">
                        </div>
                        <div class="grow">
                            <h6 class="mb-1 text-15">{{ $user->name }}<i data-lucide="badge-check"
                                    class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i></h6>
                            <p class="text-slate-500 dark:text-zink-200">{{ $user->email }} </p>
                        </div>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <ul class="flex flex-col w-full gap-2 mb-4 text-sm font-medium shrink-0 nav-tabs">
                        <li class="group grow">
                            <a href="{{ url('offerts?filter=*') }}"
                                class="{{ Request::get('filter') == 'accusantium' ? 'text-custom-500': '' }} inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="briefcase" class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i>
                                <span class="align-middle">Tout</span></a>
                        </li>
                        @foreach ($categories as $category)
                        <li class="group grow">
                            <a href="{{ url('offerts?filter='. $category->category->name) }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="airplay" class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i>
                                <span class="align-middle">{{ $category->category->name }}</span></a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div><!--end card-->
        </div><!--end-->
        <div class="xl:col-span-9" id="eventList">
            <div class="grid items-center grid-cols-1 gap-4 mb-4 xl:grid-cols-12">
                <div class="flex gap-2 xl:col-span-4 xl:col-start-9">
                    <div class="relative grow">
                        <input type="text"
                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-100 dark:placeholder:text-zink-200"
                            placeholder="Rechercher l'offre..." autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                    </div>
                </div>
            </div>
            <div
                class="px-4 py-3 mb-4 text-sm text-green-500 border border-green-200 rounded-md bg-green-50 dark:bg-green-400/20 dark:border-green-500/50">
                <span class="font-bold">Consultez toutes les offres disponibles </span> qui pourront vous interresser!
                <a href="#!" class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border transition-all duration-200 ease-linear bg-green-100 border-transparent text-green-500 hover:bg-green-200 dark:bg-green-400/20 dark:hover:bg-green-400/30 dark:border-transparent ltr:ml-1 rtl:mr-1">
                    mainteneant !</a>
            </div>
            <div class="overflow-x-auto bg-white">
                <table class="w-full whitespace-nowrap table-strepped" id="productTable">
                    <thead class="ltr:text-left rtl:text-right bg-slate-100 dark:bg-zink-600">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort product_code"
                                data-sort="product_code">
                                Matricule
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort product_name"
                                data-sort="product_name">
                                Titre offre
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort category"
                                data-sort="category">
                                {{ __('Lieu') }}
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort price"
                                data-sort="price">
                                {{ __('Contrat') }}
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort status"
                                data-sort="status">Status</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort status"
                                data-sort="status">Valable jusqu'au</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort status"
                                data-sort="status">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @forelse ($jobs as $job)
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <a href="{{route('offerts.show',$job->matricule)}}"
                                        class="transition-all duration-150 ease-linear product_code text-custom-500 hover:text-custom-600">
                                        #{{$job->matricule}}
                                    </a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 product_name">
                                    <a href="{{ route('offerts.show', $job->matricule)}}" class="flex items-center gap-2">
                                        <h6 class="product_name">
                                            {{ $job->title }}
                                        </h6>
                                    </a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 category">
                                    <span
                                        class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">
                                        {{ $job->location }}
                                    </span>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 price">
                                    {{ $job->contract_type }}
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                                    @if ($job->is_open && $job->available_until >= now())
                                        <span
                                            class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">
                                                Disponible
                                        </span>
                                    @else
                                       <span
                                        class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent">
                                            Expiré
                                        </span> 
                                    @endif
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 price">
                                    {{ \Carbon\Carbon::parse($job->available_until)->locale('fr')->translatedFormat('d M Y') }}
                                </td>
                                <td class="px-3.5 py-2.5 flex">
                                    @if ($job->is_open)
                                        <a class="block btn p-1 bg-slate-100 px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-300 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{route('offerts.show',$job->matricule)}}">
                                            <i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> 
                                            <span class="align-middle">Voir</span></a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <div class="noresult">
                                <div class="py-6 text-center">
                                    <i data-lucide="search"
                                        class="size-6 mx-auto mb-3 text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i>
                                    <h5 class="mt-2 mb-1">Désolé! Aucun résultat trouvé !</h5>
                                </div>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col items-center gap-4 px-4 mt-4 md:flex-row" id="pagination-element">
                <div class="mb-4 grow md:mb-0">
                    <p class="text-slate-500 dark:text-zink-200"><b>{{ $jobs->count() }}</b> Results</p>
                </div>

                <div class="col-sm-auto mt-sm-0">
                    <div class="flex gap-2 pagination-wrap justify-content-center">
                        {{$jobs->links()}}
                    </div>
                </div>
            </div>
        </div><!--end-->
    </div><!--end-->
    
@endsection
@push('scripts')
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>

    <!--social event init-->
    <script src="{{ URL::asset('build/js/pages/apps-social-event.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
