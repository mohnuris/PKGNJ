<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <title><?= $subtittle ?></title>
      <h3 class="mt-5"></h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
        <li class="breadcrumb-item">Jurusan</a></li>
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/f_jurusan') ?>">Tambah Jurusan</a></li>
      </ol>
      <h2 class="mt-4">Data Jurusan</h2>
      <!-- Button trigger modal -->
      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

        <!-- <div class="content"> -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>



        <!-- <a class="btn btn-primary" href=" <?= base_url('admin/f_Kelas') ?>"><i class="fa fa-plus-circle"></i> Tambah Kelas </a>
          <a class="btn btn-success float-right" href=""><i class="fa fa-upload"></i> Export Data </a>
        </div>
        <br> -->

        <!-- <div class="card mb-4">
                <div class="card-body">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>.</div>
            </div> -->
        <div class="card mb-4">
          <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div> -->
          <div class="card-body">
            <div class="table-responsive">
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr class="text-black">
                    <th>No</th>

                    <th>JURUSAN</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  if ($jr->num_rows() > 0) {
                    // data ada
                    $no = 1;
                    foreach ($jr->result_object() as $j) {
                  ?>
                      <tr id="<?php echo $j->id_jurusan; ?>">
                        <th scope="row"><?= $no ?></th>
                        <td><?= $j->nm_jurusan ?></td>

                        <td>
                          <ul class="d-flex justify-content-center">
                            <!-- <li class="mr-3"> -->



                            <a type="button" class="btn btn-outline-success btn-sm mr-2" href="<?= base_url('Admin/edjurusan/' . $j->id_jurusan) ?>" class="text-success"><i class="fa fa-edit"></i></a>

                            <a type="button" class="btn btn-outline-danger btn-sm mr-2 tombol-hapus" href="<?= base_url('Admin/hapusjurusan/' . $j->id_jurusan) ?>" class="text-danger"><i class="fa fa-trash"></i></a>


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