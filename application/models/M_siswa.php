<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_siswa extends CI_Model {

    protected $table_name = 'calonsiswa';

    public function cekLulus($idSiswa){
        $result = $this->db->get_where('calonsiswa', array('idSiswa' => $idSiswa));
        return $result->result_array();
    }
}