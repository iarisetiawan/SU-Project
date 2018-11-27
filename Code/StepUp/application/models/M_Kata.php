<?php 
class M_Kata extends CI_Model{

	public function getKata() {
		$this->db->select('*');
		$this->db->from('t_kata');
		return $this->db->get()->result_array();		
	}


}