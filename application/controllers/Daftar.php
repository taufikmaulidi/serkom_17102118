<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('m_daftar');
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
        $tamplate['title'] = "Formulir Pendaftaran";
        $this->load->view('templates/header', $tamplate);
        $this->load->view('daftar');
        $this->load->view('templates/footer');
    }
    function get_extension($filename)
    {
        $x = explode('.', $filename);
        return "." . end($x);
    }
    public function addAction()
    {
        if (isset($_POST['batal'])) {
            redirect("home");
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        // }
        if ($this->form_validation->run() != false) {
            $this->db->trans_begin();
            $username = $this->input->post('username');
            $cekUsername = $this->m_daftar->cekUsername($username);
            if ($cekUsername == true) {
                redirect('daftar');
            }
            $config['file_name'] = "nama_" . $this->input->post('nama');
            $config['upload_path'] = './uploads/'; //path folder
            $config['allowed_types']        = 'png|jpg|jpeg|pdf';
            $config['max_size']             = 1000;
            // var_dump($config);die;
            $this->load->library('upload', $config);
            
            //$this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {
                $filename = $this->upload->data("file_name");
            } else {
                $add = '1';
                
                $msg = $this->upload->display_errors();
                var_dump($msg);die();
                $params = array($add, $this->pesanIconError, $this->pesanUploadAddError, "warning", $msg);
                $this->session->set_flashdata('pesan', $params);
                redirect('daftar');
            }

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
                'fotoSiswa' => $filename,
                'tglDaftar' => date('Y-m-d')
            ];
            $insertId = $this->m_daftar->addDataAction($data);
            $dataInputLogin = [
                'id' => $insertId,
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'nama' => $this->input->post('nama')
            ];

            $addLogin = $this->db->insert('login', $dataInputLogin);
            $add = true;
            if ($add) {
                $this->db->trans_commit();
            } else {
                $this->db->trans_rollback();
            }
            redirect('login');
        } else {
            redirect('daftar');
        }
    }
}
