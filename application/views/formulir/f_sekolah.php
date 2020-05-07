<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <br>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/sekolah') ?>">Sekolah</a></li>
        <li class="breadcrumb-item active">Tambah Sekolah</li>
      </ol>
      <h3 class="mt-5">Tambah Sekolah</h3>
      <br>
      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

        <div class="modal-body align-center">
          <?php echo form_open('admin/sm_sekolah'); ?>

          <label for="s" class="alert-link">Sekolah / Lembaga</label>
          <?php echo form_input("s", "", array('class' => 'form-control', 'id' => 's', 'placeholder' => ' sekolah')); ?>
          <small class="text-danger">
            <?php echo form_error('s', ' '); ?>
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