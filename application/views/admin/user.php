<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mx-auto" data-bs-toggle="modal" data-bs-target="#tambahPemesananModal">
    Tambah Akun
</button>

<?= $this->session->flashdata('admin_message') ?>

<div class="row">
    <?php foreach ($user as $no => $data): ?>
        <div class="col-md-3">
            <div class="card mx-auto mt-3">
                <div class="card-body">
                    <h5 class="card-title">
                        Nama User:
                        <?= $data['nama_user']; ?>
                    </h5>
                    <p class="card-text">
                        Username:
                        <?= $data['username']; ?>
                    </p>
                    <p class="card-text">
                        Email:
                        <?= $data['email']; ?>
                    </p>
                    <p class="card-text">
                        No Hp:
                        <?= $data['no_hp']; ?>
                    </p>
                    <p class="card-text">
                        Level:
                        <?= $data['level']; ?>
                    </p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#editModal<?= $data['id']; ?>">Edit</button>
                    <a class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal<?= $data['id']; ?>">Delete</a>
                </div>
            </div>
        </div>

        <?php endforeach; ?>