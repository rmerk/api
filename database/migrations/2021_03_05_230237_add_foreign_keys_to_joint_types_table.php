<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJointTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('joint_types', function (Blueprint $table) {
            $table->foreign('standard_grp_id', 'joint_types_fk')->references('standard_grp_id')->on('standard_grp')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('joint_types', function (Blueprint $table) {
            $table->dropForeign('joint_types_fk');
        });
    }
}
