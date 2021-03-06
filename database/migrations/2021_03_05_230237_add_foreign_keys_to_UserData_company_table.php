<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserDataCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('UserData.company', function (Blueprint $table) {
            $table->foreign('address_id', 'company_address_fk')->references('address_id')->on('UserData.address')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('record_id', 'record_id_fk')->references('record_id')->on('UserData.record')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('UserData.company', function (Blueprint $table) {
            $table->dropForeign('company_address_fk');
            $table->dropForeign('record_id_fk');
        });
    }
}
