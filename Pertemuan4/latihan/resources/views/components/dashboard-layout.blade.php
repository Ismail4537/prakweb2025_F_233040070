<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <nav class="bg-white border-b border-gray-200 px-4 py-3 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">
                <a href="{{ route('dashboard.index') }}">
                    Dashboard
                </a>
            </h1>
            <h1 class="text-2xl font-bold text-gray-800">
                <a href="/">
                    Home
                </a>
            </h1>
            <div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-gray-600 hover:text-gray-800 font-medium">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </nav>
        <main class="container mx-auto px-4 py-6">
            {{ $slot }}
        </main>
    </header>
</body>
</html>