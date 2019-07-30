<?php
 Class User extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        
    }
 
    function index() {
        if ($this->session->userdata('login')!=1) {   
            redirect('login?pesan=belumlogin','refresh');  
        }
        $data['user']=$this->m_crud->get_data('user')->result();
        $this->load->view('v_header');
        $this->load->view('user/v_user', $data);
        $this->load->view('v_footer');
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $nik=$this->input->post('nik');
           $nama=$this->input->post('nama');
           $departemen=$this->input->post('departemen');
           $jabatan=$this->input->post('jabatan');
           $username=$this->input->post('username');
           $password=$this->input->post('password');
           $email=$this->input->post('email');

           
            $data = array(
                'nik' =>$nik ,
                'nama'=>$nama,
                'departemen'=>$departemen,
                'jabatan'=>$jabatan,
                'email'=>$email,
                'username'=>$username,
                'password'=>md5($password)
            );
            $this->m_crud->insert_data($data,'user');
            
            redirect('user?pesan=berhasil_input');
            
        }else{
            $this->load->view('v_header');
            $this->load->view('user/v_inputUser');
            $this->load->view('v_footer');
        }
    }

    public function edit(){
        if (isset($_POST['update'])) {
            $nik=$this->input->post('nik');
            $nama=$this->input->post('nama');
            $departemen=$this->input->post('departemen');
            $jabatan=$this->input->post('jabatan');
            $username=$this->input->post('username');

            
             $data = array(
                 'Nik' =>$nik ,
                 'nama'=>$nama,
                 'departemen'=>$departemen,
                 'jabatan'=>$jabatan,
                 'username'=>$username
             );
             $where=array('id_user'=>$this->input->post('id')
             );
             $data['user']=$this->m_crud->update_data($where,$data,'user');
             redirect('user?pesan=berhasil_edit');
        }else{
            $where=array('id_user'=>$this->uri->segment(3));
            $data['user']=$this->m_crud->edit_data($where,'user')->row_array();
            $this->load->view('v_header');
            $this->load->view('user/v_editUser',$data);
            $this->load->view('v_footer');
        }
       
    }
    public function delete($id){
        $where=array('id_user'=>$id);
        $this->m_crud->delete_data($where,'user');
        redirect('user?pesan=berhasil_hapus');
    }
 
 
} 
?>