<?php

class M_user extends CI_Model {

    private $table = "user";

    function cek($username, $password) {
        $this->db->where("u_name", $username);
        $this->db->where("u_paswd", $password);
        return $this->db->get("user");
    }

    function semua() {
        return $this->db->get("user");
    }

    function cekKode($kode) {
        $this->db->where("u_name", $kode);
        return $this->db->get("user");
    }

    function cekId($kode) {
        $this->db->where("u_id", $kode);
        return $this->db->get("user");
    }
    
    function getLoginData($usr, $psw) {
        $u = mysql_real_escape_string($usr);
        $p = md5(mysql_real_escape_string($psw));
        $q_cek_login = $this->db->get_where('users', array('username' => $u, 'password' => $p));
        if (count($q_cek_login->result()) > 0) {
            foreach ($q_cek_login->result() as $qck) {
                foreach ($q_cek_login->result() as $qad) {
                    $sess_data['logged_in'] = 'aingLoginWebYeuh';
                    $sess_data['u_id'] = $qad->u_id;
                    $sess_data['u_name'] = $qad->u_name;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['group'] = $qad->group;
                    $sess_data['rid'] = $qad->rid;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard');
            }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            header('location:' . base_url() . 'login');
        }
    }

public function getUser($table_name){
            $get_user = $this->db->get($table_name);
            return $get_user->result_array(); 
            
        }

    public function insert ($table_name, $data){
        $tambah = $this->db->insert($table_name, $data);
        return $tambah;
    }
    public function update($table_name,$data,$id){
        $this->db->where('id',$id);
        $ubah = $this->db->update($table_name,$data);
        return $ubah;
    }
    public function edit ($table_name, $id){
        $this->db->where('id', $id);
        $get_user = $this->db->get($table_name);
        return $get_user->row();
    }
    public function delete($table_name, $id){
        $this->db->where('id', $id);
        $hapus = $this->db->delete($table_name);
        return $hapus;
    }

}
