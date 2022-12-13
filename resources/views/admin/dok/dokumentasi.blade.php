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
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
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
                    <div class="head">
                      <h3>Recent Orders</h3>
                      <i class='bx bx-search' ></i>
                      <i class='bx bx-filter' ></i>
                      <div class="form-group col-4">
                        <form action="administrator" method="GET">
                          <input  type="search" class="form-control" name="search"  placeholder="Cari Nama Ekstrakurikuler">
                        </form>
                      </div>
                    </div>
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
                          <img src="{{asset('logoeskul/'.$row->logo)}}" width="120px" alt="">
                        </td>
                        <td>{{$row->penyelenggara}}</td>
                        <td>
                          <img src="{{asset('fotokegiatan/'.$row->foto_kegiatan)}}" width="120px" alt="">
                        </td>




                         <td>
                          <a href="/editdokumentasi/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_dokumentasi}}"  id="delete">Delete</a>

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



      <div class="container-fluid">
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
                        <input required type="text" class="form-control" name="nama_kegiatan" id="exampleInputEmail1" placeholder="Masukan Nama Kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Logo Ekstrakurikuler</label>
                        <input required type="file" class="form-control" name="logo" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Penyelenggara</label>
                        <input required type="text" class="form-control" name="penyelenggara" id="exampleInputPassword1" placeholder="Masukan Penyelenggara">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Kegiatan</label>
                        <input required type="file" class="form-control" name="foto_kegiatan" >
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
