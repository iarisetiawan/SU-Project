<?php 
class M_User extends CI_Model{
    public function tambahAkun($tabelname,$data){
        $result =$this->db->insert($tabelname,$data);
        return $result;
    }

    public function cekusername($username){
      $this->db->select('*'); 
      $this->db->from('t_user');
      $this->db->where('username', $username);
      $query = $this->db->get();
      $result = $query->result_array();
      return $result;
    }

    public function tambahBerbagi($tabelname,$data){
        $result=$this->db->insert($tabelname,$data);
        return $result;
    }

    public function tambahKomentarBerbagi($tabelname,$data){
        $result=$this->db->insert($tabelname,$data);
        return $result;
    }

    public function authentication($username,$password){
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where('username',$username);
        $temp_account =  $this->db->get()->row();

         if ($temp_account != null && password_verify($password, $temp_account->password)) {
            $sessiondata = array(
                'id_user' => $temp_account->id_user,
                'username' => $temp_account->username,
                'nama_lengkap' => $temp_account->nama_lengkap,
                'tanggal_lahir' => $temp_account->tanggal_lahir,
                'tipe_user' => $temp_account->tipe_user,
                'email' => $temp_account->email,
                'fotoprofile'=> $temp_account->fotoprofile
            );
            $this->session->set_userdata($sessiondata);
            if($this->session->userdata('tipe_user')==0){
                ?>
<script language="JavaScript">
    document.location = '<?php
    echo site_url('C_User'); ?> '
</script>
<?php
            }else{
               ?>
<script language="JavaScript">
    document.location = '<?php
    echo site_url('C_User/view_konsultasi'); ?> '
</script><?php
            }
            
        } else {
            $this->load->view('login');
        }
    }

     function fetchBerbagiAll($limit, $start)
 {

  $this->db->select("*");
  $this->db->from("t_berbagi");
  $this->db->join('t_user', 't_berbagi.id_creator = t_user.id_user');
  $this->db->order_by("id_berbagi", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

      function fetchBerbagi($id_user,$limit, $start)
 {

  $this->db->select("*");
  $this->db->from("t_berbagi");
  $this->db->join('t_user', 't_berbagi.id_creator = t_user.id_user');
  $this->db->order_by("id_berbagi", "DESC");
  $this->db->where('t_berbagi.id_creator',$id_user);
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }


     function fetchKomentarBerbagi($id_berbagi)
 {

  $this->db->select("*");
  $this->db->from("t_komentar_berbagi");
  $this->db->join('t_user', 't_komentar_berbagi.id_komentator = t_user.id_user');
  $this->db->order_by("id_komentar", "ASC");
  $this->db->where('id_berbagi',$id_berbagi);
  $query = $this->db->get();
  return $query;
 }

     public function deleteBerbagi($id_berbagi){
        $this->db->select('*');
        $this->db->where('id_berbagi', $id_berbagi);
        $this->db->delete('t_berbagi');
    }

         public function deleteKomentarBerbagi($id_komentar){
        $this->db->select('*');
        $this->db->where('id_komentar', $id_komentar);
        $this->db->delete('t_komentar_berbagi');
    }

             public function deleteKomentar($id_komentar){
        $this->db->select('*');
        $this->db->where('id_komentar', $id_komentar);
        $this->db->delete('t_komentar_artikel');
    }


    public function editBerbagi($id_berbagi,$content){
        $this->db->set('content',$content);
        $this->db->where('id_berbagi', $id_berbagi);
        $this->db->update('t_berbagi');
    }

        public function editKomentarBerbagi($id_komentar,$komentar){
        $this->db->set('komentar',$komentar);
        $this->db->where('id_komentar', $id_komentar);
        $this->db->update('t_komentar_berbagi');
    }

    public function GetUserData()

  {  

    $this->db->select('*');
    $this->db->from('t_user');

    $this->db->where("id_user",$this->session->userdata('id_user'));

    $this->db->limit(1);

      $query = $this->db->get();

    if ($query) {

       return $query->row_array();

     } else {

       return false;

     }

    }

      public function penggunaList() 

  {  

    $this->db->select('id_user,nama_lengkap,fotoprofile');

    $this->db->from('t_user');
    if($this->session->userdata('tipe_user')==1){
       $this->db->where("tipe_user",0);
     }else{
      $this->db->where("tipe_user",1);
     }  

    $this->db->where_not_in('id_user',$this->session->userdata('id_user'));

    $query = $this->db->get();

    $r=$query->result_array();

    return $r;

    }

    public function antarPenggunaList() 

  {  

    $this->db->select('id_user,nama_lengkap,fotoprofile');

    $this->db->from('t_user');
       $this->db->where("tipe_user",0);
    $this->db->where_not_in('id_user',$this->session->userdata('id_user'));

    $query = $this->db->get();

    $r=$query->result_array();

    return $r;

    }

      public function GetProfileUser($id_user)

  {  

    $this->db->select('*');

    $this->db->from('t_user');

    $this->db->where("id_user",$id_user);

    $this->db->limit(1);

      $query = $this->db->get();

    $res = $query->row_array();

    return $res;

     

    }
  


}

 ?>