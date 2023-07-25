
@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0">Pendaftaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran</li>
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
                  <h3 class="card-title">DataTable Pendaftaran Ekstrakulikuler</h3>
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
                        <form action="pendaftaran-eskul" method="GET">
                          <input  type="search" class="form-control" name="search"  placeholder="Cari Nama Pendaftar">
                        </form>
                      </div>
                    </div>
                    @foreach ($on as $row)
                    <div class="d-flex">
                      <a href="/pendaftaran-eskul/export-excel" class="btn btn-success mb-2">Export Excel</a>
                      @if (auth()->user()->role==0)
                      @if ($row->on == 0)
                      <form action="/add-pendaftaran/{{$row->id}}" class="mb-2 mx-3" method="post">
                        @csrf
                        <input class="d-none" name="on" value="1">
                        <button type="submit" class="btn btn-primary ">Pendaftaran dibuka</button>
                      </form>
                      @else
                      <form action="/add-pendaftaran/{{$row->id}}" class="mb-2 mx-3" method="post">
                        @csrf
                        <input class="d-none" name="on" value="0">
                        <button type="submit" class="btn btn-danger ">Pendaftaran ditutup</button>
                      </form>
                      @endif
                      @endif
                      @endforeach
                    </div>
                    
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>no</th>
                          <th>Nama Pendaftar</th>
                          <th>Kelas Pendaftar</th>
                        <th>Nomor Induk Siswa</th>
                        <th>Email</th>
                        <th>Nomor Whatsapp</th>
                        <th>Alasan</th>
                        <th>Ekstrakurikuler</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($pendaftaran as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_calon_anggota}}</td>
                        <td>{{$row->kelas_calon_anggota .' - '. $row->jurusan}}</td>
                        <td>{{$row->nis}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->no_wa}}</td>
                        <td>{{$row->alasan}}</td>

                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="50px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          
                          
                          <form action="/insertdatapendaftarantopendaftaran/{{$row->id}}" method="post">
                            @csrf
                                <input type="hidden" value="{{$row->nama_calon_anggota}}" name="nama_anggota" >
                                <input type="hidden" value="{{$row->kelas_calon_anggota}}" name="kelas_anggota">
                                <input type="hidden" value="{{$row->jurusan}}" name="jurusan">
                                <input type="hidden" value="{{$row->nis}}" name="nis">
                                <input type="hidden" value="{{$row->email}}" name="email">
                                <input type="hidden" value="{{$row->no_wa}}" name="no_wa">
                                <input type="hidden" value="{{$row->id_eskul}}" name="id_eskul">
                                <button type="submit" class="btn btn-warning terima" >Terima</button>
                          </form>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_calon_anggota}}"  id="delete">Tidak diterima</a>
                          
                        </td>
                        
                        
                      </tr>
                      @endforeach
                      
                      
                      
                      
                      
                      
                    </tbody>
                    
                    
                    
                    
                  </table>
                  @if (auth()->user()->role == 0)
                  
                  <div class="linkss mt-3">
                    {{$pendaftaran->links()}}
                  </div>
                  @endif
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
            <!-- /.col -->
          </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>


      @push('script')
              <script>
                $('.delete').click(function () {
                    var kepsekid = $(this).attr('data-id');
                    var nama = $(this).attr('data-nama');
                    var eskul = $(this).attr('data-eskul');
                    swal({
                        title: "Yakin ?",
                        text:  nama + " Tidak diterima ",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                window.location = "/deletependaftaran/" + kepsekid + ""
                                swal("Data" + nama + "berhasil di Tolak", {
                                    icon: "success",
                                });
                            } else {
                                swal("Data " + nama + " tidak jadi ditolak");
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