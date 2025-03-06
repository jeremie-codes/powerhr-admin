@extends('layouts.master')
@section('title')
    {{ __('Main Attendance') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Main Attendance" pagetitle="HR Management" />

    <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-12">
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0">
                        <i data-lucide="users-2"></i></div>
                    <div class="overflow-hidden grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="43">0</span></h5>
                        <p class="truncate text-slate-500 dark:text-zink-200">Total Employee</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 text-red-500 bg-red-100 rounded-md text-15 dark:bg-red-500/20 shrink-0">
                        <i data-lucide="user-x-2"></i></div>
                    <div class="overflow-hidden grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="6">0</span></h5>
                        <p class="truncate text-slate-500 dark:text-zink-200">Absent Employee (Today)</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 text-green-500 bg-green-100 rounded-md text-15 dark:bg-green-500/20 shrink-0">
                        <i data-lucide="user-check-2"></i></div>
                    <div class="overflow-hidden grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="32">0</span></h5>
                        <p class="truncate text-slate-500 dark:text-zink-200">Present Employee (Today)</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">
                <div class="flex items-center gap-4 card-body">
                    <div
                        class="flex items-center justify-center size-12 rounded-md text-custom-500 bg-custom-100 text-15 dark:bg-custom-500/20 shrink-0">
                        <i data-lucide="briefcase"></i></div>
                    <div class="overflow-hidden grow">
                        <h5 class="mb-1 text-16"><span class="counter-value" data-target="22">0</span></h5>
                        <p class="truncate text-slate-500 dark:text-zink-200">Working Days (Current Month)</p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div>

    <div class="card">
        <div class="card-body">
            <div class="grid grid-cols-1 gap-5 mb-5 xl:grid-cols-12">
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
                    <div class="relative">
                        <i data-lucide="calendar-range"
                            class="absolute size-4 ltr:left-3 rtl:right-3 top-3 text-slate-500 dark:text-zink-200"></i>
                        <input type="text"
                            class="ltr:pl-10 rtl:pr-10 form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" readonly="readonly"
                            placeholder="Select Date">
                    </div>
                </div>
            </div><!--end grid-->
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead
                        class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Employee
                                Name</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">01</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">02</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">03</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">04</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">05</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 active">06
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">07</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">08</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">09</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">10</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">11</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">12</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">13</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">14</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">15</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">16</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">17</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">18</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">19</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">20</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">21</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">22</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">23</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">24</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">25</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">26</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">27</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">28</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">29</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">30</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Patricia Garcia</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Tonya Johnson</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Willie Torres</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Jose White</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Juliette Fecteau</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Jonas Frederiksen</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Kim Broberg</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Nancy Reynolds</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Thomas Hatfield</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    class="transition-all duration-200 ease-linear">Holly Kavanaugh</a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">-</td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><i data-lucide="x"
                                    class="size-4 text-red-500"></i></td>
                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!"
                                    data-modal-target="addOrderModal"
                                    class="text-green-500 transition-all duration-200 ease-linear hover:text-green-600"><i
                                        data-lucide="check" class="size-4"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end card-->



    <div id="addOrderModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-300/20">
                <h5 class="text-16">Attendance Info (05 June, 2023)</h5>
                <button data-modal-close="addOrderModal"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <div class="rounded-md bg-slate-100 dark:bg-zink-500/50">
                    <div class="p-3">
                        <p class="mb-1 text-slate-500 dark:text-zink-200">Check In Date & Time</p>
                        <h6>Monday, 05 June, 2023 <b>08:29 AM</b></h6>
                    </div>
                    <div class="p-5">
                        <div
                            class="flex items-center justify-center size-24 mx-auto bg-white rounded-full dark:bg-zink-600 text-16 outline outline-white dark:outline-zink-600 outline-offset-4">
                            <b>08:15</b> <small class="ltr:ml-1 rtl:mr-1">Hrs</small>
                        </div>
                    </div>
                    <div class="p-3">
                        <p class="mb-1 text-slate-500 dark:text-zink-200">Check Out Date & Time</p>
                        <h6>Monday, 05 June, 2023 <b>06:11 AM</b></h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end add user-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
