<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {
public function __construct() {
        parent::__construct();
        @session_start();
        if ($this->session->userdata('id_user') != null ) {
            redirect('C_User');
        }
    }
	public function index()
	{
		$this->load->view('landing-page');
	}
	public function view_register()
	{
		$this->load->view('register');
	}
	public function view_login()
	{
		$this->load->view('login');
	}
	  public function cekusername()
        {
        $username = $this->input->post('username');
        $exists = $this->M_User->cekusername($username);
        $count = count($exists);
        log_message('debug', 'Username Exist or not Response Count: ' . print_r($count, TRUE));
        if ($count > 0)
            {
            $data['state'] = 1;
            print (json_encode($data));
            }
          else
            {
            $data['state'] = 0;
            print (json_encode($data));
            }
        }

	public function register(){
		$nama_lengkap = $this->input->post('namaLengkap','true');
		$tanggal_lahir = $this->input->post('tanggalLahir','true');
		$email = $this->input->post('email','true');
		$tipe_user = $this->input->post('tipeAkun','true');
		$username = $this->input->post('username','true');
        $jenis_kelamin = $this->input->post('jenis_kelamin','true');
		$password = $this->input->post('password','true');
		$passwordhash = password_hash($password, PASSWORD_BCRYPT);
		$fotoprofile = "assets/img/fotoprofil/defaultprofile.jpg";
		$cek = $this->M_User->tambahAkun('t_user', array(
            "username" => $username,
            "nama_lengkap" => $nama_lengkap,
            "tanggal_lahir" => $tanggal_lahir,
            "tipe_user" => $tipe_user,
            "email" => $email,
            "password" => $passwordhash,
            "fotoprofile" => $fotoprofile,
            "jenis_kelamin" => $jenis_kelamin
        ));

		if ($cek >= 1)
            {
				?> <script language="JavaScript">alert('Berhasil membuat akun.');</script><?php
            	$this->load->view('login');
            }
          else
            {
				?> <script language="JavaScript">alert('Gagal menambahkan user.');document.location='<?php echo site_url('MainController/view_login'); ?>'</script><?php
            }
	}

	public function login()
    {
        $username     = $this->input->post('username', 'true');
        $password     = $this->input->post('password', 'true');
        $this->M_User->authentication($username,$password);
        
    }

}
