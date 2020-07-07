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

            <!-- soal -->

            <a class="nav-link" href="<?= base_url('admin/soal') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
              Soal

              <!-- formulir -->

              <a class="nav-link" href="<?= base_url('admin/formulir') ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                Formulir
              </a>
            </a>


            <a class="sb-sidenav-menu-heading"><span>Data Lembaga</span></a>

            <a class="nav-link" href="<?= base_url('admin/t_kepalasekolah') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
              Kepala Sekolah
            </a>
            <a class="nav-link" href="<?= base_url('admin/sekolah') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
              Sekolah
            </a>
            <a class="nav-link" href="<?= base_url('admin/jurusan') ?>">
              <div class="sb-nav-link-icon"><i class="fab fa-black-tie"></i></div>
              Jurusan
            </a>

            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
            <a class="nav-link" href="<?= base_url('guru/guru') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
              Guru
            </a>

            <a class="nav-link" href="<?= base_url('siswa/t_siswa') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
              Siswa
            </a>

            <a class="nav-link" href="<?= base_url('admin/t_kelas') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-archway"></i></div>
              Kelas
            </a>

            <a class="nav-link" href="<?= base_url('admin/t_mapel') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
              Mata Pelajaran
            </a>


            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
              </nav>
            </div>

            <div class="sb-sidenav-menu-heading">Data Ujian</div>
            <a class="nav-link" href="<?= base_url('admin/t_rekap') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa fa-database"></i></div>
              Rekap
            </a>

            <a class="nav-link" href="<?= base_url('admin/charts') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Charts
            </a>
            <a class="nav-link" href="<?= base_url('admin/table') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
              Tables
            </a>


            <div class="sb-sidenav-menu-heading">Adminstator</div>


            <a class="nav-link" href="<?= base_url('Users/users') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
              Users
            </a>

            <a class="nav-link" href="<?= base_url('auth/login') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-sign-in-alt"></i></div>
              Login
            </a>

            <a class="nav-link" href="<?= base_url('logout') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i> Logout
            </a>


            <!-- <a class="nav-link" href="<?= base_url('login') ?>">
              <div class="sb-nav-link-icon"><i class="far fa-id-badge"></i>
              </div>
              Login
            </a> -->

        </div>
      </div>
  </div>
  </nav>
</div>