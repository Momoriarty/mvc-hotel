<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuitansi Pemesanan Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container-box {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 0;
        }

        .receipt {
            border: 1px solid #ccc;
            padding: 20px;
        }

        .info {
            margin-bottom: 10px;
        }

        .info label {
            font-weight: bold;
            width: 150px;
            display: inline-block;
        }

        .info p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container-box">
        <h1>Kuitansi Pemesanan Anda</h1>
        <div class="receipt">
            <div class="info">
                <label>Nama:</label>
                <p><?= $kuitansi['id_pemesanan'] ?></p>
            </div>
            <div class="info">
                <label>Nama:</label>
                <p><?= $kuitansi['nama'] ?></p>
            </div>
            <div class="info">
                <label>Email:</label>
                <p><?= $kuitansi['email'] ?></p>
            </div>
            <div class="info">
                <label>Tanggal Check-in:</label>
                <p><?= $kuitansi['tanggal_check_in'] ?></p>
            </div>
            <div class="info">
                <label>Durasi Menginap (malam):</label>
                <p><?= $kuitansi['durasi_pemesanan'] ?></p>
            </div><br>
            <div class="info">
                <label>Tanggal Check-in:</label>
                <p><?= $kuitansi['tanggal_check_out'] ?></p>
            </div>
            <div class="info">
                <label>Tipe Kamar:</label>
                <p><?= $kuitansi['jenis_kamar'] ?></p>
            </div>
            <div class="info">
                <label>Total Pembayaran:</label>
                <p><?= $kuitansi['total'] ?></p>
            </div>
        </div>
    </div>
</body>

</html>
