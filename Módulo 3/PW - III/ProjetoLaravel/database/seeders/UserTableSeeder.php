<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Adm',
                'email' => 'adm@email.com',
                'password' => Hash::make('123456789'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
