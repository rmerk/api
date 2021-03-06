<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeldProcessAssignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weld_process_assign', function (Blueprint $table) {
            $table->integer('weld_process_assign_id', true);
            $table->integer('asme_weld_processes_id')->nullable();
            $table->integer('iso_weld_process_id')->nullable();
            $table->integer('asme_var_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weld_process_assign');
    }
}
