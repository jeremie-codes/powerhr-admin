@extends('layouts.master')
@section('title')
    {{ __('Time Picker') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Time Picker" pagetitle="Forms" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Timepicker</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="timepickr"
                        data-time-basic="true"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="timepickr" data-time-basic="true" placeholder="Select Time">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">24-hour Time Picker</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="timepickr"
                        data-time-hrs="true"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="timepickr" data-time-hrs="true" placeholder="Select Time">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Time Picker w/ Limits</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="timepickr"
                        data-min-time="Min.Time" data-max-time="Max.Time"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="timepickr" data-min-time="11:00" data-max-time="16:00" placeholder="Select Time">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Preloading Time</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="timepickr"
                        data-default-time="Your Default Time"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="timepickr" data-default-time="16:45" placeholder="Select Time">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Inline</h6>
                <p class="mb-4">Set <code class="text-xs text-pink-500 select-all">data-provider="timepickr"
                        data-time-inline="Your Default Time"</code> attribute.</p>
                <input type="text"
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-provider="timepickr" data-time-inline="11:42">
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
