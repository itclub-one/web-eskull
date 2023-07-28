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
              <form action="/updateberita/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Berita</label>
                    <input type="text" class="form-control" value="{{$data->judul_berita ?? 'N/A'}}" name="judul_berita" id="exampleInputEmail1" placeholder="Masukan Judul Berita">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Berita</label>
                    <img src="{{asset('images/foto-berita/'.$data->foto_berita)}}" alt="{{$data->foto_berita ?? 'N/A'}}" width="300px" class="d-block mb-2">
                      <input type="file" class="form-control" value="{{$data->foto_berita ?? 'N/A'}}" name="foto_berita" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Berita</label>
                    <input type="text" class="form-control" value="{{$data->tanggal_berita ?? 'N/A'}}" name="tanggal_berita" id="exampleInputPassword1" placeholder="Masukan Tanggal Berita">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea required name="deskripsi" class="form-control" id="exampleInputEmail1" cols="30" rows="10">{{$data->deskripsi ?? 'N/A'}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekstrakurikuler</label>
                    <select required name="id_eskul" class="form-control" id="exampleInputEmail1">
                      <option selected value="{{$data->id_eskul ?? 'N/A'}}">{{$data->eskul->nama_eskul ?? 'N/A'}}</option>
                      @foreach ($data_eskul as $row)
                      <option value="{{$row->id ?? 'N/A'}}">{{$row->nama_eskul ?? 'N/A'}}</option>
                      @endforeach
                    </select>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            