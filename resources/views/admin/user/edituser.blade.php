@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>



    



      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 mb-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/updateuser/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <a href="editpassword/{{$data->id}}" class="btn btn-primary mb-3">Edit Password</a>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" value="{{$data->name ?? 'N/A'}}" name="name" id="exampleInputEmail1" placeholder="Masukan Nama Ekstrakurikuler">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" value="{{$data->email ?? 'N/A'}}" name="email" id="exampleInputPassword1" placeholder="Masukan Nama Penyelenggara">
                  </div>
                  {{-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" value="{{$data->password}}" name="password" id="exampleInputPassword1" placeholder="Masukan Nama Penyelenggara">
                  </div> --}}
                  <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" name="role_id" id="role">
                      <option value="{{$data->role_id ?? ''}}">{{$data->roles->role ?? 'N/A'}}</option>
                      @foreach ($role as $row)
                      <option value="{{$row->id ?? ''}}">{{$row->role ?? 'N/A'}}</option>
                      @endforeach
                    </select>
                </div>
                  <div class="form-group">
                    <label for="data_eskul">Ekstrakurikuler</label>
                    <select class="form-control" name="id_eskul" id="data_eskul">
                      <option value="{{$data->id_eskul ?? ''}}">{{$data->eskul->nama_eskul ?? 'N?A'}}</option>
                      @if (auth()->user()->role_id == 1)
                      <option value="0">root</option>
                      @endif
                      @foreach ($data_eskul as $row)
                      <option value="{{$row->id}}">{{$row->nama_eskul ?? 'N/A'}}</option>
                      @endforeach
                    </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto User</label>
                    <img src="{{asset('images/foto-user/'.$data->foto ?? 'N/A')}}" alt="{{$data->foto ?? 'N/A'}}" width="150px" class="d-block mb-2">
                      <input type="file" class="form-control"  value="{{$data->foto ?? 'N/A'}}" name="foto" >
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            