@extends('layouts.master')
@section('title')
    {{ __('Event') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Event" pagetitle="Social Media" />

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
        <div class="xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="rounded-full bg-slate-100 dark:bg-zink-600 shrink-0">
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
                        <li class="group grow active">
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
        <div class="xl:col-span-9" id="eventList">
            <div class="grid items-center grid-cols-1 gap-4 mb-4 xl:grid-cols-12">
                <div class="xl:col-span-3">
                    <h6 class="mb-0 text-15">Upcoming Events</h6>
                </div>
                <div class="flex gap-2 xl:col-span-4 xl:col-start-9">
                    <div class="relative grow">
                        <input type="text"
                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Search for ..." autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                    </div>
                    <button data-modal-target="eventModal" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                            data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add
                            Event</span></button>
                </div>
            </div>
            <div
                class="px-4 py-3 mb-4 text-sm text-green-500 border border-green-200 rounded-md bg-green-50 dark:bg-green-400/20 dark:border-green-500/50">
                <span class="font-bold">Join us for the upcoming event:</span> Community Clean-Up Day on October 15, 2023
                <a href="#!"
                    class="px-2.5 py-0.5 text-xs font-medium inline-block rounded border transition-all duration-200 ease-linear bg-green-100 border-transparent text-green-500 hover:bg-green-200 dark:bg-green-400/20 dark:hover:bg-green-400/30 dark:border-transparent ltr:ml-1 rtl:mr-1">Register
                    Now</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full border-separate table-custom border-spacing-y-2 whitespace-nowrap">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr
                            class="relative bg-white rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent dark:bg-zink-700">
                            <th class="px-3.5 py-2.5 font-semibold sort" data-sort="event_name">Event Name</th>
                            <th class="px-3.5 py-2.5 font-semibold sort" data-sort="start_date">Start Date</th>
                            <th class="px-3.5 py-2.5 font-semibold sort" data-sort="end_date">End Date</th>
                            <th class="px-3.5 py-2.5 font-semibold sort" data-sort="number">Number Registered</th>
                            <th class="px-3.5 py-2.5 font-semibold sort" data-sort="total">Total</th>
                            <th class="px-3.5 py-2.5 font-semibold sort" data-sort="status">Status</th>
                            <th class="px-3.5 py-2.5 font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr
                            class="relative bg-white rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 event_name">Business Conference</td>
                            <td class="px-3.5 py-2.5 start_date">03 June, 2023</td>
                            <td class="px-3.5 py-2.5 end_date">19 June, 2023</td>
                            <td class="px-3.5 py-2.5 number">231</td>
                            <td class="px-3.5 py-2.5 total">1,000</td>
                            <td class="px-3.5 py-2.5"><span
                                    class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20 status">Ongoing</span>
                            </td>
                            <td class="px-3.5 py-2.5">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                        id="eventAction1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                            class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                        aria-labelledby="eventAction1">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                    class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="eventModal"
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
                            </td>
                        </tr>
                        <tr
                            class="relative bg-white rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 event_name">Graduation Ceremony</td>
                            <td class="px-3.5 py-2.5 start_date">01 Jan, 2023</td>
                            <td class="px-3.5 py-2.5 end_date">01 Jan, 2023</td>
                            <td class="px-3.5 py-2.5 number">0</td>
                            <td class="px-3.5 py-2.5 total">1,500</td>
                            <td class="px-3.5 py-2.5"><span
                                    class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-custom-100 border-custom-200 text-custom-500 dark:bg-custom-500/20 dark:border-custom-500/20 status">Draft</span>
                            </td>
                            <td class="px-3.5 py-2.5">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                        id="eventAction2" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                            class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                        aria-labelledby="eventAction2">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                    class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="eventModal"
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
                            </td>
                        </tr>
                        <tr
                            class="relative bg-white rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 event_name">Cultural Festival</td>
                            <td class="px-3.5 py-2.5 start_date">05 Aug, 2023</td>
                            <td class="px-3.5 py-2.5 end_date">10 Aug, 2023</td>
                            <td class="px-3.5 py-2.5 number">19,121</td>
                            <td class="px-3.5 py-2.5 total">20,000</td>
                            <td class="px-3.5 py-2.5"><span
                                    class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-red-100 border-red-200 text-red-500 dark:bg-red-500/20 dark:border-red-500/20 status">Closed</span>
                            </td>
                            <td class="px-3.5 py-2.5">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                        id="eventAction3" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                            class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                        aria-labelledby="eventAction3">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                    class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="eventModal"
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
                            </td>
                        </tr>
                        <tr
                            class="relative bg-white rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 event_name">Award Ceremony</td>
                            <td class="px-3.5 py-2.5 start_date">11 Nov, 2023</td>
                            <td class="px-3.5 py-2.5 end_date">11 Nov, 2023</td>
                            <td class="px-3.5 py-2.5 number">748</td>
                            <td class="px-3.5 py-2.5 total">1,100</td>
                            <td class="px-3.5 py-2.5"><span
                                    class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20 status">Ongoing</span>
                            </td>
                            <td class="px-3.5 py-2.5">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                        id="eventAction4" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                            class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                        aria-labelledby="eventAction4">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                    class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="eventModal"
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
                            </td>
                        </tr>
                        <tr
                            class="relative bg-white rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 event_name">Sports Game</td>
                            <td class="px-3.5 py-2.5 start_date">01 Dec, 2023</td>
                            <td class="px-3.5 py-2.5 end_date">07 Dec, 2023</td>
                            <td class="px-3.5 py-2.5 number">24,130</td>
                            <td class="px-3.5 py-2.5 total">30,000</td>
                            <td class="px-3.5 py-2.5"><span
                                    class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20 status">Ongoing</span>
                            </td>
                            <td class="px-3.5 py-2.5">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                        id="eventAction5" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                            class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                        aria-labelledby="eventAction5">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                    class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="eventModal"
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
                            </td>
                        </tr>
                        <tr
                            class="relative bg-white rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 event_name">Theater Performance</td>
                            <td class="px-3.5 py-2.5 start_date">18 Feb, 2024</td>
                            <td class="px-3.5 py-2.5 end_date">18 Feb, 2024</td>
                            <td class="px-3.5 py-2.5 number">0</td>
                            <td class="px-3.5 py-2.5 total">800</td>
                            <td class="px-3.5 py-2.5"><span
                                    class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-custom-100 border-custom-200 text-custom-500 dark:bg-custom-500/20 dark:border-custom-500/20 status">Draft</span>
                            </td>
                            <td class="px-3.5 py-2.5">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                        id="eventAction6" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                            class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                        aria-labelledby="eventAction6">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                    class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="eventModal"
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
                            </td>
                        </tr>
                        <tr
                            class="relative bg-white rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 event_name">Community Clean-Up Day</td>
                            <td class="px-3.5 py-2.5 start_date">15 Oct, 2023</td>
                            <td class="px-3.5 py-2.5 end_date">15 Oct, 2023</td>
                            <td class="px-3.5 py-2.5 number">1,142</td>
                            <td class="px-3.5 py-2.5 total">1200</td>
                            <td class="px-3.5 py-2.5"><span
                                    class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-red-100 border-red-200 text-red-500 dark:bg-red-500/20 dark:border-red-500/20 status">Closed</span>
                            </td>
                            <td class="px-3.5 py-2.5">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                        id="eventAction6" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                            class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                        aria-labelledby="eventAction6">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                    class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="eventModal"
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
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-center mt-3 mb-5">
                <button type="button"
                    class="flex items-center text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
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



    <div id="eventModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Create a Event</h5>
                <button data-modal-close="eventModal"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="mb-4">
                        <label for="eventTitle" class="inline-block mb-2 text-base font-medium">Title</label>
                        <input type="text" id="eventTitle"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Event title">
                    </div>
                    <div class="mb-4">
                        <label for="eventDateInput" class="inline-block mb-2 text-base font-medium">Event Date</label>
                        <input type="text"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input"
                            id="eventDateInput" data-provider="flatpickr" data-date-format="d M, Y" readonly="readonly"
                            placeholder="Select Date">
                    </div>
                    <div class="mb-4">
                        <label for="eventTimeInput" class="inline-block mb-2 text-base font-medium">Event Date</label>
                        <input type="text"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input"
                            id="eventTimeInput" data-provider="timepickr" data-time-basic="true"
                            placeholder="Select Time">
                    </div>
                    <div class="mb-4">
                        <label for="totalSeat" class="inline-block mb-2 text-base font-medium">Total Seat</label>
                        <input
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            id="totalSeat" type="number" placeholder="0">
                    </div>
                    <div class="mb-4">
                        <label for="statusSelect" class="inline-block mb-2 text-base font-medium">Status</label>
                        <select
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            id="statusSelect" name="statusSelect" data-choices data-choices-search-false>
                            <option value="Ongoing">Ongoing</option>
                            <option value="Draft">Draft</option>
                            <option value="Closed">Closed</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="submit"
                            class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Create
                            Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end create modal-->

    <div id="deleteModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
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
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>

    <!--social event init-->
    <script src="{{ URL::asset('build/js/pages/apps-social-event.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
