<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

//Add admin to users table with default password and other default data
//
class AddAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('password'),
            'role' => 'root',
            'foto' => 'default.png',
            'remember_token' => Str::random(60),
        ]);
        //INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
        //(3, 'root', 'sanbray', 'sanbray@gmail.com', NULL, '$2y$10$ltyp8Q53uivz2xa9dnc5duvtzRnZXJTD6JTxO7NxSxfxaW5fILp3i', 'download (1).png', NULL, '2022-11-07 00:15:18', '2022-11-07 00:15:18'),
        //(4, 'adminitc', 'naufal', 'itclub@gmail.com', NULL, '$2y$10$96AmSroaE9vgTpTDc.8jHOwsLD7LLh1Z0h0xGMD9HH/W9gMIch3/W', 'images.png', NULL, '2022-11-07 00:19:11', '2022-11-07 00:19:11');

        DB::table('users')->insert([
            'name' => 'sanbray',
            'email' => 'sanbray@gmail.com',
            'password' => '$2y$10$ltyp8Q53uivz2xa9dnc5duvtzRnZXJTD6JTxO7NxSxfxaW5fILp3i',
            'role' => 'root',
            'foto' => 'download (1).png',
            'remember_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => 'naufal',
            'email' => 'itclub@gmail.com',
            'password' => '$2y$10$96AmSroaE9vgTpTDc.8jHOwsLD7LLh1Z0h0xGMD9HH/W9gMIch3/W',
            'role' => 'adminitc',
            'foto' => 'images.png',
            'remember_token' => Str::random(60),
        ]);

        //INSERT INTO `kepseks` (`id`, `nama_kepsek`, `foto_kepsek`, `pembuka_sambutan`, `isi_sambutan`, `penutup_sambutan`, `created_at`, `updated_at`) VALUES
        //(9, 'Bejo', 'pak bejo.png', '-', 'b', '-', '2022-09-20 01:01:13', '2022-09-20 01:15:12');
        DB::table('kepseks')->insert([
            'nama_kepsek' => 'Bejo',
            'foto_kepsek' => 'pak bejo.png',
            'pembuka_sambutan' => '-',
            'isi_sambutan' => 'b',
            'penutup_sambutan' => '-',
        ]);
        //INSERT INTO `wakaseks` (`id`, `nama_wakasek`, `foto_wakasek`, `pembuka_sambutan`, `isi_sambutan`, `penutup_sambutan`, `created_at`, `updated_at`) VALUES
        //(2, 'Nurdin', 'pak nurdin.png', '-', '-', '-', '2022-09-20 01:25:49', '2022-09-20 01:25:49');
        DB::table('wakaseks')->insert([
            'nama_wakasek' => 'Nurdin',
            'foto_wakasek' => 'pak nurdin.png',
            'pembuka_sambutan' => '-',
            'isi_sambutan' => '-',
            'penutup_sambutan' => '-',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('delete from users where name = ?', ['admin']);
    }
}
