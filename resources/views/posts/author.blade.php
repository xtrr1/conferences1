@extends('app')

@section('title', __('messages.article_author'))

@section('content')
    <div class="container mx-auto mt-8 px-4">
        <h1 class="text-3xl font-bold text-gray-800">{{ $post['title'] }}</h1>
        <p class="text-lg text-gray-600 mt-2">{{ __('messages.author') }}: <span class="font-semibold">{{ $post['author']['first_name'] }} {{ $post['author']['last_name'] }}</span></p>
    </div>
@endsection
