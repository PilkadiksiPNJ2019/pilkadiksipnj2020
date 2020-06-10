<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bm extends CI_Model{

	function login($user,$pass){
        $this->db->where('nim', $user);
        $this->db->where('password', $pass);
        return $this->db->get('akun')->result();
        // return $this->db->query("SELECT * FROM akun JOIN mahasiswa USING(id_mahasiswa) WHERE nim = '".$user."' AND password = '".$pass."'")->row();
	}

    function read_calon(){
    	return $this->db->query("SELECT * FROM calon_ketua");
    }
    function read_narasi(){
    	return $this->db->query("SELECT * FROM narasi");
    }

    function create_evote($data){
        $this->db->insert('evote',$data);
    }

    public function update_akun($id, $data)
    {
        $this->db->where("id_akun", $id);
        $this->db->update('akun', $data);
    }

    function create_mahasiswa($data){
        $this->db->insert('mahasiswa',$data);
	}
	
	function create_balon($data){
        $this->db->insert('bakal_calon',$data);
	}
	
	// bakal calon
	function login_balon($user,$pass){
        $this->db->where('nim', $user);
        $this->db->where('password', $pass);
        return $this->db->get('akun_balon')->result();
    }
	public function get_balon($id)
    {
        $this->db->where("nim", $id);
        return $this->db->get('bakal_calon')->result();
	}
	public function get_berkas_balon($id)
    {
        $this->db->where("nim", $id);
        return $this->db->get('berkas_balon')->result();
	}
	public function update_berkas($id, $data)
    {
        $this->db->where("nim", $id);
        $this->db->update('berkas_balon', $data);
	}
	function create_berkas($data){
        $this->db->insert('berkas_balon',$data);
	}
}
