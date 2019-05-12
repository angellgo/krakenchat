<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert([
            'genero' => "Hombre"
        ]);
        DB::table('generos')->insert([
            'genero' => "Mujer"
        ]);
        DB::table('generos')->insert([
            'genero' => "Male to Female"
        ]);
        DB::table('generos')->insert([
            'genero' => "Bi-Genero"
        ]);
        DB::table('generos')->insert([
            'genero' => "Cross-Dressed"
        ]);

        DB::table('generos')->insert([
            'genero' => "Drag-King"
        ]);

        DB::table('generos')->insert([
            'genero' => "Drag-Queen"
        ]);

        DB::table('generos')->insert([
            'genero' => "Andrógino"
        ]);

        DB::table('generos')->insert([
            'genero' => "Femme"
        ]);

        DB::table('generos')->insert([
            'genero' => "Femmale To Male"
        ]);

        DB::table('generos')->insert([
            'genero' => "Gender-Bender"
        ]);

        DB::table('generos')->insert([
            'genero' => "No Op"
        ]);

        DB::table('generos')->insert([
            'genero' => "Hijra"
        ]);

        DB::table('generos')->insert([
            'genero' => "Pangenero"
        ]);

        DB::table('generos')->insert([
            'genero' => "Transexual"
        ]);

        DB::table('generos')->insert([
            'genero' => "Transpersona"
        ]);

        DB::table('generos')->insert([
            'genero' => "Buch"
        ]);

        DB::table('generos')->insert([
            'genero' => "Two-Spirit"
        ]);

        DB::table('generos')->insert([
            'genero' => "Agender"
        ]);
        DB::table('generos')->insert([
            'genero' => "Tercer Sexo"
        ]);

        DB::table('generos')->insert([
            'genero' => "Genero fluido"
        ]);

        DB::table('generos')->insert([
            'genero' => "Transgenero no binario"
        ]);

        DB::table('generos')->insert([
            'genero' => "Hermafrodita"
        ]);

        DB::table('generos')->insert([
            'genero' => "Género Dotado"
        ]);

        DB::table('generos')->insert([
            'genero' => "Bigenero"
        ]);

        //Estados

        DB::table('status_users')->insert([
            'description' => "Activo"
        ]);

        DB::table('status_users')->insert([
            'description' => "Baneado"
        ]);

        DB::table('status_users')->insert([
            'description' => "En linea"
        ]);

        DB::table('status_users')->insert([
            'description' => "Desconectado"
        ]);
        
        
        



    }
}
