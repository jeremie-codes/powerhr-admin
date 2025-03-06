@extends('layouts.master')
@section('title')
    {{ __('Notification') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Notification" pagetitle="UI Elements" />

    <div>
        <div class="card">
            <div class="card-body">
                <h5 class="mb-4 text-15">Toastify JS</h5>
                <div class="flex flex-wrap gap-2">
                    <button type="button" data-toast data-toast-text="Welcome Back! This is a Toast Notification"
                        data-toast-gravity="top" data-toast-position="right" data-toast-className="custom"
                        data-toast-duration="3000" data-toast-close="close" data-toast-style="style"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Default</button>
                    <button type="button" data-toast data-toast-text="Your application was successfully sent"
                        data-toast-gravity="top" data-toast-position="center" data-toast-className="green"
                        data-toast-duration="3000"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Success</button>
                    <button type="button" data-toast data-toast-text="Warning ! Something went wrong try again"
                        data-toast-gravity="top" data-toast-position="center" data-toast-className="yellow"
                        data-toast-duration="3000"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Warning</button>
                    <button type="button" data-toast data-toast-text="Error ! An error occurred." data-toast-gravity="top"
                        data-toast-position="center" data-toast-className="red" data-toast-duration="3000"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Error</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
        <div class="card">
            <div class="card-body">
                <h5 class="mb-4 text-15">Display Position</h5>
                <div class="flex flex-wrap gap-2">
                    <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification"
                        data-toast-gravity="top" data-toast-position="left" data-toast-duration="3000"
                        data-toast-close="close"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Top
                        Left</button>
                    <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification"
                        data-toast-gravity="top" data-toast-position="center" data-toast-duration="3000"
                        data-toast-close="close"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Top
                        Center</button>
                    <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification"
                        data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000"
                        data-toast-close="close"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Top
                        Right</button>
                    <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification"
                        data-toast-gravity="bottom" data-toast-position="left" data-toast-duration="3000"
                        data-toast-close="close"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Bottom
                        Left</button>
                    <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification"
                        data-toast-gravity="bottom" data-toast-position="center" data-toast-duration="3000"
                        data-toast-close="close"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Bottom
                        Center</button>
                    <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification"
                        data-toast-gravity="bottom" data-toast-position="right" data-toast-duration="3000"
                        data-toast-close="close"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Bottom
                        Right</button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-4 text-15">Offset Position</h5>
                    <div class="flex flex-wrap items-center gap-2">
                        <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification"
                            data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000"
                            data-toast-offset data-toast-close="close"
                            class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Click
                            Me</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-4 text-15">Close icon Display</h5>
                    <div class="flex flex-wrap items-center gap-2">
                        <button type="button" data-toast data-toast-text="Welcome Back ! This is a Toast Notification"
                            data-toast-position="right" data-toast-duration="3000" data-toast-close="close"
                            class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Click
                            Me</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-4 text-15">Duration</h5>
                    <div class="flex flex-wrap items-center gap-2">
                        <button type="button" data-toast data-toast-text="Toast Duration 5s" data-toast-gravity="top"
                            data-toast-position="right" data-toast-duration="5000"
                            class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Click
                            Me</button>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div>
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/js/pages/notifications.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
