<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpqMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wpq_main', function (Blueprint $table) {
            $table->integer('wpq_main_id', true);
            $table->integer('record_id')->nullable();
            $table->string('wpq_number', 50)->nullable();
            $table->string('wpq_revision', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wpq_main');
    }
}
