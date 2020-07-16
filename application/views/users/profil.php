<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <div class="section-body center-block">
        <div class="row mt-sm-4">
          <i style="margin-left:45%;">
            <img src="<?= base_url('icon/pria.png') ?>" width="100px" alt="image" width="" class="rounded-circle profile-widget-picture" class="shadow p-7 mb-5 bg-white rounded">
            <!-- <div class="profile-widget-name"><?php echo $this->session->userdata('nama_lengkap') ?><div class="text-muted d-inline font-weight-normal" style="margin-left:45% ;"> -->
            <div class="slash align-center"></div>
        </div>

        </i>
      </div>
    </div>
    <br>
    <div class="row justify-content-md-center">
      <div class="col-6 col-md-6 ">
        <div class="card align-right">
          <!-- <form method="post" class="needs-validation" novalidate=""> -->
          <div class="card-header">
            <h4> Profil</h4>
            <div class="text-right">

              <!-- <li class="mr-3"> -->
              <button type="button" class="btn btn-primary"><a class="text-white"><i class="fa fa-edit"></i></a></button>


            </div>
          </div>
          <div class="card-body">
            <!-- <?php echo form_open('Users/editusers'); ?> -->
            <!-- <?php echo form_hidden("id", $es->id_users); ?> -->
            <div class="row">
              <div class="form-group col-md-6 col-6">
                <label>Nama Lengkap </label>
                <!-- <?php echo form_input("nama_lengkap", $es->nama_lengkap, array('class' => 'form-control', 'id' => 'nanme_lengkap', 'placeholder' => 'isi Nama Lengkap')); ?> -->
                <small class="text-danger">
                  <?php echo form_error('nama_lengkap', ' '); ?>
                  <br>
                </small>
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
            <div class="row">
              <div class="form-group col-md-6 col-6">
                <label>Jurusan</label>
                <input type="text" class="form-control" value="RPL 2" required="">
                <div class="invalid-feedback">
                </div>
              </div>

              <div class="form-group col-md-6 col-6">
                <label>Guru</label>
                <input type="text" class="form-control" value="" required="">
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>

    <!-- <content section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <h4>Profil</h4>
            <div class="text-right">
              <button type="button" class="btn btn-success"><a href="<?= base_url('Profil/editprofil') ?>" class="text-white"><i class="fa fa-edit"></i></a></button>
            </div>
            <br> -->
    <!-- <?php echo form_hidden('id', $us->id_users); ?> -->


    <!-- <form class="form-horizontal">
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
                <div class="row">
                  <div class="form-group col-md-6 col-6">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" value="RPL 2" required="">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group col-md-6 col-6">
                    <label>Guru</label>
                    <input type="text" class="form-control" value="" required="">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                </div>
              </div>
          </div> -->
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>