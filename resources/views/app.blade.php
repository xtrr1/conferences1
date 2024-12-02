<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Konferencijų Sistema')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<nav class="bg-blue-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-white text-2xl font-semibold" href="{{ route('home') }}">Konferencijų Sistema</a>
        <div class="space-x-4">
            <a class="text-white hover:underline" href="{{ route('home') }}">Pagrindinis</a>
            <a class="text-white hover:underline" href="{{ route('admin.dashboard') }}">Administratoriaus Puslapis</a>
        </div>
    </div>
</nav>

<div class="container mx-auto mt-8 p-4">
    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
