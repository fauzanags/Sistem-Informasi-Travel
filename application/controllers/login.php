<?php
class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        session_start();
        $this->load->model(array('m_user'));
        if ($this->session->userdata('u_name')) {
            redirect('dashboard');
        }
    }
    function index() {
        $this->load->view('login');
    }
    function proses() {
        $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $usr = $this->input->post('username');
            $psw = MD5($this->input->post('password'));
            
            $cek = $this->m_user->cek($usr, $psw);
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                foreach ($cek->result() as $qad) {
                    $sess_data['u_id'] = $qad->u_id;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['u_name'] = $qad->u_name;
                    $sess_data['role'] = $qad->role;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                redirect('login');
            }
        }
    }
    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}