<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <title><?= $subtittle ?></title>
      <h3 class="mt-5"></h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
        <li class="breadcrumb-item">Data Sekolah</a></li>
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/f_sekolah') ?>">Tambah Sekolah</a></li>
      </ol>
      <h2 class="mt-4">Data Sekolah</h2>
      <br>
      <!-- Button trigger modal -->
      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

        <!-- <div class="content"> -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

        <div class="card mb-4">
          <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div> -->
          <div class="card-body">
            <div class="table-responsive">
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr class="text-black">
                    <th>No</th>

                    <th>Sekolah / Lembaga</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if ($sk->num_rows() > 0) {
                    // data ada
                    $no = 1;
                    foreach ($sk->result_object() as $s) {
                  ?>
                      <tr id="<?php echo $s->id_sekolah; ?>">
                        <th scope="row"><?= $no ?></th>
                        <td><?= $s->nm_sekolah ?></td>

                        <td>
                          <ul class="d-flex justify-content-center">
                            <li class="mr-3"><a href="<?= base_url('Admin/edsekolah/' . $s->id_sekolah) ?>" class="text-success"><i class="fa fa-edit"></i></a></li>

                            <li>
                              <a href="<?= base_url('Admin/hapussekolah/' . $s->id_sekolah) ?>" class="text-danger tombol-hapus"><i class="fa fa-trash"></i></a>
                              <!-- <button type="submit" class="text-danger tombol-hapus" id="hapusKelas"> Hapus</button> -->
                            </li>

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
                      <td colspan="4" align="center">DATA KOSONG</td>
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