@extends('candidate.layouts.candidate.master')
@section('title')
    {{ __('t-profile-candidat-cv') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Candidature" pagetitle="Tableau de board" />

    <div class="grid grid-cols-1 lg:grid-cols-12 xl:grid-cols-12 gap-x-5">
        <div class="lg:col-span-4 xl:col-span-4">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0">
                        <i data-lucide="check"></i></div>
                    <div class="grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="{{ $approved ?? 0 }}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Candidatures approuvés</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="lg:col-span-4 xl:col-span-4">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 text-red-500 bg-red-100 rounded-md text-15 dark:bg-red-500/20 shrink-0">
                        <i data-lucide="x-octagon"></i></div>
                    <div class="grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="{{ $rejected ?? 0 }}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Candidatures rejettés</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="lg:col-span-4 xl:col-span-4">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 text-yellow-500 bg-yellow-100 rounded-md text-15 dark:bg-yellow-500/20 shrink-0">
                        <i data-lucide="refresh-cw"></i></div>
                    <div class="grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="{{ $waiting ?? 0 }}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Candidature en attente</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->

        <div class="xl:col-span-12 lg:col-span-12" id="eventList">
            <div class="card">
                <div class="card-body">
                    <div class="grid grid-cols-1 gap-4 mb-5 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="xl:col-span-3">
                            <div class="relative grow">
                                <input type="text"
                                    class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-100 dark:placeholder:text-zink-200"
                                    placeholder="Rechercher l'offre..." autocomplete="off">
                                <i data-lucide="search"
                                    class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                            </div>
                        </div><!--end col-->
                    </div><!--end grid-->
                    <div class="overflow-x-auto">
                        <table class="w-full whitespace-nowrap table-strepped" id="productTable">
                            <thead 
                                class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600 w-full whitespace-nowra table-strepped" id="productTable">
                                <tr>
                                    <th data-sort="product_date" class="px-3.5 py-2.5 font-semibold product_date border-b border-slate-200 dark:border-zink-500">
                                        Date soumise</th>
                                    <th data-sort="product_name" class="px-3.5 py-2.5 font-semibold  product_name border-b border-slate-200 dark:border-zink-500">
                                        Titre offre</th>
                                    <th data-sort="product_city" class="product_city px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">
                                        Lieu d'affectation</th>
                                    <th data-sort="product_state" class="product_state px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">
                                        État</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @forelse ($offerts as $offert)
                                    <tr>
                                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 product_date">
                                            {{ \Carbon\Carbon::parse($offert->created_at)->locale('fr')->translatedFormat('d M Y') }}
                                        </td>
                                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 product_name">{{ $offert->job->title }}</td>
                                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 product_city">{{ $offert->job->location }}</td>
                                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 product_state">
                                            <div class="">
                                                @if ($offert->client_approved_at)
                                                    <a href="#!"
                                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                                            data-lucide="check" class="size-4"></i></a>
                                                @elseif ($offert->client_rejected_at)
                                                    <a href="#!"
                                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                                            data-lucide="x" class="size-4"></i></a>
                                                @else                                                
                                                    <a href="#!"
                                                        class="flex items-center justify-center size-8 text-orange-500 transition-all duration-200 ease-linear bg-orange-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                                            data-lucide="clock" class="size-4"></i></a>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                            <div class="flex gap-2">
                                                <a href="#!"
                                                    class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500">
                                                    <i data-lucide="trash" class="size-4"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="noresult">
                                        <div class="py-6 text-center">
                                            <i data-lucide="search"
                                                class="size-6 mx-auto mb-3 text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i>
                                            <h5 class="mt-2 mb-1">Désolé! Aucun résultat trouvé !</h5>
                                            {{-- <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 199+ product We did not
                                                find any product for you search.</p> --}}
                                        </div>
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-col items-center gap-4 px-4 mt-4 md:flex-row" id="pagination-element">
                        <div class="mb-4 grow md:mb-0">
                            <p class="text-slate-500 dark:text-zink-200"><b>{{ offerts->count() }}</b> Results</p>
                        </div>

                        <div class="col-sm-auto mt-sm-0">
                            <div class="flex gap-2 pagination-wrap justify-content-center">
                                {{$offerts->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end grid-->
    
@endsection

@push('scripts')
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>

    <!--social event init-->
    <script src="{{ URL::asset('build/js/pages/apps-social-event.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush