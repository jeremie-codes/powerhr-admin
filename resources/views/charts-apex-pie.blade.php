@extends('layouts.master')
@section('title')
    {{ __('Pie/Donut Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Pie / Donut Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Simple Pie</h6>
                <div id="simplePie" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500", "bg-yellow-500", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Simple Donut</h6>
                <div id="simpleDonut" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500", "bg-sky-500", "bg-yellow-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Donut Update</h6>
                <div>
                    <div id="updatingDonutChart" class="apex-charts"
                        data-chart-colors='["bg-custom-400", "bg-orange-400", "bg-green-400", "bg-yellow-400"]'
                        class="apex-charts" dir="ltr"></div>

                    <div class="flex flex-wrap items-start justify-center gap-2 mt-4">
                        <button id="add"
                            class="px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">
                            + ADD
                        </button>

                        <button id="remove"
                            class="px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">
                            - REMOVE
                        </button>

                        <button id="randomize"
                            class="px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">
                            RANDOMIZE
                        </button>

                        <button id="reset"
                            class="px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">
                            RESET
                        </button>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Monochrome Pie</h6>
                <div id="monochromePieChart" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Gradient Donut</h6>
                <div id="gradientDonut" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500", "bg-yellow-500", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Semi Donut</h6>
                <div id="semiDonut" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500", "bg-yellow-500", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Donut with Pattern</h6>
                <div id="donutWithPattern" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500", "bg-yellow-500", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Pie with Image</h6>
                <div id="pieWithImage" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500", "bg-yellow-500", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- pie init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-pie.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
