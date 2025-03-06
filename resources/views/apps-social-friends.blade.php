@extends('layouts.master')
@section('title')
    {{ __('Friends') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Friends" pagetitle="Social Media" />

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
                        <li class="group grow active">
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
                        <li class="group grow">
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
        <div class="xl:col-span-9" id="friendList">
            <div class="flex items-center gap-3">
                <h6 class="text-15 grow">Followers (254)</h6>
                <div class="shrink-0">
                    <div class="relative dropdown sortble-dropdown">
                        <a href="#!" class="inline-block py-3 dropdown-toggle" id="dropdownMenuLink"
                            data-bs-toggle="dropdown"><span class="dropdown-title">Following</span> <i
                                data-lucide="chevron-down" class="inline-block size-4 ml-1"></i></a>

                        <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[9rem] dark:bg-zink-600"
                            aria-labelledby="dropdownMenuButton">
                            <li>
                                <a data-sort="friend_name"
                                    class="block dropdown-item px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Name</a>
                            </li>
                            <li>
                                <a data-sort="username"
                                    class="block dropdown-item px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Username</a>
                            </li>
                            <li>
                                <a data-sort="date"
                                    class="block dropdown-item px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Date</a>
                            </li>
                            <li>
                                <a data-sort="status"
                                    class="block dropdown-item px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Status</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-separate table-custom border-spacing-y-2 whitespace-nowrap">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <th class="px-3.5 py-2.5 font-semibold sort" data-sort="friend_name">Friend Name</th>
                            <th class="px-3.5 py-2.5 font-semibold sort" data-sort="username">Username</th>
                            <th class="px-3.5 py-2.5 font-semibold sort" data-sort="date">Joining Date</th>
                            <th class="px-3.5 py-2.5 font-semibold sort" data-sort="status">Status</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 friend_name">Aubrey Beer</td>
                            <td class="px-3.5 py-2.5"><a href="#!" class="text-custom-500 username">@aubrey_beer</a>
                            </td>
                            <td class="px-3.5 py-2.5 date">24 June, 2023</td>
                            <td class="px-3.5 py-2.5">
                                <button type="button"
                                    class="bg-white border-dashed group/item status toggle-button active text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20 px-2 py-1.5 text-xs">
                                    <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                            class="inline-block size-3 mr-1"></i> Follow</span>
                                    <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                            class="inline-block size-3 mr-1"></i> Unfollow</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 friend_name">Clark Kris</td>
                            <td class="px-3.5 py-2.5"><a href="#!" class="text-custom-500 username">@kris120</a>
                            </td>
                            <td class="px-3.5 py-2.5 date">10 Aug, 2023</td>
                            <td class="px-3.5 py-2.5">
                                <button type="button"
                                    class="bg-white border-dashed group/item toggle-button status text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20 px-2 py-1.5 text-xs">
                                    <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                            class="inline-block size-3 mr-1"></i> Follow</span>
                                    <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                            class="inline-block size-3 mr-1"></i> Unfollow</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 friend_name">Lavern Ratke</td>
                            <td class="px-3.5 py-2.5"><a href="#!" class="text-custom-500 username">@lavern_r</a>
                            </td>
                            <td class="px-3.5 py-2.5 date">19 Sept, 2023</td>
                            <td class="px-3.5 py-2.5">
                                <button type="button"
                                    class="bg-white border-dashed group/item toggle-button status text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20 px-2 py-1.5 text-xs">
                                    <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                            class="inline-block size-3 mr-1"></i> Follow</span>
                                    <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                            class="inline-block size-3 mr-1"></i> Unfollow</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 friend_name">Eldora Stiedemann</td>
                            <td class="px-3.5 py-2.5"><a href="#!"
                                    class="text-custom-500 username">@e_stiedemann</a></td>
                            <td class="px-3.5 py-2.5 date">08 Oct, 2023</td>
                            <td class="px-3.5 py-2.5">
                                <button type="button"
                                    class="bg-white border-dashed group/item toggle-button status active text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20 px-2 py-1.5 text-xs">
                                    <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                            class="inline-block size-3 mr-1"></i> Follow</span>
                                    <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                            class="inline-block size-3 mr-1"></i> Unfollow</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 friend_name">Jordane Dare</td>
                            <td class="px-3.5 py-2.5"><a href="#!"
                                    class="text-custom-500 username">@jordane_dare</a></td>
                            <td class="px-3.5 py-2.5 date">07 Dec, 2023</td>
                            <td class="px-3.5 py-2.5">
                                <button type="button"
                                    class="bg-white border-dashed group/item toggle-button status active text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20 px-2 py-1.5 text-xs">
                                    <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                            class="inline-block size-3 mr-1"></i> Follow</span>
                                    <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                            class="inline-block size-3 mr-1"></i> Unfollow</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 friend_name">Ottilie Schmitt</td>
                            <td class="px-3.5 py-2.5"><a href="#!" class="text-custom-500 username">@ottilie</a>
                            </td>
                            <td class="px-3.5 py-2.5 date">01 Nov, 2023</td>
                            <td class="px-3.5 py-2.5">
                                <button type="button"
                                    class="bg-white border-dashed group/item toggle-button status text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20 px-2 py-1.5 text-xs">
                                    <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                            class="inline-block size-3 mr-1"></i> Follow</span>
                                    <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                            class="inline-block size-3 mr-1"></i> Unfollow</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 friend_name">Darron Shields</td>
                            <td class="px-3.5 py-2.5"><a href="#!" class="text-custom-500 username">@dr_darron</a>
                            </td>
                            <td class="px-3.5 py-2.5 date">11 Nov, 2023</td>
                            <td class="px-3.5 py-2.5">
                                <button type="button"
                                    class="bg-white border-dashed group/item toggle-button status active text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20 px-2 py-1.5 text-xs">
                                    <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                            class="inline-block size-3 mr-1"></i> Follow</span>
                                    <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                            class="inline-block size-3 mr-1"></i> Unfollow</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 friend_name">Shanny Homenick</td>
                            <td class="px-3.5 py-2.5"><a href="#!" class="text-custom-500 username">@shanny_h</a>
                            </td>
                            <td class="px-3.5 py-2.5 date">16 July, 2023</td>
                            <td class="px-3.5 py-2.5">
                                <button type="button"
                                    class="bg-white border-dashed group/item toggle-button status text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20 px-2 py-1.5 text-xs">
                                    <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                            class="inline-block size-3 mr-1"></i> Follow</span>
                                    <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                            class="inline-block size-3 mr-1"></i> Unfollow</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 friend_name">Vaughn Leffler</td>
                            <td class="px-3.5 py-2.5"><a href="#!" class="text-custom-500 username">@vaughn_902</a>
                            </td>
                            <td class="px-3.5 py-2.5 date">09 Jan, 2023</td>
                            <td class="px-3.5 py-2.5">
                                <button type="button"
                                    class="bg-white border-dashed group/item toggle-button status text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20 px-2 py-1.5 text-xs">
                                    <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                            class="inline-block size-3 mr-1"></i> Follow</span>
                                    <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                            class="inline-block size-3 mr-1"></i> Unfollow</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="relative bg-white rounded-md dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 friend_name">Theodora Jones</td>
                            <td class="px-3.5 py-2.5"><a href="#!" class="text-custom-500 username">@jones</a></td>
                            <td class="px-3.5 py-2.5 date">02 Feb, 2023</td>
                            <td class="px-3.5 py-2.5">
                                <button type="button"
                                    class="bg-white border-dashed group/item toggle-button status active text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20 px-2 py-1.5 text-xs">
                                    <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                            class="inline-block size-3 mr-1"></i> Follow</span>
                                    <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                            class="inline-block size-3 mr-1"></i> Unfollow</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col items-center mt-4 mb-5 md:flex-row">
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
        </div><!--end-->
    </div><!--end-->
@endsection
@push('scripts')
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>

    <!--social friend init-->
    <script src="{{ URL::asset('build/js/pages/apps-social-friend.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
