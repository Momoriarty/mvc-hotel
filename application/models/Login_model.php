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
        $nama = $this->input->post('nama_user');
        $username = $this->input->post('username');
        $pw = $this->input->post('password');

        $pass = password_hash($pw, PASSWORD_DEFAULT);

        $data = [
            'nama_user' => $nama,
            'username' => $username,
            'password' => $pass
        ];


        // eksekusi query insert data ke table
        $this->db->insert('akun', $data);
    }
}
