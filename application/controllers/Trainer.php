<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainer extends CI_Controller {

	public function list_trainer()
	{
		$this->load->model('Trainer_model');
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
			'trainer' => $this->Trainer_model->list_all_trainer()
		 );
		 $this->load->view('trainer/list_trainer', $data);

		if ($role == 'trainer') {
			$this->load->view('include/footer_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/footer_admin');
		}
	}

	public function data_diri()
	{
		$this->load->model('Trainer_model');
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
			'trainer' => $this->Trainer_model
                ->detail_trainer($this->session->userdata('email_sess'))
		 );
		 $this->load->view('trainer/data_diri', $data);

		if ($role == 'trainer') {
			$this->load->view('include/footer_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/footer_admin');
		}
	}

	public function update_trainer()
	{
		$this->load->model('Trainer_model');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nrp = $this->input->post('NRP');
		$angkatan = $this->input->post('Angkatan');
		$jurusan = $this->input->post('jurusan');
		$fakultas = $this->input->post('Fakultas');
		$hp = $this->input->post('HP');
		$email = $this->input->post('Email');
		$asal_kota = $this->input->post('asal_kota');
		$asal_provinsi = $this->input->post('asal_provinsi');
		$line = $this->input->post('Line');
		$twitter = $this->input->post('twitter');
		$facebook = $this->input->post('Facebook');


		 $data = array(
        'nama' => $nama,
        'nrp'  => $nrp,
        'angkatan'  => $angkatan,
        'jurusan'  => $jurusan,
        'fakultas'  => $nrp,
        'hp'  => $hp,
        'email'  => $email,
        'asal_kota'  => $asal_kota,
        'asal_provinsi'  => $asal_provinsi,
        'line'  => $line,
        'twitter'  => $twitter,
        'facebook'  => $facebook
      	 );

		$this->Trainer_model->update_trainer($id, $data);

		if ($this->session->userdata('role') == 'trainer') {
			redirect('trainer/data');
		}
		elseif ($this->session->userdata('role') == 'admin') {
			redirect('trainer/list');
		}
	}

	public function tambah_trainer()
	{
		$this->load->model('Trainer_model');
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

		$this->load->view('trainer/tambah_trainer');

		if ($role == 'trainer') {
			$this->load->view('include/footer_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/footer_admin');
		}
	}

	public function post_trainer()
	{
		$this->load->model('Trainer_model');
		$nama = $this->input->post('nama');
		$nrp = $this->input->post('NRP');
		$angkatan = $this->input->post('Angkatan');
		$jurusan = $this->input->post('jurusan');
		$fakultas = $this->input->post('Fakultas');
		$hp = $this->input->post('HP');
		$email = $this->input->post('Email');
		$asal_kota = $this->input->post('asal_kota');
		$asal_provinsi = $this->input->post('asal_provinsi');
		$line = $this->input->post('Line');
		$twitter = $this->input->post('twitter');
		$facebook = $this->input->post('Facebook');
		$pass = $this->input->post('pass');


		$data = array(
        'nama' => $nama,
        'nrp'  => $nrp,
        'angkatan'  => $angkatan,
        'jurusan'  => $jurusan,
        'fakultas'  => $nrp,
        'hp'  => $hp,
        'email'  => $email,
        'asal_kota'  => $asal_kota,
        'asal_provinsi'  => $asal_provinsi,
        'line'  => $line,
        'twitter'  => $twitter,
        'facebook'  => $facebook,
      	 );
		$this->Trainer_model->tambah_trainer($data, $email, $pass);

		redirect('trainer/list');
	}

	public function hapus_trainer($id)
	{
		$this->load->model('Trainer_model');
		$this->Trainer_model->hapus_trainer($id);

		redirect('trainer/list');
	}
}
