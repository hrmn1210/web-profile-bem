<h2>Edit Anggota</h2>
<form action="/anggota/update/<?= $anggota['id'] ?>" method="post" enctype="multipart/form-data">
    Nama: <input type="text" name="nama" value="<?= $anggota['nama'] ?>"><br>
    Email: <input type="text" name="email" value="<?= $anggota['email'] ?>"><br>
    Jabatan: <input type="text" name="jabatan" value="<?= $anggota['jabatan'] ?>"><br>
    Foto: <input type="file" name="foto"><br>
    <?php if ($anggota['foto']): ?>
        <img src="/uploads/anggota/<?= $anggota['foto'] ?>" width="100">
    <?php endif ?>
    <br><button type="submit">Update</button>
</form>