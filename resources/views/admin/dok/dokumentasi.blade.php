@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0">Dokumentasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dokumentasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable Dokumentasi Ekstrakulikuler</h3>
                </div>

                
                <!-- /.card-header -->
                <div class="table-data">
                  <div class="order">
                    @if ($message = Session::get('success'))
                    <div  style="width: 500px">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i type="button" class="fa-solid fa-xmark mx-2" style="color: black; "  data-bs-dismiss="alert" aria-label="Close">
                        </i>
                        <strong>{{$message}}</strong>
                      </div>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div  style="width: 500px">
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i type="button" class="fa-solid fa-xmark mx-2" style="color: black; "  data-bs-dismiss="alert" aria-label="Close">
                        </i>
                        <strong>{{$message}}</strong>
                      </div>
                    </div>
                    @endif
                    <div class="head">
                      <div class="form-group col-lg-4 col-8">
                        <form action="dokumentasi" method="GET">
                          <input  type="search" class="form-control" name="search"  placeholder="Cari Nama Kegiatan">
                        </form>
                      </div>
                    </div>
                    <a href="#tambahdata" class="btn btn-primary mb-3">Tambah Data</a>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Logo dokumentasi</th>
                        <th>Penyelenggara</th>
                        <th>Foto Kegiatan</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>

                    @php
                      $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    
                      <tbody>
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_kegiatan}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="">
                        </td>
                        <td>{{$row->eskul->nama_eskul}}</td>
                        <td>
                          <img src="{{asset('images/dokumentasi/foto-kegiatan/'.$row->foto_kegiatan)}}" width="120px" alt="">
                        </td>
                        
                        

                        
                         <td>
                          <a href="/editdokumentasi/{{$row->id}}" class="btn btn-warning">Edit</a>
                              
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_kegiatan}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach

                    
                    
                    
                  </table>

                  <div class="linkss mt-3">
                    {{$data->links()}}
                  </div>
                </div>
                
              </div>

                

            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>



      <div id="tambahdata" class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 mb-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/insertdatadokumentasi" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kegiatan</label>
                        <input  type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan" id="exampleInputEmail1" placeholder="Masukan Nama Kegiatan">
                        @error('nama_kegiatan')
                          <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputFile">Logo Ekstrakurikuler</label>
                        <input  type="file" class="form-control" name="logo" >
                    </div> --}}
                    <div class="form-group">
                        <label for="exampleInputPassword1">Penyelenggara</label>
                        <select class="custom-select rounded-0 @error('penyelenggara') is-invalid @enderror" name="penyelenggara" id="exampleSelectRounded0">
                         
                          @foreach ($data_eskul as $row)
                          @if (auth()->user()->role=='root' || $currentRole['eskul_id'] == $row->id)<!-- Perlihatkan eskul jika user adalah root atau user memiliki eskul tersebut -->
                          <option value="{{$row->id}}">{{$row->nama_eskul}}</option>
                          @endif
                          @endforeach
                        </select>
                        @error('penyelenggara')
                          <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                        {{-- <input  type="text" class="form-control" name="penyelenggara" id="exampleInputPassword1" placeholder="Masukan Penyelenggara"> --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Kegiatan</label>
                        <input  type="file" class="form-control @error('foto_kegiatan') is-invalid @enderror" name="foto_kegiatan" >
                        @error('foto_kegiatan')
                          <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

              @push('script')
              <script>
                $('.delete').click(function () {
                    var dokumentasiid = $(this).attr('data-id');
                    var nama = $(this).attr('data-nama');
                    swal({
                        title: "Yakin ?",
                        text: "Kamu akan menghapus data pegawai dengan nama " + nama + " ",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                window.location = "/deletedokumentasi/" + dokumentasiid + ""
                                swal("Data" + nama + "berhasil di hapus", {
                                    icon: "success",
                                });
                            } else {
                                swal("Data " + nama + " tidak jadi dihapus");
                            }
                        });
                });
              </script>
              
              <script>
                @if (Session:: has('success'))
                toastr.success("{{ Session::get('success') }}")
                @endif
              </script>
              @endpush
              
@endsection