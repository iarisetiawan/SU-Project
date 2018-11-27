<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Step Up | Informasi - <?php echo $artikel->judul_artikel?></title>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/informasi.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/readArtikel.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
            <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png">

      <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
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
      <section style="padding-top: 100px">
         <div class="container col-md-8 navigation-artikel" style="text-align: left;">
            <div class="row">
               <div class="col-md-12">
                  <div class="col-md-12 row">
                     <a id="nav-artikel" href="<?php echo site_url('C_User/view_informasi')?>">
                        <p>Informasi</p>
                     </a>
                     <p> &nbsp<i class="fa fa-angle-right"></i>&nbsp<?php echo $artikel->judul_artikel?></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="content-informasi" style="">
         <div class="container col-md-8">
            <div class="row">
               <div class="col-md-12">
                  <h2><?php echo $artikel->judul_artikel ?></h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <p><?php echo $artikel->nama_lengkap ?> | <?php echo date("j F Y g:i A", strtotime($artikel->timepost)) ?> <?php if($this->session->userdata('id_user') == $artikel->id_creator) { ?>| <a href="<?php echo site_url('C_User/view_editartikel/'.$artikel->id_artikel) ?>">Edit</a> | <a class="hapus-artikel" href="#" data-id_artikel="<?php echo $artikel->id_artikel ?>" data-title="Delete" data-toggle="modal" data-target="#delete">Hapus</a> <?php } ?></p>
                  <img src="<?php echo base_url().$artikel->fotoartikel ?>" width="100%" height="auto" alt="" style="margin-top: 20px">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12" style="margin-top: 20px;text-align: justify;">
                  <h6><?php echo $artikel->artikel?></h6>
               </div>
            </div>
            <div class="row" id="komentar-part">
               <div class="col-md-12">
                  <h3>Komentar</h3>
                  <hr align="left" style="width: 110px">
                  <div class="row">
                     <div class="col-md-12"></div>
                     <textarea id="komentar-field" onfocus="fieldFocus()" onblur="fieldBlur()" class="form-control" placeholder="Tambahkan Komentar"></textarea>
                     <button id="komentar-btn" data-id_artikel="<?php echo $artikel->id_artikel ?>" class="btn" disabled=""><i class="fa fa-pencil"></i></button>
                  </div>
               </div>
            </div>
            <div class="row" id="row-komentar">
               <div class="col-md-12">
                  <div class="col-md-12 row">
                     <hr style="width: 100%">
                  </div>
               </div>
                <div class="col-md-12">
                     <div class="row" id="load_data">
                     </div>
                  </div>
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
      <div class="modal fade" tabindex="-1" id="delete-komentar" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Hapus Komentar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <p>Komentar anda akan terhapus secara permanen.</p>
               </div>
               <div class="modal-footer">
                  <button type="button" id="link-delete-komentar" class="btn btn-danger">Hapus</button>
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
         
           var limit = 5;
           var start = 0;
           var action = 'inactive';
           var id_artikel = <?php echo $artikel->id_artikel ?>;
         
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
         
           function load_data(limit, start, id_artikel)
           {
             $.ajax({
               url:"<?php echo site_url('C_User/fetchKomentar'); ?>",
               method:"POST",
               data:{limit:limit, start:start, id_artikel: id_artikel},
               cache: false,
               success:function(data)
               {
                 if(data == '')
                 {
                   $('#load_data_message').html('<div class="col-md-12"><div class="col-md-12 row"><p id="no-more">Sudah Mencapai Komentar Terakhir</p></div></div>');
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
             load_data(limit, start, id_artikel);
           }
         
           $(window).scroll(function(){
             if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
             {
               lazzy_loader(limit);
               action = 'active';
               start = start + limit;
               setTimeout(function(){
                 load_data(limit, start,id_artikel);
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
         
           $(document).on("click", ".hapus-komentar", function() {
                var id_komentar = $(this).data('id_komentar');;
                $('#link-delete-komentar').data('id_komentar', id_komentar);
            });



            $('#link-delete-komentar').on('click', function() {
                var id_komentar = $(this).data('id_komentar');
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('C_User/deleteKomentar')?>",
                    data: {
                        id_komentar: id_komentar
                    },
                    success: function() {
                         $("#load_data").load(location.href + " #load_data>*", "");
                        setTimeout(function() {
                            $('#delete-komentar').modal('toggle');
                            limit = 5;
                            start = 0;
                            action = 'inactive';
                            id_artikel = <?php echo $artikel->id_artikel ?>;
                            lazzy_loader(limit);
                            if (action == 'inactive') {
                                activeion = 'active';
                                load_data(limit, start,id_artikel);
                            };
                        }, 50);
                    },
                    error: function(ts) {
                        alert("masuk error");
                        alert(ts.responseText)
                    }
                });
                return false;
            });
         
           $('#komentar-btn').on('click', function() {
                  var id_artikel = $(this).data('id_artikel');
                  var komentar = document.getElementById("komentar-field").value;

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('C_Kata/cekTeks')?>",
                    data: {
                        content:komentar
                    },
                    dataType: 'json',
                    success: function(data){
                        if(data=="bahaya"){
                            alert("Terdapat kata yang dilarang dalam inputan anda, silahkan bersuara dengan baik dan benar.");
                            document.getElementById("komentar-field").value="";
                        }else{
                    $.ajax({
                           type: "POST",
                           url: "<?php echo site_url('C_User/komentarArtikel')?>",
                           data: {
                               id_artikel: id_artikel, komentar: komentar
                           },
                           success: function() {
                               document.location='<?php echo site_url('C_User/view_readArtikel/'.$artikel->id_artikel)?>';
                           },
                           error: function(ts) {
                               alert("masuk error");
                               alert(ts.responseText)
                           }
                       });
                       return false;
                        }
                    }

                });




                      
                   });
         
         });
      </script>
      <script type="text/javascript">
         function fieldFocus(){
             $('#komentar-field').attr("placeholder","Dilarang menggunakan kalimat kasar dan kata-kata hinaan terhadap SARA saat menulis komentar. Komentar Anda akan langsung terblock jika melakukannya.")
         }
         function fieldBlur(){
             $('#komentar-field').attr("placeholder","Tambahkan Komentar")
         }
         $('#komentar-field').on('input', function() {
             if(this.value.length > 0){   
                 jQuery('#komentar-btn').css('opacity', '1');
                 $('#komentar-btn').prop('disabled',false);
             }else{
                 jQuery('#komentar-btn').css('opacity', '0.5');
                 $('#komentar-btn').prop('disabled',true);
             }
         });      
      </script>
   </body>
</html>