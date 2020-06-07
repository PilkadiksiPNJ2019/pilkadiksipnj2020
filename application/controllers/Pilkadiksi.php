<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilkadiksi extends CI_Controller {

	function __construct()
	{
        parent::__construct();     
	}

	public function index()
	{
        $data['title'] = 'Pilkadiksi PNJ 2019';
        $data['main'] = 'main';
        $data['sql'] = $this->m_bm->read_narasi();
        $data['navbar'] = $this->load->view('layout/navbar',array('main'=>$data),true);
        $data['pages'] = $this->load->view('pages/pilkadiksi',array('main'=>$data),true);
		$this->load->view('main',array('main'=>$data));
	}
}
