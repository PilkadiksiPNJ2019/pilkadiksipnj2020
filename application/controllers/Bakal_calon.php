<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bakal_calon extends CI_Controller {

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
		$data['main'] = 'balon';
		$data['sql'] = $this->m_bm->get_balon($this->session->userdata('nim'));
		$data['berkas'] = $this->m_bm->get_berkas_balon($this->session->userdata('nim'));
		$data['sidebar'] = $this->load->view('layout/dash_balon/sidebar',$data,true);
        $data['pages'] = $this->load->view('pages/dash_balon/main',$data,true);
		$this->load->view('main_dash',array('main'=>$data));
	}
}
