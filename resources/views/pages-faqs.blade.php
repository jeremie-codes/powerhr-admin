@extends('layouts.master')
@section('title')
    {{ __('FAQs') }}
@endsection
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/prismjs/themes/prism-okaidia.css') }}">
@endpush
@section('content')
    <!-- page title -->
    <x-page-title title="FAQ's" pagetitle="Pages" />

    <div class="relative overflow-hidden card">
        <div class="p-8">
            <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                <div class="xl:col-span-7">
                    <h4 class="mb-1">Explore support options for our products, fundamental knowledge, and beyond</h4>
                    <p class="mb-5 text-slate-500 dark:text-zink-200">Open the door to a wealth of resources and expert
                        guidance, allowing you to gain a deeper understanding of our products and access a treasure trove of
                        additional knowledge.</p>
                    <div class="relative inline-block w-2/3">
                        <input type="text"
                            class="w-full py-2 pl-4 pr-8 form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Ask a question" autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute right-2.5 top-2.5 text-slate-400 fill-slate-100 dark:text-zink-200 dark:fill-zink-500"></i>
                    </div>
                    <ul class="flex gap-2 mt-3">
                        <li><a href="#!"
                                class="px-2.5 py-0.5 text-xs font-medium rounded border bg-slate-100 border-slate-100 text-slate-500 dark:bg-zink-600 dark:border-zink-600 dark:text-zink-100">Install
                                Vite</a></li>
                        <li><a href="#!"
                                class="px-2.5 py-0.5 text-xs font-medium rounded border bg-slate-100 border-slate-100 text-slate-500 dark:bg-zink-600 dark:border-zink-600 dark:text-zink-100">React</a>
                        </li>
                        <li><a href="#!"
                                class="px-2.5 py-0.5 text-xs font-medium rounded border bg-slate-100 border-slate-100 text-slate-500 dark:bg-zink-600 dark:border-zink-600 dark:text-zink-100">Angular</a>
                        </li>
                        <li><a href="#!"
                                class="px-2.5 py-0.5 text-xs font-medium rounded border bg-slate-100 border-slate-100 text-slate-500 dark:bg-zink-600 dark:border-zink-600 dark:text-zink-100">Vue</a>
                        </li>
                    </ul>
                </div><!--end col-->
                <div class="hidden xl:col-span-3 xl:col-start-10 xl:block">
                    <img src="{{ URL::asset('build/images/faq.png') }}" alt=""
                        class="absolute h-[500px] -rotate-45 -top-28 ltr:right-8 rtl:left-8">
                </div>
            </div><!--end grid-->
        </div>
    </div><!--end card-->

    <h5 class="mb-5 underline">Popular Ask Questions</h5>

    <div class="grid grid-cols-1 gap-5 xl:grid-cols-2">
        <div>
            <div class="collapsible">
                <button class="flex items-center w-full p-3 mb-2 text-left card collapsible-header group/item">
                    How to install Tailwind CSS in a project?
                    <div class="ltr:ml-auto rtl:mr-auto shrink-0">
                        <i data-lucide="chevron-down" class="hidden size-4 group-[.show]/item:inline-block"></i>
                        <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]/item:hidden"></i>
                    </div>
                </button>
                <div class="hidden collapsible-content card">
                    <div class="card-body">
                        <p class="mb-3 text-slate-500 dark:text-zink-200">To install Tailwind CSS, you can use npm or yarn
                            by running the following commands:</p>
                        <ol class="flex flex-col gap-2 list-decimal list-inside">
                            <li>
                                <b>Using npm</b>
                                <div class="mt-2">
                                    <pre><code class="language-js">npm install tailwindcss</code></pre>
                                </div>
                            </li>
                            <div class="text-center">
                                OR
                            </div>
                            <li>
                                <b>Using yarn</b>
                                <div class="mt-2">
                                    <pre class="!mb-0"><code class="language-js !mb-0">yarn add tailwindcss</code></pre>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!--end card-->
            <div class="collapsible">
                <button class="flex items-center w-full p-3 mb-2 text-left card collapsible-header group/item">
                    How to enable dark mode in Tailwind CSS?
                    <div class="ltr:ml-auto rtl:mr-auto shrink-0">
                        <i data-lucide="chevron-down" class="hidden size-4 group-[.show]/item:inline-block"></i>
                        <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]/item:hidden"></i>
                    </div>
                </button>
                <div class="collapsible-content card">
                    <div class="card-body">
                        <p class="mb-3 text-slate-500 dark:text-zink-200">To enable dark mode in Tailwind CSS, update your
                            <code class="text-xs text-pink-500 select-all">tailwind.config.js</code> file with the <code
                                class="text-xs text-pink-500 select-all">darkMode</code> option. You can choose between two
                            different dark mode strategies: <code class="text-xs text-pink-500 select-all">media</code> or
                            <code class="text-xs text-pink-500 select-all">class</code>.
                        </p>
                        <p class="mb-3 text-slate-500 dark:text-zink-200">Using <code
                                class="text-xs text-pink-500 select-all">class</code>, the dark mode is enabled by adding a
                            <code class="text-xs text-pink-500 select-all">.dark</code> class to an ancestor element of your
                            components:
                        </p>

                        <pre class="!mb-0"><code class="!mb-0 language-js">module.exports = {
    darkMode: 'class', // or 'media'
    // ...
    }</code></pre>
                    </div>
                </div>
            </div><!--end card-->
            <div class="collapsible">
                <button class="flex items-center w-full p-3 mb-2 text-left card collapsible-header group/item">
                    How to use plugins in Tailwind CSS?
                    <div class="ltr:ml-auto rtl:mr-auto shrink-0">
                        <i data-lucide="chevron-down" class="hidden size-4 group-[.show]/item:inline-block"></i>
                        <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]/item:hidden"></i>
                    </div>
                </button>
                <div class="collapsible-content card">
                    <div class="card-body">
                        <p class="mb-3 text-slate-500 dark:text-zink-200">To get started with your first plugin, import
                            Tailwind’s <code class="text-xs text-pink-500 select-all">plugin</code> function from <code
                                class="text-xs text-pink-500 select-all">tailwindcss/plugin</code>. Then inside your <code
                                class="text-xs text-pink-500 select-all">plugins</code> array, call the imported <code
                                class="text-xs text-pink-500 select-all">plugin</code> function with an anonymous function
                            as the first argument.</p>

                        <pre class="!mb-0"><code class="!mb-0 language-js">const plugin = require('tailwindcss/plugin')

    module.exports = {
    plugins: [
        plugin(function({ addUtilities, addComponents, e, config }) {
        // Add your custom styles here
        }),
    ]
    }</code></pre>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end col-->
        <div>
            <div class="collapsible">
                <button class="flex items-center w-full p-3 mb-2 text-left card collapsible-header group/item">
                    How to customize the configuration file in Tailwind CSS?
                    <div class="ltr:ml-auto rtl:mr-auto shrink-0">
                        <i data-lucide="chevron-down" class="hidden size-4 group-[.show]/item:inline-block"></i>
                        <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]/item:hidden"></i>
                    </div>
                </button>
                <div class="collapsible-content card">
                    <div class="card-body">
                        <p class="mb-3 text-slate-500 dark:text-zink-200">You can customize the <code
                                class="text-xs text-pink-500 select-all">tailwind.config.js</code> file to override the
                            default configuration options provided by Tailwind CSS. The configuration file follows the
                            following structure:</p>
                        <pre class="!mb-0"><code class="!mb-0 language-js">module.exports = {
        purge: [],
        theme: {
            extend: {
                ...
            },
        },
        variants: {},
        plugins: [],
    }</code></pre>
                    </div>
                </div>
            </div><!--end card-->
            <div class="collapsible">
                <button class="flex items-center w-full p-3 mb-2 text-left card collapsible-header group/item">
                    How to use responsive variants in Tailwind CSS?
                    <div class="ltr:ml-auto rtl:mr-auto shrink-0">
                        <i data-lucide="chevron-down" class="hidden size-4 group-[.show]/item:inline-block"></i>
                        <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]/item:hidden"></i>
                    </div>
                </button>
                <div class="collapsible-content card">
                    <div class="card-body">
                        <p class="mb-3 text-slate-500 dark:text-zink-200">Tailwind CSS generates responsive variants for
                            most utilities, allowing you to create responsive designs easily. By default, it includes four
                            breakpoints:</p>

                        <ul class="flex flex-col gap-2 mb-2 list-disc list-inside">
                            <li><code class="text-xs text-pink-500 select-all">sm</code>: 640px</li>
                            <li><code class="text-xs text-pink-500 select-all">md</code>: 768px</li>
                            <li><code class="text-xs text-pink-500 select-all">lg</code>: 1024px</li>
                            <li><code class="text-xs text-pink-500 select-all">xl</code>: 1280px</li>
                        </ul>

                        <pre class="!mb-0"><code class="!mb-0 language-html">&lt;div class=&quot;lg:flex&quot;&gt;
    &lt;!-- Your content here --&gt;
    &lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end grid-->

    <h5 class="mb-5 underline">Products Video Tutorial</h5>

    <div class="grid grid-cols-1 gap-5 xl:grid-cols-3">
        <div class="card">
            <div class="card-body">
                <a href="https://www.youtube.com/embed/qYgogv4R8zg?si=_YxUDmc2fDgHyPae" target="_blank">
                    <h6 class="mb-4 truncate text-15">Setting Up Tailwind CSS</h6>
                </a>
                <iframe class="w-full rounded-md aspect-video"
                    src="https://www.youtube.com/embed/qYgogv4R8zg?si=_YxUDmc2fDgHyPae"></iframe>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="https://www.youtube.com/embed/TrftauE2Vyk?si=HRCFmq5956C01yB3" target="_blank">
                    <h6 class="mb-4 truncate text-15">Composing Utilities with @apply – Tailwind CSS</h6>
                </a>
                <iframe class="w-full rounded-md aspect-video"
                    src="https://www.youtube.com/embed/TrftauE2Vyk?si=HRCFmq5956C01yB3"></iframe>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="https://www.youtube.com/embed/_CntOc4hBcg?si=-gNbpwS69E8EmjvI" target="_blank">
                    <h6 class="mb-4 truncate text-15">Sorting Tailwind CSS Classes Automatically with Prettier</h6>
                </a>
                <iframe class="w-full rounded-md aspect-video"
                    src="https://www.youtube.com/embed/_CntOc4hBcg?si=-gNbpwS69E8EmjvI"></iframe>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
