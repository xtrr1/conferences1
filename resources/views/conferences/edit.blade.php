@extends('layouts.app')

@section('title', __('messages.edit_conference'))

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold mb-6">{{ __('messages.edit_conference') }}</h1>

        <form action="{{ route('conferences.update', $conference->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')


            <div class="form-group">
                <label for="title" class="block text-sm font-medium text-gray-700">{{ __('messages.title') }}</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $conference->title }}" required>
            </div>


            <div class="form-group">
                <label for="description" class="block text-sm font-medium text-gray-700">{{ __('messages.description') }}</label>
                <textarea name="description" id="description" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ $conference->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="date_time" class="block text-sm font-medium text-gray-700">{{ __('messages.date_time') }}</label>
                <input type="datetime-local" name="date_time" id="date_time" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ \Carbon\Carbon::parse($conference->date_time)->format('Y-m-d\TH:i') }}" required>
            </div>

            <div class="form-group">
                <label for="location" class="block text-sm font-medium text-gray-700">{{ __('messages.location') }}</label>
                <input type="text" name="location" id="location" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $conference->location }}" required>
            </div>

            <button type="submit" class="w-full py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ __('messages.update_conference') }}</button>
        </form>

        <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" class="mt-6">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500" onclick="return confirm('{{ __('messages.confirm_delete_conference') }}')">{{ __('messages.delete_conference') }}</button>
        </form>
    </div>
@endsection
