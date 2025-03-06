@extends('layouts.master')
@section('title')
    {{ __('Watch Video') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Watch Video" pagetitle="Social Media" />

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
                        <li class="group grow">
                            <a href="{{ url('apps-social-event') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="calendar-days"
                                    class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">Event</span></a>
                        </li>
                        <li class="group grow active">
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
        <div class="xl:col-span-9">
            <div class="grid items-center grid-cols-1 gap-4 mb-4 xl:grid-cols-12">
                <div class="xl:col-span-3">
                    <h6 class="mb-0 text-15">Watch Video</h6>
                </div>
                <div class="flex gap-2 xl:col-span-4 xl:col-start-9">
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
                            Video</span></button>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 mb-5 md:grid-cols-12">
                <div class="md:col-span-12 xl:row-span-6 xl:col-span-8">
                    <div class="relative h-full bg-white rounded-md dark:bg-zink-600">
                        <h3 class="absolute inset-0 flex items-center justify-center">Welcome to <span
                                class="text-sky-500">Tailwick</span> 🤩</h3>
                        <iframe name="iframe_a" class="relative w-full h-full rounded-md aspect-video"
                            title="Iframe Example"></iframe>
                    </div>
                </div>
                <div class="md:col-span-6 xl:row-span-3 xl:col-span-4">
                    <a href="https://www.youtube.com/embed/qYgogv4R8zg?si=_YxUDmc2fDgHyPae" target="iframe_a"
                        class="block !mb-0 card relative">
                        <div class="card-body">
                            <div
                                class="absolute flex items-center justify-center size-12 -translate-x-1/2 rounded-full bg-white/70 top-1/2 left-1/2">
                                <i data-lucide="play-square" class="text-red-500"></i>
                            </div>
                            <h6 class="mb-3 truncate text-15">Setting Up Tailwind CSS</h6>
                            <img src="https://i.ytimg.com/vi/qYgogv4R8zg/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBcI9Cw0yBtGv_ashbS-ogqh1OGpQ"
                                alt="" class="object-cover w-full rounded-md h-44">
                        </div>
                    </a>
                </div>
                <div class="md:col-span-6 xl:row-span-3 xl:col-span-4">
                    <a href="https://www.youtube.com/embed/waoOK5s9ypc?si=yzK5f339AF_hoXdn" target="iframe_a"
                        class="block !mb-0 card relative">
                        <div class="card-body">
                            <div
                                class="absolute flex items-center justify-center size-12 -translate-x-1/2 rounded-full bg-white/70 top-1/2 left-1/2">
                                <i data-lucide="play-square" class="text-red-500"></i>
                            </div>
                            <h6 class="mb-3 truncate text-15">Upgrading to Tailwind CSS v3.0</h6>
                            <img src="https://i.ytimg.com/vi/waoOK5s9ypc/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCkSGeAQ17_LFepTKdEByyVTZkeVw"
                                alt="" class="object-cover w-full rounded-md h-44">
                        </div>
                    </a>
                </div>
                <div class="md:col-span-6 xl:col-span-4">
                    <a href="https://www.youtube.com/embed/TrftauE2Vyk?si=HRCFmq5956C01yB3" target="iframe_a"
                        class="block !mb-0 card relative">
                        <div class="card-body">
                            <div
                                class="absolute flex items-center justify-center size-12 -translate-x-1/2 rounded-full bg-white/70 top-1/2 left-1/2">
                                <i data-lucide="play-square" class="text-red-500"></i>
                            </div>
                            <h6 class="mb-3 truncate text-15">Composing Utilities with @apply – Tailwind CSS</h6>
                            <img src="https://i.ytimg.com/vi/TrftauE2Vyk/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCm6UjEfDC3R5dJik1gEW__HEnaAA"
                                alt="" class="object-cover w-full rounded-md h-44">
                        </div>
                    </a>
                </div>
                <div class="md:col-span-6 xl:col-span-4">
                    <a href="https://www.youtube.com/embed/_CntOc4hBcg?si=-gNbpwS69E8EmjvI" target="iframe_a"
                        class="block !mb-0 card relative">
                        <div class="card-body">
                            <div
                                class="absolute flex items-center justify-center size-12 -translate-x-1/2 rounded-full bg-white/70 top-1/2 left-1/2">
                                <i data-lucide="play-square" class="text-red-500"></i>
                            </div>
                            <h6 class="mb-3 truncate text-15">Sorting Tailwind CSS Classes Automatically with Prettier</h6>
                            <img src="https://i.ytimg.com/vi/_CntOc4hBcg/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCh9x1KP6NaenewDWambvyEqCZ-Wg"
                                alt="" class="object-cover w-full rounded-md h-44">
                        </div>
                    </a>
                </div>
                <div class="md:col-span-6 xl:col-span-4">
                    <a href="https://www.youtube.com/embed/GEYkwfYytAM?si=UL3B-HARGE7df_G2" target="iframe_a"
                        class="block !mb-0 card relative">
                        <div class="card-body">
                            <div
                                class="absolute flex items-center justify-center size-12 -translate-x-1/2 rounded-full bg-white/70 top-1/2 left-1/2">
                                <i data-lucide="play-square" class="text-red-500"></i>
                            </div>
                            <h6 class="mb-3 truncate text-15">Effortless typography, even in dark mode — Tailwind CSS</h6>
                            <img src="https://i.ytimg.com/vi/GEYkwfYytAM/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCQ3H5Fu81Ffh22LmJThZWWDumwkw"
                                alt="" class="object-cover w-full rounded-md h-44">
                        </div>
                    </a>
                </div>
            </div>
        </div><!--end-->
    </div><!--end-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
