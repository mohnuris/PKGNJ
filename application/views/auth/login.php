<!DOCTYPE html>
<html lang="en">
<!-- header -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LOGIN APLIKASI PKGNJ</title>
    <!-- logo -->
    <link rel="shortcut icon" href="<?= base_url('template/icons/logo-nj.png') ?>">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  -->

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <link href="<?= base_url('template/css/styles.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('template/css/components.css') ?>" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">

    </script>
</head>


<body>
    <div id="app">
        <section class="section">
            <div class="container mt-4 col-10 align-center margin-top:30px">
                <div class="row ">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div style="display: block; margin: auto;  margin-top:125px">
                            <div class="login-brand">
                                <div class="card-primary card mb-6 mt-5  shadow bg-white rounded ">
                                    <a>
                                        <div class="">
                                            <img src="../template/icons/logo-nj.png" alt="logo" width="90" class="center" style="display: block; margin: auto;  margin-top:-50px">
                                        </div>
                                    </a>

                                    <div class="card-body">
                                        <div class="text-center" style="display: block;  margin-top:-14px">
                                            <h5 class="card-title">PKG NURUL JADID</h5>
                                            <p class="card-text">
                                                <small class="text-muted" style="display: block; margin-top:-10px">PAITON PROBOLINGGO</small>
                                            </p>
                                        </div>

                                        <?php echo form_open('Login_admin/proses_login'); ?>
                                        <!-- <form method="POST" action="#" class="needs-validation" novalidate=""> -->
                                        <div class="form-group has-feedback">
                                            <label for="username">username</label>
                                            <?php echo form_input("username", '', array('class' => 'form-control', 'id' => 'username', 'placeholder' => 'username')); ?>
                                        </div>

                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="password" class="control-label">Password</label>
                                                <div class="float-right">
                                                    <a href="auth-forgot-password.html" class="text-small">
                                                        Forgot Password?
                                                    </a>
                                                </div>
                                            </div>
                                            <?php echo form_password("password", '', array('class' => 'form-control', 'id' => 'password', 'placeholder' => 'password')); ?>
                                            <!-- <input id="password" type="password" class="form-control" name="password" tabindex="2" required> -->
                                            <div class="invalid-feedback">
                                                please fill in your password
                                            </div>
                                        </div>

                                        <div class="submit-btn-area">
                                            <button id="form-submit" type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                                Login
                                            </button>
                                        </div>
                                        <!-- </form> -->
                                        <?php echo form_close(); ?>
                                        <!-- <div class="form-footer text-center mt-5">

                                    </div> -->
                                        <div class="simple-footer align-center text-center">
                                            <p class="text-muted">
                                                <?= $pesan ?>
                                            </p>
                                            <small class="text-muted">BirPenNJ &copy;2020 </small>
                                            <small class="text-italic">&copy;mohnuris </small>
                                            <!-- <em>Text miring dengan menggunakan tag em</em> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>