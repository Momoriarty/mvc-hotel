<div class="container">
    <h1>Pesananan Anda</h1>
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
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pemesanan as $p): ?>
                <?php if ($p['email'] = $_SESSION['email']) ?>
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
                            <?= $p['status'] ?>
                        </strong>
                    </td>
                    <!-- Sisipkan kolom-kolom lainnya sesuai kebutuhan -->
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>