<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFirmUseColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('firms', function (Blueprint $table) {
            $table->boolean('use_task')->default(0);
            $table->boolean('use_project')->default(0);
            $table->boolean('use_service_line')->default(0);
            $table->boolean('use_service_role')->default(0);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('firms', function (Blueprint $table) {
            $table->dropColumn('use_task');
            $table->dropColumn('use_project');
            $table->dropColumn('use_service_line');
            $table->dropColumn('use_service_role');
        });
    }
}
