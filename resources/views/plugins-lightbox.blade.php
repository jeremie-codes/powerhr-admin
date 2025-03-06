    @extends('layouts.master')
    @section('title')
        {{ __('Lightbox') }}
    @endsection
    @push('css')
        <link rel="stylesheet" href="{{ URL::asset('build/libs/glightbox/css/glightbox.min.css') }}">
    @endpush
    @section('content')
        <!-- page title -->
        <x-page-title title="Lightbox" pagetitle="Plugins" />

        <div>
            <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-1">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Simple Image Gallery</h6>

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
                            <div>
                                <a href="{{ URL::asset('build/images/small/img-2.jpg') }}" class="glightbox">
                                    <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt="image"
                                        class="rounded-md">
                                </a>
                            </div>
                            <div>
                                <a href="{{ URL::asset('build/images/small/img-3.jpg') }}" class="glightbox">
                                    <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt="image"
                                        class="rounded-md">
                                </a>
                            </div>
                            <div>
                                <a href="{{ URL::asset('build/images/small/img-4.jpg') }}" class="glightbox">
                                    <img src="{{ URL::asset('build/images/small/img-4.jpg') }}" alt="image"
                                        class="rounded-md">
                                </a>
                            </div>
                            <div>
                                <a href="{{ URL::asset('build/images/small/img-5.jpg') }}" class="glightbox">
                                    <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt="image"
                                        class="rounded-md">
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Images with Description</h6>

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
                            <div>
                                <a href="{{ URL::asset('build/images/small/img-10.jpg') }}" class="description"
                                    data-glightbox="title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>">
                                    <img src="{{ URL::asset('build/images/small/img-10.jpg') }}" alt="image"
                                        class="rounded-md">
                                </a>
                            </div>
                            <div>
                                <a href="{{ URL::asset('build/images/small/img-9.jpg') }}" class="description"
                                    data-glightbox="title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>">
                                    <img src="{{ URL::asset('build/images/small/img-9.jpg') }}" alt="image"
                                        class="rounded-md">
                                </a>
                            </div>
                            <div>
                                <a href="{{ URL::asset('build/images/small/img-8.jpg') }}" class="description"
                                    data-glightbox="title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>">
                                    <img src="{{ URL::asset('build/images/small/img-8.jpg') }}" alt="image"
                                        class="rounded-md">
                                </a>
                            </div>
                            <div>
                                <a href="{{ URL::asset('build/images/small/img-7.jpg') }}" class="description"
                                    data-glightbox="title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>">
                                    <img src="{{ URL::asset('build/images/small/img-7.jpg') }}" alt="image"
                                        class="rounded-md">
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Videos Gallery</h6>

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
                            <div>
                                <a href="https://www.youtube.com/embed/qYgogv4R8zg?si=_YxUDmc2fDgHyPae" class="video">
                                    <img src="https://i.ytimg.com/vi/qYgogv4R8zg/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBcI9Cw0yBtGv_ashbS-ogqh1OGpQ"
                                        alt="image" class="object-cover w-full rounded-md h-30">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.youtube.com/embed/waoOK5s9ypc?si=yzK5f339AF_hoXdn" class="video">
                                    <img src="https://i.ytimg.com/vi/waoOK5s9ypc/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCkSGeAQ17_LFepTKdEByyVTZkeVw"
                                        alt="image" class="object-cover w-full rounded-md h-30">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.youtube.com/embed/waoOK5s9ypc?si=yzK5f339AF_hoXdn" class="video">
                                    <img src="https://i.ytimg.com/vi/waoOK5s9ypc/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCkSGeAQ17_LFepTKdEByyVTZkeVw"
                                        alt="image" class="object-cover w-full rounded-md h-30">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.youtube.com/embed/TrftauE2Vyk?si=HRCFmq5956C01yB3" class="video">
                                    <img src="https://i.ytimg.com/vi/TrftauE2Vyk/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCm6UjEfDC3R5dJik1gEW__HEnaAA"
                                        alt="image" class="object-cover w-full rounded-md h-30">
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->


            </div><!--end grid-->
        </div>
    @endsection
    @push('scripts')
        <script src="{{ URL::asset('build/libs/glightbox/js/glightbox.min.js') }}"></script>

        <script src="{{ URL::asset('build/js/pages/plugins-lightbox.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endpush
