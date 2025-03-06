@extends('layouts.master')
@section('title')
    {{ __('Polar Area Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Polar Area Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic</h6>
                <div id="basicPolar" class="apex-charts"
                    data-chart-colors='["bg-custom-300", "bg-orange-300", "bg-green-300", "bg-yellow-300", "bg-purple-300", "bg-slate-300", "bg-red-300", "bg-emerald-200","bg-pink-200"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Monochrome</h6>
                <div id="monochromeChart" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- polar init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-polar.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
