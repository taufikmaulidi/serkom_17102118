<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

    public function cekLogin($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
        
    }
}