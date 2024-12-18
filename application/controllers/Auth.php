<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
		$this->load->view('login');
	}
    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    
        // Cek username di database
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->row();
    
        if ($cek == NULL) {
            // Jika username tidak ditemukan
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible" role="alert">
               Username tidak ditemukan.
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
               </button>
            </div>
            ');
            redirect('auth');
        } else if ($password == $cek->password) {
            // Jika password benar, set session
            $data = array(
                'id_user' => $cek->id_user,
                'nama' => $cek->nama,
                'username' => $cek->username,
                'level' => $cek->level,
            );
            $this->session->set_userdata($data);
    
            // Arahkan berdasarkan level pengguna
            if ($cek->level == 'admin') {
                redirect('admin/home');
            } elseif ($cek->level == 'kontributor') {
                redirect('kontributor/home');
            } else {
                redirect('auth'); // Halaman default jika level tidak dikenali
            }
        } else {
            // Jika password salah
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible" role="alert">
               Password salah.
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
               </button>
            </div>
            ');
            redirect('auth');
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
            redirect('home');
    }
     public function registrasi(){
         $this->session->sess_destroy();
         redirect('registrasi');
     }
}