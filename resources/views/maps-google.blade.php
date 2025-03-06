@extends('layouts.master')
@section('title')
    {{ __('Google Maps') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Google Maps" pagetitle="Maps" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Markers</h6>
                <div id="gmaps-markers" class="gmaps"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Overlays</h6>
                <div id="gmaps-overlay" class="gmaps"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Street View Panoramas</h6>
                <div id="panorama" class="gmaps-panaroma"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Map Types</h6>
                <div id="gmaps-types" class="gmaps"></div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- gmaps plugins -->
    <script src="{{ URL::asset('build/libs/gmaps/gmaps.min.js') }}"></script>

    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

    <!-- gmaps init -->
    <script src="{{ URL::asset('build/js/pages/gmaps.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
