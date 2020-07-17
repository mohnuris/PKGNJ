<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <div class="section-body center-block">
        <div class="row mt-sm-4">
          <i style="margin-left:45%;">
        </div>
        </i>
      </div>
    </div>
    <br>
    <!-- content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="<?= base_url('icon/pria.png') ?>" alt="image" width="100px">
                </div>

                <div class="text-center">
                  <?php echo $this->session->userdata('nama_lengkap') ?>
                </div>
                <p class="text-muted text-center">Software Engineer</p>
                <h4>Profil</h4>
                <div class="text-right">
                  <button type="button" class="btn btn-success"><a href="<?= base_url('Profil/editprofil') ?>" class="text-white"><i class="fa fa-edit"></i></a></button>
                </div>
                <br>
                <?php echo form_hidden('id', $us->id_users); ?>
                <form class="form-horizontal">

                  <!-- form input -->

                  <br>
                  <label for="nama_lengkap" class="">Nama Lengkap</label>
                  <?php echo form_input("nama_lengkap", $es->nama_lengkap, array('class' => 'form-control', 'id' => 'nanme_lengkap', 'placeholder' => 'isi Nama Lengkap')); ?>
                  <small class="text-danger">
                    <?php echo form_error('nama_lengkap', ' '); ?>
                    <br>
                  </small>

                  <label for="username" class="">Username</label>
                  <?php echo form_input("username", $es->username, array('class' => 'form-control', 'id' => 'username', 'placeholder' => 'isi username')); ?>
                  <small class="text-danger">
                    <?php echo form_error('username', ' '); ?>
                    <br>
                  </small>

                  <label for="password" class="">Password*)</label>
                  <?php echo form_password("password", set_value('password'), array('class' => 'form-control', 'id' => 'password', 'placeholder' => ' isi Password')); ?>
                  <small class="text-danger">
                    <?php echo form_error('password', ' '); ?>
                  </small>

                  </br>
                  <label for="conpassword" class="">Confirmasi Password*)</label>
                  <?php echo form_password("conpassword", set_value('conpassword'), array('class' => 'form-control', 'id' => 'conpassword', 'placeholder' => ' Confirmasi Password')); ?>
                  <small class="text-danger">
                    <?php echo form_error('conpassword', ' '); ?>
                  </small>

                  </br>
                  <label for="email" class="">Email</label>
                  <?php echo form_input("email", $es->email, array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'isi email')); ?>
                  <small class="text-danger">
                    <?php echo form_error('email', ' '); ?>
                    <br>
                  </small>

                  <label for="level" class="">Level</label>
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
                  </br>
                  <!-- save -->
                  <div class="form-group  text-danger">
                    <label for="conpassword">*) Kosongi jika tidak mau di ubah</label>
                  </div>
                  <div class="content">
                    <div class="float-right">
                      <i style="margin-top:auto;">
                        <button type="submit" id="edit" onclick="Swal.fire('SUKSES','Data Tersimpan','success')" class="btn btn-primary ">
                          <i class="fa fa-save"></i> SIMPAN</button>
                    </div>
                  </div>
                  <div class="modal-footer">


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