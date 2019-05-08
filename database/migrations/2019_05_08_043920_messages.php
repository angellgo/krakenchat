<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motivo');
            $table->string('descripcion');
            $table->unsignedInteger('no_usuario');
            $table->timestamps();

            $table->foreign('no_usuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('chat', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_remitente');
            $table->string('destinatario');
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();

            $table->foreign('id_remitente')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('texto');
            $table->date('fecha');
            $table->time('hora');
            $table->tinyInteger('recibido');
            $table->tinyInteger('leido');
            $table->unsignedInteger('id_chat');
            
            $table->timestamps();

            $table->foreign('id_chat')
                ->references('id')
                ->on('chat')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });


    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menajes');
        Schema::dropIfExists('chat');
        Schema::dropIfExists('reporte');

    }
}
