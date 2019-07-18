<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {
     
     public function __construct()
     {
         parent::__construct();
         $this->load->model('m_crud');
         
     }
     
 
     public function index()
     {
        if($this->session->userdata('login')==1) {
            redirect('dashboard');
        }
         $this->load->view('login/login');
        
         
     }
     public function proses(){
         $username=$this->input->post('username');
         $password=$this->input->post('password');
         $encrypt=md5($password);
        //  var_dump($encrypt);die();
         $w=array(
             'username'=>$username,
             'password'=>$encrypt
         );
         $hasil=$this->m_crud->cek_login('user',$w)->row_array();
        //  var_dump($hasil);die();
         if ($hasil==null) {    
             redirect('login?pesan=salah');
         }else{
            $arraydata = array(
                'nama'  => $hasil['nama'],
                'nik'  => $hasil['nik'],
                'jabatan'=>$hasil['jabatan'],
                'departemen'=> $hasil['departemen'],
                'login' => '1'
            );
            $this->session->set_userdata($arraydata);
            
            redirect('surat','refresh');
            
         }
         
         
     }

     public function logout(){
        $this->session->sess_destroy();
        redirect('login?pesan=logout','refresh');
     }

     public function password(){
         $this->load->view('v_header');
         $this->load->view('login/editpassword');
         $this->load->view('v_footer');
         
         
     }
     public function proseseditpass(){
        $this->form_validation->set_rules('new', 'New Password', 'required');
        $this->form_validation->set_rules('confirm', 'Confirm Password', 'required|matches[new]');
        if ($this->form_validation->run() == FALSE)
        { 
            $this->load->view('v_header');
            $this->load->view('login/editpassword');
            $this->load->view('v_footer');    
                
        }
        else
        {
            $nik=$this->session->userdata('nik');
            $password=md5($this->input->post('new'));
            $this->m_crud->update_data(array('Nik'=>$nik),array('password'=>$password),'user'); 
            redirect('login/password?pesan=sukses');
        }
     }

     //required|matches[password_field]
 
 }
 
 /* End of file Login.php */
  
?>