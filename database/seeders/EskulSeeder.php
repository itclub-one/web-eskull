<?php

namespace Database\Seeders;

use App\Models\eskul;
use App\Models\berita;
use App\Models\anggota;
use App\Models\dokumentasi;
use App\Models\pendaftaran;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        eskul::truncate();
        pendaftaran::truncate();
        anggota::truncate();
        dokumentasi::truncate();
        berita::truncate();
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
            'sekbid' => 0
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
            'sekbid' => 0
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
            'sekbid' => 1
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
            'sekbid' => 2
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
            'sekbid' => 3
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
            'sekbid' => 3
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
            'sekbid' => 3
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
            'sekbid' => 4
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
            'sekbid' => 4
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
            'sekbid' => 4
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
            'sekbid' => 4
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
            'sekbid' => 4
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
            'sekbid' => 4
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
            'sekbid' => 4
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
            'sekbid' => 4
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
            'sekbid' => 4
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
            'sekbid' => 4
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
            'sekbid' => 4
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
            'sekbid' => 5
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
            'sekbid' => 6
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
            'sekbid' => 7
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
            'sekbid' => 8
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
            'sekbid' => 8
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
            'sekbid' => 8
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
            'sekbid' => 8
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
            'sekbid' => 8
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
            'sekbid' => 8
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
            'sekbid' => 8
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
            'sekbid' => 9
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
            'sekbid' => 9
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
            'sekbid' => 10
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
            'sekbid' => 10
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
            'sekbid' => 10
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
            'sekbid' => 10
        ]);
    }
}
