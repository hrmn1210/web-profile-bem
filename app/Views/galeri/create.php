<form action="<?= base_url('galeri/store') ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="judul" placeholder="Judul Kegiatan" required>
    <textarea name="deskripsi" placeholder="Deskripsi" required></textarea>
    <select name="kategori" required>
        <option value="pengabdian">Pengabdian</option>
        <option value="seminar">Seminar</option>
        <option value="lomba">Lomba</option>
        <option value="internal">Internal</option>
    </select>
    <input type="file" name="gambar" accept="image/*" required>
    <button type="submit">Simpan</button>
</form>