<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class scores extends CI_Controller {

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
        $this->load->view('template/headerr',$data);
        $this->load->view('studen/scores',$data);
        $this->load->view('template/footer');
        ;
    }
    

    // public function add_score()
    //     {   
           
    //         $data['title']='Adding score Data';
        
    //         if($this->form_validation->run() == FALSE){
    //             $this->load->view('template/header', $data);
    //             $this->load->view('addScore', $data);
    //             $this->load->view('template/footer');
    //         }
    //         // else{
    //         //     $this->load->model('model');
    //         //     $this->model->add_score();
    //         //     $this->session->set_flashdata('flash-data','Added');
    //         //     redirect('scores');
                
    //         // }
    //     }

    // public function add_process()
    // {
    //     // $this->load->model('model');
    //     $this->model->add_score();
    //     $this->session->set_flashdata('flash-data','Added');
    //     redirect('scores');
    // }
    
    // public function deletescore($SCOREID)
    // {
    //     $this->model->deleteDataScore($SCOREID);
    //     $this->session->set_flashdata('flash-data','Deleted');
    //     redirect('scores','refresh');
    // }
    // public function editScore($SCOREID){
    //     $data['title']='Form Edit Score Data';
    //     $data['scores']= $this->model->getScoreByID($SCOREID);


    //     if($this->form_validation->run()){
    //         $this->model->edit_score();
    //         $this->session->set_flashdata('flash-data', 'diedit');
    //         redirect('scores','refresh');
            
    //     }else{
    //         $this->load->view('template/header',$data);
    //         // $this->load->view('scores',$data);
    //         $this->load->view('editScore',$data);
    //         $this->load->view('template/footer');
    //         }
    

       
        }



/* End of file scores.php */


?>