<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="" type="image/x-icon">
  <title><?= $_ENV['PROJECT_NAME']; ?> | Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('public'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('public'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('public'); ?>/dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url('public'); ?>/plugins/toastr/toastr.min.css">
  <style type="text/css">
    #toolbarContainer {
      display: none;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <img src="<?= base_url('public'); ?>/images/zeplinix_logo.png" class="l-light" style="width: 94%;">
    <h1 class="text-center"><strong>Login in your account</strong></h1>
    <!-- <p class="text-center" style="color: #64748B;font-weight:400">Loreum ipsum gives you the blocks and components you need to create a truly professional website.</p> -->
    <div class="card mt-4 login-card">
      <div class="card-body">
         
        <form id="loginForm" action="<?= site_url($panel . '/authenticate-user'); ?>" method="post">
          <?= csrf_field() ?>
          <div class="form-group">
            <label for="user_email" class="form-label-restructured">Email Address</label>
            <input type="email" class="form-control form-input" id="user_email" placeholder="Enter Email" name="user_email" value="<?= session()->getFlashdata('email_id'); ?>">
          </div>
          <div class="form-group">
            <label for="user_email" class="form-label-restructured">Enter Password</label>
            <input type="password" class="form-control form-input" placeholder="Enter Password" id="password" name="user_password">
          </div>
          <div class="row">
            <div class="col-7">
              <div class="icheck-primary mt-0 pt-1">
                <input type="checkbox" id="remember">
                <label for="remember" class="form-label-restructured" style="color: #475569;font-size:14px">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-5 ">
              <a href="#" class="btn btn-block px-0 pt-1 text-right" style="color: #475569;font-size:14px">Forgot Password</a>
              <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
            </div>
            <!-- /.col -->
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <button type="submit" class="btn  btn-block action-active text-white py-3" style="font-size: 16px;">Log in</button>
            </div>
            <div class="col-12 pt-3">
              <p class="text-center" style="color:#64748B;font-size:14px">Dont't have an account? <span class="text-bold" style="color: #733DD9;">Sign up</span></p>
            </div>
          </div>
        </form>
        <br>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?= base_url('public'); ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('public'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('public'); ?>/dist/js/adminlte.min.js"></script>
  <!-- Toastr -->
  <script src="<?= base_url('public'); ?>/plugins/toastr/toastr.min.js"></script>
  <script type="text/javascript">
    async function hashPassword(password) {
      const encoder = new TextEncoder();
      const data = encoder.encode(password);
      const hash = await crypto.subtle.digest('SHA-256', data);
      return Array.from(new Uint8Array(hash)).map(b => b.toString(16).padStart(2, '0')).join('');
    }

    $(document).ready(function() {

      <?php if ($toaster['code'] == 200) { ?>
        toastr.success('<?php echo $toaster['message'] ?>');
      <?php } else if ($toaster['code'] == 300) { ?>
        toastr.info('<?php echo $toaster['message'] ?>');
      <?php } else if ($toaster['code'] == 401 || $toaster['code'] == 404 || $toaster['code'] == 403) { ?>
        toastr.error('<?php echo $toaster['message'] ?>');
      <?php } ?>
    });
  </script>
</body>

</html>