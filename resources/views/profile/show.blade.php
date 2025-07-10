@php
    $host = request()->getHost();
    $layouts = '';

    if (Str::startsWith($host, 'client.')) {
        $layouts = 'client.layouts.master';
    } elseif (Str::startsWith($host, 'candidate.')) {
        $layouts = 'candidate.layouts.candidate.master';
    } else {
        $layouts = 'admin.layouts.master';
    }    
@endphp

@extends($layouts)

@section('title')
    {{ __('Profile') }}
@endsection

@section('content')

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
    
@endsection

@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush

