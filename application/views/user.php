<p class="h3">Tabel Users</p>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID User</th>
            <th>Username</th>
            <th>Password</th>
            <th></th> <!-- Kolom untuk tombol edit -->
            <th></th> <!-- Kolom untuk tombol delete -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $row): ?>
            <tr>
                <td><?= $row['id_user'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['password'] ?></td>
                <td>
                    <a href="<?= base_url('users/editUser/' . $row['id_user']) ?>" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="<?= base_url('users/deleteUser/' . $row['id_user']) ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
