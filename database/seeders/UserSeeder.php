<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\eskul;
use App\Models\anggota;
use App\Models\pendaftaran;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        anggota::truncate();
        pendaftaran::truncate();
        Notification::truncate();
        
        User::create([
            'name' => 'Moderator',
            'role_id' => 1,
            'email' =>  'moderator@smknegeri1garut.sch.id',
            'password' => bcrypt('moderatorsmknegeri1garut'),
            'foto' => 'smea.png',
            'id_eskul' => 0,
            'remember_token' => Str::random(60),
        ]);
        foreach(eskul::all() as $row){
            User::create([
                'name' => $row['nama_eskul'],
                'role_id' => 2,
                'email' => Str::slug($row['nama_eskul']) . '@smknegeri1garut.sch.id',
                'password' => bcrypt('Cimanuk309A'),
                'foto' => $row['logo'],
                'id_eskul' => $row['id'],
                'remember_token' => Str::random(60),
            ]);
        }
    }
}
