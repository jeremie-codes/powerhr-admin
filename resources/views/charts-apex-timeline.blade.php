@extends('layouts.master')
@section('title')
    {{ __('Timeline Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Timeline Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic</h6>
                <div id="basicTimeline" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Different Color For Each Bar</h6>
                <div id="colorTimeline" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-yellow-500", "bg-green-500", "bg-sky-500", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Multi Series</h6>
                <div id="multiSeriesChart" data-chart-colors='["bg-custom-500", "bg-green-500"]' class="apex-charts"
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Advanced (Multiple Ranges)</h6>
                <div id="advancedMultipleRanges" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Multiple Series – Group Rows</h6>
                <div id="multipleSeriesGroupRows" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-yellow-500", "bg-green-500", "bg-sky-500", "bg-purple-500", "bg-red-500", "bg-slate-500", "bg-orange-500", "bg-green-200","bg-pink-500", "bg-custom-200", "bg-red-300"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Dumbbell Chart (Horizontal)</h6>
                <div id="dumbbellChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- moment js -->
    <script src="{{ URL::asset('build/libs/moment/min/moment.min.js') }}"></script>

    <!-- Timeline init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-timeline.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
