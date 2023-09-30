<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Kamar_model', 'am'); //load model Admin
        // cek login
        // if(!$this->session->userdata('username')) {
        // }
    }

    public function index()
    {
        $data['kamar'] = $this->am->getAllKamar();

        $this->load->view('admin/template/navbar-admin', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/template/footer-admin');
    }
}
