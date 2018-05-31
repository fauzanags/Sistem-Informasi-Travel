<?php
defined('BASEPATH') Or exit('No direct script access allowed');

class Model_pesanan extends CI_Model {

	public function get_all()
	{
		$query = $this->db->select("*")
				->from('tbl_pesanan')
				->order_by('id','DESC')
				->get();

			return $query->result();
	}

	public function simpan($data)
	{

		$query = $this->db->insert("tbl_pesanan",$data);

		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function edit($id)
	{

		$query = $this->db->where("id", $id)
				->get("tbl_pesanan");

				if($query){
					return $query->row();
				}else{
					return false;
				}
	}

	public function update($data, $id)
	{
		$query = $this->db->update("tbl_buku",$id);

		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function hapus($id)
	{

		$query = $this->db->delete("tbl_pesanan",$id);

		if($query){
			return true;
		}else{
			return false;
		}
	}
}