<?php

namespace Database\Seeders;

use App\Models\QuemSomos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuemSomosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $devs = [
            [
                'nome' => 'Carol',
                'sobrenome' => 'Tacats',
            ],
        ];

        foreach ( $devs as $dev ){
            QuemSomos::created($dev);
        }
    }
}
