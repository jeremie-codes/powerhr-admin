@extends('admin.layouts.master')
@section('title')
    {{ __('t-list-job') }}
@endsection
@push('css')
    <script src="{{ URL::asset('build/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/common.js') }}"></script>
@endpush
@section('content')
    <!-- page title -->
    <x-page-title title="liste d'offres" pagetitle="Jobs" />

    <div class="card" id="productListTable">
        <div class="card-body">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-12">
                <div class="xl:col-span-3">
                    <div class="relative">
                        <input type="text"
                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Search for ..." autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                    </div>
                </div><!--end col-->
                <div class="xl:col-span-2">
                    {{-- <div>
                        <input type="text"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" readonly="readonly"
                            placeholder="Select Date">
                    </div> --}}
                </div><!--end col-->
            </div><!--end grid-->
        </div>
        <div class="pt-1 card-body">
            <div class="overflow-auto">
                <table class="w-full whitespace-nowrap" id="productTable">
                    <thead class="ltr:text-left rtl:text-right bg-slate-100 dark:bg-zink-600">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort product_code"
                                data-sort="product_code">
                                Matricule
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort product_name"
                                data-sort="product_name">
                                {{ __('t-job-name') }}
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort category"
                                data-sort="category">
                                {{ __('t-location') }}
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort category"
                                data-sort="category">
                                {{ __('t-category') }}
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort price"
                                data-sort="price">
                                {{ __('t-salary') }}
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort status">Status</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort status"
                                data-sort="status">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @forelse ($jobs as $job)
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <a href="{{route('listjobs.show',$job->matricule)}}"
                                        class="transition-all duration-150 ease-linear product_code text-custom-500 hover:text-custom-600">
                                        #{{$job->matricule}}
                                    </a>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 product_name">
                                    <a href="{{route('listjobs.show',$job->matricule)}}" class="flex items-center gap-2">
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
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 category">
                                    <span
                                        class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">
                                        {{ $job->category->name }}
                                    </span>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 price">
                                    {{ $job->salary }}
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                                    @if ($job->is_open)
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
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                                    <div class="relative dropdown">
                                        <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                            id="usersAction1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="usersAction1" style="z-index: 999">
                                            <li>
                                                @if ($job->is_open)
                                                   <form action="{{ route('job.hidden', $job->id) }}" method="post">
                                                       @csrf
                                                        <button class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded border border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent">
                                                            Désactiver
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('job.visible', $job->id) }}" method="post">
                                                        @csrf
                                                        <button  class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded border border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">
                                                            Activer
                                                        </button>
                                                    </form>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <div class="noresult">
                                <div class="py-6 text-center">
                                    <i data-lucide="search"
                                        class="size-6 mx-auto mb-3 text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i>
                                    <h5 class="mt-2 mb-1">Sorry! No Result Found</h5>
                                    <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 199+ product We did not
                                        find any product for you search.</p>
                                </div>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="flex flex-col items-center gap-4 px-4 mt-4 md:flex-row" id="pagination-element">
                <div class="grow">
                </div>

                <div class="col-sm-auto mt-sm-0">
                    <div class="flex gap-2 pagination-wrap justify-content-center">
                        {{$jobs->links()}}
                    </div>
                </div>
            </div>

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
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/apps-ecommerce-product.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
