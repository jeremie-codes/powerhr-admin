@extends('layouts.master')
@section('title')
    {{ __('Radialbar Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Radialbar Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Simple Radialbar Chart</h6>
                <div id="simpleRadialbarChart" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Multiple Radialbar</h6>
                <div id="multipleRadialbarChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500", "bg-yellow-500"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Custom Angle Circle</h6>
                <div id="customAngleCircleChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-sky-500", "bg-green-500", "bg-purple-500"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Gradient</h6>
                <div id="gradientChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-green-400"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Radialbar with Image</h6>
                <div id="radialbarsWithImageChart" class="apex-charts" dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Stroked Gauge</h6>
                <div id="strokedGauge" class="apex-charts" data-chart-colors='["bg-purple-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Semi Circle Gauge</h6>
                <div id="semiCircleGauge" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- radialbar init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-radialbar.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
