<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_User extends CI_Controller
{ 
    public function __construct()
    {
        parent::__construct();
        @session_start();
        if ($this->session->userdata('id_user') == null) {
            redirect('MainController');
        }
    }
    public function index()
    {
        
        $this->load->view("Pengguna/berbagi");
    }

    public function view_konsultasi()
  {
  $list = $this->M_User->penggunaList();
  $userList = [];
  foreach($list as $u)
    {
    $userList[] = [ 'id_user' => $this->M_Auth->Encryptor('encrypt', $u['id_user']) , 'nama_lengkap' => $u['nama_lengkap'], 'fotoprofile' => $u['fotoprofile']];
    }

  $data['userList'] = $userList;
  $this->parser->parse('Pengguna/konsultasi', $data);
  }

  public function view_pesan(){
    $list = $this->M_User->antarPenggunaList();
  $userList = [];
  foreach($list as $u)
    {
    $userList[] = [ 'id_user' => $this->M_Auth->Encryptor('encrypt', $u['id_user']) , 'nama_lengkap' => $u['nama_lengkap'], 'fotoprofile' => $u['fotoprofile']];
    }

  $data['userList'] = $userList;
  $this->parser->parse('Pengguna/pesan', $data);
  }
  public function viewProfile($id_user){
      $data['userdata'] = $this->M_User->GetProfileUser($id_user);
      $this->load->view("Pengguna/profile",$data);
  }

    public function view_buatArtikel(){
      $this->load->view("Pengguna/buatartikel");
    }

    public function view_readArtikel($id_artikel){
      $data['artikel'] = $this->M_User->readArtikel($id_artikel);
      $this->M_User->tambahRead($id_artikel);
      $this->load->view("Pengguna/read-artikel",$data);
    }

    public function view_editartikel($id_artikel){
      $data['artikel'] = $this->M_User->readArtikel($id_artikel);
      $this->load->view("Pengguna/editartikel",$data);
    }

    public function view_informasi(){
        $data['artikel'] = $this->M_User->mostRead();
        $this->load->view("Pengguna/informasi",$data);
    }
    public function berbagi()
    {
        $content    = nl2br($this->input->post('content', 'true'));
        $id_creator = $this->session->userdata('id_user');
        $timepost   = date('Y-m-d H:i:s');
        $cek        = $this->M_User->tambahBerbagi('t_berbagi', array(
            "id_creator" => $id_creator,
            "content" => $content,
            "timepost" => $timepost
        ));
        

    }
    
    public function fetchBerbagi($id_user = "all")
    {

        $output = '';
        $count = 0;
        if($id_user == "all"){
        $data = $this->M_User->fetchBerbagiAll($this->input->post('limit'), $this->input->post('start'));
        }else{
        $data = $this->M_User->fetchBerbagi($id_user,$this->input->post('limit'), $this->input->post('start'));
        };
        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $count++;
              $format_posttime = date("j F Y g:i A", strtotime($row->timepost));
                $list_komentar = $this->M_User->fetchKomentarBerbagi($row->id_berbagi); 
                $output .= '
                    <div class="col-md-12 shadow-sm" id="feeds">
   <div class="row">
      <div class="col-md-12" id="user-info-feed">
         <div class="row">
            <div class="col-md-10">
               <div class="row">
                  <img class="rounded-circle" src="'.base_url().$row->fotoprofile.'" width="50" height="50">
                  <h5 id="feed-detail"><a id="namalengkap" href="'.site_url('C_User/viewProfile/'.$row->id_user).'">'.$row->nama_lengkap.'</a>
                     <br>
                     <small><span id="timepost">'.$format_posttime.'</span></small>
                  </h5>
               </div>
            </div>';
        if($this->session->userdata('id_user')== $row->id_creator){
            $output .=  '
            <div class="col-md-2" style="text-align:center;position:relative;color:#808080">
               <div class="dropdown">
                  <i class="fa fa-ellipsis-v dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                  </i>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item edit-status" href="#" data-id_berbagi="'.$row->id_berbagi.'" data-count="'.$count.'" data-content="'.$row->content.'" data-title="Edit" data-toggle="modal" data-target="#edit">Edit</a>
                     <a class="dropdown-item hapus-status" href="#" data-id_berbagi="'.$row->id_berbagi.'" data-count="'.$count.'" data-title="Delete" data-toggle="modal" data-target="#delete">Hapus</a>
                  </div>
               </div>
            </div>';
        };
        $output .= '
         </div>
         <div class="col-md-12">
         </div>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-12">
         <p id="feed-content">'.$row->content.'
         </p>
      </div>
   </div>
   <hr/>
   <div class="row" id="icon-feed">
      <div class="col-md-12">
         <a data-count="'.$count.'" class="view-komentar" id="view-komentar"><i class="fa fa-comment"></i> <span style="color:black;font-size:15px">'.$list_komentar->num_rows().' Komentar</span></a>
      </div>
   </div>
   <hr id="batas-icon" />
   <div id="komentar-list'.$count.'" style="display:none">';
  if($list_komentar->num_rows()>0){
    foreach($list_komentar->result() as $komentar){
      $format_waktukomentar = date("j F Y g:i A", strtotime($komentar->waktu_komentar));
      $output .= '<div class="row" >
   <div class="col-md-12">
      <div class="col-md-12">
         <div class="row">
            <img class="rounded-circle" src="'.base_url().$komentar->fotoprofile.'" width="30" height="30">
            <p id="feed-detail"><a id="namalengkap" href="'.site_url('C_User/viewProfile/'.$komentar->id_komentator).'">'.$komentar->nama_lengkap.'</a>
               <small><span id="timepost">'.$format_waktukomentar.'</span></small>';
                if($this->session->userdata('id_user')== $komentar->id_komentator){
               
               $output .= '
               <div class="dropdown" style="margin-left: 1%;color:#808080" >
                  <i class="fa fa-ellipsis-h dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" >
                  </i>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                     <a class="dropdown-item edit-komentar" id="edit-komentar" data-id_komentar="'.$komentar->id_komentar.'" data-count="'.$count.'" data-komentar="'.$komentar->komentar.'" data-title="EditKomentar">Edit</a>
                     <a class="dropdown-item hapus-komentar" href="#" data-id_komentar="'.$komentar->id_komentar.'" data-count="'.$count.'" data-title="Delete" data-toggle="modal" data-target="#delete-komentar">Hapus</a>

                  </div>
               </div>';
             };
             $output .='
            </p>
         </div>
      </div>
      <div class="col-md-11 pull-left" style="margin-top:0px;margin-left:4%">
            <div  id="komentar-baru'.$komentar->id_komentar.'" style="display:none" >
            <input type="text" class="form-control" name="komentar-baru'.$komentar->id_komentar.'" id="komentar-baru-text'.$komentar->id_komentar.'" value="'.$komentar->komentar.'">
            <div class="row" style="margin-top:10px;">
              <a id="link-simpan" data-id_komentar="'.$komentar->id_komentar.'" data-count="'.$count.'" class="edit-komentar-link">Simpan</a>
              <a id="link-batal" data-id_komentar="'.$komentar->id_komentar.'" data-count="'.$count.'" class="edit-komentar-link">Batal</a>
            </div>
            </div>
            <h6 style="text-align:justify" id="komentar-lama'.$komentar->id_komentar.'">'.$komentar->komentar.'</h6>
      </div>
   </div>
</div>';
    }
  };

  $output .= '
  </div>
  <hr id="batas-icon" style="margin-top:10px">
   <div class="row">
      <div class="col-md-12">
         <textarea class="form-control" id="komentar-field'.$count.'" style="margin-bottom:10px" placeholder="Tuliskan komentar..."></textarea>
         <Button data-id="'.$row->id_berbagi.'" data-count="'.$count.'" style="margin-bottom:10px" id="btn-comment" class="btn pull-right btn-primary">Komentar</Button>
         </form>
      </div>
   </div>
</div>
    ';
            }
        }
        echo $output;
    }
 public function fetchArtikel($id_user = "all")
    {
        $output = '';
        $count = 0;
        if($id_user == "all"){
        $data = $this->M_User->fetchArtikelAll($this->input->post('limit'), $this->input->post('start'));
        }else{
        $data = $this->M_User->fetchArtikel($id_user,$this->input->post('limit'), $this->input->post('start'));
        };
        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $count++;
                $format_posttime = date("j F Y g:i A", strtotime($row->timepost));
                $content_cut = substr ( $row->artikel , 0, 150 );

                $output .= '
                 <div class="col-md-12 card shadow-sm" id="artikels">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="popular-img" src="'.base_url().$row->fotoartikel.'" width="100%" height="auto" alt="" style="  margin-left: 0px; padding-left: 0px;">
                        </div>
                        <div class="col-md-6">
                            <div id="popular">
                                <a id="judul_artikel" style="color:black" href="'.site_url('C_User/view_readArtikel/'.$row->id_artikel).'"><h5 class="card-title mt-4"><b>'.$row->judul_artikel.'</b></h5></a>
                                <small><p><a href="'.site_url('C_User/viewProfile/'.$row->id_user).'">'.$row->nama_lengkap.'</a> | '.$format_posttime.'';
                                if($this->session->userdata('id_user') == $row->id_creator){
                                  $output .= ' | <a href="'.site_url('C_User/view_editartikel/'.$row->id_artikel).'">Edit</a> | <a class="hapus-artikel" href="#" data-id_artikel="'.$row->id_artikel.'" data-title="Delete" data-toggle="modal" data-target="#delete">Hapus</a> ';
                                }
                                $output .='
                                </p></small>
                                <p class="card-text">'.$content_cut.'...
                                </p>
                                <a href="'.site_url('C_User/view_readArtikel/'.$row->id_artikel).'" class="btn btn-primary" style="margin-bottom: 10px">Baca Selengkapnya</a>
                            </div>
                        </div>

                    </div>
                </div>
                ';
            }
        }
        echo $output;
    }

    public function fetchKomentar()
    {
        $output = '';
        $data = $this->M_User->fetchKomentar($this->input->post('limit'), $this->input->post('start'),$this->input->post('id_artikel'));
        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $format_posttime = date("j F Y g:i A", strtotime($row->waktu_komentar));

                $output .= '
                  <div class="col-md-12">
                  <div class="col-md-12 row">
                      <b><p><a href="'.site_url('C_User/viewProfile/'.$row->id_komentator).'"><span style="color:#00AAE5">'.$row->nama_lengkap.'</span> </b>| '.$format_posttime.' |';

                                if($this->session->userdata('id_user') == $row->id_komentator){
                  $output .= '
                      <a class="hapus-komentar" href="#" data-id_komentar="'.$row->id_komentar.'" data-title="Delete" data-toggle="modal" data-target="#delete-komentar">Hapus</a>';

                    }
                    $output .= '
                  </p>
                  </div>
                  <div class="col-md-12 row">
                      <p>'.$row->komentar.'</p>
                  </div>
                  <div class="col-md-12 row">
                      <hr style="width: 100%">
                  </div>
                  </div>
                 ';
            }
        }
        echo $output;
    }

    public function deleteBerbagi()
    {
        $this->M_User->deleteBerbagi($this->input->post("id_berbagi"));
    }


    public function deleteKomentarBerbagi()
    {
        $this->M_User->deleteKomentarBerbagi($this->input->post("id_komentar"));
    }

        public function deleteKomentar()
    {
        $this->M_User->deleteKomentar($this->input->post("id_komentar"));
    }


    public function editBerbagi()
    {
        $this->M_User->editBerbagi($this->input->post("id_berbagi"),nl2br($this->input->post("content_edit")));
    }
    public function komentarBerbagi()
    {
        $komentar    = nl2br($this->input->post('komentar', 'true'));
        $id_komentator = $this->session->userdata('id_user');
        $id_berbagi = $this->input->post('id_berbagi','true');
        $waktu_komentar   = date('Y-m-d H:i:s');
        $cek        = $this->M_User->tambahKomentarBerbagi('t_komentar_berbagi', array(
            "id_berbagi" => $id_berbagi,
            "waktu_komentar" => $waktu_komentar,
            "id_komentator" => $id_komentator,
            "komentar" => $komentar
        ));
    }

        public function komentarArtikel()
    {
        $komentar    = nl2br($this->input->post('komentar', 'true'));
        $id_komentator = $this->session->userdata('id_user');
        $id_artikel = $this->input->post('id_artikel','true');
        $waktu_komentar   = date('Y-m-d H:i:s');
        $cek        = $this->M_User->tambahKomentarArtikel('t_komentar_artikel', array(
            "id_artikel" => $id_artikel,
            "waktu_komentar" => $waktu_komentar,
            "id_komentator" => $id_komentator,
            "komentar" => $komentar
        ));
    }

    public function editKomentarBerbagi()
    {
        $this->M_User->editKomentarBerbagi($this->input->post("id_komentar"),nl2br($this->input->post("komentar")));
    }

    public function deleteArtikel(){
      $this->M_User->deleteArtikel($this->input->post("id_artikel"));
    }

     public function cekTeksArtikel($judul,$isi){

      $data= $this->M_Kata->getKata();
      $result ="";
      foreach ($data as $d) {
        if(stristr($judul,$d['kata'])||stristr($isi,$d['kata']) ){
          $result = "bahaya";
          break;
        }
        $result = "aman";
      }

      return $result;
   }

    public function buatArtikel(){
        $id_artikel = $this->M_User->getIdArtikel()->id_artikel + 1;
        $id_creator = $this->session->userdata('id_user');
        $judul_artikel = $this->input->post('judul_artikel');
        $artikel = $this->input->post('artikel');
        $status = $this->cekTeksArtikel($judul_artikel,$artikel);
        $timepost   = date('Y-m-d H:i:s');

        if($status != "bahaya"){
        $config['upload_path'] = 'assets/img/informasi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $filename = 'fotoArtikel_' . $id_artikel;
        $config['file_name'] = $filename;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('artikel-img'))
            {
            $data = $this->upload->data();
            $fotoartikel = 'assets/img/informasi/' . $data['file_name'];
            $cek = $this->M_User->buatArtikel(array(
                    "id_artikel" => $id_artikel,
                    "id_creator" => $id_creator,
                    "judul_artikel" => $judul_artikel,
                    "artikel" => $artikel,
                    "timepost" => $timepost,
                    "fotoartikel" => $fotoartikel
            ));
            if ($cek >= 1)
                {
                ?> <script language="JavaScript">
                            document.location='<?php
                                echo site_url('C_User/view_informasi');
                ?>'</script><?php
                }
              else
                {
                ?> <script language="JavaScript">alert('Gagal menambahkan user.');
                            document.location='<?php
                                echo site_url();
                ?>'</script><?php
                }
            }
          else
            {
            echo $this->upload->display_errors();
            }

          }
            else{
              ?> <script language="JavaScript">alert('Terdapat kata yang dilarang dalam inputan anda, silahkan bersuara dengan baik dan benar.');
                </script><?php
            }
    }

    public function editArtikel($id_artikel){
        $id_artikel = $id_artikel;
        $judul_artikel = $this->input->post('judul_artikel');
        $artikel = $this->input->post('artikel');
        $status = $this->cekTeksArtikel($judul_artikel,$artikel);

        if($status != "bahaya"){

        $config['upload_path'] = 'assets/img/informasi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $filename = 'fotoArtikel_' . $id_artikel;
        $config['file_name'] = $filename;
        $this->upload->initialize($config);
        if($this->input->post('artikel-img')){
          if ($this->upload->do_upload('artikel-img'))
            {
            $data = $this->upload->data();
            $fotoartikel = 'assets/img/informasi/' . $data['file_name'];
            $cek = $this->M_User->editArtikelDanFoto($id_artikel,$judul_artikel,$artikel,$fotoartikel);
            if ($cek >= 1)
                {
                ?> <script language="JavaScript">
                            document.location='<?php
                                echo site_url('C_User/view_informasi');
                ?>'</script><?php
                }
              else
                {
                ?> <script language="JavaScript">alert('Gagal menambahkan user.');
                            document.location='<?php
                                echo site_url();
                ?>'</script><?php
                }
            }
          else
            {
            echo $this->upload->display_errors();
            }
        }else{

          $cek = $this->M_User->editArtikel($id_artikel,$judul_artikel,$artikel);
            if ($cek >= 1)
                {
                ?> <script language="JavaScript">
                            document.location='<?php
                                echo site_url('C_User/view_informasi');
                ?>'</script><?php
                }
              else
                {
                ?> <script language="JavaScript">alert('Gagal menambahkan user.');
                            document.location='<?php
                                echo site_url();
                ?>'</script><?php
                }

        }}else{
           ?> <script language="JavaScript">alert('Terdapat kata yang dilarang dalam inputan anda, silahkan bersuara dengan baik dan benar.');</script><?php
        }

    }    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('MainController', 'refresh');
    }
    
    

}
