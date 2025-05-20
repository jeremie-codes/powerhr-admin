@extends('client.layouts.master')
@section('title')
    {{ __('Filter') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Filter" pagetitle="Search" />

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">
                Recherche de Profile
            </h6>
            <form action="{{route('filter.search')}}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
                    <div class="mb-4">
                        <label for="firstNameInput2" class="inline-block mb-2 text-base font-medium">
                            {{ __('t-name') }}
                            
                        </label>
                        <input type="text" id="firstNameInput2"
                            name="name"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter First Name">
                    </div>
                    <div class="mb-4">
                        <label for="lastNameInput2" class="inline-block mb-2 text-base font-medium">
                            {{ __('Role') }}
                            </label>
                        <input type="text" id="lastNameInput2"
                            name="role"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter Last Name">
                    </div>
                    <div class="mb-4">
                        <label for="UsernameInput" class="inline-block mb-2 text-base font-medium">
                            {{ __('Matricule') }}
                            </label>
                        <input type="text" id="UsernameInput"
                            name="matricule"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Username">
                    </div>
                    <div class="mb-4">
                        <label for="cityInput" class="inline-block mb-2 text-base font-medium">City </label>
                        <input type="text" id="cityInput"
                            name="city"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter city">
                    </div>
                    <div class="mb-4">
                        <label for="stateInput" class="inline-block mb-2 text-base font-medium">
                            Salaire Minimum
                        </label>
                        <input type="number" id="cityInput"
                            min="0"
                            name="salary_min"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="$0.00">
                    </div>
                    <div class="mb-4">
                        <label for="stateInput" class="inline-block mb-2 text-base font-medium">
                            Salaire Maximun
                        </label>
                        <input type="number" id="cityInput"
                            min="0"
                            name="salary_max"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="$0.00">
                    </div>
                    <div class="mb-4 lg:col-span-2 xl:col-span-12">
                        <label for="taxApplicable" class="inline-block mb-2 text-base font-medium">
                            Compétence
                        </label>
                        <input
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            id="choices-multiple-groups" name="skills" />
                    </div><!--end col-->
                </div>
                <div class="flex justify-end gap-2">
                    {{-- <button type="button"
                        class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10"><i
                            data-lucide="x" class="inline-block size-4"></i> <span
                            class="align-middle">Cancel</span></button> --}}
                    <button type="submit"
                        class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Submit</button>
                </div>
            </form>
        </div>
    </div>

    @session('results')
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
            <div class="xl:col-span-12">
                <div class="card" id="usersTable">
                    
                    <div class="card-body">
                        <div class="-mx-5 -mb-5 overflow-x-auto">
                            <table class="w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap">
                                <thead class="text-left">
                                    <tr
                                        class="relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">
                                        <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold">
                                            <div class="flex items-center h-full">
                                                <input id="CheckboxAll"
                                                    class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800 cursor-pointer"
                                                    type="checkbox">
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
                                    @forelse (session('results') as $member)
                                        <tr
                                            class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                                <div class="flex items-center h-full">
                                                    <input id="Checkbox1"
                                                        class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800 cursor-pointer"
                                                        type="checkbox">
                                                </div>
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                                @if($member->personne)
                                                <a href="{{route('users.show', $member->id)}}"
                                                    class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600 user-id">
                                                    {{$member->personne->matricule}}
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
                                                            <a href="{{route('users.show', $member->id)}}" class="name">
                                                                @if($member->personne)
                                                                    {{$member->personne->nom}} {{$member->personne->postNom}} {{$member->personne->prenom}}
                                                                @else
                                                                    {{$member->name}}
                                                                @endif
                                                            </a>
                                                        </h6>
                                                        <p class="text-slate-500 dark:text-zink-200">
                                                            @if($member->profile)
                                                                {{$member->profile->title}}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">
                                                @if($member->profile)
                                                    {{$member->profile->location}}
                                                @else
                                                    ---
                                                @endif
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">
                                                {{$member->email}}
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">
                                                @if($member->personne)
                                                {{$member->personne->telephone}}
                                                @endif
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">
                                                {{date('d-m-Y', strtotime($member->created_at))}}
                                            </td>
                                            <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 text-center">
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item bg-slate-100 hover:bg-slate-200 hover:text-slate-500 focus:bg-slate-200 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="{{ route('candidates.show', $member->id) }}">
                                                    <i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i>
                                                </a>
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
                    </div>
                </div><!--end card-->
            </div>
        </div>
    @endsession
    

@endsection
@push('scripts')
    <script src="{{ URL::asset('build/js/pages/form-validation.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
