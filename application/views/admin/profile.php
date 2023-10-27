

<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body" id="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?= base_url('assets/img/profile/') . $user['profile'] ?>" alt="" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>
                                    <?= ucwords($user['nama_user']); ?>
                                </h4>
                            </div>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#editModal">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <h5>
                                    <?= $user['nama_user']; ?>
                                </h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Username</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <h5>
                                    <?= $user['username']; ?>
                                </h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <h5>
                                    <?= $user['email']; ?>
                                </h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <h5>
                                    <?= $user['no_hp']; ?>
                                </h5>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
            </div>
            <div class="modal-body">
                <!-- Tambahkan form untuk mengedit profil di sini -->
                <form action="<?= base_url('beranda/editnama/') . $user['id']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="level" value="<?= $user['level']; ?>" id="" readonly>
                    </div>

                    <div class="field-wrap">
                        <img src="<?= base_url('assets/img/profile/avatar1.png'); ?>" value="avatar1.png" style="max-width:54px;" alt="Image 1" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar2.png'); ?>" value="avatar2.png" style="max-width:54px;" alt="Image 2" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar3.png'); ?>" value="avatar3.png" style="max-width:54px;" alt="Image 3" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar4.png'); ?>" value="avatar4.png" style="max-width:54px;" alt="Image 3" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar5.png'); ?>" value="avatar5.png" style="max-width:54px;" alt="Image 3" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar6.png'); ?>" value="avatar6.png" style="max-width:54px;" alt="Image 3" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar7.png'); ?>" value="avatar7.png" style="max-width:54px;" alt="Image 3" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar8.png'); ?>" value="avatar8.png" style="max-width:54px;" alt="Image 3" class="img-thumbnail">

                        <img id="selectedProfileImage" src="" alt="Selected Profile Image" width="100" class="img-thumbnail">
                        <input type="hidden" value="" id="profileInput" name="profile">
                    </div>

                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" name="nama_user" id="" value="<?= $user['nama_user']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="" value="<?= $user['username']; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>