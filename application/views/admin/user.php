<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mx-auto" data-bs-toggle="modal" data-bs-target="#tambahPemesananModal">
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
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>