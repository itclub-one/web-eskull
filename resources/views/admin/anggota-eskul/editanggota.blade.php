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
              @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
              <!-- form start -->
              <form action="/updateanggota/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input autocomplete="off" required type="text" class="form-control" value="{{$data->nama_anggota}}" name="nama_anggota" id="exampleInputEmail1" placeholder="Masukan Nama Anggota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-Mail Anggota</label>
                    <input autocomplete="off" required type="text" class="form-control" value="{{$data->email}}" name="email" id="exampleInputEmail1" placeholder="Masukan E-Mail Anggota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No WhatsApp</label>
                    <input autocomplete="off" required type="text" class="form-control" value="{{$data->no_wa}}" name="no_wa" id="exampleInputEmail1" placeholder="Masukan No WhatsApp">
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
                    <input autocomplete="off" required type="number" class="form-control" value="{{$data->nis}}" name="nis" id="exampleInputEmail1" placeholder="Masukan Nomor Induk Siswa">
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
                      @foreach ($data_eskul as $row)
                      
                      <option selected value="{{$data->id_eskul}}">{{$data->eskul->nama_eskul}}</option>
                      
                      <option value="{{$row->id}}">{{$row->nama_eskul}}</option>
                      @endforeach
                        
                    </select>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            