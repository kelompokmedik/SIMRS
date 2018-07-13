<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_masterdata extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_masterdata');
		$this->load->helper('url');
	}

	public function data_jenjang()
	{
		$this->load->view('admin/header');
		$data['tb_jenjang']=$this->m_masterdata->tampil_data('tb_jenjang');
		$this->load->view('admin/v_datajenjang',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_jenjang()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahjenjang');
		$this->load->view('admin/footer');
	}

	public function input_jenjang()
	{
		$jenjang 	= $this->input->post('jenjang');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'jenjang'		=> $jenjang,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_masterdata->input_data($data,'tb_jenjang');
		if($ber==1){
			redirect('admin/c_masterdata/tambah_jenjang');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_jenjang($id_jenjang)
	{
		$where = array('id_jenjang' => $id_jenjang);
		$data['tb_jenjang'] = $this->m_masterdata->edit_data($where,'tb_jenjang')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editjenjang',$data);
		$this->load->view('admin/footer');
	}

	public function update_jenjang()
	{
		$id_jenjang			= $this->input->post('id_jenjang');
		$jenjang 	= $this->input->post('jenjang');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_jenjang'	=> $id_jenjang,
			'jenjang'		=> $jenjang,
			'modified'		=> $date,
		);

		$where = array(
			'id_jenjang' => $id_jenjang
		);

		$this->m_masterdata->update_data($where,$data,'tb_jenjang');
		redirect('admin/c_masterdata/data_jenjang');
	}

	public function hapus_jenjang($id_jenjang)
	{
		$where = array(
			'id_jenjang' => $id_jenjang
		);

		$this->m_masterdata->hapus_data($where,'tb_jenjang');
		redirect('admin/c_masterdata/data_jenjang');
	}

	//data jabatan//
	public function data_jabatan()
	{
		$this->load->view('admin/header');
		$data['tb_jabatan']=$this->m_masterdata->tampil_data('tb_jabatan');
		$this->load->view('admin/v_datajabatan',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_jabatan()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahjabatan');
		$this->load->view('admin/footer');
	}

	public function input_jabatan()
	{
		$jabatan 	= $this->input->post('jabatan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'jabatan'		=> $jabatan,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_masterdata->input_data($data,'tb_jabatan');
		if($ber==1){
			redirect('admin/c_masterdata/tambah_jabatan');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_jabatan($id_jabatan)
	{
		$this->load->view('admin/header');
		$where = array('id_jabatan' => $id_jabatan);
		$data['tb_jabatan'] = $this->m_masterdata->edit_data($where,'tb_jabatan')->result();
		$this->load->view('admin/v_editjabatan',$data);
		$this->load->view('admin/footer');
	}

	public function update_jabatan()
	{
		$id_jabatan		= $this->input->post('id_jabatan');
		$jabatan 		= $this->input->post('jabatan');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_jabatan'	=> $id_jabatan,
			'jabatan'		=> $jabatan,
			'modified'		=> $date,
		);

		$where = array(
			'id_jabatan' => $id_jabatan
		);

		$this->m_masterdata->update_data($where,$data,'tb_jabatan');
		redirect('admin/c_masterdata/data_jabatan');
	}

	public function hapus_jabatan($id_jabatan)
	{
		$where = array(
			'id_jabatan' => $id_jabatan
		);

		$this->m_masterdata->hapus_data($where,'tb_jabatan');
		redirect('admin/c_masterdata/data_jabatan');
	}

	//data poli//
	public function data_poli()
	{
		$this->load->view('admin/header');
		$data['tb_poli']=$this->m_masterdata->tampil_data('tb_poli');
		$this->load->view('admin/v_datapoli',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_poli()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahpoli');
		$this->load->view('admin/footer');
	}

	public function input_poli()
	{
		$poli 		= $this->input->post('poli');
		date_default_timezone_get('Asia/Makassar');
		$date 	 	= date("y-m-d h:i:s");

		$data = array(
			'poli'			=> $poli,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_masterdata->input_data($data,'tb_poli');
		if($ber==1){
			redirect('admin/c_masterdata/tambah_poli');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_poli($id_poli)
	{
		$where = array('id_poli' => $id_poli);
		$data['tb_poli'] = $this->m_masterdata->edit_data($where,'tb_poli')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editpoli',$data);
		$this->load->view('admin/footer');
	}

	public function update_poli()
	{
		$id_poli		= $this->input->post('id_poli');
		$poli			= $this->input->post('poli');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_poli'		=> $id_poli,
			'poli'			=> $poli,
			'modified'		=> $date,
		);

		$where = array(
			'id_poli' => $id_poli
		);

		$this->m_masterdata->update_data($where,$data,'tb_poli');
		redirect('admin/c_masterdata/data_poli');
	}

	public function hapus_poli($id_poli)
	{
		$where = array(
			'id_poli' => $id_poli
		);

		$this->m_masterdata->hapus_data($where,'tb_poli');
		redirect('admin/c_masterdata/data_poli');
	}

	//data spesialis//
	public function data_spesialis()
	{
		$this->load->view('admin/header');
		$data['tb_spesialis']=$this->m_masterdata->tampil_data('tb_spesialis');
		$this->load->view('admin/v_dataspesialis',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_spesialis()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahspesialis');
		$this->load->view('admin/footer');
	}

	public function input_spesialis()
	{
		$spesialis 		= $this->input->post('spesialis');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'spesialis'		=> $spesialis,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_masterdata->input_data($data,'tb_spesialis');
		if($ber==1){
			redirect('admin/c_masterdata/tambah_spesialis');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_spesialis($id_spesialis)
	{
		$where = array('id_spesialis' => $id_spesialis);
		$data['tb_spesialis'] = $this->m_masterdata->edit_data($where,'tb_spesialis')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editspesialis',$data);
		$this->load->view('admin/footer');
	}

	public function update_spesialis()
	{
		$id_spesialis	= $this->input->post('id_spesialis');
		$spesialis			= $this->input->post('spesialis');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_spesialis'	=> $id_spesialis,
			'spesialis'			=> $spesialis,
			'modified'		=> $date,
		);

		$where = array(
			'id_spesialis' => $id_spesialis
		);

		$this->m_masterdata->update_data($where,$data,'tb_spesialis');
		redirect('admin/c_masterdata/data_spesialis');
	}

	public function hapus_spesialis($id_spesialis)
	{
		$where = array(
			'id_spesialis' => $id_spesialis
		);

		$this->m_masterdata->hapus_data($where,'tb_spesialis');
		redirect('admin/c_masterdata/data_spesialis');
	}

	//data Departement//
	public function data_departement()
	{
		$this->load->view('admin/header');
		$data['tb_departement']=$this->m_masterdata->tampil_data('tb_departement');
		$this->load->view('admin/v_datadepartement',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_departement()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahdepartement');
		$this->load->view('admin/footer');
	}

	public function input_departement()
	{
		$departement 		= $this->input->post('departement');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'departement'		=> $departement,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_masterdata->input_data($data,'tb_departement');
		if($ber==1){
			redirect('admin/c_masterdata/tambah_departement');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_departement($id_departement)
	{
		$where = array('id_departement' => $id_departement);
		$data['tb_departement'] = $this->m_masterdata->edit_data($where,'tb_departement')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editdepartement',$data);
		$this->load->view('admin/footer');
	}

	public function update_departement()
	{
		$id_departement		= $this->input->post('id_departement');
		$departement		= $this->input->post('departement');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_departement'	=> $id_departement,
			'departement'		=> $departement,
			'modified'			=> $date,
		);

		$where = array(
			'id_departement' => $id_departement
		);

		$this->m_masterdata->update_data($where,$data,'tb_departement');
		redirect('admin/c_masterdata/data_departement');
	}

	public function hapus_departement($id_departement)
	{
		$where = array(
			'id_departement' => $id_departement
		);

		$this->m_masterdata->hapus_data($where,'tb_departement');
		redirect('admin/c_masterdata/data_departement');
	}

	//data Gedung//
	public function data_gedung()
	{
		$this->load->view('admin/header');
		$data['tb_gedung']=$this->m_masterdata->tampil_data('tb_gedung');
		$this->load->view('admin/v_datagedung',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_gedung()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahgedung');
		$this->load->view('admin/footer');
	}

	public function input_gedung()
	{
		$gedung 		= $this->input->post('gedung');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'gedung'		=> $gedung,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_masterdata->input_data($data,'tb_gedung');
		if($ber==1){
			redirect('admin/c_masterdata/tambah_gedung');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_gedung($id_gedung)
	{
		$where = array('id_gedung' => $id_gedung);
		$data['tb_gedung'] = $this->m_masterdata->edit_data($where,'tb_gedung')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editgedung',$data);
		$this->load->view('admin/footer');
	}

	public function update_gedung()
	{
		$id_gedung		= $this->input->post('id_gedung');
		$gedung			= $this->input->post('gedung');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_gedung'			=> $id_gedung,
			'gedung'			=> $gedung,
			'modified'			=> $date,
		);

		$where = array(
			'id_gedung' => $id_gedung
		);

		$this->m_masterdata->update_data($where,$data,'tb_gedung');
		redirect('admin/c_masterdata/data_gedung');
	}

	public function hapus_gedung($id_gedung)
	{
		$where = array(
			'id_gedung' => $id_gedung
		);

		$this->m_masterdata->hapus_data($where,'tb_gedung');
		redirect('admin/c_masterdata/data_gedung');
	}

	//data Ruang Rawat Inap//
	public function data_rawat()
	{
		$this->load->view('admin/header');
		$data['tb_rawat']=$this->m_masterdata->tampil_data('tb_rawat');
		$this->load->view('admin/v_datarawat',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_rawat()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahrawat');
		$this->load->view('admin/footer');
	}

	public function input_rawat()
	{
		$rawat 			= $this->input->post('rawat');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'rawat'			=> $rawat,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_masterdata->input_data($data,'tb_rawat');
		if($ber==1){
			redirect('admin/c_masterdata/tambah_rawat');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_rawat($id_rawat)
	{
		$where = array('id_rawat' => $id_rawat);
		$data['tb_rawat'] = $this->m_masterdata->edit_data($where,'tb_rawat')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editrawat',$data);
		$this->load->view('admin/footer');
	}

	public function update_rawat()
	{
		$id_rawat		= $this->input->post('id_rawat');
		$rawat			= $this->input->post('rawat');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_rawat'			=> $id_rawat,
			'rawat'				=> $rawat,
			'modified'			=> $date,
		);

		$where = array(
			'id_rawat' => $id_rawat
		);

		$this->m_masterdata->update_data($where,$data,'tb_rawat');
		redirect('admin/c_masterdata/data_rawat');
	}

	public function hapus_rawat($id_rawat)
	{
		$where = array(
			'id_rawat' => $id_rawat
		);

		$this->m_masterdata->hapus_data($where,'tb_rawat');
		redirect('admin/c_masterdata/data_rawat');
	}
}
