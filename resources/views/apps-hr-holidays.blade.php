@extends('layouts.master')
@section('title')
    {{ __('Holidays') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Holidays" pagetitle="HR Management" />

    <div class="card" id="ordersTable">
        <div class="card-body">
            <div class="flex items-center gap-3 mb-4">
                <h6 class="text-15 grow">Holidays 2024</h6>
                <div class="shrink-0">
                    <a href="#!" data-modal-target="addHolidayModal" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                            data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add
                            Holiday</span></a>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">#</th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">Day</th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">Date</th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">Holiday
                                Name</th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">Type</th>
                            <th class="px-3.5 py-2.5 font-semibold border border-slate-200 dark:border-zink-500">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">1</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Monday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">15 Jan</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Makara Sankranti</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addHolidayModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">2</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Friday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">26 Jan</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Republic Day</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addHolidayModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">3</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Monday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">25 Mar</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Holi</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addHolidayModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">4</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Friday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">29 Mar</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Good Friday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addHolidayModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">5</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Sunday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">4 Aug</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Friendship Day</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Observance</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addHolidayModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">6</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Thursday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">15 Aug</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Independence Day</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addHolidayModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">7</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Sunday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">15 Sep</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Onam</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Restricted Holiday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addHolidayModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">8</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Thursday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">31 Oct</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Halloween</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Observance</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addHolidayModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">9</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Wednesday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">25 Dec</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Christmas</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Gazetted Holiday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addHolidayModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">10</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Tuesday</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">31 Dec</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">New Year</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">Observance</td>
                            <td class="px-3.5 py-2.5 border border-slate-200 dark:border-zink-500">
                                <div class="flex gap-2">
                                    <a href="#!" data-modal-target="addHolidayModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"><i
                                            data-lucide="pencil" class="size-4"></i></a>
                                    <a href="#!" data-modal-target="deleteModal"
                                        class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-red-500 hover:bg-red-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500 dark:hover:bg-red-500/20"><i
                                            data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col items-center mt-5 md:flex-row">
                <div class="mb-4 grow md:mb-0">
                    <p class="text-slate-500 dark:text-zink-200">Showing <b>5</b> of <b>8</b> Results</p>
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


    <div id="addHolidayModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Add Holiday</h5>
                <button data-modal-close="addHolidayModal"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="typeSelect" class="inline-block mb-2 text-base font-medium">Type</label>
                            <select
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                data-choices data-choices-search-false name="typeSelect" id="typeSelect">
                                <option value="Restricted Holiday">Restricted Holiday</option>
                                <option value="Gazetted Holiday">Gazetted Holiday</option>
                                <option value="Observance">Observance</option>
                                <option value="Season">Season</option>
                            </select>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="holidayInput" class="inline-block mb-2 text-base font-medium">Holiday Name</label>
                            <input type="text" id="holidayInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Holiday name">
                        </div>
                        <div class="xl:col-span-12">
                            <label for="holidayDateInput" class="inline-block mb-2 text-base font-medium">Date</label>
                            <input type="text" id="holidayDateInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y">
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addHolidayModal"
                            class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add
                            Holiday</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end add holiday-->

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
