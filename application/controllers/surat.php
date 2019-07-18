<?php
 Class Surat extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        date_default_timezone_set('Asia/Jakarta');
        
    }
 
    function index() {
        if ($this->session->userdata('login')!=1) {   
            redirect('login?pesan=belumlogin','refresh');  
        }
        // $datasurat=$this->m_crud->get_data('surat')->result();
        if (
        $this->session->userdata('jabatan')=='staff') {
            $data['user']=$this->m_crud->get_data('surat')->result();
            $this->load->view('v_header');
            $this->load->view('surat/v_surat', $data);
            $this->load->view('v_footer');
        }elseif($this->session->userdata('jabatan')=='kasubag'){
            $data['user']=$this->m_crud->edit_data(array('status_approve'=>0),'surat')->result();
            $this->load->view('v_header');
            $this->load->view('surat/v_surat', $data);
            $this->load->view('v_footer');
        }elseif($this->session->userdata('jabatan')=='kabag'){
            $data['user']=$this->m_crud->edit_data(array('status_approve'=>1),'surat')->result();
            $this->load->view('v_header');
            $this->load->view('surat/v_surat', $data);
            $this->load->view('v_footer');
        }elseif($this->session->userdata('jabatan')=='asisten'){
            $data['user']=$this->m_crud->edit_data(array('status_approve'=>2),'surat')->result();
            $this->load->view('v_header');
            $this->load->view('surat/v_surat', $data);
            $this->load->view('v_footer');
        }elseif($this->session->userdata('jabatan')=='sekda'){
            $data['user']=$this->m_crud->edit_data(array('status_approve'=>3),'surat')->result();
            $this->load->view('v_header');
            $this->load->view('surat/v_surat', $data);
            $this->load->view('v_footer');
        }
        
    }

    
    public function add()
    {
        if (isset($_POST['simpan'])) {
           $sifat=$this->input->post('sifat');
           $lampiran=$this->input->post('lampiran');
           $perihal=$this->input->post('perihal');
           $tanggal_surat=$this->input->post('tanggal_surat');
           $kepada=$this->input->post('kepada');
           $pembuka=$this->input->post('pembuka');
           $tanggal_undangan=$this->input->post('tanggal_undangan');
           $waktu=$this->input->post('waktu');
           $tempat=$this->input->post('tempat');
           $acara=$this->input->post('acara');
           $penutup=$this->input->post('penutup');
           $mengetahui=$this->input->post('mengetahui');
           $tembusan=$this->input->post('tembusan');

           
            $data = array(
                'sifat' =>$sifat ,
                'lampiran'=>$lampiran,
                'perihal'=>$perihal,
                'tanggal_surat'=>$tanggal_surat,
                'kepada'=>$kepada,
                'pembuka'=>$pembuka,
                'tanggal_undangan'=>date('Y-m-d'),
                'waktu'=>$waktu,
                'tempat'=>$tempat,
                'acara'=>$acara,
                'penutup'=>$penutup,
                'mengetahui'=>$mengetahui,
                'tembusan'=>$tembusan
            );
            $this->m_crud->insert_data($data,'surat');
           
            // $this->insert_history($id,'Created',$this->session->userdata('nama'),$this->session->userdata('jabatan'));
            redirect('surat?pesan=berhasil_input');
            
        }else{
            $this->load->view('v_header');
            $this->load->view('surat/v_inputSurat');
            $this->load->view('v_footer');

        }
    }

    public function edit(){
        if (isset($_POST['update'])) {
            $id_surat=$this->input->post('id_surat');
            $sifat=$this->input->post('sifat');
            $tanggal_undangan=$this->input->post('tanggal_undangan');
           $lampiran=$this->input->post('lampiran');
           $perihal=$this->input->post('perihal');
           $kepada=$this->input->post('kepada');
           $pembuka=$this->input->post('pembuka');
           $tanggal_undangan=$this->input->post('tanggal_undangan');
           $waktu=$this->input->post('waktu');
           $tempat=$this->input->post('tempat');
           $acara=$this->input->post('acara');
           $penutup=$this->input->post('penutup');
           $mengetahui=$this->input->post('mengetahui');
           $tembusan=$this->input->post('tembusan');

            
   $data = array(
                'sifat' =>$sifat ,
                'lampiran'=>$lampiran,
                'perihal'=>$perihal,
                'tanggal_undangan'=>$tanggal_undangan,
                'kepada'=>$kepada,
                'pembuka'=>$pembuka,
                'waktu'=>$waktu,
                'tempat'=>$tempat,
                'acara'=>$acara,
                'penutup'=>$penutup,
                'mengetahui'=>$mengetahui,
                'tembusan'=>$tembusan,
                'tgl_update'=>date('Y-m-d H:i:s'),
                'status_approve'=>'0'    

            );
             $where=array('id_surat'=>$id_surat
             );
             $this->m_crud->update_data($where,$data,'surat');
             $this->insert_history($id_surat,'Updated',$this->session->userdata('nama'),$this->session->userdata('jabatan'));
             redirect('surat?pesan=berhasil_edit');
        }else{
            $where=array('id_surat'=>$this->uri->segment(3));
            $data['surat']=$this->m_crud->edit_data($where,'surat')->row_array();
            $this->load->view('v_header');
            $this->load->view('surat/v_editSurat',$data);
            $this->load->view('v_footer');
        }
       
    }
    public function delete($id){
        $where=array('id_surat'=>$id);
        $this->m_crud->delete_data($where,'surat');
        redirect('surat?pesan=berhasil_hapus');
    }

    public function detail($id){
        $where=array('id_surat'=>$id);
        $this->m_crud-> update_data($where,array('status_baca'=>1),'surat');
        $data['surat']=$this->m_crud->edit_data($where,'surat')->row_array();
        $this->load->view('v_header');
        $this->load->view('surat/v_detailSurat',$data);
        $this->load->view('v_footer');

    }

    public function insert_history($id_surat,$status,$nama,$jabatan){
        $data = array(
            'id_surat' =>$id_surat,
            'status'=>$status,
            'nama'=>$nama,
            'jabatan'=>$jabatan,
            'waktu'=>date('Y-m-d H:i:s') 
        );
        $this->m_crud->insert_data($data,'history');
    }
    public function proses(){
        $id=$this->input->post('id_surat');
        
        if (isset($_POST['approve'])) {
            if ( $this->session->userdata('jabatan')=='kasubag') {
                $this->m_crud->update_data(array('id_surat'=>$id),array('status_baca'=>0,'status_approve'=>1,'tgl_update'=>date('Y-m-d H:i:s')),'surat');
                $this->insert_history($id,'approve',$this->session->userdata('nama'),$this->session->userdata('jabatan'));
                $this->send_mail($id,'approve',$this->session->userdata('nama'),$this->session->userdata('jabatan'),date('Y-m-d H:i:s'));
            redirect('surat','refresh');
            }else if ( $this->session->userdata('jabatan')=='kabag'){
            $this->m_crud->update_data(array('id_surat'=>$id),array('status_baca'=>0,'status_approve'=>2,'tgl_update'=>date('Y-m-d H:i:s')),'surat');
            $this->send_mail($id,'approve',$this->session->userdata('nama'),$this->session->userdata('jabatan'),date('Y-m-d H:i:s'));
            $this->insert_history($id,'approve',$this->session->userdata('nama'),$this->session->userdata('jabatan'));
            redirect('surat','refresh');
            }else if ( $this->session->userdata('jabatan')=='asisten'){
            $this->m_crud->update_data(array('id_surat'=>$id),array('status_baca'=>0,'status_approve'=>3,'tgl_update'=>date('Y-m-d H:i:s')),'surat');
            $this->send_mail($id,'approve',$this->session->userdata('nama'),$this->session->userdata('jabatan'),date('Y-m-d H:i:s'));
            $this->insert_history($id,'approve',$this->session->userdata('nama'),$this->session->userdata('jabatan'));
            redirect('surat','refresh');
            }else if ( $this->session->userdata('jabatan')=='sekda'){
                $this->m_crud->update_data(array('id_surat'=>$id),array('status_baca'=>0,'status_approve'=>4,'tgl_update'=>date('Y-m-d H:i:s')),'surat');
                $this->insert_history($id,'approve',$this->session->userdata('nama'),$this->session->userdata('jabatan'));
                $this->send_mail($id,'approve',$this->session->userdata('nama'),$this->session->userdata('jabatan'),date('Y-m-d H:i:s'));
                redirect('surat','refresh');
                }
        }elseif(isset($_POST['reject'])) {
            $note=$this->input->post('keterangan');
            $penolak=$this->input->post('jabatan');
            $this->m_crud->update_data(array('id_surat'=>$id),array('status_baca'=>0,'status_approve'=>6,'note'=>$note,'penolak
            '=>$penolak,'tgl_update'=>date('Y-m-d H:i:s')),'surat');
            // die();
            $this->send_mail($id,'Reject',$this->session->userdata('nama'),$this->session->userdata('jabatan'),date('Y-m-d H:i:s'));
            $this->insert_history($id,'reject',$this->session->userdata('nama'),$this->session->userdata('jabatan'));
            redirect('surat','refresh');
        }
        
        
    }

    public function print($id){
        $where=array('id_surat'=>$id);
        $data['surat']=$this->m_crud->edit_data($where,'surat')->row_array();

        $this->load->view('surat/v_printSurat',$data);

    }
   public function arsip(){
    $data['user']=$this->m_crud->edit_data(array('status_approve'=>4),'surat')->result();
    $this->load->view('v_header');
    $this->load->view('surat/v_arsip', $data);
    $this->load->view('v_footer');
   }
   public function kasubag_new(){
    $data['user']=$this->m_crud->edit_data(array('status_baca'=>0,'status_approve'=>1),'surat')->result();
    $this->load->view('v_header');
    $this->load->view('surat/v_selesaiKasubag', $data);
    $this->load->view('v_footer');
   }
   public function kabag_new(){
    $data['user']=$this->m_crud->edit_data(array('status_baca'=>0,'status_approve'=>2),'surat')->result();
    $this->load->view('v_header');
    $this->load->view('surat/v_selesaiKabag', $data);
    $this->load->view('v_footer');
   }
   public function asda_new(){
    $data['user']=$this->m_crud->edit_data(array('status_baca'=>0,'status_approve'=>3),'surat')->result();
    $this->load->view('v_header');
    $this->load->view('surat/v_selesaiAsda', $data);
    $this->load->view('v_footer');
   }
   public function sekda_new(){
    $data['user']=$this->m_crud->edit_data(array('status_baca'=>0,'status_approve'=>4),'surat')->result();
    $this->load->view('v_header');
    $this->load->view('surat/v_selesaiSekda', $data);
    $this->load->view('v_footer');
   }
   public function reject_new(){
    $data['user']=$this->m_crud->edit_data(array('status_baca'=>0,'status_approve'=>6),'surat')->result();
    $this->load->view('v_header');
    $this->load->view('surat/v_reject', $data);
    $this->load->view('v_footer');
   }
   public function get_notif(){
    $total=$this->m_crud->edit_data(array('status_baca'=>0),'surat')->num_rows();
    $approve_kasubag= $this->m_crud->edit_data(array('status_baca'=>0,'status_approve'=>1),'surat')->num_rows();
    $approve_kabag= $this->m_crud->edit_data(array('status_baca'=>0,'status_approve'=>2),'surat')->num_rows();
    $approve_asda= $this->m_crud->edit_data(array('status_baca'=>0,'status_approve'=>3),'surat')->num_rows();
    $approve_sekda= $this->m_crud->edit_data(array('status_baca'=>0,'status_approve'=>4),'surat')->num_rows();
    $reject= $this->m_crud->edit_data(array('status_baca'=>0,'status_approve'=>6),'surat')->num_rows();
    $data = array(
        'total' => $total,
        'kasubag'=> $approve_kasubag,
        'kabag'=>$approve_kabag,
        'asda'=> $approve_asda,
        'sekda'=> $approve_sekda,
        'reject'=>$reject
     );
     echo json_encode($data);
   }
   public function send_mail($id_surat,$status,$nama,$jabatan,$waktu) { 

    $from_email = "noreplyakunku@gmail.com"; 
    $to_email = "latiefqohar97@gmail.com"; 

    $config = Array(
           'protocol' => 'smtp',
           'smtp_host' => 'ssl://smtp.googlemail.com',
           'smtp_port' => 465,
           'smtp_user' => $from_email,
           'smtp_pass' => 'noreplyakunku12',
           'mailtype'  => 'html', 
           'charset'   => 'iso-8859-1'
   );

       $this->load->library('email', $config);
       $this->email->set_newline("\r\n");   

    $this->email->from($from_email, 'Aplikasi E-Approval'); 
    $this->email->to($to_email);
    $this->email->subject('Informasi Surat '.$status); 
    $this->email->message('No surat 005/'.$id_surat.' telah di'.$status.' oleh '.$nama.' sebagai '.$jabatan.' pada '.$waktu.',Silahkan masuk ke '. base_url().'e_approval '); 

    //Send mail 
    if($this->email->send()){
          echo 'ok';
    }else {
        echo 'gagal';
    } 
 }
} 
 
 
 

?>