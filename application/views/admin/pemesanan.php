<style>
    select {
        /* Reset Select */
        appearance: none;
        outline: 10px red;
        border: 0;
        box-shadow: none;
        /* Personalize */
        flex: 1;
        padding: 0 1em;
        color: #fff;
        background-color: var(--darkgray);
        background-image: none;
        cursor: pointer;
    }

    /* Remove IE arrow */
    select::-ms-expand {
        display: none;
    }

    /* Custom Select wrapper */
    .select {
        position: relative;
        display: flex;
        width: 20em;
        height: 3em;
        border-radius: .25em;
        overflow: hidden;
    }

    /* Arrow */
    .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        padding: 1em;
        background-color: #34495e;
        transition: .25s all ease;
        pointer-events: none;
    }

    /* Transition */
    .select:hover::after {
        color: #f39c12;
    }
</style>

<div class="row">

    <div class="col-md-3 mb-3">
        <label for="">Status Pembayaran</label>
        <div class="select">
            <select id="status-pembayaran-input" name="status-pembayaran-input">
                <option value="all">All</option>
                <option value="0">Pending</option>
                <option value="1">Sukses</option>
            </select>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="">Status Kamar</label>
        <div class="select">
            <select id="status-kamar-input" name="status-kamar-input">
                <option value="all">All</option>
                <option value="1">Selesai</option>
                <option value="0">Digunakan</option>
            </select>
        </div>
    </div>

    <!-- Kolom Pencarian -->
    <div class="col-md-3 mb-3">
        <label for="search-input">Cari Ap aja</label>
        <input type="text" id="search-input" class="select" placeholder="Cari nama tamu">
    </div>
</div>


<?= $this->session->flashdata('admin_message') ?>

<div class="row">
    <?php foreach ($pemesanan as $no => $data): ?>
        <div class="col-md-3 reservation-card" data-status-pembayaran="<?= $data['status_bayar']; ?>"
            data-status-kamar="<?= $data['status_kamar']; ?>">
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
                        Total Bayar:
                        <?= $data['total']; ?>
                    </p>
                    <p class="card-text">
                        Status Pembayaran :
                        <?php if ($data['status_bayar'] == '1') { ?>
                            Sukses
                        <?php } else { ?>
                            Pending
                        <?php } ?>
                    </p>
                    <p class="card-text">
                        Status Kamar :
                        <?php if ($data['status_kamar'] == '0') { ?>
                            Digunakan
                        <?php } else { ?>
                            Selesai
                        <?php } ?>
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
                                <input type="hidden" name="jenis_kamar" class="form-control" id="" placeholder=""
                                    value="<?= $data['jenis_kamar']; ?>" readonly>
                                <input type="hidden" name="jumlah_kamar" class="form-control" id="" placeholder=""
                                    value="<?= $data['jumlah_kamar']; ?>" readonly>
                            </div>
                            <div class="mb3">
                                <label for="" class="form-label">Status</label>
                                <select name="status_kamar" id="" class="form-control">
                                    <option value="0">Pending</option>
                                    <option value="1">Sukses</option>
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Event listener untuk input pencarian "Status Pembayaran" dan "Status Kamar"
    $('#status-pembayaran-input, #status-kamar-input').on('change', function () {
        var searchStatusPembayaran = $('#status-pembayaran-input').val().toLowerCase();
        var searchStatusKamar = $('#status-kamar-input').val().toLowerCase();

        // Sembunyikan semua kartu awalnya
        $('.reservation-card').hide();

        // Tampilkan kartu yang cocok dengan teks pencarian "Status Pembayaran" dan "Status Kamar"
        $('.reservation-card').each(function () {
            var cardStatusPembayaran = $(this).data('status-pembayaran').toString();
            var cardStatusKamar = $(this).data('status-kamar').toString();

            if ((searchStatusPembayaran === 'all' || cardStatusPembayaran === searchStatusPembayaran) &&
                (searchStatusKamar === 'all' || cardStatusKamar === searchStatusKamar)) {
                $(this).show();
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        // Secara awal, tampilkan semua kartu reservasi
        $('.reservation-card').show();

        // Tambahkan event listener untuk input pencarian
        $('#search-input').on('input', function () {
            var searchText = $(this).val().toLowerCase();

            // Sembunyikan semua kartu awalnya
            $('.reservation-card').hide();

            if (searchText.length === 0) {
                // Jika kolom pencarian kosong, tampilkan semua kartu
                $('.reservation-card').show();
            } else {
                // Selain itu, tampilkan kartu yang cocok dengan teks pencarian
                $('.reservation-card').each(function () {
                    var cardText = $(this).text().toLowerCase();
                    if (cardText.indexOf(searchText) !== -1) {
                        $(this).show();
                    }
                });
            }
        });
    });
</script>