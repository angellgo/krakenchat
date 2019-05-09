<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('genero', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genero');
            $table->timestamps();
        });

        Schema::create('status_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nombre');
            $table->string('apellidos');
            $table->tinyInteger('verificado');
            $table->unsignedInteger('status_id');
            $table->unsignedInteger('genero_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('status_id')
                ->references('id')
                ->on('status_user')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('genero_id')
                ->references('id')
                ->on('genero')
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('status_user');
        Schema::dropIfExists('genero');
        
    }
}
