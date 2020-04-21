<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Form Edit Kelas</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/t_kepalasekolah') ?>">Kepala Sekolah</a></li>
        <li class="breadcrumb-item active">Form Edit Data</li>
      </ol>


      <!-- <alert Errors"> -->
      <!-- <?php
            if (validation_errors()) {
            ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>
            Maaf Data Gagal Disimpan
            <?php echo validation_errors(); ?>
          </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span class="fa fa-times"></span></button>
        </div>
      <?php

            }
      ?> -->
      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
        <div class="modal-body align-center">
          <?php echo form_open('admin/ed_kepalasekolah'); ?>
          <?php echo form_hidden('id', $eks->id_kepala_sekolah); ?>

          <label for="nm" class="alert-link">Nama Lengkap</label>
          <?php echo form_input("nm", $eks->nm_kepala, array('class' => 'form-control', 'id' => 'nm', 'placeholder' => 'Nama Lengkap')); ?>
<br>
          <label for="ks" class="alert-link">Kepala Sekolah</label>
          <?php echo form_input("ks", $eks->kepala_sekolah, array('class' => 'form-control', 'id' => 'ks', 'placeholder' => 'Kelas dan Jurusan')); ?>

          <div class="modal-footer">
            <button type="submit" id="edit" onclick="Swal.fire('SUKSES','Data Tersimpan','success')" class="btn btn-primary">EDIT</button>
            <?php echo form_close(); ?>

            <script>
              const tombol = document.querySelector('#edit');
              tombol.addEventListener('click', function() {
                Swal({
                  title: 'SUKSES',
                  text: 'Edit Data Tahun',
                  type: 'success'
                })
              });
            </script>
          </div>

        </div>
      </div>
    </div>
</div>
</main>
</div>