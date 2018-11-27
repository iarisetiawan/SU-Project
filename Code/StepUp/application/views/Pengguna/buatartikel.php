<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Step Up | Buat Artikel</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/informasi.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/buat-artikel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/berbagi.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
          <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/ckeditor/ckeditor.js"></script>
</head>

<body style="background-image: url('<?php echo base_url('assets/img/bg.png')?>');background-size:  cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;">
    <nav id="navbar" class="navbar navbar-expand-sm navbar-light bg-lignt shadow-sm fixed-top ">
        <div class="container">
            <a class="navbar-brand" <?php if($this->session->userdata('tipe_user')==0){?> href="<?php echo site_url('C_User/');?>"
                <?php }else{?> href="<?php echo site_url('C_User/view_konsultasi');?>" <?php } ?>>
                <img src="<?php echo base_url();?>assets/img/logo.png" width="50" height="50" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav mr-auto">
                    <?php if($this->session->userdata('tipe_user')==0){ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Berbagi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo site_url('C_User/');?>">Timeline</a>
                            <a class="dropdown-item" href="<?php echo site_url('C_User/view_pesan');?>">Pesan</a>
                        </div>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('C_User/view_konsultasi');?>">Konsultasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('C_User/view_informasi');?>">Informasi Terkini</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item dropdown hidden-md-down">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarMenuLogin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle" src="<?php echo base_url().$this->session->userdata('fotoprofile');?>" width="30" height="30">&nbsp
                            <?php echo $this->session->userdata('nama_lengkap') ?>
                        </a>
                        <div class="dropdown-menu" id="dropdown-login" aria-labelledby="navbarMenuLogin">
                            <a class="dropdown-item" href="<?php echo site_url('C_User/viewProfile/'.$this->session->userdata('id_user'));?>">Profil</a>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="<?php echo site_url('C_User/logout');?>">Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="buat-artikel" style="padding-top: 100px">
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-md-12">
                    <h3>Buat Informasi</h3>
                    <hr>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form autocomplete="off" id="buatsertifbaru" name="buatsertifbaru" method="post" enctype="multipart/form-data" action="<?php echo site_url('C_User/buatArtikel');?>">
                        <b>
                            <p id="gambar-text">Judul Artikel</p>
                            <hr align="left" style="margin-top: 0px;width:130px">
                        </b>
                        <input type="text" name="judul_artikel" class="form-control" id="judul_artikel" required="">
                        <b>
                            <p id="gambar-text">Isi Artikel</p>
                            <hr align="left" style="margin-top: 0px;width:130px">
                        </b>
                        <textarea class="ckeditor" id="ckedtor" name="artikel" required></textarea>
                        <b>
                            <p id="gambar-text">Pilih Gambar Artikel</p>
                            <hr align="left" style="margin-top: 0px;width:130px">
                        </b>
                        <input class="form-control" accept="image/*" required type="file" name="artikel-img" id="artikel-img">
                        <input type="submit" class="btn" name="btn-submit" id="btn-submit" value="Simpan">
                        <button class="btn btn-seconday" id="btn-cancel" onclick="goBack()">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container" style="padding-top: 10px">
            <div class="row text-center text-xs-center text-sm-left text-md-left" style="margin-top: 10px;">
                <div class="col-xs-12 col-sm-4 col-md-4 mt-">
                    <h5>Informasi</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Tentang Kami</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Privacy and Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="row" id="copyright">
                <div class="col-sm-12 col-md-12 text-center text-white">
                    <p class="h6">StepUp &copy 2018. All right Reversed.</p>
                </div>
                </hr>
            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>