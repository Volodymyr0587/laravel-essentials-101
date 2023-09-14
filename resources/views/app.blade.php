<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Laravel - Essentials 101</title>
</head>
<body class="m-2">
    <ul>
        <li>
            <a href="{{ route('home') }}" class="text-blue-500">Home</a>
        </li>
        <li>
            <a href="{{ route('test') }}" class="text-blue-500">Test</a>
        </li>
        <li>
            <a href="{{ route('blog') }}" class="text-blue-500">Blog</a>
        </li>
    </ul>
    @yield('content')
</body>
</html>
