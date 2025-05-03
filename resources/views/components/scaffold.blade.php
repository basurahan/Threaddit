<!DOCTYPE html>
<html lang="en" class="size-full">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    @vite(['resources/js/app.ts', 'resources/css/app.css'])
</head>
<body class="size-full">
    {{ $slot }}

    @livewireScriptConfig
</body>
</html>