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
              <p class="page-header__text">Jangan pernah berhenti belajar,<br> karena hidup tak pernah berhenti mengajarkan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row y-gap-50 justify-between">
        <div class="col-xl-5 col-lg-6">
          <h3 class="text-24 lh-1 fw-500">Motivasi</h3>
          <div class="row y-gap-30 pt-40">

            <div class="col-sm-6">
              {{-- <div class="text-20 fw-500 text-dark-1">London</div> --}}
              <div class="y-gap-10 pt-15">
                <p class="d-block">Belajar memang melelahkan,<br> namun akan lebih melelahkan lagi jika saat ini kamu tidak belajar.</p>
                
              </div>
            </div>
            <div class="col-sm-6">
              {{-- <div class="text-20 fw-500 text-dark-1">London</div> --}}
              <div class="y-gap-10 pt-15">
                <p class="d-block">Berjuang itu capek,<br> namun kesuksesan butuh perjuangan.</p>
                
              </div>
            </div>
            <div class="col-sm-6">
              {{-- <div class="text-20 fw-500 text-dark-1">London</div> --}}
              <div class="y-gap-10 pt-15">
                <p class="d-block">Orang hebat tidak dihasilkan dari kemudahan, kesenangan, dan kenyamanan.<br> Mereka dibentuk melalui kesulitan, tantangan, dan air mata.</p>
                
              </div>
            </div>
            <div class="col-sm-6">
              {{-- <div class="text-20 fw-500 text-dark-1">London</div> --}}
              <div class="y-gap-10 pt-15">
                <p class="d-block">Orang bijak belajar ketika mereka bisa.<br> Orang bodoh belajar ketika mereka terpaksa.</p>
                
              </div>
            </div>

            

          </div>
        </div>

        <div class="col-lg-6">
          <div class="px-40 py-40 bg-white border-light shadow-1 rounded-8 contact-form-to-top">
            <h3 class="text-24 fw-500">Masukan Data anda</h3>
            <p class="mt-25">Pilih Ekstrakurikuler sesuai dengan kemauan anda</p>
            @if ($message = Session::get('success'))
            <div  style="width: 500px">
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <i type="button" class="fa-solid fa-xmark mx-2" style="color: black; "  data-bs-dismiss="alert" aria-label="Close">
                </i>
                <p><strong>Success! </strong>{{$message}}</p>
              </div>
            </div>
            @endif
            @if ($message = Session::get('error'))
            <div  style="width: 500px">
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i type="button" class="fa-solid fa-xmark mx-2" style="color: black; "  data-bs-dismiss="alert" aria-label="Close">
                </i>
                <p><strong>Error! </strong>{{$message}}</p>
              </div>
            </div>
            @endif
            
                @foreach ($on as $item)
                @if ($item->on == 1)
            <a class="cursor-pointer" href="/list-eskul-pendaftaran" >Lihat Data Calon Ekstrakurikuler</a>
            
            <form class="contact-form row y-gap-30 pt-60 lg:pt-40" id="form" action="/insertdatapendaftaran" method="POST">
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
                <input class="form-check-input @error('no_wa') is-invalid @enderror" type="text" name="no_wa" placeholder="Nomor Whatsapp Siswa ">
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
                <button type="submit" id="pendaftaran_eskul_submit" class="button -md -purple-1 text-white">
                  Daftar
                </button>
              </div>
            </form>
              @else
              
                    <h3 class="my-5 text-center"><strong>Pendaftaran ditutup</strong></h3>
              @endif
            @endforeach
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('script')
<script>
  $(document).ready(function(){
      const form = document.getElementById("form");

      var validator = FormValidation.formValidation(form, {
          fields: {
              nis: {
                  validators: {
                      notEmpty: {
                          message: "Silahkan Isi NIS",
                      },
                      remote: {
                          message: "Kode sudah dipakai",
                          method: "POST",
                          url: "{{ route('pendaftaran.isExistNIS') }}",
                          data: function(){
                              return {
                                  _token: "{{ csrf_token() }}",
                              }
                          },
                      },
                  },
              },
              nama_calon_anggota: {
                  validators: {
                      notEmpty: {
                          message: "Silahkan isi Nama",
                      },
                  },
              },
              no_wa: {
                  validators: {
                      notEmpty: {
                          message: "Silahkan isi No WhatsApp",
                      },
                  },
              },
              email: {
                  validators: {
                      notEmpty: {
                          message: "Silahkan isi Email",
                      },
                      emailAddress: {
                          message: "Format email tidak valid",
                      },
                      remote: {
                          message: "Email ini sudah dipakai",
                          method: "POST",
                          url: "{{ route('pendaftaran.isExistEmail') }}",
                          data: function(){
                              return {
                                  _token: "{{ csrf_token() }}",
                              }
                          },
                      },
                  },
              },
              kelas_calon_anggota: {
                  validators: {
                      notEmpty: {
                          message: "Silahkan isi Kelas",
                      },
                  },
              },
              jurusan: {
                  validators: {
                      notEmpty: {
                          message: "Silahkan isi Jurusan",
                      },
                  },
              },
              id_eskul: {
                  validators: {
                      notEmpty: {
                          message: "Silahkan isi Ekstrakurikuler",
                      },
                  },
              },
              alasan: {
                  validators: {
                      notEmpty: {
                          message: "Silahkan isi Alasan Masuk Ekstrakurikuler tersebut",
                      },
                  },
              },
          },

          plugins: {
              trigger: new FormValidation.plugins.Trigger(),
              bootstrap: new FormValidation.plugins.Bootstrap5({
                  rowSelector: ".form-group",
                  eleInvalidClass: "is-invalid",
                  eleValidClass: "",
              }),
          },
      });
      const submitButton = document.getElementById("pendaftaran_eskul_submit");
      submitButton.addEventListener("click", function (e) {
          e.preventDefault();
          if (validator) {
              validator.validate().then(function (status) {
                  
                  if (status == "Valid") {
                      submitButton.setAttribute("data-kt-indicator", "on");

                      submitButton.disabled = true;

                      setTimeout(function () {
                          submitButton.removeAttribute("data-kt-indicator");

                          submitButton.disabled = false;

                          form.submit();
                      }, 2000);
                  }
              });
          }
      });
  });
</script>
@endpush