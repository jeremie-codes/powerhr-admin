@extends('layouts.master')
@section('title')
    {{ __('Form Select') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Form Select" pagetitle="Forms" />

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">Default Select</h6>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">
                <div>
                    <select
                        class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div>
                    <select
                        class="rounded-full form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div>
                    <select
                        class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        disabled>
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">Select Size</h6>

            <div class="grid items-center grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">
                <div>
                    <select
                        class="py-1 pl-3 text-xs pr-7 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div>
                    <select
                        class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div>
                    <select
                        class="py-3 pl-5 pr-8 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 text-15">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </div><!--end card-->

    <h5 class="mb-5 underline">Choices</h5>

    <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Default Single Select</h6>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Set <code
                        class="text-xs text-pink-500 select-all">data-choices</code> attribute to set a default single
                    select.</p>
                <select
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    data-choices name="choices-single-default" id="choices-single-default">
                    <option value="">This is a placeholder</option>
                    <option value="Choice 1">Choice 1</option>
                    <option value="Choice 2">Choice 2</option>
                    <option value="Choice 3">Choice 3</option>
                </select>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Option Groups</h6>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Set <code
                        class="text-xs text-pink-500 select-all">data-choices data-choices-groups</code> attribute to set
                    option group.</p>
                <select
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    id="choices-single-groups" data-choices data-choices-groups data-placeholder="Select City"
                    name="choices-single-groups">
                    <option value="">Choose a city</option>
                    <optgroup label="UK">
                        <option value="London">London</option>
                        <option value="Manchester">Manchester</option>
                        <option value="Liverpool">Liverpool</option>
                    </optgroup>
                    <optgroup label="FR">
                        <option value="Paris">Paris</option>
                        <option value="Lyon">Lyon</option>
                        <option value="Marseille">Marseille</option>
                    </optgroup>
                    <optgroup label="DE" disabled>
                        <option value="Hamburg">Hamburg</option>
                        <option value="Munich">Munich</option>
                        <option value="Berlin">Berlin</option>
                    </optgroup>
                    <optgroup label="US">
                        <option value="New York">New York</option>
                        <option value="Washington" disabled>Washington</option>
                        <option value="Michigan">Michigan</option>
                    </optgroup>
                    <optgroup label="SP">
                        <option value="Madrid">Madrid</option>
                        <option value="Barcelona">Barcelona</option>
                        <option value="Malaga">Malaga</option>
                    </optgroup>
                    <optgroup label="CA">
                        <option value="Montreal">Montreal</option>
                        <option value="Toronto">Toronto</option>
                        <option value="Vancouver">Vancouver</option>
                    </optgroup>
                </select>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Options added via config with no search</h6>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Set <code
                        class="text-xs text-pink-500 select-all">data-choices data-choices-search-false
                        data-choices-removeItem</code></p>
                <select
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    id="choices-single-no-search" name="choices-single-no-search" data-choices data-choices-search-false
                    data-choices-removeItem>
                    <option value="Zero">Zero</option>
                    <option value="One">One</option>
                    <option value="Two">Two</option>
                    <option value="Three">Three</option>
                    <option value="Four">Four</option>
                    <option value="Five">Five</option>
                    <option value="Six">Six</option>
                </select>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Options added via config with no sorting</h6>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Set <code
                        class="text-xs text-pink-500 select-all">data-choices data-choices-sorting-false</code> attribute.
                </p>
                <select
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices
                    data-choices-sorting-false>
                    <option value="Madrid">Madrid</option>
                    <option value="Toronto">Toronto</option>
                    <option value="Vancouver">Vancouver</option>
                    <option value="London">London</option>
                    <option value="Manchester">Manchester</option>
                    <option value="Liverpool">Liverpool</option>
                    <option value="Paris">Paris</option>
                    <option value="Malaga">Malaga</option>
                    <option value="Washington" disabled>Washington</option>
                    <option value="Lyon">Lyon</option>
                    <option value="Marseille">Marseille</option>
                    <option value="Hamburg">Hamburg</option>
                    <option value="Munich">Munich</option>
                    <option value="Barcelona">Barcelona</option>
                    <option value="Berlin">Berlin</option>
                    <option value="Montreal">Montreal</option>
                    <option value="New York">New York</option>
                    <option value="Michigan">Michigan</option>
                </select>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Default Multiple Select</h6>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Set <code
                        class="text-xs text-pink-500 select-all">data-choices multiple</code> attribute.</p>
                <select
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    id="choices-multiple-default" data-choices name="choices-multiple-default" multiple>
                    <option value="Choice 1" selected>Choice 1</option>
                    <option value="Choice 2">Choice 2</option>
                    <option value="Choice 3">Choice 3</option>
                    <option value="Choice 4" disabled>Choice 4</option>
                </select>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">With Remove Button</h6>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Set <code
                        class="text-xs text-pink-500 select-all">data-choices data-choices-removeItem multiple</code>
                    attribute.</p>
                <select
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    id="choices-multiple-remove-button" data-choices data-choices-removeItem
                    name="choices-multiple-remove-button" multiple>
                    <option value="Choice 1" selected>Choice 1</option>
                    <option value="Choice 2">Choice 2</option>
                    <option value="Choice 3">Choice 3</option>
                    <option value="Choice 4">Choice 4</option>
                </select>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Option Groups Multiple</h6>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Set <code
                        class="text-xs text-pink-500 select-all">data-choices data-choices-multiple-groups="true"
                        multiple</code> attribute.</p>
                <select
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    id="choices-multiple-groups" name="choices-multiple-groups" data-choices
                    data-choices-multiple-groups="true" multiple>
                    <option value="">Choose a city</option>
                    <optgroup label="UK">
                        <option value="London">London</option>
                        <option value="Manchester">Manchester</option>
                        <option value="Liverpool">Liverpool</option>
                    </optgroup>
                    <optgroup label="FR">
                        <option value="Paris">Paris</option>
                        <option value="Lyon">Lyon</option>
                        <option value="Marseille">Marseille</option>
                    </optgroup>
                    <optgroup label="DE" disabled>
                        <option value="Hamburg">Hamburg</option>
                        <option value="Munich">Munich</option>
                        <option value="Berlin">Berlin</option>
                    </optgroup>
                    <optgroup label="US">
                        <option value="New York">New York</option>
                        <option value="Washington" disabled>Washington</option>
                        <option value="Michigan">Michigan</option>
                    </optgroup>
                    <optgroup label="SP">
                        <option value="Madrid">Madrid</option>
                        <option value="Barcelona">Barcelona</option>
                        <option value="Malaga">Malaga</option>
                    </optgroup>
                    <optgroup label="CA">
                        <option value="Montreal">Montreal</option>
                        <option value="Toronto">Toronto</option>
                        <option value="Vancouver">Vancouver</option>
                    </optgroup>
                </select>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Set limit values with remove button</h6>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Set <code
                        class="text-xs text-pink-500 select-all">data-choices data-choices-limit="Required Limit"
                        data-choices-removeItem</code> attribute.</p>
                <input
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    id="choices-text-remove-button" data-choices data-choices-limit="3" data-choices-removeItem
                    type="text" value="Task-1">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Unique values only, no pasting</h6>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Set <code
                        class="text-xs text-pink-500 select-all">data-choices data-choices-text-unique-true</code>
                    attribute.</p>
                <input
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    id="choices-text-unique-values" data-choices data-choices-text-unique-true type="text"
                    value="Project-A, Project-B">
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-1 text-15">Disabled</h6>
                <p class="mb-4 text-slate-500 dark:text-zink-200">Set <code
                        class="text-xs text-pink-500 select-all">data-choices data-choices-text-disabled-true</code>
                    attribute.</p>
                <input
                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                    id="choices-text-disabled" data-choices data-choices-text-disabled-true type="text"
                    value="josh@joshuajohnson.co.uk, joe@bloggs.co.uk">
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
