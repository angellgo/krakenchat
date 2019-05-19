<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chats')->insert([
            'id_remitente' => 1,
            'destinatario' => 'jack',
            'fecha' => Carbon::parse('02/05/2019'),
            'hora' => Carbon::parse('00:15')
        ]);

        DB::table('chats')->insert([
            'id_remitente' => 2,
            'destinatario' => 'angel',
            'fecha' => Carbon::parse('02/05/2019'),
            'hora' => Carbon::parse('00:15')
        ]);

        DB::table('chats')->insert([
            'id_remitente' => 2,
            'destinatario' => 'kike',
            'fecha' => Carbon::parse('02/05/2019'),
            'hora' => Carbon::parse('00:15')
        ]);
    }
}
