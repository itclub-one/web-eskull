@extends ('layout.header')
  
@section('content')


  <section class="page-header -type-4 bg-beige-1">
    <div class="container">
      <div class="page-header__content">
        <div class="row">
          <div class="col-auto">
            <div data-anim="slide-up delay-1">
              <h1 class="page-header__title">Pendaftaran Ekstrakurikuler</h1>
            </div>

            <div data-anim="slide-up delay-2">
              <p class="page-header__text">We’re on a mission to deliver engaging, curated<br> courses at a reasonable price.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row y-gap-50 justify-between">
        <div class="col-xl-5 col-lg-6">
          <h3 class="text-24 lh-1 fw-500">Our offices</h3>
          <div class="row y-gap-30 pt-40">

            <div class="col-sm-6">
              <div class="text-20 fw-500 text-dark-1">London</div>
              <div class="y-gap-10 pt-15">
                <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                <a href="#" class="d-block">+(1) 123 456 7890</a>
                <a href="#" class="d-block">hi@educrat.com</a>
              </div>
            </div>

            

          </div>
        </div>

        <div class="col-lg-6">
          <div class="px-40 py-40 bg-white border-light shadow-1 rounded-8 contact-form-to-top">
            <h3 class="text-24 fw-500">Masukan Data anda</h3>
            <p class="mt-25">Pilih Ekstrakurikuler sesuai dengan kemauan anda<br> tincidunt egetnvallis.</p>

            
                @foreach ($on as $item)
                @if ($item->on == 1)
            <a href="/list-eskul-pendaftaran" >Lihat Data Calon Ekstrakurikuler</a>
            
            <form class="contact-form row y-gap-30  pt-60 lg:pt-40" action="/insertdatapendaftaran" method="POST">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
              @csrf
              <div class="form-group col-12 form-control">
                <label  class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nomor Induk Siswa</label>
                <input  class="form-check-input @error('nis') is-invalid @enderror" type="number" name="nis" placeholder="Nomor Induk Siswa...">
                @error('nis')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nama Siswa</label>
                <input class="form-check-input @error('nama_calon_anggota') is-invalid @enderror" type="text" name="nama_calon_anggota" placeholder="Nama Siswa...">
                @error('nama_calon_anggota')
                      <span class="invalid-feedback">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email</label>
                <input class="form-check-input @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email Siswa...">
                @error('email')
                      <span class="invalid-feedback">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nomor Whatsapp</label>
                <input class="form-check-input @error('no_wa') is-invalid @enderror" type="number" name="no_wa" placeholder="Nomor Whatsapp Siswa dengan format( 62xxxxxxxxxxx )">
                @error('no_wa')
                      <span class="invalid-feedback">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10" for="exampleInputPassword1">Kelas</label>
                <select class="@error('kelas_calon_anggota') is-invalid @enderror custom-select rounded-0" name="kelas_calon_anggota" id="exampleSelectRounded0">
                  <option value="" selected>Open this select menu</option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
                </select>
                @error('kelas_calon_anggota')
                      <span class="invalid-feedback">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10" for="exampleInputPassword1">Jurusan</label>
                <select class="@error('jurusan') is-invalid @enderror custom-select rounded-0" name="jurusan" id="exampleSelectRounded0">
                  <option value="" selected>Open this select menu</option>
                  <option value="PPL">PPL</option>
                  <option value="AKL">AKL</option>
                  <option value="MPL">MPL</option>
                  <option value="PMS">PMS</option>
                  <option value="TLG">TLG</option>
                  <option value="TKF">TKF</option>
                  <option value="TJK">TJK</option>
                  <option value="DKV">DKV</option>
                  <option value="TLM">TLM</option>
                  <option value="TET">TET</option>
                </select>
                @error('jurusan')
                      <span class="invalid-feedback">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10" for="exampleInputPassword1">Ekstrakurikuler</label>
                <select class="@error('id_eskul') is-invalid @enderror custom-select rounded-0"  name="id_eskul" id="exampleSelectRounded0">
                  <option value="" selected>Open this Select Menu</option>
                  @foreach ($data_eskul as $row)
                  <option value="{{$row->id}}">{{$row->nama_eskul}}</option>
                  @endforeach
                </select>
                @error('id_eskul')
                      <span class="invalid-feedback">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group col-12">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Alasan Masuk Ekstrakurikuler tersebut</label>
                <textarea class="form-check-input @error('alasan') is-invalid @enderror" type="text" name="alasan" placeholder="Alasan..."></textarea>
                @error('alasan')
                      <span class="invalid-feedback">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group col-12">
                <button type="submit" id="submit" class="button -md -purple-1 text-white">
                  Send Message
                </button>
              </div>
            </form>
              @else
              
                    <h3 class="my-5 text-center"><strong>Pendaftaran ditutup</strong></h3>
              @endif
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection