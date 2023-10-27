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

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar_fasilitas')) {
            $data['error'] = $this->upload->display_errors();
            return FALSE;
        } else {
            $upload = $this->upload->data();

            $nama_unik = 'img-fasilitas-' . time();

            $ekstensi_file = pathinfo($upload['file_name'], PATHINFO_EXTENSION);

            $nama_file_baru = $nama_unik . '.' . $ekstensi_file;

            rename($config['upload_path'] . '/' . $upload['file_name'], $config['upload_path'] . '/' . $nama_file_baru);


            $gambar_fasilitas = $nama_file_baru;

            $data = [
                'nama_fasilitas' => $nama_fasilitas,
                'deskripsi_fasilitas' => $deskripsi_fasilitas,
                'kategori_fasilitas' => $kategori_fasilitas,
                'gambar_fasilitas' => $gambar_fasilitas
            ];

            $this->db->insert('fasilitas', $data);
        }
    }

    public function editFasilitas($id)
    {

        $data = [
            'nama_fasilitas' => $this->input->post('nama_fasilitas'),
            'deskripsi_fasilitas' => $this->input->post('deskripsi_fasilitas'),
            'kategori_fasilitas' => $this->input->post('kategori_fasilitas'),
        ];

        $this->db->where('id', $id);
        $this->db->update('fasilitas', $data);
    }

    public function hapusFasilitas($id)
    {
        $existingData = $this->db->get_where('fasilitas', ['id' => $id])->row_array();

        if (file_exists('./assets/admin/img/fasilitas/' . $existingData['gambar_fasilitas'])) {
            unlink('./assets/admin/img/fasilitas/' . $existingData['gambar_fasilitas']);
        }

        $this->db->delete('fasilitas', ['id' => $id]);
    }
}