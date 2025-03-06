@extends('layouts.master')
@section('title')
    {{ __('Drawer') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Drawer" pagetitle="UI Elements" />

    <div>
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Default</h6>
                <div class="flex flex-wrap gap-2">
                    <button data-drawer-target="drawerEnd" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">End
                        Button</button>
                    <div id="drawerEnd" drawer-end
                        class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:right-0 rtl:left-0 md:w-80 z-drawer show dark:bg-zink-600">
                        <div
                            class="flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500">
                            <h6 class="text-15">Drawer Heading</h6>
                            <button data-drawer-close="drawerEnd"><i data-lucide="x"
                                    class="size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50"></i></button>
                        </div>
                        <div class="h-full p-4 overflow-y-auto">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Drawer Content</h6>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500">
                            <h6 class="text-15">Drawer Footer</h6>
                        </div>
                    </div>

                    <button data-drawer-target="drawerStart" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Start
                        Drawer</button>
                    <div id="drawerStart" drawer-start
                        class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:left-0 rtl:right-0 md:w-80 z-drawer show dark:bg-zink-600">
                        <div
                            class="flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500">
                            <h6 class="text-15">Drawer Heading</h6>
                            <button data-drawer-close="drawerEnd"><i data-lucide="x"
                                    class="size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50"></i></button>
                        </div>
                        <div class="h-full p-4 overflow-y-auto">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Drawer Content</h6>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500">
                            <h6 class="text-15">Drawer Footer</h6>
                        </div>
                    </div>

                    <button data-drawer-target="drawerBottom" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Bottom
                        Drawer</button>
                    <div id="drawerBottom" drawer-bottom
                        class="fixed bottom-0 left-0 right-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow md:h-80 z-drawer show dark:bg-zink-600">
                        <div
                            class="flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500">
                            <h6 class="text-15">Drawer Heading</h6>
                            <button data-drawer-close="drawerEnd"><i data-lucide="x"
                                    class="size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50"></i></button>
                        </div>
                        <div class="h-full p-4 overflow-y-auto">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Drawer Content</h6>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500">
                            <h6 class="text-15">Drawer Footer</h6>
                        </div>
                    </div>

                    <button data-drawer-target="drawerTop" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Top
                        Drawer</button>
                    <div id="drawerTop" drawer-top
                        class="fixed top-0 left-0 right-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow md:h-80 z-drawer show dark:bg-zink-600">
                        <div
                            class="flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500">
                            <h6 class="text-15">Drawer Heading</h6>
                            <button data-drawer-close="drawerEnd"><i data-lucide="x"
                                    class="size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50"></i></button>
                        </div>
                        <div class="h-full p-4 overflow-y-auto">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Drawer Content</h6>
                                <p class="text-slate-500 dark:text-zink-200">They all have something to say beyond the words
                                    on the page. They can come across as casual or neutral, exotic or graphic.</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500">
                            <h6 class="text-15">Drawer Footer</h6>
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
