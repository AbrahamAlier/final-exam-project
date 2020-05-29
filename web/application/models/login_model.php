<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

    function login($USERNAME,$PASSWORD){
        $this->db->select('USERNAME,PASSWORD,STATUS');
        $this->db->from('users');
        $this->db->where('USERNAME', $USERNAME);
        $this->db->where('PASSWORD', $PASSWORD);
        $this->db->limit(1);
        
        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }
}

/* End of file login_model.php */

?>