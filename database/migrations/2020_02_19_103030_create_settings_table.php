<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->string('name');
            $table->string('title')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->text('address')->nullable();
            $table->string('website')->nullable();
            $table->string('resume_file')->nullable();
            $table->text('my_self')->nullable();

            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedIn')->nullable();
            $table->text('skype')->nullable();

            $table->string('logo')->nullable();
            $table->string('theme_number')->nullable();
            $table->string('theme_color')->nullable();
            $table->text('footer_text')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->tinyInteger('status')->default(0);
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
