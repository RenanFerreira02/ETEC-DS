<x-app-layout>
    <x-slot name="header">
        <div class="intro">
            <h1 class="text-3xl font-bold text-gray-200">Controle de Reclamações</h1>
            <p class="text-lg text-gray-300 mt-4">Bem-vindo ao painel de controle de reclamações. Aqui você pode gerenciar todas as reclamações registradas pelos alunos.</p>
          </div>
    </x-slot>

    <section>

        <div class="w-4/5 my-5 m-auto">
            <div class="filter text-gray-300 m-auto">
                <form method="GET" action="{{ route('reclamacoes') }}" class="w-96">

                    <div class="flex items-end justufy-center">
                        <div class="mr-2 w-3/4">
                            <label for="filtroLab"
                                class="block mb-2 font-medium">
                                Filtre por Laboratório:
                            </label>
                            <select name="filtroLab" id="filtroLab"
                                class="bg-gray-700 border border-gray-600 text-gray-300 text-md rounded-lg focus:ring-[#1e4cb2] focus:border-[#1e4cb2] block w-full p-2.5">
                                <option value="">Todos</option>
                                @foreach ($lab as $nLab)
                                    <option value="{{ $nLab->id }}" {{ $filtroLab == $nLab->id ? 'selected' : '' }}>
                                        {{ $nLab->laboratorio }}
                                    </option>
                                @endforeach

                            </select>
                        </div>



                        <button type="submit"
                            class="p-3 text-sm font-medium text-white bg-[#1e4cb2] rounded-lg border border-[#1e4cb2] hover:bg-[#1e4cb5] focus:ring-2 focus:outline-none focus:ring-[#1e4cb2]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-auto lg:w-4/5 md:w-4/5">

            <table id="reclamacoesTable" class="table-fixed w-full text-base text-left text-black dark:text-black">

                <thead class="text-lg text-white bg-[#1e4cb2] dark:text-white">
                    <tr>
                        <!-- <th scope="col" class="px-6 py-3">
                        idRec
                    </th> -->

                        <th scope="col" class="px-6 py-3">
                            Laboratório
                        </th>

                        <th scope="col" class="px-6 py-3">
                            PC
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Título
                        </th>

                        <th scope="col" class="px-6 py-3 w-1/3">
                            Descrição
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Data
                            <span id="sortIcon" class="arrow-icon">

                            </span>
                        </th>

                        <th scope="col" class="px-6 py-3 text-center w-1/6">
                            Apagar
                        </th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($reclamacoes as $rec)
                        <tr
                            class="bg-[#161B26] border-b dark:bg-[#161B26] dark:border-gray-700 hover:bg-[#1C2230] dark:hover:bg-[#1C2230] text-gray-300 text-base">
                            <!--
                        <td class="px-6 py-4">
                            {{ $rec->id }}
                        </td> -->

                            <td class="px-6 py-4">
                                {{ $rec->laboratorio->laboratorio }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $rec->pc }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $rec->titulo }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $rec->descricao }}
                            </td>

                            <td class="px-6 py-4">
                                {{ date('d/m/y, h:ia', strtotime($rec->dtCriacao)) }}
                            </td>

                            <td class="px-6 py-4 text-center w-2">
                                <a href="/reclamacoes/excluir/{{ $rec->id }}">
                                    <button type="button" onclick="confirmExclusao(event)"
                                        class="text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800 dark:hover:bg-red-500">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" />
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

<script>
    function confirmExclusao(event) {
        event.preventDefault(); 
        Swal.fire({
            title: 'Confirmação de Exclusão',
            text: 'Tem certeza que deseja excluir este item?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DE3F4D',
            cancelButtonColor: '#6B7280',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = event.target.closest('a').href;
            }
        });
    }
</script>
