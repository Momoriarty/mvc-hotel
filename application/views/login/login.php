<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webleb</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Poppins:300);

    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        background: #01939c;
        overflow-y: hidden !important;
        font-family: 'Poppins', sans-serif;
    }

    a {
        text-decoration: none;
        color: #01939c;
        transition: 0.5s ease;
    }

    a:hover {
        color: #179b77;
    }

    .form {
        background: #12141d;
        padding: 40px;
        max-width: 600px;
        margin: 40px auto;
        border-radius: 15px;
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, .3);
    }

    .tab-group {
        list-style: none;
        padding: 0;
        margin: 0 0 40px 0;
    }

    .tab-group:after {
        content: "";
        display: table;
        clear: both;
    }

    .tab-group li a {
        display: block;
        text-decoration: none;
        padding: 15px;
        background: rgba(160, 179, 176, .25);
        color: #a0b3b0;
        font-size: 20px;
        float: left;
        width: 48%;
        text-align: center;
        cursor: pointer;
        transition: 0.5s ease;
    }

    .tab-group li a:hover {
        background: #01939c;
        color: #fff;
    }

    .tab-group .active a {
        background: #01939c;
        color: #fff;
    }

    .tab-content>div:last-child {
        display: none;
    }

    .tab-group {
        border-radius: 15px !important;
        margin: 20px;
    }

    h1 {
        text-align: center;
        color: #fff;
        font-weight: 300;
        margin: 0 0 40px;
    }

    input,
    textarea {
        font-size: 17px;
        display: block;
        width: 100%;
        height: 100%;
        padding: 5px 10px;
        background: none;
        background-image: none;
        border: 1px solid #01939c;
        color: #fff;
        border-radius: 6px;
        transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    textarea {
        border: 2px solid #01939c;
        resize: vertical;
    }

    .field-wrap {
        position: relative;
        margin-bottom: 40px;
    }

    .top-row:after {
        content: "";
        display: table;
        clear: both;
    }

    .top-row>div {
        float: left;
        width: 48%;
        margin-right: 4%;
    }

    .top-row>div:last-child {
        margin: 0;
    }

    .button {
        border: 0;
        outline: none;
        border-radius: 15px;
        padding: 15px 0;
        font-size: 20px;
        font-weight: 400;
        letter-spacing: 0.1em;
        background: #01939c;
        cursor: pointer;
        color: #fff;
        transition: all 0.5s ease;
        -webkit-appearance: none;
    }

    .button:hover,
    .button:focus {
        background: #025c61;
    }

    .button-block {
        display: block;
        width: 100%;
    }

    .forgot {
        margin-top: -20px;
        text-align: right;
    }

    /* styles.css */

    .custom-alert {
        background: linear-gradient(135deg, #3cd8b7, #2980b9);
        position: relative;
        justify-content: center;
        align-items: center;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 400px;
        /* Sesuaikan lebar sesuai kebutuhan */
        text-align: center;
        /* Tengahkan teks pesan */
        z-index: 1000;
        /* Tetapkan z-index yang tinggi */
        animation: fadeOut 0.5s ease;
        /* Animasi perubahan opacity saat elemen dihapus */
    }

    .custom-alert.hide {
        animation: fadeOut 0.5s ease;
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
            display: none;
        }
    }

    .custom-alert .text-success {
        font-weight: bold;
    }

    .custom-alert.show {
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-20px);
            /* Animasi sedikit dari atas ke bawah */
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Style the modal body */
    .modal-body {
        padding: 20px;
    }

    /* Style the images */
    /* Style the modal body */
    .modal-body {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-items: flex-start;
    }

    /* Style the images */
    .modal-body img {
        max-width: 26%;
        /* Ensure images don't exceed the modal width */
        margin: 10px;
        /* Add space between images */
        cursor: pointer;
        /* Change cursor to a pointer on hover */
        transition: transform 0.2s;
        /* Add a smooth hover effect */
        flex: 0 0 calc(25% - 20px);
        /* Four images per row, adjust margin accordingly */
        box-sizing: border-box;
        /* Include margins in the image size calculation */
    }

    /* Define the hover effect for images */
    .modal-body img:hover {
        transform: scale(1.1);
        /* Scale the image on hover (makes it slightly larger) */
    }

    /* Add space at the top of the modal body */
    .modal-body {
        padding-top: 10px;
    }

    /* Adjust the space between images on larger screens */
    @media (min-width: 768px) {
        .modal-body img {
            margin: 15px;
            /* Increase margin for larger screens */
        }
    }

    .img-thumbnail {
        max-width: 26%;
    }
</style>

<body>
    <?= $this->session->flashdata('admin_message') ?>

    <div class="form">
        <ul class="tab-group">
            <li class="tab"><a href="#signup" style="border-radius: 15px!important;margin-right:8x;">Sign Up</a>
            </li>
            <li class="tab active"><a href="#login" style="border-radius: 15px!important;margin-left:8px;">Log In</a>
            </li>
        </ul>
        <div class="tab-content">

            <div id="login">
                <h1>Welcome Back!</h1>
                <form action="<?= base_url('login/login') ?>" method="post">
                    <div class="field-wrap">
                        <input type="text" name="username" required placeholder="Email" />
                    </div>
                    <div class="field-wrap">
                        <input type="password" name="password" required placeholder="Password" />
                    </div>
                    <p class="forgot"><a href="https://www.web-leb.com/code">Forgot Password?</a></p>
                    <button class="button button-block" />Login</button>
                </form>
            </div>
            <div id="signup">
                <h1>Register</h1>
                <form action="<?= base_url('login/register') ?>" method="post">
                    <div class="field-wrap">
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#imageModal">
                            Select Image
                        </button>
                        <img id="selectedProfileImage" src="" alt="Selected Profile Image" class="img-thumbnail">
                        <input type="hidden" value="" id="profileInput" name="profile">
                    </div>
                    <div class="field-wrap">
                        <input type="text" name="nama_user" required placeholder="Name" />
                    </div>
                    <div class="field-wrap">
                        <input type="email" name="email" required placeholder="Email Address" />
                    </div>
                    <div class="field-wrap">
                        <input type="number" name="no_hp" required placeholder="Number Phone" />
                    </div>
                    <div class="field-wrap">
                        <input type="text" name="username" required placeholder="Username" />
                    </div>
                    <div class="field-wrap">
                        <input type="password" name="password" required placeholder="Password" />
                    </div>
                    <input type="hidden" id="imageInput" name="selectedImage" />
                    <button type="submit" class="button button-block" />Sign Up</button>
                </form>
            </div>

        </div>
    </div>

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Select an Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Here, you can display a list of pre-existing images -->
                    <img src="<?= base_url('assets/img/profile/avatar1.png'); ?>" value="avatar1.png" alt="Image 1" class="img-thumbnail">
                    <img src="<?= base_url('assets/img/profile/avatar2.png'); ?>" value="avatar2.png" alt="Image 2" class="img-thumbnail">
                    <img src="<?= base_url('assets/img/profile/avatar3.png'); ?>" value="avatar3.png" alt="Image 3" class="img-thumbnail">
                    <img src="<?= base_url('assets/img/profile/avatar4.png'); ?>" value="avatar4.png" alt="Image 3" class="img-thumbnail">
                    <img src="<?= base_url('assets/img/profile/avatar5.png'); ?>" value="avatar5.png" alt="Image 3" class="img-thumbnail">
                    <img src="<?= base_url('assets/img/profile/avatar6.png'); ?>" value="avatar6.png" alt="Image 3" class="img-thumbnail">
                    <img src="<?= base_url('assets/img/profile/avatar7.png'); ?>" value="avatar7.png" alt="Image 3" class="img-thumbnail">
                    <img src="<?= base_url('assets/img/profile/avatar8.png'); ?>" value="avatar8.png" alt="Image 3" class="img-thumbnail">
                    <!-- Add more images as needed -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        // Ambil elemen pesan flash
        var alertElement = document.querySelector('.custom-alert');

        // Tentukan waktu dalam milidetik sebelum pesan flash akan dihilangkan (misalnya, 5000ms atau 5 detik)
        var delay = 5000; // Anda dapat mengganti nilai ini sesuai kebutuhan

        // Setelah jangka waktu tertentu, sembunyikan pesan flash dengan animasi
        setTimeout(function() {
            if (alertElement) {
                alertElement.style.transition = 'opacity 1s ease';
                alertElement.style.opacity = '0';
                setTimeout(function() {
                    alertElement.style.display = 'none';
                }, 1000); // Waktu tambahan untuk menghapus elemen setelah animasi selesai
            }
        }, delay);
    </script>

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