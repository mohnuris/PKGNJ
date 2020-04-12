<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables Users</li>
                <li class="breadcrumb-item"><a href=" <?= base_url('admin/profil') ?>">Dashboard</a></li>
                <!-- <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li> -->
            </ol>

            <!-- Button trigger modal -->
            <div class="content">
                <button class=" btn btn-primary" data-toggle="modal" data-target="#tambahData"><i class="fa fa-plus-circle"></i> Tambah Data </button>
                <a class="btn btn-success float-right" href="  "><i class="fa fa-upload"></i> Export Data </a>
            </div>

            </br>

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Tambah User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <label for="nama" class="alert-link">Nama Lengkap</label>
                            <input class="form-control form-control-lg" type="text" placeholder="Nama Lengkap">
                        </div>

                        <div class="modal-body">
                            <label for="" class="alert-link">Kelas Lembaga</label>
                            <label class="mr-sm-2 sr-only form-control-lg" for="inlineFormCustomSelect">Preference</label>
                            <select class="custom-select" id="inlineFormCustomSelect">
                                <option selected>Pilih</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="modal-body">
                            <label for="" class="alert-link">Pilih Jabatan</label>
                            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                            <select class="custom-select" id="inlineFormCustomSelect">
                                <option selected>Pilih</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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


            <div class="card mb-4">
                <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="bg-primary text-light">
                                    <th>Name</th>
                                    <th>Lembaga</th>
                                    <th>Jabatan</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <th>Name</th>
                                <th>Lembaga</th>
                                <th>Jabatan</th>
                                <th>Mata Pelajaran</th>
                                <th>Foto</th>
                                <th>
                                    <ul class="d-flex justify-content-center">
                                        <li class="mr-3"><a href="<?= base_url('') ?>" class="text-success"><i class="fa fa-edit"></i></a></li>

                                        <li><a href="<?= base_url() ?>" class="text-danger" onclick="return confirm('yakin menghapus data?')"><i class="fa fa-trash-alt"></i></a></li>
                                    </ul>
                                </th>

                            </tbody>

                            <!-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Lembaga</th>
                                    <th>Jabatan</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Foto</th>
                                    <th>action</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>