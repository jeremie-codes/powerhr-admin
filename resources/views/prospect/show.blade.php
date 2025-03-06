@extends('layouts.master')
@section('title')
    {{ __('Order Overview') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Prospect" pagetitle="Prospects" />

    <div class="grid grid-cols-1 2xl:grid-cols-12 gap-x-5">
        
        <div class="2xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <div class="size-12 bg-yellow-100 rounded-md ltr:float-right rtl:float-left dark:bg-yellow-500/20">
                        <img src="{{ URL::asset('build/images/users/avatar-4.png') }}" alt=""
                            class="h-12 rounded-md">
                    </div>
                    <h6 class="mb-4 text-15">Prospect Info</h6>

                    <h6 class="mb-1">
                        {{$prospect->name}}
                    </h6>
                    <p class="mb-1 text-slate-500 dark:text-zink-200">
                        {{$prospect->subject}}
                    </p>
                    <p class="text-slate-500 dark:text-zink-200">
                        {{$prospect->phone}}
                    </p>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end grid-->

    <div class="grid grid-cols-1 2xl:grid-cols-12 gap-x-5">
        <div class="2xl:col-span-9">
            <div class="grid grid-cols-1 2xl:grid-cols-5 gap-x-5">
                <div>
                    <div class="card">
                        <div class="text-center card-body">
                            <h6 class="mb-1 underline">
                                {{$prospect->matricule}}
                            </h6>
                            <p class="uppercase text-slate-500 dark:text-zink-200">Order ID</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div>
                    <div class="card">
                        <div class="text-center card-body">
                            <h6 class="mb-1">{{date('d,M Y', strtotime($prospect->created_at))}}</h6>
                            <p class="uppercase text-slate-500 dark:text-zink-200"> Date</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div>
                    <div class="card">
                        <div class="text-center card-body">
                            <h6 class="mb-1">{{$prospect->subject}}</h6>
                            <p class="uppercase text-slate-500 dark:text-zink-200">Sujet</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-15 grow">Message</h6>
                    </div>
                    <div>
                        <div
                            class="relative ltr:pl-6 rtl:pr-6 before:absolute ltr:before:border-l rtl:before:border-r ltr:before:left-[0.1875rem] rtl:before:right-[0.1875rem] before:border-slate-200 [&.done]:before:border-custom-500 before:top-1.5 before:-bottom-1.5 after:absolute after:size-2 after:bg-white after:border after:border-slate-200 after:rounded-full ltr:after:left-0 rtl:after:right-0 after:top-1.5 pb-4 last:before:hidden [&.done]:after:bg-custom-500 [&.done]:after:border-custom-500 done">
                            <div class="flex gap-4">
                                <div class="grow">
                                    <h6 class="mb-2 text-gray-800 text-15 dark:text-zink-50">
                                        Contenu
                                    </h6>
                                    <p class="text-gray-400 dark:text-zink-200">
                                        {{$prospect->message}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col--><!--end col-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
