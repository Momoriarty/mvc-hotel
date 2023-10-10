<div class="card">
    <div class="card-title card-flex">
        <div class="card-col">
            <h2>Daftar Transaksi</h2>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="sticky">No</th>
                        <th class="sticky">No. Order</th>
                        <th class="sticky" width="10%">Nama</th>
                        <th class="sticky">Email</th>
                        <th class="sticky">No Hp</th>
                        <th class="sticky">Jenis Paket</th>
                        <th class="sticky">Tanggal Pesan</th>
                        <th class="sticky">Jumlah Kamar </th>
                        <th class="sticky">Tanggal Check in</th>
                        <th class="sticky">Durasi Malam </th>
                        <th class="sticky">Tanggal Check Out</th>
                        <th class="sticky">Total</th>
                        <th class="sticky">Uang Bayar</th>
                        <th class="sticky">Kembalian</th>
                        <th class="sticky" style="text-align: center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($riwayat)): ?>
                        <?php foreach ($riwayat as $no => $data): ?>
                            <tr>
                                <td>
                                    <?= $no + 1; ?>
                                </td>
                                <td>
                                    <?= $data['id_transaksi'] ?>
                                </td>
                                <td style="max-width: 150px; overflow:hidden;">
                                    <?= $data['nama'] ?>
                                </td>
                                <td>
                                    <?= $data['email'] ?>
                                </td>
                                <td>
                                    <?= $data['no_hp'] ?>
                                </td>
                                <td>
                                    <?= $data['jenis_kamar'] ?>
                                </td>
                                <td>
                                    <?= $data['tanggal_pesan'] ?>
                                </td>
                                <td>
                                    <?= $data['jumlah_kamar'] ?>
                                </td>
                                <td>
                                    <?= $data['tanggal_check_in'] ?>
                                </td>
                                <td>
                                    <?= $data['durasi_pemesanan'] ?>
                                </td>
                                <td>
                                    <?= $data['tanggal_check_out'] ?>
                                </td>
                                <td>
                                    <?= "Rp. " . $data['total'] ?>
                                </td>
                                <td>
                                    <?= "Rp. " . $data['nominal'] ?>
                                </td>
                                <td>
                                    <?= "Rp. " . $data['kembalian'] ?>
                                </td>
                                <td align="center">
                                    <a href="<?= base_url('riwayat/detail/') . $data['id_transaksi'] ?>"
                                        class=" btn btn-warning">Detail</a><br />
                                    <a href="<?= base_url('riwayat/cetak_info/') . $data['id_transaksi'] ?>"
                                        class="btn btn-danger">Cetak Bukti</a>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    <?php else: ?>
                        <tr>
                            <td colspan="14" class="txt-center">Data tidak tersedia</td>
                        </tr>
                    <?php endif ?>
                </tbody>

            </table>
        </div>
    </div>
</div>