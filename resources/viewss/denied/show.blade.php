@extends('admin.layouts.master-without-nav')
@section('title')
    {{ __('Offline') }}
@endsection
@section('content')

<body class="flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark font-public">

    <div class="mb-0 border-none shadow-none lg:w-[500px] card bg-white/70 dark:bg-zink-500/70">
        <div class="!px-10 !py-12 card-body">
            <a href="index">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" class="hidden h-6 mx-auto dark:block">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" class="block h-6 mx-auto dark:hidden">
            </a>
            
            <div class="mt-10">
                <img src="{{ URL::asset('build/images/auth/offline.png') }}" alt="" class="mx-auto h-72">
            </div>
            <div class="mt-8 text-center">
                <h4 class="mb-2 text-purple-500">
                    Access Denied
                </h4>
                <p class="mb-6 text-slate-500 dark:text-zink-200">You tried to access unauthorized resources, please click the button below.</p>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a href="{{ route('logout') }}"
                        class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"
                        @click.prevent="$root.submit();">
                        <i data-lucide="log-out"
                            class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i>
                        {{ __('Sign Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>

@endsection