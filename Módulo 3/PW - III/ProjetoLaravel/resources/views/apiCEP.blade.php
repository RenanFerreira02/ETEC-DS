<x-app-layout>

    <x-slot name="header">
        <div class="intro">
            <h1 class="text-3xl font-bold text-gray-200">Informe o CEP</h1>
            <p class="text-lg text-gray-300 mt-4">Digite o CEP e ao sair o campo o endereço será completado. Pode
                utilizar a tecla TAB após digitar o CEP.</p>
        </div>
    </x-slot>

    <div class="flex flex-wrap justify-center items-center content-center main-top mt-5">
        <div class="lg:w-1/4 md:w-1/2">
            <form method="get" action="" class="bg-white shadow-lg rounded-md px-9 py-10 w-full m-auto">

                <h1 class="text-2xl font-bold text-center text-gray-800 mb-10">
                    Busque pelo CEP
                </h1>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="cep" id="cep"
                        class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                        placeholder=" " maxlength="9" onblur="pesquisacep(this.value);" />
                    <label for="cep"
                        class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Cep:
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input
                        class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                        placeholder=" " name="rua" type="text" id="rua" size="60" />
                    <label for="rua"
                        class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Rua:
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input
                        class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                        placeholder=" " name="bairro" type="text" id="bairro" size="40" />
                    <label for="bairro"
                        class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Bairro:
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input
                        class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                        placeholder=" " name="cidade" type="text" id="cidade" size="40" />
                    <label for="cidade"
                        class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Cidade:
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input
                        class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                        placeholder=" " name="uf" type="text" id="uf" size="2" />
                    <label for="uf"
                        class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Estado:
                    </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input
                        class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#DE3F4D] peer"
                        placeholder=" " name="ibge" type="text" id="ibge" size="8" />
                    <label for="ibge"
                        class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#DE3F4D] peer-focus:dark:text-[#DE3F4D] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        IBGE:
                    </label>
                </div>
            </form>
        </div>
    </div>

    <div class="flex flex-wrap justify-center items-center content-center main-top mt-5">
        <a href="api/reclamacoes-api">
            <button type="button"
                class="text-white border border-[#DE3F4D] hover:bg-[#DE3F4D] focus:ring-2 focus:outline-none focus:ring-[#DE3F4D] font-medium rounded-lg px-7 py-2 text-center mr-4 mb-2">
                JSON
                Reclamacoes
            </button>
        </a>
        <a href="api/laboratorio-api">
            <button type="button"
                class="text-white border border-[#DE3F4D] hover:bg-[#DE3F4D] focus:ring-2 focus:outline-none focus:ring-[#DE3F4D] font-medium rounded-lg px-7 py-2 text-center mr-4 mb-2">
                JSON
                Laboratórios
            </button>
        </a>

    </div>
</x-app-layout>
