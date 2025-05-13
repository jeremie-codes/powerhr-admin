@extends('admin.layouts.master')
@section('title')
    {{ __('t-add-job') }}
@endsection
@push('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ URL::asset('build/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/common.js') }}"></script>
@endpush
@section('content')
    <!-- page title -->
    <x-page-title title="{{ __('t-add-job') }}" pagetitle="HR Management" />

    <div class="card" id="employeeTable">
        <div class="card-body">
            {{-- <div class="flex items-center gap-3 mb-4">
                <h6 class="text-15 grow">Employee ({{$hireds->count()}})</h6>
                <div class="shrink-0">
                    <a href="#!" data-modal-target="addEmployeeModal" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-employee"><i
                            data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add
                            Employee</span></a>
                </div>
            </div> --}}

            <div class="-mx-5 overflow-x-auto px-2">
                <table id="basic_tables" class="display  whitespace-nowrap">
                    <thead class="ltr:text-left rtl:text-right">
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
                    <tbody class="list" id="employeeList">
                        @forelse ($hireds as $hired)
                            <tr>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 ID">
                                    <a href="{{ route('users.show', $hired->user->id) }}"
                                        class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">
                                        {{$hired->user->personne->matricule}}
                                    </a>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Name">
                                    <a href="{{ route('users.show', $hired->user->id) }}" class="flex items-center gap-3">
                                        
                                        <h6 class="grow">
                                            {{$hired->user->personne->nom}} {{$hired->user->personne->postNom}} {{$hired->user->personne->prenom}}
                                        </h6>
                                    </a>
                                </td>

                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Role">
                                    <a href="{{ route('customers.show', $hired->job->user->id) }}">
                                        {{$hired->job->user->customer->name ?? "Non defini"}} 
                                    </a>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Email">
                                    <a href="{{ route('listjobs.show', $hired->job->matricule) }}">
                                        {{$hired->job->title}} 
                                    </a>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Phone">
                                    <span class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded {{$hired->is_active ? 'bg-green-100 text-green-500 dark:bg-green-500/20' : 'bg-red-100 text-red-500 dark:bg-red-500/20'}} border border-transparent dark:border-transparent">
                                        {{$hired->is_active ? 'Active' : 'Inactive'}}
                                    </span>
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Country">
                                    {{$hired->job->location}}
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 JoinDate">
                                    {{date('d-m-Y', strtotime($hired->job->created_at))}}
                                </td>
                                <td
                                    class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action">
                                    <div class="flex gap-3">
                                        <a class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500"
                                            href="{{ route('users.show', $hired->user->id) }}"><i data-lucide="eye"
                                                class="inline-block size-3"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <tr></tr>
                        <div class="text-center w-full py-3">
                            Aucune donnée disponible
                        </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div
            class="fixed sessionSuccess bottom-20 right-10 p-3 pr-12 text-sm text-green-500 border border-transparent rounded-md bg-green-50 dark:bg-green-400/20">
            <button
                class="absolute top-0 bottom-0 right-0 p-3 text-green-200 transition hover:text-green-500 dark:text-green-400/50 dark:hover:text-green-500"><i
                    class="h-5"></i></button>
            <span class="font-bold">{{ session('success') }} !</span>
        </div>

        <script>
            setTimeout(() => {
                document.querySelector('.sessionSuccess').classList.add('hidden')
            }, 5000);
        </script>
    @endif

    @if(session('error'))
        <div
            class="relative sessionError p-3 pr-12 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20">
            <button
                class="absolute top-0 bottom-0 right-0 p-3 text-red-200 transition hover:text-red-500 dark:text-red-400/50 dark:hover:text-red-500"><i
                     class="h-5"></i></button>
            <span class="font-bold">{{ session('error') }} !</span>
        </div>

        <script>
            setTimeout(() => {
                document.querySelector('.sessionSuccess').classList.add('hidden')
            }, 5000);
        </script>
    @endif
    
@endsection
@push('scripts')
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


    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/apps-hr-employee.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
