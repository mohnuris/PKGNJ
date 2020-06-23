<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Tambah Mata Pelajaran</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/t_mapel') ?>">Mata Pelajaran</a></li>
        <li class="breadcrumb-item active">Tambah Mapel</li>
      </ol>

      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

        <div class="modal-body align-center">
          <?php echo form_open('admin/sm_mapel'); ?>

          <label for="mp" class="alert-link">Mata Pelajaran</label>
          <?php echo form_input("mp", "", array('class' => 'form-control', 'id' => 'mp', 'placeholder' => ' Mata Pelajaran')); ?>
          <small class="text-danger">
            <?php echo form_error('mp', ' '); ?>
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