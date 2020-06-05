<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5"></h3>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('admin/users') ?>">Data Siswa</a></li>
        <li class="breadcrumb-item active">Tambah Data Siswa</li>
      </ol>

      <h3 class="mt-5">Tambah Data Siswa</h3>

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