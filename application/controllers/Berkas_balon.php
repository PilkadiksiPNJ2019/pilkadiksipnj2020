<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas_balon extends CI_Controller {

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
		$data['main'] = 'balon';
		$data['berkas'] = $this->m_bm->get_berkas_balon($this->session->userdata('nim'));
		$data['sql'] = $this->m_bm->get_balon($this->session->userdata('nim'));
		$data['sidebar'] = $this->load->view('layout/dash_balon/sidebar',$data,true);
        $data['pages'] = $this->load->view('pages/dash_balon/berkas',$data,true);
		$this->load->view('main_dash',array('main'=>$data));
	}

	function update() {
		$cek = $this->input->post('cek_data');
		$nim = $this->input->post('nim');
		
		$filename = date("YmdHis")."_".$nama."_BAYAR";
		$config = array(
			'upload_path'=>'upload/calon/',
			'allowed_types'=>'jpg|png|jpeg|pdf',
			'file_name'=>$filename
		);
		$this->upload->initialize($config);
		$this->upload->do_upload('file_bayar');
		$finfo = $this->upload->data();
		$file_bayar = $finfo['file_name'];
	    if ($cek==0) {
    		$data = array(
				'nim' => $nim,
				'file_bayar' => $file_bayar,
				'status_bayar' => 0,
				'status_cm' => 0
	    	);
            $this->m_bm->create_berkas($data);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible"><strong> Bukti Pembayaran berhasil di unggah, tunggu beberapa saat sampai Tim kami mengecek pembayaran.</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
			redirect('berkas_balon');
        }else{
			$data_edit = array(
	    		'nim' => $nim,
	            'file_balon' => $this->input->post('file_balon')
	    	);
            $this->m_bm->update_berkas($nim,$data_edit);
            $this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible"><strong> Terima Kasih sudah melakukan pengumpulan berkas, tunggu beberapa saat sampai Tim kami mengecek berkas Anda. <br> Untuk informasi selanjutnya, cek email Anda secara berkala atau cek akun bakal calon dan campaign manager.</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
			redirect('berkas_balon');
		}
	}
}
