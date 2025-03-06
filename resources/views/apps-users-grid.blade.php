@extends('layouts.master')
@section('title')
    {{ __('Grid View') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Grid View" pagetitle="Users" />

    <form action="#!" class="mb-5">
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-12">
            <div class="relative lg:col-span-4 xl:col-span-3">
                <input type="text"
                    class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    placeholder="Search for name, email, phone number etc..." autocomplete="off">
                <i data-lucide="search"
                    class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
            </div><!--end col-->
            <div class="lg:col-span-3 lg:col-start-10">
                <div class="flex gap-2 lg:justify-end">
                    <button data-modal-target="addUserModal" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                            data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add
                            User</span></button>
                    <button
                        class="flex items-center justify-center size-[37.5px] p-0 text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10"><i
                            data-lucide="sliders-horizontal" class="size-4"></i></button>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </form>

    <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                        class="size-16 rounded-full">
                    <span
                        class="absolute size-3 bg-green-400 border-2 border-white rounded-full dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">Paula Keenan</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Admin</p>
                    <p class="text-slate-500 dark:text-zink-200">748 Luettgen Plain Suite South Winstonfort, NM</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown12" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown12">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    <img src="{{ URL::asset('build/images/users/avatar-2.png') }}" alt=""
                        class="size-16 rounded-full">
                    <span
                        class="absolute size-3 bg-green-400 border-2 border-white rounded-full dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">Marie Prohaska</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Subscriber</p>
                    <p class="text-slate-500 dark:text-zink-200">125 Ortiz Camp Suite 471 Rippinport, US</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown1" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown1">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt=""
                        class="size-16 rounded-full">
                    <span
                        class="absolute size-3 bg-green-400 border-2 border-white rounded-full dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">Jaqueline Hammes</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Editor</p>
                    <p class="text-slate-500 dark:text-zink-200">8716 Dell Manors New Ahmedmouth, WI</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown2" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown2">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    AB
                    <span
                        class="absolute size-3 bg-green-400 border-2 border-white rounded-full dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">Angus Bergstrom</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Developer</p>
                    <p class="text-slate-500 dark:text-zink-200">617 Powlowski Crossroad Apt. 716 New Victoria</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown3" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown3">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    <img src="{{ URL::asset('build/images/users/avatar-4.png') }}" alt=""
                        class="size-16 rounded-full">
                    <span
                        class="absolute size-3 bg-red-400 border-2 border-white rounded-full dark:border-zink-500 bottom-1 right-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">Aurore Maggio</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Subscriber</p>
                    <p class="text-slate-500 dark:text-zink-200">8751 Boyer Courts Suite 532 West Fletcherside</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown4" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown4">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    AB
                    <span
                        class="absolute size-3 bg-green-400 border-2 border-white rounded-full dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">Andrea Pesina</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Editor</p>
                    <p class="text-slate-500 dark:text-zink-200">32 Maidstone Road WELLSBOROUGH</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown5" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown5">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    <img src="{{ URL::asset('build/images/users/avatar-5.png') }}" alt=""
                        class="size-16 rounded-full">
                    <span
                        class="absolute size-3 bg-red-400 border-2 border-white rounded-full dark:border-zink-500 bottom-1 right-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">Daniel Miller</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Subscriber</p>
                    <p class="text-slate-500 dark:text-zink-200">431 Elk Rd Little Ticonderoga, NY</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown6" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown6">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    <img src="{{ URL::asset('build/images/users/avatar-6.png') }}" alt=""
                        class="size-16 rounded-full">
                    <span
                        class="absolute size-3 bg-green-400 border-2 border-white rounded-full dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">Ashley Wilson</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Subscriber</p>
                    <p class="text-slate-500 dark:text-zink-200">0816 Bradford Alley Lake Adamfort, ME</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown7" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown7">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                        class="size-16 rounded-full">
                    <span
                        class="absolute size-3 bg-green-400 border-2 border-white rounded-full dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">William Heineman</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Author</p>
                    <p class="text-slate-500 dark:text-zink-200">99614 Pollich Extension Apt. 938 South Alf, GA</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown8" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown8">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    <img src="{{ URL::asset('build/images/users/avatar-8.png') }}" alt=""
                        class="size-16 rounded-full">
                    <span
                        class="absolute size-3 bg-green-400 border-2 border-white rounded-full dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">Kara Miller</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Subscriber</p>
                    <p class="text-slate-500 dark:text-zink-200">755 Kody Plaza Apt. 138 East Reinholdberg, AR</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown9" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown9">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    MW
                    <span
                        class="absolute size-3 bg-green-400 border-2 border-white rounded-full dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">Mark Walton</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Author</p>
                    <p class="text-slate-500 dark:text-zink-200">895 Camylle Tunnel Lake Chasity, SC</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown10" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown10">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
        <div class="card">
            <div class="card-body">
                <div
                    class="relative flex items-center justify-center size-16 mx-auto text-lg rounded-full bg-slate-100 dark:bg-zink-600">
                    DB
                    <span
                        class="absolute size-3 bg-red-400 border-2 border-white rounded-full dark:border-zink-500 bottom-1 right-1"></span>
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-1 text-16"><a href="{{ url('pages-account') }}">David Biggs</a></h5>
                    <p class="mb-3 text-slate-500 dark:text-zink-200">@Subscriber</p>
                    <p class="text-slate-500 dark:text-zink-200">75, Deccan Gymkhana, Alwar</p>
                </div>
                <div class="flex gap-2 mt-5">
                    <a href="{{ url('apps-chat') }}"
                        class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow"><i
                            data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                            class="align-middle">Send Message</span></a>
                    <div class="relative dropdown">
                        <button type="button" id="userGridDropdown11" data-bs-toggle="dropdown"
                            class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="more-horizontal" class="size-4"></i></button>
                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userGridDropdown11">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="{{ url('pages-account') }}"><i data-lucide="eye"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Overview</span></a>
                            </li>
                            <li>
                                <a data-modal-target="addUserModal"
                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!"><i data-lucide="file-edit"
                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">Edit</span></a>
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
                </div>
            </div>
        </div><!--end col & card-->
    </div><!--end grid-->

    <div class="flex flex-col items-center mb-5 md:flex-row">
        <div class="mb-4 grow md:mb-0">
            <p class="text-slate-500 dark:text-zink-200">Showing <b>12</b> of <b>44</b> Results</p>
        </div>
        <ul class="flex flex-wrap items-center gap-2 shrink-0">
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i
                        class="size-4 mr-1 rtl:rotate-180" data-lucide="chevron-left"></i> Prev</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">2</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">3</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">4</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">5</a>
            </li>
            <li>
                <a href="#!"
                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">Next
                    <i class="size-4 ml-1 rtl:rotate-180" data-lucide="chevron-right"></i></a>
            </li>
        </ul>
    </div>



    <div id="addUserModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                <h5 class="text-16">Add User</h5>
                <button data-modal-close="addUserModal"
                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="mb-3">
                        <label for="userId" class="inline-block mb-2 text-base font-medium">User ID</label>
                        <input type="text" id="userId"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            disabled value="#TW1500004" required>
                    </div>
                    <div class="mb-3">
                        <label for="joiningDateInput" class="inline-block mb-2 text-base font-medium">Joining Date</label>
                        <input type="text" id="joiningDateInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y">
                    </div>
                    <div class="mb-3">
                        <label for="userNameInput" class="inline-block mb-2 text-base font-medium">Name</label>
                        <input type="text" id="userNameInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter name" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="inline-block mb-2 text-base font-medium">Email</label>
                        <input type="email" id="emailInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumberInput" class="inline-block mb-2 text-base font-medium">Phone Number</label>
                        <input type="text" id="phoneNumberInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="12345 67890" required>
                    </div>
                    <div class="mb-3">
                        <label for="statusSelect" class="inline-block mb-2 text-base font-medium">Status</label>
                        <select
                            class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            data-choices data-choices-search-false name="statusSelect" id="statusSelect">
                            <option value="">Select Status</option>
                            <option value="Verified">Verified</option>
                            <option value="Waiting">Waiting</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="locationInput" class="inline-block mb-2 text-base font-medium">Location</label>
                        <input type="text" id="locationInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Location" required>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addDocuments"
                            class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add
                            User</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end add user-->

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
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
