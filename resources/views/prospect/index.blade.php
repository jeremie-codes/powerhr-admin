@extends('layouts.master')
@section('title')
    {{ __('List View') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="List View" pagetitle="Invoices" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
        <div class="xl:col-span-3">
            <div class="sticky card print:hidden top-[calc(theme('spacing.header')_+_theme('spacing.5'))]">
                <div class="card-body">
                    <h6 class="mb-4 text-16">Prostect List</h6>
                </div>
                <div data-simplebar
                    class="h-[calc(100vh_-_theme('height.14')_-_theme('spacing.5')_-_theme('height.header')_*_3.5)]">
                    @foreach ($prospects as $prospect)
                        <a href="{{route('prospect.show', $prospect->id)}}"
                            class="block transition-all duration-150 ease-linear border-t card-body border-slate-200 hover:bg-slate-50 [&.active]:bg-slate-100 dark:border-zink-500 dark:hover:bg-zink-600 dark:[&.active]:bg-zink-600">
                            <div class="float-right">
                                @if ($prospect->readen)
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">
                                    Opened by  {{$prospect->user->name}}
                                </span>

                                @else
                                    <span
                                        class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500 dark:bg-yellow-500/20 dark:border-transparent">
                                        Non Lue
                                    </span>
                                @endif
                                
                            </div>
                            <h6>
                                {{$prospect->matricule}}
                            </h6>
                            <div class="flex">
                                <div class="grow">
                                    <h6 class="mt-3 mb-1 text-16">
                                        {{$prospect->name}}
                                    </h6>
                                    <p class="text-slate-500 dark:text-zink-200">
                                        {{$prospect->subject}}
                                    </p>
                                </div>
                                <p class="self-end mb-0 text-slate-500 dark:text-zink-200 shrink-0"><i
                                        data-lucide="calendar-clock" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle">
                                        {{date('d,M Y', strtotime($prospect->created_at))}}
                                    </span></p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->


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
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
