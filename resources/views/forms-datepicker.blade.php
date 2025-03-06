@extends('layouts.master')
@section('title')
    {{ __('Date Picker') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Date Picker" pagetitle="Forms" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Basic Example</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="flatpickr"
                        data-date-format="d M, Y"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="flatpickr" data-date-format="d M, Y" readonly="readonly" placeholder="Select Date">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">DateTime</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="flatpickr"
                        data-date-format="d.m.y" data-enable-time</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="flatpickr" data-date-format="d.m.y" data-enable-time readonly="readonly"
                    placeholder="Select date-time">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Human-Friendly Dates</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="flatpickr"
                        data-altFormat="F j, Y"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="flatpickr" data-altFormat="F j, Y" readonly="readonly" placeholder="Select Date">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">MinDate and MaxDate</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="flatpickr"
                        data-date-format="d M, Y" data-minDate="Your Min. Date" data-maxDate="Your Max. date"</code>
                    attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="flatpickr" data-date-format="d M, Y" data-mindate="09 Dec, 2023"
                    data-maxdate="20 Dec,2023" readonly="readonly" placeholder="Select Date">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Default Date</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="flatpickr"
                        data-date-format="d M, Y" data-default-date="Your Default Date"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="flatpickr" data-date-format="d M, Y" data-default-date="16 Oct, 2023" readonly="readonly"
                    placeholder="Select Date">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Selecting Multiple Dates</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="flatpickr"
                        data-date-format="d M, Y" data-multiple-date="true"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="flatpickr" data-date-format="d M, Y" data-multiple-date="true" readonly="readonly"
                    placeholder="Select Date">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Range</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="flatpickr"
                        data-date-format="d M, Y" data-range-date="true"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" readonly="readonly"
                    placeholder="Select Date">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Week Numbers</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="flatpickr"
                        data-date-format="d M, Y" data-week-number</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="flatpickr" data-date-format="d M, Y" data-week-number readonly="readonly"
                    placeholder="Select Date">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Inline</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="flatpickr"
                        data-date-format="d M, Y" data-default-date="today" data-inline-date="true"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="flatpickr" data-date-format="d M, Y" data-default-date="19 Nov,2021"
                    data-inline-date="true">
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
