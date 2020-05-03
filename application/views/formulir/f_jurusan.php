<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Tambah jurusan</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/t_jurusan') ?>">jurusan</a></li>
        <li class="breadcrumb-item active">Tambah Jurusan</li>
      </ol>

      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

        <div class="modal-body align-center">
          <?php echo form_open('admin/sm_jurusan'); ?>

          <label for="j" class="alert-link">Jurusan</label>
          <?php echo form_input("j", "", array('class' => 'form-control', 'id' => 'j', 'placeholder' => ' Jurusan')); ?>
          <small class="text-danger">
            <?php echo form_error('j', ' '); ?>
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