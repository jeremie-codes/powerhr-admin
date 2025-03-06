@extends('layouts.master')
@section('title')
    {{ __('Funnel Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Funnel Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic</h6>
                <div id="basicFunnel" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Pyramid</h6>
                <div id="pyramidChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-custom-400", "bg-custom-300", "bg-custom-200", "bg-purple-200", "bg-purple-300", "bg-purple-400", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Funnel init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-funnel.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
