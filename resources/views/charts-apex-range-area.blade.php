@extends('layouts.master')
@section('title')
    {{ __('Range Area Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Range Area Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic Range Area</h6>
                <div id="basicRangeArea" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Combo Range Area</h6>
                <div id="comboRangeAreaChart" class="apex-charts"
                    data-chart-colors='["bg-sky-100", "bg-orange-100", "bg-sky-500", "bg-orange-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- range-area init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-range-area.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
