<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Chat extends CI_Controller
{ 
    public function __construct()
    {
        parent::__construct();
        @session_start();
        if ($this->session->userdata('id_user') == null) {
            redirect('MainController');
        }
    }

    public function send_text_message(){
		$post = $this->input->post();
		$messageTxt='NULL';
		$messageTxt = reduce_multiples($post['messageTxt'],' ');
		?><script type="text/javascript">console.log("ini")</script><?php
		 
			$data=[
				'sender_id' => $this->session->userdata('id_user'),
				'receiver_id' => $this->M_Auth->Encryptor('decrypt', $post['receiver_id']),
				'message' =>   $messageTxt,
				'message_date_time' => date('Y-m-d H:i:s'),
				'ip_address' => $this->input->ip_address(),
				'status' => 0
			];
		  
 				$query = $this->M_Chat->SendTxtMessage($this->M_Auth->xss_clean($data)); 
 				$response='';
				if($query == true){
					$response = ['status' => 1 ,'message' => '' ];
				}else{
					$response = ['status' => 0 ,'message' => 'Error'];
				}
             
 		   echo json_encode($response);
	}

	public function get_chat_history(){
		$receiver_id = $this->M_Auth->Encryptor('decrypt', $this->input->get('receiver_id') );
		$Logged_sender_id = $this->session->userdata('id_user');
		$this->M_Chat->setRead($receiver_id);
		 
		$history = $this->M_Chat->GetReciverChatHistory($receiver_id);
		foreach($history as $chat):
			
			$message_id = $this->M_Auth->Encryptor('encrypt', $chat['id']);
			$sender_id = $chat['sender_id'];
			$user_data = $this->M_User->GetProfileUser($chat['sender_id']);
			$userName = $user_data['nama_lengkap'];
			$userPic = $user_data['fotoprofile'];
			
			$messageBody = $chat['message'];
			$messagedatetime = date('d M H:i A',strtotime($chat['message_date_time']));

				
			if($Logged_sender_id!=$sender_id){?>     
                    <li class="sent">
					<img src="<?php echo base_url().$user_data['fotoprofile']; ?>" alt="" />
					<p><?=$messageBody;?></p>
				</li>
			<?php }else{?>
                    <li class="replies">
					<img src="<?php echo base_url().$user_data['fotoprofile']; ?>" alt="" />
					<p><?=$messageBody;?></p>
				</li>
             <?php }?>
        
        <?php
		endforeach;
 		
	}
}
 
?>