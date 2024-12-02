@extends('app')

@section('title', __('messages.article_list'))

@section('content')
    <div class="container mx-auto mt-8 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ __('messages.article_list') }}</h1>
        <ul class="space-y-3">
            @foreach($posts as $post)
                <li class="text-lg text-gray-700 hover:text-blue-600">
                    {{ $post['title'] }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
