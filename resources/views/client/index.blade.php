@extends('client.layouts.master')
@section('title')
    {{ __('Dashboard') }}
@endsection
@section('content')

    <x-page-title title="{{ __('Dashboard') }}" pagetitle="Dashboards" />

    <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
        <div class="col-span-12 card md:col-span-6 lg:col-span-6 2xl:col-span-3">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                    <i data-lucide="wallet-2"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$jobs->count()}}">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">Total Jobs</p>
            </div>
        </div><!--end col-->
        <div class="col-span-12 card md:col-span-6 lg:col-span-6 2xl:col-span-2">
            <div class="text-center card-body">
                <div
                    class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 rounded-full size-14 dark:bg-purple-500/20">
                    <i data-lucide="package"></i>
                </div>
                <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$candidates->count()}}">0</span></h5>
                <p class="text-slate-500 dark:text-zink-200">Total Candidates</p>
            </div>
        </div><!--end col-->
    </div><!--end grid-->

    {{-- Last candidate recommanded --}}
    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="card" id="usersTable">
                <div class="flex items-center justify-between p-4 border-b dark:border-zink-300/20">
                    <h5 class="text-16">Dernières récommandations</h5>
                </div>
                <div class="card-body">
                    <div class="-mx-5 -mb-5 overflow-x-auto">
                        <table class="w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap">
                            <thead class="text-left">
                                <tr
                                    class="relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">
                                        <div class="flex items-center h-full">
                                            N°
                                        </div>
                                    </th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="user-id">
                                        Matricule</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="name">
                                        {{ __('t-name') }}
                                    </th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="location">
                                        {{__('t-location')}}
                                    </th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="email">
                                        Email</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                        data-sort="phone-number">
                                        {{__('t-phone-number')}}
                                    </th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                        data-sort="joining-date">Joining Date</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @forelse ($lastmembers as $member)
                                    @if ($member->client_approved_at == null)
                                        <tr
                                            class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                                <div class="flex items-center h-full">
                                                    {{ $loop->iteration }}
                                                </div>
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                                @if($member->user->personne)
                                                <a href="{{route('candidates.show', $member->user->id)}}"
                                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">
                                                    {{$member->matricule}}
                                                </a>
                                                @else
                                                    ---
                                                @endif
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                                <div class="flex items-center gap-2">
                                                    <div
                                                        class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800 dark:text-zink-50 dark:bg-zink-600">
                                                        <img src="{{ URL::asset('build/images/users/avatar-2.png') }}"
                                                            alt="" class="h-10 rounded-full">
                                                    </div>
                                                    <div class="grow">
                                                        <h6 class="mb-1">
                                                            <a href="{{route('candidates.show', $member->id)}}" class="name">
                                                                @if($member->user->personne)
                                                                    {{$member->user->personne->nom}} {{$member->user->personne->postNom}} {{$member->user->personne->prenom}}
                                                                @else
                                                                    {{$member->name}}
                                                                @endif
                                                            </a>
                                                        </h6>
                                                        <p class="text-slate-500 dark:text-zink-200">
                                                            @if($member->user->profile)
                                                                {{$member->user->profile->title}}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">
                                                @if($member->user->profile)
                                                    {{$member->user->profile->location ?? '---'}}
                                                @else
                                                    ---
                                                @endif
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">
                                                {{$member->email ?? '---'}}
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">
                                                @if($member->user->personne)
                                                {{$member->user->personne->telephone}}
                                                @endif
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">
                                                {{date('d-m-Y', strtotime($member->created_at))}}
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 text-center last:pr-5">
                                               <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item bg-slate-100 hover:bg-slate-200 hover:text-slate-500 focus:bg-slate-200 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="{{ route('candidates.show', $member->user->id) }}"><i data-lucide="eye"
                                                        class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> </a>
                                            </td>
                                        </tr>
                                    @endif
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
                        <div class="noresult" style="display: none">
                            <div class="py-6 text-center">
                                <i data-lucide="search"
                                    class="size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 199+ users We
                                    did not find any users for you search.</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="flex flex-col items-center mt-8 md:flex-row">
                        <div class="mb-4 grow md:mb-0">
                        </div>
                        <ul class="flex flex-wrap items-center gap-2">
                            {{$lastmembers->links()}}
                        </ul>
                    </div> --}}
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end grid-->
@endsection

@push('scripts')
    <!--apexchart js-->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!--dashboard ecommerce init js-->
    <script src="{{ URL::asset('build/js/pages/dashboards-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
