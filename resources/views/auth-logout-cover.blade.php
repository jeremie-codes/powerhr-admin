@extends('layouts.master-without-nav')
@section('title')
    {{ __('Logout') }}
@endsection
@section('content')

    <body
        class="flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public">

        <div class="mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70">
            <div class="!px-10 !py-12 card-body">
                <a href="index">
                    <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" class="hidden h-6 mx-auto dark:block">
                    <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" class="block h-6 mx-auto dark:hidden">
                </a>

                <div class="mt-8 text-center">
                    <div class="mb-4 text-center">
                        <i data-lucide="log-out" class="size-6 mx-auto text-purple-500 fill-purple-100"></i>
                    </div>
                    <h4 class="mb-2 text-custom-500 dark:text-custom-500">You are Logged Out</h4>
                    <p class="mb-8 text-slate-500 dark:text-zink-200">Thank you for using tailwick admin template</p>
                </div>

                <a href="{{ url('auth-login-basic') }}"
                    class="w-full text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Sign
                    In</a>
            </div>
        </div>
    @endsection
    @push('scripts')
        <script src="{{ URL::asset('build/js/pages/auth-two-steps.init.js') }}"></script>
    @endpush
