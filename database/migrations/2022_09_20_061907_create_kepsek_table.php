<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepsekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepseks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kepsek');
            $table->string('foto_kepsek');
            $table->string('pembuka_sambutan');
            $table->string('isi_sambutan');
            $table->string('penutup_sambutan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kepsek');
    }
}
