@extends('layouts.master')
@section('title')
    {{ __('Collapse') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Collapse" pagetitle="UI Elements" />

    <div>
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Default</h6>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                    <div class="collapsible">
                        <button
                            class="flex text-white collapsible-header group/item btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            Collapsible Button
                            <div class="ltr:ml-2 rtl:mr-2 shrink-0">
                                <i data-lucide="chevron-down" class="hidden size-4 group-[.show]/item:inline-block"></i>
                                <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]/item:hidden"></i>
                            </div>
                        </button>
                        <div class="hidden mt-2 mb-0 collapsible-content card">
                            <div class="card-body">
                                <p>For that very reason, I went on a quest and spoke to many different professional graphic
                                    designers and asked them what graphic design tips they live. You've probably heard that
                                    opposites attract. The same is true for fonts. Don't be afraid to combine font styles
                                    that are different but complementary, like sans serif with serif, short with tall, or
                                    decorative with simple. Qui photo booth letterpress, commodo enim craft beer mlkshk
                                    aliquip jean shorts ullamco.</p>
                            </div>
                        </div>
                    </div>

                    <div class="collapsible">
                        <button
                            class="flex text-white collapsible-header group/item btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            Collapsible Button
                            <div class="ltr:ml-2 rtl:mr-2 shrink-0">
                                <i data-lucide="chevron-down" class="hidden size-4 group-[.show]/item:inline-block"></i>
                                <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]/item:hidden"></i>
                            </div>
                        </button>
                        <div class="hidden mt-2 mb-0 collapsible-content card">
                            <div class="card-body">
                                <p>For that very reason, I went on a quest and spoke to many different professional graphic
                                    designers and asked them what graphic design tips they live. You've probably heard that
                                    opposites attract. The same is true for fonts. Don't be afraid to combine font styles
                                    that are different but complementary, like sans serif with serif, short with tall, or
                                    decorative with simple. Qui photo booth letterpress, commodo enim craft beer mlkshk
                                    aliquip jean shorts ullamco.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Link Collapse</h6>
                <div class="collapsible">
                    <a href="#!"
                        class="flex bg-white border-white collapsible-header group/item text-custom-500 btn hover:text-custom-700 focus:text-custom-700 active:text-custom-700 dark:bg-zink-700 dark:border-zink-700">
                        Collapsible Link
                    </a>
                    <div class="hidden mt-2 mb-0 collapsible-content card">
                        <div class="card-body">
                            <p>For that very reason, I went on a quest and spoke to many different professional graphic
                                designers and asked them what graphic design tips they live. You've probably heard that
                                opposites attract. The same is true for fonts. Don't be afraid to combine font styles that
                                are different but complementary, like sans serif with serif, short with tall, or decorative
                                with simple. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts
                                ullamco.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
