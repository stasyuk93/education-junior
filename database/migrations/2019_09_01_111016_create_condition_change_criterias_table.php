<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionChangeCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition_change_criterias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('condition_id');
            $table->bigInteger('change_condition_id');
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
        Schema::dropIfExists('condition_change_criterias');
    }
}
