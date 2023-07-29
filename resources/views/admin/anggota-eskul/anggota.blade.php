
@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0">Anggota</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Anggota</li>
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
                  <h3 class="card-title">DataTable Anggota Ekstrakulikuler</h3>
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
                        <form action="anggota" method="GET">
                          <input  type="search" class="form-control" name="search"  placeholder="Cari Nama Anggota">
                        </form>
                      </div>
                    </div>
                    <a href="/anggota-eskul/export-excel" class="btn btn-success mb-3">Export Excel</a>

                    <a href="#tambahdata" class="btn btn-primary mb-3">Tambah Data</a>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>no</th>
                        <th>Nama Anggota</th>
                        <th>Kelas Anggota</th>
                        <th>Nomor Induk Siswa</th>
                        <th>E-Mail</th>
                        <th>Nomor WhatsApp</th>
                        <th>Ekstrakurikuler</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>

                      <tbody>
           
                    
                        <?php $no = $anggota->firstItem(); ?>
                    @foreach ($anggota as $row)
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$row->nama_anggota ?? 'N/A'}}</td>
                        <td>{{$row->kelas_anggota ?? 'N/A'}}</td>
                        <td>{{$row->nis ?? 'N/A'}}</td>
                        <td>{{$row->email ?? 'N/A'}}</td>
                        <td>{{$row->no_wa ?? 'N/A'}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo ?? 'default_logo')}}" width="120px" alt="{{$row->eskul->logo ?? N/A}}">
                          {{$row->eskul->nama_eskul ?? N/A}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          @if (auth()->user()->role_id != 1)
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>
                          @endif

                        </td>


                      </tr>
                      @php
                            $no++
                        @endphp
                    @endforeach
                












                    </tbody>

                    
                    
                    
                  </table>

                  <div class="linkss mt-3">
                    {{$anggota->links()}}
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
              <form action="/insertdataanggota" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input  type="text" class="form-control @error('nama_anggota') is-invalid @enderror" name="nama_anggota" id="exampleInputEmail1" placeholder="Masukan Nama Anggota">
                    @error('nama_anggota')
                      <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-Mail Anggota</label>
                    <input  type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" placeholder="Masukan Nama Anggota">
                    @error('email')
                      <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No WhatsApp</label>
                    <input  type="text" class="form-control @error('no_wa') is-invalid @enderror" name="no_wa" id="exampleInputEmail1" placeholder="Masukan Nama Anggota">
                    @error('no_wa')
                      <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Induk Siswa</label>
                    <input  type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" id="exampleInputEmail1" placeholder="Masukan Nomor Induk Siswa">
                    @error('nis')
                      <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas Anggota</label>
                    <select class="custom-select rounded-0 @error('kelas_anggota') is-invalid @enderror" name="kelas_anggota" id="exampleSelectRounded0">
                      <option value="" selected>Open this select menu</option>
                      <option value="X">X</option>
                      <option value="XI">XI</option>
                      <option value="XII">XII</option>
                    </select>
                    @error('kelas_anggota')
                      <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jurusan</label>
                    <select class="custom-select rounded-0 @error('jurusan') is-invalid @enderror" name="jurusan" id="exampleSelectRounded0">
                      <option value="" selected>Open this select menu</option>
                      <option value="PPL">PPL</option>
                      <option value="AKL">AKL</option>
                      <option value="MPL">MPL</option>
                      <option value="PMS">PMS</option>
                      <option value="TLG">TLG</option>
                      <option value="TKF">TKF</option>
                      <option value="TJK">TJK</option>
                      <option value="DKV">DKV</option>
                      <option value="TLM">TLM</option>
                      <option value="TET">TET</option>
                    </select>
                    @error('jurusan')
                      <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Ekstrakurikuler</label>
                    <select class="custom-select rounded-0 @error('id_eskul') is-invalid @enderror" name="id_eskul" id="exampleSelectRounded0">
                      @foreach ($data_eskul as $row)
                      <option value="{{$row->id}}">{{$row->nama_eskul}}</option>
                      @endforeach
                        
                    </select>
                    @error('id_eskul')
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
                                window.location = "/deleteanggota/" + beritaid + ""
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