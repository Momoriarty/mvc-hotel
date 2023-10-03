<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'lm'); // Load model Pemesanan
        // Cek login (sesuaikan dengan sistem autentikasi Anda)
        // if (!$this->session->userdata('username')) {
        //     redirect('Auth/forbidden');
        // }
    }
}
