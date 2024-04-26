<p class="h3">Tabel Mahasiswa</p>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>ID User</th>
            <th></th> <!-- Kolom untuk tombol edit -->
            <th></th> <!-- Kolom untuk tombol delete -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $row): ?>
            <tr>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['tanggal_lahir'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['id_user'] ?></td>
                <td>
                    <a href="<?= base_url('mahasiswa/editMahasiswa/' . $row['nim']) ?>" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="<?= base_url('mahasiswa/deleteMahasiswa/' . $row['nim']) ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
