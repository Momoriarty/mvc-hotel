<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'lm'); // Load Fasilitas_model
        // You can add login checking here if needed
    }

    public function index()
    {
        $this->load->view('Login/Login');
    }

    public function register()
    {
        $this->lm->registerakun();

        // Set pesan sukses untuk ditampilkan kepada pengguna
        $this->session->set_flashdata(
            'admin_message',
            '<div class="alert alert-dismissible fade show alert-custom alert-success mt-3" role="alert">
            <strong>Sukses!</strong> Data fasilitas berhasil disimpan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'
        );

    }

    public function login()
    {
        $user = $this->input->post('username', true);
        $pass = $this->input->post('password', true);

        //lakukan pengecekan username 
        $datauser = $this->db->get_where('akun', ['username' => $user])->row_array();

        //jika username ada
        if ($datauser) {
            //cek user aktif
            if ($datauser['is_active'] == 1) {
                // cek password
                if (password_verify($pass, $datauser['password'])) {
                    // jika password sesuai

                    //  buat session login
                    $data = [
                        'id' => $datauser['id'],
                        'nama_user' => $datauser['nama_user'],
                        'email' => $datauser['email'],
                        'no_hp' => $datauser['no_hp'],
                        'username' => $datauser['username'],
                        'password' => $datauser['password'],
                        'level' => $datauser['level']
                    ];
                    $this->session->set_userdata($data);

                    // arahkan ke controlller admin
                    redirect('beranda');
                } else {
                    // jika password salah
                    echo "Password mu Salah!";
                }
            } else {
                //jika user tidak aktif
                echo "User tidak aktif!";
            }
        } else {
            //jika username tidak ada
            echo "Username tidak ada!";
        }
    }

    public function admin_login()
    {
        $this->load->view('Admin/Login');
    }

    public function a_login()
    {
        $user = $this->input->post('username', true);
        $pass = $this->input->post('password', true);

        //lakukan pengecekan username 
        $datauser = $this->db->get_where('akun', ['username' => $user])->row_array();

        //jika username ada
        if ($datauser) {
            //cek user aktif
            if ($datauser['is_active'] == 1 and $datauser['level'] == 'admin') {
                // cek password
                if (password_verify($pass, $datauser['password'])) {
                    // jika password sesuai

                    //  buat session login
                    $data = [
                        'id' => $datauser['id'],
                        'nama_user' => $datauser['nama_user'],
                        'email' => $datauser['email'],
                        'no_hp' => $datauser['no_hp'],
                        'username' => $datauser['username'],
                        'password' => $datauser['password'],
                        'level' => $datauser['level']
                    ];
                    $this->session->set_userdata($data);

                    // arahkan ke controlller admin
                    redirect('admin');
                } else {
                    // jika password salah
                    echo "Password mu Salah!";
                }
            } else {
                //jika user tidak aktif
                echo "User tidak aktif!";
            }
        } else {
            //jika username tidak ada
            echo "Username tidak ada!";
        }
    }

    public function logout()
    {
        //kill session aktif
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama_user');
        $this->session->unset_userdata('level');

        //arahkan kehalaman login
        redirect('beranda');
    }
}