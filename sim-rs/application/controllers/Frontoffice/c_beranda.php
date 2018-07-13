<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('frontoffice/header');
		$this->load->view('frontoffice/v_beranda');
		$this->load->view('frontoffice/footer');
	}
}
