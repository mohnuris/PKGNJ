<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Form Tambah Siswa</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('siswa/t_siswa') ?>">Data Siswa</a></li>
        <li class="breadcrumb-item active">Tambah Data Siswa</li>
      </ol>

      <h3 class="mt-5">Tambah Data Siswa</h3>

      <!-- <div class="modal"> -->
      <!-- <div class="modal-body align-center"> -->
      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
        <?php echo form_open_multipart('siswa/sm_siswa'); ?>


        <!-- <div class="modal-body"> -->
        <div class="card-body">

          <div class="form-group">
            <label for="nm_siswa" class="alert-link">Nama Siswa</label>
            <?php echo form_input("nm_siswa", set_value('nm_siswa'), array('class' => 'form-control', 'id' => 'nm_siswa', 'placeholder' => 'Nama Lengkap')); ?>
            <small class="text-danger">
              <?php echo form_error('nm', ' '); ?>
            </small>
          </div>

          <!-- end -->
          <div class="from-group">
            <label for="sekolah" class="alert-link">Sekolah</label>
            <?php echo form_dropdown("sekolah", $combo1, set_value('sekolah'), array('class' => 'form-control', 'id' => 'sekolah')); ?>
            <small class="text-danger">
              <?php echo form_error('sekolah', ' '); ?>
            </small>
          </div>
          <br>
          <div class="from-group">
            <label for="kelas" class="alert-link">kelas</label>
            <?php echo form_dropdown("kelas", $combo, set_value('kelas'), array('class' => 'form-control', 'id' => 'kelas')); ?>
            <small class="text-danger">
              <?php echo form_error('kelas', ' '); ?>
            </small>
          </div>

          <br>
          <div class="from-group">
            <label for="jurusan" class="alert-link">Jurusan</label>
            <?php echo form_dropdown("jurusan", $combo2, set_value('jurusan'), array('class' => 'form-control', 'id' => 'jurusan')); ?>
            <small class="text-danger">
              <?php echo form_error('jurusan', ' '); ?>
            </small>
          </div>
          <br>

          <!-- Mapel -->

          <div class="form-group">
            <label for="mapel" class="alert-link">Mata Pelajaran</label>
            <?php echo form_dropdown("mapel", $combo4, set_value('mapel'), array('class' => 'form-control', 'id' => 'mapel', 'placeholder' => 'Mata Pelajaran')); ?>
            <small class="text-danger">
              <?php echo form_error('mapel', ' '); ?>
            </small>
          </div>


          <div class="from-group">
            <label for="guru" class="alert-link">Guru</label>
            <?php echo form_dropdown("guru", $combo5, set_value('guru'), array('class' => 'form-control', 'id' => 'guru')); ?>
            <small class="text-danger">
              <?php echo form_error('guru', ' '); ?>
            </small>
          </div>


          <div class="modal-body">
            <label for="jk_siswa" class="alert-link">Jenis Kelamin</label><br>
            <?php echo form_radio('jk_siswa', 'laki-laki', set_value('jk_siswa')) ?>Laki-Laki
            <?php echo form_radio('jk_siswa', 'perempuan', set_value('jk_siswa')) ?>Perempuan
            <br>
            <small class="text-danger">
              <?php echo form_error('jk_siswa', ' '); ?>
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