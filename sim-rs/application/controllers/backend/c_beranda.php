<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/v_beranda');
		$this->load->view('backend/footer');
	}
}
