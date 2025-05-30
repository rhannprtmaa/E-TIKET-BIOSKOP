<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username'=>'user',
            'name'=> 'UserKelompok4',
            'password'=>bcrypt('user123'),
            'birthdate'=>'2004-09-18',
            'balance'=>500000,
        ]);
    }
}
