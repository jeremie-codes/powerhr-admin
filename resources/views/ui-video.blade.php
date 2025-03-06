@extends('layouts.master')
@section('title')
    {{ __('Video') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Video" pagetitle="UI Elements" />

    <div class="grid grid-cols-1 gap-x-4 xl:grid-cols-2">
        <div>
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Basic</h6>
                    <iframe class="w-full rounded-md aspect-video" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Square</h6>
                    <iframe class="w-full rounded-md aspect-square"
                        src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Video - 1/1</h6>
                    <iframe class="w-full rounded-md aspect-1/1" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>
            </div><!--end card-->
        </div>
        <div>
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Auto</h6>
                    <iframe class="w-full rounded-md aspect-auto" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Video - 4/3</h6>
                    <iframe class="w-full rounded-md aspect-4/3" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Video - 16/9</h6>
                    <iframe class="w-full rounded-md aspect-16/9" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Video - 16/9</h6>
                    <iframe class="w-full rounded-md aspect-21/9" src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>
                </div>
            </div><!--end card-->
        </div>
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
