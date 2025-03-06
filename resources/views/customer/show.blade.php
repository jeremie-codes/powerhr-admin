@extends('layouts.master')
@section('title')
    {{ __('Account') }}
@endsection
@section('content')
    <div class="mt-1 -ml-3 -mr-3 rounded-none card">
        <div class="card-body !px-2.5">
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12">
                <div class="lg:col-span-2 2xl:col-span-1">
                    <div
                        class="relative inline-block size-20 rounded-full shadow-md bg-slate-100 profile-user xl:size-28">
                        <img src="{{$customer->customer->logo}}" alt=""
                            class="object-cover border-0 rounded-full img-thumbnail user-profile-image">
                        
                    </div>
                </div><!--end col-->
                <div class="lg:col-span-10 2xl:col-span-9">
                    <h5 class="mb-1">{{$customer->customer->name}} <i data-lucide="badge-check"
                            class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i></h5>
                    <div class="flex gap-3 mb-4">
                        <p class="text-slate-500 dark:text-zink-200"><i data-lucide="user-circle"
                                class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                {{$customer->customer->activity}}</p>
                        <p class="text-slate-500 dark:text-zink-200"><i data-lucide="map-pin"
                                class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                {{$customer->customer->city}}</p>
                    </div>
                    <ul
                        class="flex flex-wrap gap-3 mt-4 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                        <li class="px-5">
                            <h5>{{$customer->customer->contact_email}}</h5>
                            <p class="text-slate-500 dark:text-zink-200">Mail</p>
                        </li>
                        <li class="px-5">
                            <h5>{{$customer->customer->contact_phone}}</h5>
                            <p class="text-slate-500 dark:text-zink-200">Phone</p>
                        </li>
                        <li class="px-5">
                            <a href="{{$customer->customer->website}}" > Lien</a>
                            <p class="text-slate-500 dark:text-zink-200">Site Web</p>
                        </li>
                    </ul>
                </div>
            </div><!--end grid-->
        </div>
        <div class="card-body !px-2.5 !py-0">
            <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                <li class="group active">
                    <a href="javascript:void(0);" data-tab-toggle data-target="overviewTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">
                        Vue
                    </a>
                </li>
            </ul>
        </div>
    </div><!--end card-->

    <div class="tab-content">
        <div class="block tab-pane" id="overviewTabs">
            <div class="grid grid-cols-1 gap-x-5 2xl:grid-cols-12">
                <div class="2xl:col-span-9"><!--end grid-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-3 text-15">Overview</h6>
                            <p class="mb-2 text-slate-500 dark:text-zink-200">
                                {{$customer->customer->description}}
                            </p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Personal Information</h6>
                            <div class="overflow-x-auto">
                                <table class="w-full ltr:text-left rtl:ext-right">
                                    <tbody>
                                        <tr>
                                            <th class="py-2 font-semibold ps-0" scope="row">Referent</th>
                                            <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                {{$customer->customer->contact_name}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end tab pane-->
    </div><!--end tab content-->


    <!--Add Documents Modal-->
    <div id="addDocuments" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                <h5 class="text-16">Add Document</h5>
                <button data-modal-close="addDocuments"
                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                        data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="mb-3">
                        <label for="documentsName" class="inline-block mb-2 text-base font-medium">Documents
                            Name</label>
                        <input type="text" id="documentsName"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="documentsType" class="inline-block mb-2 text-base font-medium">Type</label>
                        <select class="form-input border-slate-300 focus:outline-none focus:border-custom-500"
                            data-choices name="documentsType" id="documentsType">
                            <option value="">Documents Type</option>
                            <option value="Docs">Docs</option>
                            <option value="SCSS">SCSS</option>
                            <option value="Javascript">Javascript</option>
                            <option value="SVG">SVG</option>
                            <option value="MP4">MP4</option>
                            <option value="PNG">PNG</option>
                            <option value="HTML">HTML</option>
                        </select>
                    </div>
                    <div>
                        <label class="inline-block mb-2 text-base font-medium">Upload File</label>
                        <div
                            class="flex items-center justify-center border rounded-md cursor-pointer dropzone border-slate-200 dark:border-zink-500">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                <div class="mb-3">
                                    <i data-lucide="upload-cloud"
                                        class="block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                </div>

                                <h5 class="mb-0 font-normal text-slate-500 dark:text-zink-200 text-15">Drag and drop your
                                    files or <a href="#!">browse</a> your files</h5>
                            </div>
                        </div>

                        <ul class="mb-0" id="dropzone-preview">
                            <li class="mt-2" id="dropzone-preview-list">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded">
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
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addDocuments"
                            class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">Cancel</button>
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add
                            Document</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- apexcharts js -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/pages-account.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
