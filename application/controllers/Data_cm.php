<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_cm extends CI_Controller {

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
		$data['sidebar'] = $this->load->view('layout/dash_balon/sidebar','',true);
        $data['pages'] = $this->load->view('pages/dash_balon/data_cm',$data,true);
		$this->load->view('main_dash',array('main'=>$data));
	}
}
