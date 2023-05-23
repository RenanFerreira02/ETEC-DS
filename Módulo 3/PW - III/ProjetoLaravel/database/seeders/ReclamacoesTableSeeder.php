<?php

namespace Database\Seeders;

use App\Models\Reclamacoes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReclamacoesTableSeeder extends Seeder
{
    public function run(): void
    {
        $reclamacoes = [
            [
                'idLab' => 1,
                'pc' => 2,
                'titulo' => 'Problema no computador',
                'descricao' => 'O computador está reiniciando aleatoriamente.',
                'dtCriacao' => '2023-05-01'
            ],
            [
                'idLab' => 2,
                'pc' => 4,
                'titulo' => 'Teclado com defeito',
                'descricao' => 'Algumas teclas do teclado não estão funcionando.',
                'dtCriacao' => '2023-05-19'
            ],
            [
                'idLab' => 3,
                'pc' => 6,
                'titulo' => 'Problema na conexão de rede',
                'descricao' => 'O computador não está conseguindo se conectar à rede, impossibilitando o acesso à internet.',
                'dtCriacao' => '2023-05-04'
            ],
            [
                'idLab' => 4,
                'pc' => 8,
                'titulo' => 'Monitor com tela piscando',
                'descricao' => 'O monitor do computador está piscando intermitentemente.',
                'dtCriacao' => '2023-05-09'
            ],
            [
                'idLab' => 5,
                'pc' => 12,
                'titulo' => 'Mouse quebrado',
                'descricao' => 'O mouse do computador está com o botão esquerdo quebrado.',
                'dtCriacao' => '2023-05-10'
            ],
        ];

        foreach ($reclamacoes as $reclamacoes) {
            Reclamacoes::create($reclamacoes);
        }

    }
}
