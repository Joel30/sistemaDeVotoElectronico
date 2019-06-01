<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'persona_id'=> 1,
            'usuario'=> 'admin',
            'password'=> bcrypt('admin'),
            'rol' => 'administrador'

        ]);
    }
}
