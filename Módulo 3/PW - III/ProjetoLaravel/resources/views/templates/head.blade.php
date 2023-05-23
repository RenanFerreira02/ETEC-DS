<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ url('assets/styles/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @include('templates.styles')

    <title>CamargoLabs</title>

</head>

<body class="antialiased">


    @include('templates.menu')


    <footer class="bg-none m-0">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-[#757575] sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="/" class="mr-4 hover:underline md:mr-6 ">Inicio</a>
                    </li>
                    <li>
                        <a href="/mande-uma-reclamacoes" class="mr-4 hover:underline md:mr-6">Reclamações </a>
                    </li>
                    <li>
                        <a href="/mande-uma-sugestao" class="mr-4 hover:underline md:mr-6 ">Contato</a>
                    </li>
                    <li>
                        <a href="/quem-somos" class="hover:underline">Sobre</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-[#757575] sm:text-center dark:text-gray-400">&copy; 2023. All Rights
                Reserved.</span>
        </div>
    </footer>

    <script src="assets/js/modalSuccessForm.js"></script>

</body>

</html>
