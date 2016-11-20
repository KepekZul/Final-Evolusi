<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function list_forum()
	{
		$this->load->view('include/header_admin');
		$this->load->view('include/menu_admin');
		$this->load->view('admin/home');
		$this->load->view('include/footer_admin');
	}
}
