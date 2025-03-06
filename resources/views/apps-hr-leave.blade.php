@extends('layouts.master')
@section('title')
    {{ __('Leave Manage(HR)') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Leave Manage (HR)" pagetitle="Leaves Manage" />

    <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-12">
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-3 card-body">
                    <div
                        class="flex items-center justify-center size-12 rounded-md text-15 bg-custom-100 text-custom-500 dark:bg-custom-500/20 shrink-0">
                        <i data-lucide="file-bar-chart-2"></i></div>
                    <div class="grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="18">0</span>/<span
                                class="counter-value" data-target="60">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Today/Presents Leave</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-3 card-body">
                    <div
                        class="flex items-center justify-center size-12 text-green-500 bg-green-100 rounded-md text-15 dark:bg-green-500/20 shrink-0">
                        <i data-lucide="calendar-check"></i></div>
                    <div class="grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="5">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Today Leaves</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-3 card-body">
                    <div
                        class="flex items-center justify-center size-12 text-purple-500 bg-purple-100 rounded-md text-15 dark:bg-purple-500/20 shrink-0">
                        <i data-lucide="codepen"></i></div>
                    <div class="grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="0">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Unplanned Leaves</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-3 card-body">
                    <div
                        class="flex items-center justify-center size-12 text-yellow-500 bg-yellow-100 rounded-md text-15 dark:bg-yellow-500/20 shrink-0">
                        <i data-lucide="loader"></i></div>
                    <div class="grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="6">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Pending Leaves</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end grid-->

    <div class="card" id="ordersTable">
        <div class="card-body">
            <div class="grid grid-cols-1 gap-4 mb-5 lg:grid-cols-2 xl:grid-cols-12">
                <div class="xl:col-span-3">
                    <div class="relative">
                        <input type="text"
                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Search for ..." autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                    </div>
                </div><!--end col-->
                <div class="xl:col-span-2 xl:col-start-11">
                    <div class="ltr:lg:text-right rtl:lg:float-left">
                        <a href="#!" data-modal-target="addLeaveModal" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add
                                Leave</span></a>
                    </div>
                </div>
            </div><!--col grid-->
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead class="text-left bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">#</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Employee
                                Name</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Leave
                                Type</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Reason
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">No Of
                                Days</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">From</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">to</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Status
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Willie Torres</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Medical Leave</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Hospital</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">11 Oct, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">12 Oct, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                            data-lucide="check" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Patricia Garcia</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Family
                                Function</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">07 Sept, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">07 Sept, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-yellow-100 text-yellow-500 dark:bg-yellow-400/20 dark:border-transparent">Pending</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                            data-lucide="check" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">03</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Juliette Fecteau</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Holiday</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">06</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">11 Jun, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">16 Jun, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-purple-100 border-purple-100 text-purple-500 dark:bg-purple-400/20 dark:border-transparent">New</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                            data-lucide="check" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">04</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Thomas Hatfield</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Sick Leave</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Attend Birthday party
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 July, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 July, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                            data-lucide="check" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">05</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Willie Torres</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Sick Leave</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Personal</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">19 Aug, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">20 Aug, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-red-100 text-red-500 dark:bg-red-400/20 dark:border-transparent">Declined</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                            data-lucide="check" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">06</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Juliette Fecteau</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Family
                                Function</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">14 Feb, 2022</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">14 Feb, 2022</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                            data-lucide="check" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">07</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Nancy Reynolds</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Medical Leave</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Medical Emergency</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">04</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">23 Jan, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">26 Jan, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-yellow-100 text-yellow-500 dark:bg-yellow-400/20 dark:border-transparent">Pending</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                            data-lucide="check" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">08</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Holly Kavanaugh</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Personal</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">16 Dec, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">17 Dec, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-purple-100 border-purple-100 text-purple-500 dark:bg-purple-400/20 dark:border-transparent">New</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                            data-lucide="check" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">09</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Jonas Frederiksen</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Holiday</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">05</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">29 Nov, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">03 Dec, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                            data-lucide="check" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">10</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Nancy Reynolds</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Sick Leave</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Hospital</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 Oct, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 Oct, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i
                                            data-lucide="check" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col items-center mt-5 md:flex-row">
                <div class="mb-4 grow md:mb-0">
                    <p class="text-slate-500 dark:text-zink-200">Showing <b>10</b> of <b>17</b> Results</p>
                </div>
                <ul class="flex flex-wrap items-center gap-2 shrink-0">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i
                                class="size-4 mr-1 rtl:rotate-180" data-lucide="chevron-left"></i> Prev</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">Next
                            <i class="size-4 ml-1 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
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
                        <button type="submit"
                            class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes,
                            Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end delete modal-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
