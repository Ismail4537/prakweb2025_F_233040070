  <div class="container">

    <div class="row mt-4">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <h1 class="mb-4">Daftar Pengguna</h1>
    <!-- Add user -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
      Tambah user
    </button>
    <!-- Add user -->
    <table class="table user-table table-bordered mt-4">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['users'] as $user): ?>
            <tr>
                <td><?=htmlspecialchars($user['name'])?></td>
                <td><?=htmlspecialchars($user['email'])?></td>
                <td>
                  <a href="<?=BASEURL?>/user/detail/<?=$user['id']?>" class="btn btn-secondary btn-sm">Detail</a>
                  <a href="<?=BASEURL?>/user/ubah/<?=$user['id']?>" class="btn btn-warning btn-sm tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $user['id']?>">Edit</a>
                  <a href="<?=BASEURL?>/user/hapus/<?=$user['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>

<!-- Add Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="<?=BASEURL?>/user/tambah" method="post">
          <input type="hidden" name="id" id="id">
            <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah user</button>
        </form>
      </div>

    </div>
  </div>
</div>