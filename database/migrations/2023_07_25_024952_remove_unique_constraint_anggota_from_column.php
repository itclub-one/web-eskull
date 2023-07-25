<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUniqueConstraintAnggotaFromColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->dropColumn('nis');
            $table->dropColumn('no_wa');
            $table->integer('nis')->change();
            $table->string('no_wa')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            //
        });
    }
}
