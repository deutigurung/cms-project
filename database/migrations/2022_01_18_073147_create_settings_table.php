<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title')->nullable();
            $table->string('site_desc')->nullable();
            $table->text('site_keywords')->nullable();
            $table->string('site_url')->nullable();
            $table->tinyInteger('site_status');
            $table->text('close_msg')->nullable();

            $table->string('fb_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('google_link')->nullable();

            $table->string('contact_email')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_landline')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->string('contact_hours')->nullable();

            $table->string('style_logo')->nullable();
            $table->string('style_fav')->nullable();;
            $table->string('style_preload')->nullable();;
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
        Schema::dropIfExists('settings');
    }
}
