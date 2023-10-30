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
		$jumlah_kamar = $this->input->post('jumlah_kamar');
		$jenis_kamar = $this->input->post('jenis_kamar');
		$deskripsi_kamar = $this->input->post('deskripsi_kamar');
		$harga_kamar = $this->input->post('harga_kamar');

		$config['allowed_types'] = 'jpg|png|jpeg|pdf|rar|webp';
		$config['upload_path'] = './assets/admin/img/kamar';
		$config['max_size'] = '20480';

		// Memuat library
		$this->load->library('upload', $config);

		// Upload file
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('gambar_kamar')) {
			$data['error'] = $this->upload->display_errors();
			return FALSE;
		} else {
			$upload = $this->upload->data();

			// Membuat nama file baru berdasarkan timestamp
			$nama_unik = 'img-kamar-' . time(); // Contoh: img-kamar-timestamp

			// Mengambil ekstensi file dari nama file asli
			$ekstensi_file = pathinfo($upload['file_name'], PATHINFO_EXTENSION);

			// Membuat nama file baru dengan ekstensi asli
			$nama_file_baru = $nama_unik . '.' . $ekstensi_file;

			// Mengganti nama file yang diunggah dengan nama unik
			rename($config['upload_path'] . '/' . $upload['file_name'], $config['upload_path'] . '/' . $nama_file_baru);

			// Sekarang, variabel $gambar_kamar berisi nama file unik yang dapat Anda gunakan dalam aplikasi Anda.

			$gambar_kamar = $nama_file_baru;


			// satukan semua kedalam array data
			$data = [
				'jumlah_kamar' => $jumlah_kamar,
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
		$existingData = $this->db->get_where('kamar', ['id' => $id])->row_array();

		if (file_exists('./assets/admin/img/kamar/' . $existingData['gambar_kamar'])) {
			unlink('./assets/admin/img/kamar/' . $existingData['gambar_kamar']);
		}

		$this->db->delete('kamar', ['id' => $id]);


	}



}