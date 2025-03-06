@extends('layouts.master')
@section('title')
    {{ __('Modal') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Modal" pagetitle="UI Elements" />

    <div>
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Default</h6>
                <div class="flex flex-wrap gap-2">
                    <button data-modal-target="defaultModal" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Default
                        Modal</button>
                    <div id="defaultModal" modal-center
                        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
                            <div
                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Heading</h5>
                                <button data-modal-close="defaultModal"
                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                                        data-lucide="x" class="size-5"></i></button>
                            </div>
                            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                                <h5 class="mb-3 text-16">Modal Content</h5>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Footer</h5>
                            </div>
                        </div>
                    </div>

                    <button data-modal-target="topModal" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Top
                        Modal</button>
                    <div id="topModal" modal-top
                        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 show">
                        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col">
                            <div
                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Heading</h5>
                                <button data-modal-close="topModal"
                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                                        data-lucide="x" class="size-5"></i></button>
                            </div>
                            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                                <h5 class="mb-3 text-16">Modal Content</h5>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Footer</h5>
                            </div>
                        </div>
                    </div>

                    <button data-modal-target="bottomModal" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Bottom
                        Modal</button>
                    <div id="bottomModal" modal-bottom
                        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 show">
                        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
                            <div
                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Heading</h5>
                                <button data-modal-close="bottomModal"
                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                                        data-lucide="x" class="size-5"></i></button>
                            </div>
                            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                                <h5 class="mb-3 text-16">Modal Content</h5>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Footer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Modal Sizes</h6>

                <div class="flex flex-wrap gap-2">
                    <button data-modal-target="extraSmallModal" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Extra
                        Small Modal</button>
                    <div id="extraSmallModal" modal-center
                        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                        <div class="w-screen md:w-[20rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
                            <div
                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Heading</h5>
                                <button data-modal-close="extraSmallModal"
                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                                        data-lucide="x" class="size-5"></i></button>
                            </div>
                            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                                <h5 class="mb-3 text-16">Modal Content</h5>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Footer</h5>
                            </div>
                        </div>
                    </div>

                    <button data-modal-target="smallModal" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Small
                        Modal</button>
                    <div id="smallModal" modal-center
                        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                        <div
                            class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
                            <div
                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Heading</h5>
                                <button data-modal-close="smallModal"
                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                                        data-lucide="x" class="size-5"></i></button>
                            </div>
                            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                                <h5 class="mb-3 text-16">Modal Content</h5>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the
                                    words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Footer</h5>
                            </div>
                        </div>
                    </div>

                    <button data-modal-target="defaultModal2" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Default
                        Modal</button>
                    <div id="defaultModal2" modal-center
                        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                        <div
                            class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
                            <div
                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Heading</h5>
                                <button data-modal-close="defaultModal2"
                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                                        data-lucide="x" class="size-5"></i></button>
                            </div>
                            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                                <h5 class="mb-3 text-16">Modal Content</h5>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the
                                    words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Footer</h5>
                            </div>
                        </div>
                    </div>

                    <button data-modal-target="largeModal" type="button"
                        class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:focus:ring-custom-400/20">Large
                        Modal</button>
                    <div id="largeModal" modal-center
                        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                        <div
                            class="w-screen md:w-[40rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
                            <div
                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Heading</h5>
                                <button data-modal-close="largeModal"
                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                                        data-lucide="x" class="size-5"></i></button>
                            </div>
                            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                                <h5 class="mb-3 text-16">Modal Content</h5>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the
                                    words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Footer</h5>
                            </div>
                        </div>
                    </div>

                    <button data-modal-target="extraLargeModal" type="button"
                        class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:focus:ring-custom-400/20">Extra
                        Large Modal</button>
                    <div id="extraLargeModal" modal-center
                        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
                        <div
                            class="w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
                            <div
                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Heading</h5>
                                <button data-modal-close="extraLargeModal"
                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                                        data-lucide="x" class="size-5"></i></button>
                            </div>
                            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                                <h5 class="mb-3 text-16">Modal Content</h5>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the
                                    words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Footer</h5>
                            </div>
                        </div>
                    </div>

                    <button data-modal-target="fullScreenModal" type="button"
                        class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:focus:ring-custom-400/20">Extra
                        Large Modal</button>
                    <div id="fullScreenModal" modal-center
                        class="fixed inset-0 flex flex-col hidden transition-all duration-300 ease-in-out z-drawer show">
                        <div class="flex flex-col w-full h-full bg-white dark:bg-zink-600">
                            <div
                                class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Heading</h5>
                                <button data-modal-close="fullScreenModal"
                                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                                        data-lucide="x" class="size-5"></i></button>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-3 text-16">Modal Content</h5>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the
                                    words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                            <div
                                class="flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
                                <h5 class="text-16">Modal Footer</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!--end card-->
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
