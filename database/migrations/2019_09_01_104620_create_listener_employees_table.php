<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListenerEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listener_employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('listener_condition_id');
            $table->bigInteger('who_listen');
            $table->bigInteger('whom_listen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listener_employees');
    }
}
