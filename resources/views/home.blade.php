@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8 p-4">
        <h1 class="text-3xl font-semibold mb-6">{{ __('messages.welcome_home') }}</h1>

        @if (auth()->check())
            @if (auth()->user()->role === 'client')
                <div class="bg-blue-100 p-4 rounded-lg mb-4">
                    <h2 class="text-xl font-semibold text-blue-600">{{ __('messages.client_information') }}</h2>
                    <p class="text-gray-700">{{ __('messages.client_conferences') }}</p>
                </div>
            @elseif (auth()->user()->role === 'employee')
                <div class="bg-green-100 p-4 rounded-lg mb-4">
                    <h2 class="text-xl font-semibold text-green-600">{{ __('messages.employee_information') }}</h2>
                    <p class="text-gray-700">{{ __('messages.employee_conferences') }}</p>
                </div>
            @elseif (auth()->user()->role === 'admin')
                <div class="bg-yellow-100 p-4 rounded-lg mb-4">
                    <h2 class="text-xl font-semibold text-yellow-600">{{ __('messages.admin') }}</h2>
                    <p class="text-gray-700">{{ __('messages.admin_conferences') }}</p>
                </div>
            @endif
        @endif
    </div>
@endsection
