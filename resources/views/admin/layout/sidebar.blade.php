<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('images/page-loader/smea.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Webeskul</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('images/foto-user/'.Auth::user()->foto)}}" class="img-circle elevation-2" alt="{{Auth::user()->foto}}">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      
      <li class="nav-item ">
        <a href="/administrator" class="nav-link {{request()->is('administrator') ? 'active' : ''}} ">
          <i class="fa-solid fa-sitemap"></i>
          <p>
            Ekstrakurikuler
          </p>
        </a>
      </li>
      <li class="nav-item ">
        <a href="/anggota" class="nav-link {{request()->is('anggota') ? 'active' : ''}} ">
          <i class="fa-solid fa-users-rectangle"></i>
          <p>
            Anggota Ekstrakurikuler
          </p>
        </a>
      </li>
      <li class="nav-item ">
        <a href="/pendaftaran-eskul" class="nav-link {{request()->is('pendaftaran-eskul') ? 'active' : ''}} ">
          <i class="fa-regular fa-address-card"></i>
          <p>
            Pendaftaran
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/dokumentasi" class="nav-link {{request()->is('dokumentasi') ? 'active' : ''}}">
          <i class="fa-solid fa-image"></i>
          <p>
            Dokumentasi
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/berita" class="nav-link {{request()->is('berita') ? 'active' : ''}}">
          <i class="fa-regular fa-newspaper"></i>
          <p>
            Berita
          </p>
        </a>
      </li>
      @if(auth()->user()->role_id == 1)
        <li class="nav-item">
          <a href="/kepsek" class="nav-link {{request()->is('kepsek') ? 'active' : ''}}">
            <i class="fa-solid fa-crown"></i>
            <p>
              kepsek
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/wakasek" class="nav-link {{request()->is('wakasek') ? 'active' : ''}}">
            <i class="fa-solid fa-crown"></i>
            <p>
              wakasek
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="/users" class="nav-link {{request()->is('users') ? 'active' : ''}}">
            <i class="fa-solid fa-users"></i>
            <p>
              User Administrator
            </p>
          </a>
        </li>
        @endif
      

      
      {{-- @foreach ($data as $row) --}}

      {{-- @endforeach --}}
      
      
    </ul>

    
      
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
