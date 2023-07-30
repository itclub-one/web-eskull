<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      {{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
        <i class="far fa-bell"></i>
        @if ($dataByNotifCount > 0)
        <span class="badge badge-warning navbar-badge">
            {{$dataByNotifCount}}
          </span>
        @endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
        <span class="dropdown-item dropdown-header">
          <i class="fas fa-users mr-2"></i> 
          @if ($dataByNotifCount > 0)
          {{$dataByNotifCount}}
          @else
          0
        @endif Notifications
        </span>
        
        
        <div class="dropdown-divider"></div>
        @foreach ($dataByNotif as $row)
        <div class="dropdown-divider"></div>
        <a href="{{$row->url}}" class="dropdown-item">
          <p class=" text-sm">{{$row->message}}
            <p class="float-right text-muted text-sm">{{$row->created_at->diffForHumans()}}</p>
            </p>
          </a>
          <div class="dropdown-divider"></div>
        @endforeach
        
        <div class="dropdown-divider"></div>
        <a href="/pendaftaran-eskul" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
            <i class="fa-solid fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-user mr-2"></i> Profile
            </a>
            <a href="/edituser/editpassword/{{auth()->user()->id}}" class="dropdown-item">
              <i class="fas fa-lock mr-2"></i> Reset Password
            </a>
            <div class="dropdown-divider"></div>
            <a href="/logout" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
          </div>
        </li>
        
    </ul>
  </nav>
  <!-- /.navbar -->