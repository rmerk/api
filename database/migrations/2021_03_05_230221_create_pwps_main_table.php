<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePwpsMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pwps_main', function (Blueprint $table) {
            $table->integer('pwps_main_id', true);
            $table->integer('record_id')->nullable();
            $table->string('pwps_number', 50)->nullable();
            $table->string('pwps_revision', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pwps_main');
    }
}
