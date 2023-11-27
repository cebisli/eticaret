<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->text('content')->nullable();

            $table->string('text_1_icon')->nullable();
            $table->text('text_1')->nullable();
            $table->string('text_1_content')->nullable();

            $table->string('text_2_icon')->nullable();
            $table->text('text_2')->nullable();
            $table->string('text_2_content')->nullable();

            $table->string('text_3_icon')->nullable();
            $table->text('text_3')->nullable();
            $table->string('text_3_content')->nullable();

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
        Schema::dropIfExists('abouts');
    }
}
