<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['aktif'] = "index";
		$this->load->view('include/header', $data);
		$this->load->view('front_end/index');
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

	public function sop()
	{
		$data['aktif'] = "sop";
		$this->load->view('include/header', $data);
		$this->load->view('front_end/sop');
		$this->load->view('include/footer');
	}
}
