<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateVariableGroupsColumnNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('variable_groups', function(Blueprint $table) {
            $table->renameColumn('var_grp_id', 'variable_groups_id');
            $table->renameColumn('var_gp', 'name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('variable_groups', function(Blueprint $table) {
            $table->renameColumn('variable_groups_id', 'var_grp_id');
            $table->renameColumn('name', 'var_gp');
        });
    }
}
