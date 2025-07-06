<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{ asset('adminlte3/dist/img/user2-160x160.jpg') }}" class="user-image img-circle" alt="User Image">
          <span class="d-none d-md-inline">Mr Jaya</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <li class="user-header">
            <img src="{{ asset('adminlte3/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            <p>
              Mr Jaya
              <div>
                <span class="badge badge-success">Admin</span>
              </div>
            </p>
          </li>
          <li class="user-footer">
            <a href="#" class="btn btn-sm btn-danger float-right">
                <i class="fas fa-sign-out-alt"></i>
                logout
            </a>
          </li>
        </ul>
    </ul>
  </nav>