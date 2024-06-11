<?php
namespace App\Models;
use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori_barang';
    protected $primaryKey = 'id_kategori';

    protected $returnType     = 'array';
    protected $allowedFields = ['kode_kategori', 'nama_kategori'];
    
    public function __construct() 
    {
        parent::__construct();
        $this->db = db_connect();
    }


}