
@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m- ?? 'N/A'">Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Berita</li>
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
                  <h3 class="card-title">DataTable Berita</h3>
                </div>

                <div class="form-group col-4">
                  
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
                      <div class="form-group col-lg-4 col-10">
                        <form action="berita" method="GET" id="search-form">
                          <div class="input-group">
                            <input autocomplete="off" type="text" class="form-control" name="search" placeholder="Cari Judul Berita" value="{{ request('search') }}" id="search-input">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-primary">Search</button>
                              <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <script>
                      document.addEventListener('DOMContentLoaded', function () {
                        const searchInput = document.getElementById('search-input');
                        const searchForm = document.getElementById('search-form');
                    
                        // Handle the click event of the "Reset" button
                        document.querySelector('#search-form button[type="reset"]').addEventListener('click', function () {
                          searchInput.value = ''; // Clear the search input value
                          searchForm.submit(); // Submit the form to perform the reset
                        });
                      });
                    </script>
                    <a href="#tambahdata" class="btn btn-primary mb-3">Tambah Data</a>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>no</th>
                        <th>Judul Berita</th>
                        <th>Sub Judul</th>
                        <th>Foto berita</th>
                        <th>Deskripsi</th>
                        <th>Sub Deskripsi</th>
                        <th>Tanggal Berita</th>
                        <th>Ekstrakurikuler</th>
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
                        <td>{{$row->judul_berita ?? 'N/A'}}</td>
                        <td>{{$row->sub_judul}}</td>
                        <td>
                          <img src="{{asset('images/foto-berita/'.$row->foto_berita ?? 'N/A')}}" width="200px" alt="">
                        </td>
                        <td>{{$row->deskripsi ?? 'N/A'}}</td>
                        <td>{{$row->sub_deskripsi ?? 'N/A'}}</td>
                        <td>{{$row->tanggal_berita ?? 'N/A'}}</td>
                        <td>
                          @if($row->eskul)
                              <img src="{{ asset('images/logo-eskul/'.$row->eskul->logo ?? 'N/A') }}" width="200px" alt="">
                              {{ $row->eskul->nama_eskul }}
                          @else
                              No Eskul Data Available
                          @endif
                      </td>
                        

                        
                        <td>
                          <a href="/editberita/{{$row->id}}" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->judul_berita}}"  id="delete">Delete</a>
                        </td>


                      </tr>
                    @endforeach

                    
                    
                    
                  </table>

                  <div class="linkss mt-3">
                    {{$data->links()}}
                  </div>
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
              <form action="/insertdataberita" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Berita</label>
                    <input autocomplete="off" required type="text" class="form-control" name="judul_berita" id="exampleInputEmail1" placeholder="Masukan Judul Berita">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputFile">Foto Berita</label>
                      <input autocomplete="off" required type="file" class="form-control" name="foto_berita" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Berita</label>
                    <input autocomplete="off" required type="date" class="form-control" name="tanggal_berita" id="exampleInputPassword1" placeholder="Masukan Tanggal Berita">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea required name="deskripsi" class="form-control" id="exampleInputEmail1" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekstrakurikuler</label>
                    <select required name="id_eskul" class="form-control" id="exampleInputEmail1">
                      @foreach ($data_eskul as $row)
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

              @push('script')
              <script>
                $('.delete').click(function () {
                    var beritaid = $(this).attr('data-id');
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
                                window.location = "/deleteberita/" + beritaid + ""
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