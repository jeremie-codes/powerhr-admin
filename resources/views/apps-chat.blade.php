    @extends('layouts.master')
    @section('title')
        {{ __('Chat') }}
    @endsection
    @push('css')
        <link rel="stylesheet" href="{{ URL::asset('build/libs/prismjs/themes/prism-okaidia.css') }}">
    @endpush
    @section('content')
        <div class="flex gap-5 mt-5">
            <div class="fixed inset-x-0 bottom-12 2xl:w-20 shrink-0 xl:relative z-[20] text-center xl:bottom-auto">
                <div
                    class="xl:min-h-[calc(100vh_-_theme('height.header')_*_2.4)] inline-block card xl:h-[calc(100%_-_theme('spacing.5'))] shadow-lg xl:shadow-md">
                    <div class="flex items-center h-full p-2 2xl:p-4 xl:flex-col">
                        <a href="#!" class="hidden xl:block"><img src="{{ URL::asset('build/images/logo-sm.png') }}"
                                alt="" class="h-8 mx-auto"></a>
                        <ul class="flex gap-2 my-auto text-center xl:pt-8 xl:flex-col nav-tabs">
                            <li class="group/item tabs active chatTab">
                                <a href="#!" data-tab-toggle data-target="mainChatList"
                                    class="inline-flex items-center justify-center size-12 transition-all duration-200 ease-linear rounded-md mainChatList"><i
                                        data-lucide="messages-square"
                                        class="mx-auto transition-all size-5 duration-200 ease-linear fill-slate-100 text-slate-500 dark:text-zink-200 dark:fill-zink-500 group-hover/item:text-custom-500 dark:group-hover/item:text-custom-500 group-[.active]/item:fill-custom-100 dark:group-[.active]/item:fill-custom-500/20 group-[.active]/item:text-custom-500 dark:group-[.active]/item:text-custom-500"></i></a>
                            </li>
                            <li class="group/item tabs">
                                <a href="#!" data-tab-toggle data-target="contactList"
                                    class="inline-flex items-center justify-center size-12 transition-all duration-200 ease-linear rounded-md"><i
                                        data-lucide="user-square"
                                        class="mx-auto transition-all size-5 duration-200 ease-linear fill-slate-100 text-slate-500 dark:text-zink-200 dark:fill-zink-500 group-hover/item:text-custom-500 dark:group-hover/item:text-custom-500 group-[.active]/item:fill-custom-100 dark:group-[.active]/item:fill-custom-500/20 group-[.active]/item:text-custom-500 dark:group-[.active]/item:text-custom-500"></i></a>
                            </li>
                            <li class="group/item botTab">
                                <a href="#!" data-tab-toggle data-target="botChat"
                                    class="inline-flex items-center justify-center size-12 transition-all duration-200 ease-linear rounded-md botChat"><i
                                        data-lucide="bot"
                                        class="mx-auto transition-all size-5 duration-200 ease-linear fill-slate-100 text-slate-500 dark:text-zink-200 dark:fill-zink-500 group-hover/item:text-custom-500 dark:group-hover/item:text-custom-500 group-[.active]/item:fill-custom-100 dark:group-[.active]/item:fill-custom-500/20 group-[.active]/item:text-custom-500 dark:group-[.active]/item:text-custom-500"></i></a>
                            </li>
                            <li class="group/item tabs">
                                <a href="#!" data-tab-toggle data-target="profile"
                                    class="inline-flex items-center justify-center size-12 transition-all duration-200 ease-linear rounded-md"><i
                                        data-lucide="user-2"
                                        class="mx-auto transition-all size-5 duration-200 ease-linear fill-slate-100 text-slate-500 dark:text-zink-200 dark:fill-zink-500 group-hover/item:text-custom-500 dark:group-hover/item:text-custom-500 group-[.active]/item:fill-custom-100 dark:group-[.active]/item:fill-custom-500/20 group-[.active]/item:text-custom-500 dark:group-[.active]/item:text-custom-500"></i></a>
                            </li>
                            <li class="group/item tabs">
                                <a href="#!" data-tab-toggle data-target="fileDocument"
                                    class="inline-flex items-center justify-center size-12 transition-all duration-200 ease-linear rounded-md"><i
                                        data-lucide="scroll-text"
                                        class="mx-auto transition-all size-5 duration-200 ease-linear fill-slate-100 text-slate-500 dark:text-zink-200 dark:fill-zink-500 group-hover/item:text-custom-500 dark:group-hover/item:text-custom-500 group-[.active]/item:fill-custom-100 dark:group-[.active]/item:fill-custom-500/20 group-[.active]/item:text-custom-500 dark:group-[.active]/item:text-custom-500"></i></a>
                            </li>
                        </ul>
                        <ul class="flex items-center gap-2 my-auto text-center xl:mb-0 xl:mt-auto xl:pt-4 xl:flex-col">
                            <li>
                                <a href="{{ url('pages-account-settings') }}"
                                    class="inline-flex items-center justify-center size-12 transition-all duration-200 ease-linear rounded-md group/item"><i
                                        data-lucide="settings"
                                        class="mx-auto transition-all size-5 duration-200 ease-linear fill-slate-100 text-slate-500 dark:text-zink-200 dark:fill-zink-500 group-hover/item:text-custom-500 dark:group-hover/item:text-custom-500 group-[.active]/item:fill-custom-100 dark:group-[.active]/item:fill-custom-500/20 group-[.active]/item:text-custom-500 dark:group-[.active]/item:text-custom-500"></i></a>
                            </li>
                            <li class="hidden md:block">
                                <div class="relative dropdown">
                                    <a href="#!" type="button"
                                        class="inline-flex items-center justify-center size-12 transition-all duration-200 ease-linear bg-pink-100 rounded-md group/item dropdown-toggle dark:bg-pink-500/20"
                                        id="profilDropdown" data-bs-toggle="dropdown">
                                        <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                            class="h-12 rounded-md">
                                    </a>

                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                        aria-labelledby="profilDropdown">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                href="{{ url('auth-login-basic') }}">Logout</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                href="{{ url('auth-login-cover') }}">Switch Account</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end -->
            <div class="block w-full xl:block xl:w-80 shrink-0 menu-content">
                <div
                    class="h-[calc(100vh_-_theme('spacing.10')_*_6)] xl:min-h-[calc(100vh_-_theme('height.header')_*_2.4)] card xl:h-[calc(100%_-_theme('spacing.5'))]">
                    <div class="flex flex-col h-full">
                        <div class="tab-content">
                            <div class="block tab-pane" id="mainChatList">
                                <div class="card-body">
                                    <div class="flex items-center gap-3">
                                        <button
                                            class="inline-flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i
                                                data-lucide="chevrons-left" class="size-4 mx-auto"></i></button>
                                        <h6 class="text-15 grow">Chats</h6>
                                        <button data-modal-target="addContactModal"
                                            class="inline-flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i
                                                data-lucide="plus" class="size-4 mx-auto"></i></button>
                                    </div>
                                    <div class="relative mt-5">
                                        <input type="text"
                                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                            placeholder="Search for ..." autocomplete="off">
                                        <i data-lucide="search"
                                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                    </div>
                                </div>
                                <div data-simplebar class="max-h-[calc(100vh_-_380px)] xl:max-h-[calc(100vh_-_300px)]">
                                    <ul class="flex flex-col gap-1" id="chatList">
                                        <li class="px-5">
                                            <p class="mb-1 text-slate-500 dark:text-zink-200">Recent Chats</p>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600 group/item active online">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/avatar-5.png') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <div class="overflow-hidden grow">
                                                    <h6 class="mb-1">Marie Prohaska</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">I will
                                                        purchase it for support</p>
                                                </div>
                                                <div class="self-start shrink-0 text-slate-500 dark:text-zink-200">
                                                    <small>2 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/user-1.jpg') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <div class="overflow-hidden grow">
                                                    <h6 class="mb-1">Kara Miller</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Hey,
                                                        how's it going?</p>
                                                </div>
                                                <div class="self-start shrink-0 text-slate-500 dark:text-zink-200">
                                                    <small>02:57 PM</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 online">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/avatar-5.png') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <div class="overflow-hidden grow">
                                                    <h6 class="mb-1">Mark Walton</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Hey,
                                                        how's it going?</p>
                                                </div>
                                                <div class="self-start shrink-0 text-slate-500 dark:text-zink-200">
                                                    <small>Yesterday</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-5">
                                            <p class="mb-1 text-slate-500 dark:text-zink-200">All Conversion</p>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/user-2.jpg') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <div class="overflow-hidden grow">
                                                    <h6 class="mb-1">Aurore Maggio</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">React
                                                        Developer</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 online">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    LP
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <div class="overflow-hidden grow">
                                                    <h6 class="mb-1">Mark Walton</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">UI / UX
                                                        Designer</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/avatar-5.png') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <div class="overflow-hidden grow">
                                                    <h6 class="mb-1">Daniel Miller</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">ASP.Net
                                                        Developer</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/user-3.jpg') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <div class="overflow-hidden grow">
                                                    <h6 class="mb-1">Jaqueline Hammes</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Angular
                                                        Developer</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/avatar-8.png') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <div class="overflow-hidden grow">
                                                    <h6 class="mb-1">Andrea Pesina</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Laravel
                                                        Developer</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 online">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/avatar-10.png') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <div class="overflow-hidden grow">
                                                    <h6 class="mb-1">Bernard Pereira</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Web
                                                        Designer</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/user-4.jpg') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <div class="overflow-hidden grow">
                                                    <h6 class="mb-1">William Jones</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Project
                                                        Manager</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden tab-pane" id="contactList">
                                <div class="card-body">
                                    <div class="flex items-center gap-3">
                                        <button
                                            class="inline-flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i
                                                data-lucide="chevrons-left" class="size-4 mx-auto"></i></button>
                                        <h6 class="text-15 grow">Contacts</h6>
                                        <button data-modal-target="addContactModal"
                                            class="inline-flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i
                                                data-lucide="plus" class="size-4 mx-auto"></i></button>
                                    </div>
                                    <div class="relative mt-5">
                                        <input type="text"
                                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                            placeholder="Search for ..." autocomplete="off">
                                        <i data-lucide="search"
                                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                    </div>
                                </div>
                                <div data-simplebar class="max-h-[calc(100vh_-_390px)] xl:max-h-[calc(100vh_-_300px)]">
                                    <ul class="flex flex-col gap-1">
                                        <li class="px-5">
                                            <p class="mb-1 text-slate-500 dark:text-zink-200">Contact List</p>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/user-2.jpg') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">Aurore Maggio</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">React
                                                        Developer</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    LP
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">Mark Walton</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">UI / UX
                                                        Designer</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/avatar-5.png') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">Daniel Miller</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">ASP.Net
                                                        Developer</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/user-3.jpg') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">Jaqueline Hammes</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Angular
                                                        Developer</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/avatar-8.png') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">Andrea Pesina</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Laravel
                                                        Developer</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/avatar-10.png') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">Bernard Pereira</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Web
                                                        Designer</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/user-4.jpg') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">William Jones</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Project
                                                        Manager</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/avatar-8.png') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">Andrea Pesina</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Laravel
                                                        Developer</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/avatar-10.png') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">Bernard Pereira</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Web
                                                        Designer</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    <img src="{{ URL::asset('build/images/users/user-4.jpg') }}"
                                                        alt="" class="rounded-full h-9">
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">Mary Segura</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">NodeJS
                                                        Developer</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="flex items-center gap-3 px-5 py-2 [&.active]:bg-slate-50 group/item dark:[&.active]:bg-zink-600 offline">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                                    PJ
                                                    <span
                                                        class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                                </div>
                                                <a href="#!" class="overflow-hidden grow">
                                                    <h6 class="mb-1">Pearl Johnson</h6>
                                                    <p class="text-xs truncate text-slate-500 dark:text-zink-200">Team
                                                        Leader</p>
                                                </a>
                                                <div class="relative dropdown shrink-0">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="contactListDropdown1" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="contactListDropdown1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Send Message</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden tab-pane" id="botChat">
                                <div class="card-body">
                                    <div class="flex items-center gap-3">
                                        <button
                                            class="inline-flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i
                                                data-lucide="chevrons-left" class="size-4 mx-auto"></i></button>
                                        <h6 class="text-15 grow">AI Bot</h6>
                                    </div>
                                    <div class="relative mt-5">
                                        <input type="text"
                                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                            placeholder="Search for ..." autocomplete="off">
                                        <i data-lucide="search"
                                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                    </div>
                                </div>
                                <p class="mx-5 mb-2 text-slate-500 dark:text-zink-200">Recent Find</p>
                                <div data-simplebar class="max-h-[calc(100vh_-_410px)] xl:max-h-[calc(100vh_-_330px)]">
                                    <ul class="flex flex-col gap-1">
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600 active">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 size-7 dark:text-zink-200 shrink-0">
                                                    <i data-lucide="messages-square" class="size-4"></i>
                                                </div>
                                                <h6 class="font-medium truncate grow">What is Tailwind CSS, and what is
                                                    Utility-First CSS?</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 size-7 dark:text-zink-200 shrink-0">
                                                    <i data-lucide="messages-square" class="size-4"></i>
                                                </div>
                                                <h6 class="font-medium truncate grow">How to install and set up Tailwind
                                                    CSS in a project?</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 size-7 dark:text-zink-200 shrink-0">
                                                    <i data-lucide="messages-square" class="size-4"></i>
                                                </div>
                                                <h6 class="font-medium truncate grow">How to customize the configuration
                                                    file in Tailwind CSS?</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 size-7 dark:text-zink-200 shrink-0">
                                                    <i data-lucide="messages-square" class="size-4"></i>
                                                </div>
                                                <h6 class="font-medium truncate grow">How to use responsive variants in
                                                    Tailwind CSS?</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 size-7 dark:text-zink-200 shrink-0">
                                                    <i data-lucide="messages-square" class="size-4"></i>
                                                </div>
                                                <h6 class="font-medium truncate grow">Why is Tailwind faster?</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 size-7 dark:text-zink-200 shrink-0">
                                                    <i data-lucide="messages-square" class="size-4"></i>
                                                </div>
                                                <h6 class="font-medium truncate grow">What problem does Tailwind CSS solve?
                                                </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                                class="flex items-center gap-3 px-5 py-2.5 [&.active]:bg-slate-50 dark:[&.active]:bg-zink-600">
                                                <div
                                                    class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 size-7 dark:text-zink-200 shrink-0">
                                                    <i data-lucide="messages-square" class="size-4"></i>
                                                </div>
                                                <h6 class="font-medium truncate grow">How to apply background image with
                                                    linear gradient using Tailwind CSS ?</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden tab-pane" id="profile">
                                <div data-simplebar class="max-h-[calc(100vh_-_250px)] xl:max-h-full card-body">
                                    <div class="flex items-center gap-3">
                                        <h6 class="text-15 grow">Profile</h6>
                                        <button
                                            class="inline-flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md shrink-0 bg-slate-100 text-slate-500 hover:text-red-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500"><i
                                                data-lucide="x" class="size-4 mx-auto "></i></button>
                                    </div>
                                    <div class="text-center">
                                        <div class="size-20 mx-auto mt-8 bg-pink-100 rounded-full dark:bg-pink-500/20">
                                            <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                                class="h-20 rounded-full">
                                        </div>
                                        <h5 class="mt-4 text-16">William Heineman</h5>
                                        <p class="text-slate-500 dark:text-zink-200">NextJs Developer</p>
                                    </div>
                                    <div class="mt-5">
                                        <p class="mb-3 text-slate-500 dark:text-zink-200">Object</p>
                                        <p>If several languages coalesce, the grammar of the resulting language is more
                                            simple and regular than that of the individual.</p>
                                    </div>
                                    <div class="mt-5">
                                        <p class="mb-4 text-slate-500 dark:text-zink-200">Personal Information</p>
                                        <h6 class="mb-3 font-medium"><i data-lucide="phone"
                                                class="inline-block size-4 mr-1 text-slate-500 dark:text-zink-200"></i>
                                            <span class="align-middle">+(103) 1234 567 8954</span>
                                        </h6>
                                        <h6 class="mb-3 font-medium"><i data-lucide="map-pin"
                                                class="inline-block size-4 mr-1 text-slate-500 dark:text-zink-200"></i>
                                            <span class="align-middle">California, USA</span>
                                        </h6>
                                        <h6 class="font-medium"><i data-lucide="mail"
                                                class="inline-block size-4 mr-1 text-slate-500 dark:text-zink-200"></i>
                                            <span class="align-middle">william@tailwick.com</span>
                                        </h6>
                                    </div>
                                    <div class="mt-5">
                                        <div class="flex items-center gap-2 mb-4">
                                            <p class="text-slate-500 dark:text-zink-200 grow">Settings</p>
                                            <a href="#!"
                                                class="text-sm underline text-slate-500 dark:text-zink-200 shrink-0">View
                                                More</a>
                                        </div>
                                        <div class="flex items-center mb-3">
                                            <div
                                                class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                <input type="checkbox" name="muteNotification" id="muteNotification"
                                                    class="absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none">
                                                <label for="muteNotification"
                                                    class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                            </div>
                                            <label for="muteNotification"
                                                class="inline-block text-base font-medium cursor-pointer">Mute
                                                Notifications</label>
                                        </div>
                                        <div class="flex items-center mb-3">
                                            <div
                                                class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                <input type="checkbox" name="blockAccount" id="blockAccount"
                                                    class="absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none">
                                                <label for="blockAccount"
                                                    class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                            </div>
                                            <label for="blockAccount"
                                                class="inline-block text-base font-medium cursor-pointer">Block
                                                Account</label>
                                        </div>
                                        <a href="#!">
                                            <p class="mb-3"><i data-lucide="bell-ring"
                                                    class="inline-block size-4 mr-1 text-slate-500 dark:text-zink-200"></i>
                                                <span class="align-middle">Custom Notification</span>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden tab-pane" id="fileDocument">
                                <div class="card-body">
                                    <div class="flex items-center gap-3">
                                        <button
                                            class="inline-flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i
                                                data-lucide="chevrons-left" class="size-4 mx-auto"></i></button>
                                        <h6 class="text-15 grow">Documents</h6>
                                    </div>
                                    <div class="relative mt-5">
                                        <input type="text"
                                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                            placeholder="Search for ..." autocomplete="off">
                                        <i data-lucide="search"
                                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                    </div>
                                </div>
                                <div data-simplebar class="max-h-[calc(100vh_-_380px)] xl:max-h-[calc(100vh_-_300px)]">
                                    <div class="flex flex-col gap-3">
                                        <a href="#!"
                                            class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                            <div
                                                class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                <img src="{{ URL::asset('build/images/small/img-2.jpg') }}"
                                                    alt="" class="object-cover rounded-md h-9">
                                            </div>
                                            <div class="grow">
                                                <h6>Preview-01.jpg</h6>
                                                <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                            </div>
                                        </a>
                                        <a href="#!"
                                            class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                            <div
                                                class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                TXT
                                            </div>
                                            <div class="grow">
                                                <h6>changelog.txt</h6>
                                                <p class="text-slate-500 dark:text-zink-200">140.62 KB</p>
                                            </div>
                                        </a>
                                        <a href="#!"
                                            class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                            <div
                                                class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                PSD
                                            </div>
                                            <div class="grow">
                                                <h6>tailwick-design.psd</h6>
                                                <p class="text-slate-500 dark:text-zink-200">97.59 MB</p>
                                            </div>
                                        </a>
                                        <a href="#!"
                                            class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                            <div
                                                class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt=""
                                                    class="h-6">
                                            </div>
                                            <div class="grow">
                                                <h6>logo-design.png</h6>
                                                <p class="text-slate-500 dark:text-zink-200">0.123 KB</p>
                                            </div>
                                        </a>
                                        <a href="#!"
                                            class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                            <div
                                                class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                SVG
                                            </div>
                                            <div class="grow">
                                                <h6>pattern.svg</h6>
                                                <p class="text-slate-500 dark:text-zink-200">0.802 MB</p>
                                            </div>
                                        </a>
                                        <a href="#!"
                                            class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                            <div
                                                class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                <img src="{{ URL::asset('build/images/small/img-6.jpg') }}"
                                                    alt="" class="object-cover rounded-md h-9">
                                            </div>
                                            <div class="grow">
                                                <h6>profile-bg.jpg</h6>
                                                <p class="text-slate-500 dark:text-zink-200">33.49 MB</p>
                                            </div>
                                        </a>
                                        <a href="#!"
                                            class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                            <div
                                                class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                PSD
                                            </div>
                                            <div class="grow">
                                                <h6>tailwick-design.psd</h6>
                                                <p class="text-slate-500 dark:text-zink-200">97.59 MB</p>
                                            </div>
                                        </a>
                                        <a href="#!"
                                            class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                            <div
                                                class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                ZIP
                                            </div>
                                            <div class="grow">
                                                <h6>tailwick.zip</h6>
                                                <p class="text-slate-500 dark:text-zink-200">35.89 MB</p>
                                            </div>
                                        </a>
                                        <a href="#!"
                                            class="flex items-center gap-3 !py-3 border-y border-dashed rounded-md card-body border-slate-200 dark:border-zink-500">
                                            <div
                                                class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                                PSD
                                            </div>
                                            <div class="grow">
                                                <h6>tailwick-design.psd</h6>
                                                <p class="text-slate-500 dark:text-zink-200">97.59 MB</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end -->

            <div
                class="h-[calc(100vh_-_theme('spacing.10')_*_6)] xl:min-h-[calc(100vh_-_theme('height.header')_*_2.4)] card w-full hidden [&.show]:block [&.active]:xl:block active chat-content">
                <div class="relative flex flex-col h-full">
                    <div class="card-body">
                        <div class="flex items-center gap-3">
                            <button
                                class="inline-flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md shrink-0 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i
                                    data-lucide="chevrons-left" class="size-4 mx-auto"></i></button>
                            <a href="#!" data-drawer-target="drawerEnd"
                                class="flex items-center gap-3 ltr:mr-auto rtl:ml-auto shrink-0" id="userChatProfile">
                                <div class="size-10 rounded-full bg-slate-100 dark:bg-zink-600">
                                    <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                        class="h-10 rounded-full">
                                </div>
                                <div>
                                    <h6>William Heineman</h6>
                                    <p class="text-sm text-slate-500 dark:text-zink-200">NextJS Developer</p>
                                </div>
                            </a>
                            <ul class="flex items-center">
                                <li>
                                    <a data-modal-target="callModal" href="#!"
                                        class="inline-flex items-center justify-center size-10 transition-all duration-200 ease-linear rounded-md group/item"><i
                                            data-lucide="phone"
                                            class="mx-auto transition-all size-4 duration-200 ease-linear fill-slate-100 text-slate-500 dark:fill-zink-600 dark:text-zink-200 group-hover/item:text-custom-500 dark:group-hover/item:text-custom-500 group-[.active]/item:fill-custom-100 dark:group-[.active]/item:fill-custom-500/20 group-[.active]/item:text-custom-500 dark:group-[.active]/item:text-custom-500"></i></a>
                                </li>
                                <li>
                                    <a href="#!"
                                        class="inline-flex items-center justify-center size-10 transition-all duration-200 ease-linear rounded-md group/item"><i
                                            data-lucide="video"
                                            class="mx-auto transition-all size-4 duration-200 ease-linear fill-slate-100 text-slate-500 dark:fill-zink-600 dark:text-zink-200 group-hover/item:text-custom-500 dark:group-hover/item:text-custom-500 group-[.active]/item:fill-custom-100 dark:group-[.active]/item:fill-custom-500/20 group-[.active]/item:text-custom-500 dark:group-[.active]/item:text-custom-500"></i></a>
                                </li>
                                <li>
                                    <a href="#!" id="searchChatButton"
                                        class="inline-flex items-center justify-center size-10 transition-all duration-200 ease-linear rounded-md group/item"><i
                                            data-lucide="search"
                                            class="mx-auto transition-all size-4 duration-200 ease-linear fill-slate-100 text-slate-500 dark:fill-zink-600 dark:text-zink-200 group-hover/item:text-custom-500 dark:group-hover/item:text-custom-500 group-[.active]/item:fill-custom-100 dark:group-[.active]/item:fill-custom-500/20 group-[.active]/item:text-custom-500 dark:group-[.active]/item:text-custom-500"></i></a>
                                </li>
                                <li class="hidden md:block">
                                    <a href="#!" data-drawer-target="drawerEnd"
                                        class="inline-flex items-center justify-center size-10 transition-all duration-200 ease-linear rounded-md group/item">
                                        <i data-lucide="panel-right-open"
                                            class="size-4 mx-auto transition-all duration-200 ease-linear fill-slate-100 dark:fill-zink-600 dark:text-zink-200 text-slate-500 group-hover/item:text-custom-500 group-hover/item:fill-custom-100 dark:group-hover/item:fill-custom-500/20 dark:group-hover/item:text-custom-500 group-[.active]/item:hidden block"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative bg-slate-50 dark:bg-zink-600/50 grow">
                        <div class="absolute inset-x-0 top-0 z-10 hidden transition-all duration-200 ease-linear bg-white border-y border-slate-200 dark:bg-zink-700 dark:border-zink-500"
                            id="searchChat">
                            <input type="text" class="w-full px-5 py-2 focus:outline-none"
                                placeholder="Search for ..." autocomplete="off">
                        </div>
                        <div data-simplebar class="h-[calc(100vh_-_410px)] xl:h-[calc(100vh_-_330px)]">
                            <ul class="flex flex-col gap-5 list-none card-body">
                                <li class="flex chat-message group/item [&.right]:justify-end">
                                    <div class="flex gap-3">
                                        <a href="#!"
                                            class="flex items-center self-end justify-center text-sm font-semibold rounded-full size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0 group-[.right]/item:order-3">
                                            <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                                class="object-cover rounded-full h-9">
                                        </a>
                                        <div class="grow group-[.right]/item:order-2 flex flex-col gap-3">
                                            <div class="flex gap-3">
                                                <div
                                                    class="relative p-4 bg-white dark:bg-zink-700 rounded-md ltr:rounded-bl-none rtl:rounded-br-none shadow-sm 2xl:max-w-sm ltr:group-[.right]/item:rounded-br-none rtl:group-[.right]/item:rounded-bl-none ltr:group-[.right]/item:rounded-bl-md rtl:group-[.right]/item:rounded-br-md group-[.right]/item:order-2">
                                                    Sure, I have my pen and paper ready.
                                                </div>
                                                <div
                                                    class="relative transition-all duration-200 ease-linear opacity-0 dropdown shrink-0 group-hover/item:opacity-100 group-[.right]/item:order-1">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Reply</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Forward</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Copy</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Bookmark</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex chat-message group/item [&.right]:justify-end right">
                                    <div class="flex gap-3">
                                        <a href="#!"
                                            class="flex items-center self-end justify-center text-sm font-semibold rounded-full size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0 group-[.right]/item:order-3">
                                            <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                                class="object-cover rounded-full h-9">
                                        </a>
                                        <div class="grow group-[.right]/item:order-2 flex flex-col gap-3">
                                            <div class="flex gap-3">
                                                <div
                                                    class="relative p-4 bg-white dark:bg-zink-700 rounded-md ltr:rounded-bl-none rtl:rounded-br-none shadow-sm 2xl:max-w-sm ltr:group-[.right]/item:rounded-br-none rtl:group-[.right]/item:rounded-bl-none ltr:group-[.right]/item:rounded-bl-md rtl:group-[.right]/item:rounded-br-md group-[.right]/item:order-2">
                                                    Great. Please read the notes of our last meeting for us.
                                                </div>
                                                <div
                                                    class="relative transition-all duration-200 ease-linear opacity-0 dropdown shrink-0 group-hover/item:opacity-100 group-[.right]/item:order-1">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Reply</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Forward</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Copy</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Bookmark</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex chat-message group/item [&.right]:justify-end">
                                    <div class="flex gap-3">
                                        <a href="#!"
                                            class="flex items-center self-end justify-center text-sm font-semibold rounded-full size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0 group-[.right]/item:order-3">
                                            <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                                class="object-cover rounded-full h-9">
                                        </a>
                                        <div class="grow group-[.right]/item:order-2 flex flex-col gap-3">
                                            <div class="flex gap-3">
                                                <div
                                                    class="relative p-4 bg-white dark:bg-zink-700 rounded-md ltr:rounded-bl-none rtl:rounded-br-none shadow-sm 2xl:max-w-sm ltr:group-[.right]/item:rounded-br-none rtl:group-[.right]/item:rounded-bl-none ltr:group-[.right]/item:rounded-bl-md rtl:group-[.right]/item:rounded-br-md group-[.right]/item:order-2">
                                                    Okay. First, we talked about the budget for next year.
                                                    <div class="grid grid-cols-2 gap-4 mt-4 2xl:grid-cols-3">
                                                        <a href="#!">
                                                            <img src="{{ URL::asset('build/images/small/img-3.jpg') }}"
                                                                alt="" class="rounded-md">
                                                        </a>
                                                        <a href="#!">
                                                            <img src="{{ URL::asset('build/images/small/img-5.jpg') }}"
                                                                alt="" class="rounded-md">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="relative transition-all duration-200 ease-linear opacity-0 dropdown shrink-0 group-hover/item:opacity-100 group-[.right]/item:order-1">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Reply</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Forward</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Copy</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Bookmark</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flex gap-3">
                                                <div
                                                    class="relative p-4 bg-white dark:bg-zink-700 rounded-md ltr:rounded-bl-none rtl:rounded-br-none shadow-sm 2xl:max-w-sm ltr:group-[.right]/item:rounded-br-none rtl:group-[.right]/item:rounded-bl-none ltr:group-[.right]/item:rounded-bl-md rtl:group-[.right]/item:rounded-br-md group-[.right]/item:order-2">
                                                    I will budget is getting smaller every year.
                                                </div>
                                                <div
                                                    class="relative transition-all duration-200 ease-linear opacity-0 dropdown shrink-0 group-hover/item:opacity-100 group-[.right]/item:order-1">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Reply</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Forward</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Copy</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Bookmark</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flex gap-3">
                                                <div
                                                    class="relative p-4 bg-white dark:bg-zink-700 rounded-md ltr:rounded-bl-none rtl:rounded-br-none shadow-sm 2xl:max-w-sm ltr:group-[.right]/item:rounded-br-none rtl:group-[.right]/item:rounded-bl-none ltr:group-[.right]/item:rounded-bl-md rtl:group-[.right]/item:rounded-br-md group-[.right]/item:order-2">
                                                    Second, we talked about the new products we are going to selling.
                                                </div>
                                                <div
                                                    class="relative transition-all duration-200 ease-linear opacity-0 dropdown shrink-0 group-hover/item:opacity-100 group-[.right]/item:order-1">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Reply</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Forward</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Copy</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Bookmark</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flex gap-3">
                                                <div
                                                    class="relative p-4 bg-white dark:bg-zink-700 rounded-md ltr:rounded-bl-none rtl:rounded-br-none shadow-sm 2xl:max-w-sm ltr:group-[.right]/item:rounded-br-none rtl:group-[.right]/item:rounded-bl-none ltr:group-[.right]/item:rounded-bl-md rtl:group-[.right]/item:rounded-br-md group-[.right]/item:order-2">
                                                    O.K. Third, we talked about the profits that we had last month. And
                                                    fourth, we talked about the bills we had to pay.
                                                </div>
                                                <div
                                                    class="relative transition-all duration-200 ease-linear opacity-0 dropdown shrink-0 group-hover/item:opacity-100 group-[.right]/item:order-1">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Reply</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Forward</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Copy</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Bookmark</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex chat-message group/item [&.right]:justify-end right">
                                    <div class="flex gap-3">
                                        <a href="#!"
                                            class="flex items-center self-end justify-center text-sm font-semibold rounded-full size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0 group-[.right]/item:order-3">
                                            <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                                class="object-cover rounded-full h-9">
                                        </a>
                                        <div class="grow group-[.right]/item:order-2 flex flex-col gap-3">
                                            <div class="flex gap-3">
                                                <div
                                                    class="relative p-4 bg-white dark:bg-zink-700 rounded-md ltr:rounded-bl-none rtl:rounded-br-none shadow-sm 2xl:max-w-sm ltr:group-[.right]/item:rounded-br-none rtl:group-[.right]/item:rounded-bl-none ltr:group-[.right]/item:rounded-bl-md rtl:group-[.right]/item:rounded-br-md group-[.right]/item:order-2">
                                                    Sorry, William. O.K. We have a few things to talk about today. would you
                                                    like to give your report.
                                                </div>
                                                <div
                                                    class="relative transition-all duration-200 ease-linear opacity-0 dropdown shrink-0 group-hover/item:opacity-100 group-[.right]/item:order-1">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Reply</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Forward</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Copy</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Bookmark</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex chat-message group/item [&.right]:justify-end">
                                    <div class="flex gap-3">
                                        <a href="#!"
                                            class="flex items-center self-end justify-center text-sm font-semibold rounded-full size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0 group-[.right]/item:order-3">
                                            <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                                class="object-cover rounded-full h-9">
                                        </a>
                                        <div class="grow group-[.right]/item:order-2 flex flex-col gap-3">
                                            <div class="flex gap-3">
                                                <div
                                                    class="relative p-4 bg-white dark:bg-zink-700 rounded-md ltr:rounded-bl-none rtl:rounded-br-none shadow-sm 2xl:max-w-sm ltr:group-[.right]/item:rounded-br-none rtl:group-[.right]/item:rounded-bl-none ltr:group-[.right]/item:rounded-bl-md rtl:group-[.right]/item:rounded-br-md group-[.right]/item:order-2">
                                                    Yes, thank you 🤩. I have a sales graph I would like to show everyone.
                                                    This shows how well we are selling our products this year.
                                                </div>
                                                <div
                                                    class="relative transition-all duration-200 ease-linear opacity-0 dropdown shrink-0 group-hover/item:opacity-100 group-[.right]/item:order-1">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Reply</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Forward</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Copy</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Bookmark</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex chat-message group/item [&.right]:justify-end right">
                                    <div class="flex gap-3">
                                        <a href="#!"
                                            class="flex items-center self-end justify-center text-sm font-semibold rounded-full size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0 group-[.right]/item:order-3">
                                            <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                                class="object-cover rounded-full h-9">
                                        </a>
                                        <div class="grow group-[.right]/item:order-2 flex flex-col gap-3">
                                            <div class="flex gap-3">
                                                <div
                                                    class="relative p-4 bg-white dark:bg-zink-700 rounded-md ltr:rounded-bl-none rtl:rounded-br-none shadow-sm 2xl:max-w-sm ltr:group-[.right]/item:rounded-br-none rtl:group-[.right]/item:rounded-bl-none ltr:group-[.right]/item:rounded-bl-md rtl:group-[.right]/item:rounded-br-md group-[.right]/item:order-2">
                                                    Thank you 🤩, William. Very good. Tom, do you have anything to tell
                                                    everyone.
                                                </div>
                                                <div
                                                    class="relative transition-all duration-200 ease-linear opacity-0 dropdown shrink-0 group-hover/item:opacity-100 group-[.right]/item:order-1">
                                                    <button type="button" class="dropdown-toggle"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"><i
                                                            data-lucide="more-vertical"
                                                            class="inline-block size-4 ml-1"></i></button>

                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Reply</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Forward</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Copy</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Bookmark</a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                                href="#!">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="flex items-center gap-2">
                            <div class="grow">
                                <input type="text" id="inputText"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Type your message here ..." required autocomplete="off">
                            </div>
                            <div class="flex gap-2 shrink-0">
                                <button type="button"
                                    class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-slate-500 btn bg-transparent border-transparent hover:text-slate-700 focus:text-slate-700 active:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50 dark:focus:text-zink-50 dark:active:text-zink-50"><i
                                        data-lucide="mic" class="size-4"></i></button>
                                <button type="button"
                                    class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-slate-500 btn bg-transparent border-transparent hover:text-slate-700 focus:text-slate-700 active:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50 dark:focus:text-zink-50 dark:active:text-zink-50"><i
                                        data-lucide="image" class="size-4"></i></button>
                                <button type="button"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                        data-lucide="send" class="inline-block size-4 mr-1 align-middle"></i> <span
                                        class="align-middle">Send</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end-->
            <div
                class="h-[calc(100vh_-_theme('spacing.10')_*_6)] xl:min-h-[calc(100vh_-_theme('height.header')_*_2.4)] card w-full hidden [&.show]:block [&.active]:xl:block bot-content">
                <div class="relative">
                    <div data-simplebar class="h-[calc(100vh_-_320px)] xl:h-[calc(100vh_-_250px)]">
                        <div
                            class="sticky top-0 flex items-center gap-3 shadow-sm bg-white/60 dark:bg-zink-700/30 backdrop-blur-sm card-body">
                            <div
                                class="relative flex items-center justify-center size-8 font-semibold rounded-full text-slate-500 bg-slate-100 dark:text-zink-200 dark:bg-zink-600">
                                <img src="{{ URL::asset('build/images/users/user-2.jpg') }}" alt=""
                                    class="h-8 rounded-full">
                            </div>
                            <h6>What is Tailwind CSS, and what is Utility-First CSS?</h6>
                        </div>
                        <div class="flex gap-3 card-body bg-slate-50 dark:bg-zink-600">
                            <div
                                class="flex items-center justify-center size-8 font-semibold rounded-full text-slate-500 bg-slate-100 shrink-0 dark:text-zink-200 dark:bg-zink-600">
                                <i data-lucide="bot" class="size-5"></i>
                            </div>
                            <div class="grow">
                                <p class="mb-2">Tailwind CSS is a <b>utility-first</b> CSS framework designed for rapid
                                    UI development. Instead of providing pre-built components, it offers low-level utility
                                    classes that let you build custom designs without ever leaving your HTML.</p>
                                <p class="mb-0">Utility-first CSS is an approach where you use small, single-purpose
                                    classes to build your user interface. These utility classes are composed to create
                                    complex designs directly in the HTML, rather than relying on custom CSS. This approach
                                    favors composition over inheritance, making it easier to maintain and scale your
                                    codebase.</p>
                            </div>
                        </div>
                        <div
                            class="sticky top-0 flex items-center gap-3 shadow-sm bg-white/60 backdrop-blur-sm card-body dark:bg-zink-700/30">
                            <div
                                class="relative flex items-center justify-center size-8 font-semibold rounded-full text-slate-500 bg-slate-100">
                                <img src="{{ URL::asset('build/images/users/user-2.jpg') }}" alt=""
                                    class="h-8 rounded-full">
                            </div>
                            <h6>How to install and set up Tailwind CSS in a project?</h6>
                        </div>
                        <div class="flex gap-3 card-body bg-slate-50 dark:bg-zink-600">
                            <div
                                class="flex items-center justify-center size-8 font-semibold rounded-full text-slate-500 bg-slate-100 shrink-0 dark:text-zink-200 dark:bg-zink-600">
                                <i data-lucide="bot" class="size-5"></i>
                            </div>
                            <div class="grow">
                                <p class="mb-2">To install Tailwind CSS, you can use npm or yarn by running the
                                    following commands:</p>
                                <p class="mb-2">Using npm:</p>
                                <pre class="!mb-0"><code class="!mb-0 language-js">npm install tailwindcss</code></pre>
                                <p class="mt-4 mb-2">Using yarn:</p>
                                <pre class="!mb-0"><code class="!mb-0 language-js">yarn add tailwindcss</code></pre>
                                <p class="mt-4 mb-2">After installing, create a configuration file called <code
                                        class="text-xs text-pink-500 select-all">tailwind.config.js</code> in your
                                    project's root directory using the following command:</p>
                                <pre class="!mb-0"><code class="!mb-0 language-js">npx tailwindcss init</code></pre>
                                <p class="mt-4 mb-2">In your project's CSS file, import Tailwind's base styles,
                                    components, and utilities using the <code
                                        class="text-xs text-pink-500 select-all">@import</code> directive:</p>
                                <pre class="!mb-0"><code class="!mb-0 language-css">@import 'tailwindcss/base';
@import 'tailwindcss/components';
@import 'tailwindcss/utilities';</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="flex items-center gap-2">
                            <div class="grow">
                                <input type="text" id="inputText"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Type your message here ..." required autocomplete="off">
                            </div>
                            <div class="flex gap-2 shrink-0">
                                <button type="button"
                                    class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-slate-500 btn bg-transparent border-transparent hover:text-slate-700 focus:text-slate-700 active:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50 dark:focus:text-zink-50 dark:active:text-zink-50"><i
                                        data-lucide="mic" class="size-4"></i></button>
                                <button type="button"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                        data-lucide="send" class="inline-block size-4 mr-1 align-middle"></i> <span
                                        class="align-middle">Send</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="drawerEnd" drawer-end
            class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:right-0 rtl:left-0 md:w-80 z-drawer show dark:bg-zink-600">
            <div class="h-full p-4 overflow-y-auto">
                <div>
                    <div class="flex items-center gap-3">
                        <button id="closeChatRightSidebar"
                            class="inline-flex items-center justify-center h-8 transition-all duration-200 ease-linear rounded-md shrink-0 text-slate-500 hover:text-custom-500"><i
                                data-lucide="chevrons-left" class="size-4 mx-auto"></i></button>
                        <h6 class="text-15 grow">Profile</h6>
                        <button data-drawer-close="drawerEnd"
                            class="inline-flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md shrink-0 bg-slate-100 text-slate-500 hover:text-red-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-red-500"><i
                                data-lucide="x" class="size-4 mx-auto"></i></button>
                    </div>
                    <div class="text-center">
                        <div class="size-20 mx-auto mt-8 rounded-full bg-slate-100 dark:bg-zink-600">
                            <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                class="h-20 rounded-full">
                        </div>
                        <h5 class="mt-4 text-16">William Heineman</h5>
                        <p class="text-slate-500 dark:text-zink-200">NextJs Developer</p>
                    </div>
                    <div class="mt-5">
                        <p class="mb-4 text-slate-500 dark:text-zink-200">Personal Information</p>
                        <h6 class="mb-3 font-medium"><i data-lucide="phone"
                                class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200"></i>
                            <span class="align-middle">+(103) 1234 567 8954</span>
                        </h6>
                        <h6 class="mb-3 font-medium"><i data-lucide="map-pin"
                                class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200"></i>
                            <span class="align-middle">California, USA</span>
                        </h6>
                        <h6 class="font-medium"><i data-lucide="mail"
                                class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200"></i>
                            <span class="align-middle">william@tailwick.com</span>
                        </h6>
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center gap-2 mb-4">
                            <p class="text-slate-500 dark:text-zink-200 grow">Settings</p>
                            <a href="#!" class="text-sm underline text-slate-500 dark:text-zink-200 shrink-0">View
                                More</a>
                        </div>
                        <div class="flex items-center mb-3">
                            <div
                                class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                <input type="checkbox" name="muteNotification1" id="muteNotification1"
                                    class="absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none">
                                <label for="muteNotification1"
                                    class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                            </div>
                            <label for="muteNotification1"
                                class="inline-block text-base font-medium cursor-pointer">Mute Notifications</label>
                        </div>
                        <div class="flex items-center mb-3">
                            <div
                                class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                <input type="checkbox" name="blockAccount1" id="blockAccount1"
                                    class="absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none">
                                <label for="blockAccount1"
                                    class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                            </div>
                            <label for="blockAccount1" class="inline-block text-base font-medium cursor-pointer">Block
                                Account</label>
                        </div>
                        <a href="#!">
                            <p class="mb-3"><i data-lucide="bell-ring"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200"></i>
                                <span class="align-middle">Custom Notification</span>
                            </p>
                        </a>
                    </div>
                    <div class="mt-5">
                        <p class="mb-4 text-slate-500 dark:text-zink-200">Recent Shares</p>

                        <div>
                            <div class="flex flex-col gap-3">
                                <a href="#!"
                                    class="flex items-center gap-3 p-2 border border-dashed rounded-md border-slate-200 dark:border-zink-500">
                                    <div
                                        class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                        <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""
                                            class="object-cover rounded-md h-9">
                                    </div>
                                    <div class="grow">
                                        <h6>Preview-01.jpg</h6>
                                        <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                    </div>
                                </a>
                                <a href="#!"
                                    class="flex items-center gap-3 p-2 border border-dashed rounded-md border-slate-200 dark:border-zink-500">
                                    <div
                                        class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                        TXT
                                    </div>
                                    <div class="grow">
                                        <h6>changelog.txt</h6>
                                        <p class="text-slate-500 dark:text-zink-200">140.62 KB</p>
                                    </div>
                                </a>
                                <a href="#!"
                                    class="flex items-center gap-3 p-2 border border-dashed rounded-md border-slate-200 dark:border-zink-500">
                                    <div
                                        class="flex items-center justify-center text-sm font-semibold rounded-md size-9 bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 shrink-0">
                                        PSD
                                    </div>
                                    <div class="grow">
                                        <h6>tailwick-design.psd</h6>
                                        <p class="text-slate-500 dark:text-zink-200">97.59 MB</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="addContactModal" modal-center
            class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
            <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
                <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                    <h5 class="text-16">Add Contact</h5>
                    <button data-modal-close="addContactModal"
                        class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i
                            data-lucide="x" class="size-5"></i></button>
                </div>
                <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
                    <form action="#!">
                        <div
                            class="relative size-24 mx-auto mb-4 rounded-full shadow-md bg-slate-100 profile-user dark:bg-zink-500">
                            <img src="{{ URL::asset('build/images/users/user-dummy-img.jpg') }}" alt=""
                                class="object-cover w-full h-full rounded-full user-profile-image">
                            <div
                                class="absolute bottom-0 right-0 flex items-center justify-center size-8 rounded-full profile-photo-edit">
                                <input id="profile-img-file-input" type="file"
                                    class="hidden profile-img-file-input" required>
                                <label for="profile-img-file-input"
                                    class="flex items-center justify-center size-8 bg-white rounded-full shadow-lg cursor-pointer dark:bg-zink-600 profile-photo-edit">
                                    <i data-lucide="image-plus"
                                        class="size-4 text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contactnameInput" class="inline-block mb-2 text-base font-medium">Contact
                                Name</label>
                            <input type="text" id="contactnameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="destinationInput"
                                class="inline-block mb-2 text-base font-medium">Destination</label>
                            <input type="text" id="destinationInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Destination" required>
                        </div>
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="reset" data-modal-close="addContactModal"
                                class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                            <button type="submit"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add
                                Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--end modal-->

        <div id="callModal" modal-center
            class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
            <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
                <div class="max-h-[calc(theme('height.screen')_-_180px)] p-8">
                    <div class="text-center">
                        <div class="size-20 mx-auto rounded-full bg-slate-100 dark:bg-zink-500">
                            <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                class="h-20 rounded-full">
                        </div>
                        <h5 class="mt-4 mb-1 text-16">William Heineman</h5>
                        <p class="text-green-500">Calling...</p>
                    </div>
                    <div class="flex items-center justify-center gap-3 mt-6">
                        <a href="#!"
                            class="flex items-center justify-center size-12 p-0 text-white bg-green-500 border-green-500 rounded-full btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10"><i
                                data-lucide="phone-call"></i></a>
                        <a href="#!" data-modal-close="callModal"
                            class="flex items-center justify-center size-12 text-white bg-red-500 border-red-500 rounded-full btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20"><i
                                data-lucide="phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('scripts')
        <script src="{{ URL::asset('build/js/pages/apps-chat.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endpush
