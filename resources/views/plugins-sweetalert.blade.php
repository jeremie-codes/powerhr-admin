    @extends('layouts.master')
    @section('title')
        {{ __('Sweetalert') }}
    @endsection
    @section('content')
        <!-- page title -->
        <x-page-title title="Sweetalert" pagetitle="Plugins" />

        <div>
            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Basic Message</h6>
                        <button id="sa-basic" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Title</h6>
                        <button id="sa-title" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Success Message!</h6>
                        <button id="sa-success" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Error Message!</h6>
                        <button id="sa-error" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Long Content</h6>
                        <button id="sa-longcontent" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Warning Message</h6>
                        <button id="sa-warning" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Parameter</h6>
                        <button id="sa-params" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Custom Images</h6>
                        <button id="sa-image" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Auto Close Timer</h6>
                        <button id="sa-close" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Custom HTML Alert</h6>
                        <button id="custom-html-alert" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Dialog Three Buttons</h6>
                        <button id="sa-dialog-three-btn" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Position</h6>
                        <button id="sa-position" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Ajax Content</h6>
                        <button id="ajax-alert" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Click
                            Me</button>
                    </div>
                </div><!--end card-->

            </div><!--end grid-->
        </div>
    @endsection
    @push('scripts')
        <!-- Sweet Alerts js -->
        <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>

        <!--sweet alert init js-->
        <script src="{{ URL::asset('build/js/pages/sweetalert.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endpush
