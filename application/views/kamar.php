<div class="container">
    <!-- Search Form -->
    <div class="row">
        <div class="col">
            <div class="card mx-auto mt-3">
                <div class="card-header">
                    <h4>Hotel Search</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="check-in" class="form-label">Check-in</label>
                            <input type="date" class="form-control" id="check-in">
                        </div>
                        <div class="col-md-4">
                            <label for="duration" class="form-label">Duration</label>
                            <select name="duration" id="duration" class="form-control">
                                <option value="1">1 Night</option>
                                <option value="2">2 Nights</option>
                                <!-- Add more duration options here -->
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="check-out" class="form-label">Check-out</label>
                            <input type="date" class="form-control" id="check-out">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="guests" class="form-label">Guests and Rooms</label>
                        <input type="text" class="form-control" id="guests">
                    </div>
                    <button class="btn btn-primary mt-3">Search</button>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-4">
        <!-- Kartu Anda di sini -->
        <div class="col-md-4">
            <div class="card mx-auto mt-3">
                <img src="<?= base_url('assets/admin/img/kamar' . $kamar['gambar_kamar']); ?>" class="card-img-top"
                    alt="Room Image">
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
                    <button class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>


    </div>


</div>