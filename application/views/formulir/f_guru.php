<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-4"></h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/guru') ?>">Guru</a></li>
        <li class="breadcrumb-item active">Tambah Guru</li>
      </ol>

      <h3 class="mt-4">Formulir Guru</h3><br>
      <?php echo form_open_multipart('Admin/sm_guru'); ?>
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>
      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

        <div class=" modal-body">
          <label for="niup" class="alert-link">NIUP</label>
          <?php echo form_input("niup", set_value('niup'), array('class' => 'form-control', 'id' => 'niup', 'placeholder' => 'Silahakan Inputkan NIUP Guru')); ?>
          <small class="text-danger">
            <?php echo form_error('niup', ' '); ?>
          </small>
          <br>

          <label for="nm_guru" class="alert-link">Nama Lengkap</label>
          <?php echo form_input("nm_guru", set_value('nm_guru'), array('class' => 'form-control', 'id' => 'nm_guru', 'placeholder' => 'Nama Lengkap')); ?>
          <small class="text-danger">
            <?php echo form_error('nm_guru', ' '); ?>
          </small>
          <br>

          <!-- Pilih Kelas -->
          <label for="sekolah" class="alert-link">Sekolah </label>
          <?php echo form_input("sekolah", set_value('sekolah'), array('class' => 'form-control', 'id' => 'sekolah', 'placeholder' => 'Sekolah')); ?>
          <small class="text-danger">
            <?php echo form_error('sekolah', ' '); ?>
          </small>
          <br>

          <label for="kelas" class="alert-link">Kelas </label>
          <?php echo form_input("kelas", set_value('kelas'), array('class' => 'form-control', 'id' => 'kelas', 'placeholder' => 'Silahkan isi jurusan')); ?>
          <small class="text-danger">
            <?php echo form_error('kelas', ' '); ?>
          </small>
          <br>

          <!-- Pilih Jurusan -->
          <label for="jurusan" class="alert-link">Jurusan </label>
          <?php echo form_input("jurusan", set_value('jurusan'), array('class' => 'form-control', 'id' => 'jurusan', 'placeholder' => 'Silahkan isi jurusan')); ?>
          <small class="text-danger">
            <?php echo form_error('jurusan', ' '); ?>
          </small>
          <br>

          <label for="mapel" class="alert-link">Mata Pelajaran </label>
          <?php echo form_input("mapel", set_value('mapel'), array('class' => 'form-control', 'id' => 'mapel', 'placeholder' => 'Mata Pelajaran')); ?>
          <small class="text-danger">
            <?php echo form_error('mapel', ' '); ?>
          </small>
          <br>

          <!-- Jenis Kelamin -->
          <label for="jk_guru" class="alert-link">Jenis Kelamin</label><br>
          <?php echo form_radio('jk_guru', 'laki-laki', set_value('jk_guru')) ?>Laki-Laki
          <?php echo form_radio('jk_guru', 'perempuan', set_value('jk_guru')) ?>Perempuan
          <br>
          <small class="text-danger">
            <?php echo form_error('jk_guru', ' '); ?>
          </small>
          </br>


          <div class="from-grup">
            <label for="foto" class="alert-link">Foto Guru</label><br>
            <?php echo form_upload('foto', '', array('class' => 'foto')); ?>
            <br>
            <small class="text-danger">
              <?php echo $error; ?>
            </small>
          </div>

          <!-- 
        <div class="modal-body">
          <label for="" class="alert-link">Pilih Guru</label>
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select" id="inlineFormCustomSelect">
            <option selected>------Pilih-----</option>
            <option value="1">Mujiburrohman</option>
            <option value="2">Maziyyatus Sholihah</option>
            <option value="3">Izzatul Munawwaroh</option>
            <option value="3">Eka Rizkiyah</option>
            <option value="3">Taslina Nashrin</option>
            <option value="3">Ebidi Rahman</option>
            <option value="3">Ahmad Mujtahid</option>
            <option value="3">Abdullah Al Anis</option>
            <option value="3">Moh Ainol Yakin</option>
            <option value="3">Aulia Akbar Maulana</option>
            <option value="3">Fathor Rasi</option>
            <option value="3">Nurul Laili Syofaria</option>
            <option value="3">Oktaviar Rudianto</option>
            <option value="3">Zainul Anwar</option>
            <option value="3">Yasin</option>
            <option value="3">Saleh Bin Abdurrahman</option>
            <option value="3">Nuria Mentari</option>
            <option value="3">Muhammad Zuhri</option>
            <option value="3">Muhammad Hafidh</option>
            <option value="3">Mahfud Syamsedhadi</option>
            <option value="3">Hernawarti Ningstyas</option>
            <option value="3">Haris Firdaus</option>
            <option value="3">Fifin Priandono</option>
            <option value="3">Amirulin Najah</option>
            <option value="3">Akhmad Iqbal Yuliansyah</option>
            <option value="3">Ahmad MUkarrom</option>
            <option value="3">Ahmad Agus Fanani</option>
            <option value="3">Adul Manaf Firdaus</option>
            <option value="3">Abdul Hadi</option>
            <option value="3">Hendra Dwi Saputra</option>
            <option value="3">Ainul Mustafid</option>
            <option value="3">Hairul Umam</option>

          </select>
        <!-- </div> -->

        </div>
        <div class="modal-footer">
          <button type="submit" id="simpan" onclick="Swal.fire('SUKSES','Data Tersimpan','success')" class="btn btn-primary">SIMPAN</button>
          <!-- <?php echo form_submit('save', 'SIMPAN', array('class' => 'btn btn-primary  mt-4 pr-4 pl-4')); ?> -->
          <?php echo form_close(); ?>
        </div>
      </div>

      </form>
    </div>
</div>
</div>
</div>
</div>
</main>
</div>