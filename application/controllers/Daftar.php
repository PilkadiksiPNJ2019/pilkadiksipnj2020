<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
	{
        parent::__construct();     
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
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'jurusan' => $this->input->post('jurusan'),
            'prodi' => $this->input->post('prodi'),
            'angkatan' => $this->input->post('angkatan'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nomor_whatsapp' => $this->input->post('nomor_whatsapp'),
            'nomor_telepon' => $this->input->post('nomor_telepon'),
            'email' => $this->input->post('email'),
            'alamat_rumah' => $this->input->post('alamat_rumah'),
            'alamat_kost' => $this->input->post('alamat_kost')
        );
        $this->m_bm->create_mahasiswa($data);
        $this->session->set_flashdata('notif_daftar',
            '<div class="alert alert-success alert-dismissible">
                <strong> Terima Kasih sudah mendaftar. Harap tunggu dan periksa email Anda untuk mendapatkan username dan password.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div>');
        redirect('main');
    }
}
