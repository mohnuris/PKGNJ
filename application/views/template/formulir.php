<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Formulir</li>
            </ol>

            <!-- Button trigger modal -->
            <!-- <div class="content">
                <button class=" btn btn-primary" data-toggle="modal" data-target="#tambahData"><i class="fa fa-plus-circle"></i> Tambah Data </button>
                <a class="btn btn-success float-right" href="  "><i class="fa fa-upload"></i> Export Data </a>
            </div> -->
            <!-- <div class="content">
                <button class=" btn btn-success float-right" data-toggle="modal" data-target="#tambahData"><i class="fa fa-upload"></i> Export Data </button>
                <br>
                <br>
            </div> -->

            <div class="modal-content">
                <!-- <div class="modal"> -->
                <div class="modal-header bg-primary text-white">
                    <h3 class="modal-title" id="exampleModalLabel">Form Formulir</h3>
                </div>

                <div class="modal-body">
                    <label for="nama" class="alert-link">Nama Lengkap</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Nama Lengkap">
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
                    <label for="" class="alert-link">Pilih Mata Pelajaran</label>
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>Pilih</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="modal-body">
                    <label for="nama" class="alert-link">Nama Lengkap</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Nama Lengkap">
                </div>

                <div class="modal-body">
                    <label for="nama" class="alert-link">Nama Lengkap</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Nama Lengkap">
                </div>

                <div class="modal-body">
                    <label for="nama" class="alert-link">Nama Lengkap</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Nama Lengkap">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>

</div>
</div>
</main>
</div>