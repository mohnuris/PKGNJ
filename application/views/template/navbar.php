<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <!-- menu -->
          <div class="sb-sidenav-menu-heading">Menu</div>
          <a class="nav-link" href="<?= base_url('admin') ?>">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard
          </a>
          <!-- interface -->

          <div class="sb-sidenav-menu-heading">Interface</div>
          <a class="nav-link" href="<?= base_url('admin/t_pengajar') ?>">
            <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
            Pengajar
          </a>

          <a class="nav-link" href="<?= base_url('admin/t_siswa') ?>">
            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
            Siswa
          </a>

          <a class="nav-link" href="<?= base_url('admin/t_pengguna') ?>">
            <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
            Pengguna
          </a>

          <a class="nav-link" href="<?= base_url('admin/t_prestasi') ?>">
            <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
            Prestasi
          </a>

          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Layouts
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>

          <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Static
                Navigation</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
            </nav>
          </div>

          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
            Pages
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>

          <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">Authentication
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>

              <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
              </div>

              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">Error
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>

              <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401
                    Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a>
                </nav>
              </div>

            </nav>
          </div>
          <div class="sb-sidenav-menu-heading">Addons</div>
          <a class="nav-link" href="<?= base_url('admin/charts') ?>">
            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
            Charts
          </a>
          <a class="nav-link" href="<?= base_url('admin/table') ?>">
            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
            Tables
          </a>
          <div class="sb-sidenav-menu-heading">Auth</div>
          <a class="nav-link" href="<?= base_url('admin/t_user') ?>">
            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
            Users
          </a>
          <a class="nav-link" href="<?= base_url('login') ?>">
            <div class="sb-nav-link-icon"><i class="far fa-id-badge"></i>
            </div>
            Login
          </a>
          <a class="nav-link" href="login.html">
            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </div>
      </div>
  </div>
  <!-- <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
      </div> -->
  </nav>
</div>