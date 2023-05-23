<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ContatoTableSeeder::class);
        $this->call(LaboratorioTableSeeder::class);
        $this->call(QuemSomosTableSeeder::class);
        $this->call(ReclamacoesTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
