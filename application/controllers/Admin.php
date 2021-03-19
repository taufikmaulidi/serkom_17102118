<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('m_admin');
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
        $tamplate['title'] = "Selamat Datang Admin";
        $this->load->helper('url');
        $this->load->view('templates/admin/header',$tamplate);
        $this->load->view('admin/home_admin');
        $this->load->view('templates/admin/footer');
    }

    public function list_pendaftar(){
        $tamplate['title'] = "List Pendaftar";
        $data['pendaftar'] = $this->m_admin->viewPendaftar();    
        $this->load->view('templates/admin/header',$tamplate);
        $this->load->view('admin/list_pendaftar',$data);
        $this->load->view('templates/admin/footer');
    }
    public function edit($idSiswa){
        
        $tamplate['title'] = "Ubah Pendaftar";
        $data['pendaftar'] = $this->m_admin->viewByIdSiswa($idSiswa);
        // die(json_encode($data));
        $this->load->view('templates/admin/header',$tamplate);
        $this->load->view('admin/form_ubah',$data);
        $this->load->view('templates/admin/footer');
    }
    public function editAction(){
        
        if (isset($_POST['batal'])) {
            redirect("admin");
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        // }
        if ($this->form_validation->run() != false) {
            $this->db->trans_begin();
            $data = [
                'namaSiswa' => $this->input->post('nama'),
                'tmptLahir' => $this->input->post('tmptLahir'),
                'tglLahir' => $this->input->post('tglLahir'),
                'wargaNegara' => $this->input->post('wargaNegara'),
                'alamatTinggal' => $this->input->post('alamatTinggal'),
                'email' => $this->input->post('emailSiswa'),
                'noHp' => $this->input->post('noHp'),
                'asalSmp' => $this->input->post('asalSmp'),
                'namaAyah' => $this->input->post('namaAyah'),
                'namaIbu' => $this->input->post('namaIbu'),
                'penghasilanOrtu' => $this->input->post('penghasilanOrtu'),
            ];
            // $where =$this->input->post('idSiswa');
            $edit =$this->m_admin->editDataAction($data,['idSiswa' => $this->input->post('idSiswa')]);
            // die(json_encode($edit));
            // $add = true;
            if ($edit) {
                $this->db->trans_commit();
            } else {
                $this->db->trans_rollback();
            }
            redirect('admin/list_pendaftar');
        } else {
            redirect('admin/edit/$where');
        }
    }
    public function lulus($idSiswa){
        $data=[
            'isLulus'=> 1
        ];
        $lulus =$this->m_admin->lulusAction($data,['idSiswa' => $idSiswa]);
        redirect('admin/list_pendaftar');
    }
    public function delete($idSiswa)
    {
        $delete = $this->m_admin->delete(['idSiswa' => $idSiswa]);
        if ($delete) {
            echo "<script>alert(success)</script>";
        } else {
            echo "<script>alert(gagal)</script>";
        }
        redirect('admin/list_pendaftar');
    }
    public function logout(){
        $this->session->sess_destroy();
	    redirect(base_url('login'));
    }
}