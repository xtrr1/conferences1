@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="flex justify-center">
            <div class="w-full max-w-2xl">
                <div class="bg-gray-800 text-white rounded-lg shadow-md">
                    <div class="px-6 py-4">
                        <h4 class="text-xl font-semibold">{{ __('messages.create_new_conference') }}</h4>
                    </div>

                    <div class="px-6 py-4">
                        <form action="{{ route('conferences.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-white-700">{{ trans('messages.title') }}</label>
                                <input type="text" name="title" id="title" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="{{ trans('messages.enter_title') }}" required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-white-700">{{ trans('messages.description') }}</label>
                                <textarea name="description" id="description" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="{{ trans('messages.enter_description') }}" rows="4" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="date_time" class="block text-sm font-medium text-white-700">{{ trans('messages.date_time') }}</label>
                                <input type="datetime-local" name="date_time" id="date_time" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-300" required>
                            </div>

                            <div class="mb-4">
                                <label for="location" class="block text-sm font-medium text-white-700">{{ trans('messages.location') }}</label>
                                <input type="text" name="location" id="location" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="{{ trans('messages.enter_location') }}" required>
                            </div>

                            <div class="flex justify-between">
                                <button type="submit" class="px-6 py-2 text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">{{ trans('messages.save_conference') }}</button>
                                <a href="{{ route('conferences.index') }}" class="px-6 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500">{{ trans('messages.back') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
