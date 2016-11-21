<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lomba extends CI_Controller {

	public function index()
	{
		$this->load->model('Lomba_model');
		$kategori = $this->uri->segment(3);
		$start = $this->uri->segment(4);
		$jumlah = $this->uri->segment(5);
		$data['aktif'] = "lomba";
		$this->load->view('include/header', $data);

		$data = array(
			'lomba' => $this->Lomba_model->list_lomba($kategori, $start, $jumlah),
			'jumlah' => $this->Lomba_model->jumlah_lomba($kategori),
			'awal' => $start,
			'akhir' => $start + $jumlah - 1
		 );

		$this->load->view('front_end/lomba', $data);
		$this->load->view('include/footer');
	}

	public function detail_lomba($id)
	{
		$this->load->model('Lomba_model');
		$data['aktif'] = "lomba";

		$data['lomba'] = $this->Lomba_model->detail_lomba($id);

		$this->load->view('include/header', $data);
		$this->load->view('lomba/detail', $data);
		$this->load->view('include/footer');
	}

	public function list_lomba()
	{
		$this->load->model('Lomba_model');
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

		$this->load->model('Lomba_model');
		$data = array(
			'lomba' => $this->Lomba_model->list_all_lomba()
		 );
		 $this->load->view('lomba/list_lomba', $data);

		if ($role == 'trainer') {
			$this->load->view('include/footer_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/footer_admin');
		}
	}

	public function tambah_lomba()
	{
		$this->load->model('Lomba_model');
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

		$this->load->view('lomba/tambah_lomba');

		if ($role == 'trainer') {
			$this->load->view('include/footer_trainer');
		}
		elseif ($role == 'admin') {
			$this->load->view('include/footer_admin');
		}
	}

	public function post_lomba()
	{
		$this->load->model('Lomba_model');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isi = $this->input->post('isi');

		$part = substr($judul, 0, 29);
		$part2 = str_replace(' ', '_', "$part");
		//start upload foto
		$this->load->library('upload');
		$nmfile = "FL_".$part2.".jpg";
		$dbname = "lomba/FL_".$part2.".jpg";
		$config['upload_path'] = './assets/images/lomba'; //path folder
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
		$this->Lomba_model->tambah_lomba($judul, $kategori, $isi, $dbname);

		redirect('lomba/list');
	}

	public function update_lomba()
	{
		$this->load->model('Lomba_model');
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$isi = $this->input->post('isi');

		$this->Lomba_model->update_lomba($id, $judul, $kategori, $isi);

		redirect('lomba/list');
	}

	public function hapus_lomba($id)
	{
		$this->load->model('Lomba_model');
		$this->Lomba_model->hapus_lomba($id);

		redirect('lomba/list');;
	}
}
