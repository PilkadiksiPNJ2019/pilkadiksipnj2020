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

	function login(){
		if (isset($_POST['login_balon'])) {
			$user=$this->input->post('username');
			$pass=$this->input->post('password');
			$cek=$this->m_bm->login_balon($user, $pass);
			$hasil=count($cek);
			if ($hasil > 0) {
				$isLogin=$this->db->get_where('akun_balon',array('nim'=>$user, 'password'=>$pass))->row();
				$data = array('login' => true,
					'id'=>$isLogin->id_balon,
					'nim'=>$isLogin->nim);
					$this->session->set_userdata($data);
				redirect('bakal_calon');
			}else {
				echo "<script>
						alert('Username atau Password Anda Salah!');
						window.location.href='../';
					</script>";
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('.');
	}
}
