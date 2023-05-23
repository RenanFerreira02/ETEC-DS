<x-app-layout>
    <x-slot name="header">
        <div class="intro">
            <h1 class="text-3xl font-bold text-gray-200">Controle de Contato&Sugestões</h1>
            <p class="text-lg text-gray-300 mt-4">Bem-vindo ao painel de controle de Contato&Sugestões. Aqui você pode gerenciar todos os contatos e sugestões que os alunos fizeram.</p>
          </div>
    </x-slot>

    <section>
    
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6 m-auto lg:w-4/5 md:w-4/5">
    
            <table class="table-fixed w-full text-base text-left text-black dark:text-black">
    
                <thead class="text-lg text-white bg-[#1e4cb2] dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nome
                        </th>
    
                        <th scope="col" class="px-6 py-3">
                            E-Mail
                        </th>
    
                        <th scope="col" class="px-6 py-3">
                            Assunto
                        </th>
                        
                        <th scope="col" class="px-6 py-3 w-1/3">
                            Mensagem
                        </th>
    
                        <th scope="col" class="px-6 py-3 text-center w-1/6">
                            Apagar
                        </th>
    
                    </tr>
                </thead>
    
                <tbody>
    
                    @foreach( $contato AS $contacts )
                        <tr class="bg-[#161B26] border-b dark:bg-[#161B26] dark:border-gray-700 hover:bg-[#1C2230] dark:hover:bg-[#1C2230] text-gray-300 text-base">
    
                            <td class="px-6 py-4">
                                {{$contacts -> nome}}
                            </td>
    
                            <td class="px-6 py-4">
                                {{$contacts -> email}}
                            </td>
    
                            <td class="px-6 py-4">
                                {{$contacts -> assunto}}
                            </td>
    
                            <td class="px-6 py-4">
                                {{$contacts -> mensagem}}
                            </td>
    
                            <td class="px-6 py-4 text-center w-2">
                                <a href="/contato/excluir/{{$contacts -> id}}">
                                    <button 
                                        type="button" 
                                        onclick="confirmExclusao(event)"
                                        class="text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800 dark:hover:bg-red-500"
                                    >
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" />
                                        </svg>
                                        <span class="sr-only">trash icon</span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
    
                </tbody>
    
            </table>
        </div>
    
    </section>
</x-app-layout>
