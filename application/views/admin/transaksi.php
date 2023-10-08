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
                        <th class="sticky">Jenis Paket</th>
                        <th class="sticky">Jumlah</th>
                        <th class="sticky">Total</th>
                        <th class="sticky">Uang Bayar</th>
                        <th class="sticky">Kembalian</th>
                        <th class="sticky">Status</th>
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
                                    <?= $data['or_number'] ?>
                                </td>
                                <td style="max-width: 150px; overflow:hidden;">
                                    <?= $data['pelanggan'] ?>
                                </td>
                                <td>
                                    <?= $data['j_paket'] ?>
                                </td>
                                <td>
                                    <?= $data['berat'] . " Kg" ?>
                                </td>
                                <td>
                                    <?= "Rp. " . $data['total'] ?>
                                </td>
                                <td>
                                    <?= "Rp. " . $data['nominal_byr'] ?>
                                </td>
                                <td>
                                    <?= "Rp. " . $data['kembalian'] ?>
                                </td>
                                <td><span class="success">
                                        <?= $data['status'] ?>
                                    </span></td>
                                <td align="center">
                                    <a href="<?= base_url('riwayat/detail/') . $data['id'] ?>"
                                        class=" btn btn-warning">Detail</a><br />
                                    <a href="<?= base_url('riwayat/cetak_info/') . $data['id'] ?>"
                                        class="btn btn-danger">Cetak Bukti</a>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    <?php else: ?>
                        <tr>
                            <td colspan="10" class="txt-center">Data tidak tersedia</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>