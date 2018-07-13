<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('Admin/header');
		$this->load->view('Admin/v_beranda');
		$this->load->view('Admin/footer');
	}
}
