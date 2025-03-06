@extends('layouts.master')
@section('title')
    {{ __('Video Player') }}
@endsection
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/plyr/plyr.css') }}">
@endpush
@section('content')
    <!-- page title -->
    <x-page-title title="Video Player" pagetitle="Plugins" />

    <div>
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Preview Video Player</h6>

                    <div class="plyr__video-embed" id="player">
                        <iframe src="https://www.youtube.com/embed/qYgogv4R8zg?si=_YxUDmc2fDgHyPae" allowfullscreen
                            allowtransparency allow="autoplay"></iframe>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end grid-->
    </div>
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/libs/plyr/plyr.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/plugins-video-player.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
