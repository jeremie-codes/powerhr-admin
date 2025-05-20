@extends('client.layouts.master')
@section('title')
    {{ __('Add New') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Add New" pagetitle="Products" />

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
        <div class="xl:col-span-9">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">
                        {{ __('t-add-job') }}
                    </h6>

                    <form action="{{route('jobs.store')}}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                            <div class="xl:col-span-6">
                                <label for="productNameInput" class="inline-block mb-2 text-base font-medium">
                                    {{ __('t-title') }}
                                </label>
                                <input type="text" id="productNameInput"
                                    name="title"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Job title" required>
                                <p class="mt-1 text-sm text-slate-400 dark:text-zink-200">Do not exceed 20 characters when
                                    entering the product name.</p>
                            </div><!--end col-->
                            <div class="xl:col-span-6">
                                <label for="productCodeInput" class="inline-block mb-2 text-base font-medium">Product
                                    Code</label>
                                @inject('carbon', 'Carbon\Carbon')
                                <input type="text" id="productCodeInput"
                                    name="id_number"
                                    value="{{uniqid()}}"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Product Code" readonly  required>
                                <p class="mt-1 text-sm text-slate-400 dark:text-zink-200">Code will be generated
                                    automatically</p>
                            </div><!--end col-->
                            <div class="xl:col-span-4">
                                <label for="qualityInput" class="inline-block mb-2 text-base font-medium">
                                    {{__('t-salary')}}
                                </label>
                                <div class="flex items-center">
                                    <span
                                        class="inline-block px-3 py-2 border ltr:border-r-0 rtl:border-l-0 border-slate-200 dark:border-zink-500 ltr:rounded-l-md rtl:rounded-r-md">$</span>
                                    <input type="number" id="inputText"
                                        name="salary"
                                        class="ltr:rounded-l-none rtl:rounded-r-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="00.00" required>
                                </div>
                            </div><!--end col-->
                            <div class="xl:col-span-4">
                                <label for="skuInput" class="inline-block mb-2 text-base font-medium">
                                    {{__('t-location')}}
                                </label>
                                <input type="text" id="skuInput"
                                    name="location"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Location" required>
                            </div><!--end col-->
                            <div class="xl:col-span-4">
                                <label for="brandInput" class="inline-block mb-2 text-base font-medium">
                                    {{__('t-duration')}} - {{__('t-month')}}
                                </label>
                                <input type="number" id="brandInput"
                                    name="duration" min="0" value="0"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="0" required>
                                <p class="mt-1 text-sm text-slate-400 dark:text-zink-200">
                                    Laissez 0 pour une durée indéterminée
                                </p>
                            </div><!--end col-->
                            <div class="xl:col-span-4">
                                <label for="categorySelect" class="inline-block mb-2 text-base font-medium">
                                    {{__('t-category')}}
                                </label>
                                <select
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    data-choices name="category_id" id="categorySelect" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div><!--end col-->
                            <div class="xl:col-span-4">
                                <label for="productTypeSelect" class="inline-block mb-2 text-base font-medium">
                                    Contract Type
                                </label>
                                <select
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    data-choices data-choices-search-false name="contract_type" id="productTypeSelect">
                                    <option value="">Select Type</option>
                                    <option value="cdd">CDD</option>
                                    <option value="cdi">CDI</option>
                                    <option value="full-time">Full Time</option>
                                    <option value="part-time">Part Time</option>
                                    <option value="temporary">Temporary</option>
                                </select>
                            </div><!--end col-->
                            <div class="xl:col-span-4">
                                <label for="genderSelect" class="inline-block mb-2 text-base font-medium">
                                    Work Type
                                </label>
                                <select
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    data-choices data-choices-search-false name="work_type" id="genderSelect">
                                    <option value="">Select type</option>
                                    <option value="hybride">Hybride</option>
                                    <option value="on-site">On-site</option>
                                    <option value="remote">Remote</option>
                                </select>
                            </div><!--end col-->
                            <div class="lg:col-span-2 xl:col-span-12">
                                <div>
                                    <label for="productDescription"
                                        class="inline-block mb-2 text-base font-medium">Description</label>
                                    <textarea
                                        name="description"
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        id="productDescription" placeholder="Enter Description" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="xl:col-span-4">
                                <label for="productPrice" class="inline-block mb-2 text-base font-medium">
                                    Place Vacancy
                                </label>
                                <input type="number" id="productPrice"
                                    name="place"
                                    min="1"
                                    value="1"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="0" required>
                            </div><!--end col-->
                            <div class="xl:col-span-4">
                                <label for="publishDateTime" class="inline-block mb-2 text-base font-medium">
                                    Jusqu'à
                                </label>
                                <input type="date" id="publishDateTime"
                                    name="available_until"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Select date & time" data-provider="flatpickr" data-date-format="d M, Y"
                                    data-enable-time required>
                            </div><!--end col-->
                            <div class="lg:col-span-2 xl:col-span-12">
                                <label for="taxApplicable" class="inline-block mb-2 text-base font-medium">
                                    Skills
                                </label>
                                <input type="text" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    id="choices-multiple-groups" name="skills[]" >
                                {{--!
                                <select
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    id="choices-multiple-groups" name="skills[]" data-choices
                                    data-choices-removeItem
                                    data-choices-multiple-groups="true" multiple>
                                        <option value="">Select kills Applicable</option>
                                        @foreach ($skills as $skill)                                    
                                            <option value="{{$skill->name}}">{{$skill->name}}</option>
                                        @endforeach
                                </select> --}}
                            </div><!--end col-->
                        </div><!--end grid-->
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="reset"
                                class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Reset</button>
                            <button type="submit"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                Publish Job
                            </button>
                        </div>
                    </form>
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end grid-->
    
@endsection
@push('scripts')
    <!-- dropzone -->
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/form-file-upload.init.js') }}"></script>
    <!--product create init js-->
    <script src="{{ URL::asset('build/js/pages/apps-ecommerce-product-create.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
