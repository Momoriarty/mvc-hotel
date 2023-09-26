<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
	public function getAllPemesanan()
	{
		return $this->db->get('pemesanan')->result_array();
	}

	public function simpanPemesanan()
	{
		// New fields for reservation
		$nama_tamu = $this->input->post('nama_tamu');
		$tanggal_check_in = $this->input->post('tanggal_check_in');
		$durasi_pemesanan = $this->input->post('durasi_pemesanan');
		$tanggal_check_out = $this->input->post('tanggal_check_out');
		$tipe_kamar = $this->input->post('tipe_kamar');
		$jumlah_orang = $this->input->post('jumlah_orang');
		$harga_kamar = $this->input->post('harga_kamar');

		// Add your validation and logic here (e.g., checking room availability, calculating total price, etc.)

		// Create an array to store reservation data
		$data = [
			'nama_tamu' => $nama_tamu,
			'tanggal_check_in' => $tanggal_check_in,
			'durasi_pemesanan' => $durasi_pemesanan,
			'tanggal_check_out' => $tanggal_check_out,
			'tipe_kamar' => $tipe_kamar,
			'jumlah_orang' => $jumlah_orang,
			'harga_kamar' => $harga_kamar,
		];

		// Execute the query to insert data into the "pemesanan_kamar" table
		$this->db->insert('pemesanan', $data);
	}

	public function editPemesanan()
	{
		$id = $this->input->post('id_pemesanan');

		// Mengambil data pemesanan berdasarkan ID
		$data = [
			'nama_tamu' => $this->input->post('nama_tamu'),
			'tanggal_check_in' => $this->input->post('tanggal_check_in'),
			'durasi_pemesanan' => $this->input->post('durasi_pemesanan'),
			'tanggal_check_out' => $this->input->post('tanggal_check_out'),
			'tipe_kamar' => $this->input->post('tipe_kamar'),
			'jumlah_orang' => $this->input->post('jumlah_orang'),
			'harga_kamar' => $this->input->post('harga_kamar'),
		];

		

		// Memanggil model untuk melakukan update data pemesanan
		$this->db->where('id_pemesanan', $id);
		$this->db->update('pemesanan', $data);

	}

	public function hapusPemesanan($id)
	{
		// Delete reservation based on reservation ID
		$this->db->delete('pemesanan', ['id_pemesanan' => $id]);
	}
}
?>