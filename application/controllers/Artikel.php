<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{
		$this->load->model('Artikel_model');
		$kategori = $this->uri->segment(3);
		$start = $this->uri->segment(4);
		$jumlah = $this->uri->segment(5);
		$data['aktif'] = "artikel";

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

		$data = array(
			'artikel' => $this->Artikel_model->list_artikel($kategori, $start, $jumlah),
			'jumlah' => $this->Artikel_model->jumlah_artikel($kategori),
			'awal' => $start,
			'akhir' => $start + $jumlah - 1
		 );
		$this->load->view('front_end/artikel', $data);
		$this->load->view('include/footer');
	}

	public function detail_artikel($id)
	{
		$this->load->model('Artikel_model');
		$data['aktif'] = "artikel";

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

		$data['artikel'] = $this->Artikel_model->detail_artikel($id);

		if($data['artikel'] == NULL)
		{
			redirect('artikel/list');
		}

		
		$this->load->view('artikel/detail', $data);
		$this->load->view('include/footer');
	}

	public function list_artikel()
	{
		$this->load->model('Artikel_model');
		$role = $this->session->userdata('role');
		if($role == NULL || $role == 'user') 
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
			'artikel' => $this->Artikel_model->list_all_artikel()
		 );
		 $this->load->view('artikel/list_artikel', $data);
		 $this->load->view('include/footer_user');

	}

	public function tambah_artikel()
	{
		$this->load->model('Artikel_model');
		$role = $this->session->userdata('role');
		if($role == NULL || $role == 'user') 
		{
			redirect('home');
		}
		else
		{
			$data['role'] = $role;
			$this->load->view('include/header_user', $data);
			$this->load->view('include/menu_user', $data);
		}

		$this->load->view('artikel/tambah_artikel');
		$this->load->view('include/footer_user');
	}

	public function post_artikel()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$this->load->model('Artikel_model');
			$judul = $this->input->post('judul');
			$kategori = $this->input->post('kategori');
			$isi = $this->input->post('isi');

			$part = substr($judul, 0, 29);
			$part2 = str_replace(' ', '_', "$part");
			//start upload foto
			$this->load->library('upload');
			$nmfile = "FA_".$part2.".jpg";
			$dbname = "artikel/FA_".$part2.".jpg";
			$config['upload_path'] = './assets/images/artikel'; //path folder
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

			$this->Artikel_model->tambah_artikel($judul, $kategori, $isi, $dbname);

			redirect('artikel/list');
		}
		elseif ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			redirect('artikel/list');
		}
	}

	public function update_artikel()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$this->load->model('Artikel_model');
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$kategori = $this->input->post('kategori');
			$isi = $this->input->post('isi');

			$part = substr($judul, 0, 29);
			$part2 = str_replace(' ', '_', "$part");
			//start upload foto
			$this->load->library('upload');
			$nmfile = "FA_".$part2.".jpg";
			$dbname = "artikel/FA_".$part2.".jpg";
			$config['upload_path'] = './assets/images/artikel'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['max_size'] = '2500'; //maksimum besar file 2M
			//$config['max_width']  = '1288'; //lebar maksimum 1288 px
			//$config['max_height']  = '768'; //tinggi maksimu 768 px
			$config['file_name'] = $nmfile; //nama yang terupload nantinya

			$this->upload->initialize($config);
			$this->upload->overwrite = true;

			if($_FILES['foto']['name'])
			{
				if ($this->upload->do_upload('foto'))
				{
					$gbr = $this->upload->data();
					$this->session->set_userdata('foto', $gbr['file_name']);
				}
				//end of upload foto
			}

			$this->Artikel_model->update_artikel($id, $judul, $kategori, $isi, $dbname);

			redirect('artikel/list');
		}
		elseif ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			redirect('artikel/list');
		}
	}

	public function hapus_artikel($id)
	{
		if($this->session->userdata('role') == NULL ||  $this->session->userdata('role') == 'user')
		{
			redirect('home');
		}

		$this->load->model('Artikel_model');

		$checkid = $this->Artikel_model->get_id($id);
		if($checkid == NULL)
		{
			redirect('artikel/list');
		}
		
		$this->Artikel_model->hapus_artikel($id);

		redirect('artikel/list');
	}
}
