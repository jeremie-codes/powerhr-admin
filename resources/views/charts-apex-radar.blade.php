@extends('layouts.master')
@section('title')
    {{ __('Radar Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Radar Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic</h6>
                <div id="basicRadar" class="apex-charts" data-chart-colors='["bg-custom-300", "bg-custom-300"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Radar – Multiple Series</h6>
                <div id="radarMultipleSeries" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-green-500", "bg-yellow-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Radar with Polygon-fill</h6>
                <div id="radarWithPolygonfill" class="apex-charts"
                    data-chart-colors='["bg-red-500", "bg-slate-200", "bg-white"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- radar init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-radar.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
