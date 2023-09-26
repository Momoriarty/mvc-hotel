<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Kamar_model', 'am'); //load model Admin
        $this->load->model('Fasilitas_model', 'fm'); //load model Admin
        // cek login
        // if (!$this->session->userdata('username')) {
        //     redirect('login');
        // }
    }

    public function index()
    {
        $data['kamar'] = $this->am->getAllKamar();
        $fasilitas = $this->fm->getAllFasilitas(); // Ambil semua fasilitas

        // Kelompokkan fasilitas berdasarkan kategori
        $data['fasilitas'] = [];
        foreach ($fasilitas as $facility) {
            $kategori = $facility['kategori_fasilitas'];

            // Tambahkan fasilitas ke array kategori yang sesuai
            $data['fasilitas'][$kategori][] = $facility;
        }

        $this->load->view('template/navbar', $data);
        $this->load->view('Beranda');
        $this->load->view('template/footer');
    }

    public function detailKamar($id)
    {
        $data['kamar']  = $this ->db->get_where('kamar', ['id' => $id])->row_array();

        $this->load->view('template/navbar', $data);
        $this->load->view('Kamar');
        $this->load->view('template/footer');
    }
}