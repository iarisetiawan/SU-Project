<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Step Up | Konsultasi</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/landingPage.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/berbagi.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/chat-page.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/reset.min.css">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/berbagi.css">
      <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png">


</head>

<body style="background-image: url('<?php echo base_url('assets/img/bg.png')?>');background-size:  cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;">
    <?php            
            $obj=&get_instance();
            $obj->load->model('M_User');
            $user=$obj->M_User->GetUserData();
        ?>
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
    <section class="col-md-12" id="chatSection" style="margin-top: 15vh">
        <div id="frame">
            <div id="sidepanel">
                <div id="profile">
                    <div class="wrap">
                        <img id="profile-img" src="<?php echo base_url().$user['fotoprofile']; ?>" alt="" />
                        <p>
                            <?php echo $user['nama_lengkap'];?>
                        </p>
                    </div>
                </div>
                <div id="contacts">
                    <ul class="users-list" id="userslist">
                        <?php if(!empty($userList)){
                        foreach($userList as $v):
                             $lastMessage = $this->M_Chat->getLastMessage($this->M_Auth->Encryptor('decrypt',$v['id_user']));       
                                    ?>
                        <li class="contact selectVendor" data-profile="<?php echo base_url().$v['fotoprofile']; ?>" data-name="<?=$v['nama_lengkap'];?>" id="<?=$v['id_user'];?>" title="<?=$v['nama_lengkap'];?>">
                            <div class="wrap">
                                <img src="<?php echo base_url().$v['fotoprofile']; ?>" alt="" />
                                <div class="meta" <?php if($lastMessage){ if($lastMessage->status == 0){ ?> style="font-weight: 600"
                                    <?php }} ?> >
                                    <p class="name" style="margin-bottom: 5px">
                                        <?=$v['nama_lengkap'];?>
                                    </p>
                                    <!--                             <p class="name" style="color:#ccc;"><?php if($lastMessage) echo $lastMessage->message ?></p>
 -->
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="content direct-chat-messages" id="content">
                <div class="contact-profile">
                    <img src="" id="contact-profile-img" alt="" />
                    <p id="contact-profile-name"></p>
                </div>
                <div class="messages" id="dumppy">
                    <ul>
                    </ul>
                </div>
                <div class="message-input">
                    <input type="hidden" id="base_url" value="<?=base_url().'C_Chat/send_text_message' ?>">
                    <input type="hidden" id="history_url" value="<?=base_url().'C_Chat/get_chat_history' ?>">
                    <input type="hidden" id="cekurl" value="<?=base_url().'C_Kata/cekTeks' ?>">


                    <div class="wrap">
                        <input type="hidden" id="Sender_Name" value="<?=$user['nama_lengkap'];?>">
                        <input type="hidden" id="Sender_ProfilePic" value="<?=base_url().$user['fotoprofile'];?>">
                        <input type="hidden" id="ReciverId_txt">
                        <input type="text" name="message" class="message" placeholder="Masukan pesan anda" />
                        <button class="submit btnSend"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/chat.js"></script>
</body>

</html>