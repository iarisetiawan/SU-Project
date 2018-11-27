<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Kata extends CI_Controller
{ 
    public function __construct()
    {
        parent::__construct();
        @session_start();
        if ($this->session->userdata('id_user') == null) {
            redirect('MainController');
        }
    }

   public function cekTeks(){
   		$content = $this->input->post('content');

   		$data= $this->M_Kata->getKata();
   		$result ="";
   		foreach ($data as $d) {
   			if(stristr($content,$d['kata'])){
   				$result = "bahaya";
   				break;
   			}
   			$result = "aman";
   		}

   		echo json_encode($result);
   }
}
 
?>