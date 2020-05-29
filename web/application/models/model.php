<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {
    // database tables

    public function getDataScore()
    {
        $query=$this->db->get('scores');
        return $query->result_array();
    }
    
    public function  getDataSubjects()
    {
        $query=$this->db->get('subjects');
        return $query->result_array();
    }
   

    //ACTION MODEL
    

    public function add_score()
    {
        $data = [
            // "USERNAME" => $this->input->post('USERNAME',true),

            "ID" => $this->input->post('ID',true),
            "SUB_ID" => $this->input->post('SUB_ID',true),

            "QUIZ1" => $this->input->post('QUIZ1',true),
            "QUIZ2" => $this->input->post('QUIZ2',true),

            "MID_EXAM" => $this->input->post('MID_EXAM',true),
            "QUIZ3" => $this->input->post('QUIZ3',true),

            "LAST_EXAM" => $this->input->post('LAST_EXAM',true),
            "AVERAGE" => $this->input->post('AVERAGE',true),
        ];
        $this->db->insert('scores', $data);
    }
    public function edit_score(){
        $data=[
               
            // "SCOREID" => $this->input->post('SCOREID',true),
            "USERNAME" => $this->input->post('USERNAME',true),

            // "ID" => $this->input->post('ID',true),
            // "SUB_ID" => $this->input->post('SUB_ID',true),

            "QUIZ1" => $this->input->post('QUIZ1',true),
            "QUIZ2" => $this->input->post('QUIZ2',true),

            "MID_EXAM" => $this->input->post('MID_EXAM',true),
            "QUIZ3" => $this->input->post('QUIZ3',true),

            "LAST_EXAM" => $this->input->post('LAST_EXAM',true),
            "AVERAGE" => $this->input->post('AVERAGE',true),
         
        ];

        $this->db->where('SCOREID', $this->input->post('SCOREID'));
        $this->db->update('scores', $data);
        
    }
    public function  getScoreByID($SCOREID){
        return $this->db->get_where('scores', array('SCOREID'=>$SCOREID))->row_array();
    }
    public function deleteDataScore($SCOREID)
    {
        $this->db->where('SCOREID', $SCOREID);
        $this->db->delete('scores');
    }
    public function datatabels(){
        $query= $this->db->order_by('SCOREID','DESC')->get('scores');
        return $query->result();
    }
    public function insertCSV($data)
    {
        $this->db->insert('scores', $data);
        return $this->db->result();
    }
    public function update()
    {
        $post = $this->input->post();
        $this->SCOREID = $post["SCOREID"];
        $this->USERNAME = $post["USERNAME"];
        $this->ID = $post["ID"];
        $this->QUIZ1 = $post["QUIZ1"];
        $this->QUIZ2 = $post["QUIZ2"];
        $this->MID_EXAM = $post["MID_EXAM"];
        $this->QUIZ3 = $post["QUIZ3"];
        $this->LAST_EXAM = $post["LAST_EXAM"];
        $this->AVERAGE = $post["AVERAGE"];
        return $this->db->update($this->_table, $this, array('SCOREID' => $post['SCOREID']));
    }

    public function scores()
    {
        $query = $this->db->order_by('SCOREID','ASC')->get('scores');
        return $query->result_array();
    }

    



}
    