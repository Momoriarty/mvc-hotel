<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mx-auto" data-bs-toggle="modal" data-bs-target="#modalTambahUser">
    Tambah Akun
</button>

<?= $this->session->flashdata('admin_message') ?>


<div class="card shadow mb-4 mt-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No Hp:</th>
                        <th>Level:</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No Hp:</th>
                        <th>Level:</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($user as $no => $data): ?>

                        <tr>
                            <td>
                                <img src="<?= base_url('assets/img/profile/') . $data['profile'] ?>" width="100" alt="">
                            </td>
                            <td>
                                <?= $data['nama_user']; ?>
                            </td>
                            <td>
                                <?= $data['username']; ?>
                            </td>
                            <td>
                                <?= $data['email']; ?>
                            </td>
                            <td>
                                <?= $data['no_hp']; ?>
                            </td>
                            <td>
                                <?= $data['level']; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editModal<?= $data['id']; ?>">Edit</button>
                                <a class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal<?= $data['id']; ?>">Delete</a>
                            </td>
                        </tr>

                        <div class="modal fade" id="editModal<?= $data['id']; ?>" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel<?= $data['id']; ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel<?= $data['id']; ?>">Edit User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('beranda/editnama/') . $data['id']; ?>" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="nama_user">Nama User</label>
                                                <input type="text" class="form-control" id="nama_user" name="nama_user"
                                                    value="<?= $data['nama_user']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">username</label>
                                                <input type="username" class="form-control" id="username" name="username"
                                                    value="<?= $data['username']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="level">Level</label>
                                                <select name="level" id="level" class="form-control">
                                                    <option value="admin" <?= $data['level'] === 'admin' ? 'selected' : ''; ?>>
                                                        admin</option>
                                                    <option value="user" <?= $data['level'] === 'user' ? 'selected' : ''; ?>>
                                                        user</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="deleteModal<?= $data['id']; ?>" tabindex="-1" role="dialog"
                            aria-labelledby="deleteModalLabel<?= $data['id']; ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel<?= $data['id']; ?>">Delete User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete the user:
                                            <?= $data['nama_user']; ?>?
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="<?= base_url('login/hapus/' . $data['id']); ?>"
                                            class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah User -->
<div class="modal fade" id="modalTambahUser" tabindex="-1" role="dialog" aria-labelledby="modalTambahUserLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahUserLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('login/register') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Profile</label><br>
                        <img src="<?= base_url('assets/img/profile/avatar1.png'); ?>" value="avatar1.png"
                            style="max-width:53px;" alt="Image 1" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar2.png'); ?>" value="avatar2.png"
                            style="max-width:53px;" alt="Image 2" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar3.png'); ?>" value="avatar3.png"
                            style="max-width:53px;" alt="Image 3" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar4.png'); ?>" value="avatar4.png"
                            style="max-width:53px;" alt="Image 3" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar5.png'); ?>" value="avatar5.png"
                            style="max-width:53px;" alt="Image 3" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar6.png'); ?>" value="avatar6.png"
                            style="max-width:53px;" alt="Image 3" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar7.png'); ?>" value="avatar7.png"
                            style="max-width:53px;" alt="Image 3" class="img-thumbnail">
                        <img src="<?= base_url('assets/img/profile/avatar8.png'); ?>" value="avatar8.png"
                            style="max-width:53px;" alt="Image 3" class="img-thumbnail">

                        <img id="selectedProfileImage" src="" alt="Selected Profile Image" width="100"
                            class="img-thumbnail">
                        <input type="hidden" value="" id="profileInput" name="profile">
                    </div>
                    <div class="form-group">
                        <label for="nama_user">Nama User</label>
                        <input type="text" class="form-control" id="nama_user" name="nama_user">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No. HP</label>
                        <input type="tel" class="form-control" id="no_hp" name="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select name="level" id="" class="form-control">
                            <option value="">Pilih Level</option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>