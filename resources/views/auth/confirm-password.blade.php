@extends('admin.layouts.master-without-nav')
@section('title')
    {{ __('t-confirm-password') }}
@endsection
@section('content')
<body
    class="flex items-center justify-center min-h-screen px-4 py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public">
<div class="mb-0 border-none shadow-none xl:w-2/3 card bg-white/70 dark:bg-zink-500/70">
    <div class="grid grid-cols-1 gap-0 lg:grid-cols-12">
        <div class="lg:col-span-5">
            <div class="!px-12 !py-12 card-body h-full flex flex-col">

                <div class="my-auto">
                    <div class="mt-8 text-center">
                        <div class="mb-4 text-center">
                            <i data-lucide="log-out" class="size-6 mx-auto text-purple-500 fill-purple-100"></i>
                        </div>
                        <h4 class="mb-2 text-custom-500 dark:text-custom-500">Confirm your Account</h4>
                        <p class="mb-8 text-slate-500 dark:text-zink-200">Thank you for using tailwick admin template</p>
                    </div>
                    
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div>
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" autofocus />
                            <x-input-error for="password" />
                        </div>
                        <div class="mt-8">
                            <button type="submit"
                                class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Confirm</button>
                        </div>
                        <div class="mt-4 text-center">
                            <p class="mb-0">Back to Dashboard... <a href="{{ route('dashboard') }}"
                                    class="underline fw-medium text-custom-500"> Click here </a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mx-2 mt-2 mb-2 border-none shadow-none lg:col-span-7 card bg-white/60 dark:bg-zink-500/60">
            <div class="!px-10 !pt-10 h-full !pb-0 card-body flex flex-col">
                <div class="flex items-center justify-between gap-3">
                    <div class="grow">
                        <a href="{{ url('index') }}">
                            <x-application-logo />
                        </a>
                    </div>
                    <div class="shrink-0">
                        <x-language />
                    </div>
                </div>
                <div class="mt-auto">
                    <img src="{{ URL::asset('build/images/auth/img-01.png') }}" alt="" class="md:max-w-[32rem] mx-auto">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
