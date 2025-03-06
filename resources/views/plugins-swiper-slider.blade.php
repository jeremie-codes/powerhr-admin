@extends('layouts.master')
@section('title')
    {{ __('Swiper Slider') }}
@endsection
@push('css')
    <!-- Swiper Slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@section('content')
    <!-- page title -->
    <x-page-title title="Swiper Slider" pagetitle="Plugins" />

    <div class="px-4 py-3 mb-5 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20">
        The <a href="https://swiperjs.com/" class="font-semibold underline" target="_blank">Swiper.js documentation</a>
        provides even more options and customization possibilities for creating engaging carousels. Remember to adjust image
        URLs and content according to your project.
    </div>

    <div class="grid grid-cols-1 gap-x-5 lg:grid-cols-2 2xl:grid-cols-3">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Default</h6>

                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Navigation</h6>

                <!-- Swiper -->
                <div class="swiper navigation-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-7.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-8.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-9.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next after:hidden text-custom-500"><i data-lucide="chevron-right"></i></div>
                    <div class="swiper-button-prev after:hidden text-custom-500"><i data-lucide="chevron-left"></i></div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Pagination</h6>

                <!-- Swiper -->
                <div class="swiper pagination-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-7.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-8.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-9.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Pagination Dynamic</h6>

                <!-- Swiper -->
                <div class="swiper pagination-dynamic">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-10.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-11.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-12.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Vertical</h6>

                <!-- Swiper -->
                <div class="swiper vertical-slider" style="height: 327px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-1.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Pagination progress</h6>

                <!-- Swiper -->
                <div class="swiper pagination-progress">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next after:hidden text-custom-500"><i data-lucide="chevron-right"></i></div>
                    <div class="swiper-button-prev after:hidden text-custom-500"><i data-lucide="chevron-left"></i></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/swiper.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
