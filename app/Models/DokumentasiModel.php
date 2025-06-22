<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumentasiModel extends Model
{
    protected $table = 'dokumentasi_kegiatan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'deskripsi', 'gambar', 'kategori'];
    protected $useTimestamps = true;
}
