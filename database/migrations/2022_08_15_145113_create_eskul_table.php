<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEskulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eskuls', function (Blueprint $table) {
            $table->string('slug');
            $table->primary('slug');
            $table->string('nama_eskul');
            $table->string('logo');
            $table->string('pembina');
            $table->string('ketua');
            $table->string('wakilketua');
            //$table->time('jam_kumpulan');
            //$table->enum('hari_kumpulan', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']);
            $table->text('jadwal_kumpulan');
            $table->text('visi');
            $table->text('misi_eskul');
            $table->text('program_kerja');
            $table->string('nama_instagram');
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
        Schema::dropIfExists('eskul');
    }
}
