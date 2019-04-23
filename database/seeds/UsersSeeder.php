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
            'id' => 1,
            'name' => "Usuario de Teste",
            'email' => 'usuario@teste.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
