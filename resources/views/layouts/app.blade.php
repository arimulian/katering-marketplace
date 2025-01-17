<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="bg-gray-50 dark:bg-gray-800">
        <x-navbar/>
        <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <x-sidebar/>
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    </body>
</html>
