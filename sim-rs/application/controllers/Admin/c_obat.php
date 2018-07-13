<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_obat extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_obat');
		$this->load->helper('url');
		
	}

	public function data_obat()
	{
		$data['tb_obat']=$this->m_obat->tampil_data('tb_obat');
		$this->load->view('admin/header');
		$this->load->view('admin/v_dataobat',$data);
		$this->load->view('admin/footer');
	}


	public function tambah_obat()
	{

		$data['tb_obat']=$this->m_obat->tampil_data('tb_obat');
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahobat',$data);
		$this->load->view('admin/footer');
	}

	public function aksi_inputobat()
	{
		$nm_obat		= $this->input->post('nm_obat');
		$jn_obat 		= $this->input->post('jn_obat');
		$satuan 		= $this->input->post('satuan');
		$hrg_beli 		= $this->input->post('hrg_beli');
		$ppn	 		= $this->input->post('ppn');
		$expire	 		= $this->input->post('expire');
		$stok_awal 		= $this->input->post('stok_awal');
		$stok_minimal 	= $this->input->post('stok_minimal');
		$aturan	 		= $this->input->post('aturan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'nm_obat'		=> $nm_obat,
			'jn_obat'		=> $jn_obat,
			'satuan'		=> $satuan,
			'hrg_beli'		=> $hrg_beli,
			'ppn'			=> $ppn,
			'expire'		=> $expire,
			'stok_awal'		=> $stok_awal,
			'stok_minimal'	=> $stok_minimal,
			'aturan'		=> $aturan,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_obat->input_data($data,'tb_obat');
		if($ber==1){
			redirect('admin/c_obat/tambah_obat');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_obat($id_obat)
	{
		$where = array('id_obat' => $id_obat);
		$data['tb_obat'] = $this->m_obat->edit_data($where,'tb_obat')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editobat',$data);
		$this->load->view('admin/footer');
	}

	public function update_obat()
	{
		$id_obat		= $this->input->post('id_obat');
		$nm_obat		= $this->input->post('nm_obat');
		$jn_obat 		= $this->input->post('jn_obat');
		$satuan 		= $this->input->post('satuan');
		$hrg_beli 		= $this->input->post('hrg_beli');
		$ppn 			= $this->input->post('ppn');
		$expire	 		= $this->input->post('expire');
		$stok_awal 		= $this->input->post('stok_awal');
		$stok_minimal 	= $this->input->post('stok_minimal');
		$aturan	 		= $this->input->post('aturan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_obat'		=> $id_obat,
			'nm_obat'		=> $nm_obat,
			'jn_obat'		=> $jn_obat,
			'satuan'		=> $satuan,
			'hrg_beli'		=> $hrg_beli,
			'ppn'			=> $ppn,
			'expire'		=> $expire,
			'stok_awal'		=> $stok_awal,
			'stok_minimal'	=> $stok_minimal,
			'aturan'		=> $aturan,
			'modified'		=> $date,
		);

		$where = array(
			'id_obat' => $id_obat
		);

		$this->m_obat->update_data($where,$data,'tb_obat');
		redirect('admin/c_obat/data_obat');
	}

	public function hapus_obat($id_obat)
	{
		$where = array(
			'id_obat' => $id_obat
		);

		$this->m_obat->hapus_data($where,'tb_obat');
		redirect('admin/c_obat/data_obat');
	}
}
