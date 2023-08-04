
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

                  <div class="head">
                    <div class="form-group col-lg-4 col-10">
                      <form action="pendaftaran-eskul" method="GET" id="search-form">
                        <div class="input-group">
                          <input autocomplete="off" type="search" class="form-control" name="search" placeholder="Cari Nama Pendaftar" value="{{ request('search') }}" id="search-input">
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
                      </div>

                    @foreach ($on as $row)
                      <div class="d-flex">
                        <a href="/pendaftaran-eskul/export-excel" class="btn btn-success mb-2">Export Excel</a>
                        @if (auth()->user()->role_id == 1 ?? 'N/A')
                          <form id="form-{{$row->id}}" action="/add-pendaftaran/{{$row->id}}" class="mb-2 mx-3" method="post">
                            @csrf
                            @if ($row->on == 0)
                            <input autocomplete="off" type="hidden" name="on" value="{{ $row->on ? '0' : '1'  }}">
                            @else
                            <input autocomplete="off" type="hidden" name="on" value="{{ $row->on ? '0' : '1'  }}">
                            @endif
                            <label class="switch">
                              <input autocomplete="off" type="checkbox" {{ $row->on ? 'checked' : '' }} onchange="document.getElementById('form-{{$row->id}}').submit()">
                              <span class="slider round"></span>
                            </label>
                            <span>
                              @if ($row->on == 0)
                                  Pendaftaran ditutup
                                  @else
                                  Pendaftaran dibuka
                              @endif
                            </span>
                          </form>
                        @endif
                      </div>
                      @endforeach


                    
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
                      if ($pendaftaran->count() > 1) {
                        # code...
                        $no = $pendaftaran->firstitem();
                        } else {
                          $no = 1;
                        }
                  @endphp
                    @foreach ($pendaftaran as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_calon_anggota ?? 'N/A'}}</td>
                        <td>{{$row->kelas_calon_anggota .'-'.$row->jurusan  ?? 'N?A'}}</td>
                        <td>{{$row->nis ?? 'N/A'}}</td>
                        <td>{{$row->email ?? 'N/A'}}</td>
                        <td>{{$row->no_wa ?? 'N/A'}}</td>
                        <td>{{$row->alasan ?? 'N/A'}}</td>

                        
                        <td>
                          @if($row->eskul)
                              <img src="{{ asset('images/logo-eskul/'.$row->eskul->logo ?? 'N/A') }}" width="200px" alt="">
                              {{ $row->eskul->nama_eskul }}
                          @else
                              No Eskul Data Available
                          @endif
                      </td>
                        

                        
                        <td>
                          
                          
                          <form action="/insertdatapendaftarantopendaftaran/{{$row->id}}" method="post">
                            @csrf
                                <input autocomplete="off" type="hidden" value="{{$row->nama_calon_anggota}}" name="nama_anggota" >
                                <input autocomplete="off" type="hidden" value="{{$row->kelas_calon_anggota}}" name="kelas_anggota">
                                <input autocomplete="off" type="hidden" value="{{$row->jurusan}}" name="jurusan">
                                <input autocomplete="off" type="hidden" value="{{$row->nis}}" name="nis">
                                <input autocomplete="off" type="hidden" value="{{$row->email}}" name="email">
                                <input autocomplete="off" type="hidden" value="{{$row->no_wa}}" name="no_wa">
                                <input autocomplete="off" type="hidden" value="{{$row->id_eskul}}" name="id_eskul">
                                <button type="submit" class="btn btn-warning terima" >Terima</button>
                          </form>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_calon_anggota}}"  id="delete">Tidak diterima</a>
                          
                        </td>
                        
                        
                      </tr>
                      @endforeach
                      
                      
                      
                      
                      
                      
                    </tbody>
                    
                    
                    
                    
                  </table>
                  {{-- @if (auth()->user()->role_id ?? 'N/A' == 1) --}}
                  
                  <div class="linkss mt-3">
                    {{$pendaftaran->links()}}
                  </div>
                  {{-- @endif --}}
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


      @endsection
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


              @push('css')
                  <style>
                    /* The container (the outer circle) */
              .switch {
                position: relative;
                display: inline-block;
                width: 40px;
                height: 20px;
              }
              
              /* Hide default checkbox */
              .switch input {
                opacity: 0;
                width: 0;
                height: 0;
              }
              
              /* The slider (the inner circle) */
              .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
                border-radius: 20px;
              }
              
              /* The slider (the inner circle) - when checked */
              .slider.round {
                background-color: #707579;
              }
              
              /* Style the slider's appearance on checkbox checked */
              .slider.round:before {
                position: absolute;
                content: "";
                height: 14px;
                width: 14px;
                left: 3px;
                bottom: 3px;
                background-color: white;
                -webkit-transform: translateX(0);
                -ms-transform: translateX(0);
                transform: translateX(0);
                border-radius: 50%;
                -webkit-transition: .4s;
                transition: .4s;
              }
              
              /* Move the slider to the right when checked */
              input:checked + .slider {
                background-color: #2196F3;
              }
              
              /* Move the slider's inner circle to the right when checked */
              input:checked + .slider:before {
                -webkit-transform: translateX(20px);
                -ms-transform: translateX(20px);
                transform: translateX(20px);
              }
              
                  </style>
              @endpush
