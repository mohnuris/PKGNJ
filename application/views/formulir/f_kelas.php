<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Form Tambah Kelas</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/t_kelas') ?>">Kelas</a></li>
        <li class="breadcrumb-item active">Form Tambah Kelas</li>
      </ol>

      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
        <!-- <div class="modal-header bg-primary text-white">

          <h3 class="modal-title" id="exampleModalLabel"></h3>
        </div> -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

        <div class="modal-body align-center">
          <?php echo form_open('admin/sm_kelas'); ?>
          <!-- form input -->
          <div class="from-group">
            <label for="sekolah" class="alert-link">Sekolah</label>
            <?php echo form_dropdown("sekolah", $dinasmis1, set_value('sekolah'), array('class' => 'form-control', 'id' => 'sekolah')); ?>
            <small class="text-danger">
              <?php echo form_error('sekolah', ' '); ?>
            </small>
          </div>
          <br>
          <label for="kl" class="alert-link">Kelas</label>
          <?php echo form_input("kl", "", array('class' => 'form-control', 'id' => 'kl', 'placeholder' => 'Kelas')); ?>
          <small class="text-danger">
            <?php echo form_error('kl', ' '); ?>
            <br>
          </small>
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