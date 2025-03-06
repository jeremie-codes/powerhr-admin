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
                        <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                            class="object-cover border-0 rounded-full img-thumbnail user-profile-image">
                        <div
                            class="absolute bottom-0 flex items-center justify-center size-8 rounded-full ltr:right-0 rtl:left-0 profile-photo-edit">
                            <input id="profile-img-file-input" type="file" class="hidden profile-img-file-input">
                            <label for="profile-img-file-input"
                                class="flex items-center justify-center size-8 bg-white rounded-full shadow-lg cursor-pointer dark:bg-zink-600 profile-photo-edit">
                                <i data-lucide="image-plus"
                                    class="size-4 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                            </label>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="lg:col-span-10 2xl:col-span-9">
                    <h5 class="mb-1">
                        @if($user->personne)
                            {{$user->personne->nom}} {{$user->personne->postNom}} {{$user->personne->prenom}}
                        @else
                            {{$user->name}}
                        @endif
                        <i data-lucide="badge-check"
                            class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i></h5>
                    <div class="flex gap-3 mb-4">
                        @if($user->profile)
                            <p class="text-slate-500 dark:text-zink-200"><i data-lucide="user-circle"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                {{$user->profile->title}}
                            </p>
                        @endif
                        @if($user->personne)
                            <p class="text-slate-500 dark:text-zink-200"><i data-lucide="map-pin"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                {{$user->personne->ville}}, {{$user->personne->nationalite}}
                            </p>
                        @endif
                    </div>
                    @if($user->personne)
                        <ul
                            class="flex flex-wrap gap-3 mt-4 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                            <li class="px-5">
                                <h5>
                                    {{$user->personne->matricule}}
                                </h5>
                                <p class="text-slate-500 dark:text-zink-200">Matricule</p>
                            </li>
                            <li class="px-5">
                                <h5>
                                    {{$user->personne->telephone}}
                                </h5>
                                <p class="text-slate-500 dark:text-zink-200">{{__('t-phone-number')}}</p>
                            </li>
                            <li class="px-5">
                                <h5>
                                    @if($user->personne->sexe == 'male')
                                        M
                                    @else
                                        F
                                    @endif
                                </h5>
                                <p class="text-slate-500 dark:text-zink-200">{{__('t-gender')}}</p>
                            </li>
                            <li class="px-5">
                                <h5>
                                    {{$view}}
                                </h5>
                                <p class="text-slate-500 dark:text-zink-200">{{__('t-view')}}</p>
                            </li>
                            @if($user->ratings)
                                <li class="px-5">
                                    <h5>
                                        {{$user->ratings->rating}}
                                    </h5>
                                    <p class="text-slate-500 dark:text-zink-200">{{__('t-rating')}}</p>
                                </li>
                            @endif
                            
                        </ul>
                    @endif
                    @if ($user->profile)
                        <p class="mt-4 text-slate-500 dark:text-zink-200">
                            {{$user->profile->bio}}
                        </p>
                        <div class="flex gap-2 mt-4">
                            @if($user->profile->facebook)
                                <a href="{{$user->profile->facebook}}"
                                    class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30">
                                    <i data-lucide="facebook" class="size-4"></i>
                                </a>
                            @endif
                            @if($user->profile->twitter)
                                <a href="{{$user->profile->twitter}}"
                                    class="flex items-center justify-center text-pink-500 transition-all duration-200 ease-linear bg-pink-100 rounded size-9 hover:bg-pink-200 dark:bg-pink-500/20 dark:hover:bg-pink-500/30">
                                    <i data-lucide="instagram" class="size-4"></i>
                                </a>
                            @endif
                            @if($user->profile->linkedin)
                                <a href="{{$user->profile->linkedin}}"
                                    class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30">
                                    <i data-lucide="linkedin" class="size-4"></i>
                                </a>
                            @endif
                            @if($user->profile->website)
                                <a href="{{$user->profile->website}}"
                                    class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded size-9 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30">
                                    <i data-lucide="globe" class="size-4"></i>
                                </a>
                            @endif
                            @if($user->profile->github)
                                <a href="{{$user->profile->github}}"
                                    class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-slate-500 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                    <i data-lucide="github" class="size-4"></i>
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
                <div class="lg:col-span-12 2xl:col-span-2">
                    <div class="flex gap-2 2xl:justify-end">
                        <a href="mailto:{{$user->email}}"
                            class="flex items-center justify-center size-[37.5px] p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i
                                data-lucide="mail" class="size-4"></i></a>
                        <button type="button" data-modal-target="addDocuments"
                            class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            {{__('t-rating')}}
                        </button>
                    </div>
                </div>
            </div><!--end grid-->
        </div>
        <div class="card-body !px-2.5 !py-0">
            <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                <li class="group active">
                    <a href="javascript:void(0);" data-tab-toggle data-target="overviewTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">
                        {{__('t-overview')}}
                    </a>
                </li>
                <li class="group">
                    <a href="javascript:void(0);" data-tab-toggle data-target="documentsTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">
                        Skills
                    </a>
                </li>
                <li class="group">
                    <a href="javascript:void(0);" data-tab-toggle data-target="projectsTabs"
                        class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">
                        {{ __('t-projects') }}
                    </a>
                </li>
            </ul>
        </div>
    </div><!--end card-->

    <div class="tab-content">
        <div class="block tab-pane" id="overviewTabs">
            <div class="grid grid-cols-1 gap-x-5 2xl:grid-cols-12">
                <div class="2xl:col-span-9">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-3 text-15">
                                {{ __('t-overview') }}
                            </h6>
                            @if ($user->profile)
                                <p class="mb-2 text-slate-500 dark:text-zink-200">
                                    {{$user->profile->bio}}
                                </p>  
                            @endif
                            
                        </div>
                    </div>
                </div><!--end col-->
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">
                                {{__('t-personnal-informations')}}
                            </h6>
                            <div class="overflow-x-auto">
                                @if ($user->profile && $user->personne)
                                    <table class="w-full ltr:text-left rtl:ext-right">
                                        <tbody>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">
                                                    {{__('t-designation')}}
                                                </th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    @if($user->profile)
                                                        {{$user->profile->title}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">
                                                    {{__('t-phone-number')}}
                                                </th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    @if($user->personne)
                                                        {{$user->personne->telephone}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">
                                                    {{__('t-birth-date')}}
                                                </th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    @if($user->personne)
                                                        {{$user->personne->dateNaissance}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">Website</th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    <a
                                                        href="{{$user->profile->website}}" target="_blank"
                                                        class="text-custom-500">
                                                        {{$user->profile->website}}
                                                    </a>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">Email</th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    {{$user->email}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="py-2 font-semibold ps-0" scope="row">
                                                    {{__('t-location')}}
                                                </th>
                                                <td class="py-2 text-right text-slate-500 dark:text-zink-200">
                                                    {{$user->profile->ville}}, 
                                                    {{$user->profile->adresse}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="pt-2 font-semibold ps-0" scope="row">
                                                    {{__('t-joining-date')}}
                                                </th>
                                                <td class="pt-2 text-right text-slate-500 dark:text-zink-200">
                                                    {{date('d-m-Y', strtotime($user->created_at))}}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @else
                                    <p class="mb-2 text-slate-500 dark:text-zink-200">
                                        {{__('t-overview-no-profile')}}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">
                                {{__('t-overview-earning')}}
                            </h6>

                            <div class="divide-y divide-slate-200 dark:divide-zink-500">
                                <div class="flex items-center gap-3 pb-3">
                                    <div
                                        class="flex items-center justify-center size-12 rounded-full bg-slate-100 dark:bg-zink-600">
                                        <i data-lucide="wallet" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-lg">$245.98</h6>
                                        <p class="text-slate-500 dark:text-zink-200">
                                            {{__('t-max-earning')}}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 py-3">
                                    <div
                                        class="flex items-center justify-center size-12 rounded-full bg-slate-100 dark:bg-zink-600">
                                        <i data-lucide="goal" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-lg">$125.23</h6>
                                        <p class="text-slate-500 dark:text-zink-200">
                                            {{__('t-min-earning')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end grid-->
<!--end grid-->
        </div><!--end tab pane-->
        <div class="hidden tab-pane" id="documentsTabs">
            <div class="flex items-center gap-3 mb-4">
                <h5 class="underline grow">Documents</h5>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full align-middle border-separate whitespace-nowrap border-spacing-y-1">
                    <thead class="text-left bg-white dark:bg-zink-700">
                        <tr>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">
                                <div class="flex items-center h-full">
                                    <input id="Checkbox1"
                                        class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                </div>
                            </th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Documents Type</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Documents Name</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">File Size</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Modify Date</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Uploaded</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Status</th>
                            <th class="px-3.5 py-2.5 font-semibold border-b border-transparent text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <div class="flex items-center h-full">
                                    <input id="Checkbox2"
                                        class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                </div>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">Docs</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">Tailwick Docs File</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">2.5MB</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">15 Feb, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">Admin</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent"><span
                                    class="ppx-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Successful</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="eye" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="file-edit" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="arrow-down-to-line" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="trash-2" class="size-3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <div class="flex items-center h-full">
                                    <input id="Checkbox2"
                                        class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                </div>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">PSD</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">Tailwick Design Kit.psd</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">234.87 MB</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">29 Jan, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">Themesdesign</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent"><span
                                    class="ppx-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Successful</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="eye" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="file-edit" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="arrow-down-to-line" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="trash-2" class="size-3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <div class="flex items-center h-full">
                                    <input id="Checkbox2"
                                        class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                </div>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">SVG</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">home Pattern Wave.svg</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">3.87 MB</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">24 Sept, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">Admin</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent"><span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent">Error</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="eye" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="file-edit" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="arrow-down-to-line" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="trash-2" class="size-3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <div class="flex items-center h-full">
                                    <input id="Checkbox2"
                                        class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                </div>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">SCSS</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">tailwind.scss</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">0.100 KB</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">03 April, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">Paula</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent"><span
                                    class="ppx-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Successful</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="eye" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="file-edit" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="arrow-down-to-line" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="trash-2" class="size-3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-zink-700">
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <div class="flex items-center h-full">
                                    <input id="Checkbox2"
                                        class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800"
                                        type="checkbox" value="">
                                </div>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">MP4</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">Tailwick Guide Video.mp4</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">149.33 MB</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">12 Nov, 2023</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">Themesdesign</td>
                            <td class="px-3.5 py-2.5 border-y border-transparent"><span
                                    class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500 dark:bg-yellow-500/20 dark:border-transparent">Pending</span>
                            </td>
                            <td class="px-3.5 py-2.5 border-y border-transparent">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="eye" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="file-edit" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="arrow-down-to-line" class="size-3"></i></a>
                                    <a href="#!"
                                        class="flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i
                                            data-lucide="trash-2" class="size-3"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col items-center gap-4 mt-4 mb-4 md:flex-row">
                <div class="grow">
                    <p class="text-slate-500 dark:text-zink-200">Showing <b>6</b> of <b>18</b> Results</p>
                </div>
                <ul class="flex flex-wrap items-center gap-2 shrink-0">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div><!--end tab pane-->
        <div class="hidden tab-pane" id="projectsTabs">
            <div class="flex items-center gap-3 mb-4">
                <h5 class="underline grow">Projects</h5>
                <div class="shrink-0">
                    <button type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add
                        Project</button>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 2xl:grid-cols-4">
                <div class="card">
                    <div class="card-body">
                        <div class="flex">
                            <div class="grow">
                                <img src="{{ URL::asset('build/images/brand/adwords.png') }}" alt=""
                                    class="h-11">
                            </div>
                            <div class="shrink-0">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50"
                                        id="projectDropdownmenu1" data-bs-toggle="dropdown"><i
                                            data-lucide="more-horizontal" class="size-4"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                        aria-labelledby="projectDropdownmenu1">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 mr-1"></i> Overview</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="file-edit"
                                                    class="inline-block size-3 mr-1"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="trash-2"
                                                    class="inline-block size-3 mr-1"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h6 class="mb-1 text-16"><a href="#!">Chat App</a></h6>
                            <p class="text-slate-500 dark:text-zink-200">Allows you to communicate with your customers in
                                web chat rooms.</p>
                        </div>
                        <div
                            class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                            <div class="px-3 grow">
                                <h6 class="mb-1">16 July, 2023</h6>
                                <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                            </div>
                            <div class="px-3 grow">
                                <h6 class="mb-1">$8,740.00</h6>
                                <p class="text-slate-500 dark:text-zink-200">Budget</p>
                            </div>
                        </div>
                        <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                            <div class="h-1.5 rounded-full bg-custom-500" style="width: 25%"></div>
                        </div>
                    </div>
                </div><!--end card & col-->
                <div class="card">
                    <div class="card-body">
                        <div class="flex">
                            <div class="grow">
                                <img src="{{ URL::asset('build/images/brand/app-store.png') }}" alt=""
                                    class="h-11">
                            </div>
                            <div class="shrink-0">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50"
                                        id="projectDropdownmenu2" data-bs-toggle="dropdown"><i
                                            data-lucide="more-horizontal" class="size-4"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                        aria-labelledby="projectDropdownmenu2">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 mr-1"></i> Overview</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="file-edit"
                                                    class="inline-block size-3 mr-1"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="trash-2"
                                                    class="inline-block size-3 mr-1"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h6 class="mb-1 text-16"><a href="#!">Business Template - UI/UX design</a></h6>
                            <p class="text-slate-500 dark:text-zink-200">UX design process is iterative and non-linear,
                                includes a lot of research.</p>
                        </div>
                        <div
                            class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                            <div class="px-3 grow">
                                <h6 class="mb-1">28 Nov, 2023</h6>
                                <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                            </div>
                            <div class="px-3 grow">
                                <h6 class="mb-1">$10,254.00</h6>
                                <p class="text-slate-500 dark:text-zink-200">Budget</p>
                            </div>
                        </div>
                        <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                            <div class="h-1.5 rounded-full bg-sky-500" style="width: 61%"></div>
                        </div>
                    </div>
                </div><!--end card & col-->
                <div class="card">
                    <div class="card-body">
                        <div class="flex">
                            <div class="grow">
                                <img src="{{ URL::asset('build/images/brand/android.png') }}" alt=""
                                    class="h-11">
                            </div>
                            <div class="shrink-0">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50"
                                        id="projectDropdownmenu3" data-bs-toggle="dropdown"><i
                                            data-lucide="more-horizontal" class="size-4"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                        aria-labelledby="projectDropdownmenu3">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 mr-1"></i> Overview</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="file-edit"
                                                    class="inline-block size-3 mr-1"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="trash-2"
                                                    class="inline-block size-3 mr-1"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h6 class="mb-1 text-16"><a href="#!">ABC Project Customization</a></h6>
                            <p class="text-slate-500 dark:text-zink-200">The process of tailoring the overall project
                                delivery process to meet the requirements.</p>
                        </div>
                        <div
                            class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                            <div class="px-3 grow">
                                <h6 class="mb-1">20 Oct, 2023</h6>
                                <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                            </div>
                            <div class="px-3 grow">
                                <h6 class="mb-1">$9,832.00</h6>
                                <p class="text-slate-500 dark:text-zink-200">Budget</p>
                            </div>
                        </div>
                        <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                            <div class="h-1.5 rounded-full bg-green-500" style="width: 87%"></div>
                        </div>
                    </div>
                </div><!--end card & col-->
                <div class="card">
                    <div class="card-body">
                        <div class="flex">
                            <div class="grow">
                                <img src="{{ URL::asset('build/images/brand/figma.png') }}" alt=""
                                    class="h-11">
                            </div>
                            <div class="shrink-0">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50"
                                        id="projectDropdownmenu4" data-bs-toggle="dropdown"><i
                                            data-lucide="more-horizontal" class="size-4"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                        aria-labelledby="projectDropdownmenu4">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 mr-1"></i> Overview</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="file-edit"
                                                    class="inline-block size-3 mr-1"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="trash-2"
                                                    class="inline-block size-3 mr-1"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h6 class="mb-1 text-16"><a href="#!">Tailwick Design</a></h6>
                            <p class="text-slate-500 dark:text-zink-200">Drawing created with Microsoft Expression Design,
                                a drawing and design program for Windows.</p>
                        </div>
                        <div
                            class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                            <div class="px-3 grow">
                                <h6 class="mb-1">07 Dec, 2023</h6>
                                <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                            </div>
                            <div class="px-3 grow">
                                <h6 class="mb-1">$11,971.00</h6>
                                <p class="text-slate-500 dark:text-zink-200">Budget</p>
                            </div>
                        </div>
                        <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                            <div class="h-1.5 bg-purple-500 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                </div><!--end card & col-->
                <div class="card">
                    <div class="card-body">
                        <div class="flex">
                            <div class="grow">
                                <img src="{{ URL::asset('build/images/brand/gmail.png') }}" alt=""
                                    class="h-11">
                            </div>
                            <div class="shrink-0">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50"
                                        id="projectDropdownmenu5" data-bs-toggle="dropdown"><i
                                            data-lucide="more-horizontal" class="size-4"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                        aria-labelledby="projectDropdownmenu5">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 mr-1"></i> Overview</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="file-edit"
                                                    class="inline-block size-3 mr-1"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="trash-2"
                                                    class="inline-block size-3 mr-1"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h6 class="mb-1 text-16"><a href="#!">HR Management</a></h6>
                            <p class="text-slate-500 dark:text-zink-200">The strategic approach to nurturing and supporting
                                employees and ensuring a positive.</p>
                        </div>
                        <div
                            class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                            <div class="px-3 grow">
                                <h6 class="mb-1">02 Jan, 2024</h6>
                                <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                            </div>
                            <div class="px-3 grow">
                                <h6 class="mb-1">$7,546.00</h6>
                                <p class="text-slate-500 dark:text-zink-200">Budget</p>
                            </div>
                        </div>
                        <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                            <div class="h-1.5 bg-purple-500 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                </div><!--end card & col-->
                <div class="card">
                    <div class="card-body">
                        <div class="flex">
                            <div class="grow">
                                <img src="{{ URL::asset('build/images/brand/meta.png') }}" alt=""
                                    class="h-11">
                            </div>
                            <div class="shrink-0">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50"
                                        id="projectDropdownmenu6" data-bs-toggle="dropdown"><i
                                            data-lucide="more-horizontal" class="size-4"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                        aria-labelledby="projectDropdownmenu6">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 mr-1"></i> Overview</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="file-edit"
                                                    class="inline-block size-3 mr-1"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="trash-2"
                                                    class="inline-block size-3 mr-1"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h6 class="mb-1 text-16"><a href="#!">Finance Apps</a></h6>
                            <p class="text-slate-500 dark:text-zink-200">A personal budget app is a technology solution
                                that is connected.</p>
                        </div>
                        <div
                            class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                            <div class="px-3 grow">
                                <h6 class="mb-1">10 Feb, 2024</h6>
                                <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                            </div>
                            <div class="px-3 grow">
                                <h6 class="mb-1">$13,745.00</h6>
                                <p class="text-slate-500 dark:text-zink-200">Budget</p>
                            </div>
                        </div>
                        <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                            <div class="h-1.5 bg-purple-500 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                </div><!--end card & col-->
                <div class="card">
                    <div class="card-body">
                        <div class="flex">
                            <div class="grow">
                                <img src="{{ URL::asset('build/images/brand/search.png') }}" alt=""
                                    class="h-11">
                            </div>
                            <div class="shrink-0">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50"
                                        id="projectDropdownmenu7" data-bs-toggle="dropdown"><i
                                            data-lucide="more-horizontal" class="size-4"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                        aria-labelledby="projectDropdownmenu7">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 mr-1"></i> Overview</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="file-edit"
                                                    class="inline-block size-3 mr-1"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="trash-2"
                                                    class="inline-block size-3 mr-1"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h6 class="mb-1 text-16"><a href="#!">Mailbox Design</a></h6>
                            <p class="text-slate-500 dark:text-zink-200">An email template is an HTML preformatted email
                                that you can use to create your own.</p>
                        </div>
                        <div
                            class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                            <div class="px-3 grow">
                                <h6 class="mb-1">19 Feb, 2024</h6>
                                <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                            </div>
                            <div class="px-3 grow">
                                <h6 class="mb-1">$9,120.00</h6>
                                <p class="text-slate-500 dark:text-zink-200">Budget</p>
                            </div>
                        </div>
                        <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                            <div class="h-1.5 bg-purple-500 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                </div><!--end card & col-->
                <div class="card">
                    <div class="card-body">
                        <div class="flex">
                            <div class="grow">
                                <img src="{{ URL::asset('build/images/brand/twitter.png') }}" alt=""
                                    class="h-11">
                            </div>
                            <div class="shrink-0">
                                <div class="relative dropdown">
                                    <button
                                        class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50"
                                        id="projectDropdownmenu8" data-bs-toggle="dropdown"><i
                                            data-lucide="more-horizontal" class="size-4"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]"
                                        aria-labelledby="projectDropdownmenu8">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="eye"
                                                    class="inline-block size-3 mr-1"></i> Overview</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="file-edit"
                                                    class="inline-block size-3 mr-1"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                                href="#!"><i data-lucide="trash-2"
                                                    class="inline-block size-3 mr-1"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h6 class="mb-1 text-16"><a href="#!">Banking Management</a></h6>
                            <p class="text-slate-500 dark:text-zink-200">Bank management refers to the process of managing
                                the Bank's statutory activity.</p>
                        </div>
                        <div
                            class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                            <div class="px-3 grow">
                                <h6 class="mb-1">01 March, 2024</h6>
                                <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                            </div>
                            <div class="px-3 grow">
                                <h6 class="mb-1">$24,863.00</h6>
                                <p class="text-slate-500 dark:text-zink-200">Budget</p>
                            </div>
                        </div>
                        <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                            <div class="h-1.5 bg-purple-500 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                </div><!--end card & col-->
            </div><!--end grid-->
            <div class="flex flex-col items-center gap-4 mt-2 mb-4 md:flex-row">
                <div class="grow">
                    <p class="text-slate-500 dark:text-zink-200">Showing <b>8</b> of <b>30</b> Results</p>
                </div>
                <ul class="flex flex-wrap items-center gap-2 shrink-0">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevrons-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevrons-right"></i></a>
                    </li>
                </ul>
            </div>
        </div><!--end tab pane-->
        <div class="hidden tab-pane" id="followersTabs">
            <h5 class="mb-4 underline">Followers</h5>

            <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-x-5">
                <div class="relative card">
                    <div class="card-body">
                        <p
                            class="absolute inline-block px-5 py-1 text-xs ltr:left-0 rtl:right-0 text-custom-600 bg-custom-100 dark:bg-custom-500/20 top-5 ltr:rounded-e rtl:rounded-l">
                            Executive Operations</p>
                        <div class="flex items-center justify-end">
                            <p class="text-slate-500 dark:text-zink-200">Doj : 15 Jan, 2023</p>
                        </div>
                        <div class="mt-4 text-center">
                            <div class="flex justify-center">
                                <div class="size-20 overflow-hidden rounded-full bg-slate-100">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <a href="#!">
                                <h4 class="mt-4 mb-2 font-semibold text-16">Ralaphe Flores </h4>
                            </a>
                            <div class="text-slate-500 dark:text-zink-200">
                                <p class="mb-1">floral12@tailwick.com</p>
                                <p>+213 617 219 6245</p>
                                <p
                                    class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">
                                    Exp. : 1.5 years</p>
                                <h4 class="text-15 text-custom-500">Salary : $463.42 <span
                                        class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></h4>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->
                <div class="relative card">
                    <div class="card-body">
                        <p
                            class="absolute inline-block px-5 py-1 text-xs text-green-600 bg-green-100 ltr:left-0 rtl:right-0 dark:bg-green-500/20 top-5 ltr:rounded-e rtl:rounded-l">
                            Project Manager</p>
                        <div class="flex items-center justify-end">
                            <p class="text-slate-500 dark:text-zink-200">Doj : 29 Feb, 2023</p>
                        </div>
                        <div class="mt-4 text-center">
                            <div class="flex justify-center">
                                <div class="size-20 overflow-hidden rounded-full bg-slate-100">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <a href="#!">
                                <h4 class="mt-4 mb-2 font-semibold text-16">James Lash </h4>
                            </a>
                            <div class="text-slate-500 dark:text-zink-200">
                                <p class="mb-1">jameslash@tailwick.com</p>
                                <p>+210 85 383 2388</p>
                                <p
                                    class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">
                                    Exp. : 0.5 years</p>
                                <h4 class="text-15 text-custom-500">Salary : $701.77 <span
                                        class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></h4>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->
                <div class="relative card">
                    <div class="card-body">
                        <p
                            class="absolute inline-block px-5 py-1 text-xs ltr:left-0 rtl:right-0 text-sky-600 bg-sky-100 dark:bg-sky-500/20 top-5 ltr:rounded-e rtl:rounded-l">
                            React Developer</p>
                        <div class="flex items-center justify-end">
                            <p class="text-slate-500 dark:text-zink-200">Doj : 04 March, 2023</p>
                        </div>
                        <div class="mt-4 text-center">
                            <div class="flex justify-center">
                                <div class="size-20 overflow-hidden rounded-full bg-slate-100">
                                    <img src="{{ URL::asset('build/images/users/avatar-4.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <a href="#!">
                                <h4 class="mt-4 mb-2 font-semibold text-16">Angus Garnsey</h4>
                            </a>
                            <div class="text-slate-500 dark:text-zink-200">
                                <p class="mb-1">angusgarnsey@tailwick.com</p>
                                <p>+210 41521 1325</p>
                                <p
                                    class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">
                                    Exp. : 0.7 years</p>
                                <h4 class="text-15 text-custom-500">Salary : $478.32 <span
                                        class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></h4>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->
                <div class="relative card">
                    <div class="card-body">
                        <p
                            class="absolute inline-block px-5 py-1 text-xs text-yellow-600 bg-yellow-100 ltr:left-0 rtl:right-0 dark:bg-yellow-500/20 top-5 ltr:rounded-e rtl:rounded-l">
                            Shopify Developer</p>
                        <div class="flex items-center justify-end">
                            <p class="text-slate-500 dark:text-zink-200">Doj : 11 March, 2023</p>
                        </div>
                        <div class="mt-4 text-center">
                            <div class="flex justify-center">
                                <div class="size-20 overflow-hidden rounded-full bg-slate-100">
                                    <img src="{{ URL::asset('build/images/users/avatar-5.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <a href="#!">
                                <h4 class="mt-4 mb-2 font-semibold text-16">Matilda Marston</h4>
                            </a>
                            <div class="text-slate-500 dark:text-zink-200">
                                <p class="mb-1">matildamarston@tailwick.com</p>
                                <p>+210 082 288 1065</p>
                                <p
                                    class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">
                                    Exp. : 1 years</p>
                                <h4 class="text-15 text-custom-500">Salary : $120.37 <span
                                        class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></h4>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->
                <div class="relative card">
                    <div class="card-body">
                        <p
                            class="absolute inline-block px-5 py-1 text-xs text-red-600 bg-red-100 ltr:left-0 rtl:right-0 dark:bg-red-500/20 top-5 ltr:rounded-e rtl:rounded-l">
                            Angular Developer</p>
                        <div class="flex items-center justify-end">
                            <p class="text-slate-500 dark:text-zink-200">Doj : 22 March, 2023</p>
                        </div>
                        <div class="mt-4 text-center">
                            <div class="flex justify-center">
                                <div class="size-20 overflow-hidden rounded-full bg-slate-100">
                                    <img src="{{ URL::asset('build/images/users/avatar-6.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <a href="#!">
                                <h4 class="mt-4 mb-2 font-semibold text-16">Zachary Benjamin</h4>
                            </a>
                            <div class="text-slate-500 dark:text-zink-200">
                                <p class="mb-1">zacharybenjamin@tailwick.com</p>
                                <p>+120 348 9730 237</p>
                                <p
                                    class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">
                                    Exp. : 0 years</p>
                                <h4 class="text-15 text-custom-500">Salary : $89.99 <span
                                        class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></h4>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->
                <div class="relative card">
                    <div class="card-body">
                        <p
                            class="absolute inline-block px-5 py-1 text-xs text-purple-600 bg-purple-100 ltr:left-0 rtl:right-0 dark:bg-purple-500/20 top-5 ltr:rounded-e rtl:rounded-l">
                            Graphic Designer</p>
                        <div class="flex items-center justify-end">
                            <p class="text-slate-500 dark:text-zink-200">Doj : 09 June, 2023</p>
                        </div>
                        <div class="mt-4 text-center">
                            <div class="flex justify-center">
                                <div class="size-20 overflow-hidden rounded-full bg-slate-100">
                                    <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <a href="#!">
                                <h4 class="mt-4 mb-2 font-semibold text-16">Ruby Chomley</h4>
                            </a>
                            <div class="text-slate-500 dark:text-zink-200">
                                <p class="mb-1">rubychomley@tailwick.com</p>
                                <p>+120 1234 56789</p>
                                <p
                                    class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">
                                    Exp. : 0.2 years</p>
                                <h4 class="text-15 text-custom-500">Salary : $214.82 <span
                                        class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></h4>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->
                <div class="relative card">
                    <div class="card-body">
                        <p
                            class="absolute inline-block px-5 py-1 text-xs text-yellow-600 bg-yellow-100 ltr:left-0 rtl:right-0 dark:bg-yellow-500/20 top-5 ltr:rounded-e rtl:rounded-l">
                            Shopify Developer</p>
                        <div class="flex items-center justify-end">
                            <p class="text-slate-500 dark:text-zink-200">Doj : 27 June, 2023</p>
                        </div>
                        <div class="mt-4 text-center">
                            <div class="flex justify-center">
                                <div class="size-20 overflow-hidden rounded-full bg-slate-100">
                                    <img src="{{ URL::asset('build/images/users/avatar-8.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <a href="#!">
                                <h4 class="mt-4 mb-2 font-semibold text-16">Jesse Edouardy</h4>
                            </a>
                            <div class="text-slate-500 dark:text-zink-200">
                                <p class="mb-1">jessedouard@tailwick.com</p>
                                <p>+87 044 017 3869</p>
                                <p
                                    class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">
                                    Exp. : 1.7 years</p>
                                <h4 class="text-15 text-custom-500">Salary : $278.96 <span
                                        class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></h4>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->
                <div class="relative card">
                    <div class="card-body">
                        <p
                            class="absolute inline-block px-5 py-1 text-xs text-orange-600 bg-orange-100 ltr:left-0 rtl:right-0 dark:bg-orange-500/20 top-5 ltr:rounded-e rtl:rounded-l">
                            Team Leader</p>
                        <div class="flex items-center justify-end">
                            <p class="text-slate-500 dark:text-zink-200">Doj : 15 July, 2023</p>
                        </div>
                        <div class="mt-4 text-center">
                            <div class="flex justify-center">
                                <div class="size-20 overflow-hidden rounded-full bg-slate-100">
                                    <img src="{{ URL::asset('build/images/users/avatar-9.png') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <a href="#!">
                                <h4 class="mt-4 mb-2 font-semibold text-16">Xavier Bower</h4>
                            </a>
                            <div class="text-slate-500 dark:text-zink-200">
                                <p class="mb-1">xavierbower@tailwick.com</p>
                                <p>+159 98765 32451</p>
                                <p
                                    class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">
                                    Exp. : 6.7 years</p>
                                <h4 class="text-15 text-custom-500">Salary : $901.94 <span
                                        class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></h4>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->
            </div><!--end grid-->
            <div class="flex flex-col items-center gap-4 mb-4 md:flex-row">
                <div class="grow">
                    <p class="text-slate-500 dark:text-zink-200">Showing <b>8</b> of <b>18</b> Results</p>
                </div>
                <ul class="flex flex-wrap items-center gap-2">
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">2</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">3</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">6</a>
                    </li>
                    <li>
                        <a href="#!"
                            class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i
                                class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div><!--end tab pane-->
    </div><!--end tab content-->


    <!--Add Documents Modal-->
    <div id="addDocuments" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                <h5 class="text-16">
                    Coter le Compte
                </h5>
                <button data-modal-close="addDocuments"
                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                        data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="{{ route('user.rating') }}" method="POST" class="create-form">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="user" value="{{ $user->id }}">
                        <label for="documentsName" class="inline-block mb-2 text-base font-medium">Documents
                            Name</label>
                        <input type="number" id="documentsName" max="5" min="1" name="rating"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Cote" required>
                    </div>
                    <div class="ckeditor-classic text-slate-800">
                        <textarea name="description" id="description" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"></textarea>
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
