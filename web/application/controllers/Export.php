<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('csvimport');
        // $this->load->model('import_model');
        $this->load->model('model');
    }

    public function scores()
    {
        $data['result']=$this->model->scores();
        $this->load->view('studen/bearer',$data);
    }
    }




/* End of file Import.php */

?>