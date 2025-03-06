@extends('layouts.master')
@section('title')
    {{ __('Scatter Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Scatter Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic</h6>
                <div id="basicScatter" class="apex-charts"
                    data-chart-colors='["bg-custom-500","bg-green-500", "bg-yellow-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Scatter – Datetime</h6>
                <div id="scatterDatetime" class="apex-charts"
                    data-chart-colors='["bg-custom-500","bg-green-500", "bg-yellow-500", "bg-purple-500", "bg-red-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Scatter – Images</h6>
                <div id="scatterImages" class="apex-charts" data-chart-colors='["bg-custom-500","bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Scatter init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-scatter.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
