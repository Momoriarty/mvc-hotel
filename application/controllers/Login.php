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
    }

    public function login()
    {
        $username = $this->input->post('username', true);
        $user = $this->db->get_where('akun', ['username' => $username])->row_array();

        if (!$user) {
            // Jika tidak ada pengguna dengan 'username', coba mencari berdasarkan 'email'
            $user = $this->db->get_where('akun', ['email' => $username])->row_array();
        }

        $pass = $this->input->post('password', true);

        //jika username ada
        if ($user) {
            //cek user aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($pass, $user['password'])) {
                    // jika password sesuai
                    // periksa level pengguna
                    if ($user['level'] == 'admin') {
                        $data = [
                            'id' => $user['id'],
                            'nama_user' => $user['nama_user'],
                            'email' => $user['email'],
                            'no_hp' => $user['no_hp'],
                            'username' => $user['username'],
                            'password' => $user['password'],
                            'profile' => $user['profile'],
                            'level' => $user['level']
                        ];
                        $this->session->set_userdata($data);
                        redirect('admin');
                    } else {
                        $data = [
                            'id' => $user['id'],
                            'nama_user' => $user['nama_user'],
                            'email' => $user['email'],
                            'no_hp' => $user['no_hp'],
                            'username' => $user['username'],
                            'password' => $user['password'],
                            'profile' => $user['profile'],
                            'level' => $user['level']
                        ];
                        $this->session->set_userdata($data);
                        redirect('beranda');
                    }
                } else {
                    // jika password salah
                    echo "Passwordmu Salah!";
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

    public function logout()
    {
        //kill session aktif
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama_user');
        $this->session->unset_userdata('no_hp');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('profile');

        //arahkan kehalaman login
        redirect('beranda');
    }

    public function hapus($id)
    {
        $this->lm->delete($id);
        redirect('admin/user');
    }
}