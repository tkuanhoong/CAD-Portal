<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('banner');
            $table->string('title');
            $table->string('short_description');
            $table->mediumText('description');
            $table->string('location');
            $table->string('organizer');
            $table->string('category');
            $table->date('date');
            $table->time('time');
            $table->decimal('fee');
            $table->string('attendance_link');
            $table->string('whatsapp_link');
            $table->string('meeting_link');
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
