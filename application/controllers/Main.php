<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
        parent::__construct();
	}

	public function index()
	{
        $data['title'] = 'Pilkadiksi PNJ 2020';
        $data['main'] = 'evote';
        $data['navbar'] = $this->load->view('layout/navbar',array('main'=>$data),true);
        $data['pages'] = $this->load->view('pages/main',array('main'=>$data),true);
		$this->load->view('main',array('main'=>$data));
	}

	function cek_akun(){
        $nim=$this->input->post('nim');
        $cek = $this->db->query("SELECT * FROM mahasiswa where nim='".$nim."'");
        $nilai = $cek->num_rows();
        if ($nilai > 0) {
        	foreach ($cek->result() as $sql) {
	        	$nama = $sql->nama_lengkap;
	        	$jurusan = $sql->jurusan;
	        	$jurusan = $sql->jurusan;
	        	$angkatan = $sql->angkatan;
	        }
            $this->session->set_flashdata('notif',
            	'<div class="alert alert-success alert-dismissible">
            		Anda sudah terdaftar dengan identitas:
            		<strong>'.$nama.' | Jurusan '.$jurusan.' | Angkatan '.$angkatan.'</strong>
            		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
            		</button>
            	</div>');
			redirect('main');
        }else{
            $this->session->set_flashdata('notif',
            	'<div class="alert alert-danger alert-dismissible">
            		Anda belum terdaftar, silahkan hubungi panitia atau daftar langsung. <a href="'.site_url('daftar').'">Klik disini</a>
            		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
            		</button>
            	</div>');
			redirect('main');
        }
    }

	function login(){
		if (isset($_POST['login'])) {
			$user=$this->input->post('username',true);
			$pass=$this->input->post('password',true);
			$cek=$this->m_bm->login($user, $pass);
			$hasil=count($cek);
			if ($hasil > 0) {
				$yglogin=$this->db->get_where('akun',array('nim'=>$user, 'password'=>$pass))->row();
					$data = array(
						'udhmasuk' => true,
						'id_akun'=>$yglogin->id_akun,
						'nim'=>$yglogin->nim,
						'status_pilih' => $yglogin->status_pilih
					);
					$this->session->set_userdata($data);
					redirect('home');
			}else {
				$this->session->set_flashdata('notif_login',
					'<div class="alert alert-danger alert-dismissible">
					Username atau Password salah, harap periksa kembali email Anda.
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
					</button>
					</div>');
				redirect('main');
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('.');
	}
}
