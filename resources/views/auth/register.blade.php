@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">{{ __('messages.registration') }}</h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <div class="space-y-2">
                <label for="name" class="block text-sm font-medium text-gray-700">{{ __('messages.name') }}</label>
                <input type="text" class="form-input w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" id="name" name="name" required autofocus>
            </div>

            <div class="space-y-2">
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('messages.email') }}</label>
                <input type="email" class="form-input w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" id="email" name="email" required>
            </div>

            <div class="space-y-2">
                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('messages.password') }}</label>
                <input type="password" class="form-input w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" id="password" name="password" required>
            </div>

            <div class="space-y-2">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('messages.register_password_confirmation') }}</label>
                <input type="password" class="form-input w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="space-y-2">
                <label for="role" class="block text-sm font-medium text-gray-700">{{ __('messages.role') }}</label>
                <select name="role" class="form-select w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    <option value="client">{{ __('messages.client') }}</option>
                    <option value="employee">{{ __('messages.employee') }}</option>
                    <option value="admin">{{ __('messages.admin') }}</option>
                </select>
            </div>

            <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg focus:outline-none hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                {{ __('messages.register_button') }}
            </button>
        </form>
    </div>
@endsection
