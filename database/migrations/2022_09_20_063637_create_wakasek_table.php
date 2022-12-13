<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWakasekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wakaseks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wakasek');
            $table->string('foto_sambutan');
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
        Schema::dropIfExists('wakasek');
    }
}
