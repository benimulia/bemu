  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item {{Request::is('dashboard')?'active':''}}">
        <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{Request::is('adminnews')?'active':''}}">
        <a class="nav-link" href="/adminnews">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>News</span>
        </a>
      </li>
      <li class="nav-item {{Request::is('adminorganisasi')?'active':''}}">
        <a class="nav-link" href="/adminorganisasi">
          <i class="fas fa-fw fa-clock"></i>
          <span>Organization</span></a>
      </li>
      <li class="nav-item {{Request::is('adminevents')?'active':''}}">
        <a class="nav-link" href="/adminevents">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Events</span></a>
      </li>
      <li class="nav-item {{Request::is('adminannouncements')?'active':''}}">
        <a class="nav-link" href="/adminannouncements">
          <i class="fas fa-fw fa-images"></i>
          <span>Announcement</span></a>
      </li>
      <li class="nav-item {{Request::is('adminprofile')?'active':''}}">
        <a class="nav-link" href="/profil">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span></a>
      </li>
      <li class="nav-item ">
      <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">@yield('breadcrumb')</li>
        </ol>

        <!-- Page Content -->
        <h1>@yield('judul')</h1>
        <hr>
        
        <div class="card-body">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
          
        </div>
        @yield('content')

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Admin BEMU 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>