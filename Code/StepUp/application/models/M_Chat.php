<?php 
class M_Chat extends CI_Model{

	public function SendTxtMessage($data){
  		$res = $this->db->insert('t_chat', $data ); 
 		if($res == 1)
 			return true;
 		else
 			return false;
	}

	public function GetReciverChatHistory($receiver_id){
		
		$sender_id = $this->session->userdata('id_user');
		
		$where= "`sender_id`= '$sender_id' AND `receiver_id` = '$receiver_id' OR `sender_id`= '$receiver_id' AND `receiver_id` = '$sender_id'";
		
		$this->db->select('*');
		$this->db->from('t_chat');
		$this->db->where($where);
   		$query = $this->db->get();
 		if ($query) {
			 return $query->result_array();
		 } else {
			 return false;
		 }
	}

	public function setRead($receiver_id){
		$this->db->set('status',1);
		$this->db->where('receiver_id',$receiver_id);
		$this->db->update('t_chat');
	}

	public function getLastMessage($sender_id){
		$this->db->select('*');
		$this->db->from('t_chat');
		$this->db->where('sender_id',$sender_id);
		$this->db->where('receiver_id',$this->session->userdata('id_user'));
		$this->db->order_by('message_date_time','DESC');
		$this->db->limit(1);
		return $this->db->get()->row();
	}
}