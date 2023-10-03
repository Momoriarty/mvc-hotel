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
        $this->load->model('Pemesanan_model', 'pm'); //load model Admin
        $this->load->model('Login_model', 'lm'); //load model Admin
        // cek login
        // if (!$this->session->userdata('username')) {
        //     redirect('login');
        // }
    }

    public function index()
    {
        $fasilitas = $this->fm->getAllFasilitas(); // Ambil semua fasilitas
        $kamar = $this->am->getAllKamar(); // Ambil semua fasilitas

        // Kelompokkan fasilitas berdasarkan kategori
        $data['fasilitas'] = [];
        foreach ($fasilitas as $facility) {
            $kategori = $facility['kategori_fasilitas'];

            // Tambahkan fasilitas ke array kategori yang sesuai
            $data['fasilitas'][$kategori][] = $facility;
        }

        $data['kamar'] = [];
        foreach ($kamar as $room) {
            $jenis_kamar = $room['jenis_kamar'];

            // Tambahkan fasilitas ke array kategori yang sesuai
            $data['kamar'][$jenis_kamar][] = $room;
        }

        $this->load->view('template/navbar', $data);
        $this->load->view('Beranda');
        $this->load->view('template/footer');
    }

    public function detailKamar($id)
    {
        if (!$this->session->userdata('username')) {
            redirect('login');
        }

        $data['kamar'] = $this->db->get_where('kamar', ['id' => $id])->row_array();

        // Membuat variabel is_kamar_active untuk menentukan apakah "Kamar" aktif atau tidak
        $data['is_kamar_active'] = true;
        $this->load->view('template/navbar', $data);
        $this->load->view('Kamar');
        $this->load->view('template/footer');
    }

    public function pemesananKamar()
    {

        // Check if the data was successfully added
        if ($this->pm->simpanPemesanan()) {
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
        redirect('beranda');
    }

    public function profile()
    {
        

        $data['user'] = $this->db->get('akun')->row_array(); 

        $this->load->view('template/navbar', $data);
        $this->load->view('profile');
        $this->load->view('template/footer');
    }

    public function editNama()
    {
        $this->lm->editProfile();
    }


}