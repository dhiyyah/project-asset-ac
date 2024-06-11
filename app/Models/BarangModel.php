<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table     = 'barang';
    protected $primaryKey = 'id_barang';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = [
        'id_kategori_barang',
        'nama_barang',
        'merek',
        'tahun_perolehan'
    ];

}