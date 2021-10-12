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
            $table->integer('card_id')->nullable();
            $table->integer('cloth_id')->nullable();
            $table->integer('person_id')->nullable();
            $table->integer('scenario_id')->nullable();
            $table->string('name_ko', 40)->nullable();
            $table->string('name_jp', 40)->nullable();
            $table->tinyInteger('category');
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
