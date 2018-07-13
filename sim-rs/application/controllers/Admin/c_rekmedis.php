<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rekmedis extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_rekmedis');
		$this->load->helper('url');
		
	}

	public function data_rekmedis()
	{
		$data['tb_regpasien']=$this->m_rekmedis->tampil_data('tb_regpasien');
		$this->load->view('admin/header');
		$this->load->view('admin/v_rekmedis',$data);
		$this->load->view('admin/footer');
	}

	public function detail_rekmedis()
	{
		/*$where = array('id_reg' => $id_reg);
		$data['tb_regpasien'] = $this->m_regpasien->edit_data($where,'tb_regpasien')->result();*/
		$this->load->view('Admin/header');
		$this->load->view('Admin/v_detailrekmedis');
		$this->load->view('Admin/footer');
	}


	/*public function tambah_pensiun()
	{

		$data['tb_pegawai']=$this->m_pegawai->tampil_data('tb_pegawai');
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahpensiun',$data);
		$this->load->view('admin/footer');
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
			redirect('admin/C_pensiun/tambah_pensiun');
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
		$this->load->view('admin/header');
		$this->load->view('admin/v_editpensiun',$data);
		$this->load->view('admin/footer');
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
		redirect('admin/c_pensiun/data_pensiun');
	}

	public function hapus_user($id_pensiun)
	{
		$where = array(
			'id_pensiun' => $id_pensiun
		);

		$this->m_pensiun->hapus_data($where,'tb_pensiun');
		redirect('admin/c_pensiun/data_pensiun');
	}*/
}
