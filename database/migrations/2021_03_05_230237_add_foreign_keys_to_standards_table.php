<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('standards', function (Blueprint $table) {
            $table->foreign('standard_year_id', 'standards_fk')->references('standard_year_id')->on('standard_year')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('standards', function (Blueprint $table) {
            $table->dropForeign('standards_fk');
        });
    }
}
