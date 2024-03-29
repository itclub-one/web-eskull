
@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0">Esktrakurikuler</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ekstrakurikuler</li>
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
                  <h3 class="card-title">DataTable Ekstrakulikuler</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                  

                  <div class="table-data">
                    <div class="order">
                      <div class="head">
                        @if (auth()->user()->role_id== 1)
                          <div class="form-group col-lg-4 col-8">
                            <form action="administrator" method="GET" id="search-form">
                              <div class="input-group">
                                <input autocomplete="off" type="search" class="form-control" name="search" placeholder="Cari Nama Ekstrakurikuler" value="{{ request('search') }}" id="search-input">
                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-primary">Search</button>
                                  <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                              </div>
                            </form>
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
                        @endif
                      </div>
                      @if (auth()->user()->role_id== 1)
                      <a href="#tambahdata" class="btn btn-primary mb-3">Tambah Data</a>
                      @endif
                      
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                        <th>No</th>
                        <th>Ekstrakurikuler</th>
                        <th>Sekbid</th>
                        <th>Logo Eskul</th>
                        <th>Pembina</th>
                        <th>Ketua</th>
                        <th>Wakil Ketua</th>
                        <th>Jadwal Eskul</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Program Kerja</th>
                        <th>Instagram</th>
                        
                        <th @if(auth()->user()->role_id == 1)colspan="2"@endif>Aksi</th>
                          </tr>
                        </thead>

                        <tbody>
                          @php
                          if ($eskul->count() > 1) {
                          # code...
                          $no = $eskul->firstitem();
                          } else {
                            $no = 1;
                          }
                          
                          @endphp
                          @foreach ($eskul as $row)
                          <tr>
                            {{-- @if (auth()->user()->role_id== 1) --}}
                            {{-- <td>{{$index + $eskul->firstitem()}}</td> --}}
                            {{-- @else --}}
                            <td>{{$no++}}</td>
                            {{-- @endif --}}
                        <td>{{$row->nama_eskul ?? 'N/A'}}</td>
                        <td>{{$row->sekbid ?? 'N/A'}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo ?? 'N/A')}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina ?? 'N/A'}}</td>
                        <td>{{$row->ketua ?? 'N/A'}}</td>
                        <td>{{$row->wakilketua ?? 'N/A'}}</td>
                        <td>{{$row->jadwal_kumpulan ?? 'N/A'}}</td>
                        <td>{{$row->visi ?? 'N/A'}}</td>
                        <td>{{$row->misi_eskul ?? 'N/A'}}</td>
                        <td>{{$row->program_kerja ?? 'N/A'}}</td>
                        <td>{{$row->nama_instagram ?? 'N/A'}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          @if (auth()->user()->role_id== 1)
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_eskul}}"  id="delete">Delete</a>
                          <td>
                            <form action="/registerusernew/{{$row->id}}" method="post">
                              @csrf
                              <button type="submit" class="btn btn-secondary">Tambah User</button>
                            </form>
                          </td>
                          
                          @endif
                        </td>
                          </tr>
                          <tr>
                            @php
                                $no++;
                            @endphp
                            @endforeach
                        </tbody>
                      </table>
                      @if (auth()->user()->role_id== 1)
                      <div class="linkss mt-3">
                        {{$eskul->links()}}
                      </div>
                      @endif
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


      @if (auth()->user()->role_id== 1)
      
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
              {{-- @foreach ($errors->all() as $error)
                  <div class="alert alert-danger">{{$error}}</div>
              @endforeach --}}
              <!-- form start -->
              <form action="/insertdataeskul" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ekstrakurikuler</label>
                    <input autocomplete="off"  type="text" class="form-control @error('nama_eskul') is-invalid @enderror" name="nama_eskul" id="exampleInputEmail1" placeholder="Masukan Nama Ekstrakurikuler">
                    @error('nama_eskul')
                    <span class="invalid-feedback">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Sekbid</label>
                  <input autocomplete="off"  type="number" class="form-control @error('sekbid') is-invalid @enderror" name="sekbid" id="exampleInputEmail1" placeholder="Masukan Sekbid berapa">
                  @error('sekbid')
                  <span class="invalid-feedback">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Logo Ekstrakurikuler</label>
                <input autocomplete="off"  type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" >
                @error('logo')
                <span class="invalid-feedback">{{$message}}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Pembina</label>
              <input autocomplete="off"  type="text" class="form-control @error('pembina') is-invalid @enderror" name="pembina" id="exampleInputPassword1" placeholder="Masukan Nama Pembina">
              @error('pembina')
              <span class="invalid-feedback">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Ketua</label>
            <input autocomplete="off"  type="text" class="form-control @error('ketua') is-invalid @enderror" name="ketua" id="exampleInputPassword1" placeholder="Masukan Nama Ketua">
            @error('ketua')
            <span class="invalid-feedback">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Wakil Ketua</label>
          <input autocomplete="off"  type="text" class="form-control @error('wakilketua') is-invalid @enderror" name="wakilketua" id="exampleInputPassword1" placeholder="Masukan Nama Wakil Ketua">
          @error('wakilketua')
          <span class="invalid-feedback">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Jadwal Ekstrakurikuler</label>
        <input autocomplete="off"  type="text" class="form-control @error('jadwal_kumpulan') is-invalid @enderror" name="jadwal_kumpulan" id="exampleInputPassword1" placeholder="Masukan Jadwal Ekstrakurikuler">
        @error('jadwal_kumpulan')
        <span class="invalid-feedback">{{$message}}</span>
      @enderror
    </div>
    <div class="form-floating">
      <label for="floatingTextarea2">Visi</label>
      <textarea class="form-control @error('visi') is-invalid @enderror" name="visi"  placeholder="Masukkan Visi (Setiap garis baru tambahkan <br>)" id="floatingTextarea2" style="height: 100px"></textarea>
      @error('visi')
      <span class="invalid-feedback">{{$message}}</span>
    @enderror
  </div>
  <div class="form-floating">
    <label for="floatingTextarea2">Misi</label>
    <textarea class="form-control @error('misi_eskul') is-invalid @enderror" name="misi_eskul"  placeholder="Masukkan Misi (Setiap garis baru tambahkan <br>)" id="floatingTextarea2" style="height: 100px"></textarea>
    @error('misi_eskul')
    <span class="invalid-feedback">{{$message}}</span>
  @enderror
</div>
<div class="form-floating">
  <label for="floatingTextarea2">Program Kerja</label>
  <textarea class="form-control @error('program_kerja') is-invalid @enderror" name="program_kerja"  placeholder="Masukkan Program Kerja Ekstrakurikuler (Setiap garis baru tambahkan <br>)" id="floatingTextarea2" style="height: 100px"></textarea>
  @error('program_kerja')
  <span class="invalid-feedback">{{$message}}</span>
  @enderror
</div>



<div class="form-group">
  <label for="exampleInputPassword1">Instagram</label>
  <input autocomplete="off"  type="text" class="form-control @error('nama_instagram') is-invalid @enderror" name="nama_instagram" id="exampleInputPassword1" placeholder="Masukan Nama Instagram ">
  @error('nama_instagram')
  <span class="invalid-feedback">{{$message}}</span>
  @enderror
                  </div>
                  <!-- <div class="form-check">
                    <input autocomplete="off" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              @endif

              @push('script')
              <script>
                $('.delete').click(function () {
                    var eskulid = $(this).attr('data-id');
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
                                window.location = "/deleteeskul/" + eskulid + ""
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