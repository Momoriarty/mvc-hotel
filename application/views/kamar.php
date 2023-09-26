<div class="container" style="margin-top: 10px; margin-bottom:10px;">

    <div class="row">
        <a href="<?= base_url('') ?>" class="btn btn-primary">Kembali</a>
    </div>

    <div class="row" style="margin-top: 10px; margin-bottom:10px;">
        <!-- Kartu Anda di sini -->
        <div class="col-md-4">
            <div class="card mx-auto">
                <img src="<?= base_url('assets/admin/img/kamar/' . $kamar['gambar_kamar']); ?>" class="card-img-top" alt="Room Image">
                <div class="card-body">
                    <h5 class="card-title">Room No.
                        <?= $kamar['nomor_kamar']; ?>
                    </h5>
                    <p class="card-text">
                        <?= $kamar['jenis_kamar']; ?>
                    </p>
                    <p class="card-text">
                        <?= $kamar['deskripsi_kamar']; ?>
                    </p>
                    <p class="card-text">Price: $
                        <?= $kamar['harga_kamar']; ?> per night
                    </p>
                </div>
                <div class="card-footer">
                    <?php
                    if ($this->session->userdata('username')) {
                    ?>
                        <button class="btn btn-primary">bisa</button>
                    <?php
                    } else {
                    ?>
                        <a href="<?= base_url('login') ?>" class="btn btn-primary">gabisa </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


</div>