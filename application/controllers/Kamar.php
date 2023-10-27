<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Kamar_model', 'am'); //load model Admin
    }


    public function tambahKamar()
    {

        // Check if the data was successfully added
        if ($this->am->simpanKamar()) {
            $pesan = 'Gagal menyimpan data.';
            $kelas = 'danger';
        } else {
            $pesan = 'Data berhasil disimpan.';
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

        // Arahkan ke halaman..
        redirect('admin/kamar');
    }


    public function updateKamar($id)
    {
        // Cek apakah data berhasil diperbarui
        if ($this->am->editKamar($id)) {
            // Pesan berhasil
            $pesan = 'Gagal mengedit data.';
            $kelas = 'danger';
        } else {
            // Pesan kesalahan
            $pesan = 'Data berhasil diedit.';
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
        redirect('admin/kamar');
    }



    public function deleteKamar($id)
    {
        // Check if the data was successfully deleted
        if ($this->am->hapusKamar($id)) {
            $pesan = 'Gagal menghapus data.';
            $kelas = 'danger';
        } else {
            $pesan = 'Data berhasil dihapus.';
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

        // Redirect ke halaman index atau halaman lain yang sesuai
        redirect('admin/kamar');
    }


}