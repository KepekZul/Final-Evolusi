<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['aktif'] = "index";
		$this->load->view('include/header', $data);

		$this->load->model('Berita_model');
		$data['berita'] = $this->Berita_model->list_berita('all', 1, 3);

		$this->load->model('Lomba_model');
		$data['lomba'] = $this->Lomba_model->list_lomba('all', 1, 4);
		$this->load->view('front_end/index', $data);

		$this->load->view('include/footer');
	}

	public function about()
	{
		$data['aktif'] = "about";
		$this->load->view('include/header', $data);
		$this->load->view('front_end/about-us');
		$this->load->view('include/footer');
	}

	public function anggota()
	{
		$data['aktif'] = "anggota";
		$this->load->view('include/header', $data);
		$this->load->view('front_end/anggota');
		$this->load->view('include/footer');
	}

	public function artikel($kategori, $start, $jumlah)
	{
		$data['aktif'] = "artikel";
		$this->load->view('include/header', $data);

		$this->load->model('Artikel_model');
		$data['artikel'] = $this->Artikel_model->list_artikel($kategori, $start, $jumlah);
		$this->load->view('front_end/artikel', $data);

		$this->load->view('include/footer');
	}

	public function berita()
	{
		$data['aktif'] = "berita";
		$this->load->view('include/header', $data);
		$this->load->view('front_end/berita');
		$this->load->view('include/footer');
	}

	public function galeri()
	{
		$data['aktif'] = "galeri";
		$this->load->view('include/header', $data);
		$this->load->view('front_end/galeri');
		$this->load->view('include/footer');
	}

	public function lomba()
	{
		$data['aktif'] = "lomba";
		$this->load->view('include/header', $data);
		$this->load->view('front_end/lomba');
		$this->load->view('include/footer');
	}

	public function sop()
	{
		$data['aktif'] = "sop";
		$this->load->view('include/header', $data);
		$this->load->view('front_end/sop');
		$this->load->view('include/footer');
	}


	public function testing()
	{
		echo "haloo";
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