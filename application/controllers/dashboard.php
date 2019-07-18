<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
 
     
     public function __construct()
     {
         parent::__construct();
         $this->load->model('m_crud');
         
     }
      
     public function index()
     {  
         if ($this->session->userdata('login')!=1) {
             
             redirect('login?pesan=belumlogin','refresh');
             
         }
         $data['total_surat']=$this->m_crud->get_data('surat')->num_rows();
         $data['total_arsip']=$this->m_crud->edit_data(array('status_approve'=>4),'surat')->num_rows();
         $data['total_reject']=$this->m_crud->edit_data(array('status_approve'=>6),'surat')->num_rows();
        //  var_dump($data);die();
        $this->load->view('v_header');
        $this->load->view('v_dashboard',$data);
        $this->load->view('v_footer');
     }
 
 }
 
 /* End of file Dashboard.php */
  
?>