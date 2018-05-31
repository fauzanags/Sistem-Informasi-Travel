<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat extends CI_Controller {

	public function __construct(){
		$this->load->model('model_pesanan');
	}


	public function index(){
		$data = array(
			'tittle' 	=> 'Data Pesanan',
			'data_pesanan' => $this->model_pesanan->get_all(),	
		);

		$this->load->view('data_pesanan', $data);
	}

	public function tambah()
	{
		$data = array(
			'tittle'		=> 'Tambah Data Buku'
		);

		$this->load->view('tambah_pesanan', $data);
	}

	public function simpan()
	{
		$data = array(
			'nama'=> $this->input->post("nama"),
			'asal'=> $this->input->post("asal"),
			'tujuan'=> $this->input->post("tujuan"),
			'berangkat'=> $this->input->post("berangkat"),
			'pulang'=> $this->input->post("pulang"),
			'penumpang'=> $this->input->post("penumpang"),
		);

		$this->model_pesanan->update($data, $id);

		$this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible"> Success! data sudah di update.</div>');

		redirect('pesanan/');
	}
}