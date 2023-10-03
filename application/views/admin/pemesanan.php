<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mx-auto" data-bs-toggle="modal" data-bs-target="#tambahPemesananModal">
    Tambah Pemesanan
</button>

<?= $this->session->flashdata('admin_message') ?>

<div class="row">
    <?php foreach ($pemesanan as $no => $data): ?>
        <div class="col-md-3">
            <div class="card mx-auto mt-3">
                <div class="card-body">
                    <h5 class="card-title">
                        Nama Tamu:
                        <?= $data['nama']; ?>
                    </h5>
                    <p class="card-text">
                        Tanggal Check-in:
                        <?= $data['tanggal_check_in']; ?>
                    </p>
                    <p class="card-text">
                        Tanggal Check-out:
                        <?= $data['tanggal_check_out']; ?>
                    </p>
                    <p class="card-text">
                        Tipe Kamar:
                        <?= $data['jenis_kamar']; ?>
                    </p>
                    <p class="card-text">
                        Jumlah Orang:
                        <?= $data['jumlah_kamar']; ?>
                    </p>
                    <p class="card-text">
                        Harga Kamar:
                        <?= $data['total']; ?>
                    </p>
                    <p class="card-text">
                        Status :
                        <?= $data['status']; ?>
                    </p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#editModal<?= $data['id_pemesanan']; ?>">Edit</button>
                    <a class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal<?= $data['id_pemesanan']; ?>">Delete</a>
                </div>
            </div>
        </div>

        <!-- Modal Hapus Pemesanan -->
        <div class="modal fade" id="deleteModal<?= $data['id_pemesanan']; ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Pemesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Anda yakin ingin menghapus pemesanan oleh:
                            <?= $data['nama']; ?>?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a href="<?= base_url('pemesanan/deletePemesanan/') . $data['id_pemesanan']; ?>"
                            class="btn btn-danger">Hapus</a>
                        <!-- Update the href URL to match your delete reservation function -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Pemesanan -->
        <div class="modal fade" id="editModal<?= $data['id_pemesanan']; ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Pemesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('pemesanan/updatePemesanan/') . $data['id_pemesanan']; ?>" method="POST">
                            <!-- Add form fields to edit reservation information -->
                            <div class="mb3">
                                <input type="hidden" name="id_pemesanan" class="form-control" id="" placeholder=""
                                    value="<?= $data['id_pemesanan']; ?>" readonly>
                            </div>
                            <div class="mb3">
                                <label for="" class="form-label">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="pending">Pending</option>
                                    <option value="confirm">Sukses</option>
                                </select>
                            </div>
                            <!-- Add more fields as needed -->

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>



<!-- Modal Tambah Pemesanan -->
<div class="modal fade" id="tambahPemesananModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pemesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pemesanan/tambahPemesanan'); ?>" method="post">
                    <div class="mb-3">
                        <label for="nama_tamu" class="form-label">Nama Tamu</label>
                        <input type="text" name="nama_tamu" class="form-control" id="nama_tamu" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_check_in" class="form-label">Tanggal Check-in</label>
                        <input type="date" name="tanggal_check_in" class="form-control" id="tanggal_check_in" required>
                    </div>
                    <div class="mb-3">
                        <label for="durasi_pemesanan" class="form-label">Durasi Pemesanan</label>
                        <input type="text" name="durasi_pemesanan" class="form-control" id="durasi_pemesanan" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_check_out" class="form-label">Tanggal Check-out</label>
                        <input type="date" name="tanggal_check_out" class="form-control" id="tanggal_check_out"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                        <input type="text" name="tipe_kamar" class="form-control" id="tipe_kamar" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_orang" class="form-label">Jumlah Orang</label>
                        <input type="number" name="jumlah_orang" class="form-control" id="jumlah_orang" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_kamar" class="form-label">Harga Kamar</label>
                        <input type="text" name="harga_kamar" class="form-control" id="harga_kamar" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </div>
            </form>
        </div>
    </div>
</div>