<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-4"></h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/guru') ?>">Guru</a></li>
        <li class="breadcrumb-item active">Formulir Guru</li>
      </ol>

      <h3 class="mt-4">Formulir Guru</h3><br>
      <?php echo form_open('admin/sm_guru'); ?>
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>
      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">
        <div class=" modal-body">
          <label for="nama" class="alert-link">Nama Lengkap</label>
          <input class="form-control form-control-lg" type="text" placeholder="Nama Lengkap"></br>

          <label form="" class="alert-link">Jenis Kelamin</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
          </div>



        </div>
        <div class="modal-body">
          <label for="" class="alert-link">Pilih Kelas</label>
          <label class="mr-sm-2 sr-only" for="inlineFormCAustomSelect">Preference</label>
          <select class="custom-select" id="inlineFormCustomSelect">
            <option selected>Pilih</option>
            <option value="1">X </option>
            <option value="3">XI</option>
            <option value="3">XII</option>
          </select>
        </div>

        <div class="modal-body">
          <label for="" class="alert-link">Jurusan</label>
          <label class="mr-sm-2 sr-only form-control-lg" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select" id="inlineFormCustomSelect">
            <option selected>Pilih</option>
            <option value="1">MULTIMEDIA 1</option>
            <option value="1">MULTIMEDIA 2</option>
            <option value="2">Rekayasa Perangkat Lunak (RPL) 1</option>
            <option value="3">Teknik Komputer Jaringan (TKJ) 1</option>
            <option value="3"> Teknik Pembangkit Tenaga Listrik (TPTL)</option>
            <option value="3"> Agribisnis Pengolahan Hasil Perikanan (APHP)</option>
            <option value="3">Tata Busana(TB)</option>

          </select><br>
          <br>
          <form>
            <div class="form-group">
              <label for="exampleFormControlFile1" class="alert-link">Foto Guru</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
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
        </div> -->


            <div class="modal-footer">

              <button type="button" class="btn btn-primary">Save changes</button>
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