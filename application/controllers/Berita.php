<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$this->load->model('Berita_model');
		$kategori = $this->uri->segment(3);
		$start = $this->uri->segment(4);
		$jumlah = $this->uri->segment(5);

		$data['aktif'] = "berita";
		
		$data = array(
			'berita' => $this->Berita_model->list_berita($kategori, $start, $jumlah),
			'jumlah' => $this->Berita_model->jumlah_berita($kategori),
			'awal' => $start,
			'akhir' => $start + $jumlah - 1
		 );

		$this->load->view('include/header', $data);
		$this->load->view('front_end/berita', $data);
		$this->load->view('include/footer');
	}

	public function detail_berita($id)
	{
		$this->load->model('Berita_model');
		$data['aktif'] = "berita";
		
		$data['berita'] = $this->Berita_model->detail_berita($id);

		$this->load->view('include/header', $data);
		$this->load->view('berita/detail', $data);
		$this->load->view('include/footer');
	}

	public function list_berita()
	{
		$this->load->model('Berita_model');
		$role = $this->session->userdata('role');
		if ($role == 'trainer') {
			$this->load->view('include/header_trainer');
			$this->load->view('include/menu_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/header_admin');
			$this->load->view('include/menu_admin');
		}
		elseif ($role == NULL) {
			$this->load->view('admin/login');
		}
		$data = array(
			'berita' => $this->Berita_model->list_all_berita()
		 );
		 $this->load->view('berita/list_berita', $data);

		if ($role == 'trainer') {
			$this->load->view('include/footer_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/footer_admin');
		}
	}

	public function tambah_berita()
	{
		$this->load->model('Berita_model');
		$role = $this->session->userdata('role');
		if ($role == 'trainer') {
			$this->load->view('include/header_trainer');
			$this->load->view('include/menu_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/header_admin');
			$this->load->view('include/menu_admin');
		}
		elseif ($role == NULL) {
			$this->load->view('admin/login');
		}

		$this->load->view('berita/tambah_berita');

		if ($role == 'trainer') {
			$this->load->view('include/footer_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/footer_admin');
		}
	}

	public function post_berita()
	{
		$this->load->model('Berita_model');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isi = $this->input->post('isi');

		$part = substr($judul, 0, 29);
		$part2 = str_replace(' ', '_', "$part");
		//start upload foto
		$this->load->library('upload');
		$nmfile = "FB_".$part2.".jpg";
		$dbname = "berita/FB_".$part2.".jpg";
		$config['upload_path'] = './assets/images/berita'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '2500'; //maksimum besar file 2M
		//$config['max_width']  = '1288'; //lebar maksimum 1288 px
		//$config['max_height']  = '768'; //tinggi maksimu 768 px
		$config['file_name'] = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);

		if($_FILES['foto']['name'])
		{
			if ($this->upload->do_upload('foto'))
			{
				$gbr = $this->upload->data();
				$this->session->set_userdata('foto', $gbr['file_name']);
			}
			//end of upload foto
		}
		$this->Berita_model->tambah_berita($judul, $kategori, $isi, $dbname);

		redirect('berita/list');
	}

	public function update_berita()
	{
		$this->load->model('Berita_model');
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isi = $this->input->post('isi');

		$this->Berita_model->update_berita($id, $judul, $kategori, $isi);

		redirect('berita/list');
	}

	public function hapus_berita($id)
	{
		$this->load->model('Berita_model');
		$this->Berita_model->hapus_berita($id);

		redirect('berita/list');
	}
}
