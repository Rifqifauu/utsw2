<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->helper('url'); // Memuat helper URL
    }


    public function index(){
        $this->load->model('Mahasiswa_model');
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMhs(); // Mengambil data dari model
        
        $this->load->view('templates/header');
        $this->load->view('mahasiswa', $data); // Mengirim data ke view
        $this->load->view('templates/footer');
    }
    public function jadwal(){
        $this->load->model('Mahasiswa_model');
        $data['mahasiswa'] = $this->Mahasiswa_model->getJadwal(); // Mengambil data dari model
        
        $this->load->view('templates/header');
        $this->load->view('jadwal', $data); // Mengirim data ke view
        $this->load->view('templates/footer');
    }
    public function jadwalMahasiswa(){
        $this->load->model('Mahasiswa_model');
        $data['mahasiswa'] = $this->Mahasiswa_model->getJadwalMhs(); // Mengambil data dari model
        
        $this->load->view('templates/header');
        $this->load->view('jadwalMahasiswa', $data); // Mengirim data ke view
        $this->load->view('templates/footer');
    }
    public function mataKuliah(){
        $this->load->model('Mahasiswa_model');
        $data['mahasiswa'] = $this->Mahasiswa_model->getMataKuliah(); // Mengambil data dari model
        
        $this->load->view('templates/header');
        $this->load->view('mataKuliah', $data); // Mengirim data ke view
        $this->load->view('templates/footer');
    }
    public function users(){
        $this->load->model('Mahasiswa_model');
        $data['mahasiswa'] = $this->Mahasiswa_model->getUsers(); // Mengambil data dari model
        
        $this->load->view('templates/header');
        $this->load->view('user', $data); // Mengirim data ke view
        $this->load->view('templates/footer');
    }
    public function deleteMahasiswa($id) {
        $this->Mahasiswa_model->deleteMhsById($id);
        redirect('mahasiswa'); // Redirect ke halaman mahasiswa setelah menghapus data
    }
}


?>