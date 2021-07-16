<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_management', function (Blueprint $table) {
            $table->string('eventName');
            $table->string('bandNames');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('portfolio');
            $table->integer('ticketPrice')->unsigned();
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_management');
    }
}
