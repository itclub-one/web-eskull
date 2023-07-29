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
              <form action="/updatedokumentasi/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <input type="text" class="form-control" value="{{$data->nama_kegiatan ?? 'N/A'}}" name="nama_kegiatan" id="exampleInputEmail1" placeholder="Masukan Nama Ekstrakurikuler">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penyelenggara</label>
                    <img src="{{asset('images/logo-eskul/'.$data->eskul->logo ?? 'N/A')}}" alt="{{$data->eskul->logo ?? 'N/A'}}" width="100px" class="d-block mb-2">
                    <select class="custom-select rounded-0" name="penyelenggara" id="exampleSelectRounded0">
                      <option selected value="{{$data->penyelenggara ?? 'N/A'}}">{{$data->eskul->nama_eskul ?? 'N/A'}}</option>
                      @foreach ($data_eskul as $data)
                      <option value="{{$data->id ?? ''}}">{{$data->nama_eskul ?? 'N/A'}}</option>
                      @endforeach
                    </select>
                    {{-- <input required type="text" class="form-control" name="penyelenggara" id="exampleInputPassword1" placeholder="Masukan Penyelenggara"> --}}
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Kegiatan</label>
                    @if (!empty($foto))
                        <img src="{{asset('images/dokumentasi/foto-kegiatan/'.$foto ?? 'N/A')}}" alt="{{$foto}}" width="300px" class="d-block mb-2">
                    @endif
                      <input type="file" class="form-control" value="{{$data->foto_kegiatan ?? 'N/A'}}" name="foto_kegiatan" >
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            