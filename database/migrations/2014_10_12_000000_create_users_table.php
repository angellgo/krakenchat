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

        Schema::create('generos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genero');
            $table->timestamps();
        });

        Schema::create('status_users', function (Blueprint $table) {
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
            $table->tinyInteger('verificado') -> nullable();
            $table->unsignedInteger('status_id');
            $table->unsignedInteger('genero_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('status_id')
                ->references('id')
                ->on('status_users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('genero_id')
                ->references('id')
                ->on('generos')
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
        Schema::dropIfExists('status_users');
        Schema::dropIfExists('generos');
        
    }
}
