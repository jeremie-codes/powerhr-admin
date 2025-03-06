@extends('layouts.master')
@section('title')
    {{ __('Analytics') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Analytics" pagetitle="Dashboards" />

    <div class="grid grid-cols-12 gap-x-5">
        <div
            class="order-1 md:col-span-6 lg:col-span-3 col-span-12 2xl:order-1 bg-green-100 dark:bg-green-500/20 card 2xl:col-span-2 group-data-[skin=bordered]:border-green-500/20 relative overflow-hidden">
            <div class="card-body">
                <i data-lucide="kanban"
                    class="absolute top-0 size-32 stroke-1 text-green-200/50 dark:text-green-500/20 ltr:-right-10 rtl:-left-10"></i>
                <div class="flex items-center justify-center size-12 bg-green-500 rounded-md text-15 text-green-50">
                    <i data-lucide="users"></i>
                </div>
                <h5 class="mt-5 mb-2"><span class="counter-value" data-target="15876">0</span></h5>
                <p class="text-slate-500 dark:text-slate-200">Total Users</p>
            </div>
        </div><!--end col-->
        <div
            class="order-2 md:col-span-6 lg:col-span-3 col-span-12 2xl:order-1 bg-orange-100 dark:bg-orange-500/20 card 2xl:col-span-2 group-data-[skin=bordered]:border-orange-500/20 relative overflow-hidden">
            <div class="card-body">
                <i data-lucide="list-filter"
                    class="absolute top-0 size-32 stroke-1 text-orange-200/50 dark:text-orange-500/20 ltr:-right-10 rtl:-left-10"></i>
                <div class="flex items-center justify-center size-12 bg-orange-500 rounded-md text-15 text-orange-50">
                    <i data-lucide="cog"></i>
                </div>
                <h5 class="mt-5 mb-2"><span class="counter-value" data-target="103.15">0</span>k</h5>
                <p class="text-slate-500 dark:text-slate-200">Sessions</p>
            </div>
        </div><!--end col-->
        <div class="order-5 col-span-12 2xl:order-1 card 2xl:row-span-2 2xl:col-span-8">
            <div class="card-body">
                <div class="flex items-center gap-2 mb-3">
                    <h6 class="text-15 grow">Platform Perspective</h6>
                    <div class="relative dropdown shrink-0">
                        <span class="ltr:mr-1 rtl:ml-1 text-slate-500 dark:zink-200">Sort by</span>
                        <button type="button"
                            class="px-2 py-1.5 text-xs bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100 dropdown-toggle"
                            id="emailDataDropdown" data-bs-toggle="dropdown">
                            This Yearly <i data-lucide="chevron-down" class="inline-block size-4 ltr:ml-1 rlt:mr-1"></i>
                        </button>

                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="emailDataDropdown">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Weekly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">3 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">6 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">This Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="platformPerspective" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr">
                </div>
                <div id="chartdiv"></div>
            </div>
        </div><!--end col-->
        <div
            class="order-3 md:col-span-6 lg:col-span-3 col-span-12 2xl:order-1 bg-sky-100 dark:bg-sky-500/20 card 2xl:col-span-2 group-data-[skin=bordered]:border-sky-500/20 relative overflow-hidden">
            <div class="card-body">
                <i data-lucide="list-filter"
                    class="absolute top-0 size-32 stroke-1 text-sky-200/50 dark:text-sky-500/20 ltr:-right-10 rtl:-left-10"></i>
                <div class="flex items-center justify-center size-12 rounded-md bg-sky-500 text-15 text-sky-50">
                    <i data-lucide="coins"></i>
                </div>
                <h5 class="mt-5 mb-2"><span class="counter-value" data-target="1">0</span>M <span class="counter-value"
                        data-target="29">0</span>sec</h5>
                <p class="text-slate-500 dark:text-slate-200">Avg. Visit Duration</p>
            </div>
        </div><!--end col-->
        <div
            class="order-4 md:col-span-6 lg:col-span-3 col-span-12 2xl:order-1 bg-purple-100 dark:bg-purple-500/20 card 2xl:col-span-2 group-data-[skin=bordered]:border-purple-500/20 relative overflow-hidden">
            <div class="card-body">
                <i data-lucide="kanban"
                    class="absolute top-0 size-32 stroke-1 text-purple-200/50 dark:text-purple-500/20 ltr:-right-10 rtl:-left-10"></i>
                <div class="flex items-center justify-center size-12 bg-purple-500 rounded-md text-15 text-purple-50">
                    <i data-lucide="users"></i>
                </div>
                <h5 class="mt-5 mb-2"><span class="counter-value" data-target="49.77">0</span>%</h5>
                <p class="text-slate-500 dark:text-slate-200">Bounce Rate</p>
            </div>
        </div><!--end col-->
        <div class="order-6 col-span-12 2xl:order-1 card 2xl:col-span-5">
            <div class="card-body">
                <div class="flex items-center gap-2">
                    <h6 class="mb-3 text-15 grow">Location-Based Response Times</h6>
                    <div class="shrink-0">
                        <button type="button"
                            class="px-2 py-1.5 text-xs text-custom-500 btn bg-custom-100 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20">
                            View More <i data-lucide="move-right"
                                class="inline-block size-4 ltr:ml-1 rlt:mr-1 rtl:-rotate-180"></i>
                        </button>
                    </div>
                </div>

                <div id="responseTimes" class="apex-charts" data-chart-colors='["bg-red-500"]' dir="ltr"></div>
            </div>
        </div><!--end col-->
        <div class="order-7 col-span-12 2xl:order-1 card 2xl:col-span-7">
            <div class="card-body">
                <div class="flex items-center gap-2">
                    <h6 class="mb-3 text-15 grow">Pages Interaction</h6>
                    <div class="relative dropdown shrink-0">
                        <button type="button"
                            class="px-2 py-1.5 text-xs bg-text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 dropdown-toggle"
                            id="emailDataDropdown" data-bs-toggle="dropdown">
                            This Yearly <i data-lucide="chevron-down" class="inline-block size-4 ltr:ml-1 rlt:mr-1"></i>
                        </button>

                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="emailDataDropdown">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Weekly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">3 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">6 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">This Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="pagesInteraction" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end col-->
        <div class="order-8 col-span-12 lg:col-span-6 2xl:order-1 card 2xl:col-span-4">
            <div class="card-body">
                <div class="flex items-center gap-2 mb-3">
                    <h6 class="text-15 grow">User Device <a href="#!" data-tooltip="default"
                            data-tooltip-content="You can see your number of desktop, mobile, and tablet users."
                            class="inline-block align-middle ltr:ml-1 rtl:mr-1 text-slate-500 dark:text-zink-200"><i
                                data-lucide="info" class="size-4"></i></a></h6>
                    <div class="relative dropdown shrink-0">
                        <button type="button"
                            class="flex items-center justify-center size-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle"
                            id="userDeviceDropdown" data-bs-toggle="dropdown">
                            <i data-lucide="more-vertical" class="inline-block size-4"></i>
                        </button>

                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="userDeviceDropdown">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Weekly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">3 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">6 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">This Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="userDeviceCharts" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-green-500", "bg-orange-500"]' dir="ltr"></div>
            </div>
        </div><!--end col-->
        <div class="order-9 col-span-12 lg:col-span-6 2xl:order-1 card 2xl:col-span-4">
            <div class="card-body">
                <div class="flex items-center gap-2 mb-3">
                    <h6 class="text-15 grow">Satisfaction Level <a href="#!" data-tooltip="default"
                            data-tooltip-content="The 1-to-5 satisfaction scale is used for measuring customer satisfaction"
                            class="inline-block align-middle ltr:ml-1 rtl:mr-1 text-slate-500 dark:text-zink-200"><i
                                data-lucide="info" class="size-4"></i></a></h6>
                    <div class="relative dropdown shrink-0">
                        <button type="button"
                            class="flex items-center justify-center size-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle"
                            id="satisfactionRateDropdown" data-bs-toggle="dropdown">
                            <i data-lucide="more-vertical" class="inline-block size-4"></i>
                        </button>

                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="satisfactionRateDropdown">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Weekly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">3 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">6 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">This Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="satisfactionRate" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr">
                </div>
                <p class="text-center text-15 text-slate-500 dark:text-zink-200">Based on Likes 💖</p>
            </div>
        </div><!--end col-->
        <div class="order-10 col-span-12 2xl:order-1 card 2xl:col-span-4">
            <div class="card-body">
                <div class="flex items-center gap-2 mb-3">
                    <h6 class="text-15 grow">Daily Visit Insights <a href="#!" data-tooltip="default"
                            data-tooltip-content="Analyst or business user discovering a pattern in data or a relationship between variables"
                            class="inline-block align-middle ltr:ml-1 rtl:mr-1 text-slate-500 dark:text-zink-200"><i
                                data-lucide="info" class="size-4"></i></a></h6>
                    <div class="relative dropdown shrink-0">
                        <button type="button"
                            class="flex items-center justify-center size-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle"
                            id="dailyVisitInsightsDropdown" data-bs-toggle="dropdown">
                            <i data-lucide="more-vertical" class="inline-block size-4"></i>
                        </button>

                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="dailyVisitInsightsDropdown">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Weekly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">1 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">3 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">6 Monthly</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">This Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="dailyVisitInsightsChart" class="apex-charts"
                    data-chart-colors='["bg-green-500", "bg-purple-500"]' dir="ltr"></div>
            </div>
        </div><!--end col-->
        <div class="order-11 col-span-12 2xl:order-1 card 2xl:col-span-12">
            <div class="card-body">
                <div class="grid items-center grid-cols-1 gap-3 mb-5 xl:grid-cols-12">
                    <div class="xl:col-span-3">
                        <h6 class="text-15">Products Statistics</h6>
                    </div><!--end col-->
                    <div class="xl:col-span-3 xl:col-start-10">
                        <div class="flex gap-3">
                            <div class="relative grow">
                                <input type="text"
                                    class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Search for ..." autocomplete="off">
                                <i data-lucide="search"
                                    class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                            </div>
                            <button type="button"
                                class="bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"><i
                                    class="align-baseline ltr:pr-1 rtl:pl-1 ri-download-2-line"></i> Export</button>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->

                <div class="-mx-5 overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead
                            class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600">
                            <tr>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500 w-10">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheckAll"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                    Products</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                    Price</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                    Income</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                    Sales</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                    View</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                    Click</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                    Click (%)</th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck1"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    SmartTech Pro-4K Ultra HD TV</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $1,542.99</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $12.36k</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    3,217</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    21,451</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    16,287</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    39.56%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent"><i
                                            data-lucide="check-circle-2" class="size-3 ltr:mr-1 rtl:ml-1"></i>
                                        Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck2"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    LuxeLeather Vintage Messenger Bag</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $699.99</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $22.88k</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    7,321</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    32,151</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    27,485</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    87.33%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent"><i
                                            data-lucide="check-circle-2" class="size-3 ltr:mr-1 rtl:ml-1"></i>
                                        Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck3"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    InfinityGlow LED Desk Lamp</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $324.77</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $21.10k</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    8,245</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    33,415</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    25430</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    91.43%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent"><i
                                            data-lucide="x-circle" class="size-3 ltr:mr-1 rtl:ml-1"></i> Unactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck4"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    PowerPulse Wireless Earbuds</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $99.00</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $374</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    2,987</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    41,123</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    46,963</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    79.21%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent"><i
                                            data-lucide="check-circle-2" class="size-3 ltr:mr-1 rtl:ml-1"></i>
                                        Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck5"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    AdventureQuest Outdoor Backpack</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $107.00</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $8.22</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    2,541</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    14,789</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    12,584</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    39.04%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent"><i
                                            data-lucide="x-circle" class="size-3 ltr:mr-1 rtl:ml-1"></i> Unactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck6"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    FitLifePro Fitness Tracker</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $111.99</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $42.2k</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    44,201</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    40,888</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    14,520</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    68.41%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent"><i
                                            data-lucide="check-circle-2" class="size-3 ltr:mr-1 rtl:ml-1"></i>
                                        Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck7"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    ChefMaster Pro Cookware Set</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $107.00</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $8.22</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    2,541</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    14,789</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    12,584</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    39.04%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent"><i
                                            data-lucide="x-circle" class="size-3 ltr:mr-1 rtl:ml-1"></i> Unactive</span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck8"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    PetPalace Pet Accessories</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $1,542.99</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $12.36k</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    3,217</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    21,451</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    16,287</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    39.56%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent"><i
                                            data-lucide="check-circle-2" class="size-3 ltr:mr-1 rtl:ml-1"></i>
                                        Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck8"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    TravelSavvy Luggage Collection</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $1,542.99</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $12.36k</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    3,217</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    21,451</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    16,287</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    39.56%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent"><i
                                            data-lucide="check-circle-2" class="size-3 ltr:mr-1 rtl:ml-1"></i>
                                        Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck9"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    MusicMuse Premium Headphones</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $99.00</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $374</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    2,987</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    41,123</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    46,963</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    79.21%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent"><i
                                            data-lucide="check-circle-2" class="size-3 ltr:mr-1 rtl:ml-1"></i>
                                        Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center h-full">
                                        <input id="productsCheck9"
                                            class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                            type="checkbox">
                                    </div>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    WellnessWonders Yoga Mat</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $324.77</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    $21.10k</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    8,245</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    33,415</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    25430</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    91.43%</td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent"><i
                                            data-lucide="x-circle" class="size-3 ltr:mr-1 rtl:ml-1"></i> Unactive</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col items-center mt-5 md:flex-row">
                    <div class="mb-4 grow md:mb-0">
                        <p class="text-slate-500 dark:text-zink-200">Showing <b>10</b> of <b>19</b> Results</p>
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
        </div><!--end col-->
        <div class="order-12 col-span-12 lg:col-span-6 2xl:order-1 card 2xl:col-span-3">
            <div class="card-body">
                <h6 class="mb-3 text-15">Analytics Reports</h6>
                <div id="lineWithDataLabel" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end col-->
        <div class="col-span-12 lg:col-span-6 order-[13] 2xl:order-1 card 2xl:col-span-3">
            <div class="card-body">
                <h6 class="mb-3 text-15">Status of Monthly Campaign</h6>
                <ul class="flex flex-col gap-5">
                    <li class="flex items-center gap-3">
                        <div
                            class="flex items-center justify-center size-8 text-red-500 bg-red-100 rounded-md dark:bg-red-500/20 shrink-0">
                            <i data-lucide="mail" class="size-4"></i>
                        </div>
                        <h6 class="grow">Clicked</h6>
                        <p class="text-slate-500 dark:text-zink-200">9,745</p>
                        <div class="w-12 text-green-500 ltr:text-right rtl:text-left">
                            2.5%
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <div
                            class="flex items-center justify-center size-8 rounded-md text-sky-500 bg-sky-100 dark:bg-sky-500/20 shrink-0">
                            <i data-lucide="users-2" class="size-4"></i>
                        </div>
                        <h6 class="grow">Subscribe</h6>
                        <p class="text-slate-500 dark:text-zink-200">3,352</p>
                        <div class="w-12 text-green-500 ltr:text-right rtl:text-left">
                            18.9%
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <div
                            class="flex items-center justify-center size-8 text-orange-500 bg-orange-100 rounded-md dark:bg-orange-500/20 shrink-0">
                            <i data-lucide="user-x-2" class="size-4"></i>
                        </div>
                        <h6 class="grow">Unsubscribe</h6>
                        <p class="text-slate-500 dark:text-zink-200">85,745</p>
                        <div class="w-12 text-red-500 ltr:text-right rtl:text-left">
                            1.2%
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <div
                            class="flex items-center justify-center size-8 text-green-500 bg-green-100 rounded-md dark:bg-green-500/20 shrink-0">
                            <i data-lucide="eye" class="size-4"></i>
                        </div>
                        <h6 class="grow">Viewers</h6>
                        <p class="text-slate-500 dark:text-zink-200">85,745</p>
                        <div class="w-12 text-green-500 ltr:text-right rtl:text-left">
                            11.6%
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <div
                            class="flex items-center justify-center size-8 rounded-md text-slate-500 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                            <i data-lucide="package-open" class="size-4"></i>
                        </div>
                        <h6 class="grow">Opened</h6>
                        <p class="text-slate-500 dark:text-zink-200">85,745</p>
                        <div class="w-12 text-red-500 ltr:text-right rtl:text-left">
                            3.1%
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-6 order-[14] 2xl:order-1 card 2xl:col-span-3">
            <div class="card-body">
                <h6 class="mb-3 text-15">Subscription Distribution</h6>
                <div id="subscriptionDistribution" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500", "bg-yellow-500", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-6 order-[15] 2xl:order-1 card 2xl:col-span-3">
            <div class="card-body">
                <div class="flex items-center gap-4 mb-3">
                    <h6 class="text-15 grow">Traffic Source</h6>
                    <a href="#!"
                        class="underline transition-all duration-200 ease-linear text-custom-500 hover:text-custom-700">See
                        More</a>
                </div>
                <div class="flex flex-col gap-5">
                    <div>
                        <div class="flex items-center justify-between gap-4 mb-2">
                            <h6>Google</h6>
                            <span class="text-slate-500 dark:text-zink-200">54,963</span>
                        </div>
                        <div class="w-full h-3.5 rounded bg-slate-200 dark:bg-zink-600">
                            <div class="h-3.5 rounded bg-custom-500" style="width: 89%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between gap-4 mb-2">
                            <h6>Social Media</h6>
                            <span class="text-slate-500 dark:text-zink-200">54,963</span>
                        </div>
                        <div class="w-full h-3.5 rounded bg-slate-200 dark:bg-zink-600">
                            <div class="h-3.5 rounded bg-yellow-500" style="width: 81%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between gap-4 mb-2">
                            <h6>Direct Message</h6>
                            <span class="text-slate-500 dark:text-zink-200">54,963</span>
                        </div>
                        <div class="w-full h-3.5 rounded bg-slate-200 dark:bg-zink-600">
                            <div class="h-3.5 rounded bg-green-500" style="width: 63%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between gap-4 mb-2">
                            <h6>Others</h6>
                            <span class="text-slate-500 dark:text-zink-200">54,963</span>
                        </div>
                        <div class="w-full h-3.5 rounded bg-slate-200 dark:bg-zink-600">
                            <div class="h-3.5 rounded bg-slate-500 dark:text-zink-500" style="width: 25%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!--apexchart js-->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

    <!--dashboard analytics init js-->
    <script src="{{ URL::asset('build/js/pages/dashboards-analytics.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
