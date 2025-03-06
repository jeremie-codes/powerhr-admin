@extends('layouts.master')
@section('title')
    {{ __('Input Mask') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Input Mask" pagetitle="Tabs" />

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">Date Formatting</h6>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-2">
                <div>
                    <label for="cleave-date" class="inline-block mb-2 text-base font-medium">Date</label>
                    <input type="text" id="cleave-date"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="DD-MM-YYYY">
                </div>
                <div>
                    <label for="cleaveDateFormat" class="inline-block mb-2 text-base font-medium">Date Formatting</label>
                    <input type="text" id="cleaveDateFormat"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="DD/MM">
                </div>
            </div><!--END GRID-->
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">Time Formatting</h6>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-2">
                <div>
                    <label for="cleaveTime" class="inline-block mb-2 text-base font-medium">Time</label>
                    <input type="text" id="cleaveTime"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="hh:mm:ss">
                </div>
                <div>
                    <label for="cleaveTimeFormat" class="inline-block mb-2 text-base font-medium">Time Formatting</label>
                    <input type="text" id="cleaveTimeFormat"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="hh:mm">
                </div>
            </div><!--END GRID-->
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">Custom Options</h6>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-2">
                <div>
                    <label for="cleaveCreditCard" class="inline-block mb-2 text-base font-medium">Credit Card</label>
                    <input type="text" id="cleaveCreditCard"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="xxxx xxxx xxxx xxxx">
                </div>
                <div>
                    <label for="cleaveDelimiter" class="inline-block mb-2 text-base font-medium">Delimiter</label>
                    <input type="text" id="cleaveDelimiter"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="xxx·xxx·xxx">
                </div>
                <div>
                    <label for="cleaveDelimiters" class="inline-block mb-2 text-base font-medium">Delimiters</label>
                    <input type="text" id="cleaveDelimiters"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="xxx.xxx.xxx-xx">
                </div>
                <div>
                    <label for="cleavePrefix" class="inline-block mb-2 text-base font-medium">Prefix</label>
                    <input type="text" id="cleavePrefix"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="xxx.xxx.xxx-xx">
                </div>
                <div>
                    <label for="cleavePhone" class="inline-block mb-2 text-base font-medium">Phone</label>
                    <input type="text" id="cleavePhone"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="(xxx)xxx-xxxx">
                </div>
                <div>
                    <label for="cleaveNumeral" class="inline-block mb-2 text-base font-medium">Numeral Formatting</label>
                    <input type="text" id="cleaveNumeral"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="Enter numeral">
                </div>
            </div><!--END GRID-->
        </div>
    </div><!--end card-->
@endsection
@push('scripts')
    <!-- cleave.js -->
    <script src="{{ URL::asset('build/libs/cleave.js/cleave.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/form-mask.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
