<style>
    /* Gaya untuk slider gambar */
    .carousel-inner {
        border-radius: 10px;
        overflow: hidden;
    }

    /* Gaya untuk gambar dalam slider */
    .carousel-item img {
        max-height: 400px;
        border-radius: 10px;
    }

    /* Gaya untuk deskripsi kamar */
    .room-details {
        text-align: left;
    }

    /* Gaya untuk judul kamar */
    .judul-kamar {
        font-size: 36px;
        color: #333;
        margin-top: 10px;
    }

    /* Gaya untuk harga kamar */
    .harga-kamar {
        font-size: 28px;
        color: #ff5722;
        margin-top: 5px;
    }

    /* Gaya untuk fasilitas kamar */
    .fasilitas-kamar ul {
        list-style-type: disc;
        margin-left: 20px;
        font-size: 24px;
    }

    /* Gaya untuk tombol pesan sekarang */
    .btn-pesan {
        margin-top: 30px;
        font-size: 24px;
        padding: 15px 30px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-pesan:hover {
        background-color: #0056b3;
    }
</style>
<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-md-6">
            <!-- Slider Gambar Kamar -->
            <div id="imageSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <!-- Add your carousel indicators here if you have more than one image -->
                    <!-- For now, let's assume you have only one image -->
                    <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- Replace this with your dynamic image -->
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/admin/img/kamar/' . $kamar['gambar_kamar']); ?>"
                            class="d-block w-100" alt="<?= $kamar['jenis_kamar']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Deskripsi Kamar -->
            <div class="room-details">
                <!-- Replace the static text with dynamic data -->
                <h1 class="judul-kamar">
                    <?= $kamar['jenis_kamar']; ?>
                </h1>
                <p>
                    <?= $kamar['deskripsi_kamar']; ?>
                </p>
                <h2>Fasilitas Kamar</h2>
                <ul>
                    <!-- Add dynamic list items based on your data -->
                    <!-- Example using static text, replace it with dynamic data -->
                    <li>Wi-Fi</li>
                    <li>TV Layar Datar</li>
                    <li>AC</li>
                    <li>Mini Bar</li>
                    <li>Kamar Mandi Pribadi</li>
                </ul>
                <!-- Replace the static price with dynamic price -->
                <h3 class="harga-kamar">Harga Kamar:
                    <?= $kamar['harga_kamar']; ?> / Malam
                </h3>
            </div>
        </div>
    </div>
</div>

<!-- Bagian Pemesanan -->
<div class="container" style="margin-top:20px; margin-bottom:20px;">
    <div class="row">
        <!-- Form Pemesanan Kamar -->
        <form action="<?= base_url('beranda/pemesanankamar'); ?>" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            value="<?= $_SESSION['nama_user']; ?>" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email:</label>
                        <input type="email" class="form-control" name="email" id="email"
                            value="<?= $_SESSION['email']; ?>" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor Telepon:</label>
                        <input type="tel" class="form-control" name="no_hp" id="no_hp"
                            value="<?= $_SESSION['no_hp']; ?>" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jenis Kamar:</label>
                        <input type="text" class="form-control" name="jenis_kamar" value="<?= $kamar['jenis_kamar']; ?>"
                            id="" readonly>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah Kamar:</label>
                        <select name="jumlah_kamar" class="form-control">
                            <option value="">Pilih Jumlah Kamar</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="check-in" class="form-label">Check-in Date:</label>
                        <input type="date" class="form-control" name="tanggal_check_in" id="check-in" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (Malam):</label>
                        <select name="durasi_pemesanan" id="duration" class="form-control">
                            <option value="">Pilih Berapa Malam</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="check-out" class="form-label">Check-out Date:</label>
                        <input type="date" class="form-control" name="tanggal_check_out" id="check-out" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="harga_kamar" value="<?= $kamar['harga_kamar']; ?>" readonly>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:20px;">Pesan Sekarang</button>
        </form>
    </div>
</div>

<script>
    // Mengambil elemen input date
    var checkInInput = document.getElementById("check-in");

    // Mendapatkan tanggal hari ini dalam format YYYY-MM-DD
    var today = new Date().toISOString().split("T")[0];

    // Mengatur tanggal minimum pada input date
    checkInInput.min = today;
</script>

<script>
    var checkInInput = document.getElementById("check-in");
    var durationSelect = document.getElementById("duration");
    var checkOutInput = document.getElementById("check-out");

    checkInInput.addEventListener("change", function () {
        var checkInDate = new Date(checkInInput.value);
        var duration = parseInt(durationSelect.value);

        if (!isNaN(duration) && duration > 0) {
            checkInDate.setDate(checkInDate.getDate() + duration);
            var checkOutDate = checkInDate.toISOString().split("T")[0];
            checkOutInput.value = checkOutDate;
        } else {
            checkOutInput.value = "";
        }
    });

    durationSelect.addEventListener("change", function () {
        var checkInDate = new Date(checkInInput.value);
        var duration = parseInt(durationSelect.value);

        if (!isNaN(duration) && duration > 0) {
            checkInDate.setDate(checkInDate.getDate() + duration);
            var checkOutDate = checkInDate.toISOString().split("T")[0];
            checkOutInput.value = checkOutDate;
        } else {
            checkOutInput.value = "";
        }
    });
</script>