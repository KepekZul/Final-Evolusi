<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainer extends CI_Controller {

	public function index()
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

		$this->load->model('Trainer_model');
		$data = array(
			'trainer' => $this->Trainer_model->list_all_trainer()
		 );
		 $this->load->view('trainer/list_admin', $data);

		if ($role == 'trainer') {
			$this->load->view('include/footer_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/footer_admin');
		}

	}

	public function data_diri()
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

		$this->load->model('Trainer_model');
		$data = array(
			'trainer' => $this->Trainer_model->detail_trainer($this->session->userdata('email_sess'))
		 );
		 echo $this->session->userdata('email_sess');
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

		// echo $id;
		// echo $nama;
		// echo $nrp;
		// echo $angkatan;
		// echo $jurusan;
		// echo $fakultas;
		// echo $hp;
		// echo $email;
		// echo $asal_kota;
		// echo $asal_provinsi;
		// echo $line;
		// echo $twitter;
		// echo $facebook;

		$this->load->model('Trainer_model');
		$this->Trainer_model->update_trainer(
      $id, $nama, $nrp, $angkatan, $jurusan, $fakultas, $hp, $email, $asal_kota, $asal_provinsi, $line, $twitter, $facebook
    );

		if ($this->session->userdata('role') == 'trainer') {
			header('Location: ../trainer/data_diri');
		}
		elseif ($this->session->userdata('role') == 'admin') {
			header('Location: ../trainer');
		}
	}

	public function tambah_trainer()
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
		$pass = $this->input->post('pass');

		$this->load->model('Trainer_model');
		$this->Trainer_model->tambah_trainer(
      $nama, $nrp, $angkatan, $jurusan, $fakultas, $hp, $email, $asal_kota, $asal_provinsi, $line, $twitter, $facebook
    );

		header('Location: ../trainer');
	}

	public function hapus_trainer($id)
	{
		$this->load->model('Trainer_model');
		$this->Trainer_model->hapus_trainer($id);

		header('Location: ../../trainer');
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
