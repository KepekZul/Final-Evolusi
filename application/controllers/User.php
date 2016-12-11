<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function list_user()
	{
		$this->load->model('User_model');
		$role = $this->session->userdata('role');
		if($role == NULL || $role != 'admin') 
		{
			redirect('home');
		}
		else
		{
			$data['role'] = $role;
			$this->load->view('include/header_user', $data);
			$this->load->view('include/menu_user', $data);
		}

		$data = array(
			'user' => $this->User_model->list_all_user()
		 );
		 $this->load->view('user/list_user', $data);
 		 $this->load->view('include/footer_user');
	}

	public function data_diri()
	{
		$this->load->model('User_model');
		$role = $this->session->userdata('role');
		if($role == NULL || $role != 'user') 
		{
			redirect('home');
		}
		elseif($role == 'user')
		{
			$data['role'] = $role;
			$this->load->view('include/header_user', $data);
			$this->load->view('include/menu_user', $data);
		}

		$data = array(
			'user' => $this->User_model->detail_user($this->session->userdata('email_sess'))
		 );

		 $this->load->view('user/data_diri', $data);
		 $this->load->view('include/footer_user');
	}

	public function request_training()
	{
		$this->load->model('User_model');
		$role = $this->session->userdata('role');
		if($role == NULL || $role != 'user') 
		{
			redirect('home');
		}
		elseif($role == 'user')
		{
			$data['role'] = $role;
			$this->load->view('include/header_user', $data);
			$this->load->view('include/menu_user', $data);
			$this->load->view('user/request_form');
		 	$this->load->view('include/footer_user');
		}
	}

	public function request_list()
	{
		$this->load->model('User_model');
		$role = $this->session->userdata('role');
		if($role == NULL) 
		{
			redirect('home');
		}
		else
		{
			$data['role'] = $role;
			$this->load->view('include/header_user', $data);
			$this->load->view('include/menu_user', $data);
		}

		if($role == 'user')
		{
			$data = array(
				'user' => $this->User_model->list_request($this->session->userdata('email_sess'))
			);
		}
		else
		{
			$data = array(
				'user' => $this->User_model->list_requests()
			);
		}

		$this->load->view('user/list_request', $data);
		$this->load->view('include/footer_user');
	}

	public function request_detail($id)
	{
		$this->load->model('User_model');
		$role = $this->session->userdata('role');

		$checkid = $this->User_model->get_requestid($id);
		if($checkid == NULL)
		{
			redirect('user/request_list');
		}
		
		$data['role'] = $role;
		$this->load->view('include/header_user', $data);
		$this->load->view('include/menu_user', $data);

		$data = array(
				'user' => $this->User_model->request_detail($id),
				'role' =>  $role
			);

		$this->load->view('user/request_detail', $data);
		$this->load->view('include/footer_user');
	}

	public function request_process()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$this->load->model('User_model');
			
			$nama = $this->input->post('nama');
			$mulai = $this->input->post('mulai');
			$selesai = $this->input->post('selesai');
			$lokasi = $this->input->post('lokasi');
			$deskripsi = $this->input->post('deskripsi');
			$cp = $this->input->post('cp');
			$email = $this->session->userdata('email_sess');
			
			$mulai2 = date('Y-m-d', strtotime($mulai));
			$selesai2 = date('Y-m-d', strtotime($selesai));

			$data = array(
			'email' => $email,
			'nama' => $nama,
			'tanggal_mulai'  => $mulai2,
			'tanggal_selesai'  => $selesai2,
			'lokasi'  => $lokasi,
			'cp'  => $cp,
			'deskripsi'  => $deskripsi
			);

			$this->User_model->tambah_request($data);

			$this->session->set_flashdata('success', 'Request Berhasil. Silahkan tunggu respon dari kami dengan mengakses tab List Request');
			redirect('user/request_training');
		}
		elseif ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			redirect('home');
		}
	}

	public function request_terima($id)
	{
		$this->load->model('User_model');
		$role = $this->session->userdata('role');

		if($role == NULL || $role != 'trainer' ) 
		{
			redirect('home');
		}

		$checkid = $this->User_model->get_requestid($id);
		if($checkid == NULL)
		{
			redirect('user/request_list');
		}
		

		$confirmer = $this->User_model->get_confirmedby($this->session->userdata('email_sess'));

		$this->User_model->request_terima($id, $confirmer->nama, $confirmer->hp);
		
		redirect('user/request_detail/'.$id);  
	}

	public function request_tolak($id)
	{
		$this->load->model('User_model');
		$role = $this->session->userdata('role');

		if($role == NULL || $role != 'trainer' ) 
		{
			redirect('home');
		}
		
		$checkid = $this->User_model->get_requestid($id);
		if($checkid == NULL)
		{
			redirect('user/request_list');
		}

		$confirmer = $this->User_model->get_confirmedby($this->session->userdata('email_sess'));

		$this->User_model->request_tolak($id, $confirmer->nama, $confirmer->hp);
		
		redirect('user/request_detail/'.$id);  
	}

	public function update_user()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$this->load->model('User_model');
			
			$email = $this->input->post('email');
			$nama = $this->input->post('nama');
			$nrp = $this->input->post('nrp');
			$angkatan = $this->input->post('angkatan');
			$jurusan = $this->input->post('jurusan');
			$fakultas = $this->input->post('fakultas');
			$hp = $this->input->post('hp');
			$alamat = $this->input->post('alamat');
			


			$data = array(
			'nama' => $nama,
			'nrp'  => $nrp,
			'angkatan'  => $angkatan,
			'jurusan'  => $jurusan,
			'fakultas'  => $fakultas,
			'hp'  => $hp,
			'alamat'  => $alamat
			);

			$this->User_model->update_user($email, $data);

			if ($this->session->userdata('role') == 'user') 
			{
				redirect('user/data_diri');
			}
			elseif ($this->session->userdata('role') == 'admin') 
			{
				redirect('user/list');
			}
		}
		elseif ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			redirect('home');
		}
	}

	

	public function hapus_user($email)
	{
		$this->load->model('User_model');

		if($this->session->userdata('role') == NULL ||  $this->session->userdata('role') != 'admin')
		{
			redirect('home');
		}

		$checkid = $this->User_model->get_userid($email);
		if($checkid == NULL)
		{
			redirect('user/list');
		}

		$this->load->model('User_model');
		$this->User_model->hapus_user($email);

		redirect('user/list');
	}
}
