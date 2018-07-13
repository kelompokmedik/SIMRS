<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('dokter/header');
		$this->load->view('dokter/v_beranda');
		$this->load->view('dokter/footer');
	}
}
