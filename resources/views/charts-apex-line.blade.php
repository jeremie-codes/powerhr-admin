@extends('layouts.master')
@section('title')
    {{ __('Line Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Apexcharts" pagetitle="Charts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic</h6>
                <div id="chartLine" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Line with Data Labels</h6>
                <div id="lineWithDataLabel" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Zoomable Timeseries</h6>
                <div id="zoomableTimeseries" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Line Chart with Annotations</h6>
                <div id="lineWithAnnotations" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Brush Chart</h6>
                <div>
                    <div id="brushChartLine" class="apex-charts" data-chart-colors='["bg-slate-600"]' dir="ltr"></div>
                    <div id="brushChartLine2" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr">
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Stepline</h6>
                <div id="chartStepline" class="apex-charts" data-chart-colors='["bg-yellow-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Gradient Charts</h6>
                <div id="gradientCharts" class="apex-charts" data-chart-colors='["bg-purple-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Missing / Null Values</h6>
                <div id="missingCharts" class="apex-charts"
                    data-chart-colors='["bg-green-500", "bg-sky-500", "bg-yellow-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Dashed Charts</h6>
                <div id="dashedCharts" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Realtime Charts</h6>
                <div id="realtimeCharts" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

    <script src="{{ URL::asset('build/js/pages/apexcharts-line.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
