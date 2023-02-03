@extends ('layout.header')
  
@section('content')
<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <div class="breadcrumbs__content">

            <div class="breadcrumbs__item ">
              <a href="#">Home</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">Tentang Kami</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">Tentang Web Ini</a>
            </div>

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

              <h1 class="page-header__title">Tentang Web Ini</h1>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row y-gap-50 justify-between items-center">
        
        
        <div class="col-lg-6 pr-50 sm:pr-15">
          <div class="composition -type-8">
            <div class="-el-1"><img style="width: 400px; height: 400px;" src="{{asset('images/tentang-web/pak-andri.png')}}" alt="image"></div>
          </div>
        </div>

        <div class="col-lg-5">
          <h2 class="text-30 lh-16">Pembina IT-Club SMKN 1 Garut</h2>
          <p class="text-dark-1 mt-30">Assalamualaikum Wr. wb.</p>
          <p class="text-dark-1 mt-30">Alhamdulillah Sistem Informasi Ekstrakurikuler SMKN 1 Garut Berbasis Website yang diberi nama Webex (Web Ekskul) dapat digunakan oleh seluruh ekstrakurikuler SMKN 1 Garut dalam melakukan manajemen setiap ekstrakurikuler di SMKN 1 Garut ,
            Sistem Informasi Ekstrakurikuler merupakan hasil dari kolaborasi antara OSIS dan seluruh ekstrakurikuler yang ada di SMKN 1 Garut yang dibangun oleh
            Siswa kami yang bernama Naufal Rabani, Yofi Ilham Fauzi, Mochammad Ikhsan Nawawi dan Yusuf Sekhan dengan bimbingan bapak Andriansyah Maulana, S.Kom., M.Kom. sebagai pembimbing IT Club SMKN 1 Garut 
            Periode 2020 - Sekarang yang termasuk program kerja dari kepengurusan IT Club 2022 yang dipimpin oleh Naufal Rabani dan Yusuf Sekhan
            dengan kolaborasi dengan OSIS dan seluruh ekstrakurikuler di SMKN 1 Garut.</p>
            
          </div>
      </div>
        <div class="row y-gap-50 justify-between items-center">

          
          <div class="col-lg-12">
            
            <p class="text-dark-1 mt-30">Saya mengucapkan Terima Kasih Kepada Bapak Kepala Sekolah yaitu Bapak H. Bejo Siswoyo, S.Tp., M.Pd. yang selalu mendukung dan memberikan semangat kepada kami,
              serta Bapak Wakil Kepala Sekolah Bidang Kesiswaan yaitu Bapak Nurdin, S.T., M.Pd. yang telah mendukung sistem informasi ekstrakurikuler SMKN 1 Garut, Bapak Staf Wakil Kepala Sekolah
              Bidang Kesiswaan Bapak Iwan Ridwan, S.Sy., M.Pd. Serta Ibu Pembina OSIS SMKN 1 Garut Ibu Citra Purnamasari, S.Pd. yang telah mendukung kami,
              serta saya mengucapkan Terima Kasih kepada Bapak Ketua Kompetensi Keahlian Sistem Informatika Jaringan dan Aplikasi serta Pengembangan Perangkat Lunak dan Gim Bapak Asep Ulumudin, S.Kom. yang telah memberikan fasilitas hosting dan domain
              sehingga website ini dapat diakses oleh kami. Saya juga mengucapkan Terima kasih kepada Bapak dan Ibu Pembina Ekstrakurikuler yang telah 
              memberikan dukungan kepada kami dan dari kami saya ucapkan selamat menggunakan sistem informasi ekstrakurikuler ini untuk ekstrakurikuler masing masing
              semoga dapat membantu dalam manajemen ekstrakurikuler yang bapak dan ibu bimbing.</p>
            <p class="text-dark-1 mt-30">Sekian dari saya selaku pembina ekstrakurikuler IT Club dan besar harapan saya agar Webex ini dapat digunakan dan dapat membantu
              kegiatan ekstrakurikuler di SMKN 1 Garut</p>
              
              <p class="text-dark-1 mt-30">Hormat Saya</p>
            
            
            
            
            
            
            
            
          <p class="pr-50 lg:pr-0 mt-25"><strong>Andriansyah Maulana, S.Kom., M.Kom.</strong></p>
          <p class="pr-50 lg:pr-0 mt-6"><strong>Pembina IT Club SMKN 1 Garut 2020 - Saat ini</strong></p>
        </div>
      </div>
        
    </div>
  </section>

  

  <section class="layout-pt-lg layout-pb-md">
    <div data-anim-wrap class="container">
      <div {{--data-anim-child="slide-left delay-1"--}} class="row y-gap-20 justify-between items-center">
        <div class="col-lg-6">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">Pembuat Webex SMK Negeri 1 Garut</h2>

            <p class="sectionTitle__text ">Karya siswa SMK Negeri 1 Garut</p>

          </div>
          
        </div>
      </div>
      
      <div class="row y-gap-30 pt-50">
        
        <div class="col-lg-3 col-sm-6">
          <div  class="teamCard -type-1 -teamCard-hover">
            <div class="teamCard__image">
              <img style="width: 300px; height: 350px;" src="{{asset('images/tentang-web/naufal.png')}}" alt="image">
              <div class="teamCard__socials">
                <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                  <a href="#"><i class="icon-facebook text-white"></i></a>
                  <a href="#"><i class="icon-twitter text-white"></i></a>
                  <a href="#"><i class="icon-instagram text-white"></i></a>
                  <a href="#"><i class="icon-linkedin text-white"></i></a>
                </div>
              </div>
            </div>
            <div class="teamCard__content">
              <h4 class="teamCard__title">Naufal</h4>
              <p class="teamCard__text">Penanggung Jawab & Designer</p>
  
            </div>
            <div class="teamCard-footer">
              <div class="teamCard-footer__author">
                <img src="{{asset('images/logo-eskul/itclub.png')}}" alt="Pengembang">
                <div>IT-Club</div>
              </div>
            </div>
          </div>
        </div>
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}        
        <div class="col-lg-3 col-sm-6">
          <div  class="teamCard -type-1 -teamCard-hover">
            <div class="teamCard__image">
              <img style="width: 300px; height: 350px;" src="{{asset('images/tentang-web/ikhsan.png')}}" alt="image">
              <div class="teamCard__socials">
                <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                  <a href="#"><i class="icon-facebook text-white"></i></a>
                  <a href="#"><i class="icon-twitter text-white"></i></a>
                  <a href="#"><i class="icon-instagram text-white"></i></a>
                  <a href="#"><i class="icon-linkedin text-white"></i></a>
                </div>
              </div>
            </div>
            <div class="teamCard__content">
              <h4 class="teamCard__title">Mochammad Ikhsan Nawawi</h4>
              <p class="teamCard__text">Fullstack Develover</p>

            </div>
            <div class="teamCard-footer">
              <div class="teamCard-footer__author">
                <img src="{{asset('images/logo-eskul/paskibra.png')}}" alt="Pengembang">
                <div>Paskibra</div>
              </div>
            </div>
          </div>
        </div>
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}        
        <div class="col-lg-3 col-sm-6">
          <div  class="teamCard -type-1 -teamCard-hover">
            <div class="teamCard__image">
              <img style="width: 300px; height: 350px;" src="{{asset('images/tentang-web/yusuf.png')}}" alt="image">
              <div class="teamCard__socials">
                <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                  <a href="#"><i class="icon-facebook text-white"></i></a>
                  <a href="#"><i class="icon-twitter text-white"></i></a>
                  <a href="#"><i class="icon-instagram text-white"></i></a>
                  <a href="#"><i class="icon-linkedin text-white"></i></a>
                </div>
              </div>
            </div>
            <div class="teamCard__content">
              <h4 class="teamCard__title">Yusuf</h4>
              <p class="teamCard__text">Backend Develover</p>

            </div>
            <div class="teamCard-footer">
              <div class="teamCard-footer__author">
                <img src="{{asset('images/logo-eskul/itclub.png')}}" alt="Pengembang">
                <div>IT-Club</div>
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="col-lg-3 col-sm-6">
          <div  class="teamCard -type-1 -teamCard-hover">
            <div class="teamCard__image">
              <img style="width: 300px; height: 350px;" src="{{asset('images/tentang-web/ilham.png')}}" alt="image">
              <div class="teamCard__socials">
                <div class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                  <a href="#"><i class="icon-facebook text-white"></i></a>
                  <a href="#"><i class="icon-twitter text-white"></i></a>
                  <a href="#"><i class="icon-instagram text-white"></i></a>
                  <a href="#"><i class="icon-linkedin text-white"></i></a>
                </div>
              </div>
            </div>
            <div class="teamCard__content">
              <h4 class="teamCard__title">Ilham</h4>
              <p class="teamCard__text">Frontend Develover</p>

            </div>
            <div class="teamCard-footer">
              <div class="teamCard-footer__author">
                <img src="{{asset('images/logo-eskul/itclub.png')}}" alt="Pengembang">
                <div>IT-Club</div>
              </div>
            </div>
          </div>
        </div>
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
      </div>
    </div>
  </section>
@endsection