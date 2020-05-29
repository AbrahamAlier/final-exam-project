<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        
    }

    public function index()
    {
        $data['title']='Login';
        $this->load->view('template/header_login', $data);
        $this->load->view('login/index');
        $this->load->view('template/footer');
    }

    public function proses_login()
    {
        $USERNAME=htmlspecialchars($this->input->post('uname1'));
        $PASSWORD=htmlspecialchars($this->input->post('pwd1'));
        
        $ceklogin=$this->login_model->login($USERNAME,$PASSWORD);

        if($ceklogin){
            foreach($ceklogin as $row);
            
            $this->session->set_userdata('users', $row->USERNAME);
            $this->session->set_userdata('STATUS', $row->STATUS);
            
            if($this->session->userdata('STATUS')=="teacher"){
                
                redirect('scores/index');
            } 
            elseif($this->session->userdata('STATUS') =="student"){
                redirect('student/scores/index');
            }
            elseif($this->session->userdata('STATUS') =="admin"){
                redirect('student/admin/index', 'refresh');  
            }
            else{
                redirect('login/index', 'refresh');
            }
        }
        else {
            $data['pesan'] = "your username or password is wrong";
            $data['title'] = 'Login';
            $this->load->view('template/header_login', $data);
            $this->load->view('login/index');
            $this->load->view('template/footer');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

}

/* End of file login.php */

?>
