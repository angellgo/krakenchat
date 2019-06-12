<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'username' => 'Angel',
            'password' => Hash::make('angel'),
            'nombre' => 'Luis Angel',
            'apellidos' => 'Sanchez Lugo',
            'status_id' => 1,
            'genero_id' => 1
        ]);

        DB::table('users')->insert([
            'username' => 'Kike',
            'password' => Hash::make('kike'),
            'nombre' => 'Luis Enrique',
            'apellidos' => 'Gonzales Sanchez',
            'status_id' => 1,
            'genero_id' => 1
        ]);

        DB::table('users')->insert([
            'username' => 'Yure',
            'password' => Hash::make('yure'),
            'nombre' => 'Yureine',
            'apellidos' => 'Martinez',
            'status_id' => 1,
            'genero_id' => 2
        ]);

        DB::table('users')->insert([
            'username' => 'Jack',
            'password' => Hash::make('jack'),
            'nombre' => 'Jaquelin',
            'apellidos' => 'Rodriguez',
            'status_id' => 1,
            'genero_id' => 2
        ]);
    }
}
