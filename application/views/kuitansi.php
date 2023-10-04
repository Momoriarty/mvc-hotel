<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuitansi Pemesanan Anda</title>
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
</head>

<body>
    <div class="container-box">
        <h1>Kuitansi Pemesanan Anda</h1>
        <div class="receipt">
            <div class="info">
                <label>ID Pemesanan:</label>
                <p>&nbsp
                    <?= $kuitansi['id_pemesanan'] ?>
                </p>
            </div>
            <div class="info">
                <label>Nama:</label>
                <p>&nbsp
                    <?= $kuitansi['nama'] ?>
                </p>
            </div>
            <div class="info">
                <label>Email:</label>
                <p>&nbsp
                    <?= $kuitansi['email'] ?>
                </p>
            </div>
            <div class="info">
                <label>Tanggal Check-in:</label>
                <p>&nbsp
                    <?= $kuitansi['tanggal_check_in'] ?>
                </p>
            </div>
            <div class="info">
                <label>Tanggal Check-out:</label>
                <p>&nbsp
                    <?= $kuitansi['tanggal_check_out'] ?>
                </p>
            </div>
            <div class="info">
                <label>Durasi Menginap (malam):</label>
                <p>&nbsp
                    <?= $kuitansi['durasi_pemesanan'] ?>
                </p>
            </div>
            <div class="info">
                <label>Tipe Kamar:</label>
                <p>&nbsp
                    <?= $kuitansi['jenis_kamar'] ?>
                </p>
            </div>
            <div class="info">
                <label>Total Pembayaran:</label>
                <p>&nbsp
                    <?= $kuitansi['total'] ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>