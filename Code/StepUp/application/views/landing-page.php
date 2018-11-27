<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Welcome to Step Up</title>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
      <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
      <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png">
      <style type="text/css">
         
#menu {
    background-color:transparent;
}

.transparant {
    border-width: 0px;
    -webkit-box-shadow: 0px 0px;
    box-shadow: 0px 0px;
    background-color: rgba(0,0,0,0.0);
    background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
    background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
}
.navbar-nav.mr-auto.mt-2.mt-lg-0.item-custom a{
    color:white;
}

#content1{
   background: url('<?php echo base_url('assets/img/bg1.png')?>') no-repeat;
    background-size: cover;
}
.column1 {
    float: left;
    width: 30%;
}
.btn1 {
    float:right;
}


.column1 .btn {
    position: absolute;
    top: 30%;
    left: 40%;
    font-size: 12px;
    padding: 2% 8%;
    cursor: pointer;
    text-align: center;
}
@media screen and (max-width:768px) {
    .column1 .btn {
        position: absolute;
        top: 30%;
        left: 40%;
        font-size: 5px;
        padding: 2% 8%;
        cursor: pointer;
        text-align: center;
    }
}
 
.row1::after {
    content: "";
    clear: both;
    display: table;
}

#content2{
   background: url('<?php echo base_url('assets/img/bg2.png')?>') no-repeat;
    background-size: cover;
}
.sosmedbtn{
    float:right;
}
.sosmedbtn img{
    width:22%;
}

#footer{
    background: #283138;
}
@media screen and (max-width:576px) {
    .menu2 {
        font-size: 8px;
    }
}


      </style>
   </head>
   <body>

<section id="nav">
<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-custom transparant">
  <a class="navbar-brand ml-5" href="<?php echo site_url('MainController/');?>">
   <img class="home" style="width:100px" src="<?php echo base_url('assets/img/bagian/logo.png')?>">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 item-custom">
      <li class="nav-item">
        <a class=" nav-link" href="<?php echo site_url('MainController/view_login');?>">Berbagi</a>
      </li>
    </ul>
    <a href="<?php echo site_url('MainController/view_login');?>"><button type="button" class="btn btn-secondary mr-3 pl-5 pr-5">Masuk</button></a>
    <a href="<?php echo site_url('MainController/view_register');?>"><button type="button" class="btn btn-outline-secondary mr-5 pl-5 pr-5">Daftar</button></a>
    
  </div>
</nav>
</section>

<section id="banner">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/bagian/banner1.png')?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/bagian/banner2.png')?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/bagian/banner3.png')?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<br>
<section id="content1">
   <div class="container-fluid">
<br><br>
    <div class="row">

      <div class="col-lg-1 col-1"></div>

      <div class="col-lg-3 col-3">
        <div class="row1">
          <div class="column1">
            <img class="btn1" src="<?php echo base_url('assets/img/bagian/btn1.png')?>" style="width:55%;">
          </div>
          <div class="column1">
            <img src="<?php echo base_url('assets/img/bagian/2.png')?>" style="width:200%;">
           <a href="<?php echo site_url('MainController/view_login');?>"><button type="button" class="btn btn-outline-light">Selengkapnya</button></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-4">
        <div class="row1">
          <div class="column1">
            <img class="btn1" src="<?php echo base_url('assets/img/bagian/btn3.png')?>" style="width:55%;">
          </div>
          <div class="column1">
            <img src="<?php echo base_url('assets/img/bagian/1.png')?>" style="width:200%;">
            <a href="<?php echo site_url('MainController/view_login');?>"><button type="button" class="btn btn-outline-light">Selengkapnya</button></a>
          </div>
        </div>
      </div>
     
      <div class="col-lg-3 col-3">
        <div class="row1">
          <div class="column1">
            <img class="btn1" src="<?php echo base_url('assets/img/bagian/btn2.png')?>" style="width:55%;">
          </div>
          <div class="column1">
            <img src="<?php echo base_url('assets/img/bagian/3.png')?>" style="width:200%;">
            <a href="<?php echo site_url('MainController/view_login');?>"><button type="button" class="btn btn-outline-light">Selengkapnya</button></a>
          </div>
        </div>
      </div>

      <div class="col-lg-1 col-1"></div>
    </div>
      <br><br><br>
   </div>

   <div class="container">
   <!-- Content here -->
      <div class="row">
         <div class="col-lg-4 col-4 text-center">
            <img class="" style="height:60px;" src="<?php echo base_url('assets/img/bagian/icon1.png')?>">
            <p class="pr-lg-5 pl-lg-5" style="color:#ccc9c9; font-size:12px;"> 
            Terdapat 100+ pengguna yang
            dapat Anda tambahkan menjadi
            teman untuk saling berbagi cerita</p>
         </div>
         <div class="col-lg-4 col-4 text-center">
            <img class="" style="height:60px;" src="<?php echo base_url('assets/img/bagian/icon2.png')?>">
            <p class="pr-lg-5 pl-lg-5" style="color:#ccc9c9; font-size:12px;">
            Terdapat 20+ para konsultan
            yang dapat membantu Anda
            untuk mencari solusi terbaik
            dalam permasalahan Anda
            </p>
         </div>
         <div class="col-lg-4 col-4 text-center">
            <img class="" style="height:60px; " src="<?php echo base_url('assets/img/bagian/icon3.png')?>">
            <p class="pr-lg-5 pl-lg-5" style="color:#ccc9c9; font-size:12px;">
            Fitur Timeline yang dapat
            membuat Anda bebas
            berkreasi dalam tulisan
            dan juga Anda dapat merespon
            Tulisan teman Anda
            </p>
         </div>
      </div>
   </div>
</section>

<section id="content2">
   <div class="container">
   <!-- Content here -->
      <div class="row">
         <div class="col-lg-12 col-12 text-center mt-5">
            <img style="max-width:90%" src="<?php echo base_url('assets/img/bagian/batas.png')?>">
         </div>
         <div class="col-lg-12 col-12 text-center mt-5">
            <img style="max-width:70%" src="<?php echo base_url('assets/img/bagian/konten1.png')?>">
         </div>
         <div class="col-lg-12 col-12 text-center mt-5">
            <img style="max-width:70%" src="<?php echo base_url('assets/img/bagian/konten2.png')?>">
         </div>
      </div>
   </div>
</section>

<section id="content3">
  <div class="container-fluid">
    <!-- Content here -->
      <div class="row mt-5">
        <div class="col-lg-12 col-12 text-center">
          <p style="font-size:20px;color:#ccc9c9;">
            Step Up Facts
          </p>
        </div>
        <div class="col-lg-4 col-4 text-center">
          <img class="" style="height:60px;" src="<?php echo base_url('assets/img/bagian/icon4.png')?>">
          <p style="color:#ccc9c9; font-size:20px;"> 
            <b>5</b><br>
            Artikel Setiap Hari
          </p>
        </div>
        <div class="col-lg-4 col-4 text-center">
          <img class="" style="height:60px;" src="<?php echo base_url('assets/img/bagian/icon5.png')?>">
          <p style="color:#ccc9c9; font-size:20px;"> 
            <b>5</b><br>
            User Aktif
          </p>
        </div>
        <div class="col-lg-4 col-4 text-center">
          <img class="" style="height:60px; " src="<?php echo base_url('assets/img/bagian/icon6.png')?>">
          <p style="color:#ccc9c9; font-size:20px;"> 
            <b>3</b><br>
            Konsultan
          </p>
        </div>
      </div>
  </div>
</section>

<section id="content3">
  <div class="container-fluid mt-5">
    <!-- Content here -->
      <div class="row">
        <div class="col-lg-12 col-12 text-center">
          <p style="font-size:20px;color:#ccc9c9;">
            Our Partners
          </p>
        </div>
        <div class="col-lg-12 col-12 text-center">
            <img class="w-50" src="<?php echo base_url('assets/img/bagian/partner1.png')?>">
            <br><br><br>
        </div>
      </div>
  </div>
</section>

<section id="footer">
  <br><br>
  <div class="container-fluid">
    <!-- Content here -->
      <div class="row">
        <div class="col-lg-3 col-3">
          <br>
          <img class="w-100 ml-3" src="<?php echo base_url('assets/img/bagian/logo2.png')?>">
        </div>
        <div class="col-lg-2 col-2"></div>
        <div class="col-lg-4 col-4">
          <br>
          <div class="sosmedbtn">
          <img src="<?php echo base_url('assets/img/bagian/ig.png')?>">
          <img src="<?php echo base_url('assets/img/bagian/fb.png')?>">
          <img src="<?php echo base_url('assets/img/bagian/twitter.png')?>">
          <img src="<?php echo base_url('assets/img/bagian/ytb.png')?>">
          </div>
          
        </div>
        <div class="col-lg-3 col-3">
          <ul class="nav flex-column menu2">
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo site_url('MainController/view_login');?>">Berbagi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo site_url('MainController/view_login');?>">Konsultasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo site_url('MainController/view_login');?>">Informasi terkini</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-12 col-12 text-center">
        <br>
        <br>
        <p style="color:#979c9f;">Our Team @ COPYRIGHT 2018</p> 
        <br>
        </div>
  </div>

</section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        var scroll_start = 0;
        var startchange = $('#banner');
        var offset = startchange.offset();

        if(startchange.length){
          $(document).scroll(function(){
            scroll_start = $(this).scrollTop();

            if(scroll_start>offset.top){
              $('.navbar-custom').css('background-color', '#ecf0f1');
              $('.item-custom a').css('color', '#2c3e50');
            }else{
              $('.navbar-custom').css('background-color', 'rgba(0,0,0,0.0)');
              $('.item-custom a').css('color', 'white');
            }
          })
        }
      })
    </script>

  </body>
</html>