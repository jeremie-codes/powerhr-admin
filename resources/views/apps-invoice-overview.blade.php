@extends('layouts.master')
@section('title')
    {{ __('Overview') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Overview" pagetitle="Invoices" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
        <div class="xl:col-span-12">
            <div class="card print:shadow-none print:border-none">
                <div class="card-body print:hidden">
                    <div class="flex flex-col gap-5 md:items-center md:flex-row">
                        <div class="grow">
                            <h6 class="mb-1 text-16">#TW15090257</h6>
                            <ul class="flex items-center gap-3">
                                <li class="text-slate-500">Create: 10 July, 2023</li>
                                <li class="text-slate-500">Due: 10 July, 2023</li>
                            </ul>
                        </div>
                        <div class="flex items-center gap-2 shrink-0">
                            <button type="button"
                                class="text-white bg-purple-500 border-purple-500 btn hover:text-white hover:bg-purple-600 hover:border-purple-600 focus:text-white focus:bg-purple-600 focus:border-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:border-purple-600 active:ring active:ring-purple-100 dark:ring-purple-400/10">Download</button>
                            <button onclick="window.print()" type="button"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                    data-lucide="save" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">Save & Print</span></button>
                            <div class="relative dropdown">
                                <button
                                    class="flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                    id="categoryNotes1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-4"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="categoryNotes1">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ url('apps-invoice-add-new') }}"><i data-lucide="file-edit"
                                                class="inline-block size-3 mr-1"></i> <span
                                                class="align-middle">Edit</span></a>
                                    </li>
                                    <li>
                                        <a data-modal-target="deleteModal"
                                            class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="#!"><i data-lucide="trash-2" class="inline-block size-3 mr-1"></i>
                                            <span class="align-middle">Delete</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="!pt-0 card-body">
                    <div class="p-5 border rounded-md md:p-8 border-slate-200 dark:border-zink-500 print:p-0">
                        <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                            <div class="text-center xl:col-span-2 ltr:xl:text-left rtl:xl:text-right">
                                <div
                                    class="flex items-center justify-center size-16 mx-auto rounded-md bg-slate-100 dark:bg-zink-600 xl:mx-0">
                                    <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" class="h-8">
                                </div>
                                <h5 class="mt-4 mb-1">Themesdesign</h5>
                                <p class="text-slate-500 dark:text-zink-200">IT Software Company</p>
                            </div><!--end col-->
                            <div class="ltr:xl:text-right rtl:xl:text-left xl:col-start-10 xl:col-span-3">
                                <p class="mb-1 text-slate-500 dark:text-zink-200">Legal Registration No: <span
                                        class="font-semibold">2155420</span></p>
                                <p class="mb-1 truncate text-slate-500 dark:text-zink-200">Email: <span
                                        class="font-semibold">tailwick@themesdesign.com</span></p>
                                <p class="mb-1 text-slate-500 dark:text-zink-200">Website: <a href="https://themesdesign.in"
                                        target="_blank"
                                        class="font-semibold underline text-custom-500">www.themesdesign.in</a></p>
                                <p class="text-slate-500 dark:text-zink-200">Contact No: <span class="font-semibold">+(01)
                                        123 678 9654</span></p>
                            </div><!--end col-->
                        </div><!--end grid-->

                        <div
                            class="grid grid-cols-1 mt-6 text-center divide-y md:divide-y-0 md:divide-x rtl:divide-x-reverse divide-dashed md:grid-cols-4 divide-slate-200 dark:divide-zink-500">
                            <div class="p-3">
                                <h6 class="mb-1">#TW15090254</h6>
                                <p class="text-slate-500 dark:text-zink-200">Invoice No</p>
                            </div><!--end col-->
                            <div class="p-3">
                                <h6 class="mb-1">10 July, 2023</h6>
                                <p class="text-slate-500 dark:text-zink-200">Create Date</p>
                            </div><!--end col-->
                            <div class="p-3">
                                <h6 class="mb-1"><span
                                        class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Paid</span>
                                </h6>
                                <p class="text-slate-500 dark:text-zink-200">Payment Status</p>
                            </div><!--end col-->
                            <div class="p-3">
                                <h6 class="mb-1">$873.96</h6>
                                <p class="text-slate-500 dark:text-zink-200">Total Amount</p>
                            </div><!--end col-->
                        </div><!--end grid-->

                        <div class="grid grid-cols-1 gap-5 mt-8 md:grid-cols-2">
                            <div>
                                <p class="mb-2 text-sm uppercase text-slate-500 dark:text-zink-200">Shipping Address</p>
                                <h6 class="mb-1 text-15">Paula Keenan</h6>
                                <p class="mb-1 text-slate-500 dark:text-zink-200">176 Arvid Crest Sheastad, IA</p>
                                <p class="mb-1 text-slate-500 dark:text-zink-200">+(211) 0123 456 897</p>
                            </div><!--end col-->
                            <div>
                                <p class="mb-2 text-sm uppercase text-slate-500 dark:text-zink-200">Billing Address</p>
                                <h6 class="mb-1 text-15">Paula Keenan</h6>
                                <p class="mb-1 text-slate-500 dark:text-zink-200">176 Arvid Crest Sheastad, IA</p>
                                <p class="mb-1 text-slate-500 dark:text-zink-200">+(211) 0123 456 897</p>
                                <p class="mb-1 text-slate-500 dark:text-zink-200">TAX No. 5415421</p>
                            </div><!--end col-->
                        </div><!--end grid-->

                        <div class="mt-6 overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead class="ltr:text-left rtl:text-right">
                                    <tr>
                                        <th
                                            class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                            #</th>
                                        <th
                                            class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                            Item Name</th>
                                        <th
                                            class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                            Rate</th>
                                        <th
                                            class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                            Quantity</th>
                                        <th
                                            class="px-3.5 py-2.5 font-semibold text-slate-500 border-b border-slate-200 dark:text-zink-200 dark:border-zink-500">
                                            Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">1</td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">
                                            <h6 class="mb-1">Nazox - Premium Admin & Dashboard</h6>
                                            <p class="text-slate-500 dark:text-zink-200">Build with Bootstrap, React JS,
                                                Angular, Vue etc.</p>
                                        </td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">$24.00</td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">2</td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">$48</td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">2</td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">
                                            <h6 class="mb-1">Webadmin - Admin & Dashboard</h6>
                                            <p class="text-slate-500 dark:text-zink-200">Build with Bootstrap, React JS,
                                                Angular, Vue etc.</p>
                                        </td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">$25.00
                                        </td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">4</td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">$100</td>
                                    </tr>
                                    <tr>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">1</td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">
                                            <h6 class="mb-1">Tocly - Admin & Dashboard</h6>
                                            <p class="text-slate-500 dark:text-zink-200">Build with Bootstrap, React JS,
                                                Angular, Vue etc.</p>
                                        </td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">$16.00
                                        </td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">9</td>
                                        <td class="px-3.5 py-2.5 border-b border-slate-200 dark:border-zink-500">$144</td>
                                    </tr>
                                </tbody>
                                <tbody class="before:block before:h-3">
                                    <tr>
                                        <td colspan="3"></td>
                                        <td
                                            class="border-b border-slate-200 px-3.5 py-2.5 text-slate-500 dark:border-zink-500 dark:text-zink-200">
                                            Sub Total
                                        </td>
                                        <td
                                            class="border-b border-slate-200 px-3.5 py-2.5 text-slate-500 dark:border-zink-500 dark:text-zink-200">
                                            $292
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td
                                            class="border-b border-slate-200 px-3.5 py-2.5 text-slate-500 dark:border-zink-500 dark:text-zink-200">
                                            Estimated Tax (18%)
                                        </td>
                                        <td
                                            class="border-b border-slate-200 px-3.5 py-2.5 text-slate-500 dark:border-zink-500 dark:text-zink-200">
                                            $52.56
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td
                                            class="border-b border-slate-200 px-3.5 py-2.5 text-slate-500 dark:border-zink-500 dark:text-zink-200">
                                            Item Discounts (15%)
                                        </td>
                                        <td
                                            class="border-b border-slate-200 px-3.5 py-2.5 text-slate-500 dark:border-zink-500 dark:text-zink-200">
                                            -$43.8
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td
                                            class="border-b border-slate-200 px-3.5 py-2.5 text-slate-500 dark:border-zink-500 dark:text-zink-200">
                                            Shipping Charge
                                        </td>
                                        <td
                                            class="border-b border-slate-200 px-3.5 py-2.5 text-slate-500 dark:border-zink-500 dark:text-zink-200">
                                            $29
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td
                                            class="border-b border-slate-200 px-3.5 py-2.5 font-medium dark:border-zink-500">
                                            Total Amount
                                        </td>
                                        <td
                                            class="border-b border-slate-200 px-3.5 py-2.5 font-medium dark:border-zink-500">
                                            $329.76
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="my-5">
                            <p class="mb-2 text-sm uppercase text-slate-500 dark:text-zink-200">Payments Details</p>
                            <p class="mb-1 text-slate-500 dark:text-zink-200">Payment Method: Credit Card</p>
                            <p class="mb-1 text-slate-500 dark:text-zink-200">Card Holder: Paula Keenan</p>
                            <p class="mb-1 text-slate-500 dark:text-zink-200">Card Number: xxxx xxxx xxxx 1402</p>
                            <p class="mb-0 text-slate-500 dark:text-zink-200">Total Amount: <b>$755.96</b></p>
                        </div>

                        <div
                            class="flex gap-1 px-4 py-3 text-sm border rounded-md md:items-center border-sky-200 text-sky-500 bg-sky-50 dark:bg-sky-400/20 dark:border-sky-500/50">
                            <p><span class="font-bold">NOTES:</span> All accounts are to be paid within 7 days from receipt
                                of invoice. To be paid by cheque or credit card or direct payment online. If account is not
                                paid within 7 days the credits details supplied as confirmation of work undertaken will be
                                charged the agreed quoted fee noted above.</p>
                        </div>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->


    <div id="deleteModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteModal"
                        class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i
                            data-lucide="x" class="size-5"></i></button>
                </div>
                <img src="{{ URL::asset('build/images/delete.png') }}" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                    <div class="flex justify-center gap-2 mt-6">
                        <button type="reset" data-modal-close="deleteModal"
                            class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>
                        <button type="submit"
                            class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes,
                            Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
