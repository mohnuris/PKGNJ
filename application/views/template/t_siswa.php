<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <title><?= $subtittle ?></title>
            <h3 class="mt-4">Halaman Siswa</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item">Siswa</a></li>
                <li class="breadcrumb-item"><a href=" <?= base_url('admin/f_siswa') ?>">Formulir</a></li>


            </ol>
            <!-- Button trigger modal -->
            <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

                <div class="content">

                    <a class="btn btn-primary" href=" <?= base_url('admin/f_siswa') ?>"><i class="fa fa-plus-circle"></i> Tambah Siswa </a>
                    <a class="btn btn-success float-right" href=""><i class="fa fa-upload"></i> Export Data </a>
                </div>
                <br>

                <!-- <div class="card mb-4">
                <div class="card-body">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>.</div>
            </div> -->
                <div class="card mb-4">
                    <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="bg-primary text-light">
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Mata Pelajaran</th>
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
                                                <td><?= $s->kelas ?></td>
                                                <td><?= $s->jurusan ?></td>
                                                <td><?= $s->mapel ?></td>
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
                                                        <li class="mr-3"><a href="<?= base_url('' . $s->id_siswa) ?>" class="text-success"><i class="fa fa-edit"></i></a></li>

                                                        <li><a href="<?= base_url('' . $s->id_siswa) ?>" class="text-danger tombol-hapus"><i class="fa fa-trash-alt"></i></a></li>
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

                                <!-- <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Jurusan</th>
                                </tr>
                            </tfoot> -->

                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </main>