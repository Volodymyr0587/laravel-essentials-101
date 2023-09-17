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
    <div class="max-w-6xl mx-auto text-lg font-bold">
        {{ $header }}
    </div>
    {{ $slot }}
    <div class="max-w-6xl mx-auto text-sm font-bold">
        {{ $footer }}
    </div>
</body>
</html>