<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 ">
                <div class="about-img"><img src="img/about.jpg" class="img-responsive" alt=""></div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="about-text">
                    <h2>Our Restaurant</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.
                        Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam
                        commodo nibh.</p>
                    <h3>Awarded Chefs</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.
                        Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
    <div class="section-title text-center center">
        <div class="overlay">
            <h2>Facility</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($fasilitas as $kategori => $facilities) : ?>
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">
                            <?= $kategori; ?>
                        </h2>
                        <hr>

                        <?php foreach ($facilities as $facility) : ?>
                            <div class="menu-item">
                                <div class="menu-item-name">
                                    <?= $facility['nama_fasilitas']; ?>
                                </div>
                                <div class="menu-item-description">
                                    <?= $facility['deskripsi_fasilitas']; ?>
                                </div>
                                <div class="menu-item-price">
                                    Free
                                </div>
                                <div class="menu-item-foto">
                                    <img src="<?= base_url('assets/admin/img/fasilitas/') . $facility['gambar_fasilitas']; ?>" alt="<?= $facility['nama_fasilitas']; ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>

    <!-- Portfolio Section -->
    <div id="portfolio">
        <div class="section-title text-center center">
            <div class="overlay">
                <h2>Room</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="categories">
                    <ul class="cat">
                        <li>
                            <ol class="type">
                                <li><a data-filter="*" class="active">All</a></li>
                                <li><a data-filter=".standard">Standard</a></li>
                                <li><a data-filter=".suite">Suite</a></li>
                                <li><a data-filter=".family">Family</a></li>
                                <li><a data-filter=".superior">Superior</a></li>
                            </ol>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="portfolio-items">

                    <?php foreach ($kamar as $no => $data) : ?>

                        <div class="col-sm-6 col-md-4 col-lg-4 <?= $data['jenis_kamar']; ?>">
                            <div class="portfolio-item">
                                <div class="hover-bg">
                                    <a href="<?= base_url('assets/admin/img/kamar/' . $data['gambar_kamar']); ?>" title="Kamar No. <?= $data['nomor_kamar']; ?>" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Kamar No.
                                                <?= $data['nomor_kamar']; ?>
                                            </h4>
                                        </div>
                                        <img src="<?= base_url('assets/admin/img/kamar/' . $data['gambar_kamar']); ?>" alt="Project Title">
                                    </a>
                                </div>
                                <a href="<?= base_url('beranda/detailKamar/' . $data['id']) ?>" class="btn btn-primary" style="margin-top:  10px;">Detail Dan
                                    Pesan</a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Team Section -->
    <div id="team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 section-title">
                    <h2>Meet Our Chefs</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
                </div>
                <div id="row">
                    <div class="col-md-4 team">
                        <div class="thumbnail">
                            <div class="team-img"><img src="img/team/01.jpg" alt="..."></div>
                            <div class="caption">
                                <h3>Mike Doe</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare
                                    diam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 team">
                        <div class="thumbnail">
                            <div class="team-img"><img src="img/team/02.jpg" alt="..."></div>
                            <div class="caption">
                                <h3>Chris Doe</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare
                                    diam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 team">
                        <div class="thumbnail">
                            <div class="team-img"><img src="img/team/03.jpg" alt="..."></div>
                            <div class="caption">
                                <h3>Ethan Doe</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare
                                    diam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call Reservation Section -->
    <div id="call-reservation" class="text-center">
        <div class="container">
            <h2>Want to make a reservation? Call <strong>1-887-654-3210</strong></h2>
        </div>
    </div>
    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Form</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                </form>
            </div>
        </div>
    </div>