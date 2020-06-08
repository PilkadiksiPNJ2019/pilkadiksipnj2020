<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bm extends CI_Model{

	function login($user,$pass){
        $this->db->where('nim', $user);
        $this->db->where('password', $pass);
        return $this->db->get('akun')->row();
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
}
