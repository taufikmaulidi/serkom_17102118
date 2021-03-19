<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
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
        $tamplate['title'] = 'Selamat Datang';
        $this->load->helper('url');
        $this->load->view('templates/header',$tamplate);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
}