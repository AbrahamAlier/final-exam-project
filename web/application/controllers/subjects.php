<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class subjects extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['title']='subject Data';
        $data['subjects']=$this->model->getDataSubjects();
        $this->load->view('template/header',$data);
        $this->load->view('subjects',$data);
        $this->load->view('template/footer');
        ;
    }

    

}

/* End of file tb_class.php */


?>