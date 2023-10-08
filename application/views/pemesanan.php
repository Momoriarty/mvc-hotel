<style>
    /* CSS untuk Container */
    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* CSS untuk Judul Pesanan Anda */
    h1 {
        text-align: center;
        margin: 20px 0;
        color: #333;
        /* Warna teks judul */
    }

    /* CSS untuk Tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        /* Bayangan tabel */
        background-color: #fff;
        /* Warna latar belakang tabel */
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        /* Garis bawah setiap baris */
    }

    th {
        background-color: #f5f5f5;
        /* Warna latar belakang header kolom */
        font-weight: bold;
        color: #333;
        /* Warna teks header kolom */
        text-transform: uppercase;
    }

    /* CSS untuk Tabel Hover */
    tbody tr:hover {
        background-color: #f0f0f0;
        /* Warna latar belakang saat dihover */
    }

    /* CSS untuk Teks Strong */
    strong {
        font-weight: bold;
        color: #555;
        /* Warna teks yang lebih gelap */
    }

    /* CSS untuk Table Responsif */
    .table-responsive {
        overflow-x: auto;
    }

    /* CSS untuk Nama Kolom di Baris Pertama */
    thead th {
        background-color: #333;
        /* Warna latar belakang header kolom */
        color: #fff;
        /* Warna teks header kolom */
    }

    /* CSS untuk Responsif pada Layar Kecil */
    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }

        th,
        td {
            padding: 10px;
        }

        .container {
            padding: 10px;
        }
    }
</style>

<div class="container">
    <h1>Pesanan Anda</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Pemesanan</th>
                    <th><strong>Nama</strong></th>
                    <th><strong>Jenis Kamar</strong></th>
                    <th><strong>Jumlah Kamar</strong></th>
                    <th><strong>Tanggal Check-in</strong></th>
                    <th><strong>Durasi Pemesanan</strong></th>
                    <th><strong>Tanggal Check-out</strong></th>
                    <th><strong>Total</strong></th>
                    <th><strong>Status</strong></th>
                    <th><strong>Detail</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pemesanan as $p): ?>
                    <?php if ($p['email'] == $_SESSION['email']): ?>
                        <tr>
                            <!-- Tampilkan detail pemesanan -->
                            <td>
                                <?= $p['id_pemesanan'] ?>
                            </td>
                            <td>
                                <strong>
                                    <?= $p['nama'] ?>
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    <?= $p['jenis_kamar'] ?>
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    <?= $p['jumlah_kamar'] ?>
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    <?= $p['tanggal_check_in'] ?>
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    <?= $p['durasi_pemesanan'] ?>
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    <?= $p['tanggal_check_out'] ?>
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    <?= $p['total'] ?>
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    <?php if ($p['status_bayar'] == '1') { ?>
                                        <p>Sukses</p>
                                    <?php } else { ?>
                                        <p>Pending</p>
                                    <?php } ?>
                                </strong>
                            </td>
                            <td>
                                <a href="<?= base_url('beranda/kuitansi/') . $p['id_pemesanan'] ?>"
                                    class="btn btn-primary">Cek</a>
                            </td>
                            <!-- Sisipkan kolom-kolom lainnya sesuai kebutuhan -->
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>