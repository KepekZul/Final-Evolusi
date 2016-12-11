<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function form()
	{
		$session_data = $this->session->userdata('role');
		if($session_data == NULL)
		{
			$this->load->view('admin/login');
		}
		else
		{
			redirect('trainer/list');
		}
	}

	public function register()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$this->load->model('User_model');

			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			$vpass = $this->input->post('vpass');
			$nama = $this->input->post('nama');
			$nrp = $this->input->post('nrp');
			$jurusan = $this->input->post('jurusan');
			$fakultas = $this->input->post('fakultas');
			$angkatan = $this->input->post('angkatan');
			$alamat = $this->input->post('alamat');
			$hp = $this->input->post('hp');

			$checkemail = $this->User_model->checkemail($email);
			$checknrp = $this->User_model->checknrp($nrp);
			$checkhp = $this->User_model->checkhp($hp);

			if(!empty($checkemail))
			{
				$this->session->set_flashdata('fail', 'Email sudah terdaftar sebelumnya');
				redirect('registrasi');
  			}

			if(!empty($checknrp))
			{
				$this->session->set_flashdata('fail', 'NRP sudah terdaftar sebelumnya');
				redirect('registrasi');
  			}

			if(!empty($checkhp))
			{
				$this->session->set_flashdata('fail', 'Nomor HP sudah terdaftar sebelumnya');
				redirect('registrasi');
  			}

			if($pass == $vpass)
			{
				$data = array(
					'email' => $email,
					'nama' => $nama,
					'nrp' => $nrp,
					'jurusan' => $jurusan,
					'fakultas' => $fakultas,
					'angkatan' => $angkatan,
					'alamat' => $alamat,
					'hp' => $hp
				);

				$user = array(
					'email' => $email,
					'pass' => md5($pass),
					'role' => 'user'
				);

				
				$this->User_model->register($data, $user);

				$this->session->set_flashdata('success', 'Berhasil. Silahkan Login');
				redirect('registrasi');
			}
			else
			{
				$this->session->set_flashdata('fail', 'Konfirmasi pasword salah. Mohon ulangi lagi');
				redirect('registrasi');
			}
			
		}
		elseif ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			redirect('home');
		}
	}

	public function login_post()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');

			$this->load->model('admin_model');
			$login_stat = $this->admin_model->login($email, $pass);

			if ($login_stat == NULL) {
				$this->session->set_flashdata('fail', 'Pengisian salah. Mohon ulangi lagi');
				redirect('loginform');
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
			elseif ($login_stat == 'user') {
				$this->session->set_userdata('role', $login_stat);
				$this->session->set_userdata('email_sess', $email);
				redirect('user/data');
			
			}
			else {
				$this->load->view('admin/login');
			}
		}
		elseif ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			redirect('home');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('email_sess');
		redirect('home');
	}
}
