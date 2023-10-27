<div id="footer">
    <div class="container text-center">
        <div class="col-md-4">
            <h3>Address</h3>
            <div class="contact-item">
                <p>4321 California St,</p>
                <p>San Francisco, CA 12345</p>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Opening Hours</h3>
            <div class="contact-item">
                <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
                <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Contact Info</h3>
            <div class="contact-item">
                <p>Phone: +1 123 456 1234</p>
                <p>Email: info@company.com</p>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center copyrights">
        <div class="col-md-8 col-md-offset-2">
            <div class="social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <p>&copy; 2016 Touché. All rights reserved. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="<?= base_url('assets/js/jquery.1.11.1.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/SmoothScroll.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/nivo-lightbox.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.isotope.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jqBootstrapValidation.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/contact_me.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $('.form').find('input, textarea').on('keyup blur focus', function(e) {

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

    $('.tab a').on('click', function(e) {

        e.preventDefault();

        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');

        target = $(this).attr('href');

        $('.tab-content > div').not(target).hide();

        $(target).fadeIn(600);

    });
</script>

<script>
    $(document).ready(function() {
        // Handle image selection
        $('#imageModal .img-thumbnail').click(function() {
            var selectedImageUrl = $(this).attr('src');
            $('#imageInput').val(selectedImageUrl); // Set the image URL in an input field
            $('#imageModal').modal('hide'); // Close the modal
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Ketika gambar di modal dipilih
        $('.modal-body img').click(function() {
            var selectedImageUrl = $(this).attr('src');
            var selectedTextUrl = $(this).attr('value');
            $('#selectedProfileImage').attr('src', selectedImageUrl); // Set URL gambar yang terpilih pada gambar yang ditampilkan
            $('#profileInput').val(selectedTextUrl); // Set URL gambar yang terpilih sebagai nilai input teks dengan ID "profileInput"
        });
    });
</script>



</body>

</html>