<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Tambah Soal</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/soal') ?>">Soal Pengujian</a></li>
        <li class="breadcrumb-item active">Tambah Soal</li>
      </ol>

      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

        <div class="modal-body align-center">
          <?php echo form_open('admin/simpansoal'); ?>

          <label for="soal" class="alert-link">SOAL</label>
          <?php echo form_input("soal", "", array('class' => 'form-control', 'id' => 'soal', 'placeholder' => ' Soal')); ?>
          <small class="text-danger">
            <?php echo form_error('soal', ' '); ?>
          </small>
          <br>
          <label for="soal" class="alert-link">A</label>
          <?php echo form_input("soal", "", array('class' => 'form-control', 'id' => 'soal', 'placeholder' => ' JAWABAN A')); ?>
          <small class="text-danger">
            <?php echo form_error('soal', ' '); ?>
          </small>
          <br>
          <label for="soal" class="alert-link">B</label>
          <?php echo form_input("soal", "", array('class' => 'form-control', 'id' => 'soal', 'placeholder' => ' JAWABAN B')); ?>
          <small class="text-danger">
            <?php echo form_error('soal', ' '); ?>
          </small>
          <br>
          <label for="soal" class="alert-link">C</label>
          <?php echo form_input("soal", "", array('class' => 'form-control', 'id' => 'soal', 'placeholder' => ' JAWABAN C')); ?>
          <small class="text-danger">
            <?php echo form_error('soal', ' '); ?>
          </small>
          <br>
          <label for="D" class="alert-link">D</label>
          <?php echo form_input("D", "", array('class' => 'form-control', 'id' => 'D', 'placeholder' => ' JAWABAN D')); ?>
          <small class="text-danger">
            <?php echo form_error('soal', ' '); ?>
          </small>
          <br>
          <label for="kj" class="alert-link">Kunci Jawaban</label>
          <?php echo form_input("kj", "", array('class' => 'form-control', 'id' => 'kj', 'placeholder' => ' KUNCIN JAWABAN')); ?>
          <small class="text-danger">
            <?php echo form_error('kj', ' '); ?>
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