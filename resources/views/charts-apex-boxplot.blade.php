@extends('layouts.master')
@section('title')
    {{ __('Boxplt Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Boxplot Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic</h6>
                <div id="basicBoxplot" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-slate-100"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Boxplot-Scatter</h6>
                <div id="boxplotScatterChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Horizontal BoxPlot</h6>
                <div id="boxplotHorizontalChart" class="apex-charts" data-chart-colors='["bg-slate-50", "bg-slate-200"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- boxplot init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-boxplot.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
