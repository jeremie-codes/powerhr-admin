@extends('layouts.master')
@section('title')
    {{ __('Heatmap Chart') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Heatmap Chart" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic</h6>
                <div id="basicHeatmap" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Multiple Colors</h6>
                <div id="multipleColorsHeatmap" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-purple-500", "bg-orange-500", "bg-yellow-500", "bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Color Range</h6>
                <div id="ColorsRangeHeatmap" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-purple-500", "bg-orange-500", "bg-yellow-500"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Rounded (Range without Shades)</h6>
                <div id="RoundedRangeHeatmap" class="apex-charts" data-chart-colors='["bg-sky-500", "bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- heatmap init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-heatmap.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
