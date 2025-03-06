@extends('layouts.master')
@section('title')
    {{ __('Grid View') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Grid View" pagetitle="Products" />

    <div class="grid grid-cols-1 2xl:grid-cols-12 gap-x-5 ">
        <div class="hidden 2xl:col-span-3 2xl:block">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-3">
                        <h6 class="text-15 grow">Filter</h6>
                        <div class="shrink-0">
                            <a href="#!"
                                class="underline transition-all duration-200 ease-linear hover:text-custom-500">Clear
                                All</a>
                        </div>
                    </div>

                    <div class="relative mt-4">
                        <input type="text"
                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Search for ..." autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                    </div>

                    <div class="mt-4 collapsible">
                        <button class="flex items-center w-full text-left collapsible-header group">
                            <h6 class="underline grow">Color</h6>
                            <div class="shrink-0 text-slate-500 dark:text-zink-200">
                                <i data-lucide="chevron-down" class="hidden size-4 group-[.show]:inline-block"></i>
                                <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]:hidden"></i>
                            </div>
                        </button>
                        <div class="mt-4 collapsible-content">
                            <div class="flex flex-wrap items-center gap-2">
                                <input id="color1"
                                    class="size-5 border rounded-sm appearance-none cursor-pointer border-custom-500 bg-custom-500 checked:bg-custom-500 checked:border-custom-500"
                                    type="checkbox" value="">
                                <input id="color2"
                                    class="size-5 bg-red-300 border border-red-300 rounded-sm appearance-none cursor-pointer checked:bg-red-300 checked:border-red-300"
                                    type="checkbox" value="">
                                <input id="color3"
                                    class="size-5 bg-green-300 border border-green-300 rounded-sm appearance-none cursor-pointer checked:bg-green-300 checked:border-green-300"
                                    type="checkbox" value="">
                                <input id="color4"
                                    class="size-5 border rounded-sm appearance-none cursor-pointer border-slate-500 bg-slate-500 checked:bg-slate-500 checked:border-slate-500"
                                    type="checkbox" value="">
                                <input id="color5"
                                    class="size-5 bg-purple-500 border border-purple-500 rounded-sm appearance-none cursor-pointer checked:bg-purple-500 checked:border-purple-500"
                                    type="checkbox" value="">
                                <input id="color6"
                                    class="size-5 border rounded-sm appearance-none cursor-pointer bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500"
                                    type="checkbox" value="">
                                <input id="color7"
                                    class="size-5 bg-yellow-500 border border-yellow-500 rounded-sm appearance-none cursor-pointer checked:bg-yellow-500 checked:border-yellow-500"
                                    type="checkbox" value="">
                                <input id="color7"
                                    class="size-5 bg-green-500 border border-green-500 rounded-sm appearance-none cursor-pointer checked:bg-green-500 checked:border-green-500"
                                    type="checkbox" value="">
                                <input id="color8"
                                    class="size-5 border rounded-sm appearance-none cursor-pointer bg-slate-800 border-slate-800 checked:bg-slate-800 checked:border-slate-800"
                                    type="checkbox" value="">
                                <input id="color9"
                                    class="size-5 border rounded-sm appearance-none cursor-pointer bg-slate-200 border-slate-200 checked:bg-slate-200 checked:border-slate-200"
                                    type="checkbox" value="">
                                <input id="color10"
                                    class="size-5 border rounded-sm appearance-none cursor-pointer bg-emerald-300 border-embg-emerald-300 checked:bg-emerald-300 checked:border-embg-emerald-300"
                                    type="checkbox" value="">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 collapsible">
                        <button class="flex items-center w-full text-left collapsible-header group">
                            <h6 class="underline grow">Price</h6>
                            <div class="shrink-0 text-slate-500 dark:text-zink-200">
                                <i data-lucide="chevron-down" class="hidden size-4 group-[.show]:inline-block"></i>
                                <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]:hidden"></i>
                            </div>
                        </button>
                        <div class="mt-4 collapsible-content">
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <input id="priceAll"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="priceAll" class="align-middle cursor-pointer">
                                        All
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="price1"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="price1" class="align-middle cursor-pointer">
                                        $0.00 – $110.00
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="price2"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="price2" class="align-middle cursor-pointer">
                                        $110.00 – $220.00
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="price3"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="price3" class="align-middle cursor-pointer">
                                        $220 - $330
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="price4"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="price4" class="align-middle cursor-pointer">
                                        $330 - $550
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="price5"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="price5" class="align-middle cursor-pointer">
                                        $550+
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="price6"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="price6" class="align-middle cursor-pointer">
                                        Low to High
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="price6"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="price6" class="align-middle cursor-pointer">
                                        High to Low
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 collapsible">
                        <button class="flex items-center w-full text-left collapsible-header group">
                            <h6 class="underline grow">Product Category</h6>
                            <div class="shrink-0 text-slate-500 dark:text-zink-200">
                                <i data-lucide="chevron-down" class="hidden size-4 group-[.show]:inline-block"></i>
                                <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]:hidden"></i>
                            </div>
                        </button>
                        <div class="mt-4 collapsible-content">
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <input id="categoryAll"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="categoryAll" class="align-middle cursor-pointer">
                                        All
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="category1"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="category1" class="align-middle cursor-pointer">
                                        Mobiles, Computers
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="category2"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="category2" class="align-middle cursor-pointer">
                                        TV, Appliances, Electronics
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="category3"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="category3" class="align-middle cursor-pointer">
                                        Men's Fashion
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="category4"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="category4" class="align-middle cursor-pointer">
                                        Women's Fashion
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="category5"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="category5" class="align-middle cursor-pointer">
                                        Home, Kitchen, Pets
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="category6"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="category6" class="align-middle cursor-pointer">
                                        Beauty, Health, Grocery
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="category7"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="category7" class="align-middle cursor-pointer">
                                        Books
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 collapsible">
                        <button class="flex items-center w-full text-left collapsible-header group">
                            <h6 class="underline grow">Rating</h6>
                            <div class="shrink-0 text-slate-500 dark:text-zink-200">
                                <i data-lucide="chevron-down" class="hidden size-4 group-[.show]:inline-block"></i>
                                <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]:hidden"></i>
                            </div>
                        </button>
                        <div class="mt-4 collapsible-content">
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <input id="ratingAll"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="ratingAll" class="align-middle cursor-pointer">
                                        All
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="rating5"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="rating5" class="align-middle cursor-pointer">
                                        <i data-lucide="star"
                                            class="inline-block size-4 ml-1 text-yellow-500 align-middle"></i> <span
                                            class="align-middle">5 Rating</span>
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="rating4"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="rating4" class="align-middle cursor-pointer">
                                        <i data-lucide="star"
                                            class="inline-block size-4 ml-1 text-yellow-500 align-middle"></i> <span
                                            class="align-middle">4 Rating and Up</span>
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="rating3"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="rating3" class="align-middle cursor-pointer">
                                        <i data-lucide="star"
                                            class="inline-block size-4 ml-1 text-yellow-500 align-middle"></i> <span
                                            class="align-middle">3 Rating and Up</span>
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="rating2"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="rating2" class="align-middle cursor-pointer">
                                        <i data-lucide="star"
                                            class="inline-block size-4 ml-1 text-yellow-500 align-middle"></i> <span
                                            class="align-middle">2 Rating and Up</span>
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="rating1"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="rating1" class="align-middle cursor-pointer">
                                        <i data-lucide="star"
                                            class="inline-block size-4 ml-1 text-yellow-500 align-middle"></i> <span
                                            class="align-middle">1 Rating and Up</span>
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="rating0"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="rating0" class="align-middle cursor-pointer">
                                        <i data-lucide="star"
                                            class="inline-block size-4 ml-1 text-yellow-500 align-middle"></i> <span
                                            class="align-middle">0 Rating</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 collapsible">
                        <button class="flex items-center w-full text-left collapsible-header group show">
                            <h6 class="underline grow">Gender</h6>
                            <div class="ml-2 shrink-0">
                                <i data-lucide="chevron-down" class="hidden size-4 group-[.show]:inline-block"></i>
                                <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]:hidden"></i>
                            </div>
                        </button>
                        <div class="hidden mt-4 collapsible-content">
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <input id="genderAll"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="genderAll" class="align-middle cursor-pointer">
                                        All
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="gendermal"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="gendermal" class="align-middle cursor-pointer">
                                        Male
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="genderFemal"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="genderFemal" class="align-middle cursor-pointer">
                                        Female
                                    </label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="genderOthers"
                                        class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                    <label for="genderOthers" class="align-middle cursor-pointer">
                                        Others
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="2xl:col-span-9">
            <div class="flex flex-wrap items-center gap-2">
                <p class="grow">Showing all <b>7,410</b> items results</p>
                <div class="flex gap-2 shrink-0 items-cente">
                    <div class="relative dropdown">
                        <a href="#!"
                            class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 dropdown-toggle"
                            id="dropdownMenuLink" data-bs-toggle="dropdown">Sort by: <b class="font-medium">Highest
                                Price</b> <i data-lucide="chevron-down"
                                class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></a>

                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                            aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Lowest Price</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Highest Price</a>
                            </li>
                            <li>
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Hight to Low</a>
                            </li>
                            <li class="pt-2 mt-2 border-t dark:border-zink-300/50">
                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                    href="#!">Low to High</a>
                            </li>
                        </ul>
                    </div>
                    <button type="button" id="listView"
                        class="flex items-center justify-center size-[37.5px] p-0 text-sky-500 btn bg-sky-100 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 [&.active]:text-white [&.active]:bg-sky-600 dark:bg-sky-500/20 dark:text-sky-400 dark:hover:bg-sky-500 dark:hover:text-white dark:focus:bg-sky-500 dark:focus:text-white dark:[&.active]:bg-sky-500 dark:[&.active]:text-white dark:ring-sky-400/20"><i
                            data-lucide="list" class="size-4"></i></button>
                    <button type="button" id="gridView"
                        class="flex items-center justify-center size-[37.5px] p-0 text-sky-500 btn bg-sky-100 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 [&.active]:text-white [&.active]:bg-sky-600 dark:bg-sky-500/20 dark:text-sky-400 dark:hover:bg-sky-500 dark:hover:text-white dark:focus:bg-sky-500 dark:focus:text-white dark:[&.active]:bg-sky-500 dark:[&.active]:text-white dark:ring-sky-400/20 active"><i
                            data-lucide="layout-grid" class="size-4"></i></button>
                </div>
            </div>

            <div class="flex items-center gap-3 mt-3">
                <span
                    class="px-2.5 py-0.5 text-sm font-medium rounded-full border bg-slate-100 border-slate-300 text-slate-500 inline-flex items-center dark:bg-zink-800 dark:border-zink-500 dark:text-zink-200">High
                    to Low <a href="#!"
                        class="transition text-slate-500 dark:text-zink-200 hover:text-slate-600 dark:hover:text-zink-100"><i
                            data-lucide="x" class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                <span
                    class="px-2.5 py-0.5 text-sm font-medium rounded-full border bg-slate-100 border-slate-300 text-slate-500 inline-flex items-center dark:bg-zink-800 dark:border-zink-500 dark:text-zink-200">New
                    <a href="#!"
                        class="transition text-slate-500 dark:text-zink-200 hover:text-slate-600 dark:hover:text-zink-100"><i
                            data-lucide="x" class="size-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                <a href="#!"
                    class="px-2.5 py-0.5 text-sm font-medium rounded border bg-transparent border-transparent text-slate-500 transition hover:bg-slate-200 dark:bg-zink-800 dark:hover:bg-zink-600 dark:text-zink-200">All
                    Clear</a>
            </div>

            <div class="grid grid-cols-1 mt-5 md:grid-cols-2 [&.gridView]:grid-cols-1 xl:grid-cols-4 group [&.gridView]:xl:grid-cols-1 gap-x-5"
                id="cardGridView">
                <div class="card md:group-[.gridView]:flex relative">
                    <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                        <a href="#!" class="absolute group/item toggle-button top-6 ltr:right-6 rtl:left-6 active"><i
                                data-lucide="heart"
                                class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20"></i></a>
                        <div
                            class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                            <img src="{{ URL::asset('build/images/product/img-02.png') }}" alt=""
                                class="group-[.gridView]:h-16">
                        </div>
                    </div>
                    <div
                        class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                        <div class="group-[.gridView]:grow">
                            <h6
                                class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500">
                                <a href="{{ url('apps-ecommerce-product-overview') }}">Mesh Ergonomic Black Chair</a></h6>

                            <div class="flex items-center text-slate-500 dark:text-zink-200">
                                <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </div>
                                (198)
                            </div>
                            <h5 class="mt-4 text-16">$674.12 <small
                                    class="font-normal line-through text-slate-500 dark:text-zink-200">784.99</small></h5>
                        </div>

                        <div class="flex items-center gap-2 mt-4 group-[.gridView]:mt-0 group-[.gridView]:self-end">
                            <button type="button"
                                class="w-full bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100"><i
                                    data-lucide="shopping-cart" class="inline-block size-3 leading-none"></i> <span
                                    class="align-middle">Add to Cart</span></button>
                            <div class="relative float-right dropdown">
                                <button
                                    class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                    id="productList1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-3"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="productList1">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-overview') }}"><i data-lucide="eye"
                                                class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                class="align-middle">Overview</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-create') }}"><i data-lucide="file-edit"
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
                <div class="card md:group-[.gridView]:flex relative">
                    <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                        <a href="#!" class="absolute group/item toggle-button top-6 ltr:right-6 rtl:left-6"><i
                                data-lucide="heart"
                                class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20"></i></a>
                        <div
                            class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                            <img src="{{ URL::asset('build/images/product/img-03.png') }}" alt=""
                                class="group-[.gridView]:h-16">
                        </div>
                    </div>
                    <div
                        class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                        <div class="group-[.gridView]:grow">
                            <h6
                                class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500">
                                <a href="{{ url('apps-ecommerce-product-overview') }}">Fastcolors Typography Men</a></h6>

                            <div class="flex items-center text-slate-500 dark:text-zink-200">
                                <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </div>
                                (1,150)
                            </div>
                            <h5 class="mt-4 text-16">$341.99 <small
                                    class="font-normal line-through text-slate-500 dark:text-zink-200">784.99</small></h5>
                        </div>

                        <div class="flex items-center gap-2 mt-4 group-[.gridView]:mt-0 group-[.gridView]:self-end">
                            <button type="button"
                                class="w-full bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100"><i
                                    data-lucide="shopping-cart" class="inline-block size-3 leading-none"></i> <span
                                    class="align-middle">Add to Cart</span></button>
                            <div class="relative float-right dropdown">
                                <button
                                    class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                    id="productList2" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-3"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="productList2">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-overview') }}"><i data-lucide="eye"
                                                class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                class="align-middle">Overview</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-create') }}"><i data-lucide="file-edit"
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
                <div class="card md:group-[.gridView]:flex relative">
                    <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                        <a href="#!" class="absolute group/item toggle-button top-6 ltr:right-6 rtl:left-6"><i
                                data-lucide="heart"
                                class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20"></i></a>
                        <div
                            class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                            <img src="{{ URL::asset('build/images/product/img-04.png') }}" alt=""
                                class="group-[.gridView]:h-16">
                        </div>
                    </div>
                    <div
                        class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                        <div class="group-[.gridView]:grow">
                            <h6
                                class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500">
                                <a href="{{ url('apps-ecommerce-product-overview') }}">Mesh Ergonomic Green Chair</a></h6>

                            <div class="flex items-center text-slate-500 dark:text-zink-200">
                                <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                    <i class="ri-star-line"></i>
                                </div>
                                (29)
                            </div>
                            <h5 class="mt-4 text-16">$362.21 <small
                                    class="font-normal line-through text-slate-500 dark:text-zink-200">599.99</small></h5>
                        </div>

                        <div class="flex items-center gap-2 mt-4 group-[.gridView]:mt-0 group-[.gridView]:self-end">
                            <button type="button"
                                class="w-full bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100"><i
                                    data-lucide="shopping-cart" class="inline-block size-3 leading-none"></i> <span
                                    class="align-middle">Add to Cart</span></button>
                            <div class="relative float-right dropdown">
                                <button
                                    class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                    id="productList3" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-3"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="productList3">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-overview') }}"><i data-lucide="eye"
                                                class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                class="align-middle">Overview</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-create') }}"><i data-lucide="file-edit"
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
                <div class="card md:group-[.gridView]:flex relative">
                    <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                        <a href="#!" class="absolute group/item toggle-button top-6 ltr:right-6 rtl:left-6 active"><i
                                data-lucide="heart"
                                class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20"></i></a>
                        <div
                            class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                            <img src="{{ URL::asset('build/images/product/img-05.png') }}" alt=""
                                class="group-[.gridView]:h-16">
                        </div>
                    </div>
                    <div
                        class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                        <div class="group-[.gridView]:grow">
                            <h6
                                class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500">
                                <a href="{{ url('apps-ecommerce-product-overview') }}">Techel Black Bluetooth Soundbar</a>
                            </h6>

                            <div class="flex items-center text-slate-500 dark:text-zink-200">
                                <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </div>
                                (1,324)
                            </div>
                            <h5 class="mt-4 text-16">$249.99 <small
                                    class="font-normal line-through text-slate-500 dark:text-zink-200">399.99</small></h5>
                        </div>

                        <div class="flex items-center gap-2 mt-4 group-[.gridView]:mt-0 group-[.gridView]:self-end">
                            <button type="button"
                                class="w-full bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100"><i
                                    data-lucide="shopping-cart" class="inline-block size-3 leading-none"></i> <span
                                    class="align-middle">Add to Cart</span></button>
                            <div class="relative float-right dropdown">
                                <button
                                    class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                    id="productList4" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-3"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="productList4">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-overview') }}"><i data-lucide="eye"
                                                class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                class="align-middle">Overview</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-create') }}"><i data-lucide="file-edit"
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
                <div class="card md:group-[.gridView]:flex relative">
                    <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                        <a href="#!" class="absolute group/item toggle-button top-6 ltr:right-6 rtl:left-6"><i
                                data-lucide="heart"
                                class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20"></i></a>
                        <div
                            class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                            <img src="{{ URL::asset('build/images/product/img-06.png') }}" alt=""
                                class="group-[.gridView]:h-16">
                        </div>
                    </div>
                    <div
                        class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                        <div class="group-[.gridView]:grow">
                            <h6
                                class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500">
                                <a href="{{ url('apps-ecommerce-product-overview') }}">Bovet Fleurier AIFSQ029</a></h6>

                            <div class="flex items-center text-slate-500 dark:text-zink-200">
                                <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </div>
                                (2,195)
                            </div>
                            <h5 class="mt-4 text-16">$496.16</h5>
                        </div>

                        <div class="flex items-center gap-2 mt-4 group-[.gridView]:mt-0 group-[.gridView]:self-end">
                            <button type="button"
                                class="w-full bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100"><i
                                    data-lucide="shopping-cart" class="inline-block size-3 leading-none"></i> <span
                                    class="align-middle">Add to Cart</span></button>
                            <div class="relative float-right dropdown">
                                <button
                                    class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                    id="productList5" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-3"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="productList5">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-overview') }}"><i data-lucide="eye"
                                                class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                class="align-middle">Overview</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-create') }}"><i data-lucide="file-edit"
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
                <div class="card md:group-[.gridView]:flex relative">
                    <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                        <a href="#!" class="absolute group/item toggle-button top-6 ltr:right-6 rtl:left-6 active"><i
                                data-lucide="heart"
                                class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20"></i></a>
                        <div
                            class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                            <img src="{{ URL::asset('build/images/product/img-08.png') }}" alt=""
                                class="group-[.gridView]:h-16">
                        </div>
                    </div>
                    <div
                        class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                        <div class="group-[.gridView]:grow">
                            <h6
                                class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500">
                                <a href="{{ url('apps-ecommerce-product-overview') }}">Roar Twill Blue Baseball Cap</a>
                            </h6>

                            <div class="flex items-center text-slate-500 dark:text-zink-200">
                                <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                    <i class="ri-star-line"></i>
                                    <i class="ri-star-line"></i>
                                </div>
                                (485)
                            </div>
                            <h5 class="mt-4 text-16">$674.12 <small
                                    class="font-normal line-through text-slate-500 dark:text-zink-200">784.99</small></h5>
                        </div>

                        <div class="flex items-center gap-2 mt-4 group-[.gridView]:mt-0 group-[.gridView]:self-end">
                            <button type="button"
                                class="w-full bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100"><i
                                    data-lucide="shopping-cart" class="inline-block size-3 leading-none"></i> <span
                                    class="align-middle">Add to Cart</span></button>
                            <div class="relative float-right dropdown">
                                <button
                                    class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                    id="productList6" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-3"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="productList6">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-overview') }}"><i data-lucide="eye"
                                                class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                class="align-middle">Overview</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-create') }}"><i data-lucide="file-edit"
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
                <div class="card md:group-[.gridView]:flex relative">
                    <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                        <a href="#!" class="absolute group/item toggle-button top-6 ltr:right-6 rtl:left-6"><i
                                data-lucide="heart"
                                class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20"></i></a>
                        <div
                            class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                            <img src="{{ URL::asset('build/images/product/img-01.png') }}" alt=""
                                class="group-[.gridView]:h-16">
                        </div>
                    </div>
                    <div
                        class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                        <div class="group-[.gridView]:grow">
                            <h6
                                class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500">
                                <a href="{{ url('apps-ecommerce-product-overview') }}">Smartest Printed T-shirt</a></h6>

                            <div class="flex items-center text-slate-500 dark:text-zink-200">
                                <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                    <i class="ri-star-line"></i>
                                </div>
                                (5,321)
                            </div>
                            <h5 class="mt-4 text-16">$89.99</h5>
                        </div>

                        <div class="flex items-center gap-2 mt-4 group-[.gridView]:mt-0 group-[.gridView]:self-end">
                            <button type="button"
                                class="w-full bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100"><i
                                    data-lucide="shopping-cart" class="inline-block size-3 leading-none"></i> <span
                                    class="align-middle">Add to Cart</span></button>
                            <div class="relative float-right dropdown">
                                <button
                                    class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                    id="productList7" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-3"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="productList7">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-overview') }}"><i data-lucide="eye"
                                                class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                class="align-middle">Overview</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-create') }}"><i data-lucide="file-edit"
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
                <div class="card md:group-[.gridView]:flex relative">
                    <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                        <a href="#!" class="absolute group/item toggle-button top-6 ltr:right-6 rtl:left-6 active"><i
                                data-lucide="heart"
                                class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20"></i></a>
                        <div
                            class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                            <img src="{{ URL::asset('build/images/product/img-10.png') }}" alt=""
                                class="group-[.gridView]:h-16">
                        </div>
                    </div>
                    <div
                        class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                        <div class="group-[.gridView]:grow">
                            <h6
                                class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500">
                                <a href="{{ url('apps-ecommerce-product-overview') }}">Crop tops for Women western
                                    wear</a></h6>

                            <div class="flex items-center text-slate-500 dark:text-zink-200">
                                <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-line"></i>
                                </div>
                                (1551)
                            </div>
                            <h5 class="mt-4 text-16">$145 <small
                                    class="font-normal line-through text-slate-500 dark:text-zink-200">299.99</small></h5>
                        </div>

                        <div class="flex items-center gap-2 mt-4 group-[.gridView]:mt-0 group-[.gridView]:self-end">
                            <button type="button"
                                class="w-full bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100"><i
                                    data-lucide="shopping-cart" class="inline-block size-3 leading-none"></i> <span
                                    class="align-middle">Add to Cart</span></button>
                            <div class="relative float-right dropdown">
                                <button
                                    class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                    id="productList8" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-3"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="productList8">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-overview') }}"><i data-lucide="eye"
                                                class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                                class="align-middle">Overview</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-ecommerce-product-create') }}"><i data-lucide="file-edit"
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
        </div><!--end col-->
    </div><!--end grid-->



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
    <!--product Grid init js-->
    <script src="{{ URL::asset('build/js/pages/apps-ecommerce-product-grid.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
