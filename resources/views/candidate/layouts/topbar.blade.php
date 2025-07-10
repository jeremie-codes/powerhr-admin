<header id="page-topbar"
    class="ltr:md:left-vertical-menu rtl:md:right-vertical-menu group-data-[sidebar-size=md]:ltr:md:left-vertical-menu-md group-data-[sidebar-size=md]:rtl:md:right-vertical-menu-md group-data-[sidebar-size=sm]:ltr:md:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:md:right-vertical-menu-sm group-data-[layout=horizontal]:ltr:left-0 group-data-[layout=horizontal]:rtl:right-0 fixed right-0 z-[1000] left-0 print:hidden group-data-[navbar=bordered]:m-4 group-data-[navbar=bordered]:[&.is-sticky]:mt-0 transition-all ease-linear duration-300 group-data-[navbar=hidden]:hidden group-data-[navbar=scroll]:absolute group/topbar group-data-[layout=horizontal]:z-[1004]">
    <div class="layout-width">
        <div
            class="flex items-center px-4 mx-auto bg-topbar border-b-2 border-topbar group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-brand shadow-md h-header shadow-slate-200/50 group-data-[navbar=bordered]:rounded-md group-data-[navbar=bordered]:group-[.is-sticky]/topbar:rounded-t-none group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:border-zink-700 dark:shadow-none group-data-[topbar=dark]:group-[.is-sticky]/topbar:dark:shadow-zink-500 group-data-[topbar=dark]:group-[.is-sticky]/topbar:dark:shadow-md group-data-[navbar=bordered]:shadow-none group-data-[layout=horizontal]:group-data-[navbar=bordered]:rounded-b-none group-data-[layout=horizontal]:shadow-none group-data-[layout=horizontal]:dark:group-[.is-sticky]/topbar:shadow-none">
            <div
                class="flex items-center w-full group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl navbar-header group-data-[layout=horizontal]:ltr:xl:pr-3 group-data-[layout=horizontal]:rtl:xl:pl-3">
                <!-- LOGO -->
                <div
                    class="items-center justify-center hidden px-5 text-center h-header group-data-[layout=horizontal]:md:flex group-data-[layout=horizontal]:ltr::pl-0 group-data-[layout=horizontal]:rtl:pr-0">
                    <a href="{{ route('dashboard') }}">
                        <span class="hidden">
                            <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" class="h-6 mx-auto">
                        </span>
                        <span class="group-data-[topbar=dark]:hidden group-data-[topbar=brand]:hidden">
                            <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt=""
                                class="h-6 mx-auto">
                        </span>
                    </a>
                    <a href="{{ route('dashboard') }}"
                        class="hidden group-data-[topbar=dark]:block group-data-[topbar=brand]:block">
                        <span class="group-data-[topbar=dark]:hidden group-data-[topbar=brand]:hidden">
                            <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" class="h-6 mx-auto">
                        </span>
                        <span class="group-data-[topbar=dark]:block group-data-[topbar=brand]:block">
                            <img src="{{ URL::asset('build/images/logo-light.png') }}" alt=""
                                class="h-6 mx-auto">
                        </span>
                    </a>
                </div>

               
                

                    <div class="relative flex items-center h-header">
                        <button type="button"
                            class="inline-flex relative justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar rounded-md btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:text-topbar-item-dark"
                            id="light-dark-mode">
                            <i data-lucide="sun"
                                class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"></i>
                        </button>
                    </div>

                    <div class="relative flex items-center dropdown h-header">
                        <button type="button"
                            class="inline-block p-0 transition-all duration-200 ease-linear bg-topbar rounded-full text-topbar-item dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200"
                            id="dropdownMenuButton" data-bs-toggle="dropdown">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="bg-pink-100 rounded-full">
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt=""
                                        class="w-[37.5px] h-[37.5px] rounded-full">
                                </div>
                            @else
                                <i data-lucide="user-2"
                                    class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"></i>
                            @endif
                        </button>
                        <div class="absolute z-50 hidden p-4 ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[14rem] dark:bg-zink-600"
                            aria-labelledby="dropdownMenuButton">
                            <a href="#!" class="flex gap-3 mb-3">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <div class="relative inline-block shrink-0">
                                        <div class="rounded bg-slate-100 dark:bg-zink-500">
                                            <img src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" class="w-12 h-12 rounded">
                                        </div>
                                        <span
                                            class="-top-1 ltr:-right-1 rtl:-left-1 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white rounded-full dark:border-zink-600"></span>
                                    </div>
                                @endif
                                <div>
                                    <h6 class="mb-1 text-15">{{ Auth::user()->name }}</h6>
                                    <p class="text-slate-500 dark:text-zink-300">{{ Auth::user()?->roles[0]?->name }}</p>
                                </div>
                            </a>
                            <ul>
                                <li>
                                    <a class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500"
                                        href="{{ route('profile.show') }}"><i data-lucide="user-2"
                                            class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> Profile</a>
                                </li>
                                <!-- Logout -->
                                <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a href="{{ route('logout') }}"
                                            class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500"
                                            @click.prevent="$root.submit();">
                                            <i data-lucide="log-out"
                                                class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i>
                                            {{ __('Sign Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>