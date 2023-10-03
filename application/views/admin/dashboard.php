<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jumlah Pengguna</h5>
                <p class="card-text">Total pengguna yang terdaftar:
                    <?php echo $total_user; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jumlah Jenis Kamar</h5>
                <p class="card-text">Total jenis kamar yang tersedia:
                    <?php echo $total_kamar; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jumlah Pesanan</h5>
                <p class="card-text">Total Pesanan Yang telah dipesan:
                    <?php echo $total_pemesanan; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Transaksi</h5>
                <p class="card-text">Total transaksi terkonfirmasi:
                    <?php echo $total_terkonfirmasi; ?>
                </p>
                <p class="card-text">Total transaksi pending:
                    <?php echo $total_pending; ?>
                </p>
            </div>
        </div>
    </div>

</div>