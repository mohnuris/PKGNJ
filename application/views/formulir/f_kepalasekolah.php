<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Form Tambah Kepala Sekolah</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/t_kepalasekolah') ?>">Kelas</a></li>
        <li class="breadcrumb-item active">Form Kepala Sekolah</li>
      </ol>

      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
        <!-- <div class="modal-header bg-primary text-white">

          <h3 class="modal-title" id="exampleModalLabel"></h3>
        </div> -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

        <div class="modal-body align-center">
          <?php echo form_open('admin/sm_kepalasekolah'); ?>
          <!-- form input -->

          <label for="nl" class="alert-link">Nama Lengkap</label>
          <?php echo form_input("nl", "", array('class' => 'form-control', 'id' => 'nl', 'placeholder' => 'Nama Lengkap')); ?>
          <small class="text-danger">
            <?php echo form_error('nl', ' '); ?>
          </small>
          <br>
          <label for="ks" class="alert-link">Nama Sekolah</label>
          <?php echo form_input("ks", "", array('class' => 'form-control', 'id' => 'kl', 'placeholder' => 'Sekolah Asal')); ?>
          <small class="text-danger">
            <?php echo form_error('ks', ' '); ?>
          </small>


          <div class="modal-footer">
            <button type="submit" id="simpan" onclick="Swal.fire('SUKSES','Data Tersimpan','success')" class="btn btn-primary">SIMPAN</button>
            <!-- <?php echo form_submit('save', 'SIMPAN', array('class' => 'btn btn-primary  mt-4 pr-4 pl-4')); ?> -->
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