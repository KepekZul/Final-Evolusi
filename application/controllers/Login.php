<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function login_post()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		$this->load->model('admin_model');
		$login_stat = $this->admin_model->login($email, $pass);

		echo "$email $pass -$login_stat-";
		if ($login_stat == NULL) {
			header("Location: ../login");
		}
		elseif ($login_stat == 'trainer') {
			$this->session->set_userdata('role', $login_stat);
			$this->session->set_userdata('email_sess', $email);
			header("Location: ../trainer");
		}
		elseif ($login_stat == 'admin') {
			$this->session->set_userdata('role', $login_stat);
			$this->session->set_userdata('email_sess', $email);
			header("Location: ../trainer");
		}
		else {
			header("Location: ../login");
		}
		// elseif ($login_stat == 'member') {
		// 	$this->session->set_userdata('role', $login_stat);
		// 	$this->session->set_userdata('email_sess', $$email);
		// 	header("Location: ../forum");
		// }
	}

	public function logout()
	{
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('email_sess');
		header("Location: ../login");
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
