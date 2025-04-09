@extends('layouts.master')
@section('title')
    {{ __('Dashboard') }}
@endsection
@section('content')

    <x-page-title title="{{ __('Dashboard') }}" pagetitle="Dashboards" />

    <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
        <div class="col-span-12 card md:col-span-6 lg:col-span-6 2xl:col-span-3">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                    <i data-lucide="wallet-2"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$jobs->count()}}">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">Total Jobs</p>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card md:col-span-6 lg:col-span-6 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 rounded-full size-14 dark:bg-purple-500/20">
                    <i data-lucide="package"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$candidates->count()}}">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">Total Candidates</p>
            </div>
        </div><!--end col-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!--apexchart js-->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!--dashboard ecommerce init js-->
    <script src="{{ URL::asset('build/js/pages/dashboards-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
