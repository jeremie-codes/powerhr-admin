@extends('candidate.layouts.candidate.master')
@section('title')
    {{ __('t-profile-candidat-cv') }}
@endsection
@section('content')

    <!-- page title -->
    <x-page-title title="Mon Cv" pagetitle="Profil" />    

    {{-- charger votre cv --}}
    <div class="mt-5 md:mt-0 {{ isset($title) ? 'md:col-span-2 card': 'md:col-span-3 card' }}">
        <form action="{{ route('cv.store_file') }}" method="post" enctype="multipart/form-data" x-data="{ fileName: null, filePreview: null }">
            @csrf
            <div class="px-4 py-5 sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="flex items-center relative overflow-hidden justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dropzone2 dark:bg-zink-700 dark:border-zink-500 w-full">
                    <div class="fallback">
                        <input name="file" type="file" dropzone="file" class="border absolute opacity-0 w-full h-full cursor-pointer"
                            wire:model.live="file" x-ref="file" style="top: 0"
                            x-on:change="fileName = $refs.file.files[0].name;const reader = new FileReader();
                            reader.onload = (e) => {
                                filePreview = e.target.result;
                            };
                            reader.readAsDataURL($refs.file.files[0]);" required
                        />
                    </div>
                    <div class="w-full py-5 text-lg text-center dz-message needsclick">
                        <div class="mb-3" x-show="!filePreview">
                            <i data-lucide="upload-cloud"
                                class="block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                        </div>
                        
                        <div class="mt-2" x-show="!filePreview">
                            <h5 class="mb-0 font-normal text-slate-500 text-15">Cliquez pour choisir <a href="#!">votre fichier</a> ici ! <br> pdf ou docx </h5>
                        </div>

                            <div class="mt-2" x-show="filePreview" style="display: none;">
                            <i data-lucide="file"
                                class="block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                        </div>

                        <div class="mt-2" x-show="filePreview">
                            <h5 class="mb-0 font-normal text-slate-500 text-15">Fichier chargé, cliquez sur enregistrer! </h5>
                        </div>
                    </div>    
                </div>
            </div> 

            <div class="flex items-center justify-end px-4 py-3 bg-slate-50 dark:bg-zink-600 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <x-button wire:loading.attr="disabled" x-show="filePreview" variant="green" wire:target="file">
                    {{ __('Enregistrer') }}
                </x-button>
            </div>
        </form>
    </div>

    <button data-drawer-target="drawerEnd" type="button"
        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
        Choisir un model
    </button>
    
    <div id="drawerEnd" drawer-end
        class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:right-0 rtl:left-0 md:w-80 z-drawer show dark:bg-zink-600">
        <div
            class="flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500">
            <h6 class="text-15">Model de cv disponible</h6>
            <button data-drawer-close="drawerEnd"><i data-lucide="x"
                    class="size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50"></i></button>
        </div>

        <div class="h-full p-4 overflow-y-auto">
            <div class="card-body">
                <div class="overflow-hidden border sm:fle card">
                    <div
                        class="flex flex-col transition flex-[1_0_0%] rtl:border-b rtl:sm:border-b-0 ltr:border-r rtl:sm:border-l border-slate-200 dark:border-zink-500">
                        <img class="w-full h-auto rounded-t-md sm:rounded-tr-none" src="{{ asset('images/cv.jpg') }}"
                            alt="Image">
                        <div class="flex-1 card-body">
                            <h6 class="mb-4 text-15">
                                Model title
                            </h6>
                            <p class="text-slate-500 dark:text-zink-200">
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content
                                is a little bit longer.
                            </p>
                        </div>
                        <div class="border-t card-body border-slate-200 dark:border-zink-500">
                            <a class="inline-flex items-center gap-2 mt-3 text-sm font-medium transition-all duration-200 ease-linear text-custom-500 hover:text-custom-600"
                                href="{{ url('/generate/1/cv') }}">
                                Utiliser ce model <i data-lucide="chevron-right" class="inline-block size-4"></i>
                            </a>
                        </div>
                    </div>
            
                    <div
                        class="flex flex-col transition flex-[1_0_0%] rtl:border-b rtl:sm:border-b-0 ltr:border-r rtl:sm:border-l border-slate-200 dark:border-zink-500">
                        <img class="w-full h-auto" src="{{ asset('images/cv.jpg') }}" alt="Image">
                        <div class="flex-1 card-body">
                            <h6 class="mb-4 text-15">
                                Model title
                            </h6>
                            <p class="text-slate-500 dark:text-zink-200">
                                This card has supporting text below as a natural lead-in to additional content.
                            </p>
                        </div>
                        <div class="border-t card-body border-slate-200 dark:border-zink-500">
                            <a class="inline-flex items-center gap-2 mt-3 text-sm font-medium transition-all duration-200 ease-linear text-custom-500 hover:text-custom-600"
                                href="{{ url('/generate/2/cv') }}">
                                Utiliser ce model <i data-lucide="chevron-right" class="inline-block size-4"></i>
                            </a>
                        </div>
                    </div>
            
                    <div class="flex flex-col transition flex-[1_0_0%]">
                        <img class="w-full h-auto sm:rounded-tr-md" src="{{ asset('images/cv.jpg') }}" alt="Image">
                        <div class="flex-1 card-body">
                            <h6 class="mb-4 text-15">
                                Model title
                            </h6>
                            <p class="text-slate-500 dark:text-zink-200">
                                This is a wider card with supporting text below as a natural lead-in to additional content. This card
                                has even longer content than the first to show that equal height action.
                            </p>
                        </div>
                        <div class="border-t card-body border-slate-200 dark:border-zink-500">
                            <a class="inline-flex items-center gap-2 mt-3 text-sm font-medium transition-all duration-200 ease-linear text-custom-500 hover:text-custom-600" href="{{ url('/generate/3/cv') }}">
                                Utiliser ce model <i data-lucide="chevron-right" class="inline-block size-4"></i>
                            </a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div>
        </div>
    </div>

    <a href="{{ route('cv.telecharger.pdf', $user->candidate->id) }}"
        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
        Télécharger mon CV
    </a>
    
    <iframe src="{{ route('cv.generer.pdf', $user->candidate->id) }}" class="w-full h-[500px] border rounded mt-5" frameborder="0"></iframe>

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
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
