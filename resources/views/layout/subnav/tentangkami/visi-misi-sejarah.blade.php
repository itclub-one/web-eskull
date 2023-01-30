@extends ('layout.header')
  
@section('content')
<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <div class="breadcrumbs__content">

            <div class="breadcrumbs__item ">
              <a href="/">Home</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">Tentang Kami</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">Sejarah Visi dan Misi</a>
            </div>

            {{--  --}}

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="page-header -type-1">
    <div class="container">
      <div class="page-header__content">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div data-anim="slide-up delay-1">

              <h1 class="page-header__title">SEJARAH, VISI & MISI</h1>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-lg">
    <div class="container">
      <div class="row no-gutters justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-11">
          <div class="shopCompleted-header">
            <img img style="width: 400px; height: 400px;" src="{{asset('webex/img/logo/smeaa.png')}}" alt="icon">
          </div>

          <div class="shopCompleted-footer bg-light-4 border-light rounded-8">
            <div class="shopCompleted-footer__wrap">
              <div data-anim="slide-up delay-3" class="row justify-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                  <h5>SEJARAH</h5>
                  <p class="pr-50 lg:pr-0 mt-25">Sekolah Menengah Ekonomi Atas Negeri (SMEAN) Garut didirikan pada tanggal 1 Agustus 1959 berdasarkan Surat Keputusan Mentri Pendidikan, Pengajaran dan Kebudayaan tanggal 24 Juli 1959 No.897/B.3/Pedj, yang berlokasi di Jalan Kiansantang menumpang pada bangunan SPG Negeri Garut.</p>
                  <p class="pr-50 lg:pr-0 mt-25">Tahun 1965 SMEAN Garut pindah lokasi menempati bangunan baru di Jl. Haur Panggung yang dibangun oleh CV. Haruman dengan luas 7.850 m2 dan luas bangunan 935,96 m2 dengan program keahliannya meliputi : Tata Niaga, Tata Buku, dan Kesekretarisan. Pada tahun 1982 SMEAN Garut dengan bantuan dari ADB (Asia Development Bank) pindah lokasi lagi tempatnya di jalan Cimanuk No. 309 A, Kelurahan Pataruman, Kecamatan Tarogong, Kabupaten Garut dengan luas tanah 16.535 m2, meliputi bangunan : Ruang Pembukuan, Ruang Teori, Ruang Guru, Ruang Mengetik, Ruang Model Perkantoran, Ruang Tata Usaha, Ruang Gudang, Ruang Praktik (LAB), Ruang Administrasi, Ruang AVA, Ruang Jaga, Ruang Perpustakaan, Ruang Perkantoran, Kantin. Pada tahun 1994 mendapat bantuan dari Direktorat Pendidikan Jakarta membangun Gedung Bisnis Center di atas tanah HGB (Hak Guna Pakai) dari PEMDA Kabupaten Garut yang terletak di Jl. Patriot ± 500 m sebelah utara SMK Negeri 1 Garut yang sekarang beroperasi sebagai Toserba Patriot dengan omset penjualan sekitar 3,1 Milyar/Tahun. Gedung ini sekaligus sebagai tempat praktik penjualan bagi siswa. Berdasarkan Surat Edaran dari Departemen Pendidikan Kabupaten Garut tahun 2001, nama SMEAN Berubah menjadi SMK (Sekolah Menegah Kejuruan) Bisnis dan Manajemen.</p>
                </div>
  
                <div class="col-xl-8 col-lg-9 col-md-11">
                  <div class="mt-60 lg:mt-40">
                    <h5>VISI</h5>
                    <p class="text-dark-1 mt-30">Terwujudnya Sekolah Kejuruan juara lahir dan bathin dengan inovasi dan kolaborasi untuk terbentuknya lulusan yang berakhlak mulia, kompeten, mampu beradaptasi, berjiwa entrepreneur, berprilaku hidup bersih dan sehat serta peduli lingkungan.</p>
                 </div>
                </div>

                <div class="col-xl-8 col-lg-9 col-md-11">
                  <div class="mt-60 lg:mt-40">
                    <h5>MISI</h5>
                    <p class="text-dark-1 mt-15">1. Menyelenggarakan pendidikan Kejuruan berbasis berkarakter untuk menghasilkan lulusan yang berakhlak mulia</p>
                    <p class="text-dark-1 mt-15">2. Menyelenggarakan model teaching factory untuk membentuk budaya kerja lulusan sehingga mampu beradaptasi dan berjiwa entrepreneur</p>
                    <p class="text-dark-1 mt-15">3. Menyelenggarakan pendidikan link and match untuk menghasilkan lulusan yang kompeten sesuai dengan tuntutan DUDIKA</p>
                    <p class="text-dark-1 mt-15">4. Menghasilkan lulusan yang dapat menerapkan pola hidup bersih dan sehat yang peduli terhadap lingkungan</p>
                    <p class="text-dark-1 mt-15">5. Melahirkan lulusan yang sinergi dan mendukung Visi Misi Jawa Barat sehingga tercipta Jabar Juara Lahir Batin</p>
                    <p class="text-dark-1 mt-15">6. Menyelenggarakan Pendidikan Berbasis Karakter ( Jabar Masagi)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection