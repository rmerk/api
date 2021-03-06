<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAsmePqrSawTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asme_pqr_saw', function (Blueprint $table) {
            $table->foreign('joint_type_id', 'asme_pqr_saw_fk_1')->references('joint_type_id')->on('joint_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asme_pqr_saw', function (Blueprint $table) {
            $table->dropForeign('asme_pqr_saw_fk_1');
        });
    }
}
