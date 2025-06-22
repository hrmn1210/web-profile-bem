<section id="detail-galeri" style="margin-top: 100px;">
    <div class="container">

        <div class="section-title">
            <h2 class="fw-bold text-dark">Detail Galeri</h2>
            <p><?= esc($galeri['judul']) ?></p>
        </div>

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="<?= base_url('uploads/galeri/' . $galeri['gambar']) ?>" class="img-fluid w-100" alt="<?= esc($galeri['judul']) ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Info Kegiatan</h3>
                    <ul>
                        <li><strong>Kategori</strong>: <?= esc(ucfirst($galeri['kategori'])) ?></li>
                        <li><strong>Tanggal</strong>: <?= date('d M Y', strtotime($galeri['created_at'])) ?></li>
                    </ul>
                </div>
                <div class="portfolio-description mt-4">
                    <h4>Deskripsi</h4>
                    <p><?= esc($galeri['deskripsi']) ?></p>
                </div>
                <a href="<?= base_url('galeri') ?>" class="btn btn-outline-primary mt-3">← Kembali ke Galeri</a>
            </div>

        </div>

    </div>
</section>