<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsmePqrSawTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asme_pqr_saw', function (Blueprint $table) {
            $table->integer('asme_pqr_saw_id', true);
            $table->integer('pqr_record_id');
            $table->integer('joint_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asme_pqr_saw');
    }
}
