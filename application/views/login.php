<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/logo-sekolah.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left pl-5 pr-5 pb-5 pt-0">
                <div class="text-center">
                  <img src="<?php echo base_url()?>assets/images/logo-sekolah.png" class="img-fluid">
                </div>
                <h4>E-learning SMP Taman Sastra Jimbaran</h4>
                <h6 class="font-weight-light">Silahkan login untuk melanjutkan.</h6>
                <form class="pt-3" action="<?php echo base_url('login/proses_login'); ?>" method="post">
                  <div class="form-group">
                    <input type="text" name="username" value="" placeholder="username" class="form-control form-control-lg">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" value="" placeholder="password" class="form-control form-control-lg">
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url()?>assets/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url()?>assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url()?>assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>
