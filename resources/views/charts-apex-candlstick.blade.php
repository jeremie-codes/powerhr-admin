@extends('layouts.master')
@section('title')
    {{ __('Candlestick Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Candlstick Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Simple</h6>
                <div id="basicChart" class="apex-charts" data-chart-colors='["bg-green-500", "bg-red-500"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Candlestick Synced with Brush Chart (Combo)</h6>
                <div>
                    <div id="combo_candlestick" data-chart-colors='["bg-sky-500", "bg-orange-500"]' class="apex-charts"
                        dir="ltr"></div>
                    <div id="combo_candlestick_chart" data-chart-colors='["bg-yellow-500", "bg-red-500"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Category x-axis</h6>
                <div id="categoryCandlestick" class="apex-charts"
                    data-chart-colors='["bg-green-500", "bg-red-500", "bg-sky-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Candlestick with Line</h6>
                <div id="candlestickWithLine" class="apex-charts" data-chart-colors='["bg-green-500", "bg-red-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
    <!-- for Category x-axis chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.8.17/dayjs.min.js"></script>

    <!-- candlstick init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-candlstick.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
