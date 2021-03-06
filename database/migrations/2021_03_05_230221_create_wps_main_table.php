<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpsMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wps_main', function (Blueprint $table) {
            $table->integer('wps_main_id', true);
            $table->integer('record_id')->nullable();
            $table->string('wps_number', 50)->nullable();
            $table->string('wps_revision', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wps_main');
    }
}
