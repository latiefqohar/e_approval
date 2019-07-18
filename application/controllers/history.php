<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class History extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        date_default_timezone_set('Asia/Jakarta');
        
    }
     public function index()
     {
        if ($this->session->userdata('login')!=1) {   
            redirect('login?pesan=belumlogin','refresh');  
        }
         $data['history']=$this->m_crud->get_data('history')->result();
         $this->load->view('v_header');
         $this->load->view('v_history', $data);
         $this->load->view('v_footer');
         
     }
 
 }
 
 /* End of file History.php */
  
?>