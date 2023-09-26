<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamModel extends Model
{
    protected $table = 'peminjam';
    protected $primaryKey = 'id_peminjam';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['nama', 'jenis_kelamin', 'formulir', 'jenis_usaha', 'periode_pinjaman', 'anggunan', 'total_pinjaman'];
}
