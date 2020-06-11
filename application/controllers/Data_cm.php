<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_cm extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login')==false) {
            redirect('.');
		}
		$this->load->library('upload');
	}

	public function index()
	{
        $data['title'] = 'Pilkadiksi PNJ 2020';
		$data['berkas'] = $this->m_bm->get_berkas_balon($this->session->userdata('nim'));
		$data['sql'] = $this->m_bm->get_balon($this->session->userdata('nim'));
		$data['cm'] = $this->m_bm->get_cm($this->session->userdata('nim'));
		$data['sidebar'] = $this->load->view('layout/dash_balon/sidebar',$data,true);
        $data['pages'] = $this->load->view('pages/dash_balon/data_cm',$data,true);
		$this->load->view('main_dash',array('main'=>$data));
	}

	function update() {
		$cek = $this->input->post('cek_data');
		$nim_balon = $this->input->post('nim_balon');
		$nama = $this->input->post('nama_lengkap');
		$filename = date("YmdHis")."_".$nama."_KTM_CM_".$nim_balon;
		$config = array(
			'upload_path'=>'upload/calon/',
			'allowed_types'=>'jpg|png|jpeg|pdf',
			'file_name'=>$filename
		);
		$this->upload->initialize($config);
		$this->upload->do_upload('foto_ktm');
		$finfo = $this->upload->data();
		$foto_ktm = $finfo['file_name'];

		$filename2 = date("YmdHis")."_".$nama."_Tabungan_CM_".$nim_balon;
		$config2 = array(
			'upload_path'=>'upload/calon/',
			'allowed_types'=>'jpg|png|jpeg|pdf',
			'file_name'=>$filename2
		);
		$this->upload->initialize($config2);
		$this->upload->do_upload('foto_tabungan');
		$finfo = $this->upload->data();
		$foto_tabungan = $finfo['file_name'];

	    if ($cek==0) {
    		$data = array(
				'nim' => $this->input->post('nim'),
				'nama_lengkap' => $nama,
				'jurusan' => $this->input->post('jurusan'),
				'prodi' => $this->input->post('prodi'),
				'angkatan' => $this->input->post('angkatan'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'nomor_whatsapp' => $this->input->post('nomor_whatsapp'),
				'email' => $this->input->post('email'),
				'foto_ktm' => $foto_ktm,
				'foto_tabungan' => $foto_tabungan,
				'nim_balon' => $nim_balon
	    	);
			$this->m_bm->create_cm($data);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible"><strong> Data Campaign Manager berhasil ditambahkan.</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
			redirect('data_cm');
        }else{
			$data_edit = array(
	    		'nim' => $this->input->post('nim'),
				'nama_lengkap' => $nama,
				'jurusan' => $this->input->post('jurusan'),
				'prodi' => $this->input->post('prodi'),
				'angkatan' => $this->input->post('angkatan'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'nomor_whatsapp' => $this->input->post('nomor_whatsapp'),
				'email' => $this->input->post('email'),
				'nim_balon' => $nim_balon
	    	);
            $this->m_bm->update_cm($nim_balon,$data_edit);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible"><strong> Data Campagin Manager berhasil di-update.</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
			redirect('data_cm');
		}
	}
}
