<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Form Tambah Kelas</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/kelas') ?>">Kelas</a></li>
        <li class="breadcrumb-item active">Form Tambah Kelas</li>
      </ol>


      <!-- <alert Errors"> -->
      <?php
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
      ?>
      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
        <!-- <div class="modal-header bg-primary text-white">

          <h3 class="modal-title" id="exampleModalLabel"></h3>
        </div> -->

        <div class="modal-body align-center">
          <?php echo form_open('admin/sm_kelas'); ?>


          <!-- <label for="" class="alert-link">Pilih Kelas</label>
            <label class="mr-sm-2 sr-only" for="inlineFormCAustomSelect">Preference</label>
            <select class="custom-select" id="inlineFormCustomSelect">
              <option selected>----Pilih-----</option>
              <option value="1">X </option>
              <option value="3">XI</option>
              <option value="3">XII</option>
            </select></br>
            <br> -->
          <label for="kl" class="alert-link">Kelas</label>
          <?php echo form_input("kl", "", array('class' => 'form-control', 'id' => 'kl', 'placeholder' => 'Kelas dan Jurusan')); ?>



          <div class="modal-footer">
            <?php echo form_submit('save', 'SIMPAN', array('class' => 'btn btn-primary  mt-4 pr-4 pl-4')); ?>
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