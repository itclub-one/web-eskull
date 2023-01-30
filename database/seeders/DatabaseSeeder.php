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

        User::create([
            'name' => 'root',
            'role' => 'root',
            'email' => 'root@root',
            'password' => bcrypt('root'),
            'foto' => 'root.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'mpk',
            'role' => 'adminmpk',
            'email' => 'mpk@smknegeri1garut.sch.id',
            'password' => bcrypt('adminmpk'),
            'foto' => 'mpk.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'osis',
            'role' => 'adminosis',
            'email' => 'osis@smknegeri1garut.sch.id',
            'password' => bcrypt('adminosis'),
            'foto' => 'osis.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'irma',
            'role' => 'adminirma',
            'email' => 'irma@smknegeri1garut.sch.id',
            'password' => bcrypt('adminirma'),
            'foto' => 'irma.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'pks',
            'role' => 'adminpks',
            'email' => 'pks@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpks'),
            'foto' => 'pks.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'pramukaputra',
            'role' => 'adminpramukaputra',
            'email' => 'pramukaputra@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpramukaputra'),
            'foto' => 'pramukaputra.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'pramukaputri',
            'role' => 'adminpramukaputri',
            'email' => 'pramukaputri@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpramukaputri'),
            'foto' => 'pramukaputri.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Paskibra',
            'role' => 'adminpaskibra',
            'email' => 'paskibra@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpaskibra'),
            'foto' => 'paskibra.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'volly',
            'role' => 'adminvolly',
            'email' => 'volly@smknegeri1garut.sch.id',
            'password' => bcrypt('adminvolly'),
            'foto' => 'volly.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'futsalputra',
            'role' => 'adminfutsalputra',
            'email' => 'futsalputra@smknegeri1garut.sch.id',
            'password' => bcrypt('adminfutsalputra'),
            'foto' => 'futsalputra.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'futsalputri',
            'role' => 'adminfutsalputri',
            'email' => 'futsalputri@smknegeri1garut.sch.id',
            'password' => bcrypt('adminfutsalputri'),
            'foto' => 'futsalputri.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'sepakbola',
            'role' => 'adminsepakbola',
            'email' => 'sepakbola@smknegeri1garut.sch.id',
            'password' => bcrypt('adminsepakbola'),
            'foto' => 'sepakbola.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'basket',
            'role' => 'adminbasket',
            'email' => 'basket@smknegeri1garut.sch.id',
            'password' => bcrypt('adminbasket'),
            'foto' => 'basket.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'hockey',
            'role' => 'adminhockey',
            'email' => 'hockey@smknegeri1garut.sch.id',
            'password' => bcrypt('adminhockey'),
            'foto' => 'hockey.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'badminton',
            'role' => 'adminbadminton',
            'email' => 'badminton@smknegeri1garut.sch.id',
            'password' => bcrypt('adminbadminton'),
            'foto' => 'badminton.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'karate',
            'role' => 'adminkarate',
            'email' => 'karate@smknegeri1garut.sch.id',
            'password' => bcrypt('adminkarate'),
            'foto' => 'karate.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'taekwondo',
            'role' => 'admintaekwondo',
            'email' => 'taekwondo@smknegeri1garut.sch.id',
            'password' => bcrypt('admintaekwondo'),
            'foto' => 'taekwondo.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'silat',
            'role' => 'adminsilat',
            'email' => 'silat@smknegeri1garut.sch.id',
            'password' => bcrypt('adminsilat'),
            'foto' => 'silat.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'tarungderajat',
            'role' => 'admintarungderajat',
            'email' => 'tarungderajat@smknegeri1garut.sch.id',
            'password' => bcrypt('admintarungderajat'),
            'foto' => 'tarungderajat.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'kir',
            'role' => 'adminkir',
            'email' => 'kir@smknegeri1garut.sch.id',
            'password' => bcrypt('adminkir'),
            'foto' => 'kir.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'kopsis',
            'role' => 'adminkopsis',
            'email' => 'kopsis@smknegeri1garut.sch.id',
            'password' => bcrypt('adminkopsis'),
            'foto' => 'kopsis.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'pmr',
            'role' => 'adminpmr',
            'email' => 'pmr@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpmr'),
            'foto' => 'pmr.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'senitari',
            'role' => 'adminsenitari',
            'email' => 'senitari@smknegeri1garut.sch.id',
            'password' => bcrypt('adminsenitari'),
            'foto' => 'senitari.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'marchingband',
            'role' => 'adminmarchingband',
            'email' => 'marchingband@smknegeri1garut.sch.id',
            'password' => bcrypt('adminmarchingband'),
            'foto' => 'marchingband.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'senikriya',
            'role' => 'adminsenikriya',
            'email' => 'senikriya@smknegeri1garut.sch.id',
            'password' => bcrypt('adminsenikriya'),
            'foto' => 'senikriya.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'paduansuara',
            'role' => 'adminpaduansuara',
            'email' => 'paduansuara@smknegeri1garut.sch.id',
            'password' => bcrypt('adminpaduansuara'),
            'foto' => 'paduansuara.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'karawitan',
            'role' => 'adminkarawitan',
            'email' => 'karawitan@smknegeri1garut.sch.id',
            'password' => bcrypt('adminkarawitan'),
            'foto' => 'karawitan.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'teater',
            'role' => 'adminteater',
            'email' => 'teater@smknegeri1garut.sch.id',
            'password' => bcrypt('adminteater'),
            'foto' => 'teater.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'senimusik',
            'role' => 'adminsenimusik',
            'email' => 'senimusik@smknegeri1garut.sch.id',
            'password' => bcrypt('adminsenimusik'),
            'foto' => 'senimusik.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'itclub',
            'role' => 'adminitclub',
            'email' => 'itclub@smknegeri1garut.sch.id',
            'password' => bcrypt('adminitclub'),
            'foto' => 'itclub.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'broadcast',
            'role' => 'adminbroadcast',
            'email' => 'broadcast@smknegeri1garut.sch.id',
            'password' => bcrypt('adminbroadcast'),
            'foto' => 'broadcast.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'englishclub',
            'role' => 'adminenglishclub',
            'email' => 'englishclub@smknegeri1garut.sch.id',
            'password' => bcrypt('adminenglishclub'),
            'foto' => 'englishclub.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Koreanclub',
            'role' => 'adminkoreanclub',
            'email' => 'koreanclub@smknegeri1garut.sch.id',
            'password' => bcrypt('adminkoreanclub'),
            'foto' => 'koreanclub.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Japanclub',
            'role' => 'adminjapanclub',
            'email' => 'japanclub@smknegeri1garut.sch.id',
            'password' => bcrypt('adminjapanclub'),
            'foto' => 'japanclub.png',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Deutschclub',
            'role' => 'admindeutschclub',
            'email' => 'deutschclub@smknegeri1garut.sch.id',
            'password' => bcrypt('admindeutschclub'),
            'foto' => 'deutsch.png',
            'remember_token' => Str::random(60),
        ]);

    

        administrator::create([
            'on' => '0'
        ]);
        
   
        role::create([
            'role' => 'root',
            'eskul_id' => "999"
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
            'slug' => 'mpk1',
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
            'slug' => 'osis2',
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
            'slug' => 'irma3',
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
            'slug' => 'pks4',
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
            'slug' => 'pramukaputra5',
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
            'slug' => 'pramukaputri6',
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
            'slug' => 'paskibra7',
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
            'slug' => 'volly8',
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
            'slug' => 'futsalputra9',
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
            'slug' => 'futsalputri10',
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
            'slug' => 'sepakbola11',
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
            'slug' => 'basket12',
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
            'slug' => 'hockey13',
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
            'slug' => 'badminton14',
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
            'slug' => 'karate15',
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
            'slug' => 'taekwondo16',
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
            'slug' => 'silat17',
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
            'slug' => 'tarungderajat18',
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
            'slug' => 'kir19',
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
            'slug' => 'kopsis20',
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
            'slug' => 'pmr21',
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
            'slug' => 'senitari22',
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
            'slug' => 'marchingband23',
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
            'slug' => 'senikriya24',
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
            'slug' => 'paduansuara25',
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
            'slug' => 'karawitan26',
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
            'slug' => 'teater27',
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
            'slug' => 'senimusik28',
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
            'slug' => 'itclub29',
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
            'slug' => 'broadcast30',
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
            'slug' => 'englishclub31',
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
            'slug' => 'koreanclub32',
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
            'slug' => 'japanclub33',
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
            'slug' => 'deutschclub34',
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
        

        foreach(eskul::all() as $row){
            echo $row['slug'];
            echo "\n\r";
            role::create([
                'role' => 'admin'.$row['slug'],
                'eskul_id' => $row['id']
            ]);
        }


















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
