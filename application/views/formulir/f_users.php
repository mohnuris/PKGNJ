<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h3 class="mt-5">Tambah Users</h3>
      <br>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href=" <?= base_url('users/users') ?>">Table Users</a></li>
        <li class="breadcrumb-item active">Tambah Users</li>
      </ol>

      <div class="card mb-5 shadow p-3 mb-5 bg-white rounded">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info') ?>"></div>

        <div class="modal-body align-center">
          <?php echo form_open('users/sm_users'); ?>
          <!-- form input -->
          <div class="content">
            <div class="float-right">
              <i style="margin-top:auto;">
                <button type="submit" id="simpan" onclick="Swal.fire('SUKSES','Data Tersimpan','success')" class="btn btn-primary ">
                  <i class="fa fa-save"></i> SIMPAN</button>
            </div>
          </div>
          <br>
          <label for="nama_lengkap" class="">Nama Lengkap</label>
          <?php echo form_input("nama_lengkap", set_value('nama_lengkap'), array('class' => 'form-control', 'id' => 'nanme_lengkap', 'placeholder' => 'isi Nama Lengkap')); ?>
          <small class="text-danger">
            <?php echo form_error('nama_lengkap', ' '); ?>
            <br>
          </small>

          <label for="username" class="">Username</label>
          <?php echo form_input("username", set_value('username'), array('class' => 'form-control', 'id' => 'username', 'placeholder' => 'isi username')); ?>
          <small class="text-danger">
            <?php echo form_error('username', ' '); ?>
            <br>
          </small>

          <label for="password" class="">Password</label>
          <?php echo form_password("password", set_value('password'), array('class' => 'form-control', 'id' => 'password', 'placeholder' => ' isi Password')); ?>
          <small class="text-danger">
            <?php echo form_error('password', ' '); ?>
          </small>

          </br>
          <label for="conpassword" class="">Confirmasi Password</label>
          <?php echo form_password("conpassword", set_value('conpassword'), array('class' => 'form-control', 'id' => 'conpassword', 'placeholder' => ' Confirmasi Password')); ?>
          <small class="text-danger">
            <?php echo form_error('conpassword', ' '); ?>
          </small>

          </br>
          <label for="email" class="">Email</label>
          <?php echo form_input("email", set_value('email'), array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'isi email')); ?>
          <small class="text-danger">
            <?php echo form_error('email', ' '); ?>
            <br>
          </small>

          <label for="level" class="">Level</label>
          <br>
          <?php echo form_radio('level', 'admin', set_value('level')) ?>Admin
          <?php echo form_radio('level', 'guru', set_value('level')) ?>Guru
          <?php echo form_radio('level', 'user', set_value('level')) ?>Users
          <br>
          <small class="text-danger">
            <?php echo form_error('level', ' '); ?>
          </small>
          </br>
          <!-- save -->
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