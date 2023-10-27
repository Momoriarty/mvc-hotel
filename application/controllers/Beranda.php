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

        $data['user'] = $this->db->get('akun')->result_array();

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

    public function kuitansi($id)
    {
        $data['kuitansi'] = $this->db->get_where('pemesanan', ['id_pemesanan' => $id])->row_array();

        $data['is_kamar_active'] = true;
        $this->load->view('template/navbar', $data);
        $this->load->view('kuitansi');
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


        // Arahkan ke halaman..
    }

    public function profile($id)
    {
        $data['user'] = $this->db->get_where('akun', ['id' => $id])->row_array();

        // Kemudian, lanjutkan dengan meload tampilan
        $data['is_kamar_active'] = true;
        $this->load->view('template/navbar', $data);
        $this->load->view('profile');
        $this->load->view('template/footer');
    }


    public function editNama($id)
    {
        $this->lm->editProfile($id);
    }

    public function pemesanan()
    {

        $data['pemesanan'] = $this->db->get('pemesanan')->result_array();
        $data['is_kamar_active'] = true;
        $this->load->view('template/navbar', $data);
        $this->load->view('pemesanan');
        $this->load->view('template/footer');
    }

    public function bayar($id)
    {

        $data['bayar'] = $this->db->get_where('pemesanan', ['id_pemesanan' => $id])->row_array();
        $data['is_kamar_active'] = true;
        $this->load->view('template/navbar', $data);
        $this->load->view('bayar');
        $this->load->view('template/footer');
    }

    public function riwayat($id)
    {
        $data['riwayat'] = $this->db->get_where('riwayat', ['id_pemesanan' => $id])->row_array();
        $data['is_kamar_active'] = true;
        $this->load->view('template/navbar', $data);
        $this->load->view('riwayat');
        $this->load->view('template/footer');
    }

}