@extends('layouts.master')
@section('title')
    {{ __('Calendar') }}
@endsection
@section('content')

    <!-- page title -->
    <x-page-title title="Calendar" pagetitle="Apps" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
        <div class="xl:col-span-9">
            <div class="card">
                <div class="card-body">
                    <div cursor-pointerid='calendar-container'>
                        <button type="hidden" id="calendarBtn" data-modal-target="event-modal"></button>
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="xl:col-span-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Draggable Events</h6>
                    <div id='external-events' class="flex flex-col gap-3 mb-4">
                        <button data-modal-target="event-modal"
                            data-class="transition-all w-[100%] text-custom-500 !bg-custom-100 dark:!bg-custom-500/20 border-none rounded-md py-1.5 px-3"
                            class='external-event fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event text-custom-500 btn bg-custom-100 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20'>
                            My Event 1
                        </button>
                        <button
                            data-class="text-green-500 w-[100%] !bg-green-100 dark:!bg-green-500/20 border-none rounded-md py-1.5 px-3"
                            class='text-green-500 bg-green-100 external-event fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event btn hover:text-white hover:bg-green-600 focus:text-white focus:bg-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:ring active:ring-green-100 dark:bg-green-500/20 dark:text-green-4000'>
                            My Event 2
                        </button>
                        <button
                            data-class="text-yellow-500 w-[100%] !bg-yellow-100 dark:!bg-yellow-500/20 border-none rounded-md py-1.5 px-3"
                            class='text-yellow-500 bg-yellow-100 external-event fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event btn hover:text-white hover:bg-yellow-600 focus:text-white focus:bg-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:ring active:ring-yellow-100 dark:bg-yellow-500/20 dark:text-yellow-500 dark:hover:bg-yellow-500 dark:hover:text-white dark:focus:bg-yellow-500 dark:focus:text-white dark:active:bg-yellow-500 dark:active:text-white dark:ring-yellow-400/20'>
                            My Event 3
                        </button>
                        <button
                            data-class="text-sky-500 w-[100%] !bg-sky-100 dark:!bg-sky-500/20 border-none rounded-md py-1.5 px-3"
                            class='external-event fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event text-sky-500 btn bg-sky-100 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 focus:ring focus:ring-sky-100 active:text-white active:bg-sky-600 active:ring active:ring-sky-100 dark:bg-sky-500/20 dark:text-sky-400 dark:hover:bg-sky-500 dark:hover:text-white dark:focus:bg-sky-500 dark:focus:text-white dark:active:bg-sky-500 dark:active:text-white dark:ring-sky-400/20'>
                            My Event 4
                        </button>
                        <button
                            data-class="w-[100%] text-purple-500 !bg-purple-100 dark:!bg-purple-500/20 border-none rounded-md py-1.5 px-3"
                            class='text-purple-500 bg-purple-100 external-event fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event btn hover:text-white hover:bg-purple-600 focus:text-white focus:bg-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:ring active:ring-purple-100 dark:bg-purple-500/20 dark:text-purple-500 dark:hover:bg-purple-500 dark:hover:text-white dark:focus:bg-purple-500 dark:focus:text-white dark:active:bg-purple-500 dark:active:text-white dark:ring-purple-400/20'>
                            My Event 5
                        </button>
                        <div>
                            <label for="locale-select" class="inline-block mb-2 text-base font-medium">Locale:</label>
                            <select id="locale-select" data-choices data-choices-search-false
                                class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                onchange="changeLocale()">
                                <option value="en">English</option>
                                <option value="es">Español</option>
                                <option value="fr">Français</option>
                                <option value="it">Italiana</option>
                                <option value="ru">русский</option>

                                <!-- Add more locales as needed -->
                            </select>
                        </div>
                        <div class="flex items-center gap-2">
                            <input id='drop-remove'
                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                type="checkbox">
                            <label for="drop-remove" class="align-middle cursor-pointer">
                                Remove after drop
                            </label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input id='businessCalendar'
                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                type="checkbox">
                            <label for="businessCalendar" class="align-middle cursor-pointer">
                                Business Hours & Week
                            </label>
                        </div>

                        <div class="flex items-center gap-2">
                            <input id='weekNumberCalendar'
                                class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                type="checkbox">
                            <label for="weekNumberCalendar" class="align-middle cursor-pointer">
                                Week Number
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end grid-->


    <div id="event-modal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16" id="modal-title">Add Event</h5>
                <button data-modal-close="event-modal" id="eventModal-close"
                    class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form class="needs-validation" name="event-form" id="form-event" autocomplete="off">
                    <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="event-title" class="inline-block mb-2 text-base font-medium">Event Name</label>
                            <input type="text" id="event-title"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Event name" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="event-category" class="inline-block mb-2 text-base font-medium">Category</label>
                            <select required
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                name="event-category" id="event-category">
                                <option>Select Category</option>
                                <option selected
                                    value="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event transition-all w-[100%] text-custom-500 !bg-custom-100 dark:!bg-custom-500/20 border-none rounded-md py-1.5 px-3">
                                    Primary</option>
                                <option
                                    value="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event text-green-500 w-[100%] !bg-green-100 dark:!bg-green-500/20 border-none rounded-md py-1.5 px-3">
                                    Success</option>
                                <option
                                    value="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event text-sky-500 w-[100%] !bg-sky-100 dark:!bg-sky-500/20 border-none rounded-md py-1.5 px-3">
                                    Info</option>
                                <option
                                    value="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event text-yellow-500 w-[100%] !bg-yellow-100 dark:!bg-yellow-500/20 border-none rounded-md py-1.5 px-3">
                                    Warning</option>
                                <option
                                    value="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event w-[100%] text-purple-500 !bg-purple-100 dark:!bg-purple-500/20 border-none rounded-md py-1.5 px-3">
                                    Purple</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="event-modal"
                            class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                        <button type="reset" id="btn-delete-event" data-modal-close="event-modal"
                            class="hidden text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Delete</button>
                        <button type="submit" id="btn-save-event"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add
                            Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end event modal -->
@endsection
@push('scripts')
    <!-- calendar min js -->
    <script src="{{ URL::asset('build/libs/fullcalendar/index.global.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/apps-calendar.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
