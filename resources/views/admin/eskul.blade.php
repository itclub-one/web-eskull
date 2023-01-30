
@extends ('admin.layout.header')
  
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0">Data Esktrakurikuler</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Ekstrakurikuler</li>
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
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  @if ($message = Session::get('success'))
                  <div  style="width: 500px">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <i type="button" class="fa-solid fa-xmark mx-2" style="color: black; "  data-bs-dismiss="alert" aria-label="Close">
                      </i>
                      <strong>{{$message}}</strong>
                    </div>
                  </div>
                  @endif
                  {{-- <table id="example2" class=" table table-data table-bordered table-hover">
                    <thead>

                      <div class="form-group col-4">
                        <form action="administrator" method="GET">
                          <input  type="search" class="form-control" name="search"  placeholder="Cari Nama Ekstrakurikuler">
                        </form>
                      </div>

                      <tr>
                        <th>no</th>
                        <th>Ekstrakurikuler</th>
                        <th>Slug</th>
                        <th>id</th>
                        <th>Logo Eskul</th>
                        <th>Pembina</th>
                        <th>Ketua</th>
                        <th>Wakil Ketua</th>
                        <th>Jadwal Eskul</th>
                        
                        <th>Aksi</th>
                      </tr>
                      </thead>

                    @php
                      $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                    
                      <tbody>
                      <tr>
                        <td>{{$index + $data->firstitem()}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_eskul}}"  id="delete">Delete</a>

                        </td>


                      </tr>
                    @endforeach

                  </table>

                  <div class="linkss mt-3">
                    {{$data->links()}}
                  </div>
                  <table id="example2" class="mt-5 table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>no</th>
                        <th>Ekstrakurikuler</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Program Kerja</th>
                        <th>Instagram</th>
                        <th>Aksi</th>

                      </tr>
                    </thead>
                    @php
                      $number = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                    
                    <tbody>
                      <tr>
                        <td>{{$index + $data->firstitem()}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>

                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_eskul}}"  id="delete">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table> --}}

                  <div class="table-data">
                    <div class="order">
                      <div class="head">
                        <h3>Recent Orders</h3>
                        <i class='bx bx-search' ></i>
                        <i class='bx bx-filter' ></i>
                        @if (auth()->user()->role=='root')
                        <div class="form-group col-4">
                          <form action="administrator" method="GET">
                            <input  type="search" class="form-control" name="search"  placeholder="Cari Nama Ekstrakurikuler">
                          </form>
                        </div>
                        @endif
                      </div>
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                        <th>no</th>
                        <th>Ekstrakurikuler</th>
                        <th>Slug</th>
                        <th>id</th>
                        <th>Logo Eskul</th>
                        <th>Pembina</th>
                        <th>Ketua</th>
                        <th>Wakil Ketua</th>
                        <th>Jadwal Eskul</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Program Kerja</th>
                        <th>Instagram</th>
                        
                        <th>Aksi</th>
                          </tr>
                        </thead>
                        @if (auth()->user()->role=='adminmpk')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminmpk as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminosis')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminosis as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminirma')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminirma as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminpks')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminpks as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminpramukaputra')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminpramukaputra as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminpramukaputri')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminpramukaputri as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminpaskibra')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminpaskibra as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminvolly')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminvolly as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminfutsalputri')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminfutsalputri as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminfutsalputra')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminfutsalputra as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminsepakbola')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminsepakbola as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminbasket')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminbasket as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminhockey')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminhockey as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminbadminton')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminbadminton as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminkarate')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminkarate as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='admintaekwondo')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($admintaekwondo as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminsilat')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminsilat as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='admintarungderajat')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($admintarungderajat as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminkir')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminkir as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminkopsis')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminkopsis as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminpmr')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminpmr as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminsenitari')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminsenitari as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminmarchingband')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminmarchingband as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminsenikriya')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminsenikriya as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminpaduansuara')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminpaduansuara as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminkarawitan')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminkarawitan as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminteater')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminteater as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminsenimusik')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminsenimusik as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminitclub')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminitclub as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminbroadcast')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminbroadcast as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminenglishclub')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminenglishclub as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminkoreanclub')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminkoreanclub as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='adminjapanclub')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($adminjapanclub as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif
                        @if (auth()->user()->role=='admindeutschclub')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                              
                          @foreach ($admindeutschclub as $index => $row)
                          <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                            
                          </tbody>
                          @endif















                          

                        @if (auth()->user()->role=='root')
                        <tbody>
                          @php
                            $no = 1;
                          @endphp
                          
                          @foreach ($data as $index => $row)
                          <tr>
                        <td>{{$index + $data->firstitem()}}</td>
                        <td>{{$row->nama_eskul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->id}}</td>
                        <td>
                          <img src="{{asset('images/logo-eskul/'.$row->logo)}}" width="70px" alt="">
                        </td>
                        <td>{{$row->pembina}}</td>
                        <td>{{$row->ketua}}</td>
                        <td>{{$row->wakilketua}}</td>
                        <td>{{$row->jadwal_kumpulan}}</td>
                        <td>{{$row->visi}}</td>
                        <td>{{$row->misi_eskul}}</td>
                        <td>{{$row->program_kerja}}</td>
                        <td>{{$row->nama_instagram}}</td>
                        

                        
                        <td>
                          <a href="/editeskul/{{$row->id}}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-nama="{{$row->nama_eskul}}"  id="delete">Delete</a>

                        </td>
                          </tr>
                          <tr>
                            @endforeach
                        </tbody>
                        @endif
                      </table>
                      @if (auth()->user()->role=='root')
                      <div class="linkss mt-3">
                        {{$data->links()}}
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


      @if (auth()->user()->role=='root')
      
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
              <form action="/insertdataeskul" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ekstrakurikuler</label>
                    <input required type="text" class="form-control" name="nama_eskul" id="exampleInputEmail1" placeholder="Masukan Nama Ekstrakurikuler">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slug</label>
                    <input required type="text" class="form-control" name="slug" id="exampleInputEmail1" placeholder="Masukan Nama Ekstrakurikuler">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputFile">Logo Ekstrakurikuler</label>
                      <input required type="file" class="form-control" name="logo" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pembina</label>
                    <input required type="text" class="form-control" name="pembina" id="exampleInputPassword1" placeholder="Masukan Nama Pembina">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ketua</label>
                    <input required type="text" class="form-control" name="ketua" id="exampleInputPassword1" placeholder="Masukan Nama Ketua">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Wakil Ketua</label>
                    <input required type="text" class="form-control" name="wakilketua" id="exampleInputPassword1" placeholder="Masukan Jadwal Wakil Ketua">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jadwal Ekstrakurikuler</label>
                    <input required type="text" class="form-control" name="jadwal_kumpulan" id="exampleInputPassword1" placeholder="Masukan Nama Ekstrakurikuler, Contoh (Senin dan Jumat)">
                  </div>
                  <div class="form-floating">
                      <label for="floatingTextarea2">Visi</label>
                      <textarea class="form-control" name="visi"  placeholder="Masukkan Visi (Setiap garis baru tambahkan <br>)" id="floatingTextarea2" style="height: 100px"></textarea>
                  </div>
                  <div class="form-floating">
                      <label for="floatingTextarea2">Misi</label>
                      <textarea class="form-control" name="misi_eskul"  placeholder="Masukkan Misi (Setiap garis baru tambahkan <br>)" id="floatingTextarea2" style="height: 100px"></textarea>
                  </div>
                  <div class="form-floating">
                      <label for="floatingTextarea2">Program Kerja</label>
                      <textarea class="form-control" name="program_kerja"  placeholder="Masukkan Program Kerja Ekstrakurikuler (Setiap garis baru tambahkan <br>)" id="floatingTextarea2" style="height: 100px"></textarea>
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input required type="text" class="form-control" name="nama_instagram" id="exampleInputPassword1" placeholder="Masukan Nama Instagram Contoh (@eskul)">
                  </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
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