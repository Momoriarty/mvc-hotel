</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('login/logout') ?>">Logout</a>
            </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/admin/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/admin/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/admin/vendor/chart.js/Chart.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/admin/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('assets/admin/js/demo/chart-pie-demo.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/admin/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<script src="<?= base_url('assets/admin/js/demo/datatables-demo.js') ?>"></script>

<script>
    $('.form').find('input, textarea').on('keyup blur focus', function (e) {

        var $this = $(this),
            label = $this.prev('label');

        if (e.type === 'keyup') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if ($this.val() === '') {
                label.removeClass('active highlight');
            } else {
                label.removeClass('highlight');
            }
        } else if (e.type === 'focus') {

            if ($this.val() === '') {
                label.removeClass('highlight');
            } else if ($this.val() !== '') {
                label.addClass('highlight');
            }
        }

    });

    $('.tab a').on('click', function (e) {

        e.preventDefault();

        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');

        target = $(this).attr('href');

        $('.tab-content > div').not(target).hide();

        $(target).fadeIn(600);

    });
</script>

<script>
    $(document).ready(function () {
        // Handle image selection
        $('#imageModal .img-thumbnail').click(function () {
            var selectedImageUrl = $(this).attr('src');
            $('#imageInput').val(selectedImageUrl); // Set the image URL in an input field
            $('#imageModal').modal('hide'); // Close the modal
        });
    });
</script>

<script>
    $(document).ready(function () {
        // Ketika gambar di modal dipilih
        $('.modal-body img').click(function () {
            var selectedImageUrl = $(this).attr('src');
            var selectedTextUrl = $(this).attr('value');
            $('#selectedProfileImage').attr('src', selectedImageUrl); // Set URL gambar yang terpilih pada gambar yang ditampilkan
            $('#profileInput').val(selectedTextUrl); // Set URL gambar yang terpilih sebagai nilai input teks dengan ID "profileInput"
        });
    });
</script>



</body>

</html>