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
            $table->text('title');
            $table->longText('description')->nullable();
            $table->tinyInteger('status');
            $table->date('date')->nullable();
            $table->string('time');
            $table->string('cost')->nullable();
            $table->string('available_tickets')->nullable();
            $table->string('image')->nullable();
            $table->string('organizer')->nullable();
            $table->string('organizer_email')->nullable();
            $table->string('organizer_website')->nullable();
            $table->string('organizer_phone')->nullable();
            $table->text('slug')->nullable();
            $table->text('venue_location')->nullable();
            $table->text('venue_phone')->nullable();
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
