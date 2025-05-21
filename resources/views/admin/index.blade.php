@extends('admin.layouts.master')
@section('title')
    {{ __('Dashboard') }}
@endsection
@section('content')

    <x-page-title title="{{ __('Dashboard') }}" pagetitle="Dashboard" />

    <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
        <!--end 
        <div class="col-span-12 card 2xl:col-span-4 2xl:row-span-2">
            <div class="card-body">
                <div class="apex-charts">
                </div>
                <div id="mainChart"  class="apex-charts" data-chart-colors='["bg-red-500", "bg-green-500"]'
                    dir="ltr"></div>
            </div>
        </div>end col-->
        {{-- <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                    <i data-lucide="wallet-2"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$prospects->count()}}">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">
                    {{ __('t-prospects') }}
                </p>
            </div>
        </div> --}}

        <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 rounded-full size-14 dark:bg-purple-500/20">
                    <i data-lucide="package"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{ $customers->count() }}">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">
                    {{ __('t-total-customers') }}
                </p>
            </div>
        </div><!--end col-->

        <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-green-500 bg-green-100 rounded-full size-14 dark:bg-green-500/20">
                    <i data-lucide="truck"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{ $candidates->count() }}">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">
                    {{ __('t-total-candidates') }}
                </p>
            </div>
        </div><!--end col-->

        <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-red-500 bg-red-100 rounded-full size-14 dark:bg-red-500/20">
                    <i data-lucide="package-x"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{ $employees->count() }}">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">
                    {{ __('t-total-employees') }}
                </p>
            </div>
        </div><!--end col-->

        <div class="col-span-12 card 2xl:col-span-12">
            <div class="card-body">
                <div class="grid items-center grid-cols-1 gap-3 mb-5 2xl:grid-cols-12">
                    <div class="2xl:col-span-3">
                        <h6 class="text-15">Dernieres Embauche</h6>
                    </div><!--end col-->
                </div><!--end grid-->
                <div class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead
                            class="ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600">
                            <tr class="bg-slate-100 dark:bg-zink-600">
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 ID">
                                    Matricule
                                </th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Name">
                                    {{ __('t-name') }}
                                </th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Role">
                                    {{ __('t-employer') }}
                                </th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Email">
                                    {{ __('t-designation') }}
                                </th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Phone">
                                    {{__('t-status')}}
                                </th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Experience">
                                    {{__('t-location')}}
                                </th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 JoinDate">
                                    {{__('t-created-date')}}
                                </th>
                                <th
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Action">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($hirings as $hiring)
                                <tr>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 ID">
                                        <a href="{{ route('jobs.show', $hiring->job->matricule) }}"
                                            class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">
                                            #{{$hiring->matricule}}
                                        </a>
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Name">
                                        <a href="{{ route('users.show', $hiring->user->id) }}" class="flex items-center gap-3">
                                            
                                            <h6 class="grow">
                                                {{$hiring->user->personne->nom}} {{$hiring->user->personne->postNom}} {{$hiring->user->personne->prenom}}
                                            </h6>
                                        </a>
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Role">
                                        {{$hiring->job->user->customer->name ?? "No name"}} 
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Email">
                                        {{$hiring->job->title}} 
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Phone">
                                        {{$hiring->is_active ? 'Active' : 'Inactive'}}
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Country">
                                        {{$hiring->job->location}}
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 JoinDate">
                                        {{date('d-m-Y', strtotime($hiring->job->created_at))}}
                                    </td>
                                    <td
                                        class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action">
                                        <div class="flex gap-3">
                                            <a class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"
                                                href="{{ route('jobs.show', $hiring->job->matricule) }}"><i data-lucide="eye"
                                                    class="inline-block size-3"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <div class="noresult">
                                    <div class="py-6 text-center">
                                        <i data-lucide="search"
                                            class="size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="mb-0 text-slate-500 dark:text-zink-200">

                                        </p>
                                    </div>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->

    </div><!--end grid-->
@endsection
@push('scripts')
    <!--apexchart js-->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!--dashboard ecommerce init js-->
    <script src="{{ URL::asset('build/js/pages/dashboards-ecommerce.init.js') }}"></script>

    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>

    <!--dashboard analytics init js-->
    <script src="{{ URL::asset('build/js/pages/dashboards-analytics.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
