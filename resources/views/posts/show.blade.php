@extends('app')

@section('title', $post['title'])

@section('content')
    <div class="container mx-auto mt-8 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $post['title'] }}</h1>
        <p class="text-lg text-gray-700 mb-4">{{ $post['content'] }}</p>
        <p class="text-sm text-gray-500">
            <small>{{ __('messages.published_at') }}: {{ $post['created_at'] }}</small>
        </p>
    </div>
@endsection
