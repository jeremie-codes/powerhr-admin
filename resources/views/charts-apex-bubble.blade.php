@extends('layouts.master')
@section('title')
    {{ __('Bubble Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Bubble Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Simple</h6>
                <div id="simpleChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-green-500", "bg-orange-500", "bg-yellow-500"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">3D Bubble</h6>
                <div id="bubble_chart" class="apex-charts"
                    data-chart-colors='["bg-sky-500", "bg-yellow-500", "bg-red-500", "bg-purple-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- bubble init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-bubble.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
