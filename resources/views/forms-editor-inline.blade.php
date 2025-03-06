@extends('layouts.master')
@section('title')
    {{ __('Inline Editor') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Inline Editor" pagetitle="Forms" />

    <div class="p-3 mb-4 text-sm text-red-500 border border-transparent rounded-md bg-red-50">
        Notes: <a href="{{ url('https://ckeditor.com/docs/ckeditor5/latest/examples/builds/inline-editor') }}"
            class="font-medium underline">https://ckeditor.com/docs/ckeditor5/latest/examples/builds/inline-editor.html</a>
        more details
    </div>

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-gray-800 text-15 dark:text-white">Classic Ckeditor</h6>
            <div class="ckeditor-inline">
                <p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious
                    lessons I’ve learned over the years of traveling.</p>
                <p><br data-cke-filler="true"></p>

                <h4>Appreciation of diversity</h4>
                <p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about
                    cultures online or from books, nothing comes close to experiencing cultural diversity in person. You
                    learn to appreciate each and every single one of the differences while you become more culturally fluid.
                </p>
                <p><br data-cke-filler="true"></p>
                <p>Life doesn't allow us to execute every single plan perfectly. This especially seems to be the case when
                    you travel. You plan it down to every minute with a big checklist. But when it comes to executing it,
                    something always comes up and you’re left with your improvising skills. You learn to adapt as you go.
                    Here’s how my travel checklist looks now:</p>
                <p><br data-cke-filler="true"></p>
                <ul>
                    <li>buy the ticket</li>
                    <li><i>start your adventure</i></li>
                </ul>
            </div>
        </div>
    </div><!--end card-->
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-inline/build/ckeditor.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/form-editor-inline.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
