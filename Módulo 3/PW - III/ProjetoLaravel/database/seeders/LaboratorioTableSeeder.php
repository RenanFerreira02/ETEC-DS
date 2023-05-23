<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaboratorioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbLaboratorio')->insert([
            ['laboratorio' => 'Lab01'],
            ['laboratorio' => 'Lab02'],
            ['laboratorio' => 'Lab03'],
            ['laboratorio' => 'Lab04'],
            ['laboratorio' => 'Lab05'],
            ['laboratorio' => 'Lab06'],
            ['laboratorio' => 'Lab07'],
            ['laboratorio' => 'Lab08'],
        ]);
    }
}
