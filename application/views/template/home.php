<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=<?= base_url('admin') ?>>HOME</a></li>
                <li class="breadcrumb-item active">Dashboard</a></li>
            </ol>
            <div class="row">

                <div class="col-md-3">
                    <div class="card bg-success text-white mb-4 ">
                        <div class="col-xl-5 align-left">
                            <i style="margin-left: auto; margin-top: 15px" class="fa fa-user-tie fa-4x text-gray"></i>
                            <!-- <h3 class="float-right"> <?php echo $gr; ?></h3> -->
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-2">
                                <h3 class="float-right">Data Guru</h3>

                                <h3 class="slash align-center"><?php echo $gr; ?></h3>
                                <i style="margin-left:20%;"></i>
                            </div>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('guru/guru') ?>">View Details</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-primary text-white mb-4 ">
                        <div class="col-xl-5 align-left">
                            <i style="margin-left: auto; margin-top: 15px" class="fas fa-users fa-4x text-gray"></i>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-2">
                                <h3 class="float-right">Data Siswa</h3>
                                <h3 class="slash align-center"><?php echo $si; ?></h3>
                            </div>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('siswa/t_siswa') ?>">View Details</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-warning text-white mb-4 ">
                        <div class="col-xl-5 align-left">
                            <i style="margin-left: auto; margin-top: 15px" class="fas fa-chalkboard-teacher fa-4x text-gray"></i>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-2">
                                <h3 class="float-right">Kepala Sekolah</h3>
                                <h3 class="slash align-center"><?php echo $ks; ?></h3>
                            </div>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('admin/t_kepalasekolah') ?>">View Details</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-danger text-white mb-4 ">
                        <div class="col-xl-5 align-left">
                            <!-- <i style="margin-left: auto; margin-top: 15px" class="fas fa-user-graduate fa-4x text-gray"></i> -->
                            <i style="margin-left: auto; margin-top: 15px" class="fas fa-home fa-4x text-gray"></i>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-2">
                                <h3 class="float-right">Sekolah</h3>
                                <h3 class="slash align-center"><?php echo $sk; ?></h3>
                            </div>
                        </div>
                        <!--                         
                        <div class="card-body">
                            <i class="align-left"></i>
                            <h5>Sekolah </h5>
                        </div> -->

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('admin/t_prestasi') ?>">View Details</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-danger text-white mb-4 ">
                        <div class="col-xl-5 align-left">
                            <i style="margin-left: auto; margin-top: 15px" class="fas fa-database fa-4x text-gray"></i>
                        </div>
                        <div class="card-body">
                            <i class="align-left"></i>
                            <h5>Rekap </h5>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('admin/t_rekap') ?>">View Details</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-warning text-white mb-4 ">
                        <div class="col-xl-5 align-left">
                            <i style="margin-left: auto; margin-top: 15px" class="fas fa-poll  fa-4x text-gray"></i>
                        </div>

                        <div class="card-body">
                            <i class="align-left"></i>
                            <h5>Presensi Guru</h5>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('admin/t_siswa') ?>">View Details guru</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-info text-white mb-4 ">
                        <div class="col-xl-5 align-left">
                            <i style="margin-left: auto; margin-top: 15px" class="fas fa-book fa-4x text-gray"></i>
                        </div>
                        <div class="card-body">
                            <i class="align-left"></i>
                            <h5>KELAS JURUSAN </h5>

                            <!-- <h5><?= $jr ?></h5> -->
                            <!-- <div class="d-flex justify-content-between pb-2">
                            </div> -->

                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('admin/t_kelas') ?>">View Details</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white mb-4 ">
                        <div class="col-xl-5 align-left">
                            <i style="margin-left: auto; margin-top: 15px" class="fas fa-chart-area fa-4x text-gray"></i>
                        </div>
                        <div class="card-body">
                            <i class="align-left"></i>
                            <h5>Data Siswa </h5>
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?= base_url('admin/t_siswa') ?>">View Details</a>

                        </div>
                    </div>
                </div>


                <b>
                    <main>
                        <div class="container-fluid">
                        </div>

            </div>
    </main>