<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4">Halaman Guru</h4>
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item">Guru</a></li>
                <li class="breadcrumb-item"><a href=" <?= base_url('admin/f_guru') ?>">Formulir</a></li>

            </ol>

            <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

                <div class="content">

                    <a class="btn btn-primary" href=" <?= base_url('admin/f_guru') ?>"><i class="fa fa-plus-circle"></i> Tambah Guru </a>
                    <a class="btn btn-success float-right" href=""><i class="fa fa-upload"></i> Export Data </a>
                </div>
                <br>
                <div class="card mb-4">
                    <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="bg-primary text-light">
                                        <th>No</th>
                                        <th>Name Lengkap</th>
                                        <th>Mapel</th>
                                        <th>kelas</th>
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
                                                <td><?= $g->nm_guru ?></td>
                                                <td><?= $g->mapel ?></td>
                                                <td><?= $g->kelas ?></td>

                                                <td><?= $g->jk_guru ?></td>
                                                <td align="center">
                                                    <?php
                                                    if (!$g->ft_guru) {
                                                        if ($g->jk_guru == 'laki-laki') {
                                                    ?>
                                                            <img src="<?= base_url('icon/p.png') ?>" alt="" width="40px">
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <img src="<?= base_url('icon/w.png') ?>" alt="" width="40px">
                                                        <?php
                                                        }

                                                        ?>
                                                    <?php
                                                    } else {
                                                    ?>

                                                        <img src="<?= base_url('assets/siswa/' . $g->ft_guru) ?>" alt="" width="100px">
                                                    <?php
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-3"><a href="<?= base_url('' . $g->id_guru) ?>" class="text-success"><i class="fa fa-edit"></i></a></li>

                                                        <li><a href="<?= base_url('' . $g->id_guru) ?>" class="text-danger tombol-hapus"><i class="fa fa-trash-alt"></i></a></li>
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