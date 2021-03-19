<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {

    protected $table_name = 'calonsiswa';

    public function cekLogin($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
        
    }
    public function viewPendaftar(){
        return $this->db->get('calonsiswa')->result();
    }
    public function viewByIdSiswa($idSiswa){    
        $this->db->where('idSiswa', $idSiswa);    
        return $this->db->get('calonsiswa')->row();  
    }
    public function editDataAction($data, $where){
        $result = $this->db->update($this->table_name, $data, $where);
        return $result;
    }
    public function lulusAction($data, $where){
        $result = $this->db->update($this->table_name, $data, $where);
        return $result;
    }
    public function delete($where){
        $result= $this->db->where($where)->delete($this->table_name);
        return $result;
    }
    // public function edit($nis){    
    //     $data = array(      
    //         "nama" => $this->input->post('input_nama'),      
    //         "jenis_kelamin" => $this->input->post('input_jeniskelamin'),      
    //         "telp" => $this->input->post('input_telp'),      
    //         "alamat" => $this->input->post('input_alamat'));        
    //         $this->db->where('nis', $nis);    
    //         $this->db->update('siswa', $data); 
// Untuk mengeksekusi perintah update data  }
    // public function getListData($options = []){
    //     $where_like = empty($options['where_like']) ? '1 = 1' : '('.implode(' OR ', $options['where_like']).')';
    //     $sql = $this->query()."
    //         WHERE
    //             1 = 1 AND ".$where_like."
    //         GROUP BY idSiswa ORDER BY ".$options['order']." ".$options['mode']."
    //         LIMIT ".$options['offset'].", ".$options['limit'];

    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }
    // public function getTotalData($options){
    //     $where_like = empty($options['where_like']) ? '1 = 1' : '('.implode(' OR ', $options['where_like']).')';
    //     $sql = $this->query()."
    //         WHERE
    //             1 = 1 AND ".$where_like." GROUP BY suratId";
    //     $query = $this->db->query($sql);
    //     return $query->num_rows();
    // }

    // public function getTotal(){
    //     $sql = $this->query().' GROUP BY suratId';
    //     $query = $this->db->query($sql);
    //     return $query->num_rows();
    // }

    // public function getTotalHari(){
    //     $sql = $this->query().' WHERE suratTanggalBuat=CURDATE() GROUP BY suratId';
    //     $query = $this->db->query($sql);
    //     return $query->num_rows();
    // }
    // public function getTotalMinggu(){
    //     $sql = $this->query().' WHERE YEARWEEK(suratTanggalBuat)=YEARWEEK(CURDATE()) GROUP BY suratId';
    //     $query = $this->db->query($sql);
    //     return $query->num_rows();
    // }

    // public function getTotalBulan(){
    //     $sql = $this->query().' WHERE MONTH(suratTanggalBuat)=MONTH(CURDATE()) GROUP BY suratId';
    //     $query = $this->db->query($sql);
    //     return $query->num_rows();
    // }

    // public function getTotalTahun(){
    //     $sql = $this->query().' WHERE YEAR(suratTanggalBuat)=YEAR(CURDATE()) GROUP BY suratId';
    //     $query = $this->db->query($sql);
    //     return $query->num_rows();
    // }
    // public function getDataById($id){
    //     $sql = $this->query()." WHERE suratId = '$id' GROUP BY suratId";
    //     $query = $this->db->query($sql);
    //     return $query->row_array();
    // }

    // public function getCombo(){
    //     $sql = $this->query();
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }

    // public function addDataAction($data){
    //     $result = $this->db->insert($this->table_name, $data);
    //     $result = $this->db->insert_id();
    //     return $result;
    // }

    // public function editDataAction($data, $where){
    //     $result = $this->db->update($this->table_name, $data, $where);
    //     return $result;
    // }

    // public function syncUser($data, $where){
    //     $result = $this->db->update($this->table_name, $data, $where);
    //     return $result;
    // }

    // public function delete($where){
    //     $result= $this->db->where($where)->delete($this->table_name);
    //     return $result;
    // }

    // public function getJenisSurat(){
    //     $sql = "SELECT * FROM nagari_ref_jenis_surat WHERE jnsSuratStatus='1'";
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }

    // public function getSearchNamaPenduduk($q,$param){
    //     $sql = "SELECT concat(pdNama,'-',pdNik) as text, pdNik as id FROM nagari_penduduk
    //             LEFT JOIN nagari_ref_desa ON `pdIdDesa`=`desIdDesa`
    //             LEFT JOIN nagari_ref_kecamatan ON kecIdKecamatan = desIdKecamatan
    //             WHERE 1=1 AND (pdNama LIKE '%".$q."%' OR pdNik LIKE '%".$q."%') $param
    //             LIMIT 50";
    //     $query = $this->db->query($sql);
    //     return $query->result_array();
    // }

    // public function getComboPenandaTangan($id, $wilayah){
    //     $sql = "SELECT * FROM nagari_pejabat
    //             INNER JOIN nagari_ref_jabatan ON jabId = pejabJabId
    //             WHERE jabJnsWilayah = '$id'
    //                 AND jabNama NOT LIKE '%staf%'
    //                 AND pejabWilayahId = '$wilayah'
    //                 AND pejabAksesTandatangan='ya'
    //                 ORDER BY jabNama ASC";
    //     //print_r($sql);die;
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }

    // public function getDataExcel($options){
    //     $where_like = empty($options['where_like']) ? '1 = 1' : '('.implode(' OR ', $options['where_like']).')';
    //     $sql = $this->query()."
    //         WHERE
    //             1 = 1 AND ".$where_like." GROUP BY suratId";

    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }



}