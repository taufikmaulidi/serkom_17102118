<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function index()
    {
        $tamplate['title'] = "Selamat Datang";
        $this->load->helper('url');
        $this->load->view('templates/siswa/header',$tamplate);
        $this->load->view('siswa/home_siswa');
        $this->load->view('templates/siswa/footer');
    }
    public function cekLulus()
    {
        $tamplate['title'] = "cek kelulusan";
        $this->load->helper('url');
        $id = $this->session->userdata('id_siswa');
        $this->load->model('m_siswa');
        $data['pendaftar']=$this->m_siswa->cekLulus(33);
        // die(json_encode($lulus));
        $this->load->view('templates/siswa/header',$tamplate);
        $this->load->view('siswa/cek',$data);
        $this->load->view('templates/siswa/footer');
    }
    public function logout(){
        $this->session->sess_destroy();
	    redirect(base_url('login'));
    }
}