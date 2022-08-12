<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log In</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/plugins/iCheck/square/blue.css">
  <style type="text/css">
    .login-page, .register-page {
    position: fixed;
	width: 100vw;
	height: 100vh;
	background-image: url('../cc-content/themes/cicool/asset/img/header.jpg');
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	-webkit-background-size: cover;
	background-size: cover;
	 
}


.login-box-body, .register-box-body {
    background: rgb(255 255 255 / 15%);
    padding: 20px;
    border-top: 0;
    color: #fff;
}

.box{
  position:absolute;
  height:100%;
  width:100%;
  font-family:Helvetica;
  color:#fff;
  background: rgb(255 255 255 / 36%);
  padding:30px 0px;
}
.box h1{
  text-align:center;
  margin:30px 0;
  font-size:30px;
}
.box input{
  display:block;
  width:300px;
  margin:20px auto;
  padding:15px;
  background: rgb(255 255 255 / 84%);
  color:#000;
  border:0;
}
.box input:focus,.box input:active,.box button:focus,.box button:active{
  outline:none;
}
.box button{
  background:#4094ff;
  border:0;
  color:#fff;
  padding:12px;
  font-size:19px;
  width:330px;
  margin:20px auto;
  display:block;
  cursor:pointer;
}
.box button:active{
  background:#27ae60;
}
.box p{
  font-size:14px;
  text-align:center;
}
.box p span{
  cursor:pointer;
  color:#4094ff;
}

.box{
  position:absolute;
  height:100%;
  width:100%;
  font-family:Helvetica;
  color:#fff;
  background: rgb(255 255 255 / 36%);
  padding:30px 0px;
}
.box h1{
  text-align:center;
  margin:30px 0;
  font-size:30px;
}
.box input{
  display:block;
  width:300px;
  margin:20px auto;
  padding:15px;
  background: rgb(255 255 255 / 84%);
  color:#000;
  border:0;
}
.box input:focus,.box input:active,.box button:focus,.box button:active{
  outline:none;
}
.box button{
  background:#4094ff;
  border:0;
  color:#fff;
  padding:12px;
  font-size:19px;
  width:330px;
  margin:20px auto;
  display:block;
  cursor:pointer;
}
.box button:active{
  background:#27ae60;
}
.box p{
  font-size:14px;
  text-align:center;
}
.box p span{
  cursor:pointer;
  color:#4094ff;
}
 

.btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open>.dropdown-toggle.btn-primary.focus, .open>.dropdown-toggle.btn-primary:focus, .open>.dropdown-toggle.btn-primary:hover {
    color: #fff;
    background-color: #3eb8ff73;
    border-color: #3eb8ff73;
	
}
.btn-primary {
    background-color: #6cc9ff73;
    border-color: #6cc9ff73;
	outline: none;
}

.btn-primary:hover, .btn-primary:active, .btn-primary.hover {
    background-color: #3eb8ff73;
	outline: none;
}

.btn-primary.focus, .btn-primary:focus {
    color: #fff;
    background-color: #3eb8ff73;
    border-color: #3eb8ff73;
	outline: none;
}


.btn-primary.focus, .btn-primary:focus {
	outline: none;

}
.btn.btn-flat {
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-width: 0px;
}

.btn-primary {
    background-color: #6cc9ff73;
    border-color: #6cc9ff73;
}
.btn {    padding: 10px 12px;}


.login-box, .register-box {
    width: 400px;
    margin: 7% auto;
}

.login-box-body, .register-box-body {
    background: rgb(255 255 255 / 15%);
    padding: 35px;
    border-top: 0;
    color: #fff;
}

.form-control-feedback {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    display: block;
    width: 34px;
    height: 34px;
    line-height: 34px;
    text-align: center;
    pointer-events: none;
}

.form-control {
    display: block;
    width: 100%;
    height: 36px;
    padding: 3px 32px;
    font-size: 16px;
    line-height: 1.428571;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 0px solid #ccc;
    border-radius: 0px;
}
</style>
 
</head>
<body class="hold-transition login-page">
<div class="login-box">
<br><br><br><br><br><br><br><br>    
  <!-- /.login-logo -->
  <div class="login-box-body"><br>
    <center><h1 style="font-family: Segoe UI Light; font-size: 30px;">W E L C O M E</h1><br><br></center>
    <?php if(isset($error) AND !empty($error)): ?>
         <div class="callout callout-error"  style="color:#C82626">
              <h4><?= cclang('error'); ?>!</h4>
              <p><?= $error; ?></p>
            </div>
    <?php endif; ?>
    <?php
    $message = $this->session->flashdata('f_message'); 
    $type = $this->session->flashdata('f_type'); 
    if ($message):
    ?>
   <div class="callout callout-<?= $type; ?>"  style="color:#C82626">
        <p><?= $message; ?></p>
      </div>
    <?php endif; ?>
     <?= form_open('', [
        'name'    => 'form_login', 
        'id'      => 'form_login', 
        'method'  => 'POST'
      ]); ?>
      <div class="form-group has-feedback <?= form_error('username') ? 'has-error' :''; ?>">
        <input type="email" class="form-control" placeholder="Email" name="username" value="<?= set_value('username', 'dost@dost.com'); ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback <?= form_error('password') ? 'has-error' :''; ?>">
        <input type="password" class="form-control" placeholder="Password" name="password" value="12345678">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	  
	  <button type="submit" class="btn btn-primary btn-block btn-flat"><b>SIGN IN</b></button>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <!-- <label>
              <input type="checkbox" name="remember" value="1"> Remember Me</input>
            </label> -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          
        </div>
        <!-- /.col -->
      </div>
    <?= form_close(); ?>

    <!-- /.social-auth-links -->

    <!-- <a href="<?= site_url('administrator/forgot-password'); ?>"><?= cclang('i_forgot_my_password'); ?></a><br>
    <a href="<?= site_url('administrator/register'); ?>" class="text-center"><?= cclang('Register'); ?></a>
  -->
    <br>
     <br><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?= BASE_ASSET; ?>/admin-lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= BASE_ASSET; ?>/admin-lte/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= BASE_ASSET; ?>/admin-lte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
