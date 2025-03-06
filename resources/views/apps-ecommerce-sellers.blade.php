@extends('layouts.master')
@section('title')
    {{ __('Sellers') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Sellers" pagetitle="Ecommerce" />

    <form action="#!" class="mb-5">
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-12">
            <div class="relative lg:col-span-3">
                <input type="text"
                    class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    placeholder="Search for ..." autocomplete="off">
                <i data-lucide="search"
                    class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
            </div><!--end col-->
            <div class="ltr:lg:text-right rtl:lg:text-left lg:col-span-3 lg:col-start-10">
                <button data-modal-target="addSellerModal" type="button"
                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                        data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add
                        Seller</span></button>
            </div><!--end col-->
        </div><!--end grid-->
    </form>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-12 gap-x-5">
        <div class="2xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="grow">
                            <a href="#!" class="group/item toggle-button"><i data-lucide="heart"
                                    class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                        </div>
                        <div class="relative dropdown shrink-0">
                            <button id="sellersAction1" data-bs-toggle="dropdown"
                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                    data-lucide="more-horizontal" class="size-3"></i></button>
                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                aria-labelledby="sellersAction1">
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="eye" class="inline-block size-3 mr-1"></i> <span
                                            class="align-middle">Overview</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="addSellerModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="file-edit" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Edit</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="deleteModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i> <span
                                            class="align-middle">Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-center size-16 mx-auto rounded-full bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                        <img src="{{ URL::asset('build/images/brand/adwords.png') }}" alt=""
                            class="h-10 rounded-full">
                    </div>

                    <div class="mt-4 mb-6 text-center">
                        <h6 class="text-16"><a href="#!">Themesdesign</a></h6>
                        <p class="text-slate-500 dark:text-zink-200">Paula Keenan</p>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">4.5k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Sales</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">310</h6>
                            <p class="text-slate-500 dark:text-zink-200">Product</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">$235.3k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end card-->
        </div><!--end col-->
        <div class="2xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="grow">
                            <a href="#!" class="group/item toggle-button active"><i data-lucide="heart"
                                    class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                        </div>
                        <div class="relative dropdown shrink-0">
                            <button id="sellersAction2" data-bs-toggle="dropdown"
                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                    data-lucide="more-horizontal" class="size-3"></i></button>
                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                aria-labelledby="sellersAction2">
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="eye" class="inline-block size-3 mr-1"></i> <span
                                            class="align-middle">Overview</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="addSellerModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="file-edit" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Edit</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="deleteModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-center size-16 mx-auto rounded-full bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                        <img src="{{ URL::asset('build/images/brand/app-store.png') }}" alt=""
                            class="h-10 rounded-full">
                    </div>

                    <div class="mt-4 mb-6 text-center">
                        <h6 class="text-16"><a href="#!">Nazox Fashion</a></h6>
                        <p class="text-slate-500 dark:text-zink-200">Kara Miller</p>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">2.3k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Sales</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">67</h6>
                            <p class="text-slate-500 dark:text-zink-200">Product</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">$152.8k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end card-->
        </div><!--end col-->
        <div class="2xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="grow">
                            <a href="#!" class="group/item toggle-button"><i data-lucide="heart"
                                    class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                        </div>
                        <div class="relative dropdown shrink-0">
                            <button id="sellersAction3" data-bs-toggle="dropdown"
                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                    data-lucide="more-horizontal" class="size-3"></i></button>
                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                aria-labelledby="sellersAction3">
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="eye" class="inline-block size-3 mr-1"></i> <span
                                            class="align-middle">Overview</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="addSellerModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="file-edit" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Edit</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="deleteModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-center size-16 mx-auto rounded-full bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                        <img src="{{ URL::asset('build/images/brand/gmail.png') }}" alt=""
                            class="h-10 rounded-full">
                    </div>

                    <div class="mt-4 mb-6 text-center">
                        <h6 class="text-16"><a href="#!">4xM Infotech</a></h6>
                        <p class="text-slate-500 dark:text-zink-200">Daniel Miller</p>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">7.1k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Sales</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">138</h6>
                            <p class="text-slate-500 dark:text-zink-200">Product</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">$465.9k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end card-->
        </div><!--end col-->
        <div class="2xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="grow">
                            <a href="#!" class="group/item toggle-button active"><i data-lucide="heart"
                                    class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                        </div>
                        <div class="relative dropdown shrink-0">
                            <button id="sellersAction4" data-bs-toggle="dropdown"
                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                    data-lucide="more-horizontal" class="size-3"></i></button>
                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                aria-labelledby="sellersAction4">
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="eye" class="inline-block size-3 mr-1"></i> <span
                                            class="align-middle">Overview</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="addSellerModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="file-edit" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Edit</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="deleteModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-center size-16 mx-auto rounded-full bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                        <img src="{{ URL::asset('build/images/brand/android.png') }}" alt=""
                            class="h-10 rounded-full">
                    </div>

                    <div class="mt-4 mb-6 text-center">
                        <h6 class="text-16"><a href="#!">Extra Fashion</a></h6>
                        <p class="text-slate-500 dark:text-zink-200">Mark Walton</p>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">1.9k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Sales</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">49</h6>
                            <p class="text-slate-500 dark:text-zink-200">Product</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">$198.3k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end card-->
        </div><!--end col-->
        <div class="2xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="grow">
                            <a href="#!" class="group/item toggle-button active"><i data-lucide="heart"
                                    class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                        </div>
                        <div class="relative dropdown shrink-0">
                            <button id="sellersAction5" data-bs-toggle="dropdown"
                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                    data-lucide="more-horizontal" class="size-3"></i></button>
                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                aria-labelledby="sellersAction5">
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="eye" class="inline-block size-3 mr-1"></i> <span
                                            class="align-middle">Overview</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="addSellerModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="file-edit" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Edit</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="deleteModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-center size-16 mx-auto rounded-full bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                        <img src="{{ URL::asset('build/images/brand/figma.png') }}" alt=""
                            class="h-10 rounded-full">
                    </div>

                    <div class="mt-4 mb-6 text-center">
                        <h6 class="text-16"><a href="#!">Nesta Technologies</a></h6>
                        <p class="text-slate-500 dark:text-zink-200">William Heineman</p>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">4.8k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Sales</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">172</h6>
                            <p class="text-slate-500 dark:text-zink-200">Product</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">$746.1k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end card-->
        </div><!--end col-->
        <div class="2xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="grow">
                            <a href="#!" class="group/item toggle-button"><i data-lucide="heart"
                                    class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                        </div>
                        <div class="relative dropdown shrink-0">
                            <button id="sellersAction6" data-bs-toggle="dropdown"
                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                    data-lucide="more-horizontal" class="size-3"></i></button>
                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                aria-labelledby="sellersAction6">
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="eye" class="inline-block size-3 mr-1"></i> <span
                                            class="align-middle">Overview</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="addSellerModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="file-edit" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Edit</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="deleteModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-center size-16 mx-auto rounded-full bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                        <img src="{{ URL::asset('build/images/brand/meta.png') }}" alt=""
                            class="h-10 rounded-full">
                    </div>

                    <div class="mt-4 mb-6 text-center">
                        <h6 class="text-16"><a href="#!">Digitech Galaxy</a></h6>
                        <p class="text-slate-500 dark:text-zink-200">David Biggs</p>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">9.2k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Sales</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">674</h6>
                            <p class="text-slate-500 dark:text-zink-200">Product</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">$14.4m</h6>
                            <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end card-->
        </div><!--end col-->
        <div class="2xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="grow">
                            <a href="#!" class="group/item toggle-button"><i data-lucide="heart"
                                    class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                        </div>
                        <div class="relative dropdown shrink-0">
                            <button id="sellersAction7" data-bs-toggle="dropdown"
                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                    data-lucide="more-horizontal" class="size-3"></i></button>
                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                aria-labelledby="sellersAction7">
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="eye" class="inline-block size-3 mr-1"></i> <span
                                            class="align-middle">Overview</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="addSellerModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="file-edit" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Edit</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="deleteModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-center size-16 mx-auto rounded-full bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                        <img src="{{ URL::asset('build/images/brand/search.png') }}" alt=""
                            class="h-10 rounded-full">
                    </div>

                    <div class="mt-4 mb-6 text-center">
                        <h6 class="text-16"><a href="#!">Zoetic Fashion</a></h6>
                        <p class="text-slate-500 dark:text-zink-200">Jaqueline Hammes</p>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">1.8k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Sales</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">112</h6>
                            <p class="text-slate-500 dark:text-zink-200">Product</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">$132.4k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end card-->
        </div><!--end col-->
        <div class="2xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="grow">
                            <a href="#!" class="group/item toggle-button"><i data-lucide="heart"
                                    class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                        </div>
                        <div class="relative dropdown shrink-0">
                            <button id="sellersAction8" data-bs-toggle="dropdown"
                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                    data-lucide="more-horizontal" class="size-3"></i></button>
                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                aria-labelledby="sellersAction8">
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="eye" class="inline-block size-3 mr-1"></i> <span
                                            class="align-middle">Overview</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="addSellerModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="file-edit" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Edit</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="deleteModal"
                                        class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                        href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i>
                                        <span class="align-middle">Delete</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex items-center justify-center size-16 mx-auto rounded-full bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                        <img src="{{ URL::asset('build/images/brand/telegram.png') }}" alt=""
                            class="h-10 rounded-full">
                    </div>

                    <div class="mt-4 mb-6 text-center">
                        <h6 class="text-16"><a href="#!">Force Medicines</a></h6>
                        <p class="text-slate-500 dark:text-zink-200">Ashley Uilson</p>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">4.1k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Sales</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">243</h6>
                            <p class="text-slate-500 dark:text-zink-200">Product</p>
                        </div><!--end col-->
                        <div class="p-2 2xl:col-span-4">
                            <h6 class="mb-1">$861.7k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end card-->
        </div><!--end col-->
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


    <div id="addSellerModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Add Seller</h5>
                <button data-modal-close="addSellerModal"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="mb-3">
                        <label for="companyLogo" class="inline-block mb-2 text-base font-medium">Company Logo</label>
                        <div
                            class="flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-200 dropzone2 dark:bg-zink-600 dark:border-zink-500">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                <div class="mb-3">
                                    <i data-lucide="upload-cloud"
                                        class="block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                </div>

                                <h5 class="mb-0 font-normal text-slate-500 dark:text-zink-200 text-15">Drag and drop your
                                    logo or <a href="#!">browse</a> your logo</h5>
                            </div>
                        </div>

                        <ul class="flex flex-wrap mb-0 gap-x-5" id="dropzone-preview2">
                            <li class="mt-5" id="dropzone-preview-list2">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded border-slate-200 dark:border-zink-500">
                                    <div class="p-2 text-center">
                                        <div>
                                            <div class="p-2 mx-auto rounded-md size-14 bg-slate-100 dark:bg-zink-500">
                                                <img data-dz-thumbnail class="block w-full h-full rounded-md"
                                                    src="assets/images/new-document.png" alt="Dropzone-Image">
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="mb-1 text-15" data-dz-name>&nbsp;</h5>
                                            <p class="mb-0 text-slate-500 dark:text-zink-200" data-dz-size></p>
                                            <strong class="error text-danger" data-dz-errormessage></strong>
                                        </div>
                                        <div class="mt-2">
                                            <button data-dz-remove
                                                class="px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <label for="companyNameInput" class="inline-block mb-2 text-base font-medium">Company Name</label>
                        <input type="text" id="companyNameInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Seller name" required>
                    </div>
                    <div class="mb-3">
                        <label for="ownerName" class="inline-block mb-2 text-base font-medium">Owner Name</label>
                        <input type="text" id="ownerName"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Owner name" required>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addSellerModal"
                            class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add
                            Seller</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end add Seller-->

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
    <!-- dropzone -->
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/apps-ecommerce-sellers.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
