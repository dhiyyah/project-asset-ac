<?php
namespace App\Models;
use CodeIgniter\Model;

class AsetModel extends Model
{
    protected $table      = 'aset';
    protected $primaryKey = 'id_aset';

    protected $returnType     = 'array';

    protected $allowedFields = [
        'id_barang',
        'kode_aset',
        'nama_aset',
        'volume',
        'satuan',
        'kondisi',
        'lokasi_aset',
        'umur_ekonomis',
        'nilai_aset'
    ];
}
?>