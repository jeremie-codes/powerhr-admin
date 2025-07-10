@extends('client.layouts.master')
@section('title')
    {{ __('Add New') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Profile" pagetitle="Entreprise profile" />

    <div class="card">
        <div class="card-body">
            <form action="{{ route('customer.store') }}" method="POST" id="customerForm">
                @csrf
                <h6 class="mb-4 text-gray-800 underline text-16 dark:text-zink-50">Generale Info:</h6>
                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                    <div class="xl:col-span-3">
                        <label for="legalRegistrationNo" class="inline-block mb-2 text-base font-medium">
                            Organisation Name
                        </label>
                        <input type="text" id="legalRegistrationNo"
                            name="name"
                            value="{{ Auth::user()->customer ? Auth::user()->customer->name : '' }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Organisation Name" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="emailInvoiceInput" class="inline-block mb-2 text-base font-medium">Email (Professionel)</label>
                        <input type="email" id="emailInvoiceInput"
                            name="email"
                            value="{{ Auth::user()->customer ? Auth::user()->customer->profile_mail : '' }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="tailwick@themesdesign.com" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="websiteInput" class="inline-block mb-2 text-base font-medium">SiteWeb</label>
                        <input type="url" id="websiteInput"
                            name="website"
                            value="{{ Auth::user()->customer ? Auth::user()->customer->website : '' }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="https://www.themesdesign.in" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="contactInput" class="inline-block mb-2 text-base font-medium">
                            Phone
                        </label>
                        <input type="number" id="contactInput"
                            name="phone"
                            value="{{ Auth::user()->customer ? Auth::user()->customer->phone : '' }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="(241) 1234 567 8900" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="paymentStatus" class="inline-block mb-2 text-base font-medium">
                            Country
                        </label>
                        <select
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            data-choices data-choices-search-false name="country" id="paymentStatus">
                            <option value="">Select Country</option>
                            <option value="rdc" {{ (old('country') == 'rdc' || (Auth::user()->customer && Auth::user()->customer->country == 'rdc')) ? 'selected' : '' }}>RDC-kinshasa</option>
                            
                        </select>
                    </div><!--end col-->

                    <div class="xl:col-span-3">
                        <label for="activity" class="inline-block mb-2 text-base font-medium">
                            Activity
                        </label>
                        <select
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            data-choices data-choices-search-false name="activity" id="activity" required>
                            <option value="">Select Activity</option>
                            <option value="education" {{ (old('activity') == 'education' || (Auth::user()->customer && Auth::user()->customer->activity == 'education')) ? 'selected' : '' }}>Education</option>
                            <option value="health" {{ (old('activity') == 'health' || (Auth::user()->customer && Auth::user()->customer->activity == 'health')) ? 'selected' : '' }}>Health</option>
                            <option value="business" {{ (old('activity') == 'business' || (Auth::user()->customer && Auth::user()->customer->activity == 'business')) ? 'selected' : '' }}>Business</option>
                            <option value="other" {{ (old('activity') == 'other' || (Auth::user()->customer && Auth::user()->customer->activity == 'other')) ? 'selected' : '' }}>Other</option>
                        </select>
                    </div><!--end col--><!--end col-->
                </div><!--end grid-->

                <h6 class="my-5 underline text-16">Contact Info:</h6>
                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12 changeAddress">
                    <div class="xl:col-span-3">
                        <label for="fullNameShippingInput" class="inline-block mb-2 text-base font-medium">Full Name</label>
                        <input type="text" id="fullNameShippingInput"
                            name="contact_name"
                            value="{{ Auth::user()->customer ? Auth::user()->customer->contact_name : '' }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Full Name" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="phoneNoShippingInput" class="inline-block mb-2 text-base font-medium">Phone
                            No.</label>
                        <input type="number" id="phoneNoShippingInput"
                            name="contact_phone"
                            value="{{ Auth::user()->customer ? Auth::user()->customer->contact_phone : '' }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="(00) 1234 567 8956" required>
                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <label for="emailInvoiceInput" class="inline-block mb-2 text-base font-medium">Email</label>
                        <input type="email" id="emailInvoiceInput"
                            name="contact_email"
                            value="{{ Auth::user()->customer ? Auth::user()->customer->contact_email : '' }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="tailwick@themesdesign.com" required>
                    </div><!--end col-->
                    <div class="xl:col-span-12">
                        <label for="addressShippingInput" class="inline-block mb-2 text-base font-medium">Address</label>
                        <textarea
                            name="address"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Address" id="addressShippingInput" rows="3">{{ Auth::user()->customer ? Auth::user()->customer->adress : '' }}</textarea>
                    </div><!--end col-->
                </div><!--end grid-->

                <h6 class="my-5 underline text-16">Location Info:</h6>
                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                    <div class="xl:col-span-3">
                        <label for="fullNameBillingInput" class="inline-block mb-2 text-base font-medium">
                            City
                        </label>
                        <input type="text" id="fullNameBillingInput"
                            name="city"
                            value="{{ Auth::user()->customer ? Auth::user()->customer->city : '' }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Full Name" required>
                    </div><!--end col-->
                    <div class="xl:col-span-12">
                        <label for="addressBillingInput" class="inline-block mb-2 text-base font-medium">
                            Description
                        </label>
                        <textarea
                            name="description"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Address" id="addressBillingInput" rows="3">{{ Auth::user()->customer ? Auth::user()->customer->description : '' }}</textarea>
                    </div><!--end col-->
                </div><!--end grid-->
                <div class="flex justify-end gap-2 mt-5">
                    <button type="button"
                        class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50"><i
                            data-lucide="refresh-ccw" class="inline-block size-4 mr-1"></i> <span
                            class="align-middle">Annuler</span></button>
                    <button
                        type="submit"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                            data-lucide="save" class="inline-block size-4 mr-1"></i> <span
                            class="align-middle">Enregistrer</span></button>
                </div>
            </form>
        </div>
    </div><!--end card-->

    <div
        class="fixed hidden sessionSuccess right-10 p-3 pr-12 text-sm text-red-500 border border-transparent rounded-md bg-red-100 dark:bg-red-500/20" style="top: 80px;">
        <button
            class="top-0 top-0 right-0 p-3 text-red-200 transition hover:text-red-500 dark:text-red-400/50 dark:hover:text-red-500"><i
                class="h-5"></i></button>
        <span class="font-bold">Veillez remplir tout le champs svp !</span>
        <script>
            setTimeout(() => {
                document.querySelector('.sessionSuccess').classList.add('hidden')
            }, 5000);
        </script>
    </div>

    
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/js/pages/invoice-create.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('#customerForm');

            if (!form) {
                console.warn("Formulaire non trouvé");
                return;
            }

            const messages = {
                name: "Veuillez entrer le nom de l'organisation.",
                email: "Veuillez entrer une adresse e-mail valide.",
                website: "Veuillez entrer le site web.",
                phone: "Veuillez entrer le numéro de téléphone.",
                country: "Veuillez sélectionner un pays.",
                activity: "Veuillez sélectionner une activité.",
                contact_name: "Veuillez entrer le nom du contact.",
                contact_phone: "Veuillez entrer le téléphone du contact.",
                contact_email: "Veuillez entrer l'email du contact.",
                city: "Veuillez entrer la ville.",
            };

            form.querySelectorAll('[required]').forEach(input => {
                input.addEventListener('invalid', function () {
                    document.querySelector('.sessionSuccess').classList.remove('hidden');
                });

                input.addEventListener('input', function () {
                    input.setCustomValidity('');
                });
            });
        });
    </script>
@endpush


