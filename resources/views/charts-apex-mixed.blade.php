@extends('layouts.master')
@section('title')
    {{ __('Mixed Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Mixed Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Line Column</h6>
                <div id="lineColumnChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-orange-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Multiple Y-Axis</h6>
                <div id="multipleYaxisChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-green-500", "bg-yellow-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Line & Area</h6>
                <div id="lineAreaChart" class="apex-charts" data-chart-colors='["bg-custom-200", "bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Line Column Area</h6>
                <div id="lineColumnAreaChart" class="apex-charts"
                    data-chart-colors='["bg-sky-500", "bg-orange-500","bg-purple-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Line Scatter</h6>
                <div id="lineScatterChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-yellow-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- mixed init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-mixed.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
