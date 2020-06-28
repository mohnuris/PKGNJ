<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables Users</li>
                <li class="breadcrumb-item"><a href=" <?= base_url('admin/users') ?>">Users</a></li>
                <!-- <li class="breadcrumb-item"><a href=" <?= base_url('admin') ?>">Dashboard</a></li> -->
            </ol>

            <!-- Button trigger modal -->
            <div class="content">

                <!-- <button class=" btn btn-primary" data-toggle="modal" data-target="#tambahData"><i class="fa fa-plus-circle"></i> Tambah Data </button> -->
                <a class="btn btn-primary" href=" "><i class=" fa fa-plus-circle"></i> Tambah Data </a>
                <a class="btn btn-success float-right" href="  "><i class="fa fa-upload"></i> Export Data </a>
            </div>

            </br>

            <!-- Modal -->



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