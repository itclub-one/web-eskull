@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0">Kepala Sekolah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kepala Sekolah</li>
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
                  <h3 class="card-title">DataTable Kepala Sekolah</h3>
                </div>
                <!-- /.card-header -->
                <div class="table-data">
                  <div class="order">
                    @if ($message = Session::get('success'))
                    <div  style="width: 500px">
                      <div id="fm" class="alert alert-success alert-dismissible fade show" role="alert">
                        <i type="button" class="fa-solid fa-xmark mx-2" style="color: black; "  data-bs-dismiss="alert" aria-label="Close">
                        </i>
                        <strong>{{$message}}</strong>
                      </div>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div  style="width: 500px">
                      <div id="fm" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i type="button" class="fa-solid fa-xmark mx-2" style="color: black; "  data-bs-dismiss="alert" aria-label="Close">
                        </i>
                        <strong>{{$message}}</strong>
                      </div>
                    </div>
                    @endif
                    <script>
                      // Set a timeout of 5 seconds (5000 milliseconds)
                      setTimeout(function () {
                        document.getElementById('fm').style.display = 'none';
                      }, 8000); // Adjust the time (in milliseconds) as needed
                    </script>
                    
                    <a href="#tambahdata" class="btn btn-primary mb-3">Tambah Data</a>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Pembuka Sambutan</th>
                        <th>Isi Sambutan</th>
                        <th>Penutup Sambutan</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>

                      @php
                      if ($data->count() > 1) {
                        # code...
                      $no = $data->firstitem();
                      } else {
                        $no = 1;
                      }
                  @endphp
                    @foreach ($data as $row)
                    
                      <tbody>
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_kepsek}}</td>
                        <td>
                          <img src="{{asset('images/foto-kepsek/'.$row->foto_kepsek)}}" width="120px" alt="{{$row->foto_kepsek}}">
                        </td>
                        <td>{{$row->pembuka_sambutan}}</td>
                        <td>{{$row->isi_sambutan}}</td>
                        <td>{{$row->penutup_sambutan}}</td>
                        
                        
                        

                        
                        <td>
                          <a href="/editkepsek/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_kepsek}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach

                    
                    
                    
                  </table>
                  {{-- <div class="linkss mt-3">
                    {{$data->links()}}
                  </div> --}}
                </div>
                
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
              <form action="/insertdatakepsek" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kepala Sekolah</label>
                        <input autocomplete="off" required type="text" class="form-control" name="nama_kepsek" id="exampleInputEmail1" placeholder="Masukan Nama Kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Kepala Sekolah</label>
                        <input autocomplete="off" required type="file" class="form-control" name="foto_kepsek" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Pembuka Sambutan</label>
                        <input autocomplete="off" required type="text" class="form-control" name="pembuka_sambutan" id="exampleInputPassword1" placeholder="Masukan Pembuka Sambutan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Isi Sambutan</label>
                        <input autocomplete="off" required type="text" class="form-control" name="isi_sambutan" id="exampleInputPassword1" placeholder="Masukan Isi Sambutan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Penutup Sambutan</label>
                        <input autocomplete="off" required type="text" class="form-control" name="penutup_sambutan" id="exampleInputPassword1" placeholder="Masukan Penutup Sambutan">
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
                    var kepsekid = $(this).attr('data-id');
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
                                window.location = "/deletekepsek/" + kepsekid + ""
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