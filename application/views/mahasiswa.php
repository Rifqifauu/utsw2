<p>Selamat datang di Admin Panel.</p>
<div class="row" >
    <div class="col-lg-10">
    <table class="table table-secondary">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>ID User</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['tanggal_lahir']; ?></td>
                    <td><?= $mhs['alamat']; ?></td>
                    <td><?= $mhs['id_user']; ?></td>
                    <td>
    <a href="<?= base_url('mahasiswa/deleteMahasiswa/' . $mhs['id_user']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus Data</a>
</td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>