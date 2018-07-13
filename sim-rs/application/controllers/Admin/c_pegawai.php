<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pegawai extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_masterdata');
		$this->load->model('m_pegawai');
		$this->load->helper('url');
		
	}

	public function data_pegawai()
	{
		$data['tb_pegawai']=$this->m_pegawai->tampil_data('tb_pegawai');
		$this->load->view('admin/header');
		$this->load->view('admin/v_pegawai',$data);
		$this->load->view('admin/footer');
	}


	public function tambah_pegawai()
	{

		$data['tb_jabatan']=$this->m_masterdata->tampil_data('tb_jabatan');
		$this->load->view('admin/header');
		$this->load->view('admin/v_tambahpegawai',$data);
		$this->load->view('admin/footer');
	}

	public function aksi_inputpegawai()
	{
		$nm_pegawai		= $this->input->post('nm_pegawai');
		$no_ktp 		= $this->input->post('no_ktp');
		$pangkat 		= $this->input->post('pangkat');
		$jabatan 		= $this->input->post('jabatan');
		$alamat 		= $this->input->post('alamat');
		$telp	 		= $this->input->post('telp');
		$tmpt_lahir 	= $this->input->post('tmpt_lahir');
		$tgl_lahir 		= $this->input->post('tgl_lahir');
		$agama	 		= $this->input->post('agama');
		$pddkn_terakhir = $this->input->post('pddkn_terakhir');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'nm_pegawai'	=> $nm_pegawai,
			'no_ktp'		=> $no_ktp,
			'pangkat'		=> $pangkat,
			'jabatan'		=> $jabatan,
			'alamat'		=> $alamat,
			'telp'			=> $telp,
			'pangkat'		=> $pangkat,
			'tmpt_lahir'	=> $tmpt_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'agama'			=> $agama,
			'pddkn_terakhir'=> $pddkn_terakhir,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_pegawai->input_data($data,'tb_pegawai');
		if($ber==1){
			redirect('admin/c_pegawai/tambah_pegawai');
		}
		else{
			echo "gagal";
		}
	}

	public function edit_pegawai($id_pegawai)
	{
		$where = array('id_pegawai' => $id_pegawai);
		$data['tb_jabatan']=$this->m_masterdata->tampil_data('tb_jabatan');
		$data['tb_pegawai'] = $this->m_pegawai->edit_data($where,'tb_pegawai')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/v_editpegawai',$data);
		$this->load->view('admin/footer');
	}

	public function update_pegawai()
	{
		$id_pegawai		= $this->input->post('id_pegawai');
		$nm_pegawai		= $this->input->post('nm_pegawai');
		$no_ktp 		= $this->input->post('no_ktp');
		$pangkat 		= $this->input->post('pangkat');
		$jabatan 		= $this->input->post('jabatan');
		$alamat 		= $this->input->post('alamat');
		$telp	 		= $this->input->post('telp');
		$tmpt_lahir 	= $this->input->post('tmpt_lahir');
		$tgl_lahir 		= $this->input->post('tgl_lahir');
		$agama	 		= $this->input->post('agama');
		$pddkn_terakhir = $this->input->post('pddkn_terakhir');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_pegawai'	=> $id_pegawai,
			'nm_pegawai'	=> $nm_pegawai,
			'no_ktp'		=> $no_ktp,
			'pangkat'		=> $pangkat,
			'jabatan'		=> $jabatan,
			'alamat'		=> $alamat,
			'telp'			=> $telp,
			'pangkat'		=> $pangkat,
			'tmpt_lahir'	=> $tmpt_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'agama'			=> $agama,
			'pddkn_terakhir'=> $pddkn_terakhir,
			'modified'		=> $date,
		);

		$where = array(
			'id_pegawai' => $id_pegawai
		);

		$this->m_pegawai->update_data($where,$data,'tb_pegawai');
		redirect('admin/c_pegawai/data_pegawai');
	}

	public function hapus_pegawai($id_pegawai)
	{
		$where = array(
			'id_pegawai' => $id_pegawai
		);

		$this->m_pegawai->hapus_data($where,'tb_pegawai');
		redirect('admin/c_pegawai/data_pegawai');
	}
}
