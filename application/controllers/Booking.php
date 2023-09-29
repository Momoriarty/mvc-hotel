<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model yang diperlukan, misalnya Booking_model
        $this->load->model('Booking_model', 'bm');
    }

    public function pesanSekarang($roomId) {
        // Ambil data kamar berdasarkan $roomId dari model
        $room = $this->bm->getRoomById($roomId);

        // Jika kamar tidak ditemukan, tampilkan pesan error
        if (!$room) {
            show_error('Kamar tidak ditemukan', 404);
        }

        // Ambil data pemesan dari formulir (misalnya, POST data)
        $dataPemesan = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'tanggal_checkin' => $this->input->post('tanggal_checkin'),
            'tanggal_checkout' => $this->input->post('tanggal_checkout'),
            'jumlah_tamu' => $this->input->post('jumlah_tamu')
        );

        // Lakukan validasi data pemesan di sini, sesuai dengan kebutuhan Anda

        // Simpan data pemesanan ke database
        $bookingId = $this->bm->createBooking($roomId, $dataPemesan);

        // Setelah pemesanan berhasil, arahkan ke halaman konfirmasi
        // atau tampilkan pesan sukses
        if ($bookingId) {
            // Tampilkan halaman konfirmasi atau pesan sukses
            redirect('booking/konfirmasi/' . $bookingId);
        } else {
            // Jika pemesanan gagal, tampilkan pesan error
            show_error('Pemesanan kamar gagal', 500);
        }
    }

    public function konfirmasi($bookingId) {
        // Ambil data pemesanan berdasarkan $bookingId dari model
        $booking = $this->bm->getBookingById($bookingId);

        // Tampilkan halaman konfirmasi dengan rincian pemesanan
        // Anda dapat menggunakan tampilan untuk ini
        $this->load->view('konfirmasi_view', array('booking' => $booking));
    }
}
