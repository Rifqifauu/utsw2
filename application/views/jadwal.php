<p class="h3">Tabel Jadwal</p>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID Jadwal</th>
            <th>ID Mata Kuliah</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Nama Ruang</th>
            <th>ID User</th>
            <th></th> <!-- Kolom untuk tombol edit -->
            <th></th> <!-- Kolom untuk tombol delete -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jadwal as $row): ?>
            <tr>
                <td><?= $row['id_jadwal'] ?></td>
                <td><?= $row['id_matakuliah'] ?></td>
                <td><?= $row['jam_mulai'] ?></td>
                <td><?= $row['jam_selesai'] ?></td>
                <td><?= $row['nama_ruang'] ?></td>
                <td><?= $row['id_user'] ?></td>
                <td>
                    <a href="<?= base_url('jadwal/editJadwal/' . $row['id_jadwal']) ?>" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="<?= base_url('jadwal/deleteJadwal/' . $row['id_jadwal']) ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
