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
        Schema::create('reportes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motivo');
            $table->string('descripcion')->nullable();
            $table->unsignedInteger('no_usuario');
            $table->timestamps();

            $table->foreign('no_usuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('chats', function (Blueprint $table) {
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

            // $table->foreign('destinatario')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
        });

        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('texto');
            $table->date('fecha');
            $table->time('hora');
            $table->tinyInteger('recibido') -> nullable();
            $table->tinyInteger('leido') -> nullable();
            $table->unsignedInteger('chat_id');
            
            $table->timestamps();

            $table->foreign('chat_id')
                ->references('id')
                ->on('chats')
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
        Schema::dropIfExists('mensajes');
        Schema::dropIfExists('chats');    
        Schema::dropIfExists('reportes');
    }
}
