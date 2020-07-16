<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <div class="section-body center-block">
        <!-- <h2 class="section-title">Hi, Ujang!</h2>
        <p class="section-lead">
          Change information about yourself on this page.
        </p> -->

        <div class="row mt-sm-4">
          <i style="margin-left:45%;">

            <img src="<?= base_url('icon/pria.png') ?>" width="100px" alt="image" width="" class="rounded-circle profile-widget-picture" class="shadow p-7 mb-5 bg-white rounded">
            <!-- <div class="profile-widget-name"><?php echo $this->session->userdata('nama_lengkap') ?><div class="text-muted d-inline font-weight-normal">
                <div class="slash align-center">Siswa</div> -->
        </div>
      </div>
      </i>
    </div>
    <br>

    <div class="row justify-content-md-center">
      <!-- <div class="card mb-5 shadow p-3 mb-5 bg-white rounded"> -->
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>
      <div class="col-6 col-md-6 ">
        <div class="card align-right">
          <?php echo form_open('profil/simpan_profil'); ?>
          <?php echo form_open('id', 'id_users'); ?>
          <div class="card-header">
            <h4>Edit Profil</h4>
            <div class="text-right">

              <!-- <li class="mr-3"> -->
              <button type="button" class="btn btn-primary"><a class="text-white"><i class="fa fa-save"></i></a></button>


            </div>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="form-group col-md-6 col-6">
                <?php echo form_open('Users/editusers'); ?>
                <!-- <?php echo form_hidden("id", $ed->id_users); ?> -->
                <label>Nama Lengkap </label>
                <input type="text" class="form-control" value="" required="">
                <div class="invalid-feedback">

                </div>
              </div>
              <div class="form-group col-md-6 col-6">
                <label>Usernama</label>
                <input type="text" class="form-control" value="" required="">
                <div class="invalid-feedback">

                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 col-6">
                <label>Password</label>
                <input type="email" class="form-control" value="" required="">
                <div class="invalid-feedback">

                </div>
              </div>
              <div class="form-group col-md-6 col-6">
                <label>Confirmasi Password *)</label>
                <input type="tel" class="form-control" value="">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 col-6">
                <label>Email</label>
                <input type="text" class="form-control" value="" required="">
                <div class="invalid-feedback">
                </div>
              </div>

              <div class="form-group col-md-6 col-6">
                <label>Level</label>
                <input type="text" class="form-control" value="" required="">
                <div class="invalid-feedback">
                </div>
              </div>

              <!-- <label for="level" class="">Level</label>
              <br>
              <?php

              if ($es->level == "admin") {
                $a = true; //admin
                $u = false; //users
                $g = false; //guru
              } else {
                $a = false;
                $u = true;
                $g = false;
              }
              if ($es->level == "guru") {
                $g = true;
                $a = false;
                $u = false;
              } else {
                $g = false;
                $a = false;
                $u = true;
              }
              if ($es->level == "users") {
                $u = true;
                $g = false;
                $a = false;
              } else {
                $g = true;
                $a = false;
                $u = false;
              }

              echo form_radio('level', 'admin', $a) ?>Admin
              <?php echo form_radio('level', 'guru', $g) ?>Guru
              <?php echo form_radio('level', 'user', $u) ?>Users
              <br>
              <small class="text-danger">
                <?php echo form_error('level', ' '); ?>
              </small>
              </br> -->
              <!-- save -->
              <div class="form-group  text-danger">
                <label for="conpassword">*) Kosongi jika tidak mau di ubah</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
    <!-- <div class="col-6 col-md-6 ">
          <div class="card">
            <form method="post" class="needs-validation" novalidate="">
              <div class="card-header">
                <h4>Edit Profil</h4>
              </div>
              <button type="button" class="btn btn-primary"><a href="" class="text-white"><i class="fa fa-save"></i></a></button>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6 col-6">
                    <label>Nama Lengkap </label>
                    <input type="text" class="form-control" value="" required="">
                    <div class="invalid-feedback">

                    </div>
                  </div>
                  <div class="form-group col-md-6 col-6">
                    <label>Kelas</label>
                    <input type="text" class="form-control" value="" required="">
                    <div class="invalid-feedback">

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6 col-6">
                    <label>Jurusan</label>
                    <input type="email" class="form-control" value="" required="">
                    <div class="invalid-feedback">

                    </div>
                  </div>
                  <div class="form-group col-md-6 col-6">
                    <label>Guru</label>
                    <input type="tel" class="form-control" value="">
                  </div>
                </div>

              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div> -->
</div>
</div>
</main>
</div>
</div>
</div>