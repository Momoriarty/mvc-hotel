

<button type="button" class="btn btn-primary mx-auto mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Daftar Fasilitas
</button>

<?= $this->session->flashdata('admin_message') ?>


<div class="row">
    <?php foreach ($fasilitas as $no => $data): ?>
        <div class="col-md-3">
            <div class="card mx-auto mt-3">
                <img src="<?= base_url('assets/admin/img/fasilitas/' . $data['gambar_fasilitas']); ?>" class="card-img-top"
                    alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $data['nama_fasilitas']; ?>
                    </h5>
                    <p class="card-text">
                        <?= $data['deskripsi_fasilitas']; ?>
                    </p>
                    <p class="card-text">Kategori:
                        <?= $data['kategori_fasilitas']; ?>
                    </p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#editModal<?= $data['id']; ?>">Edit</button>
                    <a class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal<?= $data['id']; ?>">Delete</a>
                </div>
            </div>
        </div>

        <!-- Modal Hapus Fasilitas -->
        <div class="modal fade" id="deleteModal<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Fasilitas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Anda yakin ingin menghapus fasilitas dengan nama:
                            <?= $data['nama_fasilitas']; ?>?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a href="<?= base_url('fasilitas/deleteFasilitas/') . $data['id']; ?>"
                            class="btn btn-danger">Hapus</a>
                        <!-- Update the href URL to match your delete facility function -->
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Edit Fasilitas -->
        <div class="modal fade" id="editModal<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Fasilitas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('fasilitas/updateFasilitas/') . $data['id']; ?>" method="POST"
                            enctype="multipart/form-data">
                            <!-- Add form fields to edit facility information -->
                            <div class="mb3">
                                <input type="hidden" name="id" class="form-control" id="" placeholder=""
                                    value="<?= $data['id']; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
                                <input type="text" name="nama_fasilitas" class="form-control"
                                    value="<?= $data['nama_fasilitas']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi_fasilitas" class="form-label">Deskripsi Fasilitas</label>
                                <textarea name="deskripsi_fasilitas" class="form-control" rows="4"
                                    required><?= $data['deskripsi_fasilitas']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="kategori_fasilitas" class="form-label">Kategori Fasilitas</label>
                                <input type="text" name="kategori_fasilitas" class="form-control"
                                    value="<?= $data['kategori_fasilitas']; ?>" required>
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

<!-- Button trigger modal -->
<!-- Modal for adding a new facility -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('fasilitas/tambahFasilitas'); ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="kategori_fasilitas" class="form-label">Kategori Fasilitas</label>
                        <select name="kategori_fasilitas" class="form-select" id="kategori_fasilitas">
                            <option value="restoran">RESTAURANT</option>
                            <option value="swimming">SWIMMING POOL</option>
                            <option value="cafe">CAFÉ</option>
                            <option value="gym">GYM</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
                        <input type="text" name="nama_fasilitas" class="form-control" id="nama_fasilitas" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_fasilitas" class="form-label">Deskripsi Fasilitas</label>
                        <textarea name="deskripsi_fasilitas" class="form-control" id="deskripsi_fasilitas" rows="4"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_fasilitas" class="form-label">Gambar Fasilitas</label>
                        <input type="file" name="gambar_fasilitas" class="form-control" id="gambar_fasilitas" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

