<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Auth extends CI_Controller{
    
    public function index(){
        $this->load->view('templates/auth_header');
        $this->load->view('login');
        $this->load->view('templates/auth_footer');
    }
    
    public function registration(){
        $this->load->view('templates/auth_header');
        $this->load->view('registration');
        $this->load->view('templates/auth_footer');
    }

    public function forgot_password() {
        $this->load->view('templates/auth_header');
        $this->load->view('forgot-password.html');
        $this->load->view('templates/auth_footer');
    }
}