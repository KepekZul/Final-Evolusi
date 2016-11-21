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
			$this->load->view('admin/login');
		}
		elseif ($login_stat == 'trainer') {
			$this->session->set_userdata('role', $login_stat);
			$this->session->set_userdata('email_sess', $email);
			redirect('trainer/list');
		}
		elseif ($login_stat == 'admin') {
			$this->session->set_userdata('role', $login_stat);
			$this->session->set_userdata('email_sess', $email);
			redirect('trainer/list');
		}
		else {
			$this->load->view('admin/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('email_sess');
		$this->load->view('admin/login');
	}
}
