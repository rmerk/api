<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAsmeVarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asme_var', function (Blueprint $table) {
            $table->foreign('asme_var_grp_id', 'var_grp_fk')->references('var_grp_id')->on('variablegroups')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('standards_id', 'var_standards_fk')->references('standards_id')->on('standards')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asme_var', function (Blueprint $table) {
            $table->dropForeign('var_grp_fk');
            $table->dropForeign('var_standards_fk');
        });
    }
}
