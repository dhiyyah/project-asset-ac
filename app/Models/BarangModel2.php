<?php
namespace App\Models;
use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';

    protected $returnType     = 'array';
    protected $allowedFields = ['id_kategori_barang', 'nama_barang', 'merek', 'tahun_perolehan'];
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_dibuat';
    protected $db;
    
    public function __construct() 
    {
        echo $this->table;
        parent::__construct();
        $this->db = db_connect();
    }

    public function select()
    {
        $this->db->query(' ');
    }

    public function tambahData()
    {
        
    }


}