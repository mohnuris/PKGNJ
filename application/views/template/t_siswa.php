<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <title><?= $subtittle ?></title>
            <h3 class="mt-4"></h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item">Siswa</a></li>
                <li class="breadcrumb-item"><a href=" <?= base_url('admin/f_siswa') ?>">Formulir</a></li>


            </ol>
            <h3 class="mt-4">Data Siswa</h3>
            <!-- Button trigger modal -->

            <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

                <div class="content">

                    <!-- <a class="btn btn-primary" href=" <?= base_url('admin/f_siswa') ?>"><i class="fa fa-plus-circle"></i> Tambah Siswa </a> -->
                    <!-- <a class="btn btn-success float-right" href=""><i class="fa fa-upload"></i> Export Data </a> -->
                    <div class="dropdown float-right dropleft">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Exports Data <i class="fa fa-file-download"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Excel</a>
                            <a class="dropdown-item" href="#">PDF</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>

                <br>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-black">
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Sekolah</th>
                                        <th>Guru</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($si->num_rows() > 0) {
                                        // data ada
                                        $no = 1;
                                        foreach ($si->result_object() as $s) {
                                    ?>
                                            <tr>
                                                <th scope="row"><?= $no ?></th>
                                                <td><?= $s->nm_siswa ?></td>
                                                <td><?= $s->id_sekolah ?></td>
                                                <td><?= $s->id_guru ?></td>
                                                <td><?= $s->id_kelas ?></td>
                                                <td><?= $s->id_jurusan ?></td>
                                                <td><?= $s->jk_siswa ?></td>
                                                <td align="center">
                                                    <?php
                                                    if (!$s->ft_siswa) {
                                                        if ($s->jk_siswa == 'laki-laki') {
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

                                                        <img src="<?= base_url('assets/siswa/' . $r->ft_siswa) ?>" alt="" width="100px">
                                                    <?php
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-3"><a href="<?= base_url('admin/ed_siswa' . $s->id_siswa) ?>" class="text-success"><i class="fa fa-edit"></i></a></li>

                                                        <li><a href="<?= base_url('admin/hs_siswa' . $s->id_siswa) ?>" class="text-danger tombol-hapus"><i class="fa fa-trash-alt"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                    } else {
                                        // tidak ada data
                                        ?>
                                        <!-- <tr>
                                            <td colspan="7" align="center">DATA KOSONG</td>
                                        </tr> -->
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