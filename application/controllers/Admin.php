<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Kamar_model', 'am'); //load model Admin
        $this->load->model('Fasilitas_model', 'fm'); //load model Admin
        $this->load->model('Pemesanan_model', 'pm'); //load model Admin
        $this->load->model('Login_model', 'lm'); //load model Admin
        // cek login
        if (!$this->session->userdata('username')) {
            redirect('login/admin_login');
        }
    }

    public function index()
    {
        $data['kamar'] = $this->am->getAllKamar();

        $this->load->view('admin/template/navbar-admin', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/template/footer-admin');
    }

    public function kamar()
    {
        $data['kamar'] = $this->am->getAllKamar();

        $this->load->view('admin/template/navbar-admin', $data);
        $this->load->view('admin/kamar');
        $this->load->view('admin/template/footer-admin');
    }

    public function fasilitas()
    {
        $data['fasilitas'] = $this->fm->getAllFasilitas(); // Change to your model function name

        $this->load->view('admin/template/navbar-admin', $data);
        $this->load->view('admin/fasilitas', $data); // Pass $data to the view
        $this->load->view('admin/template/footer-admin');
    }

    public function pemesanan()
    {
        $data['pemesanan'] = $this->pm->getAllPemesanan();
        $data['user_email'] = $this->db->get('pemesanan')->result_array();

        $this->load->view('admin/template/navbar-admin', $data);
        $this->load->view('admin/pemesanan');
        $this->load->view('admin/template/footer-admin');
    }

    public function user()
    {
        $data['user'] = $this->lm->getAllUser();

        $this->load->view('admin/template/navbar-admin', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/template/footer-admin');
    }



}