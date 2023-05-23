<nav class="bg-transparent">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            
            <div class="flex md:order-2">
                <a href="/login"  class="home-sobre" aria-current="page">
                    Login
                </a>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="/"  class="home-sobre" aria-current="page">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/mande-uma-reclamacoes" class="home-sobre">
                            Reclamações
                        </a>
                    </li>
                    <li>
                        <a href="/mande-uma-sugestao" class="home-sobre">
                            Contato
                        </a>
                    </li>
                    <li>
                        <a href="/quem-somos" class="home-sobre">
                            Sobre
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')