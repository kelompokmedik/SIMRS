<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('Backoffice/header');
		$this->load->view('Backoffice/v_beranda');
		$this->load->view('Backoffice/footer');
	}

}
