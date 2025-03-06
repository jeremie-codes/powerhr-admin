@extends('layouts.master')
@section('title')
    {{ __('Bar Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Bar Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic</h6>
                <div id="basicBar" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Grouped Chart</h6>
                <div id="GroupedChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Stacked Bar</h6>
                <div id="stackedChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-green-500", "bg-orange-500", "bg-yellow-500", "bg-purple-500", "bg-red-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Stacked Bars 100</h6>
                <div id="stackedBar100Chart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-green-500", "bg-orange-500", "bg-yellow-500", "bg-purple-500", "bg-red-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Grouped Stacked Bars</h6>
                <div id="groupedStackedChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-green-500", "bg-custom-300", "bg-green-300"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Bar with Negative Values</h6>
                <div id="negativeValuesChart" class="apex-charts" data-chart-colors='["bg-red-500", "bg-sky-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Bar with Markers</h6>
                <div id="markersChart" class="apex-charts" data-chart-colors='["bg-green-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Reversed Bar Chart</h6>
                <div id="reversedChart" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Custom DataLabels Bar</h6>
                <div id="customDataLabelsChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500", "bg-sky-500", "bg-yellow-500", "bg-red-500", "bg-purple-500", "bg-slate-300", "bg-slate-800", "bg-emerald-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Patterned Bar</h6>
                <div id="patternedChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-green-500", "bg-orange-500", "bg-yellow-500"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Bar with Images</h6>
                <div id="barWithImagesChart" class="apex-charts" dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- barcharts init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-bar.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
