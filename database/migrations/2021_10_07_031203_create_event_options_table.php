<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_options', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->integer('num');
            $table->string('name_ko', 40)->nullable();
            $table->string('name_jp', 40)->nullable();
            $table->string('result', 255)->nullable();
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
        Schema::dropIfExists('event_options');
    }
}
