<!-- Team Section -->
<section id="team" class="team section" style="margin-top: 100px;">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2 class="fw-bold text-dark">Pengurus BEM</h2>
        <p class="text-muted">Struktur Kepengurusan BEM UBSI PSDKU Pontianak</p>
    </div>

    <div class="container">
        <div class="row gy-4">

            <?php foreach ($anggota as $person): ?>
                <?php
                $foto = (!empty($person['foto']) && file_exists(FCPATH . 'uploads/anggota/' . $person['foto']))
                    ? $person['foto']
                    : 'default.jpg';
                ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="card border border-warning shadow-sm w-100">

                        <img src="<?= base_url('uploads/anggota/' . $foto) ?>" class="card-img-top" alt="<?= esc($person['nama']) ?>" style="height: 300px; object-fit: cover;">

                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold text-dark mb-1"><?= esc($person['nama']) ?></h5>
                            <p class="card-text text-muted mb-2"><?= esc($person['jabatan']) ?></p>

                            <div class="d-flex justify-content-center gap-2">
                                <a href="#"><i class="bi bi-twitter-x text-dark"></i></a>
                                <a href="#"><i class="bi bi-facebook text-dark"></i></a>
                                <a href="#"><i class="bi bi-instagram text-dark"></i></a>
                                <a href="#"><i class="bi bi-linkedin text-dark"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

</section><!-- /Team Section -->