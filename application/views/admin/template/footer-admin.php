</div>
</div>
</div>
<script>
    // Ambil elemen pesan flash
    var alertElement = document.querySelector('.custom-alert');

    // Tentukan waktu dalam milidetik sebelum pesan flash akan dihilangkan (misalnya, 5000ms atau 5 detik)
    var delay = 2000; // Anda dapat mengganti nilai ini sesuai kebutuhan

    // Setelah jangka waktu tertentu, sembunyikan pesan flash dengan animasi
    setTimeout(function () {
        if (alertElement) {
            alertElement.style.transition = 'opacity 1s ease';
            alertElement.style.opacity = '0';
            setTimeout(function () {
                alertElement.style.display = 'none';
            }, 1000); // Waktu tambahan untuk menghapus elemen setelah animasi selesai
        }
    }, delay);

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
<script src="<?= base_url('assets/admin/js/scripts.js') ?>"></script>
<script src="<?= base_url('assets/admin/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('assets/admin/demo/chart-bar-demo.js') ?>"></script>
<script src="<?= base_url('assets/admin/js/datatables-simple-demo.js') ?>"></script>

</body>

</html>