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

                <button type="button"
                    class="inline-flex relative justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-75 ease-linear bg-topbar rounded-md btn hover:bg-slate-100 group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-dark group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-brand group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:dark:border-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[layout=horizontal]:flex group-data-[layout=horizontal]:md:hidden hamburger-icon"
                    id="topnav-hamburger-icon">
                    <i data-lucide="chevrons-left" class="w-5 h-5 group-data-[sidebar-size=sm]:hidden"></i>
                    <i data-lucide="chevrons-right" class="hidden w-5 h-5 group-data-[sidebar-size=sm]:block"></i>
                </button>

                <div class="flex gap-3 ms-auto">
                    <div class="relative flex items-center dropdown h-header">
                        <button type="button"
                            class="inline-flex justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar rounded-md dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=dark]:dark:text-zink-500 group-data-[topbar=dark]:dark:hover:text-zink-50"
                            id="flagsDropdown" data-bs-toggle="dropdown">
                            @switch(Session::get('lang'))
                                @case('en')
                                    <img src="{{ URL::asset('build/images/flags/20/us.svg') }}" alt=""
                                        id="header-lang-img" class="h-5 rounded-sm">
                                @break

                                @default
                                    <img src="{{ URL::asset('build/images/flags/20/fr.svg') }}" alt=""
                                        id="header-lang-img" class="h-5 rounded-sm">
                            @endswitch
                        </button>
                        <div class="absolute z-50 hidden p-4 ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[10rem] flex flex-col gap-4 dark:bg-zink-600"
                            aria-labelledby="flagsDropdown">
                            <a href="{{ url('index/fr') }}" class="flex items-center gap-3 group/items language"
                                data-lang="fr" title="French">
                                <img src="{{ URL::asset('build/images/flags/20/fr.svg') }}" alt=""
                                    class="object-cover h-4 rounded-full">
                                <h6
                                    class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">
                                    French</h6>
                            </a>

                            <a href="{{ url('index/en') }}" class="flex items-center gap-3 group/items language"
                                data-lang="en" title="English">
                                <img src="{{ URL::asset('build/images/flags/20/us.svg') }}" alt=""
                                    class="object-cover h-4 rounded-full">
                                <h6
                                    class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">
                                    English</h6>
                            </a>
                        </div>
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
                                    <p class="text-slate-500 dark:text-zink-300">Amin</p>
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


<div id="cartSidePenal" drawer-end
    class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow dark:bg-zink-600 ltr:right-0 rtl:left-0 md:w-96 z-drawer show">
    <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
        <div class="grow">
            <h5 class="mb-0 text-16">Shopping Cart <span
                    class="inline-flex items-center justify-center w-5 h-5 ml-1 text-[11px] font-medium border rounded-full text-white bg-custom-500 border-custom-500">3</span>
            </h5>
        </div>
        <div class="shrink-0">
            <button data-drawer-close="cartSidePenal"
                class="transition-all duration-150 ease-linear text-slate-500 hover:text-slate-800"><i data-lucide="x"
                    class="size-4"></i></button>
        </div>
    </div>
    <div class="px-4 py-3 text-sm text-green-500 border border-transparent bg-green-50 dark:bg-green-400/20">
        <span class="font-bold underline">TAILWICK50</span> Coupon code applied successfully.
    </div>
    <div>
        <div class="h-[calc(100vh_-_370px)] p-4 overflow-y-auto product-list">
            <div class="flex flex-col gap-4">
                <div class="flex gap-2 product">
                    <div
                        class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-100 shrink-0 dark:bg-zink-500">
                        <img src="{{ URL::asset('build/images/product/img-01.png') }}" alt=""
                            class="h-8">
                    </div>
                    <div class="overflow-hidden grow">
                        <div class="ltr:float-right rtl:float-left">
                            <button
                                class="transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500"><i
                                    data-lucide="x" class="size-4"></i></button>
                        </div>
                        <a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500">
                            <h6 class="mb-1 text-15">Cotton collar t-shirts for men</h6>
                        </a>
                        <div class="flex items-center mb-3">
                            <h5 class="text-base product-price"> $<span>155.32</span></h5>
                            <div class="font-normal rtl:mr-1 ltr:ml-1 text-slate-500 dark:text-zink-200">(Fashion)
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-3">
                            <div class="inline-flex text-center input-step">
                                <button type="button"
                                    class="border w-9 h-9 leading-[15px] minus bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i
                                        data-lucide="minus" class="inline-block size-4"></i></button>
                                <input type="number"
                                    class="w-12 text-center h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500"
                                    value="2" min="0" max="100" readonly>
                                <button type="button"
                                    class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-9 h-9 border-slate-200 plus text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i
                                        data-lucide="plus" class="inline-block size-4"></i></button>
                            </div>
                            <h6 class="product-line-price">310.64</h6>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 product">
                    <div
                        class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-100 shrink-0 dark:bg-zink-500">
                        <img src="{{ URL::asset('build/images/product/img-03.png') }}" alt=""
                            class="h-8">
                    </div>
                    <div class="overflow-hidden grow">
                        <div class="ltr:float-right rtl:float-left">
                            <button
                                class="transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500"><i
                                    data-lucide="x" class="size-4"></i></button>
                        </div>
                        <a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500">
                            <h6 class="mb-1 text-15">Like style travel black handbag</h6>
                        </a>
                        <div class="flex items-center mb-3">
                            <h5 class="text-base product-price"> $<span>349.95</span></h5>
                            <div class="font-normal rtl:mr-1 ltr:ml-1 text-slate-400 dark:text-zink-200">(Luggage)
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-3">
                            <div class="inline-flex text-center input-step">
                                <button type="button"
                                    class="border w-9 h-9 leading-[15px] minus bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i
                                        data-lucide="minus" class="inline-block size-4"></i></button>
                                <input type="number"
                                    class="w-12 text-center h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500"
                                    value="1" min="0" max="100" readonly>
                                <button type="button"
                                    class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-9 h-9 border-slate-200 plus text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i
                                        data-lucide="plus" class="inline-block size-4"></i></button>
                            </div>
                            <h6 class="product-line-price">349.95</h6>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 product">
                    <div
                        class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-100 shrink-0 dark:bg-zink-500">
                        <img src="{{ URL::asset('build/images/product/img-09.png') }}" alt=""
                            class="h-8">
                    </div>
                    <div class="overflow-hidden grow">
                        <div class="ltr:float-right rtl:float-left">
                            <button
                                class="transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500"><i
                                    data-lucide="x" class="size-4"></i></button>
                        </div>
                        <a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500">
                            <h6 class="mb-1 text-15">Blive Printed Men Round Neck</h6>
                        </a>
                        <div class="flex items-center mb-3">
                            <h5 class="text-base product-price">$<span>546.74</span></h5>
                            <div class="font-normal rtl:mr-1 ltr:ml-1 text-slate-400 dark:text-zink-200">(Fashion)
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-3">
                            <div class="inline-flex text-center input-step">
                                <button type="button"
                                    class="border w-9 h-9 leading-[15px] minus bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i
                                        data-lucide="minus" class="inline-block size-4"></i></button>
                                <input type="number"
                                    class="w-12 text-center h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500"
                                    value="4" min="0" max="100" readonly>
                                <button type="button"
                                    class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-9 h-9 border-slate-200 plus text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i
                                        data-lucide="plus" class="inline-block size-4"></i></button>
                            </div>
                            <h6 class="product-line-price end">2,186.96</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 border-t border-slate-200 dark:border-zink-500">

            <table class="w-full mb-3 ">
                <tbody class="table-total">
                    <tr>
                        <td class="py-2">Sub Total :</td>
                        <td class="text-right cart-subtotal">$2,847.55</td>
                    </tr>
                    <tr>
                        <td class="py-2">Discount <span class="text-muted">(TAILWICK50)</span>:</td>
                        <td class="text-right cart-discount">-$476.00</td>
                    </tr>
                    <tr>
                        <td class="py-2">Shipping Charge :</td>
                        <td class="text-right cart-shipping">$89.00</td>
                    </tr>
                    <tr>
                        <td class="py-2">Estimated Tax (12.5%) : </td>
                        <td class="text-right cart-tax">$70.62</td>
                    </tr>
                    <tr class="font-semibold">
                        <td class="py-2">Total : </td>
                        <td class="text-right cart-total">$2,531.17</td>
                    </tr>
                </tbody>
            </table>
            <div class="flex items-center justify-between gap-3">
                <a href="{{ url('apps-ecommerce-product-grid') }}"
                    class="w-full text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10">Continue
                    Shopping</a>
                <a href="{{ url('apps-ecommerce-checkout') }}"
                    class="w-full text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Checkout</a>
            </div>
        </div>
    </div>
</div>
