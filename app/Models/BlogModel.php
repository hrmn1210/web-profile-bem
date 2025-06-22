<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'blog';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'isi', 'penulis'];
    protected $useTimestamps = true;
}
