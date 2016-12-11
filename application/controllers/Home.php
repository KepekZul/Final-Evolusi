<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['aktif'] = "index";
		if($this->session->userdata('role') == 'user')
		{
			$data['authenticated'] = 3;
		}

		elseif($this->session->userdata('role') == 'admin')
		{
			$data['authenticated'] = 2;
		}
		elseif($this->session->userdata('role') == 'trainer')
		{
			$data['authenticated'] = 1;
		}
		else
		{
			$data['authenticated'] = 0;
		}
		$this->load->view('include/header', $data);
		$this->load->view('front_end/index');
		$this->load->view('include/footer');
	}

	public function about()
	{
		$data['aktif'] = "about";
		if($this->session->userdata('role') == 'user')
		{
			$data['authenticated'] = 3;
		}

		elseif($this->session->userdata('role') == 'admin')
		{
			$data['authenticated'] = 2;
		}
		elseif($this->session->userdata('role') == 'trainer')
		{
			$data['authenticated'] = 1;
		}
		else
		{
			$data['authenticated'] = 0;
		}
		$this->load->view('include/header', $data);
		$this->load->view('front_end/about-us');
		$this->load->view('include/footer');
	}

	public function anggota()
	{
		$data['aktif'] = "anggota";
		if($this->session->userdata('role') == 'user')
		{
			$data['authenticated'] = 3;
		}

		elseif($this->session->userdata('role') == 'admin')
		{
			$data['authenticated'] = 2;
		}
		elseif($this->session->userdata('role') == 'trainer')
		{
			$data['authenticated'] = 1;
		}
		else
		{
			$data['authenticated'] = 0;
		}
		$this->load->view('include/header', $data);
		$this->load->view('front_end/anggota');
		$this->load->view('include/footer');
	}

	public function sop()
	{
		$data['aktif'] = "sop";
		if($this->session->userdata('role') == 'user')
		{
			$data['authenticated'] = 3;
		}

		elseif($this->session->userdata('role') == 'admin')
		{
			$data['authenticated'] = 2;
		}
		elseif($this->session->userdata('role') == 'trainer')
		{
			$data['authenticated'] = 1;
		}
		else
		{
			$data['authenticated'] = 0;
		}
		$this->load->view('include/header', $data);
		$this->load->view('front_end/sop');
		$this->load->view('include/footer');
	}

	public function register()
	{
		$data['aktif'] = "registrasi";
		if($this->session->userdata('role') == 'user')
		{
			$data['authenticated'] = 3;
		}

		elseif($this->session->userdata('role') == 'admin')
		{
			$data['authenticated'] = 2;
		}
		elseif($this->session->userdata('role') == 'trainer')
		{
			$data['authenticated'] = 1;
		}
		else
		{
			$data['authenticated'] = 0;
		}
		$this->load->view('include/header', $data);
		$this->load->view('front_end/register');
		$this->load->view('include/footer');
	}
}
