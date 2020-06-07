<nav class="navbar navbar-expand-lg navbar-light bg-white topbar mb-4 static-top shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      Contigo24
    </a>
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-5 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar" aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>

    <a href="#" class="nav-link navbar-toggler" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-search fa-fw"></i>
    </a>

    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
      <form class="form-inline mr-auto w-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar" aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>
    </div>

    <div class="collapse navbar-collapse" >
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#">
            <i class="fas fa-shopping-cart fa-fw"></i>
          </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">
            <span id="user_online">¡Hola visitante!</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
