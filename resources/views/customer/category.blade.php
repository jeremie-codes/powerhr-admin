@extends('layouts.master')
@section('title')
    {{ __('t-admin') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="{{ __('t-category') }}" pagetitle="{{ __('t-category') }}" />

    <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 2xl:grid-cols-12">
        <div class="2xl:col-span-2 2xl:row-span-1">
            <div class="card">
                <div class="flex items-center gap-3 card-body">
                    <div
                        class="flex items-center justify-center size-12 rounded-md text-15 bg-custom-50 text-custom-500 dark:bg-custom-500/20 shrink-0">
                        <i data-lucide="boxes"></i>
                    </div>
                    <div class="grow">
                        <h5 class="mb-1 text-16 counter-value" data-target="{{ $categories->count()}}">0</h5>
                        <p class="text-slate-500 dark:text-zink-200">
                            Catégories
                        </p>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end grid-->

    <div class="card" id="ordersTable">
        <div class="card-body">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
                <!--end col-->
                <div class="lg:col-span-3 lg:col-start-10">
                    <div class="ltr:lg:text-right rtl:lg:text-left">
                        <a href="#!" data-modal-target="addOrderModal" type="button"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                data-lucide="plus" class="inline-block size-4"></i> 
                                <span class="align-middle">
                                    Ajouter une catégorie
                                </span>
                        </a>
                    </div>
                </div>
            </div><!--col grid-->

            <div class="mt-5 overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead class="ltr:text-left rtl:text-right bg-slate-100 dark:bg-zink-600">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200 dark:border-zink-500 dark:text-zink-200 sort"
                                data-sort="order_id">#</th>
                            <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="name">
                                {{ __('t-name') }}
                            </th>
                            <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="email">
                                Description</th>
                            <th class="px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort" data-sort="status">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    {{$loop->iteration}}
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <h6 class="mb-1">
                                        {{ $category?->name }}
                                    </h6>
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 email">
                                    {{ $category?->description }}
                                </td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                    <form action="{{ route('category.remove') }}" method="post">
                                        @csrf
                                        
                                        <input type="hidden" name="id" value="{{ $category?->id }}">
                                        <button type="submit" class="btn px-2.5 py-0.5 text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent inline-flex items-center status">
                                             Supprimer
                                        </button>
                                    </form>
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
                        <i data-lucide="search" class="size-6 mx-auto text-sky-500 fill-sky-100 dark:sky-500/20"></i>
                        <h5 class="mt-2 mb-1">Sorry! No Result Found</h5>
                        <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 299+ orders We did not
                            find any orders for you search.</p>
                    </div>
                </div>
            </div>

        </div>
    </div><!--end card-->
    

    <div id="addOrderModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Add Category</h5>
                <button data-modal-close="addOrderModal"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{route('category.add')}}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="customerNameInput" class="inline-block mb-2 text-base font-medium">
                                {{__('t-name')}}
                            </label>
                            <input type="text" id="customerNameInput"
                                name="name"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Admin name" required>
                        </div>

                        <div class="xl:col-span-12">
                            <label for="amountInput" class="inline-block mb-2 text-base font-medium">
                                {{__('t-email')}}
                            </label>
                            <textarea 
                                name="description"
                                rows="3"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="(optional)" required></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addOrderModal"
                            class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            Add
                        </button>
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
                    <form id="deleteForm" action="{{ route('admin.destroy', 'user_id') }}" method="POST"> <!-- Update action -->
                        @csrf
                        @method('DELETE')
                        <div class="flex justify-center gap-2 mt-6">
                            <button type="reset" data-modal-close="deleteModal"
                                class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>
                            <button type="submit"
                                class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes,
                                Delete It!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <button type="button" data-toast data-toast-text="{{ session('success') }}"
        data-toast-gravity="top" data-toast-position="center" data-toast-className="green"
        data-toast-duration="3000"
        class=" hidden text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">
        Success
    </button>

    <button type="button" data-toast data-toast-text="{{ session('erro') }}" data-toast-gravity="top"
            data-toast-position="center" data-toast-className="red" data-toast-duration="3000"
            class="hidden text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">
            Error
    </button>
@endsection
@push('scripts')
    <script>
        // Function to show the toast notification
        function showToast() {
            const toastButton = document.querySelector('[data-toast]');
            if (toastButton) {
                toastButton.click(); // Simulate a click to show the toast
            }
        }

        // Call showToast after a successful action (e.g., after form submission)
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                showToast();
            @endif
        });
    </script>

    <script>
        function setDeleteId(id) {
            const form = document.getElementById('deleteForm');
            form.action = form.action.replace('user_id', id); // Replace 'user_id' with the actual ID
            // Show the modal (if not already shown)
            const modal = document.getElementById('deleteModal');
            modal.classList.remove('hidden');
        }
    </script>
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!--Ecommerce orders init-->
    <script src="{{ URL::asset('build/js/pages/apps-ecommerce-orders.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
