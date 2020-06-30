<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <title><?= $subtittle ?></title>
            <h3 class="mt-4"></h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item">Siswa</a></li>
                <li class="breadcrumb-item"><a href=" <?= base_url('Siswa/f_siswa') ?>">Tambah Siswa</a></li>


            </ol>
            <h3 class="mt-4">Data Siswa</h3>
            <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
                <div class="content">
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
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Guru</th>
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
                                                <td><?= $s->sekolah ?></td>
                                                <td><?= $s->kelas ?></td>
                                                <td><?= $s->jurusan ?></td>
                                                <td><?= $s->mapel ?></td>
                                                <td><?= $s->id_guru ?></td>
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

                                                        <img src="<?= base_url('assets/siswa/' . $s->ft_siswa) ?>" alt="" width="100px">
                                                    <?php
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <!-- <li class="mr-3"> -->
                                                        <!-- <button type="button" class="btn btn-success"><a href="href=" <?= base_url('siswa/ed_siswa' . $s->id_siswa) ?>"" class="text-white"><i class="fa fa-edit"></i></a></button> -->

                                                        <a type="button" class="btn btn-outline-success btn-sm mr-2" href="<?= base_url('siswa/ed_siswa' . $s->id_siswa) ?>" class="text-success"><i class="fa fa-edit"></i></a>

                                                        <a type="button" class="btn btn-outline-danger btn-sm mr-2 tombol-hapus" href="<?= base_url('siswa/hs_siswa' . $s->id_siswa) ?>" class="text-danger"><i class="fa fa-trash"></i></a>

                                                        <!-- <a type="button" class="btn btn-outline-primary btn-sm mr-1" href="<?= base_url('siswa/ed_siswa' . $s->id_siswa) ?>" class="text-success"><i class="fa fa-edit"></i></a> -->
                                                        <!-- 
                                                        <a type="button" class="btn btn-outline-success btn-sm tombol-hapus" href="<?= base_url('siswa/hs_siswa' . $s->id_siswa) ?> " class="text-danger"><i class="fa fa-edit"></i></a> -->

                                                        <!-- <a href="<?= base_url('siswa/hs_siswa' . $s->id_siswa) ?>" class="text-danger tombol-hapus"><i class="fa fa-trash-alt"></i></a> -->
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