@extends('layouts.master')
@section('title')
    {{ __('Scroll Hint') }}
@endsection
@push('css')
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
@endpush
@section('content')
    <!-- page title -->
    <x-page-title title="Scroll Hint" pagetitle="Plugins" />

    <div>
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Simple Scroll Hint</h6>
                    <div class="overflow-x-auto js-scrollable">
                        <table class="w-full flex-nowrap">
                            <thead class="ltr:text-left rtl:text-right">
                                <tr>
                                    <th
                                        class="px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500">
                                        ID</th>
                                    <th
                                        class="px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500">
                                        Name</th>
                                    <th
                                        class="px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500">
                                        Position</th>
                                    <th
                                        class="px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500">
                                        Office</th>
                                    <th
                                        class="px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500">
                                        Age</th>
                                    <th
                                        class="px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500">
                                        Start date</th>
                                    <th
                                        class="px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500">
                                        Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        1</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Tiger Nixon</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        System Architect</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Edinburgh</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        61</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        2011-04-25</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        $320,800</td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        2</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Garrett Winters</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Accountant</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Tokyo</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        63</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        2011-07-25</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        $170,750</td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        3</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Ashton Cox</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Junior Technical Author</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        San Francisco</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        66</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        2009-01-12</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        $86,000</td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        4</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Cedric Kelly</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Senior Javascript Developer</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Edinburgh</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        22</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        2012-03-29</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        $433,060</td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        5</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Airi Satou</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Accountant</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Tokyo</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        33</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        2008-11-28</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        $162,700</td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        6</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Brielle Williamson</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        Integration Specialist</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        New York</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        61</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        2012-12-02</td>
                                    <td
                                        class="px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500">
                                        $372,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end grid-->
    </div>
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/libs/scroll-hint/js/scroll-hint.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/plugins-scroll-hint.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
