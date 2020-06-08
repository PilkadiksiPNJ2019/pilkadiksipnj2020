<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_balon extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
	}

	public function index()
	{
        $data['title'] = 'Pilkadiksi PNJ 2020';
        $data['main'] = 'evote';
        $data['navbar'] = $this->load->view('layout/navbar',array('main'=>$data),true);
        $data['pages'] = $this->load->view('pages/daftar_balon',array('main'=>$data),true);
		$this->load->view('main',array('main'=>$data));
	}

	function create() {
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama_lengkap');
		$filename = date("YmdHis")."_".$nama."_KTM";
		$config = array(
			'upload_path'=>'upload/calon/',
			'allowed_types'=>'jpg|png|jpeg|pdf',
			'file_name'=>$filename
		);
		$this->upload->initialize($config);
		$this->upload->do_upload('foto_ktm');
		$finfo = $this->upload->data();
		$foto_ktm = $finfo['file_name'];

		$filename2 = date("YmdHis")."_".$nama."_Tabungan";
		$config2 = array(
			'upload_path'=>'upload/calon/',
			'allowed_types'=>'jpg|png|jpeg|pdf',
			'file_name'=>$filename2
		);
		$this->upload->initialize($config2);
		$this->upload->do_upload('foto_tabungan');
		$finfo = $this->upload->data();
		$foto_tabungan = $finfo['file_name'];

        $data = array(
            'nim' => $nim,
            'nama_lengkap' => $nama,
            'jurusan' => $this->input->post('jurusan'),
            'prodi' => $this->input->post('prodi'),
            'angkatan' => $this->input->post('angkatan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nomor_whatsapp' => $this->input->post('nomor_whatsapp'),
            'email' => $this->input->post('email'),
            'foto_ktm' => $foto_ktm,
            'foto_tabungan' => $foto_tabungan
        );
        $this->m_bm->create_balon($data);
        $this->session->set_flashdata('notif',
            '<div class="alert alert-success alert-dismissible">
                <strong> Terima Kasih sudah mendaftar. Harap tunggu dan periksa email Anda secara berkala untuk mendapatkan akun.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div>');
        redirect('daftar_balon');
    }
}
