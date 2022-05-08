<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body class="antialiased">
<div
    class="relative flex flex-col items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 py-4 sm:pt-0">
    @if (Route::has('login'))

    @endif

    <x-jet-application-logo class="block mx-auto h-12"/>
    <div class="mx-auto mt-10 sm:px-6 lg:px-8 w-full border-t-2 border-yellow-500 text-center">
        <div class="px-6 py-4 block mx-auto">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="text-sm text-gray-700 dark:text-gray-500 underline">Panel de control</a>
            @else
                <a href="{{ route('login') }}"
                   class="text-sm text-white dark:text-gray-500 bg-green-600 p-4 rounded-lg hover:shadow-lg hover:shadow-green-700">Ingresar</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 text-sm text-white dark:text-gray-500 bg-green-600 p-4 rounded-lg hover:shadow-lg hover:shadow-green-700">Crear
                        cuenta</a>
                @endif
            @endauth
        </div>
    </div>
</div>
</body>
</html>
