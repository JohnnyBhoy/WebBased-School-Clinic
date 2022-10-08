<?php include 'includes/phpSource/userSession.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="includes/dist/img/logo.ico" type="image/ico" sizes="16x16">
  <title>Clinic Information Management System </title>
  <link rel="icon" href="images/logo.ico" type="image/ico" sizes="16x16">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="includes/plugins/fontawesome-free/css/all.min.css">
  <link href="includes/sweetalert.css" rel="stylesheet" type="text/css"/>
  <script src="includes/sweetalert.min.js" type="text/javascript"></script>
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="includes/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="includes/dist/css/adminlte.min.css">
</head>
<body style="background-image:url('includes/dist/img/a.jpg');opacity:0.9;background-size:100% 115%" class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
   <b align="center">Clinic Information Management System</b>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="includes/plugins//jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="includes/plugins/dist/js/adminlte.min.js"></script>
</body>
</html>

<?php include 'includes/phpSource/logIn.php'; ?>
<script>
  function passForget(){
      var a =  prompt('Enter your old password');
      return a;
  }
</script>