<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');        
        $this->load->model('m_login');
        $this->pesanAddSuccess = "Data Berhasil Ditambahkan";
        $this->pesanAddError = "Data Tidak Berhasil Ditambahkan";
        $this->pesanEditSuccess = "Data Berhasil Diubah";
        $this->pesanEditError = "Data Tidak Berhasil Diubah";
        $this->pesanDeleteSuccess = "Data Berhasil Dihapus";
        $this->pesanDeleteError = "Data Tidak Berhasil Dihapus";
        $this->pesanIconSuccess = "uk-icon-check-circle uk-icon-medium";
        $this->pesanIconError = "uk-icon-info-circle uk-icon-medium";
    }
    
    public function index()
    {
        $tamplate['title'] = 'Login Page';
        $this->load->helper('url');
        $this->load->view('templates/header',$tamplate);
        $this->load->view('login');
        $this->load->view('templates/footer');
    }
    
    public function cekLogin(){
        $username= $this->input->post('username');
        $password= $this->input->post('password');
        $cek = $this->m_login->cekLogin($username,$password)->num_rows();        
        
        $data=$this->m_login->cekLogin($username,$password)->result_array();
        // die(json_encode($data[0]));
        if($cek > 0){
            $data_session = array(
                'id_siswa' => $data[0]['id'],
                'nama_siswa' => $data[0]['nama'],
                'status' => "login"
                );
         
            $this->session->set_userdata($data_session);
            redirect(base_url("admin"));
        }else{
            echo "Username dan password salah !";
            redirect('login');
        }
    }
}