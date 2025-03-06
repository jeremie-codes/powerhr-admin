@extends('layouts.master-without-nav')
@section('title')
    {{ __('Create Password') }}
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
                    <h4 class="mb-2 text-custom-500 dark:text-custom-500">Set a New Password</h4>
                    <p class="mb-8 text-slate-500 dark:text-zink-200">Your new password should be distinct from any of your
                        prior passwords</p>
                </div>

                <form autocomplete="off" action="index.html">
                    <div class="mb-3">
                        <label for="passwordInput" class="inline-block mb-2 text-base font-medium">Password</label>
                        <input type="password"
                            class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            required placeholder="Password" id="passwordInput">
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmInput" class="inline-block mb-2 text-base font-medium">Confirm
                            Password</label>
                        <input type="password"
                            class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            required placeholder="Confirm password" id="passwordConfirmInput">
                    </div>
                    <div class="flex items-center gap-2">
                        <input id="checkboxDefault1"
                            class="size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 dark:bg-zink-600/50 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                            type="checkbox" value="">
                        <label for="checkboxDefault1"
                            class="inline-block text-base font-medium align-middle cursor-pointer">Remember me</label>
                    </div>
                    <div class="mt-8">
                        <button type="submit"
                            class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Reset
                            Password</button>
                    </div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">Hold on, I've got my password... <a href="{{ url('auth-login-basic') }}"
                                class="underline fw-medium text-custom-500"> Click here </a> </p>
                    </div>
                </form>
            </div>
        </div>
    @endsection
