<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index($kategori, $start, $jumlah)
	{
		$data['aktif'] = "artikel";
		$this->load->view('include/header', $data);

		$this->load->model('Artikel_model');

		$data = array(
			'artikel' => $this->Artikel_model->list_artikel($kategori, $start, $jumlah),
			'jumlah' => $this->Artikel_model->jumlah_artikel($kategori),
			'awal' => $start,
			'akhir' => $start + $jumlah - 1
		 );
		$this->load->view('front_end/artikel', $data);

		$this->load->view('include/footer');
	}

	public function detail_artikel($id)
	{
		$data['aktif'] = "artikel";
		$this->load->view('include/header', $data);

		$this->load->model('Artikel_model');
		$data['artikel'] = $this->Artikel_model->detail_artikel($id);
		$this->load->view('artikel/detail', $data);

		$this->load->view('include/footer');
	}

	public function list_admin()
	{
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
			header('Location: ../login');
		}

		$this->load->model('Artikel_model');
		$data = array(
			'artikel' => $this->Artikel_model->list_all_artikel()
		 );
		 $this->load->view('artikel/list_admin', $data);

		if ($role == 'trainer') {
			$this->load->view('include/footer_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/footer_admin');
		}

	}

	public function tambah_artikel()
	{
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
			header('Location: ../login');
		}

		$this->load->view('artikel/tambah_artikel');

		if ($role == 'trainer') {
			$this->load->view('include/footer_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/footer_admin');
		}
	}

	public function post_artikel()
	{
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isi = $this->input->post('isi');

		$part = substr($judul, 0, 29);
		$part2 = str_replace(' ', '_', "$part");
		//start upload foto
		$this->load->library('upload');
		$nmfile = "FA_".$part2.".jpg";
		$dbname = "artikel/FA_".$part2.".jpg";
		$config['upload_path'] = './assets/images/artikel'; //path folder
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

		$this->load->model('Artikel_model');
		$this->Artikel_model->tambah_artikel($judul, $kategori, $isi, $dbname);

		header('Location: ../artikel/list_admin');
	}

	public function update_artikel()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isi = $this->input->post('isi');

		$this->load->model('Artikel_model');
		$this->Artikel_model->update_artikel($id, $judul, $kategori, $isi);

		header('Location: ../artikel/list_admin');
	}

	public function hapus_artikel($id)
	{
		$this->load->model('Artikel_model');
		$this->Artikel_model->hapus_artikel($id);

		header('Location: ../../artikel/list_admin');
	}

	/*
	--load view
	$this->load->view('file view');

	--load model
	$this->load->model('nama_model');
	$this->nama_model->nama_fungsi($parameter1, $parameter2);

	--get input
	$var = $this->input->get/post('name');

	--session
	$var = $this->session->set_userdata('nama_session', nilai);			-> set nilai session
	$this->session->unset_userdata('nama_session');						-> hapus session
	$var = $this->session->userdata('nama_session');					-> ambil nilai session

	--foreach (dapatkan nilai)
	foreach($variabel_hasil as $variable_dioutput)
	{
		$variable_dioutput->kolom;
	}
	*/
}
