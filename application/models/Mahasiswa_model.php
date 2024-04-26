<?php 

class Mahasiswa_model extends CI_Model{
    public function getAllMhs() {
        $query = $this->db->get('mahasiswa');
        if (!$query) {
            // Tampilkan pesan error
            echo $this->db->error();
            exit();
        }
        return $query->result_array();
    }
    public function getJadwal() {
        $query = $this->db->get('jadwal');
        if (!$query) {
            // Tampilkan pesan error
            echo $this->db->error();
            exit();
        }
        return $query->result_array();
    }
    public function getJadwalMhs() {
        $query = $this->db->get('jadwal_mahasiswa');
        if (!$query) {
            // Tampilkan pesan error
            echo $this->db->error();
            exit();
        }
        return $query->result_array();
    }
    public function getMataKuliah() {
        $query = $this->db->get('matakuliah');
        if (!$query) {
            // Tampilkan pesan error
            echo $this->db->error();
            exit();
        }
        return $query->result_array();
    } public function getUsers() {
        $query = $this->db->get('users');
        if (!$query) {
            // Tampilkan pesan error
            echo $this->db->error();
            exit();
        }
        return $query->result_array();
    }
    public function deleteMhsbyId($id) {
        $this->db->where('id_user', $id);
        $result = $this->db->delete('mahasiswa');
    }
    
      
    
    }
?>