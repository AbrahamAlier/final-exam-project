<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class users extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('login_model');
            $this->load->model('model');
            $this->load->model('cetak_model');
            $this->load->library('session');
            $this->load->database();
            

            if($this->session->userdata('STATUS')!="student"){
                
                redirect('login','refresh');
                
            }

        }
       
        public function index()
        {
            $data['title']='subject Data';
            $data['scores']=$this->model->getDataTabels();
            $this->load->view('template/headerr',$data);
            $this->load->view('studen/users',$data);
            $this->load->view('template/footer');
            ;
        }
        public function laporan_pdf()
        {
            $this->load->library('pdf');
            $data['scores'] = $this->cetak_model->view();

            $this->load->library('pdf');
            
            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->filename = "student_score.pdf";
            $this->pdf->load_view('studen/laporan',$data);
            
        } 

        }

    ?>