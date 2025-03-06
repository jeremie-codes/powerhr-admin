@extends('layouts.master')
@section('title')
    {{ __('Multi Select') }}
@endsection
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/multi.js/multi.min.css') }}">
@endpush
@section('content')
    <!-- page title -->
    <x-page-title title="Multi Select" pagetitle="Forms" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="border-slate-200 card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Basic Example</h6>
                <form>
                    <select required multiple="multiple" name="favorite_fruits" id="multiselect-basic">
                        <option selected>Apple</option>
                        <option>Banana</option>
                        <option selected>Blueberry</option>
                        <option selected>Cherry</option>
                        <option>Coconut</option>
                        <option>Grapefruit</option>
                        <option>Kiwi</option>
                        <option>Lemon</option>
                        <option>Lime</option>
                        <option>Mango</option>
                        <option>Orange</option>
                        <option>Papaya</option>
                    </select>
                </form>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Headers Multi Select</h6>
                <form>
                    <select required multiple="multiple" name="favorite_cars" id="multiselect-header">
                        <option>Chevrolet</option>
                        <option>Fiat</option>
                        <option>Ford</option>
                        <option>Honda</option>
                        <option selected>Hyundai</option>
                        <option>Kia</option>
                        <option>Mahindra</option>
                        <option>Maruti</option>
                        <option>Mitsubishi</option>
                        <option>MG</option>
                        <option>Nissan</option>
                        <option>Renault</option>
                        <option selected>Skoda</option>
                        <option selected>Tata</option>
                        <option selected>Toyato</option>
                        <option>Volkswagen</option>
                    </select>
                </form>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Option Groups</h6>
                <form>
                    <select multiple="multiple" name="favorite_cars" id="multiselect-optiongroup">
                        <optgroup label="Skoda">
                            <option>Kushaq</option>
                            <option>Superb</option>
                            <option>Octavia</option>
                            <option>Rapid</option>
                        </optgroup>
                        <optgroup label="Volkswagen">
                            <option>Polo</option>
                            <option>Taigun</option>
                            <option>Vento</option>
                        </optgroup>
                    </select>
                </form>
            </div>
        </div><!--end card-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <script src="{{ URL::asset('build/libs/multi.js/multi.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/form-multi-select.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
