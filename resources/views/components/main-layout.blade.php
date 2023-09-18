<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Laravel - Essentials 101</title>
</head>
<body class="m-2">
    <div class="max-w-6xl mx-auto mb-8 text-lg font-bold">

        <x-flash-message />

        <div class="m-2 p-2">
            <ul class="flex">
                <li class="m-2 p-2 bg-indigo-200">
                    <a href="{{ route('posts.index') }}">Posts</a>
                </li>
                <li class="m-2 p-2 bg-indigo-200">
                    <a href="{{ route('posts.create') }}">New Post</a>
                </li>
            </ul>
        </div>
        {{ $header }}
    </div>
    {{ $slot }}
    <div class="max-w-6xl mx-auto text-sm font-bold">
        {{ $footer }}
    </div>
</body>
</html>
