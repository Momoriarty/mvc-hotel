<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemesanan_model', 'pm'); // Load model Pemesanan
        // Cek login (sesuaikan dengan sistem autentikasi Anda)
        // if (!$this->session->userdata('username')) {
        //     redirect('Auth/forbidden');
        // }
    }




    public function updatePemesanan($id)
    {
        // Cek apakah data berhasil diperbarui
        if ($this->pm->editPemesanan($id)) {
            // Pesan berhasil
            $pesan = 'Gagal mengedit data pemesanan.';
            $kelas = 'danger';
        } else {
            // Pesan kesalahan
            $pesan = 'Data pemesanan berhasil diedit.';
            $kelas = 'success';
        }

        // Set pesan flash sesuai dengan hasil operasi
        $this->session->set_flashdata(
            'admin_message',
            '<div class="alert alert-dismissible fade show custom-alert alert-' . $kelas . ' mt-3" role="alert">
            <div class="d-flex align-items-center">
                <div class="alert-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <strong>' . ucfirst($kelas) . '! &nbsp; </strong>' . $pesan . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>'
        );

        // Redirect ke halaman pemesanan (sesuai dengan nama kontroller dan metodenya)
        redirect('pemesanan/index');
    }

    public function deletePemesanan($id)
    {
        // Check if the data was successfully deleted
        if ($this->pm->hapusPemesanan($id)) {
            $pesan = 'Gagal menghapus data pemesanan.';
            $kelas = 'danger';
        } else {
            $pesan = 'Data pemesanan berhasil dihapus.';
            $kelas = 'success';
        }

        $this->session->set_flashdata(
            'admin_message',
            '<div class="alert alert-dismissible fade show custom-alert alert-' . $kelas . ' mt-3" role="alert">
            <div class="d-flex align-items-center">
                <div class="alert-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <strong>' . ucfirst($kelas) . '! &nbsp; </strong>' . $pesan . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>'
        );

        // Redirect ke halaman pemesanan (sesuai dengan nama kontroller dan metodenya)
        redirect('pemesanan/index');
    }
}
