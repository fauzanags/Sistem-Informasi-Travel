<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['hasil'] = $this->m_user->getUser('tbl_pesanan');
		$this->load->view('welcome_message', $this->data);
	}

	public function input(){
		$this->load->view('form-input');
	}

	public function insert(){
		$nama = $_POST['nama'];
		$asal = $_POST['asal'];
		$tujuan = $_POST['tujuan'];
		$berangkat = $_POST['berangkat'];
		$pulang = $_POST['pulang'];
		$penumpang = $_POST['penumpang'];
		
		$data = array('nama' => $nama, 'asal' => $asal, 'tujuan' => $tujuan, 'berangkat' => $berangkat, 'pulang' => $pulang, 'penumpang' => $penumpang );
		$tambah = $this->m_user->insert('tbl_pesanan',$data);
		if($tambah > 0){
			redirect('welcome/index');
		}else{
			echo 'Gagal disimpan';
		}
		
	}

	public function edit($id){
		$this->data['edit'] = $this->m_user->edit('tbl_pesanan', $id);
		$this->load->view('form-edit', $this->data);
	}

	public function update($id){
		$nama = $_POST['nama'];
		$asal = $_POST['asal'];
		$tujuan = $_POST['tujuan'];
		$berangkat = $_POST['berangkat'];
		$pulang = $_POST['pulang'];
		$penumpang = $_POST['penumpang'];

		$data = array('nama' => $nama, 'asal' => $asal, 'tujuan' => $tujuan, 'berangkat' => $berangkat, 'pulang' => $pulang, 'penumpang' => $penumpang );
		$ubah = $this->m_user->update('tbl_pesanan',$data,$id);
		if($ubah > 0){
			redirect('welcome/index');
		}else{
			echo 'Gagal dihapus';
		}
		
		
	}


	public function delete($id){
		$hapus = $this->m_user->delete('tbl_pesanan', $id);
		if($hapus > 0){
			redirect('welcome/index');
		}else{
			echo 'Gagal dihapus';
		}

	}
}
