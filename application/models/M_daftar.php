<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_daftar extends CI_Model {

    protected $table_name = 'calonsiswa';

    public function addDataAction($data){
        $result = $this->db->insert($this->table_name, $data);
        $result = $this->db->insert_id();
        return $result;
    }
    public function cekUsername($username){
        $result = $this->db->get_where('login', array('username' => $username));
        return $result->result_array();
    }
}