<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    use Dompdf\Dompdf;
    class pdf extends Dompdf{
        /**
         * pdf filename
         * @var String
         */
   
    /* End of file Home.php */
    public $filename;
    public function __construct(){
        parent::__construct();
        $this->filename ="laporan.pdf";
    }
    /**
     * get an instance of codeigniter
     * 
     * @access protected
     * @return void
     */
    protected function ci(){
        return get_instance();
    }
    public function load_view($view, $data=array()){
        $html=$this->ci()->load->view($view,$data, TRUE);
        $this->load_html($html);
        //render the pdf
        $this->render();
        $this->stream($this->filename,array("attachment"=>false));
    }
}
    
?>