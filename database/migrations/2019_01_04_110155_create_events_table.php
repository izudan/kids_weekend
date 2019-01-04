<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id');
            $table->datetime('event_date');
            $table->datetime('event_start_time');
            $table->datetime('event_end_time');
            $table->integer('event_capacity_members');
            $table->integer('event_target_min_age');
            $table->integer('event_target_max_age');
            $table->integer('event_parent_attendant');
            $table->integer('event_price');
            $table->integer('event_cancelation_policy');
            $table->boolean('event_pub_status');
            $table->integer('event_arival_time');
            $table->string('event_state');
            $table->string('event_city');
            $table->string('event_addres1');
            $table->string('event_addres2');
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
        Schema::dropIfExists('events');
    }
}