<div class="container">

<div class="row">
    <div class="col">
        <div class="card mx-auto mt-3">
            <div class="card-header">
                Quote
            </div>
            <div class="card-body px-5">
                <div class="mt-3">
                    <div class="row">
                        <div class="div col-sm-4">
                            <label for="" class="form-label">Check-in</label>
                            <input type="date" class="form-control" id="">
                        </div>
                        <div class="div col-sm-4">
                            <label for="" class="form-label">Durasi</label>
                            <select name="" id="" class="form-select">
                                <option value="">Opsi 1</option>
                            </select>
                        </div>
                        <div class="div col-sm-4">
                            <label for="" class="form-label">Check-out</label>
                            <input type="date" class="form-control" id="">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label for="" class="form-label mt-3">Tamu dan Kamar</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-primary mt-5" style="height: auto; width:200px;">Cari
                                Hotel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <?php foreach ($kamar as $no => $data): ?>
            <div class="col-md-3">
                <div class="card mx-auto mt-3">
                    <img src="<?= base_url('assets/admin/img/' . $data['gambar_kamar']); ?>" class="card-img-top" alt="">
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
                        <button class="btn btn-primary">Pesan</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>