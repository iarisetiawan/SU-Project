<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile - <?php echo $userdata['nama_lengkap'];?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/landingPage.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/berbagi.css">
      <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png">

    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/informasi.css"> -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body style="background-image: url('<?php echo base_url('assets/img/bg.png')?>');background-size:  cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;">       <nav id="navbar" class="navbar navbar-expand-sm navbar-light bg-lignt shadow-sm fixed-top ">
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

  <div class="container-fluid" style="margin-top: 80px">

    <div class="row">
      <div class="col-lg-1 col-1"></div>
      <div class="col-lg-9 col-9">
          <h4 class="mt-4">Profile</h4>
      </div>
      <div class="col-lg-1 col-1 ">
        <img src="<?php echo base_url('assets/img/profil-04.png')?>" class="w-100 mt-5 img-responsive">
      </div>
      <div class="col-lg-1 col-1"></div>
    </div>

    <div class="row mt-1 mb-4">
      <div class="col-lg-1 col-1"></div>
        <div class="col-lg-10 col-10">
          <img src="<?php echo base_url('assets/img/line.png')?>" class="w-100 img-responsive shadow">
        </div>
      <div class="col-lg-1 col-1"></div>
    </div>

    <div class="row mb-4 verCen">
      <div class="col-lg-1 col-1"></div>
        <div class="col-lg-7 col-7 mt-5">
              <h4><?php echo $userdata['nama_lengkap'];?></h4>
              <h6><?php echo date("j F Y", strtotime($userdata['tanggal_lahir']));?></h6>
              <p><?php if($userdata['jenis_kelamin'] == 'L'){ echo "Laki-Laki";}else{ echo "Perempuan";};?></p>
              <?php if($userdata['id_user'] == $this->session->userdata('id_user')){ ?>
              <div class="card"style="width: 10rem;">
                  <div class="card-body">
                   <button style="width: 100%;height: 100%;background-color: transparent;border-color: transparent;">Edit Profil</button>
                  </div>
              </div>
          <?php } ?>
          </div>
        <div class="col-lg-3 col-3">
          <img src="<?php echo base_url($userdata['fotoprofile']);?>" class="img-responsive rounded-circle w-100 shadow">
        </div>
      <div class="col-lg-1 col-1"></div>
    </div>
    

    <div class="row">
      <div class="col-lg-1 col-1"></div>
      <div class="col-lg-10 col-10">
                <div class="row" id="load_data">
                </div>
                <div class="row" id="load_data_message">

                </div>
            </div>
          </div>

          </div>


          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container" style="padding-top: 50px">
            <div class="row" style="text-align: center;">
            <div class="row">
                <div class="col-md-12">
                 <div class="row" id="load_data_artikel">

                </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <div class="row" id="load_data_message_artikel">

                </div>
                </div>

            </div>
        </div>
          </div>
        </div>
      </div>
    </div>
          <br><br>            
      </div>
      <input type="hidden" id="id_user_profile" value="<?php echo $userdata['id_user'];?>">
      
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var limit = 10;
            var start = 0;
            var action = 'inactive';

            function lazzy_loader(limit) {
                var output = '';
                for (var count = 0; count < limit; count++) {
                    output += '<div class="col-md-12 shadow-sm content-placeholder" id="feeds">';

                    output += '</div>';


                }
                $('#load_data_message').html(output);
            }

            lazzy_loader(limit);

            function load_data(limit, start) {
                var id_user_profile = $('#id_user_profile').val();
                  $.ajax({
                    url: "<?php echo site_url('C_User/fetchBerbagi/'); ?>"+id_user_profile,
                    method: "POST",
                    data: {
                        limit: limit,
                        start: start
                    },
                    cache: false,
                    success: function(data) {
                        if (data == '') {
                            $('#load_data_message').html('<p id="no-more">Sudah Mencapai Post Terakhir</p>');
                            action = 'active';
                        } else {
                            $('#load_data').append(data);
                            $('#load_data_message').html("");
                            action = 'inactive';
                        }
                    }
                })
            }

            if (action == 'inactive') {
                action = 'active';
                load_data(limit, start);
            }

            $('#btn-new-feed').on('click', function() {
                var content = $('#content').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('C_User/berbagi')?>",
                    data: {
                        content: content
                    },
                    success: function() {
                        $("#load_data").load(location.href + " #load_data>*", "");
                        $('[name="content"]').val("");
                        setTimeout(function() {
                            limit = 10;
                            start = 0;
                            action = 'inactive';
                            lazzy_loader(limit);
                            if (action == 'inactive') {
                                action = 'active';
                                load_data(limit, start);
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

            //delete

            $('#link-delete').on('click', function() {
                var id_berbagi = $(this).data('id');
                var count = $(this).data('count');
                var lastdigit = parseInt(count.toString().split('').pop());
                var limit_baru = count + (10 - lastdigit);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('C_User/deleteBerbagi')?>",
                    data: {
                        id_berbagi: id_berbagi
                    },
                    success: function() {
                        $("#load_data").load(location.href + " #load_data>*", "");
                        setTimeout(function() {
                            $('#delete').modal('toggle');
                            limit = limit_baru;
                            start = 0;
                            action = 'inactive';
                            lazzy_loader(limit);
                            if (action == 'inactive') {
                                activeion = 'active';
                                load_data(limit, start);
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

            //edit
            $('#link-edit').on('click', function() {
                var id_berbagi = $(this).data('id');
                var content_edit = document.getElementById("content_edit").value;
                var count = $(this).data('count');
                var lastdigit = parseInt(count.toString().split('').pop());
                var limit_baru = count + (10 - lastdigit);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('C_User/editBerbagi')?>",
                    data: {
                        id_berbagi: id_berbagi,
                        content_edit: content_edit
                    },
                    success: function() {
                        $("#load_data").load(location.href + " #load_data>*", "");
                        setTimeout(function() {
                            $('#edit').modal('toggle');
                            limit = limit_baru;
                            start = 0;
                            action = 'inactive';
                            lazzy_loader(limit);
                            if (action == 'inactive') {
                                action = 'active';
                                load_data(limit, start);
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


            $(document).on("click", ".hapus-status", function() {
                var id_berbagi = $(this).data('id_berbagi');
                var count = $(this).data('count');
                $('#link-delete').data('id', id_berbagi);
                $('#link-delete').data('count', count);
            });



            $(document).on("click", ".edit-status", function() {
                var id_berbagi = $(this).data('id_berbagi');
                var content = $(this).data('content');
                var count = $(this).data('count');
                document.getElementById("content_edit").value = content;
                $('#link-edit').data('id', id_berbagi);
                $('#link-edit').data('count', count);
            });


            // script komentar
            $(document).on("click", ".hapus-komentar", function() {
                var id_komentar = $(this).data('id_komentar');
                var count = $(this).data('count');
                $('#link-delete-komentar').data('id', id_komentar);
                $('#link-delete-komentar').data('count', count);
            });


            $('#link-delete-komentar').on('click', function() {
                var id_komentar = $(this).data('id');
                var count = $(this).data('count');
                var lastdigit = parseInt(count.toString().split('').pop());
                var limit_baru = count + (10 - lastdigit);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('C_User/deleteKomentarBerbagi')?>",
                    data: {
                        id_komentar: id_komentar
                    },
                    success: function() {
                        $("#load_data").load(location.href + " #load_data>*", "");
                        setTimeout(function() {
                            $('#delete-komentar').modal('toggle');
                            limit = limit_baru;
                            start = 0;
                            action = 'inactive';
                            lazzy_loader(limit);
                            if (action == 'inactive') {
                                activeion = 'active';
                                load_data(limit, start);
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


            $(document).on("click",".edit-komentar",function(){
                var id_komentar = $(this).data('id_komentar');
                $("#komentar-baru"+id_komentar.toString()).toggle();
                $("#komentar-lama"+id_komentar.toString()).toggle();
            });
            $(document).on("click","#link-batal",function(){
                var id_komentar = $(this).data('id_komentar');
                $("#komentar-baru"+id_komentar.toString()).toggle();
                $("#komentar-lama"+id_komentar.toString()).toggle();
            });

            $(document).on("click","#link-simpan",function(){
                var id_komentar = $(this).data('id_komentar');
                var komentar = document.getElementById("komentar-baru-text"+id_komentar.toString()).value;
                var count = $(this).data('count');
                var lastdigit = parseInt(count.toString().split('').pop());
                var limit_baru = count + (10 - lastdigit);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('C_User/editKomentarBerbagi')?>",
                    data: {
                        id_komentar: id_komentar,
                        komentar: komentar
                    },
                    success: function() {
                        $("#load_data").load(location.href + " #load_data>*", "");
                        setTimeout(function() {

                            limit = limit_baru;
                            start = 0;
                            action = 'inactive';
                            lazzy_loader(limit);
                            if (action == 'inactive') {
                                action = 'active';
                                load_data(limit, start);
                            };
                            $("#komentar-list"+count.toString()).style.display="block";
                            $("#komentar-baru"+id_komentar.toString()).toggle();
                            $("#komentar-lama"+id_komentar.toString()).toggle();
                        }, 50);

                    },
                    error: function(ts) {
                        alert("masuk error");
                        alert(ts.responseText)
                    }
                });
                return false;
            })

            $(document).on("click", "#btn-comment", function() {
                var id_berbagi = $(this).data("id");
                var count = $(this).data('count');
                var komentar = document.getElementById("komentar-field"+count.toString()).value;
                var lastdigit = parseInt(count.toString().split('').pop());
                var limit_baru = count + (10 - lastdigit);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('C_User/komentarBerbagi')?>",
                    data: {
                        id_berbagi: id_berbagi,
                        komentar: komentar
                    },
                    success: function() {
                        $("#load_data").load(location.href + " #load_data>*", "");
                        setTimeout(function() {
                            limit = limit_baru;
                            start = 0;
                            action = 'inactive';
                            lazzy_loader(limit);
                            if (action == 'inactive') {
                                action = 'active';
                                load_data(limit, start);
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

            $(document).on("click", "#view-komentar", function() {
                var count = $(this).data('count');
                $("#komentar-list"+count.toString()).toggle();
            });




            $(window).scroll(function() {
                if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
                    lazzy_loader(limit);
                    action = 'active';
                    start = start + limit;
                    setTimeout(function() {
                        load_data(limit, start);
                    }, 1000);
                }
            });

//batas informasi
 var limitInformasi = 7;
    var startInformasi = 0;
    var actionInformasi = 'inactive';

    function lazzy_loader_informasi(limitInformasi)
    {
      var output = '';
      for(var count=0; count<limitInformasi; count++)
      {
         output += '<div class="col-md-12 content-placeholder" id="artikel">';

         output += '</div>';

      }
      $('#load_data_message_artikel').html(output);
    }

    lazzy_loader_informasi(limitInformasi);

    function load_data_informasi(limitInformasi, startInformasi)
    {
       var id_user_profile = $('#id_user_profile').val();
      $.ajax({
        url:"<?php echo site_url('C_User/fetchArtikel/');?>"+id_user_profile,
        method:"POST",
        data:{limit:limitInformasi, start:startInformasi},
        cache: false,
        success:function(data)
        {
          if(data == '')
          {
            $('#load_data_message_artikel').html('<p id="no-more">Sudah Mencapai Post Terakhir</p>');
            actionInformasi = 'active';
          }
          else
          {
            $('#load_data_artikel').append(data);
            $('#load_data_message_artikel').html("");
            actionInformasi = 'inactive';
          }
        }
      })
    }

    if(actionInformasi == 'inactive')
    {
      actionInformasi = 'active';
      load_data_informasi(limitInformasi, startInformasi);
    }

    $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() > $("#load_data_artikel").height() && actionInformasi == 'inactive')
      {
        lazzy_loader_informasi(limit);
        actionInformasi = 'active';
        startInformasi = startInformasi + limitInformasi;
        setTimeout(function(){
          load_data_informasi(limitInformasi, startInformasi);
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