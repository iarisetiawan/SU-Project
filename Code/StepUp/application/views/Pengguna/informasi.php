<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Step Up | Informasi</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/informasi.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/berbagi.css">
      <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png">

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
                        <img class="rounded-circle" src="<?php echo base_url().$this->session->userdata('fotoprofile');?>"  width="30" height="30" >&nbsp<?php echo $this->session->userdata('nama_lengkap') ?>
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
    <header>
        <div class="container" style="padding-top: 100px">
            <div class="row" style="text-align: center;">
                <div class="col-md-12">
                    <h3>Informasi Popular</h3>
                    <hr>
                </div>
            </div>
            <?php if($artikel){ ?>
            <div class="row card shadow-sm" style="margin-top: 10px">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="popular-img" src="<?php echo base_url();?><?php echo $artikel->fotoartikel;?>" width="100%" height="auto" alt="" style="  margin-left: 0px; padding-left: 0px;">

                        </div>
                        <div class="col-md-6">
                            <div id="popular">
                                <a id="judul_artikel" style="color:black" href="<?php echo site_url('C_User/view_readArtikel/'.$artikel->id_artikel) ?>"><h5 class="card-title mt-4"><b><?php echo $artikel->judul_artikel ?></b></h5></a>
                                <small><p><a href="<?php echo site_url('C_User/viewProfile/'.$artikel->id_user)?>"><?php echo $artikel->nama_lengkap?></a> | <?php echo date("j F Y g:i A", strtotime($artikel->timepost)) ?> <?php if($this->session->userdata('id_user') == $artikel->id_creator) { ?>| <a href="<?php echo site_url('C_User/view_editartikel/'.$artikel->id_artikel) ?>">Edit</a> | <a class="hapus-artikel" href="#" data-id_artikel="<?php echo $artikel->id_artikel ?>" data-title="Delete" data-toggle="modal" data-target="#delete">Hapus</a> <?php } ?></p></small>
                                <p class="card-text"><?php echo substr ( $artikel->artikel , 0, 150 ); ?>...
                                </p>
                                <a href="<?php echo site_url('C_User/view_readArtikel/'.$artikel->id_artikel) ?>" class="btn btn-primary" style="margin-bottom: 10px">Baca Selengkapnya</a>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </header>

    <section id="content-informasi">
       <div class="container" style="padding-top: 50px">
            <div class="row" style="text-align: center;">
                <div class="col-md-12">
                    <h3>Informasi Terkini</h3>
                    <hr>
                </div>
            </div>
            <div class="row" id="row-tambah-artikel" style="margin-top: 10px">
              <div class="col-md-12">
                  <a href="<?php echo site_url('C_User/view_buatArtikel')?>"><button class="btn btn-secondary float-right" id="btn-tambah-artikel"><i class="fa fa-pencil" style="font-size:15px"></i> Tambah Artikel</button></a>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                 <div class="row" id="load_data">

                </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <div class="row" id="load_data_message">

                </div>
                </div>

            </div>
        </div>
    </section>


    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left" >
                <div class="col-xs-12 col-sm-4 col-md-4"  style="margin-top: 10px">
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

        <div class="modal fade" tabindex="-1" id="delete" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Artikel anda akan terhapus secara permanen.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="link-delete" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
  $(document).ready(function(){

    var limit = 7;
    var start = 0;
    var action = 'inactive';

    function lazzy_loader(limit)
    {
      var output = '';
      for(var count=0; count<limit; count++)
      {
         output += '<div class="col-md-12 content-placeholder" id="artikel">';

         output += '</div>';

      }
      $('#load_data_message').html(output);
    }

    lazzy_loader(limit);

    function load_data(limit, start)
    {
      $.ajax({
        url:"<?php echo site_url('C_User/fetchArtikel'); ?>",
        method:"POST",
        data:{limit:limit, start:start},
        cache: false,
        success:function(data)
        {
          if(data == '')
          {
            $('#load_data_message').html('<p id="no-more">Sudah Mencapai Post Terakhir</p>');
            action = 'active';
          }
          else
          {
            $('#load_data').append(data);
            $('#load_data_message').html("");
            action = 'inactive';
          }
        }
      })
    }

    if(action == 'inactive')
    {
      action = 'active';
      load_data(limit, start);
    }

    $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
      {
        lazzy_loader(limit);
        action = 'active';
        start = start + limit;
        setTimeout(function(){
          load_data(limit, start);
        }, 1000);
      }
    });
    $(document).on("click", ".hapus-artikel", function() {
                var id_artikel = $(this).data('id_artikel');;
                $('#link-delete').data('id_artikel', id_artikel);
    });

    $('#link-delete').on('click', function() {
                var id_artikel = $(this).data('id_artikel');
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('C_User/deleteArtikel')?>",
                    data: {
                        id_artikel: id_artikel
                    },
                    success: function() {
                        document.location='<?php echo site_url('C_User/view_informasi')?>';
                    },
                    error: function(ts) {
                        alert("masuk error");
                        alert(ts.responseText)
                    }
                });
                return false;
            });

  });
</script>

</body>

</html>