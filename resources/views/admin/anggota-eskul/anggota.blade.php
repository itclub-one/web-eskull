
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
                    <div class="head">
                      <h3></h3>
                      <i class='bx bx-search' ></i>
                      <i class='bx bx-filter' ></i>
                      <div class="form-group col-4">
                        <form action="anggota" method="GET">
                          <input  type="search" class="form-control" name="search"  placeholder="Cari Nama Anggota">
                        </form>
                      </div>
                    </div>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>no</th>
                        <th>Nama Anggota</th>
                        <th>Kelas Anggota</th>
                        <th>Nomor Induk Siswa</th>
                        <th>Ekstrakurikuler</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>

                      <tbody>
                      @if (auth()->user()->role=='root')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota .' - '. $row->jurusan}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif



                    @if (auth()->user()->role=='adminmpk')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminmpk as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    
                    @if (auth()->user()->role=='adminosis')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminosis as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminirma')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminirma as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminpks')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminpks as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminpramukaputra')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminpramukaputra as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminpramukaputri')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminpramukaputri as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminpaskibra')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminpaskibra as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminvolly')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminvolly as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminfutsalputra')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminfutsalputra as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminfutsalputri')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminfutsalputri as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminsepakbola')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminsepakbola as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminbasket')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminbasket as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminhockey')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminhockey as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminbadminton')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminbadminton as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminkarate')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminkarate as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='admintaekwondo')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($admintaekwondo as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminsilat')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminsilat as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='admintarungderajat')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($admintarungderajat as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminkir')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminkir as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminkopsis')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminkopsis as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminpmr')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminpmr as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminsenitari')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminsenitari as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminmarchingband')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminmarchingband as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminsenikriya')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminsenikriya as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminpaduansuara')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminpaduansuara as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminkarawitan')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminkarawitan as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminteater')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminteater as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminsenimusik')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminsenimusik as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminitclub')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminitclub as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminbroadcast')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminbroadcast as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminenglishclub')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminenglishclub as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminkoreanclub')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminkoreanclub as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='adminjapanclub')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($adminjapanclub as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif
                    @if (auth()->user()->role=='admindeutschclub')
                        
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($admindeutschclub as $row)
                    
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota}}</td>
                        <td>{{$row->nis}}</td>
                        
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" width="120px" alt="{{$row->eskul->logo}}">
                          {{$row->eskul->nama_eskul}}
                        </td>
                        

                        
                        <td>
                          <a href="/editanggota/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_anggota}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach
                    @endif












                    </tbody>

                    
                    
                    
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
              <form action="/insertdataanggota" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input required type="text" class="form-control" name="nama_anggota" id="exampleInputEmail1" placeholder="Masukan Nama Anggota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Induk Siswa</label>
                    <input required type="number" class="form-control" name="nis" id="exampleInputEmail1" placeholder="Masukan Nomor Induk Siswa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas Anggota</label>
                    <select class="custom-select rounded-0" name="kelas_anggota" id="exampleSelectRounded0">
                      <option selected>Open this select menu</option>
                      <option value="X">X</option>
                      <option value="XI">XI</option>
                      <option value="XII">XII</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jurusan</label>
                    <select class="custom-select rounded-0" name="jurusan" id="exampleSelectRounded0">
                      <option selected>Open this select menu</option>
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
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Ekstrakurikuler</label>
                    <select class="custom-select rounded-0" name="id_eskul" id="exampleSelectRounded0">
                        @if (auth()->user()->role=='adminmpk')
                          <option value="1" selected>Majelis Permusyawaratan Kelas</option>
                        @endif
                        @if (auth()->user()->role=='adminosis')
                          <option value="2" selected>OSIS</option>
                        @endif
                        @if (auth()->user()->role=='adminirma')
                          <option value="3" selected>IRMA</option>
                        @endif
                        @if (auth()->user()->role=='adminpks')
                          <option value="4" selected>PKS</option>
                        @endif
                        @if (auth()->user()->role=='adminpramukaputra')
                          <option value="5" selected>Pramuka Putra</option>
                        @endif
                        @if (auth()->user()->role=='adminpramukaputri')
                          <option value="6" selected>Pramuka Putri</option>
                        @endif
                        @if (auth()->user()->role=='adminpaskibra')
                          <option value="7" selected>Paskibra</option>
                        @endif
                        @if (auth()->user()->role=='adminvolly')
                          <option value="8" selected>Volly</option>
                        @endif
                        @if (auth()->user()->role=='adminfutsalputra')
                          <option value="9" selected>Futsal Putra</option>
                        @endif
                        @if (auth()->user()->role=='adminfutsalputri')
                          <option value="10" selected>Futsal Putri</option>
                        @endif
                        @if (auth()->user()->role=='adminsepakbola')
                          <option value="11" selected>Sepakbola</option>
                        @endif
                        @if (auth()->user()->role=='adminbasket')
                          <option value="12" selected>Basket</option>
                        @endif
                        @if (auth()->user()->role=='adminHockey')
                          <option value="13" selected>Hockey</option>
                        @endif
                        @if (auth()->user()->role=='adminbadminton')
                          <option value="14" selected>Badminton</option>
                        @endif
                        @if (auth()->user()->role=='adminkarate')
                          <option value="15" selected>Karate</option>
                        @endif
                        @if (auth()->user()->role=='admintaekwondo')
                          <option value="16" selected>Taekwondo</option>
                        @endif
                        @if (auth()->user()->role=='adminsilat')
                          <option value="17" selected>Silat</option>
                        @endif
                        @if (auth()->user()->role=='admintarungderajat')
                          <option value="18" selected>Tarung Derajat</option>
                        @endif
                        @if (auth()->user()->role=='adminkir')
                          <option value="19" selected>Karya Ilmiyah Remaja</option>
                        @endif
                        @if (auth()->user()->role=='adminkopsis')
                          <option value="20" selected>Koperasi Siswa</option>
                        @endif
                        @if (auth()->user()->role=='adminpmr')
                          <option value="21" selected>Palang Merah Remaja</option>
                        @endif
                        @if (auth()->user()->role=='adminsenitari')
                          <option value="22" selected>Seni Tari</option>
                        @endif
                        @if (auth()->user()->role=='adminmarchingband')
                          <option value="23" selected>Marching Band</option>
                        @endif
                        @if (auth()->user()->role=='adminsenikriya')
                          <option value="24" selected>Seni Kriya</option>
                        @endif
                        @if (auth()->user()->role=='adminpaduansuara')
                          <option value="25" selected>Paduan Suara</option>
                        @endif
                        @if (auth()->user()->role=='adminkarawitan')
                          <option value="26" selected>Karawitan</option>
                        @endif
                        @if (auth()->user()->role=='adminteater')
                          <option value="27" selected>Teater</option>
                        @endif
                        @if (auth()->user()->role=='adminsenimusik')
                          <option value="28" selected>Seni Musik</option>
                        @endif
                        @if (auth()->user()->role=='adminitclub')
                          <option value="29" selected>IT-Club</option>
                        @endif
                        @if (auth()->user()->role=='adminbroadcast')
                          <option value="30" selected>Broadcast</option>
                        @endif
                        @if (auth()->user()->role=='adminenglishclub')
                          <option value="31" selected>English Club</option>
                        @endif
                        @if (auth()->user()->role=='adminkoreanclub')
                          <option value="32" selected>Korean Club</option>
                        @endif
                        @if (auth()->user()->role=='adminjapanclub')
                          <option value="33" selected>Japan Club</option>
                        @endif
                        @if (auth()->user()->role=='admindeutschclub')
                          <option value="34" selected>Deutsch Club</option>
                          @endif
                      @if (auth()->user()->role=='root')
                          
                        <option selected>Open this select menu</option>
                        @foreach ($data_eskul as $row)
                        <option value="{{$row->id}}">{{$row->nama_eskul}}</option>
                        @endforeach
                      @endif
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