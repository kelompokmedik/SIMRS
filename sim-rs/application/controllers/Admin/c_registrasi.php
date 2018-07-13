<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_registrasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_regpasien');
		$this->load->helper('url');
		
	}

	public function datapasien()
	{
		$data['tb_regpasien']=$this->m_regpasien->tampil_data('tb_regpasien');
		$this->load->view('Admin/header');
		$this->load->view('Admin/v_datapasien',$data);
		$this->load->view('Admin/footer');
	}

	public function view_detail($id_reg)
	{
		$where = array('id_reg' => $id_reg);
		$data['tb_regpasien'] = $this->m_regpasien->edit_data($where,'tb_regpasien')->result();
		$this->load->view('Admin/header');
		$this->load->view('Admin/v_detail',$data);
		$this->load->view('Admin/footer');
	}

	public function inputdatapasien()
	{
		$data['tb_regpasien']=$this->m_regpasien->tampil_data('tb_regpasien');
		$this->load->view('Admin/header');
		$this->load->view('Admin/v_inputdatapasien');
		$this->load->view('Admin/footer');
	}

	public function aksi_inputdata()
	{
		$no_rekmedis 	= $this->input->post('no_rekmedis');
		$nm_pasien 		= $this->input->post('nm_pasien');
		$jk		 		= $this->input->post('jk');
		$gol_darah		= $this->input->post('gol_darah');
		$tmpt_lahir		= $this->input->post('tmpt_lahir');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$nm_ibu		 	= $this->input->post('nm_ibu');
		$alamat			= $this->input->post('alamat');
		$agama		 	= $this->input->post('agama');
		$no_hp		 	= $this->input->post('no_hp');
		$pekerjaan		= $this->input->post('pekerjaan');
		$stts_menikah	= $this->input->post('stts_menikah');
		$jaminan_pasien	= $this->input->post('jaminan_pasien');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'no_rekmedis'	=> $no_rekmedis,
			'nm_pasien'		=> $nm_pasien,
			'jk'			=> $jk,
			'gol_darah'		=> $gol_darah,
			'tmpt_lahir'	=> $tmpt_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'nm_ibu'		=> $nm_ibu,
			'alamat'		=> $alamat,
			'agama'			=> $agama,
			'no_hp'			=> $no_hp,
			'pekerjaan'		=> $pekerjaan,
			'stts_menikah'	=> $stts_menikah,
			'jaminan_pasien'=> $jaminan_pasien,
			'created'		=> $date,
			'modified'		=> $date,
		);

		$ber = $this->m_regpasien->input_data($data,'tb_regpasien');
		if($ber==1){
			redirect('Admin/c_registrasi/inputdatapasien');
		}
		else{
			echo "gagal";
		}
	}

	public function editdatapasien($id_reg)
	{
		$where = array('id_reg' => $id_reg);
		$data['tb_regpasien'] = $this->m_regpasien->edit_data($where,'tb_regpasien')->result();
		$this->load->view('Admin/header');
		$this->load->view('Admin/v_editdatapasien',$data);
		$this->load->view('Admin/footer');
	}

	public function update_datapasien()
	{
		$id_reg			= $this->input->post('id_reg');
		$no_rekmedis 	= $this->input->post('no_rekmedis');
		$nm_pasien 		= $this->input->post('nm_pasien');
		$jk		 		= $this->input->post('jk');
		$gol_darah		= $this->input->post('gol_darah');
		$tmpt_lahir		= $this->input->post('tmpt_lahir');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$nm_ibu		 	= $this->input->post('nm_ibu');
		$alamat			= $this->input->post('alamat');
		$agama		 	= $this->input->post('agama');
		$no_hp		 	= $this->input->post('no_hp');
		$pekerjaan		= $this->input->post('pekerjaan');
		$stts_menikah	= $this->input->post('stts_menikah');
		$jaminan_pasien	= $this->input->post('jaminan_pasien');
		date_default_timezone_get('Asia/Makassar');
		$date 	 		= date("y-m-d h:i:s");

		$data = array(
			'id_reg'		=> $id_reg,
			'no_rekmedis'	=> $no_rekmedis,
			'nm_pasien'		=> $nm_pasien,
			'jk'			=> $jk,
			'gol_darah'		=> $gol_darah,
			'tmpt_lahir'	=> $tmpt_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'nm_ibu'		=> $nm_ibu,
			'alamat'		=> $alamat,
			'agama'			=> $agama,
			'no_hp'			=> $no_hp,
			'pekerjaan'		=> $pekerjaan,
			'stts_menikah'	=> $stts_menikah,
			'jaminan_pasien'=> $jaminan_pasien,
			'modified'		=> $date,
		);

		$where = array(
			'id_reg' => $id_reg
		);

		$this->m_regpasien->update_data($where,$data,'tb_regpasien');
		redirect('Admin/c_registrasi/datapasien');
	}

	public function hapus_data($id_reg)
	{
		$where = array(
			'id_reg' => $id_reg
		);

		$this->m_regpasien->hapus_data($where,'tb_regpasien');
		redirect('Admin/c_registrasi/datapasien');
	}
}
