<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model', 'tm'); // Load Fasilitas_model
        // You can add login checking here if needed
    }

    public function tambahTransaksi()
    {
        // Panggil metode untuk menyimpan Transaksi baru
        $this->tm->simpanTransaksi();

        // Set pesan sukses untuk ditampilkan kepada pengguna
        $this->session->set_flashdata(
            'admin_message',
            '<div class="alert alert-dismissible fade show alert-custom alert-success mt-3" role="alert">
            <strong>Sukses!</strong> Data fasilitas berhasil disimpan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'
        );

        // Redirect ke halaman index atau halaman lain yang sesuai
        redirect('fasilitas/index');
    }
}