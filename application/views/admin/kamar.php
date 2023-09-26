

<button type="button" class="btn btn-primary text-center mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Daftar Kamar
</button>

<?= $this->session->flashdata('admin_message') ?>


<div class="row">

    <?php foreach ($kamar as $no => $data): ?>
        <div class="col-md-3">
            <div class="card mx-auto mt-3">
                <img src="<?= base_url('assets/admin/img/kamar/' . $data['gambar_kamar']); ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Kamar No.
                        <?= $data['nomor_kamar']; ?>
                    </h5>
                    <p class="card-text">Kamar
                        <?= $data['jenis_kamar']; ?>
                    </p>
                    <p class="card-text">
                        <?= $data['deskripsi_kamar']; ?>
                    </p>
                    <p class="card-text">Harga Kamar:
                        <?= $data['harga_kamar']; ?>
                    </p>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#editModal<?= $data['id']; ?>">Edit</button>
                    <a class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal<?= $data['id']; ?>">Delete</a>
                </div>
            </div>
        </div>

        <!-- Modal Hapus Kamar -->
        <div class="modal fade" id="deleteModal<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Kamar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Anda yakin ingin menghapus kamar dengan Nomor Kamar:
                            <?= $data['nomor_kamar']; ?>?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a href="<?= base_url('admin/deleteKamar/') . $data['id']; ?>" class="btn btn-danger">Hapus</a>
                        <!-- Ganti 'module/kamar/aksi.php?module=kamar&act=delete' dengan URL yang sesuai dengan aplikasi Anda -->
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Edit Kamar -->
        <div class="modal fade" id="editModal<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Kamar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/updateKamar/') . $data['id']; ?>" method="POST"
                            enctype="multipart/form-data">
                            <!-- Ganti 'module/kamar/aksi.php?module=kamar&act=update' dengan URL yang sesuai dengan aplikasi Anda -->
                            <div class="mb3">
                                <input type="hidden" name="id" class="form-control" id="" placeholder=""
                                    value="<?= $data['id']; ?>" readonly>
                            </div>
                            <div class="mb3">
                                <label for="nomor_kamar" class="">Nomor Kamar</label>
                                <input type="text" name="nomor_kamar" class="form-control" id=""
                                    placeholder="Nomor Kamar....." value="<?= $data['nomor_kamar']; ?>" readonly>
                            </div>
                            <!-- Tambahkan input untuk mengedit informasi kamar seperti jenis kamar, deskripsi, harga, dll. -->
                            <div class="mb-3">
                                <label for="jenis_kamar" class="form-label">Jenis Kamar</label>
                                <input type="text" name="jenis_kamar" class="form-control" id=""
                                    value="<?= $data['jenis_kamar']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi_kamar" class="form-label">Deskripsi Kamar</label>
                                <input type="text" name="deskripsi_kamar" class="form-control" id=""
                                    value="<?= $data['deskripsi_kamar']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="harga_kamar" class="form-label">Harga Kamar</label>
                                <input type="text" name="harga_kamar" class="form-control" id=""
                                    value="<?= $data['harga_kamar']; ?>" required>
                            </div>
                            <!-- Lanjutkan dengan input lainnya yang ingin diubah -->

                            <div class="mb-3">
                                <a href="<?= base_url('admin/') ?>" class="btn btn-primary">Batal</a>
                                <input type="submit" value="Update Data" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>


</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahkamar'); ?>" method="post" enctype="multipart/form-data">
                    <div class="">
                        <label for="" class="form-label">Nomor Kamar</label>
                        <input type="text" name="nomor_kamar" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="jenis_kamar">Jenis Kamar</label>
                        <select name="jenis_kamar" id="jenis_kamar" class="form-select">
                            <option value="standard">Standard Room</option>
                            <option value="superior">Superior Room</option>
                            <option value="deluxe">Deluxe Room</option>
                            <option value="suite">Suite Room</option>
                            <option value="executive">Executive Room</option>
                            <option value="presidential">Presidential Suite</option>
                            <option value="single">Single Room</option>
                            <option value="double">Double Room</option>
                            <option value="twin">Twin Room</option>
                            <option value="family">Family Room</option>
                            <option value="junior">Junior Suite</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="harga_kamar">Harga Kamar</label>
                        <input type="text" id="harga_kamar" class="form-control" name="harga_kamar" readonly>
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Deskripsi Kamar</label>
                        <input type="text" name="deskripsi_kamar" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Gambar Kamar</label>
                        <input type="file" name="gambar_kamar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>



<script>
    // Fungsi untuk mengisi otomatis harga kamar berdasarkan jenis kamar yang dipilih
    document.getElementById('jenis_kamar').addEventListener('change', function () {
        var jenisKamar = this.value;
        var hargaKamarInput = document.getElementById('harga_kamar');

        // Tentukan harga berdasarkan jenis kamar yang dipilih
        var hargaKamar = '';
        switch (jenisKamar) {
            case 'standard':
                hargaKamar = '100';
                break;
            case 'superior':
                hargaKamar = '150';
                break;
            case 'deluxe':
                hargaKamar = '200';
                break;
            case 'suite':
                hargaKamar = '200';
                break;
            case 'executive':
                hargaKamar = '200';
                break;
            case 'twin':
                hargaKamar = '200';
                break;
            case 'family':
                hargaKamar = '200';
                break;
            case 'junior':
                hargaKamar = '200';
                break;
            case 'single':
                hargaKamar = '200';
                break;
            case 'presidential':
                hargaKamar = '200';
                break;
            // Tambahkan jenis kamar lainnya di sini
        }

        // Isi otomatis harga kamar
        hargaKamarInput.value = hargaKamar;
    });
</script>