<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function getAllUser()
    {
        return $this->db->get('akun')->result_array();
    }

    public function registerakun()
    {
        $user = $this->input->post('username', true);
        $pass = $this->input->post('password', true);
        $email = $this->input->post('email', true);
        $no_hp = $this->input->post('no_hp');
        $profile = $this->input->post('profile');
        $level = $this->input->post('level');

        // Ambil semua data user dari tabel 'akun'
        $datauser = $this->db->get('akun')->result_array();

        // Loop melalui data user untuk memeriksa email dan username
        $emailExists = false;
        $usernameExists = false;
        $nohpExists = false;

        foreach ($datauser as $userRow) {
            if ($email == $userRow['email']) {
                $emailExists = true;
            }
            if ($user == $userRow['username']) {
                $usernameExists = true;
            }
            if ($no_hp == $userRow['no_hp']) {
                $nohpExists = true;
            }
        }

        if ($emailExists || $usernameExists || $nohpExists) {
            $error = "Registrasi gagal! ";
            if ($emailExists) {
                $error .= "Email sudah ada dalam sistem. ";
            } elseif ($usernameExists) {
                $error .= "Username sudah ada dalam sistem. ";
            } elseif ($nohpExists) {
                $error .= "no hp sudah ada dalam sistem. ";
            }

            $this->session->set_flashdata(
                'admin_message',
                '<div class="alert alert-dismissible fade show custom-alert alert-danger mt-3" role="alert">
                    <div class="d-flex align-items-center">
                        <div class="alert-icon">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <strong>' . $error . '&nbsp;</strong>
                    </div>
                </div>'
            );
            // Redirect ke halaman registrasi kembali jika diperlukan
            redirect('login');
        } elseif ($level == 'admin' or $level == 'user') {
            $data = [
                'nama_user' => $this->input->post('nama_user'),
                'level' => $level,
                'username' => $user,
                'email' => $email,
                'no_hp' => $no_hp,
                'profile' => $profile,
                'password' => password_hash($pass, PASSWORD_DEFAULT),
            ];
            // Eksekusi query insert data ke tabel
            $this->db->insert('akun', $data);

            // Set flash data untuk pesan berhasil
            $this->session->set_flashdata(
                'admin_message',
                '<div class="alert alert-dismissible fade show custom-alert alert-success mt-3" role="alert">
                    <div class="d-flex align-items-center">
                        <div class="alert-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <strong>Registrasi berhasil! &nbsp; </strong>Akun Anda telah berhasil didaftarkan.
                    </div>
                </div>'
            );

            // Redirect ke halaman login jika diperlukan
            redirect('admin/user');
        } else {
            $data = [
                'nama_user' => $this->input->post('nama_user'),
                'level' => 'user',
                'username' => $user,
                'email' => $email,
                'no_hp' => $no_hp,
                'profile' => $profile,
                'password' => password_hash($pass, PASSWORD_DEFAULT),
            ];
            // Eksekusi query insert data ke tabel
            $this->db->insert('akun', $data);

            // Set flash data untuk pesan berhasil
            $this->session->set_flashdata(
                'admin_message',
                '<div class="alert alert-dismissible fade show custom-alert alert-success mt-3" role="alert">
                    <div class="d-flex align-items-center">
                        <div class="alert-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <strong>Registrasi berhasil! &nbsp; </strong>Akun Anda telah berhasil didaftarkan.
                    </div>
                </div>'
            );

            // Redirect ke halaman login jika diperlukan
            redirect('login');
        }

    }


    public function editProfile($id)
    {

        $profile = $this->input->post('profile');
        $level = $this->input->post('level');


        if ($profile == '') {
            $data = [
                'nama_user' => $this->input->post('nama_user'),
                'username' => $this->input->post('username'),
                'level' => $level,
            ];

            $this->db->where('id', $id);
            $this->db->update('akun', $data);

            if ($level === 'admin') {
                redirect('admin/user');
            } else {
                redirect('beranda/profile/' . $id);
            }
        } else {
            $data = [
                'nama_user' => $this->input->post('nama_user'),
                'username' => $this->input->post('username'),
                'level' => 'user',
                'profile' => $profile
            ];

            $this->db->where('id', $id);
            $this->db->update('akun', $data);


            if ($level === 'admin') {
                redirect('admin');
            } else {
                redirect('beranda/profile/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $this->db->delete('akun', ['id'=> $id]);
    }

}