<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petunjuk_sk extends CI_Controller {

	function __construct()
	{
        parent::__construct();     
	}

	public function index()
	{
        $data['title'] = 'Pilkadiksi PNJ 2020';
        $data['main'] = 'main';
        $data['navbar'] = $this->load->view('layout/navbar',array('main'=>$data),true);
        $data['pages'] = $this->load->view('pages/petunjuk_sk',array('main'=>$data),true);
		$this->load->view('main',array('main'=>$data));
	}
}
