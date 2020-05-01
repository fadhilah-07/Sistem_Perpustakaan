<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_user');
    }
    
    public function index() {
        $session = $this->session->userdata('status');

        if ($session == '') {
            $this->load->view('login');
        } else {
            redirect('Welcome');
        }
    }

    public function login() {
        $this->form_validation->set_rules('user', 'User', 'required|min_length[4]|max_length[15]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = trim($_POST['user']);
            $password = trim($_POST['password']);

            $data = $this->m_user->login($username, $password);

            if ($data == false) {
                $this->session->set_flashdata('error_msg', 'Username / Password Anda Salah.');
                redirect('Login');
            } else {
                $session = [
                    'userdata' => $data,
                    'status' => "Loged in"
                ];
                $this->session->set_userdata($session);
                redirect('Welcome');
            }
        } else {
            $this->session->set_flashdata('error_msg', validation_errors());
            redirect('Login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Login');
    }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */