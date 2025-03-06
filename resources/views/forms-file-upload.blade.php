@extends('layouts.master')
@section('title')
    {{ __('File Upload') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="File Upload" pagetitle="Forms" />

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">Dropzone</h6>
            <div
                class="flex items-center justify-center border rounded-md cursor-pointer bg-slate-100 dropzone border-slate-200 dark:bg-zink-600 dark:border-zink-500">
                <div class="fallback">
                    <input name="file" type="file" multiple="multiple">
                </div>
                <div class="w-full py-5 text-lg text-center dz-message needsclick">
                    <div class="mb-3">
                        <i data-lucide="upload-cloud"
                            class="block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                    </div>

                    <h5 class="mb-0 font-normal text-slate-500 text-15">Drag and drop your files or <a
                            href="#!">browse</a> your files</h5>
                </div>
            </div>

            <ul class="mb-0" id="dropzone-preview">
                <li class="mt-2" id="dropzone-preview-list">
                    <!-- This is used as the file preview template -->
                    <div class="border rounded border-slate-200 dark:border-zink-500">
                        <div class="flex p-2">
                            <div class="shrink-0 me-3">
                                <div class="p-2 rounded-md size-14 bg-slate-100 dark:bg-zink-600">
                                    <img data-dz-thumbnail class="block w-full h-full rounded-md"
                                        src="assets/images/new-document.png" alt="Dropzone-Image">
                                </div>
                            </div>
                            <div class="grow">
                                <div class="pt-1">
                                    <h5 class="mb-1 text-15" data-dz-name>&nbsp;</h5>
                                    <p class="mb-0 text-slate-500 dark:text-zink-200" data-dz-size></p>
                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                </div>
                            </div>
                            <div class="shrink-0 ms-3">
                                <button data-dz-remove
                                    class="px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Delete</button>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div><!--end card-->

    <div class="card">
        <div class="card-body">
            <h6 class="mb-4 text-15">Bordered Dashed Dropzone</h6>
            <div
                class="flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dropzone2 dark:bg-zink-700 dark:border-zink-500">
                <div class="fallback">
                    <input name="file" type="file" multiple="multiple">
                </div>
                <div class="w-full py-5 text-lg text-center dz-message needsclick">
                    <div class="mb-3">
                        <i data-lucide="upload-cloud"
                            class="block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                    </div>

                    <h5 class="mb-0 font-normal text-slate-500 text-15">Drag and drop your files or <a
                            href="#!">browse</a> your files</h5>
                </div>
            </div>

            <ul class="flex flex-wrap mb-0 gap-x-5" id="dropzone-preview2">
                <li class="mt-5" id="dropzone-preview-list2">
                    <!-- This is used as the file preview template -->
                    <div class="border rounded border-slate-200 dark:border-zink-500">
                        <div class="p-2 text-center">
                            <div>
                                <div class="p-2 mx-auto rounded-md size-14 bg-slate-100 dark:bg-zink-600">
                                    <img data-dz-thumbnail class="block w-full h-full rounded-md"
                                        src="assets/images/new-document.png" alt="Dropzone-Image">
                                </div>
                            </div>
                            <div class="pt-3">
                                <h5 class="mb-1 text-15" data-dz-name>&nbsp;</h5>
                                <p class="mb-0 text-slate-500 dark:text-zink-200" data-dz-size></p>
                                <strong class="error text-danger" data-dz-errormessage></strong>
                            </div>
                            <div class="mt-2">
                                <button data-dz-remove
                                    class="px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Delete</button>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div><!--end card-->
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/form-file-upload.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
