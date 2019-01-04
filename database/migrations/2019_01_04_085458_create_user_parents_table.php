<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userParents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('family_id')->nullable();
            $table->string('user_last_name',50);
            $table->string('user_first_name',50);
            $table->string('user_last_kana',50);
            $table->string('user_first_kana',50);
            $table->string('email');
            $table->string('tel');
            $table->integer('sex');
            $table->integer('u_zip_code1');
            $table->integer('u_zip_code2');
            $table->string('u_state');
            $table->string('u_city');
            $table->string('u_address1');
            $table->string('u_address2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userParents');
    }
}