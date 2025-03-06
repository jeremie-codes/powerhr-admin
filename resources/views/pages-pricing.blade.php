@extends('layouts.master')
@section('title')
    {{ __('Pricing') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Pricing" pagetitle="Pages" />

    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-2"><i data-lucide="goal" class="inline-block size-5 mr-1 text-green-500"></i> <span
                        class="align-middle">Lite</span></h5>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Perfect plan for Lite</p>

                <h1 class="mb-4 font-normal"><span class="text-slate-500 dark:text-zink-200">$</span>9.99<small
                        class="text-15 text-slate-500 dark:text-zink-200">/Monthly</small></h1>
                <button type="button"
                    class="w-full bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">Purchase
                    Now</button>
                <ul class="flex flex-col gap-3 mt-5">
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>3</b> Projects</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>299</b> Customers</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>Scalable Bandwidth</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>0</b> No Team Account</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-green-100"></i>
                        <span>In app messaging</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-green-100"></i>
                        <span><b>5</b> FTP Login</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-green-100"></i>
                        <span>Detailed Analytics</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-green-100"></i>
                        <span>Custom Domain</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-green-100"></i>
                        <span>Smart Workflow</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-green-100"></i>
                        <span>IQ test</span>
                    </li>
                </ul>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h5 class="mb-2"><i data-lucide="graduation-cap" class="inline-block size-5 mr-1 text-purple-500"></i>
                    <span class="align-middle">Professional</span></h5>
                <p class="mb-4 text-slate-500 dark:text-zink-200">For users who want to do more.</p>

                <h1 class="mb-4 font-normal"><span class="text-slate-500 dark:text-zink-200">$</span>29.99<small
                        class="text-15 text-slate-500 dark:text-zink-200">/Monthly</small></h1>
                <button type="button"
                    class="w-full bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">Purchase
                    Now</button>
                <ul class="flex flex-col gap-3 mt-5">
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>3</b> Projects</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>299</b> Customers</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>Scalable Bandwidth</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>3</b> No Team Account</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>In app messaging</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-red-100"></i>
                        <span><b>5</b> FTP Login</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-red-100"></i>
                        <span>Detailed Analytics</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-red-100"></i>
                        <span>Custom Domain</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-red-100"></i>
                        <span>Smart Workflow</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-red-100"></i>
                        <span>IQ test</span>
                    </li>
                </ul>
            </div>
        </div><!--end card-->
        <div class="relative overflow-hidden card">
            <div class="card-body">
                <div class="absolute top-0 right-0 size-16">
                    <div
                        class="absolute transform rotate-45 bg-sky-600 text-center text-white font-medium py-1 -right-12 top-6 w-[170px]">
                        25% Sale
                    </div>
                </div>
                <h5 class="mb-2"><i data-lucide="crown" class="inline-block size-5 mr-1 text-sky-500"></i> <span
                        class="align-middle">Enterprise</span></h5>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Run your company on your teams</p>

                <h1 class="mb-4 font-normal"><span class="text-slate-500 dark:text-zink-200">$</span>39.99<small
                        class="text-15 text-slate-500 dark:text-zink-200">/Monthly</small></h1>
                <button type="button"
                    class="w-full bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">Purchase
                    Now</button>
                <ul class="flex flex-col gap-3 mt-5">
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>3</b> Projects</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>299</b> Customers</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>Scalable Bandwidth</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>3</b> No Team Account</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>In app messaging</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>5</b> FTP Login</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>Detailed Analytics</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-green-100"></i>
                        <span>Custom Domain</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-green-100"></i>
                        <span>Smart Workflow</span>
                    </li>
                    <li class="flex items-center gap-2 line-through text-slate-500 dark:text-zink-200">
                        <i data-lucide="x" class="inline-block size-4 text-red-500 fill-green-100"></i>
                        <span>IQ test</span>
                    </li>
                </ul>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h5 class="mb-2"><i data-lucide="luggage" class="inline-block size-5 mr-1 text-orange-500"></i> <span
                        class="align-middle">Unlimited</span></h5>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Your entire team in one place</p>

                <h1 class="mb-4 font-normal"><span class="text-slate-500 dark:text-zink-200">$</span>49.99<small
                        class="text-15 text-slate-500 dark:text-zink-200">/Monthly</small></h1>
                <button type="button"
                    class="w-full bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">Purchase
                    Now</button>
                <ul class="flex flex-col gap-3 mt-5">
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>3</b> Projects</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>299</b> Customers</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>Scalable Bandwidth</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>3</b> No Team Account</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>In app messaging</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span><b>5</b> FTP Login</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>Detailed Analytics</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>Custom Domain</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>Smart Workflow</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i data-lucide="check-check"
                            class="inline-block size-4 text-green-500 fill-green-100 dark:fill-green-500/20"></i>
                        <span>IQ test</span>
                    </li>
                </ul>
            </div>
        </div><!--end card-->
    </div><!--end grid-->

    <h5 class="mt-2 mb-4 underline">Horizontal Pricing</h5>

    <div class="grid grid-cols-1 gap-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-2"><span class="align-middle">Personal Plan</span></h5>

                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                    <div class="xl:col-span-8">
                        <p
                            class="relative before:absolute before:border-b before:border-slate-200 dark:before:border-zink-500 before:bottom-2 before:right-0 before:left-0">
                            <span
                                class="relative pr-2 bg-white dark:bg-zink-700 dark:text-zink-200 text-slate-500">Everything
                                Includes</span></p>
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <div>
                                <ul class="flex flex-col gap-3 mt-5">
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>3</b> Projects</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>299</b> Customers</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span>Scalable Bandwidth</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>0</b> No Team Account</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="flex flex-col gap-3 md:mt-5">
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>3</b> Projects</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>299</b> Customers</span>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end grid-->
                    </div><!--end col-->
                    <div class="xl:col-span-4 card bg-custom-500 !mb-0 dark:bg-custom-500">
                        <div class="flex flex-col h-full card-body">
                            <p class="mb-3 text-custom-100">Per Month</p>
                            <div class="mt-auto">
                                <h3 class="mb-2 text-white">$29.99</h3>
                                <button type="button"
                                    class="w-full text-white btn bg-custom-600 border-custom-600 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Buy
                                    Now</button>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h5 class="mb-2"><span class="align-middle">Enterprise Plan</span></h5>

                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                    <div class="xl:col-span-8">
                        <p
                            class="relative before:absolute before:border-b before:border-slate-200 dark:before:border-zink-500 before:bottom-2 before:right-0 before:left-0">
                            <span
                                class="relative pr-2 bg-white dark:bg-zink-700 dark:text-zink-200 text-slate-500">Everything
                                Includes</span></p>
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <div>
                                <ul class="flex flex-col gap-3 mt-5">
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>3</b> Projects</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>299</b> Customers</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span>Scalable Bandwidth</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>0</b> No Team Account</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="flex flex-col gap-3 md:mt-5">
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>3</b> Projects</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>299</b> Customers</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span>Scalable Bandwidth</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-square" class="inline-block size-4 text-green-500"></i>
                                        <span><b>5</b> No Team Account</span>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end grid-->
                    </div><!--end col-->
                    <div class="xl:col-span-4 card bg-purple-100 !mb-0 shadow-none dark:bg-purple-500/20">
                        <div class="flex flex-col h-full card-body">
                            <p class="mb-3 text-purple-500">Per Month</p>
                            <div class="mt-auto">
                                <h3 class="mb-2 text-slate-800">$49.99</h3>
                                <button type="button"
                                    class="w-full text-white bg-purple-500 border-purple-500 btn hover:text-white hover:bg-purple-600 hover:border-purple-600 focus:text-white focus:bg-purple-600 focus:border-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:border-purple-600 active:ring active:ring-purple-100 dark:ring-purple-400/10">Buy
                                    Now</button>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div>
        </div>
    </div><!--end gred-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
