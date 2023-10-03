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

        // Load library
        $this->load->library('upload', $config);

        // Upload
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar_fasilitas')) {
            $data['error'] = $this->upload->display_errors();
            return FALSE;
        } else {
            $upload = $this->upload->data();

            // Get the uploaded file name
            $gambar_fasilitas = $upload['file_name'];

            // Combine all data into an array

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