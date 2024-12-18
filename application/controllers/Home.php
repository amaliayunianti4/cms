<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
		$this->load->model('home_model');
    }
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->order_by('tanggal', 'ASC');
		$konten = $this->db->get()->result_array();
		$data = array(
			'judul'		=>	"Beranda | 	Duor.Coffee",
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
			'caraousel'	=>	$caraousel,
			'konten'	=>	$konten,
		);
		$this->load->view('beranda', $data);
	}
	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->where('a.id_kategori',$id);
		$konten = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'judul'		=>	$nama_kategori." | Duor.Coffee",
			'nama_kategori'	=>	$nama_kategori,
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
			'konten'	=>	$konten,
		);
		$this->load->view('kategori', $data);
	}
	public function artikel($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->where('slug',$id);
		$konten = $this->db->get()->row();
		$data = array(
			'judul'		=>	$konten->judul." | Duor.Coffee",
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
			'konten'	=>	$konten,
		);
		$this->load->view('detail', $data);
	}
	public function galeri(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten');
        $konten = $this->db->get()->result_array();

        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();

        $data = array(
            'judul' => "Galeri | DUOR COFFE",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $konten,
            'galeri' => $galeri
        );  
        $this->load->view('galeri', $data);
    } 
	public function cari(){
		$judul = $this->input->post('judul');
	
		$duor = $this->home_model->cari($judul);
	
		// Cek apakah data ditemukan
		if (empty($duor)) {
			// Jika data tidak ditemukan, beri pesan dan tetap di halaman dashboard
			$this->session->set_flashdata('message', 'Tidak ada duor yang ditemukan.');
			redirect('');
		} else {
			// Jika data ditemukan, arahkan ke halaman hasil dan kirim data
			$data = array(
				'halaman' => 'Carbook - Search',
				'duor' => $duor,
			);
			// var_dump($data);
			// die;
			$this->load->view('duor', $data);
		}
}
public function blog(){
	$this->db->from('konfigurasi');
	$konfig = $this->db->get()->row();

	$this->db->from('caraousel');
	$caraousel = $this->db->get()->result_array();
	$this->db->from('kategori');
	$kategori = $this->db->get()->result_array();
	$this->db->order_by('tanggal', 'DESC');
	$this->db->from('konten a');
	$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
	$this->db->join('user c', 'a.username=c.username','left');
	$konten = $this->db->get()->result_array();
	$data = array(
		'title' 	=> 'Blog',
		'judul'		=> "Beranda | Foods",
		'konfig'	=> $konfig,
		'kategori'	=> $kategori,
		'caraousel'	=> $caraousel,
		'konten'	=> $konten
	);
	$this->load->view('blog',$data);																																									
} 
}