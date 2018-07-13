<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_assetori extends CI_Controller { 

	function __construct(){
		parent::__construct();
		$this->load->model('m_assetori');
		$this->load->helper('url');
		
	}

	public function data_kategori()
	{
		$data['tb_kategori']=$this->m_assetori->tampil_data('tb_kategori');
		$this->load->view('admin/header');
		$this->load->view('admin/v_datakategori',$data);
		$this->load->view('admin/footer');
	}


	public function tambah_kategori()
	{

		$data['tb_kategori']=$this->m_assetori->tampil_data('tb_kategori');
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahkategori',$data);
		$this->load->view('admin/footer');
	}

	public function aksi_inputkategori()
	{
		$kd_kategori	= $this->input->post('kd_kategori');
		$nm_kategori	= $this->input->post('nm_kategori');
		$deskripsi		= $this->input->post('deskripsi');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'kd_kategori'	=> $kd_kategori,		
			'nm_kategori'	=> $nm_kategori,
			'deskripsi'		=> $deskripsi,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_assetori->input_data($data,'tb_kategori');
		if($ber==1){
			redirect('admin/C_assetori/tambah_kategori');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_kategori($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori);
		$data['tb_kategori'] = $this->m_assetori->edit_data($where,'tb_kategori')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editkategori',$data);
		$this->load->view('admin/footer');
	}

	public function update_kategori()
	{
		$id_kategori	= $this->input->post('id_kategori');
		$kd_kategori	= $this->input->post('kd_kategori');
		$nm_kategori	= $this->input->post('nm_kategori');
		$deskripsi 		= $this->input->post('deskripsi');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_kategori'	=> $id_kategori,
			'kd_kategori'	=> $kd_kategori,
			'nm_kategori'	=> $nm_kategori,
			'deskripsi'		=> $deskripsi,
			'modified'		=> $date,
		);

		$where = array(
			'id_kategori' => $id_kategori
		);

		$this->m_assetori->update_data($where,$data,'tb_kategori');
		redirect('admin/C_assetori/data_kategori');
	}

	public function hapus_kategori($id_kategori)
	{
		$where = array(
			'id_kategori' => $id_kategori
		);

		$this->m_assetori->hapus_data($where,'tb_kategori');
		redirect('admin/c_assetori/data_kategori');
	}

	//data merk//
	public function data_merk()
	{
		$data['tb_merk']=$this->m_assetori->tampil_data('tb_merk');
		$this->load->view('admin/header');
		$this->load->view('admin/v_datamerk',$data);
		$this->load->view('admin/footer');
	}


	public function tambah_merk()
	{

		$data['tb_merk']=$this->m_assetori->tampil_data('tb_merk');
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahmerk',$data);
		$this->load->view('admin/footer');
	}

	public function aksi_inputmerk()
	{
		$kd_merk		= $this->input->post('kd_merk');
		$nm_merk		= $this->input->post('nm_merk');
		$catatan		= $this->input->post('catatan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'kd_merk'		=> $kd_merk,		
			'nm_merk'		=> $nm_merk,
			'catatan'		=> $catatan,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_assetori->input_data($data,'tb_merk');
		if($ber==1){
			redirect('admin/C_assetori/tambah_merk');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_merk($id_merk)
	{
		$where = array('id_merk' => $id_merk);
		$data['tb_merk'] = $this->m_assetori->edit_data($where,'tb_merk')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editmerk',$data);
		$this->load->view('admin/footer');
	}

	public function update_merk()
	{
		$id_merk		= $this->input->post('id_merk');
		$kd_merk		= $this->input->post('kd_merk');
		$nm_merk		= $this->input->post('nm_merk');
		$catatan 		= $this->input->post('catatan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_merk'		=> $id_merk,
			'kd_merk'		=> $kd_merk,
			'nm_merk'		=> $nm_merk,
			'catatan'		=> $catatan,
			'modified'		=> $date,
		);

		$where = array(
			'id_merk' => $id_merk
		);

		$this->m_assetori->update_data($where,$data,'tb_merk');
		redirect('admin/C_assetori/data_merk');
	}

	public function hapus_merk($id_merk)
	{
		$where = array(
			'id_merk' => $id_merk
		);

		$this->m_assetori->hapus_data($where,'tb_merk');
		redirect('admin/c_assetori/data_merk');
	}

	//data penanggung jawab//
	public function data_asset()
	{
		$data['tb_asset']=$this->m_assetori->tampil_data('tb_asset');
		$this->load->view('admin/header');
		$this->load->view('admin/v_asset',$data);
		$this->load->view('admin/footer');
	}


	public function tambah_asset()
	{

		$data['tb_asset']=$this->m_assetori->tampil_data('tb_asset');
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahasset',$data);
		$this->load->view('admin/footer');
	}

	public function aksi_inputasset()
	{
		$kd_pemilik		= $this->input->post('kd_pemilik');
		$nm_pemilik		= $this->input->post('nm_pemilik');
		$catatan		= $this->input->post('catatan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'kd_pemilik'	=> $kd_pemilik,		
			'nm_pemilik'	=> $nm_pemilik,
			'catatan'		=> $catatan,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_assetori->input_data($data,'tb_asset');
		if($ber==1){
			redirect('admin/C_assetori/tambah_asset');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_asset($id_asset)
	{
		$where = array('id_asset' => $id_asset);
		$data['tb_asset'] = $this->m_assetori->edit_data($where,'tb_asset')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editasset',$data);
		$this->load->view('admin/footer');
	}

	public function update_asset()
	{
		$id_asset		= $this->input->post('id_asset');
		$kd_pemilik		= $this->input->post('kd_pemilik');
		$nm_pemilik		= $this->input->post('nm_pemilik');
		$catatan 		= $this->input->post('catatan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_asset'		=> $id_asset,
			'kd_pemilik'	=> $kd_pemilik,
			'nm_pemilik'	=> $nm_pemilik,
			'catatan'		=> $catatan,
			'modified'		=> $date,
		);

		$where = array(
			'id_asset' => $id_asset
		);

		$this->m_assetori->update_data($where,$data,'tb_asset');
		redirect('admin/C_assetori/data_asset');
	}

	public function hapus_asset($id_asset)
	{
		$where = array(
			'id_asset' => $id_asset
		);

		$this->m_assetori->hapus_data($where,'tb_asset');
		redirect('admin/c_assetori/data_asset');
	}

	//data Inventori//
	public function data_inventori()
	{
		$data['tb_inventori']=$this->m_assetori->tampil_data('tb_inventori');
		$this->load->view('admin/header');
		$this->load->view('admin/v_datainventori',$data);
		$this->load->view('admin/footer');
	}


	public function tambah_inventori()
	{

		$data['tb_inventori']=$this->m_assetori->tampil_data('tb_inventori');
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahinventori',$data);
		$this->load->view('admin/footer');
	}

	public function aksi_inputinventori()
	{
		$kd_inventori	= $this->input->post('kd_inventori');
		$nm_barang		= $this->input->post('nm_barang');
		$catatan		= $this->input->post('catatan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'kd_inventori'	=> $kd_inventori,		
			'nm_barang'		=> $nm_barang,
			'catatan'		=> $catatan,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_assetori->input_data($data,'tb_inventori');
		if($ber==1){
			redirect('admin/C_assetori/tambah_inventori');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_inventori($id_inventori)
	{
		$where = array('id_inventori' => $id_inventori);
		$data['tb_inventori'] = $this->m_assetori->edit_data($where,'tb_inventori')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editinventori',$data);
		$this->load->view('admin/footer');
	}

	public function update_inventori()
	{
		$id_inventori	= $this->input->post('id_inventori');
		$kd_inventori	= $this->input->post('kd_inventori');
		$nm_barang		= $this->input->post('nm_barang');
		$catatan 		= $this->input->post('catatan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_inventori'	=> $id_inventori,
			'kd_inventori'	=> $kd_inventori,
			'nm_barang'		=> $nm_barang,
			'catatan'		=> $catatan,
			'modified'		=> $date,
		);

		$where = array(
			'id_inventori' => $id_inventori
		);

		$this->m_assetori->update_data($where,$data,'tb_inventori');
		redirect('admin/C_assetori/data_inventori');
	}

	public function hapus_inventori($id_inventori)
	{
		$where = array(
			'id_inventori' => $id_inventori
		);

		$this->m_assetori->hapus_data($where,'tb_inventori');
		redirect('admin/c_assetori/data_inventori');
	}
}
