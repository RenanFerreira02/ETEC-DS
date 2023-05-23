<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="p-6 text-gray-300">
                <div> Bem-Vindo(a) {{ Auth::user()->name }}!</div>
            </div>

        </div>
    </div>

    <div class="w-4/5 grid xl:grid-cols-4 sm:grid-cols-2 gap-4 m-auto items-center mx-auto mb-5 ">

        <div
            class="m-2 flex justify-evenly items-center p-5 text-center border rounded-lg shadow bg-gray-800 border-gray-700 hover:bg-[#1e293b]">
            <div class="w-1/6 text-gray-300">
                <svg class="text-gray-300" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M384 96V320H64L64 96H384zM64 32C28.7 32 0 60.7 0 96V320c0 35.3 28.7 64 64 64H181.3l-10.7 32H96c-17.7 0-32 14.3-32 32s14.3 32 32 32H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H277.3l-10.7-32H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm464 0c-26.5 0-48 21.5-48 48V432c0 26.5 21.5 48 48 48h64c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H528zm16 64h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16s7.2-16 16-16zm-16 80c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16zm32 160a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                    </path>
                    <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                </svg>
            </div>

            <div>
                <p class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">
                    {{ $totalLaboratorios ?? '' }}
                </p>
                <p class="text-xl tracking-tight text-gray-900 dark:text-gray-300">
                    Laboratórios Totais
                </p>
            </div>
        </div>

        <div
            class="m-2 flex justify-evenly items-center p-5 text-center border rounded-lg shadow bg-gray-800 border-gray-700 hover:bg-[#1e293b]">
            <div class="w-1/6 text-gray-300">
                <svg class="text-gray-300" aria-hidden="true" fill="currentColor" viewBox="0 0 512 512"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                    </path>
                    <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                </svg>
            </div>


            <div>
                <p class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">
                    {{ $totalReclamacoes ?? '' }}
                </p>
                <p class="text-xl tracking-tight text-gray-900 dark:text-gray-300">
                    Reclamações
                </p>
            </div>
        </div>

        <div
            class="m-2 flex justify-evenly items-center p-5 text-center border rounded-lg shadow bg-gray-800 border-gray-700 hover:bg-[#1e293b]">
            <div class="w-1/6 text-gray-300">
                <svg class="text-gray-300" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M160 368c26.5 0 48 21.5 48 48v16l72.5-54.4c8.3-6.2 18.4-9.6 28.8-9.6H448c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16V352c0 8.8 7.2 16 16 16h96zm48 124l-.2 .2-5.1 3.8-17.1 12.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V474.7v-6.4V468v-4V416H112 64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H448c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H309.3L208 492z" />
                    </path>
                    <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                </svg>
            </div>

            <div>
                <p class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">
                    {{ $totalContato ?? '' }}
                </p>
                <p class="text-xl tracking-tight text-gray-900 dark:text-gray-300">
                    Contato&Sugestões
                </p>
            </div>
        </div>

        <div
            class="m-2 flex justify-evenly items-center p-5 text-center border rounded-lg shadow bg-gray-800 border-gray-700 hover:bg-[#1e293b]">
            <div class="w-1/6 text-gray-300">
                <svg class="text-gray-300" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z" />
                    <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                </svg>
            </div>


            <div>
                <p class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">
                    {{ $totalDev ?? '' }}
                </p>
                <p class="text-xl tracking-tight text-gray-900 dark:text-gray-300">
                    Desenvolvedores
                </p>
            </div>
        </div>

    </div>

    <div class="flex justify-center items-center mx-auto my-10">
        <div class="grid md:grid-cols-3 gap-4 m-auto items-center w-4/5">

            <div class="md:col-span-2 p-5 h-[30em]">
                <canvas id="reclamacoesPorLab"></canvas>
            </div>

            <div class="p-5 w-4/5 h-[30em] m-auto">
                <canvas id="reclamacoesPorLabDoughnut"></canvas>
            </div>

            {{-- <div class="md:col-span-2 p-5 h-96 rounded-lg shadow border bg-gray-800 border-gray-700">
                <canvas id="reclamacoesPorLabLine"></canvas>
            </div> --}}

        </div>
    </div>

    <div class="w-4/5 flex justify-center items-center flex-wrap m-auto">
        @if ($ultimaRec)
            <div
                class="m-5 block p-6 text-left w-2/5 border-gray-200 rounded-lg shadow dark:bg-gray-800 border dark:border-gray-700 dark:hover:bg-[#1e293b]">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-gray-300">Reclamação
                    mais
                    recente:
                </h5>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">Laboratório:
                    {{ $ultimaRec->laboratorio->laboratorio }}</p>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">N° do Computador:
                    {{ $ultimaRec->pc }}
                </p>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">Feita em:
                    {{ date('d/m/y, h:ia', strtotime($ultimaRec->dtCriacao)) }}</p>
            </div>

            <div
                class="m-5 block p-6 text-left w-2/5 border-gray-200 rounded-lg shadow dark:bg-gray-800 border dark:border-gray-700 dark:hover:bg-[#1e293b]">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-gray-300">Reclamação
                    mais
                    antiga:</h5>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">Laboratório:
                    {{ $antigaRec->laboratorio->laboratorio }}</p>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">N° do Computador:
                    {{ $antigaRec->pc }}
                </p>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">Feita em:
                    {{ date('d/m/y, h:ia', strtotime($antigaRec->dtCriacao)) }}</p>
            </div>
        @else
            <div
                class="m-5 block p-6 text-left w-2/5 border-gray-200 rounded-lg shadow hover:bg-gray-100 border dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-[#1e293b]">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-gray-300">Reclamação
                    mais
                    recente:
                </h5>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">Laboratório:
                    0 </p>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">N° do Computador:
                    0
                </p>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">Feita em:
                    00/00/00</p>
            </div>

            <div
                class="m-5 block p-6 text-left w-2/5 border-gray-200 rounded-lg shadow hover:bg-gray-100 border dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-[#1e293b]">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-gray-300">Reclamação
                    mais
                    antiga:</h5>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">Laboratório:
                    0 </p>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">N° do Computador:
                    0
                </p>
                <p class="mb-2 text-xl font- tracking-tight text-gray-900 dark:text-gray-300">Feita em:
                    0 </p>
            </div>
        @endif
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- Bar --}}
    <script>
        const ctx = document.getElementById('reclamacoesPorLab').getContext('2d');

        const data = @json($reclamacoesPorLab);

        const lab = data.map(function(item) {
            return item.laboratorio;
        });

        const recLaboratorios = data.map(function(item) {
            return item.total;
        });

        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: lab,
                datasets: [{
                    label: 'Reclamações por laboratório',
                    data: recLaboratorios,
                    borderWidth: 1,
                    backgroundColor: [
                        '#f32952',
                        '#3c82f6',
                        '#fef08a',
                        '#03ffae',
                        '#6a7fdb',
                        '#fb8500',
                        'rgb(255, 90, 95, 1)',
                        '#219ebc',
                    ],
                    // borderColor: [
                    //     'rgba(255,99,132,1)',
                    //     'rgba(54, 162, 235, 1)',
                    //     'rgba(255, 206, 86, 1)',
                    //     'rgba(75, 192, 192, 1)',
                    //     'rgba(153, 102, 255, 1)',
                    //     'rgba(255, 159, 64, 1)',
                    //     'rgb(255, 90, 95, 1)',
                    // ],

                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        grid: {
                            color: '#212b42', 
                            borderColor: 'black',
                            borderWidth: 1,
                        },
                        ticks: {
                            beginAtZero: true,
                            precision: 0,
                            stepSize: 1,
                            color: '#d1d5db'
                        }
                    },
                    x: {
                        grid: {
                            color: '#212b42',
                            borderColor: 'black',
                            borderWidth: 1,
                        },
                        ticks: {
                            color: '#d1d5db'
                        }
                    }
                },
                legend: {
                    display: false,
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Reclamações por Laboratório',
                        color: '#d1d5db',
                        font: {
                            size: 18,
                            weight: 'bold',
                        }
                    },
                },
            }
        });
    </script>

    {{-- Doughnut --}}
    <script>
        const ctxDoughnut = document.getElementById('reclamacoesPorLabDoughnut').getContext('2d');

        const dataDoughnut = @json($reclamacoesPorLab);

        const labDoughnut = data.map(function(item) {
            return item.laboratorio;
        });

        const recLaboratoriosDoughnut = data.map(function(item) {
            return item.total;
        });

        const chartDoughnut = new Chart(ctxDoughnut, {
            type: 'doughnut',
            data: {
                labels: lab,
                datasets: [{
                    label: 'Reclamações por laboratório',
                    data: recLaboratorios,
                    borderWidth: 3,
                    borderRadius: 5,
                    backgroundColor: [
                        '#f32952',
                        '#3c82f6',
                        '#fef08a',
                        '#03ffae',
                        '#6a7fdb',
                        '#fb8500',
                        'rgb(255, 90, 95, 1)',
                        '#219ebc',
                    ],
                    borderColor: '#0f172a',

                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Reclamações por Laboratório',
                        color: '#d1d5db',
                        font: {
                            size: 18,
                            weight: 'bold',
                        }
                    },
                },
            }
        });
    </script>

    {{-- Line --}}
    <script>
        const ctxLine = document.getElementById('reclamacoesPorLabLine').getContext('2d');

        const dataLine = @json($reclamacoesPorLab);

        const labLine = data.map(function(item) {
            return item.laboratorio;
        });

        const recLaboratoriosLine = data.map(function(item) {
            return item.total;
        });

        const chartLine = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: lab,
                datasets: [{
                    label: 'Reclamações por laboratório',
                    data: recLaboratorios,
                    borderWidth: 2,
                    backgroundColor: '#d1d5db',
                    borderColor: '#d1d5db',
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Reclamações por Laboratório',
                        color: '#d1d5db',
                        font: {
                            size: 18,
                            weight: 'bold',
                        }
                    },
                },
                scales: {
                    y: {
                        ticks: {
                            beginAtZero: true,
                            precision: 0,
                            stepSize: 1,
                            color: '#d1d5db' // Change the font color of y-axis labels here
                        }
                    },
                    x: {
                        ticks: {
                            color: '#d1d5db' // Change the font color of x-axis labels here
                        }
                    }
                },
            }
        });
    </script>




</x-app-layout>
