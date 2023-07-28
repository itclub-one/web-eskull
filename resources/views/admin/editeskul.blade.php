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
              <form action="/updateeskul/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  {{-- <div class="form-group">
                    <label for="exampleInputEmail1">id</label>
                    <input type="text" class="form-control" value="{{$data->id}}" name="id" id="exampleInputEmail1" placeholder="Masukan id">
                  </div> --}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ekstrakurikuler</label>
                    <input type="text" class="form-control" value="{{$data->nama_eskul ?? 'N/A'}}" name="nama_eskul" id="exampleInputEmail1" placeholder="Masukan Nama Ekstrakurikuler">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sekbid</label>
                    <input type="number" class="form-control" value="{{$data->sekbid ?? 'N/A'}}" name="sekbid" id="exampleInputEmail1" placeholder="Masukan Sekbid Berapa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Logo Ekstrakurikuler</label>
                    <img src="{{asset('images/logo-eskul/'.$data->logo ?? 'N/A')}}" alt="{{$data->logo ?? 'N/A'}}" width="100px" class="d-block border mb-2">
                      <input type="file" class="form-control" value="{{$data->logo ?? 'N/A'}}" name="logo" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pembina</label>
                    <input type="text" class="form-control" value="{{$data->pembina ?? 'N/A'}}" name="pembina" id="exampleInputPassword1" placeholder="Masukan Nama Pembina">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ketua</label>
                    <input type="text" class="form-control" value="{{$data->ketua ?? 'N/A'}}" name="ketua" id="exampleInputPassword1" placeholder="Masukan Nama Ketua">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Wakil Ketua</label>
                    <input type="text" class="form-control" value="{{$data->wakilketua ?? 'N/A'}}" name="wakilketua" id="exampleInputPassword1" placeholder="Masukan Jadwal Wakil Ketua">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jadwal Ekstrakurikuler</label>
                    <input type="text" class="form-control" value="{{$data->jadwal_kumpulan ?? 'N/A'}}" name="jadwal_kumpulan" id="exampleInputPassword1" placeholder="Masukan Nama Ekstrakurikuler, Contoh (Senin dan Jumat)">
                  </div>
                  <div class="form-floating">
                    <label for="floatingTextarea2">Visi</label>
                    <textarea class="form-control" name="visi"  placeholder="Masukkan Visi (Setiap garis baru tambahkan <br>)" id="floatingTextarea2" style="height: 100px">{{$data->visi ?? 'N/A'}}</textarea>
                </div>
                <div class="form-floating">
                    <label for="floatingTextarea2">Misi</label>
                    <textarea class="form-control" name="misi_eskul"  placeholder="Masukkan Misi (Setiap garis baru tambahkan <br>)" id="floatingTextarea2" style="height: 100px">{{$data->misi_eskul ?? 'N/A'}}</textarea>
                </div>
                <div class="form-floating">
                    <label for="floatingTextarea2">Program Kerja</label>
                    <textarea class="form-control" name="program_kerja"  placeholder="Masukkan Program Kerja Ekstrakurikuler (Setiap garis baru tambahkan <br>)" id="floatingTextarea2" style="height: 100px">{{$data->program_kerja ?? 'N/A'}}</textarea>
                </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input type="text" class="form-control" value="{{$data->nama_instagram ?? 'N/A'}}" name="nama_instagram" id="exampleInputPassword1" placeholder="Masukan Nama Instagram Contoh (@eskulP)">
                  </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            