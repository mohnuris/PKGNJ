<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4">Halaman Users</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables Users</li>
                <li class="breadcrumb-item"><a href=" <?= base_url('Users/tb_users') ?>">Tambah Users</a></li>

            </ol>
            <!-- Button trigger modal -->
            <div class="content">
                <a class="btn btn-outline-primary btn-sm mb-1" href="<?= base_url('Users/tb_users') ?>"><i class=" fa fa-plus-circle"></i> Tambah Users </a>
                <a class="btn btn-outline-success btn-sm " href="  "><i class="fa fa-upload"></i> Export Data </a>
            </div>
            <br>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th class="d-flex justify-content-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($us->num_rows() > 0) {
                                    // data ada
                                    $no = 1;
                                    foreach ($us->result_object() as $s) {
                                ?>
                                        <tr id="<?php echo $s->id_users; ?>">
                                            <th scope="row"><?= $no ?></th>
                                            <td><?= $s->nama_lengkap ?></td>
                                            <td><?= $s->username ?></td>
                                            <td><?= $s->email ?></td>
                                            <td><?= $s->level ?></td>

                                            <td>
                                                <ul class="d-flex justify-content-center">

                                                    <a type="button" class="btn btn-outline-success btn-sm mr-2" href="<?= base_url('Users/edusers/' . $s->id_users) ?>" class="text-success"><i class="fa fa-edit"></i></a>

                                                    <a type="button" class="btn btn-outline-danger btn-sm mr-2 tombol-hapus" href="<?= base_url('Users/hapususers/' . $s->id_users) ?>" class="text-danger"><i class="fa fa-trash"></i></a>



                                                </ul>
                                            </td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                } else {
                                    // tidak ada data
                                    ?>
                                    <tr>
                                        <td colspan="5" align="center">DATA KOSONG</td>
                                    </tr>
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