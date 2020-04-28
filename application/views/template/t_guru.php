<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4">Halaman Guru</h4>
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item">Guru</a></li>
                <li class="breadcrumb-item"><a href=" <?= base_url('admin/f_guru') ?>">Tambah Data Guru</a></li>

            </ol>

            <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

                <div class="content">
                    <div class="dropdown float-right dropleft">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Exports Data <i class="fa fa-file-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Excel</a>
                            <a class="dropdown-item" href="#">PDF</a>
                            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </div>
                    <!-- <a class="btn btn-primary" href=" <?= base_url('admin/f_guru') ?>"><i class="fa fa-plus-circle"></i> Tambah Guru </a> -->
                    <!-- <a class="btn btn-success float-right" href=""><i class="fa fa-upload"></i> Export Data </a> -->
                </div>
                <br>
                <div class="card mb-4">
                    <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-black">
                                        <th>No</th>
                                        <th>NIUP</th>
                                        <th>Name Lengkap</th>
                                        <th>Sekolah</th>
                                        <th>kelas </th>
                                        <th>Jurusan</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($gr->num_rows() > 0) {
                                        // data ada
                                        $no = 1;
                                        foreach ($gr->result_object() as $g) {
                                    ?>
                                            <tr>
                                                <th scope="row"><?= $no ?></th>
                                                <td><?= $g->niup ?></td>
                                                <td><?= $g->nm_guru ?></td>
                                                <td><?= $g->sekolah ?></td>
                                                <td><?= $g->kelas ?></td>
                                                <td><?= $g->jurusan ?></td>
                                                <td><?= $g->mapel ?></td>
                                                <td><?= $g->jk_guru ?></td>
                                                <td align="center">
                                                    <?php
                                                    if (!$g->ft_guru) {
                                                        if ($g->jk_guru == 'laki-laki') {
                                                    ?>
                                                            <img src="<?= base_url('icon/pria.png') ?>" alt="" width="40px">
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <img src="<?= base_url('icon/wanita.png') ?>" alt="" width="40px">
                                                        <?php
                                                        }

                                                        ?>
                                                    <?php
                                                    } else {
                                                    ?>

                                                        <img src="<?= base_url('assets/guru/' . $g->ft_guru) ?>" alt="" width="100px" height="100px">
                                                    <?php
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-3"><a href="<?= base_url('Admin/edguru/' . $g->id_guru) ?>" class="text-success"><i class="fa fa-edit"></i></a></li>

                                                        <li><a href="<?= base_url('Admin/hapusguru/' . $g->id_guru) ?>" class="text-danger tombol-hapus"><i class="fa fa-trash-alt"></i></a></li>
                                                    </ul>
                                                </td>
                                                <!-- <td>$86,500</td> -->
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                    } else {
                                        // tidak ada data
                                        ?>

                                        <!-- <td colspan="7" align="center">
                                        DATA KOSONG
                                    </td> -->

                                    <?php

                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </main>