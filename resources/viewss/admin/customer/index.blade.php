@extends('admin.layouts.master')
@section('title')
    {{ __('t-customer') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="{{ __('t-customer') }}" pagetitle="{{ __('t-customer') }}" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="card" id="usersTable">
                <div class="card-body">
                    <div class="flex items-center">
                        <h6 class="text-15 grow">{{ __('t-customer') }}</h6>

                    </div>
                </div>

                <div class="card-body">
                    <div class="-mx-5 -mb-5 overflow-x-auto">
                        <table class="w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap">
                            <thead class="text-left">
                                <tr
                                    class="relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="name">
                                        {{ __('t-name') }}
                                    </th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="location">
                                        Location</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="email">
                                        Email</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                        data-sort="phone-number">
                                        {{ __('t-phone-number') }}
                                    </th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort"
                                        data-sort="joining-date">Joining Date</th>
                                    <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="status">
                                        Status</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @forelse ($customers as $customer)
                                    <tr
                                        class="relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600">
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5">
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="flex items-center justify-center size-10 font-medium rounded-full shrink-0 bg-slate-200 text-slate-800 dark:text-zink-50 dark:bg-zink-600">
                                                    <img src="{{ $customer?->customer?->logo }}" alt=""
                                                        class="h-10 rounded-full">
                                                </div>
                                                <div class="grow">
                                                    <h6 class="mb-1">
                                                        <a href="{{ route('customers.show', $customer->id) }}"
                                                            class="name">
                                                            {{ $customer?->customer?->name ?? "Undefined" }}
                                                        </a>
                                                    </h6>
                                                    <p class="text-slate-500 dark:text-zink-200">
                                                        {{ $customer?->customer?->activity ?? "Undefined" }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 location">
                                            {{ $customer?->customer?->city ?? "Undefined" }}
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 email">
                                            {{ $customer?->customer?->contact_email ?? "Undefined" }}
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 phone-number">
                                            {{ $customer?->customer?->contact_phone ?? "Undefined" }}
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 joining-date">
                                            {{ date('d-m-Y', strtotime($customer?->customer?->created_at)) ?? "Undefined" }}
                                        </td>
                                        <td class="px-3.5 py-2.5 first:pl-5 last:pr-5"><span
                                            class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent inline-flex items-center status">
                                            <i data-lucide="check-circle" class="size-3 mr-1.5"></i> actif </span>
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
                    <div class="flex flex-col items-center mt-8 md:flex-row">
                        <div class="mb-4 grow md:mb-0">
                        </div>
                        <ul class="flex flex-wrap items-center gap-2">
                            {{ $customers->links() }}
                        </ul>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end grid-->

    <div id="addUserModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-300/20">
                <h5 class="text-16">Add User</h5>
                <button data-modal-close="addUserModal"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="mb-3">
                        <label for="userId" class="inline-block mb-2 text-base font-medium">User ID</label>
                        <input type="text" id="userId"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            disabled value="#TW1500004" required>
                    </div>
                    <div class="mb-3">
                        <label for="joiningDateInput" class="inline-block mb-2 text-base font-medium">Joining Date</label>
                        <input type="text" id="joiningDateInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y">
                    </div>
                    <div class="mb-3">
                        <label for="userNameInput" class="inline-block mb-2 text-base font-medium">Name</label>
                        <input type="text" id="userNameInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter name" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="inline-block mb-2 text-base font-medium">Email</label>
                        <input type="email" id="emailInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumberInput" class="inline-block mb-2 text-base font-medium">Phone Number</label>
                        <input type="text" id="phoneNumberInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="12345 67890" required>
                    </div>
                    <div class="mb-3">
                        <label for="statusSelect" class="inline-block mb-2 text-base font-medium">Status</label>
                        <select class="form-input border-slate-300 focus:outline-none focus:border-custom-500" data-choices
                            data-choices-search-false name="statusSelect" id="statusSelect">
                            <option value="">Select Status</option>
                            <option value="Verified">Verified</option>
                            <option value="Waiting">Waiting</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="locationInput" class="inline-block mb-2 text-base font-medium">Location</label>
                        <input type="text" id="locationInput"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Location" required>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addDocuments"
                            class="text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500">Cancel</button>
                        <button type="submit"
                            class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add
                            User</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!--end add user-->

    <div id="deleteModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteModal"
                        class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i
                            data-lucide="x" class="size-5"></i></button>
                </div>
                <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                    <div class="flex justify-center gap-2 mt-6">
                        <button type="reset" data-modal-close="deleteModal"
                            class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>
                        <button type="submit"
                            class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes,
                            Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@push('scripts')
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <!-- User list init js -->
    <script src="{{ URL::asset('build/js/pages/apps-user-list.init.js') }}"></script>



    <script src="{{ URL::asset('build/js/datatables/jquery-3.7.0.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/data-tables.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/data-tables.tailwindcss.min.js') }}"></script>
    <!--buttons dataTables-->
    <script src="{{ URL::asset('build/js/datatables/datatables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/datatables/buttons.print.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/datatables/datatables.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
