<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaKolomToNamaTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anggotas', function (Blueprint $table) {
            $table->integer('nis');
        });
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->integer('nis');
            $table->string('no_wa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nama_tabel', function (Blueprint $table) {
            //
        });
    }
}
