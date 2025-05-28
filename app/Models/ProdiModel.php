<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $allowedFields = ['nama', 'domisili', 'tempat_lahir', 'tanggal_lahir', 'email', 'password'];

    public function __construct() 
    {
        parent::__construct();
        $this->db = db_connect();
    }

    public function select() {
        $result = $this->$db->query("SELECT * FROM mahasiswa");
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = array(
                    "id" => $row['id'],
                    "nama" => $row['nama'],
                    "domisili" => $row['domisili'],
                    "tempat_lahir" => $row['tempat_lahir'],
                    "tanggal_lahir" => $row['tanggal_lahir']
                );
            }
            return $data;
        } else {
            return [];
        }
    }

}

?>
