<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.conferences') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">


<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-white text-xl">{{ __('messages.conferences') }}</a>
        <div class="space-x-4">
            <a href="{{ route('home') }}" class="text-white hover:underline">{{ __('messages.home') }}</a>
            <a href="{{ route('conferences.index') }}" class="text-white hover:underline">{{ __('messages.conferences') }}</a>
            @guest
                <a href="{{ route('login') }}" class="text-white hover:underline">{{ __('messages.login') }}</a>
                <a href="{{ route('register') }}" class="text-white hover:underline">{{ __('messages.register') }}</a>
            @else
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white hover:underline">{{ __('messages.logout') }}</button>
                </form>
            @endguest
        </div>
    </div>
</nav>


<div class="container mx-auto mt-6 px-4">
    @yield('content')
</div>

</body>
</html>
