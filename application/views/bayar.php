<style>
    /* Style for the card container */
    .card-payment {
        width: 300px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: 0 auto;
    }

    /* Style for the payment icon */
    .icon-header img {
        width: 100px;
        /* Adjust the size as needed */
        margin-bottom: 10px;
    }

    /* Style for the heading */
    .txt h3 {
        font-size: 24px;
        color: #333;
    }

    /* Style for the description paragraph */
    .txt p {
        font-size: 14px;
        color: #777;
        margin-bottom: 20px;
    }

    /* Style for the input field */
    form input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 16px;
    }

    /* Style for the submit button */
    form button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    /* Hover effect for the submit button */
    form button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<div class="card-payment">
    <div class="icon-header">
        <img src="<?= base_url('asset/img/payment.svg') ?>" alt="Icon Payment" width="178">
    </div>

    <div class="txt">
        <h3>#no_order:
            <?= $bayar['id_pemesanan'] ?>
        </h3>
        <h3>Jumlah Rp.<?= $bayar['total'] ?></h3>
        <p>Masukkan nominal untuk melakukan transaksi</p>
    </div>
    <form action="" method="post">
        <input type="hidden" name="or_number" value="<?= $bayar['id_pemesanan'] ?>">
        <input type="hidden" name="pelanggan" value="<?= $bayar['nama'] ?>">
        <input type="hidden" name="no_telp" value="<?= $bayar['email'] ?>">
        <input type="hidden" name="alamat" value="<?= $bayar['no_hp'] ?>">
        <input type="hidden" name="j_paket" value="<?= $bayar['jenis_kamar'] ?>">
        <input type="hidden" name="berat" value="<?= $bayar['jumlah_kamar'] ?>">
        <input type="hidden" name="wkt_kerja" value="<?= $bayar['tanggal_pesan'] ?>">
        <input type="hidden" name="h_perkilo" value="<?= $bayar['tanggal_check_in'] ?>">
        <input type="hidden" name="tgl_msk" value="<?= $bayar['durasi_pemesanan'] ?>">
        <input type="hidden" name="tgl_klr" value="<?= $bayar['tanggal_check_out'] ?>">
        <input type="hidden" name="total" value="<?= $bayar['total'] ?>">

        <input type="text" name="nominal" required autofocus autocomplete="off" placeholder="Nominal ex: '120000'">
        <button type="submit" name="bayar_ck">Bayar</button>
    </form>
</div>