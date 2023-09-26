<?php

namespace App\Models;

use CodeIgniter\Model;

class SubKriteriaModel extends Model
{
    protected $table = 'sub_kriteria';
    protected $primaryKey = 'id_sub_kriteria';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $usSoftDeletes = true;

    protected $allowedFields = ['id_kriteria','nama_sub_kriteria', 'bobot'];
}
