<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Class_c extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
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
