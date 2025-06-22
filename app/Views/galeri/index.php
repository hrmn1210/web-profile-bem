<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section" style="margin-top: 100px;">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2 class="fw-bold text-dark">Galeri Kegiatan</h2>

        <p class="text-muted">Dokumentasi kegiatan BEM UBSI PSDKU Pontianak</p>
    </div>

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <!-- Filter kategori -->
            <ul class="portfolio-filters isotope-filters text-center mb-4" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active btn btn-sm btn-warning me-2 fw-bold text-dark">Semua</li>
                <li data-filter=".filter-pengabdian" class="btn btn-sm btn-outline-warning me-2 fw-bold text-dark">Pengabdian</li>
                <li data-filter=".filter-seminar" class="btn btn-sm btn-outline-warning me-2 fw-bold text-dark">Seminar</li>
                <li data-filter=".filter-lomba" class="btn btn-sm btn-outline-warning me-2 fw-bold text-dark">Lomba</li>
                <li data-filter=".filter-internal" class="btn btn-sm btn-outline-warning fw-bold text-dark">Internal</li>
            </ul>

            <!-- Konten galeri -->
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <?php if (!empty($galeri)): ?>
                    <?php foreach ($galeri as $item): ?>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?= esc($item['kategori']) ?>">
                            <div class="card shadow-sm border-0">
                                <img src="<?= base_url('uploads/galeri/' . $item['gambar']) ?>" class="img-fluid rounded-top" alt="<?= esc($item['judul']) ?>">
                                <div class="portfolio-info p-3">
                                    <h5 class="fw-bold"><?= esc($item['judul']) ?></h5>
                                    <p class="text-muted small mb-2"><?= esc($item['deskripsi']) ?></p>
                                    <div class="d-flex gap-3">
                                        <a href="<?= base_url('uploads/galeri/' . $item['gambar']) ?>"
                                            title="<?= esc($item['judul']) ?>"
                                            data-gallery="portfolio-gallery-<?= esc($item['kategori']) ?>"
                                            class="glightbox preview-link text-warning">
                                            <i class="bi bi-zoom-in"></i>
                                        </a>
                                        <a href="<?= base_url('galeri/' . $item['id']) ?>"
                                            title="Detail Kegiatan"
                                            class="details-link text-secondary">
                                            <i class="bi bi-link-45deg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p class="text-muted">Belum ada dokumentasi kegiatan yang tersedia.</p>
                    </div>
                <?php endif; ?>

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->