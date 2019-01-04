<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userChildren', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('family_id')->unsigned;
            $table->string('child_last_name');
            $table->string('child_first_name');
            $table->string('child_last_kana');
            $table->string('child_first_kana');
            $table->integer('chilld_sex');
            $table->datetime('child_birth_day');
            $table->timestamps();
            
            // //外部キーの設定
            // $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    
    {
        Schema::dropIfExists('userChildren');
    }
}
