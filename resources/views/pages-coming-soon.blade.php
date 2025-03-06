@extends('layouts.master-without-nav')
@section('title')
    {{ __('Commin Soon') }}
@endsection
@section('content')
<body class="flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark font-public">

    <div class="mb-0 border-none shadow-none lg:w-[500px] card bg-white/70 dark:bg-zink-500/70">
        <div class="!px-10 !py-12 card-body">
            <div id="countDownText">
                <a href="index">
                    <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" class="hidden h-6 mx-auto dark:block">
                    <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" class="block h-6 mx-auto dark:hidden">
                </a>
    
                <div class="mt-8 text-center">
                    <h4 class="mb-2 text-purple-500 dark:text-purple-500">Coming Soon ...</h4>
                    <p class="text-slate-500 dark:text-zink-200">We'll be here in a brief moment.</p>
                </div>
    
                <div>
                    <div class="mt-8">
                        <div class="flex items-center justify-between mt-14">
                            <div data-countdown="Oct 30, 2025" class="flex flex-wrap gap-3 countdownlist"></div>
                        </div>
                    </div>
    
                    <div class="mt-10 text-center">
                        <h5 class="mb-2">Be alerted when our launch happens.</h5>
                        <p class="mb-5 text-slate-500 dark:text-zink-200">Don't worry, we won't inundate your inbox 😊</p>
                        <form action="#!" class="relative">
                            <input type="email" id="inputEmail" class="py-2.5 form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your email" required>
                            <button type="submit" class="px-2.5 py-1.5 text-sm text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 absolute top-[5px] ltr:right-1 rtl:left-1">Send</button>
                        </form>
                    </div>
    
                </div>
            </div>
        </div>
    </div>


    @endsection
    @push('scripts')
    <script src="{{ URL::asset('build/js/pages/pages-coming-soon.init.js') }}"></script>
        
    @endpush