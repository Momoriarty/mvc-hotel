<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar_model extends CI_Model
{

	public function getAllKamar()
	{
		return $this->db->get('kamar')->result_array();
	}

	public function simpanKamar()
	{
		// New fields
		$nomor_kamar = $this->input->post('nomor_kamar');
		$jenis_kamar = $this->input->post('jenis_kamar');
		$deskripsi_kamar = $this->input->post('deskripsi_kamar');
		$harga_kamar = $this->input->post('harga_kamar');

		$config['allowed_types'] = 'jpg|png|jpeg|pdf|rar|webp';
		$config['upload_path'] = './assets/admin/img/kamar';
		$config['max_size'] = '2048';

		// load library
		$this->load->library('upload', $config);

		//upload
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('gambar_kamar')) {
			$data['error'] = $this->upload->display_errors();
			return FALSE;
		} else {
			$upload = $this->upload->data();

			// ambil data nama gambar
			$gambar_kamar = $upload['file_name'];

			// satukan semua kedalam array data
			$data = [
				'nomor_kamar' => $nomor_kamar,
				'jenis_kamar' => $jenis_kamar,
				'deskripsi_kamar' => $deskripsi_kamar,
				'harga_kamar' => $harga_kamar,
				'gambar_kamar' => $gambar_kamar
			];


			// eksekusi query insert data ke table
			$this->db->insert('kamar', $data);
		}
	}

	public function editKamar()
	{
		$id = $this->input->post('id');

		// Mengambil data kamar berdasarkan ID
		$data = [
			'jenis_kamar' => $this->input->post('jenis_kamar'),
			'deskripsi_kamar' => $this->input->post('deskripsi_kamar'),
			'harga_kamar' => $this->input->post('harga_kamar'),
		];

		// Memanggil model untuk melakukan update data
		$this->db->where('id', $id);
        $this->db->update('kamar', $data);
	}


	public function hapusKamar($id)
	{
		// Menghapus kamar dari database berdasarkan ID kamar
		$this->db->delete('kamar', ['id' => $id]);


	}



}