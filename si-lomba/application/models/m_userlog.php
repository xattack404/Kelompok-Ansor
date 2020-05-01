<?php
class m_userlog extends CI_Model{

    public function _login($username,$password){
        $cek = $this->db->get_where('login',array('username'=>$username,'password'=>md5($password)));
        if ($cek->num_rows()>0){
            return 1;
        }else{
            return 0;
        }
    }
}