@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    



      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 mb-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/updateanggota/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input required type="text" class="form-control" value="{{$data->nama_anggota}}" name="nama_anggota" id="exampleInputEmail1" placeholder="Masukan Nama Anggota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas Anggota</label>
                    <select class="custom-select rounded-0" name="kelas_anggota" id="exampleSelectRounded0">
                      <option value="{{$data->kelas_anggota}}" selected>{{$data->kelas_anggota}}</option>
                      <option value="X">X</option>
                      <option value="XI">XI</option>
                      <option value="XII">XII</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Induk Siswa</label>
                    <input required type="number" class="form-control" value="{{$data->nis}}" name="nis" id="exampleInputEmail1" placeholder="Masukan Nomor Induk Siswa">
                  </div>
                  <div class="form-group">
                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10" for="exampleInputPassword1">Jurusan</label>
                <select class="{{--@error('jurusan') is-invalid @enderror--}} custom-select rounded-0" name="jurusan" id="exampleSelectRounded0">
                  <option value="{{$data->jurusan}}" selected>{{$data->jurusan}}</option>
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
                {{-- @error('jurusan')
                      <span class="invalid-feedback">{{$message}}</span>
                  @enderror --}}
              </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Ekstrakurikuler</label>
                    <select class="custom-select rounded-0" name="id_eskul" id="exampleSelectRounded0">
                      
                      @if (auth()->user()->role=='adminmpk')
                        <option value="1" selected>Majelis Permusyawaratan Kelas</option>
                      @endif
                      @if (auth()->user()->role=='adminosis')
                        <option value="2" selected>OSIS</option>
                      @endif
                      @if (auth()->user()->role=='adminirma')
                        <option value="3" selected>IRMA</option>
                      @endif
                      @if (auth()->user()->role=='adminpks')
                        <option value="4" selected>PKS</option>
                      @endif
                      @if (auth()->user()->role=='adminpramukaputra')
                        <option value="5" selected>Pramuka Putra</option>
                      @endif
                      @if (auth()->user()->role=='adminpramukaputri')
                        <option value="6" selected>Pramuka Putri</option>
                      @endif
                      @if (auth()->user()->role=='adminpaskibra')
                        <option value="7" selected>Paskibra</option>
                      @endif
                      @if (auth()->user()->role=='adminvolly')
                        <option value="8" selected>Volly</option>
                      @endif
                      @if (auth()->user()->role=='adminfutsalputra')
                        <option value="9" selected>Futsal Putra</option>
                      @endif
                      @if (auth()->user()->role=='adminfutsalputri')
                        <option value="10" selected>Futsal Putri</option>
                      @endif
                      @if (auth()->user()->role=='adminsepakbola')
                        <option value="11" selected>Sepakbola</option>
                      @endif
                      @if (auth()->user()->role=='adminbasket')
                        <option value="12" selected>Basket</option>
                      @endif
                      @if (auth()->user()->role=='adminHockey')
                        <option value="13" selected>Hockey</option>
                      @endif
                      @if (auth()->user()->role=='adminbadminton')
                        <option value="14" selected>Badminton</option>
                      @endif
                      @if (auth()->user()->role=='adminkarate')
                        <option value="15" selected>Karate</option>
                      @endif
                      @if (auth()->user()->role=='admintaekwondo')
                        <option value="16" selected>Taekwondo</option>
                      @endif
                      @if (auth()->user()->role=='adminsilat')
                        <option value="17" selected>Silat</option>
                      @endif
                      @if (auth()->user()->role=='admintarungderajat')
                        <option value="18" selected>Tarung Derajat</option>
                      @endif
                      @if (auth()->user()->role=='adminkir')
                        <option value="19" selected>Karya Ilmiyah Remaja</option>
                      @endif
                      @if (auth()->user()->role=='adminkopsis')
                        <option value="20" selected>Koperasi Siswa</option>
                      @endif
                      @if (auth()->user()->role=='adminpmr')
                        <option value="21" selected>Palang Merah Remaja</option>
                      @endif
                      @if (auth()->user()->role=='adminsenitari')
                        <option value="22" selected>Seni Tari</option>
                      @endif
                      @if (auth()->user()->role=='adminmarchingband')
                        <option value="23" selected>Marching Band</option>
                      @endif
                      @if (auth()->user()->role=='adminsenikriya')
                        <option value="24" selected>Seni Kriya</option>
                      @endif
                      @if (auth()->user()->role=='adminpaduansuara')
                        <option value="25" selected>Paduan Suara</option>
                      @endif
                      @if (auth()->user()->role=='adminkarawitan')
                        <option value="26" selected>Karawitan</option>
                      @endif
                      @if (auth()->user()->role=='adminteater')
                        <option value="27" selected>Teater</option>
                      @endif
                      @if (auth()->user()->role=='adminsenimusik')
                        <option value="28" selected>Seni Musik</option>
                      @endif
                      @if (auth()->user()->role=='adminitclub')
                        <option value="29" selected>IT-Club</option>
                      @endif
                      @if (auth()->user()->role=='adminbroadcast')
                        <option value="30" selected>Broadcast</option>
                      @endif
                      @if (auth()->user()->role=='adminenglishclub')
                        <option value="31" selected>English Club</option>
                      @endif
                      @if (auth()->user()->role=='adminkoreanclub')
                        <option value="32" selected>Korean Club</option>
                      @endif
                      @if (auth()->user()->role=='adminjapanclub')
                        <option value="33" selected>Japan Club</option>
                      @endif
                      @if (auth()->user()->role=='admindeutschclub')
                        <option value="34" selected>Deutsch Club</option>
                        @endif
                    @if (auth()->user()->role=='root')
                    <option value="{{$data->id_eskul}}" selected>{{$data->eskul->nama_eskul}}</option>
                      @foreach ($data_eskul as $row)
                      <option value="{{$row->id}}">{{$row->nama_eskul}}</option>
                      @endforeach
                    @endif
                  </select>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            