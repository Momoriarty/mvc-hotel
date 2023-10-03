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
		$id_pemesanan = date('YmdHis') . rand(1000, 9999);
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$tanggal_check_in = $this->input->post('tanggal_check_in');
		$durasi_pemesanan = $this->input->post('durasi_pemesanan');
		$tanggal_check_out = $this->input->post('tanggal_check_out');
		$jenis_kamar = $this->input->post('jenis_kamar');
		$jumlah_kamar = $this->input->post('jumlah_kamar');
		$harga_kamar = $this->input->post('harga_kamar');

		$total = $harga_kamar * $durasi_pemesanan * $jumlah_kamar;



		$data = [
			'id_pemesanan' => $id_pemesanan,
			'nama' => $nama,
			'email' => $email,
			'no_hp' => $no_hp,
			'tanggal_check_in' => $tanggal_check_in,
			'durasi_pemesanan' => $durasi_pemesanan,
			'tanggal_check_out' => $tanggal_check_out,
			'jenis_kamar' => $jenis_kamar,
			'jumlah_kamar' => $jumlah_kamar,
			'total' => $total,
		];

		// Execute the query to insert data into the "pemesanan_kamar" table
		$this->db->insert('pemesanan', $data);

		$kamar = $this->db->get_where('kamar', ['jenis_kamar' => $jenis_kamar])->row_array();

		$sisa_kamar = $kamar['jumlah_kamar'] - $jumlah_kamar;

		// Perbarui data jumlah kamar dalam tabel 'kamar'
		$this->db->where('jenis_kamar', $jenis_kamar);
		$this->db->update('kamar', ['jumlah_kamar' => $sisa_kamar]);

		
		redirect('beranda/kuitansi/' . $id_pemesanan);


	}


	public function editPemesanan()
	{
		$id = $this->input->post('id_pemesanan');

		// Mengambil data pemesanan berdasarkan ID
		$data = [
			'status' => $this->input->post('status')
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