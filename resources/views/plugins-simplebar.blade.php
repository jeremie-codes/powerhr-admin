@extends('layouts.master')
@section('title')
    {{ __('Simplebar') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Simplebar" pagetitle="Plugins" />

    <div>
        <div class="grid grid-cols-1 gap-x-5 lg:grid-cols-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Default Scroll</h6>
                    <div data-simplebar style="max-height: 220px;" class="pr-2 text-slate-500 dark:text-zink-200">
                        <p class="mb-2">If several languages coalesce, the grammar of the resulting language is more simple
                            and regular than that of the individual languages. The new common language will be more simple
                            and regular than the existing</p>
                        <p class="mb-2">To an English person, it will seem like simplified English, as a skeptical
                            Cambridge friend of mine told me what Occidental is. The European languages are members of the
                            same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the
                            same vocabulary.</p>
                        <p class="mb-2">The languages only differ in their grammar, their pronunciation and their most
                            common words. Everyone realizes why a new common language would be desirable: one could refuse
                            to pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
                            pronunciation and more common words.</p>
                        <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same
                            vocabulary. The languages only differ in their grammar, their pronunciation and their most
                            common words.</p>
                    </div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Auto Hide False</h6>
                    <div data-simplebar data-simplebar-auto-hide="false" style="max-height: 220px;"
                        class="pr-2 text-slate-500 dark:text-zink-200">
                        <p class="mb-2">If several languages coalesce, the grammar of the resulting language is more
                            simple and regular than that of the individual languages. The new common language will be more
                            simple and regular than the existing</p>
                        <p class="mb-2">To an English person, it will seem like simplified English, as a skeptical
                            Cambridge friend of mine told me what Occidental is. The European languages are members of the
                            same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the
                            same vocabulary.</p>
                        <p class="mb-2">The languages only differ in their grammar, their pronunciation and their most
                            common words. Everyone realizes why a new common language would be desirable: one could refuse
                            to pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
                            pronunciation and more common words.</p>
                        <p class="mb-0">Their separate existence is a myth. For science, music, sport, etc, Europe uses
                            the same vocabulary. The languages only differ in their grammar, their pronunciation and their
                            most common words.</p>
                    </div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">RTL Direction</h6>
                    <div data-simplebar data-simplebar-direction="rtl" style="max-height: 220px;"
                        class="pl-2 text-gray-400 dark:text-zink-200">
                        <p class="mb-2">If several languages coalesce, the grammar of the resulting language is more
                            simple and regular than that of the individual languages. The new common language will be more
                            simple and regular than the existing</p>
                        <p class="mb-2">To an English person, it will seem like simplified English, as a skeptical
                            Cambridge friend of mine told me what Occidental is. The European languages are members of the
                            same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the
                            same vocabulary.</p>
                        <p class="mb-2">The languages only differ in their grammar, their pronunciation and their most
                            common words. Everyone realizes why a new common language would be desirable: one could refuse
                            to pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
                            pronunciation and more common words.</p>
                        <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same
                            vocabulary. The languages only differ in their grammar, their pronunciation and their most
                            common words.</p>
                    </div>
                </div>
            </div><!--end card-->

        </div>

        <h5 class="mb-4 underline">Simplebar Track Color:</h5>

        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-3">

            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Custom Track</h6>
                    <div data-simplebar data-simplebar-track="custom" style="max-height: 220px;"
                        class="pr-2 text-slate-500 dark:text-zink-200">
                        <p class="mb-2">If several languages coalesce, the grammar of the resulting language is more
                            simple and regular than that of the individual languages. The new common language will be more
                            simple and regular than the existing</p>
                        <p class="mb-2">To an English person, it will seem like simplified English, as a skeptical
                            Cambridge friend of mine told me what Occidental is. The European languages are members of the
                            same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the
                            same vocabulary.</p>
                        <p class="mb-2">The languages only differ in their grammar, their pronunciation and their most
                            common words. Everyone realizes why a new common language would be desirable: one could refuse
                            to pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
                            pronunciation and more common words.</p>
                        <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same
                            vocabulary. The languages only differ in their grammar, their pronunciation and their most
                            common words.</p>
                    </div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Green Track</h6>
                    <div data-simplebar data-simplebar-track="green" style="max-height: 220px;"
                        class="pr-2 text-slate-500 dark:text-zink-200">
                        <p class="mb-2">If several languages coalesce, the grammar of the resulting language is more
                            simple and regular than that of the individual languages. The new common language will be more
                            simple and regular than the existing</p>
                        <p class="mb-2">To an English person, it will seem like simplified English, as a skeptical
                            Cambridge friend of mine told me what Occidental is. The European languages are members of the
                            same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the
                            same vocabulary.</p>
                        <p class="mb-2">The languages only differ in their grammar, their pronunciation and their most
                            common words. Everyone realizes why a new common language would be desirable: one could refuse
                            to pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
                            pronunciation and more common words.</p>
                        <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same
                            vocabulary. The languages only differ in their grammar, their pronunciation and their most
                            common words.</p>
                    </div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Orange Track</h6>
                    <div data-simplebar data-simplebar-track="orange" style="max-height: 220px;"
                        class="pr-2 text-slate-500 dark:text-zink-200">
                        <p class="mb-2">If several languages coalesce, the grammar of the resulting language is more
                            simple and regular than that of the individual languages. The new common language will be more
                            simple and regular than the existing</p>
                        <p class="mb-2">To an English person, it will seem like simplified English, as a skeptical
                            Cambridge friend of mine told me what Occidental is. The European languages are members of the
                            same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the
                            same vocabulary.</p>
                        <p class="mb-2">The languages only differ in their grammar, their pronunciation and their most
                            common words. Everyone realizes why a new common language would be desirable: one could refuse
                            to pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
                            pronunciation and more common words.</p>
                        <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same
                            vocabulary. The languages only differ in their grammar, their pronunciation and their most
                            common words.</p>
                    </div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Sky Track</h6>
                    <div data-simplebar data-simplebar-track="sky" style="max-height: 220px;"
                        class="pr-2 text-slate-500 dark:text-zink-200">
                        <p class="mb-2">If several languages coalesce, the grammar of the resulting language is more
                            simple and regular than that of the individual languages. The new common language will be more
                            simple and regular than the existing</p>
                        <p class="mb-2">To an English person, it will seem like simplified English, as a skeptical
                            Cambridge friend of mine told me what Occidental is. The European languages are members of the
                            same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the
                            same vocabulary.</p>
                        <p class="mb-2">The languages only differ in their grammar, their pronunciation and their most
                            common words. Everyone realizes why a new common language would be desirable: one could refuse
                            to pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
                            pronunciation and more common words.</p>
                        <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same
                            vocabulary. The languages only differ in their grammar, their pronunciation and their most
                            common words.</p>
                    </div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Yellow Track</h6>
                    <div data-simplebar data-simplebar-track="yellow" style="max-height: 220px;"
                        class="pr-2 text-slate-500 dark:text-zink-200">
                        <p class="mb-2">If several languages coalesce, the grammar of the resulting language is more
                            simple and regular than that of the individual languages. The new common language will be more
                            simple and regular than the existing</p>
                        <p class="mb-2">To an English person, it will seem like simplified English, as a skeptical
                            Cambridge friend of mine told me what Occidental is. The European languages are members of the
                            same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the
                            same vocabulary.</p>
                        <p class="mb-2">The languages only differ in their grammar, their pronunciation and their most
                            common words. Everyone realizes why a new common language would be desirable: one could refuse
                            to pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
                            pronunciation and more common words.</p>
                        <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same
                            vocabulary. The languages only differ in their grammar, their pronunciation and their most
                            common words.</p>
                    </div>
                </div>
            </div><!--end card-->

            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Red Track</h6>
                    <div data-simplebar data-simplebar-track="red" style="max-height: 220px;"
                        class="pr-2 text-slate-500 dark:text-zink-200">
                        <p class="mb-2">If several languages coalesce, the grammar of the resulting language is more
                            simple and regular than that of the individual languages. The new common language will be more
                            simple and regular than the existing</p>
                        <p class="mb-2">To an English person, it will seem like simplified English, as a skeptical
                            Cambridge friend of mine told me what Occidental is. The European languages are members of the
                            same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the
                            same vocabulary.</p>
                        <p class="mb-2">The languages only differ in their grammar, their pronunciation and their most
                            common words. Everyone realizes why a new common language would be desirable: one could refuse
                            to pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
                            pronunciation and more common words.</p>
                        <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same
                            vocabulary. The languages only differ in their grammar, their pronunciation and their most
                            common words.</p>
                    </div>
                </div>
            </div><!--end card-->

        </div><!--end grid-->
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
