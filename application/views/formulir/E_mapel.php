<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Edit Mapel</h3>
      <br>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/t_mapel') ?>">Mapel</a></li>
        <li class="breadcrumb-item active">Edit Mapel</li>
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
          <?php echo form_open('admin/ed_mapel'); ?>
          <?php echo form_hidden('id', $mp->id_pelajaran); ?>

          <label for="j" class="alert-link">Mata Pelajaran </label>
          <?php echo form_input("j", $mp->nama_pelajaran, array('class' => 'form-control', 'id' => 'j', 'placeholder' => ' Mata Pelajaran')); ?>

          <div class="modal-footer">
            <button type="submit" id="edit" onclick="Swal.fire('SUKSES','Teredit Tersimpan','success')" class="btn btn-primary">Simpan</button>
            <?php echo form_close(); ?>

            <script>
              const tombol = document.querySelector('#edit');
              tombol.addEventListener('click', function() {
                Swal({
                  title: 'SUKSES',
                  text: 'Edit Data Kelas',
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