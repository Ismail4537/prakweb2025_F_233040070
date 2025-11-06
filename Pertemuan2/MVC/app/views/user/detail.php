    <div class="container">
        <h1>Selamat Datang, <?= htmlspecialchars($data['user']['name']);?></h1>
        <h1>Email, <?= htmlspecialchars($data['user']['email']);?></h1>
        <a href="<?=BASEURL?>/user" class="btn btn-primary">Kembali ke daftar</a>
    </div>