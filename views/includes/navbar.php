<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li> -->
          <li class="nav-item">
          <span data-feather="home" class="align-text-bottom"></span>
            <a class="nav-link btn d-inline-flex rounded border-0" href="<?= $base_url; ?>">
              Dashboard
            </a>
          </li>
          
          <li class="nav-item">
            <span data-feather="grid" class="align-text-bottom"></span>
              <button class="nav-link btn btn-toggle d-inline-flex rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                Master
              </button>
              <div class="collapse" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li class="nav-link">
                    <a href="<?= $base_url; ?>menu" class="link-dark d-inline-flex text-decoration-none rounded">
                    <span data-feather="clipboard" class="align-text-bottom"></span>
                    Data Menu</a>
                  </li>
                  <li class="nav-link">
                    <a href="<?= $base_url; ?>pegawai" class="link-dark d-inline-flex text-decoration-none rounded">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Data Pegawai</a>
                  </li>
                </ul>
              </div>
          </li>
          
          <li class="nav-item">
            <span data-feather="shopping-bag" class="align-text-bottom"></span>
              <button class="nav-link btn btn-toggle d-inline-flex rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#transaksi-collapse" aria-expanded="false">
                Transaksi
              </button>
              <div class="collapse" id="transaksi-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li class="nav-link">
                    <a href="<?= $base_url; ?>transaksi" class="link-dark d-inline-flex text-decoration-none rounded">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Pesanan</a>
                  </li>
                  <li class="nav-link">
                    <a href="<?= $base_url; ?>cart" class="link-dark d-inline-flex text-decoration-none rounded">
                    <span data-feather="dollar-sign" class="align-text-bottom"></span>
                    Pembayaran</a>
                  </li>
                </ul>
              </div>
          </li>

        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Pengaturan</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Akun
            </a>
          </li>
          
        </ul>
      </div>
    </nav>