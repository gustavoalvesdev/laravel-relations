<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name" => "Alessandro Kobs 2",
            "email" => "suporte@b7web.com.br",
            "password" => Hash::make("123456")
        ]);

        DB::table('addresses')->insert([
            "address" => "Rua dos bobos, nº 0"
        ]);
    }
}
