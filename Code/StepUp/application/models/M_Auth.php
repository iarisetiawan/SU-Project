<?php 
class M_Auth extends CI_Model{

	public function Encryptor($action, $string) {
		$output = false;
	
		$encrypt_method = "AES-256-CBC";
		$secret_key = 'hitenVkuld%:bTXz,3r>6|FW#!7eSs>vM~n+48~{Mh$#A4p).)#wV3^_y-B.6WCar=b4.';
		$secret_iv = '3w8XD|r@n:nxp|oml]nw$-KEc|rT$H).(~ &`gnV!vD0vs|?r]#Zdr-qRlOV@&#6';
		$key = hash('sha256', $secret_key);
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
	
		if( $action == 'encrypt' ) {
			$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
			$output = base64_encode($output);
		}
		else if( $action == 'decrypt' ){
			$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
		}
	
		return $output;
	}

	public function xss_clean($data)
	{  
		return $this->security->xss_clean($data);
 	}
 
}