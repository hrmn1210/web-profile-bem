  <h2>Daftar Blog</h2>
  <a href="/blog/create" class="btn btn-primary mb-3">Tulis Blog Baru</a>

  <?php foreach ($blog as $b): ?>
      <div class="card mb-3">
          <div class="card-body">
              <h4 class="card-title"><?= esc($b['judul']) ?></h4>
              <p class="card-text"><?= character_limiter(strip_tags($b['isi']), 150) ?></p>
              <p class="card-text text-muted">Ditulis oleh <?= esc($b['penulis']) ?></p>
              <a href="/blog/edit/<?= $b['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="/blog/delete/<?= $b['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus blog ini?')">Hapus</a>
          </div>
      </div>
  <?php endforeach ?>