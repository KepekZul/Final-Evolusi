<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Login - MacAdmin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  <link href="<?php echo base_url(); ?>assets_backend/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_backend/css/font-awesome.min.css">
  <link href="<?php echo base_url(); ?>assets_backend/css/style.css" rel="stylesheet">

  <script src="<?php echo base_url(); ?>assets_backend/js/respond.min.js"></script>
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets_backend/img/favicon/favicon.png">
</head>

<body>

  <!-- Form area -->
  <div class="admin-form">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <!-- Widget starts -->
          <div class="widget worange">
            <!-- Widget head -->
            <div class="widget-head">
              <i class="fa fa-lock"></i> Login
            </div>

             <?php if($this->session->flashdata('fail')): ?>
                <div class="col-md-12"><div class="alert alert-danger"><?php echo $this->session->flashdata('fail'); ?></div></div>
                <?php endif; ?>

            <div class="widget-content">
              <div class="padd">
                <!-- Login form -->
                <form class="form-horizontal" method="post" action="<?php echo site_url("login") ?>">
                  <!-- Email -->
                  <div class="form-group">
                    <label class="control-label col-lg-3" for="inputEmail">Email</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                  </div>
                  <!-- Password -->
                  <div class="form-group">
                    <label class="control-label col-lg-3" for="inputPassword">Password</label>
                    <div class="col-lg-9">
                      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-info btn-sm">Sign in</button>
                    <button type="reset" class="btn btn-default btn-sm">Reset</button>
                  </div>
                  <br />
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- JS -->
  <script src="<?php echo base_url(); ?>assets_backend/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets_backend/js/bootstrap.min.js"></script>
</body>
</html>
