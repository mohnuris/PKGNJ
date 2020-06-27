<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <title><?= $subtittle ?></title>
      <h3 class="mt-5"></h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
        <li class="breadcrumb-item">Mata Pelajaran</a></li>
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/f_mapel') ?>">Tambah Mata Pelajaran</a></li>
      </ol>
      <h2 class="mt-4">Data Mata Pelajaran</h2>
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

                    <th>Mata Pelajaran</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if ($mp->num_rows() > 0) {
                    // data ada
                    $no = 1;
                    foreach ($mp->result_object() as $mp) {
                  ?>
                      <tr id="<?php echo $mp->id_pelajaran; ?>">
                        <th scope="row"><?= $no ?></th>
                        <td><?= $mp->nama_pelajaran ?></td>

                        <td>
                          <ul class="d-flex justify-content-center">

                            <a type="button" class="btn btn-outline-success btn-sm mr-2" href="<?= base_url('Admin/edmapel/' . $mp->id_pelajaran) ?>" class="text-success"><i class="fa fa-edit"></i></a>

                            <a type="button" class="btn btn-outline-danger btn-sm mr-2 tombol-hapus" href="<?= base_url('Admin/hapusmapel/' . $mp->id_pelajaran) ?>" class="text-danger"><i class="fa fa-trash"></i></a>
                            <!--                             
                            <li class="mr-3"><a href="<?= base_url('Admin/edmapel/' . $mp->id_pelajaran) ?>" class="text-success"><i class="fa fa-edit"></i></a></li>

                            <li>
                              <a href="<?= base_url('Admin/hapusmapel/' . $mp->id_pelajaran) ?>" class="text-danger tombol-hapus"><i class="fa fa-trash"></i></a>
                              <!-- <button type="submit" class="text-danger tombol-hapus" id="hapusKelas"> Hapus</button> -->
                            <!-- </li>  -->

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