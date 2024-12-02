@extends('layouts.app')

@section('title', __('messages.conference'))

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold mb-4">{{ $conference->title }}</h1>
        <p class="text-lg mb-4">{{ $conference->description }}</p>

        <div class="mb-4">
            <p class="text-sm font-medium text-gray-700">
                <strong>{{ __('messages.date_time') }}:</strong>
                {{ \Carbon\Carbon::parse($conference->date_time)->format('Y-m-d H:i') }}
            </p>
        </div>

        <div class="mb-4">
            <p class="text-sm font-medium text-gray-700">
                <strong>{{ __('messages.location') }}:</strong> {{ $conference->location }}
            </p>
        </div>

        <a href="{{ route('conferences.index') }}" class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            {{ __('messages.back_to_list') }}
        </a>
    </div>
@endsection
