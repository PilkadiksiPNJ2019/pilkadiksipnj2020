<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login')==false) {
            redirect('.');
        }
	}

	public function index()
	{
		$data['title'] = 'Pilkadiksi PNJ 2020';
		$data['berkas'] = $this->m_bm->get_berkas_balon($this->session->userdata('nim'));
		$data['sql'] = $this->m_bm->get_balon($this->session->userdata('nim'));
		$data['sidebar'] = $this->load->view('layout/dash_balon/sidebar',$data,true);
        $data['pages'] = $this->load->view('pages/dash_balon/profile',$data,true);
		$this->load->view('main_dash',array('main'=>$data));
	}

	function update() {
		$cek = $this->input->post('cek_data');
		$nim = $this->input->post('nim');

	    if ($cek==1) {
    		$data_edit = array(
	    		'nim' => $this->input->post('nim'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'jurusan' => $this->input->post('jurusan'),
				'prodi' => $this->input->post('prodi'),
				'angkatan' => $this->input->post('angkatan'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'nomor_whatsapp' => $this->input->post('nomor_whatsapp'),
				'email' => $this->input->post('email')
	    	);
            $this->m_bm->update_balon($nim,$data_edit);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible"><strong> Profile berhasil di-update.</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
			redirect('profile');
        }
	}
}
