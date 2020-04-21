<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <title><?= $subtittle ?></title>
      <h3 class="mt-5"></h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
        <li class="breadcrumb-item">Kepala Sekolah</a></li>
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/f_kepalasekolah') ?>">Tambah Data Kepala Sekolah</a></li>
      </ol>
      <h3 class="mt-4">Data Kepala Sekolah</h3>
      <!-- Button trigger modal -->
      <!-- <div class="card mb-5 "> -->

      <!-- <div class="content"> -->
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>



      <!-- <a class="btn btn-primary" href=" <?= base_url('admin/f_Kelas') ?>"><i class="fa fa-plus-circle"></i> Tambah Kelas </a>
          <a class="btn btn-success float-right" href=""><i class="fa fa-upload"></i> Export Data </a>
        </div>
        <br> -->

      <!-- <div class="card mb-4">
                <div class="card-body">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>.</div>
            </div> -->
      <div class="card mb-4 shadow p-3 mb-5 bg-white rounded">
        <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div> -->
        <div class="card-body">
          <div class="table-responsive">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr class="text-black">
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Lembaga</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                <?php
                if ($ks->num_rows() > 0) {
                  // data ada
                  $no = 1;
                  foreach ($ks->result_object() as $k) {
                ?>
                    <tr>
                      <th scope="row"><?= $no ?></th>
                      <td><?= $k->nm_kepala ?></td>
                      <td><?= $k->kepala_sekolah ?></td>

                      <td>
                        <ul class="d-flex justify-content-center">
                          <li class="mr-3"><a href="<?= base_url('Admin/edkepalasekolah/' . $k->id_kepala_sekolah); ?>" class="text-success"><i class="fa fa-edit"></i></a></li>

                          <li><a href="<?= base_url('Admin/hapuskepalasekolah/' . $k->id_kepala_sekolah); ?>" class="text-danger tombol-hapus"><i class="fa fa-trash"></i></a></li>

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
                    <td colspan="3" align="center">DATA KOSONG</td>
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