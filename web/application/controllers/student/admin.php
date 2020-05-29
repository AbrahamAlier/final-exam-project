<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('model');
        $this->load->model('cetak_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->database();
    }

    public function index()
    {
        $data['title']='subject Data';
        $data['scores']=$this->model->getDataScore();
        $this->load->view('template/admin_header',$data);
        $this->load->view('ADMIN/scores',$data);
        $this->load->view('template/footer');
      
      ;
    }
}
    ?>