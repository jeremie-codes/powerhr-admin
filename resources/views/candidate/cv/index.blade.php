@extends('candidate.layouts.candidate.master')
@section('title')
    {{ __('t-profile-candidat-cv') }}
@endsection
@section('content')

    <!-- page title -->
    <x-page-title title="Mon Cv" pagetitle="Profil" />    

    {{-- charger votre cv --}}
    @if ($cv && !$cv->cv_path)
        <div class="collapsible">
            <button
                class="flex mb-2 collapsible-header group/item text-slate-600 dark:text-slate-600 btn bg-white hover:text-slate-600 hover:bg-slate-50 focus:text-slate-600 focus:bg-slate-50 focus:ring focus:ring-slate-50 active:text-slate-600 active:bg-slate-50 active:ring active:ring-slate-50 dark:ring-slate-50/20">
                <i data-lucide="folder" class="inline-block size-4 mr-1"></i>
                <span class="align-middle">Importer mon cv</span>
        
                <div class="ltr:ml-2 rtl:mr-2 shrink-0">
                    <i data-lucide="chevron-down" class="hidden size-4 group-[.show]/item:inline-block"></i>
                    <i data-lucide="chevron-right" class="inline-block size-4 group-[.show]/item:hidden"></i>
                </div>
            </button>
            <div class="hidden collapsible-content mt-5 md:mt-0 {{ isset($title) ? 'md:col-span-2 card': 'md:col-span-3 card' }}">
                <form  action="{{ route('cv.store_file') }}" method="post" enctype="multipart/form-data" x-data="{ fileName: null, filePreview: null }">
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
        </div>
    @endif    

    <button data-drawer-target="drawerStart" type="button"
        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
        <i data-lucide="hand" class="inline-block size-4 mr-1"></i>
        <span class="align-middle">Choisir un modèle de CV</span>
    </button>
    
    <div id="drawerStart" drawer-start
        class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:left-0 rtl:right-0 md:w-96 z-drawer show dark:bg-zink-600">
        <div
            class="flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500">
            <h6 class="text-15">3 Modèles de cv disponibles</h6>
            <button data-drawer-close="drawerEnd"><i data-lucide="x"
                    class="size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50"></i></button>
        </div>

        <div class="h-full p-4 overflow-y-auto">
            <div class="card-body">
                <div class="overflow-hidden border sm:fle card">
                    <div
                        class="flex flex-col transition flex-[1_0_0%] rtl:border-b rtl:sm:border-b-0 ltr:border-r rtl:sm:border-l border-slate-200 dark:border-zink-500">
                        <img class="w-full h-auto rounded-t-md sm:rounded-tr-none" src="{{ asset('images/model1.png') }}" alt="Image">
                        <div class="border-t text-center card-body border-slate-200 dark:border-zink-500">
                            <a class="inline-flex items-center gap-2 text-white bg-red-500 hover:bg-red-600 hover:text-white mt-3 text-sm font-medium 
                                   p-2 rounded-full transition-all duration-200 ease-linear text-custom-500 hover:text-custom-600"
                                href="{{ route('model.selected', 1) }}">
                                Utiliser ce modèle <i data-lucide="chevron-right" class="inline-block size-4"></i>
                            </a>
                        </div>
                    </div>
            
                    <div
                        class="flex flex-col transition flex-[1_0_0%] rtl:border-b rtl:sm:border-b-0 ltr:border-r rtl:sm:border-l border-slate-200 dark:border-zink-500">
                        <img class="w-full h-auto" src="{{ asset('images/model2.png') }}" alt="Image">
                        <div class="border-t text-center card-body border-slate-200 dark:border-zink-500">
                            <a class="inline-flex items-center gap-2 text-white bg-red-500 hover:bg-red-600 hover:text-white mt-3 text-sm font-medium 
                                   p-2 rounded-full transition-all duration-200 ease-linear text-custom-500 hover:text-custom-600"
                                href="{{ route('model.selected', 2) }}">
                                Utiliser ce modèle <i data-lucide="chevron-right" class="inline-block size-4"></i>
                            </a>
                        </div>
                    </div>
            
                    <div class="flex flex-col transition flex-[1_0_0%]">
                        <img class="w-full h-auto sm:rounded-tr-md" src="{{ asset('images/model3.png') }}" alt="Image">
                        <div class="border-t text-center card-body border-slate-200 dark:border-zink-500">
                            <a class="inline-flex items-center gap-2 text-white bg-red-500 hover:bg-red-600 hover:text-white mt-3 text-sm font-medium 
                                   p-2 rounded-full transition-all duration-200 ease-linear text-custom-500 hover:text-custom-600" href="{{ route('model.selected', 3) }}">
                                Utiliser ce modèle <i data-lucide="chevron-right" class="inline-block size-4"></i>
                            </a>
                        </div>
                    </div>
            
                    <div class="flex flex-col transition flex-[1_0_0%]">
                        <img class="w-full h-auto sm:rounded-tr-md" src="{{ asset('images/model3.png') }}" alt="Image">
                        <div class="border-t text-center card-body border-slate-200 dark:border-zink-500">
                            <a class="inline-flex items-center gap-2 text-white bg-red-500 hover:bg-red-600 hover:text-white mt-3 text-sm font-medium 
                                   p-2 rounded-full transition-all duration-200 ease-linear text-custom-500 hover:text-custom-600" href="{{ route('model.selected', 4) }}">
                                Utiliser ce modèle <i data-lucide="chevron-right" class="inline-block size-4"></i>
                            </a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div>
        </div>
    </div>

    <a href="{{ route('cv.telecharger.pdf', $user->id) }}"
        class="text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-custom-400/20">
        <i data-lucide="download" class="inline-block size-4 mr-1"></i>
        <span class="align-middle">Télécharger</span>
    </a>
    
    <a href="{{ route('cv.create') }}"
        class="text-white btn bg-yellow-500 border-yellow-500 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100 dark:ring-custom-400/20">
        <i data-lucide="edit" class="inline-block size-4 mr-1"></i>
        <span class="align-middle">Modifier les informations</span>
    </a>

    @if($cv && $cv->cv_path)
        <a data-modal-target="deleteModal"
                class="text-white btn bg-red-500 border-red-500 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20" href="#!">
            <i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> 
            <span class="align-middle">Supprimer le CV</span>
        </a>

        <iframe src="{{ Storage::url($cv->cv_path) }}" class="w-full h-[500px] border rounded mt-5" frameborder="0"></iframe>
    @elseif($cv && !$cv->cv_path)
        <iframe src="{{ route('cv.generer.pdf') }}" class="w-full h-[500px] border rounded mt-5" frameborder="0"></iframe>
    @else
            
        <div class="flex items-center justify-center w-full h-[500px] border rounded mt-5">
            <p class="text-gray-500">Aucun CV trouvé.</p>
        </div>

    @endif

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
                    <h5 class="mb-1">Êtes-vous sûre?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Souhaitez-vous supprimer ce cv ?</p>
                    <div class="flex justify-center gap-2 mt-6">
                        <button type="reset" data-modal-close="deleteModal"
                            class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Annuler</button>
                        <form action="{{ route('cv.delete', $user->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit"
                                class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">
                                Oui, Supprimer!
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
