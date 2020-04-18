<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Form Siswa</h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/t_siswa') ?>">Siswa</a></li>
        <li class="breadcrumb-item active">Form Siswa</li>
      </ol>


      <!-- <div class="modal"> -->
      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
        <!-- <div class="modal-header bg-primary text-white">

          <h3 class="modal-title" id="exampleModalLabel"></h3>
        </div> -->

        <div class="modal-body">
          <?php echo form_open('admin/sm_siswa'); ?>
          <div class="form-group">
            <label for="s" class="alert-link">Nama Siswa</label>

            <?php echo form_input("nm_siswa", set_value('nm_siswa'), array('class' => 'form-control', 'id' => 's', 'placeholder' => 'Nama Lengkap')); ?>
            <small class="text-danger">
              <?php echo form_error('nm_siswa', ' '); ?>
            </small>

            <br>
            <label form="jk" class="alert-link">Jenis Kelamin</label><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Laki-Laki
                </br>

                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" <label class="form-check-label" for="exampleRadios2">
                Perempuan
              </label>
            </div>
          </div>
        </div>

        <!-- <div class="modal-body">
          <label for="" class="alert-link">Pilih Kelas</label>
          <label class="mr-sm-2 sr-only" for="inlineFormCAustomSelect">Preference</label>
          <select class="custom-select" id="inlineFormCustomSelect">
            <option selected>Pilih</option>
            <option value="1">X </option>
            <option value="3">XI</option>
            <option value="3">XII</option>
          </select>
        </div> -->

        <div class="modal-body">
          <label for="" class="alert-link">Kelas dan Jurusan</label>
          <label class="mr-sm-2 sr-only form-control-lg" for="inlineFormCustomSelect"></label>
          <select class="custom-select" id="inlineFormCustomSelect">
            <option selected>------Pilih-----</option>
            <option value="1">MULTIMEDIA 1</option>
            <option value="1">MULTIMEDIA 2</option>
            <option value="2">Rekayasa Perangkat Lunak (RPL) 1</option>
            <option value="3">Teknik Komputer Jaringan (TKJ) 1</option>
            <option value="3"> Teknik Pembangkit Tenaga Listrik (TPTL)</option>
            <option value="3"> Agribisnis Pengolahan Hasil Perikanan (APHP)</option>
            <option value="3">Tata Busana (TB)</option>

          </select>
        </div>


        <div class="modal-body">
          <label for="" class="alert-link">Pilih Guru</label>
          <label class="mr-sm-2 sr-only form-control" for="inlineFormCustomSelect1"></label>
          <select class="custom-select" id="inlineFormCustomSelect1">
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

          </select><br>
          <br>
          <form>
            <div class="form-group">
              <label for="exampleFormControlFile1" class="alert-link">Foto Siswa</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </form>

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
</main>
</div>