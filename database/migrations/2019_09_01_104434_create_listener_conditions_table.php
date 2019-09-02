<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListenerConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listener_conditions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',50);
            $table->bigInteger('condition_id');
            $table->bigInteger('criteria_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listener_conditions');
    }
}
