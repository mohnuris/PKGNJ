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
          <label for="sk" class="alert-link">Lembaga / Sekolah</label>
          <?php echo form_input("sk", "", array('class' => 'form-control', 'id' => 'sk', 'placeholder' => 'Sekolah / Lembaga')); ?>
          <small class="text-danger">
            <?php echo form_error('sk', ' '); ?>
          </small>
          <br>
          <label for="kl" class="alert-link">Kelas</label>
          <?php echo form_input("kl", "", array('class' => 'form-control', 'id' => 'kl', 'placeholder' => 'Kelas dan Jurusan')); ?>
          <small class="text-danger">
            <?php echo form_error('kl', ' '); ?>
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