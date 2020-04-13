<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Form Tambah Siswa</li>
            </ol>


            <div class="modal-content">
                <!-- <div class="modal"> -->
                <div class="modal-header bg-primary text-white">
                    <h3 class="modal-title" id="exampleModalLabel">Form Formulir</h3>
                </div>
                <?php echo form_open_multipart('Admin/simpan_siswa'); ?>
                <div class="modal-body">
                    <label for="nm_siswa" class="alert-link">Nama Lengkap</label>
                    <?php echo form_input("nm_siswa", set_value('nm_siswa'), array('class' => 'form-control', 'id' => 'ns', 'placeholder' => 'Nama Lengkap')); ?>

                    <small class="text-danger">
                        <?php echo form_error('nm_siswa', ''); ?>
                    </small>
                </div>




                <label form="jk_siswa" class="alert-link">Jenis Kelamin</label><br>
                <?php echo form_radio('jk_siswa', 'laki-laki', set_value('jk_siswa')) ?>Laki-Laki
                <?php echo form_radio('jk_siswa', 'perempuan', set_value('jk_siswa')) ?>Perempuan
                <br>
                <small class="text-danger">
                    <?php echo form_error('jk_siswa', ' '); ?>
                </small>


            </div>

            <div class="modal-body">
                <label for="" class="alert-link">Pilih Kelas</label>
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
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

                </select>
            </div>


            <div class="modal-body">
                <div class="from-grup">
                    <label for="gr" class="alert-link">Tahun Pelajaran</label>
                    <?php echo form_dropdown("gr", $combo, set_value('gr'), array('class' => 'form-control', 'id' => 'gr')); ?>
                    <small class="text-danger">
                        <?php echo form_error('gr', ' '); ?>
                    </small>
                </div>
                <br>

                <!-- <label for="" class="alert-link">Pilih Guru</label>
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

                </select> -->
            </div>


        </div>
</div>

</div>
</div>
</main>
</div>