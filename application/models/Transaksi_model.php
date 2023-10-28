<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public function getAllPemesanan()
    {
        return $this->db->get('pemesanan')->result_array();
    }

    public function getTransaksiList()
    {
        $query = $this->db->get('riwayat');
        return $query->result();
    }

    public function simpanTransaksi()
    {
        // New fields for reservation
        $id_transaksi = date('YmdHis') . rand(1000, 9999);
        $id_pemesanan = $this->input->post('id_pemesanan');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $tanggal_pesan = date('Y-m-d H:i:s');
        $tanggal_check_in = $this->input->post('tanggal_check_in');
        $durasi_pemesanan = $this->input->post('durasi_pemesanan');
        $tanggal_check_out = $this->input->post('tanggal_check_out');
        $jenis_kamar = $this->input->post('jenis_kamar');
        $jumlah_kamar = $this->input->post('jumlah_kamar');
        $harga_kamar = $this->input->post('harga_kamar');
        $total = $this->input->post('total');
        $nominal = $this->input->post('nominal');

        $kembalian = $nominal - $total;

        $data = [
            'id_transaksi' => $id_transaksi,
            'id_pemesanan' => $id_pemesanan,
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp,
            'tanggal_pesan' => $tanggal_pesan,
            'tanggal_check_in' => $tanggal_check_in,
            'durasi_pemesanan' => $durasi_pemesanan,
            'tanggal_check_out' => $tanggal_check_out,
            'jenis_kamar' => $jenis_kamar,
            'jumlah_kamar' => $jumlah_kamar,
            'total' => $total,
            'nominal' => $nominal,
            'kembalian' => $kembalian,
        ];

        // Execute the query to insert data into the "pemesanan_kamar" table
        $this->db->insert('riwayat', $data);


        $pemesanan = $this->db->get_where('pemesanan', ['id_pemesanan' => $id_pemesanan])->row_array();

        $status_bayar = '1';

        // Perbarui data jumlah kamar dalam tabel 'kamar'
        $this->db->where('jenis_kamar', $jenis_kamar);
        $this->db->update('pemesanan', ['status_bayar' => $status_bayar]);


        redirect('beranda/riwayat/' . $id_transaksi);


    }
}