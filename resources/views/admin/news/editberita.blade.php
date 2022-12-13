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
                                    <input type="text" class="form-control" value="{{$data->judul_berita}}"
                                           name="judul_berita" id="exampleInputEmail1"
                                           placeholder="Masukan Judul Berita">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Berita</label>
                                    <input type="file" class="form-control" value="{{$data->foto_berita}}"
                                           name="foto_berita">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal Berita</label>
                                    <input type="text" class="form-control" value="{{$data->tanggal_berita}}"
                                           name="tanggal_berita" id="exampleInputPassword1"
                                           placeholder="Masukan Tanggal Berita">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
