@extends('layouts.master')
@section('title')
    {{ __('Color Pickr') }}
@endsection
@push('css')
    <!-- One of the following themes -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/classic.min.css') }}">
    <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/monolith.min.css') }}">
    <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@simonwep/pickr/themes/nano.min.css') }}"> <!-- 'nano' theme -->
@endpush
@section('content')
    <!-- page title -->
    <x-page-title title="Color Picker" pagetitle="Forms" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-3">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Monolith Demo</h6>
                <p class="mb-4">Use <code class="text-xs text-pink-500 select-all">monolith-colorpicker</code> class to set monolith colorpicker.</p>

                <div class="monolith-colorpicker"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Classic Demo</h6>
                <p class="mb-4">Use <code class="text-xs text-pink-500 select-all">classic-colorpicker</code> class to set classic colorpicker.</p>

                <div class="classic-colorpicker"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Nano Demo</h6>
                <p class="mb-4">Use <code class="text-xs text-pink-500 select-all">nano-colorpicker</code> class to set nano colorpicker.</p>

                <div class="nano-colorpicker"></div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Option Demo</h6>
                <p class="mb-4">Use <code class="text-xs text-pink-500 select-all">colorpicker-demo</code> class to set demo option colorpicker.</p>

                <div class="colorpicker-demo"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Switches</h6>
                <p class="mb-4">Use <code class="text-xs text-pink-500 select-all">colorpicker-switch</code> class to set switch colorpicker.</p>

                <div class="colorpicker-switch"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Picker with Opacity & Hue</h6>
                <p class="mb-4">Use <code class="text-xs text-pink-500 select-all">colorpicker-opacity-hue</code> class to set colorpicker with opacity & hue.</p>

                <div class="colorpicker-opacity-hue"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Picker with Input</h6>
                <p class="mb-4">Use <code class="text-xs text-pink-500 select-all">colorpicker-input</code> class to set colorpicker with input.</p>

                <div class="colorpicker-input"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-gray-800 text-15 dark:text-white">Color Format</h6>
                <p class="mb-4">Use <code class="text-xs text-pink-500 select-all">colorpicker-format</code> class to set colorpicker with format option.</p>

                <div class="colorpicker-format"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- Modern colorpicker bundle -->
    <script src="{{ URL::asset('build/libs/@simonwep/pickr/pickr.min.js') }}"></script>

    <!-- colorpickr init js -->

    <script src="{{ URL::asset('build/js/pages/form-colorpicker.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
