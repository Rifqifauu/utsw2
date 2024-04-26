<p class="h3">Tabel Jadwal Mahasiswa</p>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID Jadwal Mahasiswa</th>
            <th>ID Jadwal</th>
            <th>NIM</th>
            <th></th> <!-- Kolom untuk tombol edit -->
            <th></th> <!-- Kolom untuk tombol delete -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jadwal_mahasiswa as $row): ?>
            <tr>
                <td><?= $row['id_jadwal_mahasiswa'] ?></td>
                <td><?= $row['id_jadwal'] ?></td>
                <td><?= $row['nim'] ?></td>
                <td>
                    <a href="<?= base_url('jadwal_mahasiswa/editJadwalMahasiswa/' . $row['id_jadwal_mahasiswa']) ?>" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="<?= base_url('jadwal_mahasiswa/deleteJadwalMahasiswa/' . $row['id_jadwal_mahasiswa']) ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
