<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class cetak_model extends CI_Model {
        public function view(){
            $this->db->select('SCOREID,USERNAME,ID,SUB_ID,QUIZ1,QUIZ2,MID_EXAM,QUIZ3,LAST_EXAM,AVERAGE');
            $query=$this->db->get('scores');
            return $query->result();
        }
        }
?>