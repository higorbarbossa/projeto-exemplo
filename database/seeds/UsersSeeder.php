<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 999999000000,
            'name' => "Super Administrador",
            'email' => 'usuario@teste.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
