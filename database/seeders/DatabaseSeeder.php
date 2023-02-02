<?php

namespace Database\Seeders;

use App\Models\administrator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


use App\Models\User;
use App\Models\berita;
use App\Models\dokumentasi;
use App\Models\eskul;
use App\Models\kepsek;
use App\Models\wakasek;
use App\Models\role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        administrator::create([
            'on' => '0'
        ]);
        
   
        






        kepsek::create([
            'nama_kepsek' => 'Bejo Siswoyo S.Pd',
            'foto_kepsek' => 'pak-bejo.png',
            'pembuka_sambutan' => Str::random(15),
            'isi_sambutan' => Str::random(25).'<br>'.Str::random(90).'<br>'.Str::random(50),
            'penutup_sambutan' => Str::random(20),
        ]);
        wakasek::create([
            'nama_wakasek' => 'Nurdin Ruslih S.Pd',
            'foto_wakasek' => 'pak-nurdin.png',
            'pembuka_sambutan' => '<p>'.Str::random(15).'</p>',
            'isi_sambutan' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(90).'</p>'.'<p>'.Str::random(50).'</p>',
            'penutup_sambutan' => '<p>'.Str::random(20).'</p>',
        ]);







        eskul::create([
            'id' => 1,
            'nama_eskul' => 'Majelis Permusyawaratan Kelas',
            'slug' => 'mpk',
            'logo' => 'mpk.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 2,
            'nama_eskul' => 'OSIS',
            'slug' => 'osis',
            'logo' => 'osis.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 3,
            'nama_eskul' => 'IRMA',
            'slug' => 'irma',
            'logo' => 'irma.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 4,
            'nama_eskul' => 'Patroli Keamanan Sekolah',
            'slug' => 'pks',
            'logo' => 'pks.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 5,
            'nama_eskul' => 'Pramuka Putra',
            'slug' => 'pramukaputra',
            'logo' => 'pramukaputra.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 6,
            'nama_eskul' => 'Pramuka Putri',
            'slug' => 'pramukaputri',
            'logo' => 'pramukaputri.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 7,
            'nama_eskul' => 'Paskibra',
            'slug' => 'paskibra',
            'logo' => 'paskibra.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 8,
            'nama_eskul' => 'Volly',
            'slug' => 'volly',
            'logo' => 'volly.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 9,
            'nama_eskul' => 'Futsal Putra',
            'slug' => 'futsalputra',
            'logo' => 'futsalputra.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 10,
            'nama_eskul' => 'Futsal Putri',
            'slug' => 'futsalputri',
            'logo' => 'futsalputri.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 11,
            'nama_eskul' => 'Sepak Bola',
            'slug' => 'sepakbola',
            'logo' => 'sepakbola.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 12,
            'nama_eskul' => 'Basket',
            'slug' => 'basket',
            'logo' => 'basket.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 13,
            'nama_eskul' => 'Hockey',
            'slug' => 'hockey',
            'logo' => 'hockey.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 14,
            'nama_eskul' => 'Badminton',
            'slug' => 'badminton',
            'logo' => 'badminton.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 15,
            'nama_eskul' => 'Karate',
            'slug' => 'karate',
            'logo' => 'karate.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 16,
            'nama_eskul' => 'Taekwondo',
            'slug' => 'taekwondo',
            'logo' => 'taekwondo.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 17,
            'nama_eskul' => 'Silat',
            'slug' => 'silat',
            'logo' => 'silat.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 18,
            'nama_eskul' => 'Tarung Derajat',
            'slug' => 'tarungderajat',
            'logo' => 'tarungderajat.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 19,
            'nama_eskul' => 'Karya Ilmiah Remaja',
            'slug' => 'kir',
            'logo' => 'kir.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 20,
            'nama_eskul' => 'Koperasi Siswa',
            'slug' => 'kopsis',
            'logo' => 'kopsis.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 21,
            'nama_eskul' => 'Palang Merah Remaja',
            'slug' => 'pmr',
            'logo' => 'pmr.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' =>22,
            'nama_eskul' => 'Seni Tari',
            'slug' => 'senitari',
            'logo' => 'senitari.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 23,
            'nama_eskul' => 'Marching Band',
            'slug' => 'marchingband',
            'logo' => 'marchingband.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 24,
            'nama_eskul' => 'Seni Kriya',
            'slug' => 'senikriya',
            'logo' => 'senikriya.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 25,
            'nama_eskul' => 'Paduan Suara',
            'slug' => 'paduansuara',
            'logo' => 'paduansuara.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 26,
            'nama_eskul' => 'Karawitan',
            'slug' => 'karawitan',
            'logo' => 'karawitan.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 27,
            'nama_eskul' => 'Teater',
            'slug' => 'teater',
            'logo' => 'teater.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 28,
            'nama_eskul' => 'Seni Musik',
            'slug' => 'senimusik',
            'logo' => 'senimusik.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 29,
            'nama_eskul' => 'IT Club',
            'slug' => 'itclub',
            'logo' => 'itclub.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 30,
            'nama_eskul' => 'Broadcast',
            'slug' => 'broadcast',
            'logo' => 'broadcast.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 31,
            'nama_eskul' => 'English Club',
            'slug' => 'englishclub',
            'logo' => 'englishclub.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 32,
            'nama_eskul' => 'Korean Club',
            'slug' => 'koreanclub',
            'logo' => 'koreanclub.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 33,
            'nama_eskul' => 'Japan Club',
            'slug' => 'japanclub',
            'logo' => 'japanclub.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        eskul::create([
            'id' => 34,
            'nama_eskul' => 'Deutsch Club',
            'slug' => 'deutschclub',
            'logo' => 'deutschclub.png',
            'pembina' => Str::random(7),
            'ketua' => Str::random(7),
            'wakilketua' => Str::random(7),
            'jadwal_kumpulan' => Str::random(7),
            'visi' => '<p>'.Str::random(25).'</p>'.'<p>'.Str::random(50).'</p>',
            'misi_eskul' => '<p>'.Str::random(15).'</p>'.'<p>'.Str::random(70).'</p>',
            'program_kerja' => '<p>'.Str::random(35).'</p>'.'<p>'.Str::random(60).'</p>',
            'nama_instagram' => Str::random(7),
        ]);
        
        role::create([
            'role' => 'root',
            'eskul_id' => "999"
        ]);
        foreach(eskul::all() as $row){
            echo $row['slug'];
            echo "\n\r";
            $role_id = 'admin'.$row['slug'];
            role::create([
                'role' => $role_id,
                'eskul_id' => $row['id']
            ]);
            User::create([
                'name' => $row['nama_eskul'],
                'role' => $role_id,
                'email' => $row['slug'] . '@smknegeri1garut.sch.id',
                'password' => bcrypt('Cimanuk309A'),
                'foto' => $row['logo'],
                'remember_token' => Str::random(60),
            ]);
        }
        User::create([
            'name' => 'Moderator',
            'role' => 'root',
            'email' =>  'moderator@smknegeri1garut.sch.id',
            'password' => bcrypt('moderatorsmknegeri1garut'),
            'foto' => 'smea.png',
            'remember_token' => Str::random(60),
        ]);


















        dokumentasi::create([
            'nama_kegiatan' => 'Paturay Tineung',
            'penyelenggara' => '29',
            'foto_kegiatan' => '1.jpg',
            'slug_dokumentasi' => Str::slug('Paturay Tineung'),
        ]);
        dokumentasi::create([
            'nama_kegiatan' => 'Lomba LKS',
            'penyelenggara' => '29',
            'foto_kegiatan' => '2.jpg',
            'slug_dokumentasi' => Str::slug('Lomba LKS'),
        ]);
        dokumentasi::create([
            'nama_kegiatan' => 'Rapat Plane-off',
            'penyelenggara' => '29',
            'foto_kegiatan' => '3.jpg',
            'slug_dokumentasi' => Str::slug('Rapat Plane-off'),
        ]);
        dokumentasi::create([
            'nama_kegiatan' => 'Kejuaraan Sepak Bola Bupati',
            'penyelenggara' => '29',
            'foto_kegiatan' => '4.jpg',
            'slug_dokumentasi' => Str::slug('Kejuaraan Sepak Bola Bupati'),
        ]);
        dokumentasi::create([
            'nama_kegiatan' => 'Memperingati hari Pramuka',
            'penyelenggara' => '29',
            'foto_kegiatan' => '5.jpg',
            'slug_dokumentasi' => Str::slug('Memperingati hari Pramuka'),
        ]);
        dokumentasi::create([
            'nama_kegiatan' => 'Penyambutan Kepala Sekolah',
            'penyelenggara' => '29',
            'foto_kegiatan' => '6.jpg',
            'slug_dokumentasi' => Str::slug('Penyambutan Kepala Sekolah'),
        ]);









        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => '1.jpg',
            'slug_berita' => Str::slug(Str::random(7).' '. Str::random(5)),
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => '2.jpg',
            'slug_berita' => Str::slug(Str::random(7).' '. Str::random(5)),
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => '3.jpg',
            'slug_berita' => Str::slug(Str::random(7).' '. Str::random(5)),
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => '4.jpg',
            'slug_berita' => Str::slug(Str::random(7).' '. Str::random(5)),
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => '5.jpg',
            'slug_berita' => Str::slug(Str::random(7).' '. Str::random(5)),
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => '6.jpg',
            'slug_berita' => Str::slug(Str::random(7).' '. Str::random(5)),
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => '7.jpg',
            'slug_berita' => Str::slug(Str::random(7).' '. Str::random(5)),
            'tanggal_berita' => '2022-11-11'
        ]);
        berita::create([
            'judul_berita' => Str::random(10),
            'foto_berita' => '8.jpg',
            'slug_berita' => Str::slug(Str::random(7).' '. Str::random(5)),
            'tanggal_berita' => '2022-11-11'
        ]);
    }
}
