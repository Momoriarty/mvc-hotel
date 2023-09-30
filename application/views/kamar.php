<style>
    /* Gaya untuk container utama */
    .container-box {
        border: 1px solid #ddd;
        padding: 30px;
        border-radius: 10px;
        background-color: #f9f9f9;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        margin-top: 10px;
        margin-bottom: 10px;
    }

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

<div class="container mt-5 container-box">
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
                <h1 class="judul-kamar">Kamar
                    <?= $kamar['jenis_kamar']; ?>
                </h1>
                <p>
                    <?= $kamar['deskripsi_kamar']; ?>
                </p>
                <h2 class="fasilitas-kamar">Fasilitas Kamar</h2>
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
                    <?= $kamar['harga_kamar']; ?>
                </h3>
                <button class="btn btn-pesan">Pesan Sekarang</button>
            </div>
        </div>
    </div>
</div>