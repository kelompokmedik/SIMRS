<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->helper('url');
		
	}

	public function data_user()
	{
		$data['tb_akun']=$this->m_admin->tampil_data('tb_akun');
		$this->load->view('admin/header');
		$this->load->view('admin/v_admin',$data);
		$this->load->view('admin/footer');
	}


	public function tambah_user()
	{
		$data['tb_akun']=$this->m_admin->tampil_data('tb_akun');
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahadmin');
		$this->load->view('admin/footer');
	}

	public function aksi_inputuser()
	{
		$username		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$hak_akses 		= $this->input->post('hak_akses');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'username'		=> $username,
			'password'		=> $password,
			'hak_akses'		=> $hak_akses,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_admin->input_data($data,'tb_akun');
		if($ber==1){
			redirect('admin/c_admin/tambah_user');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_user($id_akun)
	{
		$where = array('id_akun' => $id_akun);
		$data['tb_akun'] = $this->m_admin->edit_data($where,'tb_akun')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editadmin',$data);
		$this->load->view('admin/footer');
	}

	public function update_user()
	{
		$id_akun		= $this->input->post('id_akun');
		$username		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$hak_akses 		= $this->input->post('hak_akses');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_akun'		=> $id_akun,
			'username'		=> $username,
			'password'		=> $password,
			'hak_akses'		=> $hak_akses,
			'modified'		=> $date,
		);

		$where = array(
			'id_akun' => $id_akun
		);

		$this->m_admin->update_data($where,$data,'tb_akun');
		redirect('admin/c_admin/data_user');
	}

	public function hapus_user($id_akun)
	{
		$where = array(
			'id_akun' => $id_akun
		);

		$this->m_admin->hapus_data($where,'tb_akun');
		redirect('admin/c_admin/data_user');
	}
}
