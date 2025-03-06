@extends('layouts.master')
@section('title')
    {{ __('Marketplace') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Marketplace" pagetitle="Social Media" />

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
        <div class="xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="rounded-full bg-slate-100 shrink-0 dark:bg-zink-600">
                            <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                class="rounded-full h-14">
                        </div>
                        <div class="grow">
                            <h6 class="mb-1 text-15">Paula Keenan <i data-lucide="badge-check"
                                    class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i></h6>
                            <p class="text-slate-500 dark:text-zink-200">@paulak145</p>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 text-center divide-y sm:divide-y-0 sm:divide-x sm:grid-cols-3 divide-slate-200 dark:divide-zink-500 divide-dashed rtl:divide-x-reverse">
                        <div class="py-3 sm:py-0 sm:px-3">
                            <h6>489</h6>
                            <p class="text-slate-500 dark:text-zink-200">Posts</p>
                        </div>
                        <div class="py-3 sm:py-0 sm:px-3">
                            <h6>4.6k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Follower</p>
                        </div>
                        <div class="py-3 sm:py-0 sm:px-3">
                            <h6>159</h6>
                            <p class="text-slate-500 dark:text-zink-200">Following</p>
                        </div>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <ul class="flex flex-col w-full gap-2 mb-4 text-sm font-medium shrink-0 nav-tabs">
                        <li class="group grow">
                            <a href="{{ url('dashboards-social-media') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="home" class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i>
                                <span class="align-middle">Feed</span></a>
                        </li>
                        <li class="group grow">
                            <a href="{{ url('apps-social-friends') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="user-2" class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i>
                                <span class="align-middle">Friends</span></a>
                        </li>
                        <li class="group grow">
                            <a href="{{ url('apps-social-event') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="calendar-days"
                                    class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">Event</span></a>
                        </li>
                        <li class="group grow">
                            <a href="{{ url('apps-social-video') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="clapperboard"
                                    class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">Watch Video</span></a>
                        </li>
                        <li class="group grow active">
                            <a href="{{ url('apps-social-marketplace') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="shopping-cart"
                                    class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">Marketplace</span></a>
                        </li>
                        <li class="group grow">
                            <a href="{{ url('pages-account-settings') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="settings" class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i>
                                <span class="align-middle">Settings</span></a>
                        </li>
                    </ul>
                    <p class="mb-4 text-slate-500 dark:text-zink-200">Suggestion Pages</p>
                    <ul class="flex flex-col gap-4">
                        <li>
                            <a href="#!" class="flex gap-3">
                                <img src="{{ URL::asset('build/images/brand/adwords.png') }}" alt="" class="h-5">
                                <h6>Harmonious Team</h6>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex gap-3">
                                <img src="{{ URL::asset('build/images/brand/twitter.png') }}" alt="" class="h-5">
                                <h6>Twitter</h6>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex gap-3">
                                <img src="{{ URL::asset('build/images/brand/meta.png') }}" alt="" class="h-5">
                                <h6>Design Stack</h6>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex gap-3">
                                <img src="{{ URL::asset('build/images/brand/figma.png') }}" alt="" class="h-5">
                                <h6>UI / UX Community</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Active Friends</h6>
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-2.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-4.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-5.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-6.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-8.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-9.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-10.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!"
                            class="relative flex items-center justify-center size-10 rounded-full bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                            5+
                        </a>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end-->
        <div class="xl:col-span-9" id="eventList">
            <div class="grid items-center grid-cols-1 gap-4 mb-4 xl:grid-cols-12">
                <div class="xl:col-span-3">
                    <h6 class="mb-0 text-15">Marketplace (+115)</h6>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row xl:col-span-4 xl:col-start-9">
                    <div class="relative grow">
                        <input type="text"
                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Search for ..." autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                    </div>
                    <button type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                            data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add
                            Products</span></button>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-12">
                <div
                    class="mb-0 bg-bottom bg-no-repeat card md:col-span-12 lg:col-span-8 xl:row-span-2 xl:col-span-6 bg-[url('../images/product/bg.png')]">
                    <div class="card-body">
                        <h1 class="mb-3 font-normal xl:w-80">Secure Discounts of up to 50% on any item</h1>
                        <button type="button"
                            class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10">
                            Shopping Now
                        </button>
                    </div>
                </div><!--end col-->
                <div class="relative mb-0 overflow-hidden card md:col-span-6 lg:col-span-4 xl:col-span-3 group/item">
                    <div class="!p-10 card-body">
                        <img src="{{ URL::asset('build/images/product/img-05.png') }}" alt=""
                            class="h-40 mx-auto">
                        <div
                            class="absolute flex gap-2 transition-all duration-200 ease-linear -translate-x-1/2 translate-y-1/2 opacity-0 bottom-1/3 group-hover/item:opacity-100 group-hover/item:bottom-1/2 left-1/2">
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-red-500 btn bg-white border-white shadow-md hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 active:text-white active:bg-red-600 active:border-red-600 dark:bg-zink-600 dark:border-zink-500 dark:hover:bg-red-600"><i
                                    data-lucide="shopping-cart" class="h-4"></i></button>
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-sky-500 btn bg-white border-white shadow-md hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600 dark:bg-zink-600 dark:border-zink-500 dark:hover:bg-sky-600"><i
                                    data-lucide="bookmark" class="h-4"></i></button>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="relative mb-0 overflow-hidden card md:col-span-6 lg:col-span-4 xl:col-span-3 group/item">
                    <div class="!p-10 card-body">
                        <img src="{{ URL::asset('build/images/product/img-02.png') }}" alt=""
                            class="h-40 mx-auto">
                        <div
                            class="absolute flex gap-2 transition-all duration-200 ease-linear -translate-x-1/2 translate-y-1/2 opacity-0 bottom-1/3 group-hover/item:opacity-100 group-hover/item:bottom-1/2 left-1/2">
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-red-500 btn bg-white border-white shadow-md hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 active:text-white active:bg-red-600 active:border-red-600 dark:bg-zink-600 dark:border-zink-500 dark:hover:bg-red-600"><i
                                    data-lucide="shopping-cart" class="h-4"></i></button>
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-sky-500 btn bg-white border-white shadow-md hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600 dark:bg-sky-600 dark:border-zink-500 dark:hover:bg-sky-600"><i
                                    data-lucide="bookmark" class="h-4"></i></button>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="relative mb-0 overflow-hidden card md:col-span-6 lg:col-span-4 xl:col-span-3 group/item">
                    <div class="!p-10 card-body">
                        <img src="{{ URL::asset('build/images/product/img-03.png') }}" alt=""
                            class="h-40 mx-auto">
                        <div
                            class="absolute flex gap-2 transition-all duration-200 ease-linear -translate-x-1/2 translate-y-1/2 opacity-0 bottom-1/3 group-hover/item:opacity-100 group-hover/item:bottom-1/2 left-1/2">
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-red-500 btn bg-white border-white shadow-md hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 active:text-white active:bg-red-600 active:border-red-600 dark:bg-zink-600 dark:border-zink-500 dark:hover:bg-red-600"><i
                                    data-lucide="shopping-cart" class="h-4"></i></button>
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-sky-500 btn bg-white border-white shadow-md hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600 dark:bg-sky-600 dark:border-zink-500 dark:hover:bg-sky-600"><i
                                    data-lucide="bookmark" class="h-4"></i></button>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="relative mb-0 overflow-hidden card md:col-span-6 lg:col-span-4 xl:col-span-3 group/item">
                    <div class="!p-10 card-body">
                        <img src="{{ URL::asset('build/images/product/img-04.png') }}" alt=""
                            class="h-40 mx-auto">
                        <div
                            class="absolute flex gap-2 transition-all duration-200 ease-linear -translate-x-1/2 translate-y-1/2 opacity-0 bottom-1/3 group-hover/item:opacity-100 group-hover/item:bottom-1/2 left-1/2">
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-red-500 btn bg-white border-white shadow-md hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 active:text-white active:bg-red-600 active:border-red-600 dark:bg-zink-600 dark:border-zink-500 dark:hover:bg-red-600"><i
                                    data-lucide="shopping-cart" class="h-4"></i></button>
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-sky-500 btn bg-white border-white shadow-md hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600 dark:bg-sky-600 dark:border-zink-500 dark:hover:bg-sky-600"><i
                                    data-lucide="bookmark" class="h-4"></i></button>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="relative mb-0 overflow-hidden card md:col-span-6 lg:col-span-4 xl:col-span-3 group/item">
                    <div class="!p-10 card-body">
                        <img src="{{ URL::asset('build/images/product/img-01.png') }}" alt=""
                            class="h-40 mx-auto">
                        <div
                            class="absolute flex gap-2 transition-all duration-200 ease-linear -translate-x-1/2 translate-y-1/2 opacity-0 bottom-1/3 group-hover/item:opacity-100 group-hover/item:bottom-1/2 left-1/2">
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-red-500 btn bg-white border-white shadow-md hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 active:text-white active:bg-red-600 active:border-red-600 dark:bg-zink-600 dark:border-zink-500 dark:hover:bg-red-600"><i
                                    data-lucide="shopping-cart" class="h-4"></i></button>
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-sky-500 btn bg-white border-white shadow-md hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600 dark:bg-sky-600 dark:border-zink-500 dark:hover:bg-sky-600"><i
                                    data-lucide="bookmark" class="h-4"></i></button>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="relative mb-0 overflow-hidden card md:col-span-6 lg:col-span-4 xl:col-span-3 group/item">
                    <div class="!p-10 card-body">
                        <img src="{{ URL::asset('build/images/product/img-06.png') }}" alt=""
                            class="h-40 mx-auto">
                        <div
                            class="absolute flex gap-2 transition-all duration-200 ease-linear -translate-x-1/2 translate-y-1/2 opacity-0 bottom-1/3 group-hover/item:opacity-100 group-hover/item:bottom-1/2 left-1/2">
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-red-500 btn bg-white border-white shadow-md hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 active:text-white active:bg-red-600 active:border-red-600 dark:bg-zink-600 dark:border-zink-500 dark:hover:bg-red-600"><i
                                    data-lucide="shopping-cart" class="h-4"></i></button>
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-sky-500 btn bg-white border-white shadow-md hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600 dark:bg-sky-600 dark:border-zink-500 dark:hover:bg-sky-600"><i
                                    data-lucide="bookmark" class="h-4"></i></button>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="relative mb-0 overflow-hidden card md:col-span-6 lg:col-span-4 xl:col-span-3 group/item">
                    <div class="!p-10 card-body">
                        <img src="{{ URL::asset('build/images/product/img-07.png') }}" alt=""
                            class="h-40 mx-auto">
                        <div
                            class="absolute flex gap-2 transition-all duration-200 ease-linear -translate-x-1/2 translate-y-1/2 opacity-0 bottom-1/3 group-hover/item:opacity-100 group-hover/item:bottom-1/2 left-1/2">
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-red-500 btn bg-white border-white shadow-md hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 active:text-white active:bg-red-600 active:border-red-600 dark:bg-zink-600 dark:border-zink-500 dark:hover:bg-red-600"><i
                                    data-lucide="shopping-cart" class="h-4"></i></button>
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-sky-500 btn bg-white border-white shadow-md hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600 dark:bg-sky-600 dark:border-zink-500 dark:hover:bg-sky-600"><i
                                    data-lucide="bookmark" class="h-4"></i></button>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="relative mb-0 overflow-hidden card md:col-span-6 lg:col-span-4 xl:col-span-3 group/item">
                    <div class="!p-10 card-body">
                        <img src="{{ URL::asset('build/images/product/img-08.png') }}" alt=""
                            class="h-40 mx-auto">
                        <div
                            class="absolute flex gap-2 transition-all duration-200 ease-linear -translate-x-1/2 translate-y-1/2 opacity-0 bottom-1/3 group-hover/item:opacity-100 group-hover/item:bottom-1/2 left-1/2">
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-red-500 btn bg-white border-white shadow-md hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 active:text-white active:bg-red-600 active:border-red-600 dark:bg-zink-600 dark:border-zink-500 dark:hover:bg-red-600"><i
                                    data-lucide="shopping-cart" class="h-4"></i></button>
                            <button type="button"
                                class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 rounded-full text-sky-500 btn bg-white border-white shadow-md hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600 dark:bg-sky-600 dark:border-zink-500 dark:hover:bg-sky-600"><i
                                    data-lucide="bookmark" class="h-4"></i></button>
                        </div>
                    </div>
                </div><!--end col-->
            </div>
            <div class="flex justify-center mt-5 mb-5">
                <button type="button"
                    class="flex items-center text-white transition-all duration-200 ease-linear disabled btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                    <svg class="size-4 ltr:mr-2 rtl:ml-2 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    Load More
                </button>
            </div>
        </div><!--end-->
    </div><!--end-->



    <div id="deleteModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-500">
            <div class="h-full px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteModal"
                        class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i
                            data-lucide="x" class="size-5"></i></button>
                </div>
                <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                    <div class="flex justify-center gap-2 mt-6">
                        <button type="reset" data-modal-close="deleteModal"
                            class="transition-all duration-200 ease-linear bg-white border-white text-slate-500 btn hover:text-slate-600 focus:text-slate-600 active:text-slate-600 dark:bg-zink-500 dark:border-zink-500">Cancel</button>
                        <button type="submit"
                            class="text-white transition-all duration-200 ease-linear bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20">Yes,
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
