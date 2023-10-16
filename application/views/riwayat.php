<style>
    body {
        font-family: 'Helvetica Neue', sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    .container-box {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-top: 0;
        font-size: 36px;
    }

    .receipt {
        border: 2px solid #ccc;
        padding: 20px;
    }

    .info {
        margin-bottom: 15px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
    }

    .info label {
        font-weight: bold;
        display: block;
        color: #555;
    }

    .info p {
        margin: 0;
        color: #333;
    }
</style>


<div class="container-box">
    <h1>Riwayat Pemesanan Anda</h1>
    <div class="receipt">
        <div class="info">
            <label>ID Transaksi:</label>
            <p>&nbsp
                <?= $riwayat['id_transaksi'] ?>
            </p>
        </div>
        <div class="info">
            <label>ID Pemesanan:</label>
            <p>&nbsp
                <?= $riwayat['id_pemesanan'] ?>
            </p>
        </div>
        <div class="info">
            <label>Nama:</label>
            <p>&nbsp
                <?= $riwayat['nama'] ?>
            </p>
        </div>
        <div class="info">
            <label>Email:</label>
            <p>&nbsp
                <?= $riwayat['email'] ?>
            </p>
        </div>
        <div class="info">
            <label>Tanggal Check-in:</label>
            <p>&nbsp
                <?= $riwayat['tanggal_check_in'] ?>
            </p>
        </div>
        <div class="info">
            <label>Tanggal Check-out:</label>
            <p>&nbsp
                <?= $riwayat['tanggal_check_out'] ?>
            </p>
        </div>
        <div class="info">
            <label>Durasi Menginap (malam):</label>
            <p>&nbsp
                <?= $riwayat['durasi_pemesanan'] ?>
            </p>
        </div>
        <div class="info">
            <label>Tipe Kamar:</label>
            <p>&nbsp
                <?= $riwayat['jenis_kamar'] ?>
            </p>
        </div>
        <div class="info">
            <label>Total Pembayaran:</label>
            <p>&nbsp
                <?= $riwayat['total'] ?>
            </p>
        </div>
        <div class="info">
            <label>Nominal</label>
            <p>&nbsp
                <?= $riwayat['nominal'] ?>
            </p>
        </div>
        <div class="info">
            <label>Kembalian</label>
            <p>&nbsp
                <?= $riwayat['kembalian'] ?>
            </p>
        </div>
    </div>
</div>