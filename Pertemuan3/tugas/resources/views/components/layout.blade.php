<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/posts">Posts</a>
            <a href="/categories">Categories</a>
        </nav>
    </header>
    <div class="content">
        {{ $slot }}
    </div>
    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
</body>
</html>