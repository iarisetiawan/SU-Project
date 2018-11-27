<!DOCTYPE html>
<html>
   <head>
      <title>StepUp - Registrasi</title>
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
            		<h4>REGISTRASI</h4>
            	</div>
               	<form method="post" enctype="multipart/form-data" action="<?php echo site_url('MainController/register');?>">
                  <div class="form-group">
                     <label for="namaLengkap">Nama Lengkap</label>
                     <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap" required onmouseout="validasi();" onblur="validasi();" onfocus="validasi();" >
                  </div>
                  <div class="form-group">
                     <label for="tanggalLahir">Tanggal Lahir</label>
                     <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="TanggalLahir" required onmouseout="validasi();" onblur="validasi();" onfocus="validasi();" >
                  </div>
                  <div class="form-group">
                     <label for="jenis_kelamin">Jenis Kelamin</label>
                     <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required onmouseout="validasi();" onblur="validasi();" onfocus="validasi();" >
                        <option disabled selected value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" name="email" placeholder="Email" required onmouseout="validasi();" onblur="validasi();" onfocus="validasi();"  >
                  </div>
                  <div class="form-group">
                     <label for="tipeAkun">Daftar Sebagai</label>
                     <select id="tipeAkun" name="tipeAkun" class="form-control" required="" onmouseout="validasi();" onblur="validasi();" onfocus="validasi();">
                        <option disabled selected value="">Pilih Tipe Akun</option>
                        <option value="0">Pengguna</option>
                        <option value="1">Konsultan</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="username">Username</label>
                     <input type="text" class="form-control" id="username" name="username" placeholder="Username" required onmouseout="validasi();" oninput="cekusername();validasi();" onfocus="validasi();" onblur="validasi();">
                       <div id="available" style="display:none;height: 20px;margin-top:5px;background-color: green" >
                           <p style="color:white;text-align: center;margin: auto;">Username tersedia.</p>
                        </div>
                        <div id="unavailable" style="display:none;height: 20px;margin-top:5px;background-color: red" >
                           <p style="color:white;text-align: center;margin: auto;">Username sudah terdaftar.</p>
                        </div>
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" class="form-control" id="password" name="password" placeholder="Password" required onmouseout="validasi();" onblur="validasi();" onfocus="validasi();">
                     <div id="alertkarakter" style="display:none;height: 20px;margin-top:5px;background-color: #f58220" >
                        <p style="color:white;text-align: center;margin: auto;">Password harus memiliki minimal 6 karakter.</p>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="ulangiPassword">Ulangi Password</label>
                     <input type="password" class="form-control" id="ulangiPassword" name="ulangiPassword" placeholder="Masukkan Ulang Password" required onmouseout="validasi();" onblur="validasi();" onfocus="validasi();">
                     <div id="alert" style="display:none;height: 20px;margin-top:5px;background-color: red" >
                        <p style="color:white;text-align: center;margin: auto;">Password dan Confirm Password Tidak Sesuai.</p>
                     </div>
                  </div>
                  <input type="submit" value="Daftar"  id="submitbtn" class="btn btn-primary form-control" >
               </form>
               <p>Sudah punya akun? <a href="<?php echo site_url('MainController/view_login')?>"> Login!</a></p>
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
       <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script type="text/javascript">
                 $(document).ready(function() {
             $('#ulangiPassword').on('keydown', function() {

                 if(document.getElementById('password').value != document.getElementById('ulangiPassword').value){
                  document.getElementById('alert').style.display = 'block';
                 }else{
                  document.getElementById('alert').style.display = 'none';
                 }
                 validasi();
             });
             $('#password').on('keydown', function() {
                 if(document.getElementById('password').value != document.getElementById('ulangiPassword').value){
                  document.getElementById('alert').style.display = 'block';
                 }else{
                  document.getElementById('alert').style.display = 'none';
                 }
                 validasi();
             });
         
             $('#ulangiPassword').on('keyup', function() {
                 if(document.getElementById('password').value != document.getElementById('ulangiPassword').value){
                  document.getElementById('alert').style.display = 'block';
                 }else{
                  document.getElementById('alert').style.display = 'none';
                 }
                 validasi();
             });
             $('#password').on('keyup', function() {
                 if(document.getElementById('password').value != document.getElementById('ulangiPassword').value){
                  document.getElementById('alert').style.display = 'block';
                 }else{
                  document.getElementById('alert').style.display = 'none';
                 }
                 validasi();
             });
             $('#password').on('keydown', function() {
                 if(document.getElementById('password').value.length >= 6){
                  document.getElementById('alertkarakter').style.display = 'none';
                 }else{
                  document.getElementById('alertkarakter').style.display = 'block';
                 }
                 validasi();
             });
             $('#password').on('keyup', function() {
                if(document.getElementById('password').value.length >= 6){
                  document.getElementById('alertkarakter').style.display = 'none';
                 }else{
                  document.getElementById('alertkarakter').style.display = 'block';
                 }
                 validasi();
             });
              
             });
function validasi(){
            if(document.getElementById("namaLengkap").value.length !=0 && document.getElementById("tanggalLahir").value.length !=0 && document.getElementById("jenis_kelamin").value.length !=0 && document.getElementById("email").value.length !=0 && document.getElementById("tipeAkun").value.length !=0 && document.getElementById("username").value.length !=0 && document.getElementById("password").value.length !=0 && document.getElementById("ulangiPassword").value.length !=0 && document.getElementById("password").value == document.getElementById("ulangiPassword").value && document.getElementById('password').value.length >= 6 )
          {
              document.getElementById("submitbtn").disabled = false;
          }else{
              document.getElementById("submitbtn").disabled = true;

          };
         };
          function cekusername() {
         
         var username = $("#username").val();
         
         $.ajax(
             {
                 type:"post",
                 url: "<?php echo site_url('MainController/cekusername');?>",
                 data:{ 'username':username},
                 success:function(response)
                 {
                  console.log("ini"+response);
                  
                  var stateparse = JSON.parse(response);
                  console.log("state"+stateparse.state);   
                     if (stateparse.state == 1) 
                     {
                        document.getElementById('unavailable').style.display = 'block';
                        document.getElementById('available').style.display = 'none';
                      }else 
                     {
                        document.getElementById('unavailable').style.display = 'none';
                        document.getElementById('available').style.display = 'block';  
                     }
                 }
             });
         }

      </script>
   </body>
</html>