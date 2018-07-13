<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => $password
		);

		$cek = $this->m_login->cek_login('tb_akun',$where);
		if($cek->num_rows() > 0){
			foreach ($cek->result() as $row) {
			
				$data_session = array(
					'username' => $username,
					'password' => $password,
					'hak_akses'=> $row->hak_akses,
					'id'	   => $row->id,
				);
				$this->session->set_userdata($data_session);

				$qad = $cek->row();
				if($username == $qad->username && $password == $qad->password){
					if($qad->hak_akses == 'admin')
						redirect('Admin/c_beranda');
					elseif ($qad->hak_akses == 'dokter') 
						redirect('Dokter/c_beranda');
					elseif ($qad->hak_akses == 'front office') 
						redirect('Frontoffice/c_beranda');
					elseif ($qad->hak_akses == 'back office') 
						redirect('backoffice/c_beranda');
					}
				}
			}
			else
			{
				redirect("c_login");
			}
		}

	function logout(){
		$this->session->sess_destroy();
		redirect('c_login');
	}
}

