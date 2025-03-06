@extends('layouts.master')
@section('title')
    {{ __('Dropdown') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Dropdown" pagetitle="UI Elements" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Basic Dropdown</h6>
                <div class="flex flex-wrap items-center gap-2">
                    <div class="relative dropdown">
                        <button type="button"
                            class="text-white dropdown-toggle btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                            id="dropdownMenuButton" data-bs-toggle="dropdown">Dropdown Button <i data-lucide="chevron-down"
                                class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></button>

                        <ul class="absolute z-50 hidden py-2 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Another action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Something else here</a>
                            </li>
                            <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Your Link</a>
                            </li>
                        </ul>
                    </div>

                    <div class="relative dropdown">
                        <a href="#!"
                            class="bg-white border-white dropdown-toggle text-custom-500 btn hover:text-custom-700 focus:text-custom-700 active:text-custom-700 dark:bg-zink-700 dark:border-zink-700"
                            id="dropdownMenuLink" data-bs-toggle="dropdown">Link Dropdown <i data-lucide="chevron-down"
                                class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></a>

                        <ul class="absolute z-50 hidden py-2 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Another action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Something else here</a>
                            </li>
                            <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Your Link</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Split Button Dropdowns</h6>
                <div class="flex flex-wrap items-center gap-2">
                    <div class="relative dropdown">
                        <div class="flex items-center">
                            <button type="button"
                                class="text-white ltr:rounded-r-none rtl:rounded-l-none btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                Dropdown Split
                            </button>
                            <button type="button" id="dropdownSplit1" data-bs-toggle="dropdown"
                                class="dropdown-toggle ltr:rounded-l-none rtl:rounded-r-none flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-600 border-custom-600 hover:text-white hover:bg-custom-700 hover:border-custom-700 focus:text-white focus:bg-custom-700 focus:border-custom-700 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-700 active:border-custom-700 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                    data-lucide="chevron-down" class="inline-block size-4"></i></button>
                        </div>
                        <ul class="absolute z-50 hidden py-2 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownSplit1">
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Another action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Something else here</a>
                            </li>
                            <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Your Link</a>
                            </li>
                        </ul>
                    </div>
                    <div class="relative dropdown">
                        <div class="flex items-center">
                            <button type="button" id="dropdownSplit2" data-bs-toggle="dropdown"
                                class="dropdown-toggle ltr:rounded-r-none rtl:rounded-l-none flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-600 border-custom-600 hover:text-white hover:bg-custom-700 hover:border-custom-700 focus:text-white focus:bg-custom-700 focus:border-custom-700 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-700 active:border-custom-700 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                    data-lucide="chevron-down" class="inline-block size-4"></i></button>
                            <button type="button"
                                class="text-white ltr:rounded-l-none rtl:rounded-r-none btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                Dropdown Split
                            </button>
                        </div>
                        <ul class="absolute z-50 hidden py-2 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownSplit2">
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Another action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Something else here</a>
                            </li>
                            <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Your Link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card xl:col-span-2">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Basic Dropdown</h6>
                <div class="flex flex-wrap items-center gap-2">
                    <div class="relative dropdown">
                        <button type="button"
                            class="text-white dropdown-toggle btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                            id="dropdownColor1" data-bs-toggle="dropdown">Custom Dropdown <i data-lucide="chevron-down"
                                class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></button>

                        <ul class="absolute z-50 hidden py-2 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownColor1">
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-custom-500 dropdown-item hover:bg-custom-50 hover:text-custom-600 focus:bg-custom-50 focus:text-custom-600 dark:text-custom-500 dark:hover:bg-custom-500/20 dark:hover:text-custom-500 dark:focus:bg-custom-500/20 dark:focus:text-custom-500"
                                    href="#!">Action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-custom-500 dropdown-item hover:bg-custom-50 hover:text-custom-600 focus:bg-custom-50 focus:text-custom-600 dark:text-custom-500 dark:hover:bg-custom-500/20 dark:hover:text-custom-500 dark:focus:bg-custom-500/20 dark:focus:text-custom-500"
                                    href="#!">Another action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-custom-500 dropdown-item hover:bg-custom-50 hover:text-custom-600 focus:bg-custom-50 focus:text-custom-600 dark:text-custom-500 dark:hover:bg-custom-500/20 dark:hover:text-custom-500 dark:focus:bg-custom-500/20 dark:focus:text-custom-500"
                                    href="#!">Something else here</a>
                            </li>
                            <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-custom-500 dropdown-item hover:bg-custom-50 hover:text-custom-600 focus:bg-custom-50 focus:text-custom-600 dark:text-custom-500 dark:hover:bg-custom-500/20 dark:hover:text-custom-500 dark:focus:bg-custom-500/20 dark:focus:text-custom-500"
                                    href="#!">Your Link</a>
                            </li>
                        </ul>
                    </div>

                    <div class="relative dropdown">
                        <button type="button"
                            class="text-white bg-green-500 border-green-500 dropdown-toggle btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/20"
                            id="dropdownColor2" data-bs-toggle="dropdown">Green Dropdown <i data-lucide="chevron-down"
                                class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></button>

                        <ul class="absolute z-50 hidden py-2 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownColor2">
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-green-500 dropdown-item hover:bg-green-50 hover:text-green-600 focus:bg-green-50 focus:text-green-600 dark:text-green-500 dark:hover:bg-green-500/20 dark:hover:text-green-500 dark:focus:bg-green-500/20 dark:focus:text-green-500"
                                    href="#!">Action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-green-500 dropdown-item hover:bg-green-50 hover:text-green-600 focus:bg-green-50 focus:text-green-600 dark:text-green-500 dark:hover:bg-green-500/20 dark:hover:text-green-500 dark:focus:bg-green-500/20 dark:focus:text-green-500"
                                    href="#!">Another action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-green-500 dropdown-item hover:bg-green-50 hover:text-green-600 focus:bg-green-50 focus:text-green-600 dark:text-green-500 dark:hover:bg-green-500/20 dark:hover:text-green-500 dark:focus:bg-green-500/20 dark:focus:text-green-500"
                                    href="#!">Something else here</a>
                            </li>
                            <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-green-500 dropdown-item hover:bg-green-50 hover:text-green-600 focus:bg-green-50 focus:text-green-600 dark:text-green-500 dark:hover:bg-green-500/20 dark:hover:text-green-500 dark:focus:bg-green-500/20 dark:focus:text-green-500"
                                    href="#!">Your Link</a>
                            </li>
                        </ul>
                    </div>

                    <div class="relative dropdown">
                        <button type="button"
                            class="text-white bg-orange-500 border-orange-500 dropdown-toggle btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-orange-600 focus:border-orange-600 focus:ring focus:ring-orange-100 active:text-white active:bg-orange-600 active:border-orange-600 active:ring active:ring-orange-100 dark:ring-orange-400/20"
                            id="dropdownColor3" data-bs-toggle="dropdown">Orange Dropdown <i data-lucide="chevron-down"
                                class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></button>

                        <ul class="absolute z-50 hidden py-2 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownColor3">
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-orange-500 dropdown-item hover:bg-orange-50 hover:text-orange-600 focus:bg-orange-50 focus:text-orange-600 dark:text-orange-500 dark:hover:bg-orange-500/20 dark:hover:text-orange-500 dark:focus:bg-orange-500/20 dark:focus:text-orange-500"
                                    href="#!">Action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-orange-500 dropdown-item hover:bg-orange-50 hover:text-orange-600 focus:bg-orange-50 focus:text-orange-600 dark:text-orange-500 dark:hover:bg-orange-500/20 dark:hover:text-orange-500 dark:focus:bg-orange-500/20 dark:focus:text-orange-500"
                                    href="#!">Another action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-orange-500 dropdown-item hover:bg-orange-50 hover:text-orange-600 focus:bg-orange-50 focus:text-orange-600 dark:text-orange-500 dark:hover:bg-orange-500/20 dark:hover:text-orange-500 dark:focus:bg-orange-500/20 dark:focus:text-orange-500"
                                    href="#!">Something else here</a>
                            </li>
                            <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-orange-500 dropdown-item hover:bg-orange-50 hover:text-orange-600 focus:bg-orange-50 focus:text-orange-600 dark:text-orange-500 dark:hover:bg-orange-500/20 dark:hover:text-orange-500 dark:focus:bg-orange-500/20 dark:focus:text-orange-500"
                                    href="#!">Your Link</a>
                            </li>
                        </ul>
                    </div>

                    <div class="relative dropdown">
                        <button type="button"
                            class="text-white bg-yellow-500 border-yellow-500 dropdown-toggle btn hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100 dark:ring-yellow-400/20"
                            id="dropdownColor4" data-bs-toggle="dropdown">Yellow Dropdown <i data-lucide="chevron-down"
                                class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></button>

                        <ul class="absolute z-50 hidden py-2 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownColor4">
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-yellow-500 dropdown-item hover:bg-yellow-50 hover:text-yellow-600 focus:bg-yellow-50 focus:text-yellow-600 dark:text-yellow-500 dark:hover:bg-yellow-500/20 dark:hover:text-yellow-500 dark:focus:bg-yellow-500/20 dark:focus:text-yellow-500"
                                    href="#!">Action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-yellow-500 dropdown-item hover:bg-yellow-50 hover:text-yellow-600 focus:bg-yellow-50 focus:text-yellow-600 dark:text-yellow-500 dark:hover:bg-yellow-500/20 dark:hover:text-yellow-500 dark:focus:bg-yellow-500/20 dark:focus:text-yellow-500"
                                    href="#!">Another action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-yellow-500 dropdown-item hover:bg-yellow-50 hover:text-yellow-600 focus:bg-yellow-50 focus:text-yellow-600 dark:text-yellow-500 dark:hover:bg-yellow-500/20 dark:hover:text-yellow-500 dark:focus:bg-yellow-500/20 dark:focus:text-yellow-500"
                                    href="#!">Something else here</a>
                            </li>
                            <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-yellow-500 dropdown-item hover:bg-yellow-50 hover:text-yellow-600 focus:bg-yellow-50 focus:text-yellow-600 dark:text-yellow-500 dark:hover:bg-yellow-500/20 dark:hover:text-yellow-500 dark:focus:bg-yellow-500/20 dark:focus:text-yellow-500"
                                    href="#!">Your Link</a>
                            </li>
                        </ul>
                    </div>

                    <div class="relative dropdown">
                        <button type="button"
                            class="text-white bg-red-500 border-red-500 dropdown-toggle btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20"
                            id="dropdownColor5" data-bs-toggle="dropdown">Red Dropdown <i data-lucide="chevron-down"
                                class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></button>

                        <ul class="absolute z-50 hidden py-2 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownColor5">
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-red-500 dropdown-item hover:bg-red-50 hover:text-red-600 focus:bg-red-50 focus:text-red-600 dark:text-red-500 dark:hover:bg-red-500/20 dark:hover:text-red-500 dark:focus:bg-red-500/20 dark:focus:text-red-500"
                                    href="#!">Action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-red-500 dropdown-item hover:bg-red-50 hover:text-red-600 focus:bg-red-50 focus:text-red-600 dark:text-red-500 dark:hover:bg-red-500/20 dark:hover:text-red-500 dark:focus:bg-red-500/20 dark:focus:text-red-500"
                                    href="#!">Another action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-red-500 dropdown-item hover:bg-red-50 hover:text-red-600 focus:bg-red-50 focus:text-red-600 dark:text-red-500 dark:hover:bg-red-500/20 dark:hover:text-red-500 dark:focus:bg-red-500/20 dark:focus:text-red-500"
                                    href="#!">Something else here</a>
                            </li>
                            <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-red-500 dropdown-item hover:bg-red-50 hover:text-red-600 focus:bg-red-50 focus:text-red-600 dark:text-red-500 dark:hover:bg-red-500/20 dark:hover:text-red-500 dark:focus:bg-red-500/20 dark:focus:text-red-500"
                                    href="#!">Your Link</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Dropdown Content</h6>
                <div class="flex flex-wrap items-center gap-2">
                    <div class="relative dropdown">
                        <button type="button"
                            class="text-white dropdown-toggle btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                            id="dropdownMenuheading" data-bs-toggle="dropdown">Heading Content <i
                                data-lucide="chevron-down" class="inline-block size-4 ltr:ml-1 rlt:mr-1"></i></button>

                        <ul class="absolute z-50 hidden py-2 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownMenuheading">
                            <li class="px-2 py-1 text-sm truncate text-slate-500 dark:text-zink-200">
                                Welcome to Tailwick
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Another action</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Something else here</a>
                            </li>
                            <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Your Link</a>
                            </li>
                        </ul>
                    </div>
                    <div class="relative dropdown">
                        <button type="button"
                            class="text-white dropdown-toggle btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                            id="dropdownMenuForm" data-bs-toggle="dropdown">Form Content <i data-lucide="chevron-down"
                                class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></button>

                        <ul class="absolute z-50 hidden p-5 mt-1 list-none bg-white rounded-md shadow-md ltr:text-left rtl:text-right dropdown-menu min-w-max dark:bg-zink-600"
                            aria-labelledby="dropdownMenuForm">
                            <form action="#!">
                                <div class="mb-3">
                                    <label for="inputText" class="inline-block mb-2 text-base font-medium">Email <span
                                            class="text-red-500">*</span></label>
                                    <input type="email" id="inputText"
                                        class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 dark:bg-zink-600 dark:border-zink-500 dark:placeholder:text-zink-300"
                                        placeholder="Enter email" required>
                                </div>
                                <div class="mb-4">
                                    <label for="inputText" class="inline-block mb-2 text-base font-medium">Password <span
                                            class="text-red-500">*</span></label>
                                    <input type="password" id="inputText"
                                        class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 dark:bg-zink-600 dark:border-zink-500 dark:placeholder:text-zink-300"
                                        placeholder="Password" required>
                                </div>
                                <div class="text-right">
                                    <button type="submit"
                                        class="py-1 text-xs px-1.5 text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Sign
                                        In <i data-lucide="move-right" class="inline-block size-3 ml-1"></i></button>
                                </div>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
