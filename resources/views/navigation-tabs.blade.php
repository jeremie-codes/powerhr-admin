@extends('layouts.master')
@section('title')
    {{ __('Tabs') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Tabs" pagetitle="Navigation" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Default Tabs</h6>
                <div>
                    <ul
                        class="flex flex-wrap w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs">
                        <li class="group active">
                            <a href="javascript:void(0);" data-tab-toggle data-target="home"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Home</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="Profile"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Profile</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="setting"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Settings</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="contact"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Contacts</a>
                        </li>
                    </ul>

                    <div class="mt-5 tab-content">
                        <div class="block tab-pane" id="home">
                            <p class="mb-0">
                                They all have something to say beyond the words on the page. They can come across as casual
                                or neutral, exotic or graphic. That's why it's important to think about your message, then
                                choose a font that fits. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="Profile">
                            <p class="mb-0">
                                You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to
                                combine font styles that are different but complementary, like sans serif with serif, short
                                with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer
                                mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="setting">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                                DIY synth PBR banksy irony.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="contact">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                                master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                                DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                salvia PBR, banh mi before they sold out farm-to-table VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Justified Tabs</h6>
                <div>
                    <ul
                        class="flex flex-wrap w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs">
                        <li class="group grow active">
                            <a href="javascript:void(0);" data-tab-toggle data-target="homeJustified"
                                class="inline-block px-4 py-2 text-base w-full transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Home</a>
                        </li>
                        <li class="group grow">
                            <a href="javascript:void(0);" data-tab-toggle data-target="ProfileJustified"
                                class="inline-block px-4 py-2 text-base w-full transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Profile</a>
                        </li>
                        <li class="group grow">
                            <a href="javascript:void(0);" data-tab-toggle data-target="settingJustified"
                                class="inline-block px-4 py-2 text-base w-full transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Settings</a>
                        </li>
                        <li class="group grow">
                            <a href="javascript:void(0);" data-tab-toggle data-target="contactJustified"
                                class="inline-block px-4 py-2 text-base w-full transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Contacts</a>
                        </li>
                    </ul>

                    <div class="mt-5 tab-content">
                        <div class="block tab-pane" id="homeJustified">
                            <p class="mb-0">
                                They all have something to say beyond the words on the page. They can come across as casual
                                or neutral, exotic or graphic. That's why it's important to think about your message, then
                                choose a font that fits. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="ProfileJustified">
                            <p class="mb-0">
                                You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to
                                combine font styles that are different but complementary, like sans serif with serif, short
                                with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer
                                mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="settingJustified">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                                DIY synth PBR banksy irony.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="contactJustified">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                                master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                                DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                salvia PBR, banh mi before they sold out farm-to-table VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Pills Tabs</h6>
                <div>
                    <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                        <li class="group active">
                            <a href="javascript:void(0);" data-tab-toggle data-target="homePill"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Home</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="profilePill"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Profile</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="settingPill"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Settings</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="contactPill"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Contacts</a>
                        </li>
                    </ul>

                    <div class="mt-5 tab-content">
                        <div class="block tab-pane" id="homePill">
                            <p class="mb-0">
                                They all have something to say beyond the words on the page. They can come across as casual
                                or neutral, exotic or graphic. That's why it's important to think about your message, then
                                choose a font that fits. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="profilePill">
                            <p class="mb-0">
                                You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to
                                combine font styles that are different but complementary, like sans serif with serif, short
                                with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer
                                mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="settingPill">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                                DIY synth PBR banksy irony.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="contactPill">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                                master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                                DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                salvia PBR, banh mi before they sold out farm-to-table VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Pills Justified Tabs</h6>
                <div>
                    <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                        <li class="group grow active">
                            <a href="javascript:void(0);" data-tab-toggle data-target="homePillJustified"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Home</a>
                        </li>
                        <li class="group grow ">
                            <a href="javascript:void(0);" data-tab-toggle data-target="profilePillJustified"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Profile</a>
                        </li>
                        <li class="group grow ">
                            <a href="javascript:void(0);" data-tab-toggle data-target="settingPillJustified"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Settings</a>
                        </li>
                        <li class="group grow ">
                            <a href="javascript:void(0);" data-tab-toggle data-target="contactPillJustified"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Contacts</a>
                        </li>
                    </ul>

                    <div class="mt-5 tab-content">
                        <div class="block tab-pane" id="homePillJustified">
                            <p class="mb-0">
                                They all have something to say beyond the words on the page. They can come across as casual
                                or neutral, exotic or graphic. That's why it's important to think about your message, then
                                choose a font that fits. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="profilePillJustified">
                            <p class="mb-0">
                                You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to
                                combine font styles that are different but complementary, like sans serif with serif, short
                                with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer
                                mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="settingPillJustified">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                                DIY synth PBR banksy irony.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="contactPillJustified">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                                master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                                DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                salvia PBR, banh mi before they sold out farm-to-table VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Simple Tabs</h6>
                <div>
                    <ul
                        class="flex flex-wrap w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs">
                        <li class="group active">
                            <a href="javascript:void(0);" data-tab-toggle data-target="homeSimple"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-custom-500 -mb-[1px]">Home</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="ProfileSimple"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-custom-500 -mb-[1px]">Profile</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="settingSimple"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-custom-500 -mb-[1px]">Settings</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="contactSimple"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-custom-500 -mb-[1px]">Contacts</a>
                        </li>
                    </ul>

                    <div class="mt-5 tab-content">
                        <div class="block tab-pane" id="homeSimple">
                            <p class="mb-0">
                                They all have something to say beyond the words on the page. They can come across as casual
                                or neutral, exotic or graphic. That's why it's important to think about your message, then
                                choose a font that fits. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="ProfileSimple">
                            <p class="mb-0">
                                You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to
                                combine font styles that are different but complementary, like sans serif with serif, short
                                with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer
                                mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="settingSimple">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                                DIY synth PBR banksy irony.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="contactSimple">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                                master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                                DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                salvia PBR, banh mi before they sold out farm-to-table VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Border Top Nav</h6>
                <div>
                    <ul
                        class="flex flex-wrap w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs">
                        <li class="group active">
                            <a href="javascript:void(0);" data-tab-toggle data-target="homeBorderTop"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent border-t-2 group-[.active]:text-red-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-t-red-500 dark:group-[.active]:border-t-red-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-red-500 active:text-red-500 dark:hover:text-red-500 dark:active:text-red-500 -mb-[1px]">Home</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="ProfileBorderTop"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent border-t-2 group-[.active]:text-red-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-t-red-500 dark:group-[.active]:border-t-red-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-red-500 active:text-red-500 dark:hover:text-red-500 dark:active:text-red-500 -mb-[1px]">Profile</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="settingBorderTop"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent border-t-2 group-[.active]:text-red-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-t-red-500 dark:group-[.active]:border-t-red-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-red-500 active:text-red-500 dark:hover:text-red-500 dark:active:text-red-500 -mb-[1px]">Settings</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="contactBorderTop"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent border-t-2 group-[.active]:text-red-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-t-red-500 dark:group-[.active]:border-t-red-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-red-500 active:text-red-500 dark:hover:text-red-500 dark:active:text-red-500 -mb-[1px]">Contacts</a>
                        </li>
                    </ul>

                    <div class="mt-5 tab-content">
                        <div class="block tab-pane" id="homeBorderTop">
                            <p class="mb-0">
                                They all have something to say beyond the words on the page. They can come across as casual
                                or neutral, exotic or graphic. That's why it's important to think about your message, then
                                choose a font that fits. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="ProfileBorderTop">
                            <p class="mb-0">
                                You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to
                                combine font styles that are different but complementary, like sans serif with serif, short
                                with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer
                                mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="settingBorderTop">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                                DIY synth PBR banksy irony.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="contactBorderTop">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                                master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                                DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                salvia PBR, banh mi before they sold out farm-to-table VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Icon Tabs</h6>
                <div>
                    <ul
                        class="flex flex-wrap w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs">
                        <li class="group active">
                            <a href="javascript:void(0);" data-tab-toggle data-target="homeIcon"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="home" class="inline-block size-4 mr-1"></i> <span
                                    class="align-middle">Home</span></a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="ProfileIcon"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="user-2" class="inline-block size-4 mr-1"></i> <span
                                    class="align-middle">Profile</span></a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="settingIcon"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="settings" class="inline-block size-4 mr-1"></i> <span
                                    class="align-middle">Settings</span></a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle data-target="contactIcon"
                                class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="phone" class="inline-block size-4 mr-1"></i> <span
                                    class="align-middle">Contacts</span></a>
                        </li>
                    </ul>

                    <div class="mt-5 tab-content">
                        <div class="block tab-pane" id="homeIcon">
                            <p class="mb-0">
                                They all have something to say beyond the words on the page. They can come across as casual
                                or neutral, exotic or graphic. That's why it's important to think about your message, then
                                choose a font that fits. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="ProfileIcon">
                            <p class="mb-0">
                                You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to
                                combine font styles that are different but complementary, like sans serif with serif, short
                                with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer
                                mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="settingIcon">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                                DIY synth PBR banksy irony.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="contactIcon">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                                master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                                DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                salvia PBR, banh mi before they sold out farm-to-table VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->


        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Arrow Nav Tabs</h6>
                <div>
                    <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                        <li class="group grow active">
                            <a href="javascript:void(0);" data-tab-toggle data-target="homeArrow"
                                class="relative inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:group-[.active]:text-white dark:hover:text-custom-500 dark:active:text-custom-500 -mb-[1px] before:absolute before:-bottom-1.5 before:-rotate-[135deg] before:left-2/4 before:-translate-x-2/4 before:bg-transparent group-[.active]:before:bg-custom-500 before:h-3 before:w-3">Home</a>
                        </li>
                        <li class="group grow ">
                            <a href="javascript:void(0);" data-tab-toggle data-target="profileArrow"
                                class="relative inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:group-[.active]:text-white dark:hover:text-custom-500 dark:active:text-custom-500 -mb-[1px] before:absolute before:-bottom-1.5 before:-rotate-[135deg] before:left-2/4 before:-translate-x-2/4 before:bg-transparent group-[.active]:before:bg-custom-500 before:h-3 before:w-3">Profile</a>
                        </li>
                        <li class="group grow ">
                            <a href="javascript:void(0);" data-tab-toggle data-target="settingArrow"
                                class="relative inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:group-[.active]:text-white dark:hover:text-custom-500 dark:active:text-custom-500 -mb-[1px] before:absolute before:-bottom-1.5 before:-rotate-[135deg] before:left-2/4 before:-translate-x-2/4 before:bg-transparent group-[.active]:before:bg-custom-500 before:h-3 before:w-3">Settings</a>
                        </li>
                        <li class="group grow ">
                            <a href="javascript:void(0);" data-tab-toggle data-target="contactArrow"
                                class="relative inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:group-[.active]:text-white dark:hover:text-custom-500 dark:active:text-custom-500 -mb-[1px] before:absolute before:-bottom-1.5 before:-rotate-[135deg] before:left-2/4 before:-translate-x-2/4 before:bg-transparent group-[.active]:before:bg-custom-500 before:h-3 before:w-3">Contacts</a>
                        </li>
                    </ul>

                    <div class="mt-5 tab-content">
                        <div class="block tab-pane" id="homeArrow">
                            <p class="mb-0">
                                They all have something to say beyond the words on the page. They can come across as casual
                                or neutral, exotic or graphic. That's why it's important to think about your message, then
                                choose a font that fits. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="profileArrow">
                            <p class="mb-0">
                                You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to
                                combine font styles that are different but complementary, like sans serif with serif, short
                                with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer
                                mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="settingArrow">
                            <p class="mb-0">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic
                                lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork
                                tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica.
                                DIY synth PBR banksy irony.
                            </p>
                        </div>
                        <div class="hidden tab-pane" id="contactArrow">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out
                                master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan
                                DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                salvia PBR, banh mi before they sold out farm-to-table VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Vertical Tabs</h6>
                <div class="gap-4 md:flex">
                    <ul
                        class="flex flex-col w-full mb-4 text-sm font-medium text-center md:w-36 shrink-0 nav-tabs md:mb-0">
                        <li class="group grow active">
                            <a href="javascript:void(0);" data-tab-toggle data-target="homeVertical"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Home</a>
                        </li>
                        <li class="group grow ">
                            <a href="javascript:void(0);" data-tab-toggle data-target="profileVertical"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Profile</a>
                        </li>
                        <li class="group grow ">
                            <a href="javascript:void(0);" data-tab-toggle data-target="settingVertical"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Settings</a>
                        </li>
                        <li class="group grow ">
                            <a href="javascript:void(0);" data-tab-toggle data-target="contactVertical"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">Contacts</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="block tab-pane" id="homeVertical">
                            <p class="flex gap-2 mb-2 text-slate-500 dark:text-zink-200"><i data-lucide="check-square"
                                    class="inline-block h-3.5 mt-1 shrink-0 text-green-500"></i> Raw denim you probably
                                haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                cleanse.</p>
                            <p class="flex gap-2 text-slate-500 dark:text-zink-200"><i data-lucide="check-square"
                                    class="inline-block h-3.5 mt-1 shrink-0 text-green-500"></i> Too much or too little
                                spacing, as in the example below, can make things unpleasant for the reader. The goal is to
                                make your text as comfortable to read as possible.</p>
                        </div>
                        <div class="hidden tab-pane" id="profileVertical">
                            <p class="flex gap-2 mb-2 text-slate-500 dark:text-zink-200"><i data-lucide="check-square"
                                    class="inline-block h-3.5 mt-1 shrink-0 text-green-500"></i> In some designs, you might
                                adjust your tracking to create a certain artistic effect. It can also help you fix fonts
                                that are poorly spaced to begin with.</p>
                            <p class="flex gap-2 text-slate-500 dark:text-zink-200"><i data-lucide="check-square"
                                    class="inline-block h-3.5 mt-1 shrink-0 text-green-500"></i> A wonderful serenity has
                                taken possession of my entire soul, like these sweet mornings of spring which I enjoy with
                                my whole heart.</p>
                        </div>
                        <div class="hidden tab-pane" id="settingVertical">
                            <p class="flex gap-2 mb-2 text-slate-500 dark:text-zink-200"><i data-lucide="check-square"
                                    class="inline-block h-3.5 mt-1 shrink-0 text-green-500"></i> Each design is a new,
                                unique piece of art birthed into this world, and while you have the opportunity to be
                                creative and make your own style choices.</p>
                            <p class="flex gap-2 text-slate-500 dark:text-zink-200"><i data-lucide="check-square"
                                    class="inline-block h-3.5 mt-1 shrink-0 text-green-500"></i> For that very reason, I
                                went on a quest and spoke to many different professional graphic designers and asked them
                                what graphic design tips they live.</p>
                        </div>
                        <div class="hidden tab-pane" id="contactVertical">
                            <p class="flex gap-2 mb-2 text-slate-500 dark:text-zink-200"><i data-lucide="check-square"
                                    class="inline-block h-3.5 mt-1 shrink-0 text-green-500"></i> For that very reason, I
                                went on a quest and spoke to many different professional graphic designers and asked them
                                what graphic design tips they live.</p>
                            <p class="flex gap-2 text-slate-500 dark:text-zink-200"><i data-lucide="check-square"
                                    class="inline-block h-3.5 mt-1 shrink-0 text-green-500"></i> Too much or too little
                                spacing, as in the example below, can make things unpleasant for the reader. The goal is to
                                make your text as comfortable to read as possible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
