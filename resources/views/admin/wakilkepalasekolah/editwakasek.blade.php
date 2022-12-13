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
              <form action="/updatekepsek/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Wakil Kepala Sekolah</label>
                    <input required type="text" class="form-control" value="{{$data->nama_wakasek}}" name="nama_wakasek" id="exampleInputEmail1" placeholder="Masukan Nama Kegiatan">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Foto Wakil Kepala Sekolah</label>
                    <input required type="file" class="form-control" value="{{$data->foto_wakasek}}" name="foto_wakasek" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Pembuka Sambutan</label>
                    <input required type="text" class="form-control" value="{{$data->pembuka_sambutan}}" name="pembuka_sambutan" id="exampleInputPassword1" placeholder="Masukan Pembuka Sambutan">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Isi Sambutan</label>
                    <input required type="text" class="form-control" value="{{$data->isi_sambutan}}" name="isi_sambutan" id="exampleInputPassword1" placeholder="Masukan Isi Sambutan">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Penutup Sambutan</label>
                    <input required type="text" class="form-control" value="{{$data->penutup_sambutan}}" name="penutup_sambutan" id="exampleInputPassword1" placeholder="Masukan Penutup Sambutan">
                </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            