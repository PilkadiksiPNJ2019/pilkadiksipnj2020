<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        if ($this->session->userdata('udhmasuk')==false) {
            redirect('.');
        }  
	}

	public function index()
	{
        $data['title'] = 'Pilkadiksi PNJ 2019';
        $data['main'] = 'home';
        $data['sql'] = $this->m_bm->read_calon();
        $data['navbar'] = $this->load->view('layout/navbar',array('main'=>$data),true);
        $data['pages'] = $this->load->view('pages/home',array('main'=>$data),true);
		$this->load->view('main',array('main'=>$data));
	}

    function create() {
        $data = array(
            'nim' => $this->session->userdata('nim'),
            'id_calon' => $this->input->post('id_calon')
        );
        $this->m_bm->create_evote($data);
        $id_akun = $this->session->userdata('id_akun');
        $data_akun = array(
            'status_pilih' => 1
        );
        $this->m_bm->update_akun($id_akun,$data_akun);
        // Send Email
        $email_to = $this->input->post('email_to');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "pilkadiksipnj@gmail.com";
        $config['smtp_pass'] = "pilkadiksi123";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $ci->email->initialize($config);
        $ci->email->from('pilkadiksipnj@gmail.com', 'Pilkadiksi PNJ');
        $ci->email->to(''.$email_to.'');
        $ci->email->subject('EVote Pilkadiksi PNJ 2019');
        $ci->email->message('<h1>Terima Kasih, '.$nama_lengkap.'</h1> Sudah menyempatkan waktu dan menentukan pilihanmu. <br> Yuk ikutan photo competition dan menangkan voucher senilai 50K. Syarat dan Ketentuan follow : <a href="https://www.instagram.com/pilkadiksipnj/"><b>@pilkadiksipnj</b></a> on Instagram <br><br>Best Regrads, <br><br>Panitia Pilkadiksi PNJ | IG : <a href="https://www.instagram.com/pilkadiksipnj/">@pilkadiksipnj</a>');
        $this->email->send();
        redirect('home');
    }
}
