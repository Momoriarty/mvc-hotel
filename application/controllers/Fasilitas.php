<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fasilitas_model', 'fm'); // Load Fasilitas_model
        // You can add login checking here if needed
    }

    public function tambahFasilitas()
    {
        // Panggil metode untuk menyimpan fasilitas baru
        $this->fm->simpanFasilitas();

        // Set pesan sukses untuk ditampilkan kepada pengguna
        $this->session->set_flashdata(
            'admin_message',
            '<div class="alert alert-dismissible fade show alert-custom alert-success mt-3" role="alert">
            <strong>Sukses!</strong> Data fasilitas berhasil disimpan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'
        );

        // Redirect ke halaman index atau halaman lain yang sesuai
        redirect('admin/fasilitas');
    }

    public function updateFasilitas($id)
    {
        // Panggil metode untuk mengedit data fasilitas
        $this->fm->editFasilitas($id);

        // Set pesan sukses atau gagal berdasarkan hasil operasi
        if ($this->fm->editFasilitas($id)) {
            $pesan = 'Gagal mengedit data fasilitas.';
            $kelas = 'danger';
        } else {
            $pesan = 'Data fasilitas berhasil diedit.';
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

        // Redirect ke halaman index atau halaman lain yang sesuai
        redirect('admin/fasilitas');
    }

    public function deleteFasilitas($id)
    {
        // Hapus data fasilitas
        $this->fm->hapusFasilitas($id);

        // Set pesan sukses
        $this->session->set_flashdata(
            'admin_message',
            '<div class="alert alert-dismissible fade show alert-custom alert-danger mt-3" role="alert">
            <strong>Sukses!</strong> Data fasilitas berhasil dihapus.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'
        );

        // Redirect ke halaman index atau halaman lain yang sesuai
        redirect('admin/fasilitas');
    }
}
