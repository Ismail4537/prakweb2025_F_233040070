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
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </nav>
    </header>
    <body>
        <div class="content">
            {{ $content }}
        </div>
    </body>
    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
</body>
</html>