
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form class="form-control" method="POST" action="home">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="mb-3">
            <label for="tl" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tl" id="tl">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat">
        </div>
        <div class="mb-3">
            <label for="id_user" class="form-label">Id User</label>
            <input type="text" class="form-control" name="id_user" id="id_user">
        </div>
    </form>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary modal-footer-button">Simpan Data</button>
      </div>
    </div>
    </form>
  </div>
</div>
<p>Selamat datang di Admin Panel.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                        <button type="button" class="card-title tambah btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
 Tambah Data User
</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text">Jumlah total pengguna yang terdaftar.</p>
                        </div>
                    </div>
                </div>
            </div>
