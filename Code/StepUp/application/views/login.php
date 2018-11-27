<!DOCTYPE html>
<html>
   <head>
      <title>StepUp - Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/register.css">
      <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
            <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png">

   </head>
   <body style="background-image: url('<?php echo base_url('assets/img/bg.png')?>');background-size:  cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;">
      <div class="main wrapper">
         <div class="form-wrapper">
            <div class="form">
            	<div id="logo-wrapper">
            		<a href="<?php echo site_url('MainController')?>"><img src="<?php echo base_url();?>assets/img/logo.png" width="70" height="70"></a>
            		<h4>LOGIN</h4>
            	</div>
               	<form method="post" enctype="multipart/form-data" action="<?php echo site_url('MainController/login');?>">
                  <div class="form-group">
                     <label for="username">Username</label>
                     <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  </div>
                  <input type="submit" class="btn btn-primary form-control" value="Login">
               </form>
               <p>Belum punya akun? <a href="<?php echo site_url('MainController/view_register')?>"> Daftar!</a></p>
               <p><a href="<?php echo site_url('MainController')?>">Kembali ke Halaman Utama</a></p>
            </div>
         </div>
      </div>
      <section id="footer">
         <div class="container">
            <div class="row" id="copyright">
               <div class="col-sm-12 col-md-12 text-center text-white">
                  <p class="h6">StepUp &copy 2018. All right Reversed.</p>
               </div>
               </hr>
            </div>
         </div>
      </section>
   </body>
</html>