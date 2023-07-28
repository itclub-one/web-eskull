@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0">Wakil Kepala Sekolah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Wakil Kepala Sekolah</li>
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
                  <h3 class="card-title">DataTable Wakil Kepala Sekolah</h3>
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
                    
                    <a href="#tambahdata" class="btn btn-primary mb-3">Tambah Data</a>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>no</th>
                        <th>Nama Kepala Sekolah</th>
                        <th>Foto Kepala Sekolah</th>
                        <th>Pembuka Sambutan</th>
                        <th>Isi Sambutan</th>
                        <th>Penutup Sambutan</th>
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
                        <td>{{$row->nama_wakasek}}</td>
                        <td>
                          <img src="{{asset('images/foto-wakasek/'.$row->foto_wakasek)}}" width="120px" alt="{{$row->foto_wakasek}}">
                        </td>
                        <td>{{$row->pembuka_sambutan}}</td>
                        <td>{{$row->isi_sambutan}}</td>
                        <td>{{$row->penutup_sambutan}}</td>
                        
                        
                        

                        
                        <td>
                          <a href="/editwakasek/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_wakasek}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach

                    
                    
                    
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

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
              <form action="/insertdatawakasek" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Wakil Kepala Sekolah</label>
                        <input required type="text" class="form-control" name="nama_wakasek" id="exampleInputEmail1" placeholder="Masukan Nama Wakil Kepala Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Wakil Kepala Sekolah</label>
                        <input required type="file" class="form-control" name="foto_wakasek" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Pembuka Sambutan</label>
                        <input required type="text" class="form-control" name="pembuka_sambutan" id="exampleInputPassword1" placeholder="Masukan Pembuka Sambutan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Isi Sambutan</label>
                        <input required type="text" class="form-control" name="isi_sambutan" id="exampleInputPassword1" placeholder="Masukan Isi Sambutan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Penutup Sambutan</label>
                        <input required type="text" class="form-control" name="penutup_sambutan" id="exampleInputPassword1" placeholder="Masukan Penutup Sambutan">
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
                    var wakasekid = $(this).attr('data-id');
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
                                window.location = "/deletewakasek/" + wakasekid + ""
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