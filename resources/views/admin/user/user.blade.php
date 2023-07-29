@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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
                  <h3 class="card-title">DataTable Users</h3>
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
                      <div class="form-group col-8 col-lg-4">
                        <form action="users" method="GET">
                          <input  type="search" class="form-control" name="search"  placeholder="Cari Nama User">
                        </form>
                      </div>
                    </div>
                    <a href="register" class="btn btn-primary mb-2">Tambah Data</a>
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>no</th>
                        <th>Foto</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Ekstrakurikuler</th>
                        <th>Password</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>

                      @php
                      $no = $data->firstitem();
                  @endphp
                    @foreach ($data as $row)
                    
                      <tbody>
                      <tr>
                        <td>{{$no++}}</td>
                        <td>
                          <img src="{{asset('images/foto-user/'.$row->foto ?? 'N/A')}}" width="120px" alt="{{$row->foto ?? 'N/A'}}">
                        </td>
                        <td>{{$row->name ?? 'N/A'}}</td>
                        <td>{{ $row->roles->role ?? 'N/A'  }}</td>
                        <td>{{$row->email ?? 'N/A'}}</td>
                        <td>{{$row->eskul->nama_eskul ?? 'N/A'}}</td>
                        <td>{{$row->password ?? 'N/A'}}</td>
                        
                        
                        

                        
                         <td>
                          <a href="/edituser/{{$row->id}}" class="btn btn-warning">Edit</a>
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
                                window.location = "/deleteuser/" + dokumentasiid + ""
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