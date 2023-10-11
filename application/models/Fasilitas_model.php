<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_model extends CI_Model
{

    public function getAllFasilitas()
    {
        return $this->db->get('fasilitas')->result_array();
    }

    public function simpanFasilitas()
    {

        $nama_fasilitas = $this->input->post('nama_fasilitas');
        $deskripsi_fasilitas = $this->input->post('deskripsi_fasilitas');
        $kategori_fasilitas = $this->input->post('kategori_fasilitas');
        $gambar_fasilitas = $this->input->post('gambar_fasilitas');

        $config['allowed_types'] = 'jpg|png|jpeg|pdf|rar|webp';
        $config['upload_path'] = './assets/admin/img/fasilitas';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);

        // Upload file
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar_kamar')) {
            $data['error'] = $this->upload->display_errors();
            return FALSE;
        } else {
            $upload = $this->upload->data();

            // Membuat nama file baru berdasarkan timestamp
            $nama_unik = 'img-fasilitas-' . time(); // Contoh: img-kamar-timestamp

            // Mengambil ekstensi file dari nama file asli
            $ekstensi_file = pathinfo($upload['file_name'], PATHINFO_EXTENSION);

            // Membuat nama file baru dengan ekstensi asli
            $nama_file_baru = $nama_unik . '.' . $ekstensi_file;

            // Mengganti nama file yang diunggah dengan nama unik
            rename($config['upload_path'] . '/' . $upload['file_name'], $config['upload_path'] . '/' . $nama_file_baru);

            // Sekarang, variabel $gambar_kamar berisi nama file unik yang dapat Anda gunakan dalam aplikasi Anda.

            $gambar_fasilitas = $nama_file_baru;

            $data = [
                'nama_fasilitas' => $nama_fasilitas,
                'deskripsi_fasilitas' => $deskripsi_fasilitas,
                'kategori_fasilitas' => $kategori_fasilitas,
                'gambar_fasilitas' => $gambar_fasilitas
            ];


            // Execute the insert query
            $this->db->insert('fasilitas', $data);
        }
    }

    public function editFasilitas($id)
    {

        // Retrieve data from the form
        $data = [
            'nama_fasilitas' => $this->input->post('nama_fasilitas'),
            'deskripsi_fasilitas' => $this->input->post('deskripsi_fasilitas'),
            'kategori_fasilitas' => $this->input->post('kategori_fasilitas'),
        ];

        // Update the facility data in the database
        $this->db->where('id', $id);
        $this->db->update('fasilitas', $data); // Assuming your table name for facilities is 'fasilitas'
    }

    public function hapusFasilitas($id)
    {
        // Delete facility from the database based on ID
        $this->db->delete('fasilitas', ['id' => $id]);
    }
}