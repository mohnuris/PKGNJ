<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5"></h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/t_siswa') ?>">Data Siswa</a></li>
        <li class="breadcrumb-item active">Tambah Data Siswa</li>
      </ol>

      <h3 class="mt-5">Tambah Data Siswa</h3>

      <!-- <div class="modal"> -->
      <!-- <div class="modal-body align-center"> -->
      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
        <?php echo form_open_multipart('admin/sm_siswa'); ?>


        <!-- <div class="modal-body"> -->
        <div class="card-body">

          <div class="form-group">
            <label for="nm" class="alert-link">Nama Siswa</label>
            <?php echo form_input("nm_siswa", set_value('nm_siswa'), array('class' => 'form-control', 'id' => 'nm', 'placeholder' => 'Nama Lengkap')); ?>
            <small class="text-danger">
              <?php echo form_error('nm', ' '); ?>
            </small>
          </div>

          <div class="from-group">
            <label for="sk" class="alert-link">Sekolah</label>
            <?php echo form_dropdown("sk", $combo1, set_value('sk'), array('class' => 'form-control', 'id' => 'sk')); ?>
            <small class="text-danger">
              <?php echo form_error('sk', ' '); ?>
            </small>
          </div>
          <br>
          <div class="from-group">
            <label for="kl" class="alert-link">kelas</label>
            <?php echo form_dropdown("kl", $combo, set_value('kl'), array('class' => 'form-control', 'id' => 'kl')); ?>
            <small class="text-danger">
              <?php echo form_error('kl', ' '); ?>
            </small>
          </div>


          <br>
          <div class="from-group">
            <label for="jr" class="alert-link">Jurusan</label>
            <?php echo form_dropdown("jr", $combo2, set_value('jr'), array('class' => 'form-control', 'id' => 'jr')); ?>
            <small class="text-danger">
              <?php echo form_error('jr', ' '); ?>
            </small>
          </div>
          <br>
          <label for="mp" class="alert-link">Mata Pelajaran </label>
          <?php echo form_dropdown("mp", $combo4, set_value('mp'), array('class' => 'form-control', 'id' => 'mp')); ?>
          <small class="text-danger">
            <?php echo form_error('mp', ' '); ?>
          </small>

          <br>
          <div class="from-group">
            <label for="gr" class="alert-link">Guru</label>
            <?php echo form_dropdown("gr", $combo3, set_value('gr'), array('class' => 'form-control', 'id' => 'gr')); ?>
            <small class="text-danger">
              <?php echo form_error('gr', ' '); ?>
            </small>
          </div>


          <div class="modal-body">
            <label for="jk" class="alert-link">Jenis Kelamin</label><br>
            <?php echo form_radio('jk_siswa', 'laki-laki', set_value('jk')) ?>Laki-Laki
            <?php echo form_radio('jk_siswa', 'perempuan', set_value('jk')) ?>Perempuan
            <br>
            <small class="text-danger">
              <?php echo form_error('jk', ' '); ?>
            </small>
          </div>

          <div class="modal-body">
            <label for="foto" class="alert-link">Foto Siswa</label><br>
            <?php echo form_upload('foto', '', array('class' => 'foto')); ?>
          </div>

          <!-- <form>
          <div class="form-group">
            <label for="exampleFormControlFile1" class="alert-link">Foto Siswa</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          
        </form> -->
          </br>
          <div class="modal-footer">
            <button type="submit" id="simpan" onclick="Swal.fire('SUKSES','Data Tersimpan','success')" class="btn btn-primary">SIMPAN</button>
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
</div>
</main>
</div>