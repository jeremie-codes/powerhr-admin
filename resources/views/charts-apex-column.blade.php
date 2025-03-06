@extends('layouts.master')
@section('title')
    {{ __('Column Charts') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Column Charts" pagetitle="Apexcharts" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic</h6>
                <div id="basicColumnChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-yellow-500", "bg-purple-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Column with Data Labels</h6>
                <div id="columnWithDatalabelChart" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Stacked Columns</h6>
                <div id="stackedColumnChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-orange-500", "bg-green-500", "bg-yellow-500"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Stacked Columns 100</h6>
                <div id="stackedColumn100Chart" class="apex-charts"
                    data-chart-colors='["bg-sky-500", "bg-orange-500", "bg-yellow-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Grouped Stacked Columns</h6>
                <div id="groupedStackedColumnChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-green-500", "bg-custom-300", "bg-green-300"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Dumbbell Chart</h6>
                <div id="dumbbellChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Column with Markers</h6>
                <div id="columnMarkersChart" class="apex-charts" data-chart-colors='["bg-sky-500", "bg-purple-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Column with Group Label</h6>
                <div id="columnGroupLabelChart" class="apex-charts" data-chart-colors='["bg-custom-500"]' dir="ltr">
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Column with Rotated Labels</h6>
                <div id="columnRotatedLabelChart" class="apex-charts" data-chart-colors='["bg-red-500", "bg-custom-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Column with Negative Values</h6>
                <div id="columnNegativeValueChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-yellow-500", "bg-orange-500"]' dir="ltr"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Distributed Columns</h6>
                <div id="columnDistributedChart" class="apex-charts"
                    data-chart-colors='["bg-custom-500", "bg-yellow-500", "bg-green-500", "bg-orange-500", "bg-sky-500", "bg-purple-500", "bg-red-500", "bg-emerald-500"]'
                    dir="ltr"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js"></script>

    <!-- column init js-->
    <script src="{{ URL::asset('build/js/pages/apexcharts-column.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
