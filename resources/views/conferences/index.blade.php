@extends('layouts.app')

@section('title', __('messages.conference_list'))

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/custom-page.css') }}">
@endsection

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold mb-4">{{ __('messages.conference_list') }}</h1>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 border border-green-300 rounded">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('conferences.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 mb-6">
            {{ __('messages.create_new_conference') }}
        </a>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-600">{{ __('messages.title') }}</th>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-600">{{ __('messages.description') }}</th>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-600">{{ __('messages.date_time') }}</th>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-600">{{ __('messages.location') }}</th>
                    <th class="px-6 py-3 bg-gray-100 text-left text-sm font-medium text-gray-600">{{ __('messages.actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($conferences as $conference)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800">
                            <a href="{{ route('conferences.show', $conference->id) }}" class="text-blue-600 hover:underline">
                                {{ $conference->title }}
                            </a>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $conference->description }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ \Carbon\Carbon::parse($conference->date_time)->format('Y-m-d H:i') }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $conference->location }}</td>
                        <td class="px-6 py-4 text-sm">
                            <a href="{{ route('conferences.edit', $conference->id) }}" class="inline-block px-4 py-2 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-600">
                                {{ __('messages.edit') }}
                            </a>
                            <a href="{{ route('conferences.show', $conference->id) }}" class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
                                {{ __('messages.view') }}
                            </a>
                            <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" class="inline-block" onsubmit="return confirm('{{ __('messages.confirm_delete') }}');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-block px-4 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700">
                                    {{ __('messages.delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
