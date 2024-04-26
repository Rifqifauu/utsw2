<p class="h3">Tabel Mata Kuliah</p>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th></th> <!-- Kolom untuk tombol edit -->
            <th></th> <!-- Kolom untuk tombol delete -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($matakuliah as $row): ?>
            <tr>
                <td><?= $row['id_matakuliah'] ?></td>
                <td><?= $row['nama_matakuliah'] ?></td>
                <td>
                    <a href="<?= base_url('matakuliah/editMatakuliah/' . $row['id_matakuliah']) ?>" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="<?= base_url('matakuliah/deleteMatakuliah/' . $row['id_matakuliah']) ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
