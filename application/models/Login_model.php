<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function getAllUser()
    {
        return $this->db->get('akun')->result_array();
    }

    public function register()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $email = $this->input->post('email');

        $datauser = $this->db->get_where('akun', ['username' => $user])->result_array();

        if ($datauser) {
            if ($email == $datauser['email']) {
                echo "email sudah ada";
            } else {
                if ($user == $datauser['username']) {
                    echo "username sudah ada";
                } else {
                    if (password_verify($pass, $datauser['password'])) {
                        $data = [
                            'nama_user' => $this->input->post('nama_user'),
                            'username' => $user,
                            'email' => $email,
                            'no_hp' => $this->input->post('no_hp'),
                            'password' => password_hash($pass, PASSWORD_DEFAULT)
                        ];
                        // eksekusi query insert data ke table
                        $this->db->insert('akun', $data);
                    }
                }
            }
        } else {
            echo "username tidak ada";
        }
    }

    public function editProfile($id)
    {

        // Mengambil data kamar berdasarkan ID
        $data = [
            'nama_user' => $this->input->post('nama_user'),
            'username' => $this->input->post('username')
        ];


        // Memanggil model untuk melakukan update data
        $this->db->where('id', $id);
        $this->db->update('akun', $data);

        redirect('beranda/profile/' . $id);

    }
}