<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pensiun extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_pegawai');
		$this->load->model('m_pensiun');
		$this->load->helper('url');
		
	}

	public function data_pensiun()
	{
		$data['tb_pensiun']=$this->m_pensiun->tampil_data('tb_pensiun');
		$this->load->view('Backoffice/header');
		$this->load->view('Backoffice/v_pensiun',$data);
		$this->load->view('Backoffice/footer');
	}


	public function tambah_pensiun()
	{

		$data['tb_pegawai']=$this->m_pegawai->tampil_data('tb_pegawai');
		$this->load->view('Backoffice/header');
		$this->load->view('Backoffice/v_tambahpensiun',$data);
		$this->load->view('Backoffice/footer');
	}

	public function aksi_inputpensiun()
	{
		$nm_pegawai		= $this->input->post('nm_pegawai');
		$tgl_pensiun	= $this->input->post('tgl_pensiun');
		$catatan		= $this->input->post('catatan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'nm_pegawai'	=> $nm_pegawai,		
			'tgl_pensiun'	=> $tgl_pensiun,
			'catatan'		=> $catatan,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_pensiun->input_data($data,'tb_pensiun');
		if($ber==1){
			redirect('Backoffice/C_pensiun/tambah_pensiun');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_pensiun($id_pensiun)
	{
		$where = array('id_pensiun' => $id_pensiun);
		$data['tb_pegawai']=$this->m_pegawai->tampil_data('tb_pegawai');
		$data['tb_pensiun'] = $this->m_pensiun->edit_data($where,'tb_pensiun')->result();
		$this->load->view('Backoffice/header');
		$this->load->view('Backoffice/v_editpensiun',$data);
		$this->load->view('Backoffice/footer');
	}

	public function update_pensiun()
	{
		$id_pensiun		= $this->input->post('id_pensiun');
		$nm_pegawai		= $this->input->post('nm_pegawai');
		$tgl_pensiun	= $this->input->post('tgl_pensiun');
		$catatan 		= $this->input->post('catatan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_pensiun'	=> $id_pensiun,
			'nm_pegawai'	=> $nm_pegawai,
			'tgl_pensiun'	=> $tgl_pensiun,
			'catatan'		=> $catatan,
			'modified'		=> $date,
		);

		$where = array(
			'id_pensiun' => $id_pensiun
		);

		$this->m_pensiun->update_data($where,$data,'tb_pensiun');
		redirect('Backoffice/c_pensiun/data_pensiun');
	}

	public function hapus_user($id_pensiun)
	{
		$where = array(
			'id_pensiun' => $id_pensiun
		);

		$this->m_pensiun->hapus_data($where,'tb_pensiun');
		redirect('Backoffice/c_pensiun/data_pensiun');
	}
}
