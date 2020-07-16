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
            <!-- <img src="<?= base_url('icon/pria.png') ?>" width="100px" alt="image" width="" class="rounded-circle profile-widget-picture" class="shadow p-7 mb-5 bg-white rounded"> -->
            <!-- <div class="profile-widget-name"><?php echo $this->session->userdata('nama_lengkap') ?><div class="text-muted d-inline font-weight-normal" style="margin-left:45% ;">
                <div class="slash align-center"></div> -->
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
                <form class="form-horizontal">

                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName2" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                </form>
              </div>

            </div>

          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">

                </ul>
                <h4>Edit Profil</h4>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <!-- <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image"> -->
                        <span class="username">
                          <div class="tab-pane" id="settings">

                            <form class="form-horizontal">
                              <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                </div>
                              </div>
                              <div class="text-lift">
                                <button type="button" class="btn btn-primary"><a href="<?= base_url('Profil/editprofil') ?>" class="text-white"><i class="fa fa-save"></i> SIMPAN</a></button>
                              </div>
                            </form>
                          </div>
                          <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->


                    <!-- <div class="card mb-5 shadow p-3 mb-6 bg-white rounded">
          <div class="row">
            <div class="col-6 col-md-6">
              <div class="card">
                <form method="post" class="needs-validation" novalidate="">
                  <div class="card-header">
                    <h4>Profil</h4>
                    <div class="text-right">
                      <button type="button" class="btn btn-success"><a href="<?= base_url('Profil/editprofil') ?>" class="text-white"><i class="fa fa-edit"></i></a></button>

                    </div>
                  </div>




                  
                  <div class="card-body">
                    <div class="row">
                      <form class="form-inline">
                        <div class="row">
                          <div class="form-group col-md-6 col-6">
                            <label>Nama Lengkap </label>
                            <input type="text" class="form-control" value="Mohammad Nuris" required="">
                            <div class="invalid-feedback">
                            </div>
                          </div>

                          <div class="form-group col-md-6 col-6">
                            <label>Kelas</label>
                            <input type="text" class="form-control" value="XII" required="">
                            <div class="invalid-feedback">
                            </div>
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
                </form>
              </div>
            </div> -->


                    <!-- <div class="col-6 col-md-6 ">
              <div class="card align-right"> -->
                    <!-- <form method="post" class="needs-validation" novalidate=""> -->
                    <!-- <div class="card-header">
                  <h4>Edit Profil</h4>
                  <div class="text-right"> -->

                    <!-- <li class="mr-3"> -->
                    <!-- <button type="button" class="btn btn-primary"><a href="" class="text-white"><i class="fa fa-save"></i></a></button> -->


                    <!-- </div>
                </div>
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
              </div>
            </div>
            </form>
          </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>