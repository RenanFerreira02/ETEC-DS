<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CamargoLabsAdm') }}</title>

    <link rel="stylesheet" href="{{ url('assets/styles/style.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen max-h-full bg-transparent">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-[#1e293b] shadow">
                <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="bg-none m-0">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <hr class="my-6 border-gray-700 sm:mx-auto lg:my-10" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">&copy; 2023. All Rights
                Reserved.</span>
        </div>
    </footer>

    <script src="assets/js/modalDelete.js"></script>
    <script src="assets/js/modalSuccess.js"></script>
    <script src="assets/js/modalSuccessForm.js"></script>
    <script src="assets/js/viaCEP.js"></script>
</body>

</html>
